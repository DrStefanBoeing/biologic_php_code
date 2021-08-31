<?php

namespace Biologic\Core\Controllers\Portal;

use Biologic\Core\Classes\Auth;
use Biologic\Core\Classes\Request;
use Biologic\Core\Classes\Response;
use Biologic\Core\Models\Permission;
use Biologic\Core\Models\Project;
use Biologic\Core\Models\User;

class ProjectAccessController
{
    public static function getUsers(Request $request)
    {
        $users = User::where('superuser', 0)->get();
        $project = Project::where('project_code', $request->route('project_code'))->firstOrFail();

        if(!Auth::user()->canWrite($project)) {
            return new Response(401);
        }

        return view('portal/project-users.twig', [
            'users' => $users,
            'project' => $project
        ]);
    }

    public static function postUsers(Request $request)
    {
        $project = Project::where('project_code', $request->route('project_code'))->firstOrFail();

        if(!Auth::user()->canWrite($project)) {
            return new Response(401);
        }

        $ids = $_POST['read'] ?? [];
        $users = User::where('superuser', 0)->get(); // TODO: should these users also not have write access to the project?

        foreach($users as $user) {
            if(array_key_exists($user->id, $ids)) {
                Permission::firstOrCreate([
                    'user_id' => $user->id,
                    'authable_id' => $project->id,
                    'authable_type' => 'projects',
                    'type' => 'READ'
                ]);
            } else {
                $permission = Permission::where([
                    'user_id' => $user->id,
                    'authable_id' => $project->id,
                    'authable_type' => 'projects',
                    'type' => 'READ'
                ])->first();
                if(!empty($permission)) {
                    $permission->delete();
                }
            }
        }

        set_flash('success', 'Access rights updated.');
        return view('portal/project-users.twig', [
            'users' => $users,
            'project' => $project
        ]);
    }
}

