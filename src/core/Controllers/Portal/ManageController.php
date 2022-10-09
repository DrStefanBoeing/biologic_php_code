<?php

namespace Biologic\Core\Controllers\Portal;

use Biologic\Core\Classes\Request;
use Biologic\Core\Classes\Session;
use Biologic\Core\Models\Experiment;
use Biologic\Core\Models\Permission;
use Biologic\Core\Models\Project;
use Biologic\Core\Models\User;

class ManageController
{
    public static function listUsers()
    {
        $users = User::all();

        return view('portal/manage/user-list.twig', ['users' => $users]);
    }

    public static function getUser(Request $request)
    {
        $user = User::findOrFail($request->route('user_id'));
        $projects = Project::all();
        $experiments = Experiment::all();

        return view('portal/manage/user-edit.twig', [
            'user' => $user,
            'projects' => $projects,
            'experiments' => $experiments
        ]);
    }

    public static function postUser(Request $request)
    {
        $user = User::findOrFail($request->route('user_id'));
        $user->name = $_POST['name'];
        $user->superuser = isset($_POST['superuser']) ? 1 : 0;
        $user->local_auth = isset($_POST['local_auth']) ? 1 : 0;

        if(!empty($_POST['password'])) {
            if($_POST['password'] != $_POST['password_again']) {
                $projects = Project::all();
                $experiments = Experiment::all();

                set_flash('error', 'Passwords must match.');
                return view('portal/manage/user-edit.twig', [
                    'user' => $user,
                    'projects' => $projects,
                    'experiments' => $experiments
                ]);
            } else {
                $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            }
        }

        $user->save();

        Permission::where('user_id', $user->id)->delete();
        foreach(['projects_read', 'projects_write', 'experiments_read', 'experiments_write'] as $permission_type) {
            if(isset($_POST[$permission_type])) {
                $parts = explode('_', $permission_type, 2);

                foreach ($_POST[$permission_type] as $key => $value) {
                    Permission::create([
                        'user_id' => $user->id,
                        'authable_id' => $key,
                        'authable_type' => $parts[0],
                        'type' => strtoupper($parts[1])
                    ]);
                }
            }
        }

        set_flash('success', 'User updated.');

        return redirect(url('/manage/users/'.$user->id));
    }

    public static function getCreateUser(Request $request)
    {
        $projects = Project::all();
        $experiments = Experiment::all();

        return view('portal/manage/user-create.twig', [
            'projects' => $projects,
            'experiments' => $experiments
        ]);
    }

    public static function postCreateUser(Request $request)
    {

        $user = User::where('email', $_POST['email'])->first();
        if(!empty($user)) {
            $projects = Project::all();
            $experiments = Experiment::all();

            set_flash('error', 'User already exists');
            return view('portal/manage/user-create.twig', [
                'projects' => $projects,
                'experiments' => $experiments
            ]);
        }

        $user = new User();
        $user->email = $_POST['email'];
        $user->name = $_POST['name'];
        $user->superuser = isset($_POST['superuser']) ? 1 : 0;
        $user->local_auth = isset($_POST['local_auth']) ? 1 : 0;

        if(!empty($_POST['password'])) {
            if($_POST['password'] != $_POST['password_again']) {
                $projects = Project::all();
                $experiments = Experiment::all();

                set_flash('error', 'Passwords must match.');
                return view('portal/manage/user-create.twig', [
                    'projects' => $projects,
                    'experiments' => $experiments
                ]);
            } else {
                $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            }
        }

        $user->save();

        Permission::where('user_id', $user->id)->delete();
        foreach(['projects_read', 'projects_write', 'experiments_read', 'experiments_write'] as $permission_type) {
            if(isset($_POST[$permission_type])) {
                $parts = explode('_', $permission_type, 2);

                foreach ($_POST[$permission_type] as $key => $value) {
                    Permission::create([
                        'user_id' => $user->id,
                        'authable_id' => $key,
                        'authable_type' => $parts[0],
                        'type' => strtoupper($parts[1])
                    ]);
                }
            }
        }

        set_flash('success', 'User created.');

        return redirect(url('/manage/users/'.$user->id));
    }

