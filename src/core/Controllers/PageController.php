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


    public static function snsc(Request $request)
    {
        return new FileResponse(__DIR__."/../views/snsc/index.html");
    }

    public static function hc(Request $request)
    {
        return new FileResponse(__DIR__."/../views/hc/index.html");
    }

    public static function demo(Request $request)
    {
        return new FileResponse(__DIR__."/../views/demo/index.html");
    }

    public static function ens(Request $request)
    {
        return new FileResponse(__DIR__."/../views/ens/index.html");
    }

    public static function obn(Request $request)
    {
        return new FileResponse(__DIR__."/../views/obn/index.html");
    }
    
    public static function concept(Request $request)
    {
	return new FileResponse(__DIR__."/../views/concept/index.html");
    }

    public static function job(Request $request)
    {
        return new FileResponse(__DIR__."/../views/job/index.html");
    }

    public static function internal(Request $request)
    {
        return new FileResponse("https://biologic.crick.ac.uk/mdata/job/html/index.html");
    }

    public static function sc(Request $request)
    {
        return new FileResponse(__DIR__."/../views/sc/index.html");
    }

    public static function EGCinflammation(Request $request)
    {
        return new FileResponse(__DIR__."/../views/EGCinflammation/index.html");
    }

    public static function BI(Request $request)
    {
        return new FileResponse(__DIR__."/../views/BI/index.html");
    }

    


}

