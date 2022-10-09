<?php

namespace Biologic\Core\Controllers\Portal;

use Biologic\Core\Classes\Auth;
use Biologic\Core\Classes\Request;
use Biologic\Core\Classes\Response;
use Biologic\Core\Classes\Session;
use Biologic\Core\Models\Experiment;
use Biologic\Core\Models\Project;

class PortalController
{
    public static function index()
    {
        $user = Auth::user();

        $all_projects = Project::with(['experiments'])->get();
        $viewable_projects = [];
        $total_viewable_experiments = 0;
        if($user->isSuperuser()) {
            $viewable_projects = $all_projects;
            $total_viewable_experiments = Experiment::all()->count();
        } else {
            foreach ($all_projects as $project) {
                if ($user->canRead($project)) {
                    // project level access
                    $viewable_projects[$project->id] = $project;
                    $total_viewable_experiments += $project->experiments->count();
                } else {
                    foreach ($project->experiments as $experiment) {
                        if ($user->canRead($experiment)) {
                            // experiment level access
                            if (!isset($viewable_projects[$project->id])) {
                                $viewable_projects[$project->id] = $project;
                                $viewable_projects[$project->id]['experiments'] = array(
                                    $experiment
                                );
                            } else {
                                array_push($viewable_projects[$project->id]['experiments'], $experiment);
                            }
                            $total_viewable_experiments++;
                        }
                    }
                }
            }
        }

        return view('portal/index.twig', [
            'projects' => $viewable_projects,
            'total_experiments' => $total_viewable_experiments,
            'user' => $user
        ]);
    }

    public static function experiments()
    {
        $user = Auth::user();

        $experiments = [];
        if($user->isSuperuser()) {
            $experiments = Experiment::all();
        } else {
            foreach($user->projects as $project) {
                foreach($project->experiments as $experiment) {
                    $experiments[$experiment->id] = $experiment;
                }
            }

            foreach($user->experiments as $experiment) {
                $experiments[$experiment->id] = $experiment;
            }
        }

        return view('portal/project.twig', [
            'experiments' => $experiments
        ]);
    }

    public static function project(Request $request)
    {
        $user = Auth::user();

        $project = Project::where('project_code', $request->route('project_code'))->first();

        if($user->canRead($project)) {
            $experiments = $project->experiments;
        } else {
            $experiments = $user->experiments()->where('project_id', $project->id)->get();
        }

        if(empty($experiments)) {
            return new Response(401);
        }

        return view('portal/project.twig', [
            'project' => $project,
            'experiments' => $experiments
        ]);
    }
}

