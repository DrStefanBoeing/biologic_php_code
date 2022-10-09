<?php

namespace Biologic\Core\Controllers\Portal;

use Biologic\Core\Classes\Auth;
use Biologic\Core\Classes\Request;
use Biologic\Core\Classes\Response;
use Biologic\Core\Models\Experiment;
use Biologic\Core\Models\Permission;
use Biologic\Core\Models\User;

class ExperimentAccessController
{
    public static function getUsers(Request $request)
    {
        $users = User::where('superuser', 0)->get();
        $experiment = Experiment::where('experiment_code', $request->route('experiment_code'))->firstOrFail();

        if(!Auth::user()->canWrite($experiment)) {
            return new Response(401);
        }

        return view('portal/experiment-users.twig', [
            'users' => $users,
            'experiment' => $experiment
        ]);
    }

    public static function postUsers(Request $request)
    {
        $experiment = Experiment::where('experiment_code', $request->route('experiment_code'))->firstOrFail();

        if(!Auth::user()->canWrite($experiment)) {
            return new Response(401);
        }

        $ids = $_POST['read'] ?? [];
        $users = User::where('superuser', 0)->get(); // TODO: should these users also not have write access to the experiment?

        foreach($users as $user) {
            if(array_key_exists($user->id, $ids)) {
                Permission::firstOrCreate([
                    'user_id' => $user->id,
                    'authable_id' => $experiment->id,
                    'authable_type' => 'experiments',
                    'type' => 'READ'
                ]);
            } else {
                $permission = Permission::where([
                    'user_id' => $user->id,
                    'authable_id' => $experiment->id,
                    'authable_type' => 'experiments',
                    'type' => 'READ'
                ])->first();
                if(!empty($permission)) {
                    $permission->delete();
                }
            }
        }

        set_flash('success', 'Access rights updated.');
        return view('portal/experiment-users.twig', [
            'users' => $users,
            'experiment' => $experiment
        ]);
    }
}