    public static function listProjects()
    {
        $projects = Project::all();

        return view('portal/manage/project-list.twig', ['projects' => $projects]);
    }

    public static function editProject(Request $request)
    {
        $project = Project::findOrFail($request->route('project_id'));

        return view('portal/manage/project-edit.twig', [
            'project' => $project,
        ]);
    }

    public static function updateProject(Request $request)
    {
        $project = Project::findOrFail($request->route('project_id'));

        $project->name = $_POST['name'];
        $project->project_code = $_POST['project_code'];
        $project->description = $_POST['description'];
        $project->save();

        set_flash('success', 'Project updated!');
        return redirect(url('/manage/projects/'.$project->id));
    }

    public static function newProject()
    {
        return view('portal/manage/project-create.twig');
    }

    public static function createProject()
    {
        $project = new Project();
        $project->name = $_POST['name'];
        $project->project_code = $_POST['project_code'];
        $project->description = $_POST['description'];
        $project->save();

        set_flash('success', 'Project created!');
        return redirect(url('/manage/projects/'.$project->id));
    }

    public static function listExperiments()
    {
        $experiments = Experiment::all();

        return view('portal/manage/experiment-list.twig', ['experiments' => $experiments]);
    }

    public static function editExperiment(Request $request)
    {
        $experiment = Experiment::findOrFail($request->route('experiment_id'));
        $projects = Project::all();

        return view('portal/manage/experiment-edit.twig', [
            'experiment' => $experiment,
            'projects' => $projects
        ]);
    }

    public static function updateExperiment(Request $request)
    {
        $experiment = Experiment::findOrFail($request->route('experiment_id'));

        if($experiment->experiment_code !== $_POST['experiment_code']) {
            $experiment2 = Experiment::where('experiment_code', $_POST['experiment_code'])->first();

            if(!empty($experiment2)) {
                $projects = Project::all();

                set_flash('error', 'That experiment code is already in use.');

                return view('portal/manage/experiment-create.twig', [
                    'experiment' => $experiment,
                    'projects' => $projects
                ]);
            }
        }

        if($_POST['experiment_code'] !== filesafe($_POST['experiment_code'])) {
            $projects = Project::all();

            set_flash('error', 'The experiment code may only contain alphanumeric characters, dashes and underscores.');

            return view('portal/manage/experiment-create.twig', [
                'experiment' => $experiment,
                'projects' => $projects
            ]);
        }

        $experiment->name = $_POST['name'];
        $experiment->experiment_code = $_POST['experiment_code'];
        $experiment->main_question = $_POST['main_question'];
        $experiment->lead_scientist = $_POST['lead_scientist'];
        $experiment->description = $_POST['description'];
        $experiment->project_id = $_POST['project_id'];
        $experiment->save();

        set_flash('success', 'Experiment updated!');
        return redirect(url('/manage/experiments/'.$experiment->id));
    }

    public static function newExperiment()
    {
        $projects = Project::all();

        return view('portal/manage/experiment-create.twig', ['projects' => $projects]);
    }

    public static function createExperiment()
    {
        $experiment = Experiment::where('experiment_code', $_POST['experiment_code'])->first();
        if(!empty($experiment)) {
            $projects = Project::all();

            set_flash('error', 'That experiment code is already in use.');

            return view('portal/manage/experiment-create.twig', [
                'projects' => $projects
            ]);
        }

        if($_POST['experiment_code'] !== filesafe($_POST['experiment_code'])) {
            $projects = Project::all();

            set_flash('error', 'The experiment code may only contain alphanumeric characters, dashes and underscores.');

            return view('portal/manage/experiment-create.twig', [
                'projects' => $projects
            ]);
        }

        $experiment = new Experiment();
        $experiment->name = $_POST['name'];
        $experiment->experiment_code = $_POST['experiment_code'];
        $experiment->main_question = $_POST['main_question'];
        $experiment->lead_scientist = $_POST['lead_scientist'];
        $experiment->description = $_POST['description'];
        $experiment->project_id = $_POST['project_id'];
        $experiment->save();

        set_flash('success', 'Experiment created!');
        return redirect(url('/manage/experiments/'.$experiment->id));
    }
}
