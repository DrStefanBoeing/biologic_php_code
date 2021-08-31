<?php

namespace Biologic\Core\Controllers;

use Biologic\Core\Classes\Auth;
use Biologic\Core\Classes\Request;
use Biologic\Core\Models\Experiment;
use Biologic\Core\Models\Report;
use Biologic\Core\Models\ReportRevision;
use HTMLPurifier;
use HTMLPurifier_Config;

class ReportController
{
    public static function get(Request $request)
    {
        $experiment = Experiment::where('experiment_code', $request->route('experiment_code'))->firstOrFail();
        $report = Report::where('experiment_id', $experiment->id)->first();

        if(empty($report)) {
            $report = new Report([
                'content' => 'Keep notes on your experiment here.'
            ]);
            $report['experiment_id'] = $experiment->id;
            $report->save();
        }

        $user = Auth::user();
        if($user !== null && $user->canWrite($experiment)) {
            return view('pages/report.twig', ['report' => $report]);
        } else {
            return view('pages/report-public.twig', ['report' => $report]);
        }
    }

    public static function post(Request $request)
    {
        $experiment = Experiment::where('experiment_code', $request->route('experiment_code'))->firstOrFail();
        $report = Report::where('experiment_id', $experiment->id)->firstOrFail();

        $user = Auth::user();
        if($user !== null && $user->canWrite($experiment)) {
            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);
            $cleaned_content = $purifier->purify($request->input('content'));

            $report->content = $cleaned_content;
            $report->save();

            $revision = new ReportRevision();
            $revision->content = $cleaned_content;
            $revision->report_id = $report->id;
            $revision->save();

            set_flash('success', 'Report updated.');
        }

        return redirect(url('/'.$experiment->experiment_code.'/report'));
    }

    public static function getRevision(Request $request)
    {
        $revision = ReportRevision::findOrFail($request->route('revision_id'));

        return view('pages/report-revision.twig', [
            'revision' => $revision,
            'revision_id' => $revision->id
        ]);
    }

    public static function postRevision(Request $request)
    {
        $revision = ReportRevision::findOrFail($request->route('revision_id'));

        $user = Auth::user();
        if($user !== null && $user->canWrite($revision->experiment)) {
            $report = $revision->report;
            $report->content = $revision->content;
            $report->save();

            set_flash('success', 'Revision restored.');
        }

        return redirect(url('/'.$report->experiment->experiment_code.'/report'));
    }
}
