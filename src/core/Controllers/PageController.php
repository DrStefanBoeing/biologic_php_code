<?php

namespace Biologic\Core\Controllers;


use Biologic\Core\Classes\Request;
use Biologic\Core\Classes\Responses\FileResponse;

class PageController
{

    public static function home(Request $request)
    {
        $default_landing = setting('default_landing');
        if(empty($default_landing)) {
            $default_landing = 'report';
        }

        return redirect(url('/'.$request->route('experiment_code').'/'.$default_landing));

        return view('pages/index.twig', ['feedback' => $_GET["feedback"] ?? ""]);
    }

    public static function about(Request $request)
    {
        $slides = [];
        $html_dir = __DIR__.'/../../../mdata/'.filesafe($request->route('experiment_code')).'/slides';
        foreach(glob($html_dir . '/*') as $file) {
            $parts = explode('mdata', $file, 2);
            if(count($parts) === 2) {
                array_push($slides, url('/mdata'.$parts[1]));
            }
        }

        return view('pages/about.twig', [
            'slides' => $slides
        ]);
    }

    public static function demo(Request $request)
    {
        return new FileResponse(__DIR__."/../views/demo/index.html");
    }

}

