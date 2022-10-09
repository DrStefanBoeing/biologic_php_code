<?php

namespace Biologic\Core\Controllers;

use Biologic\Core\Classes\Request;
use Biologic\Core\Classes\Response;
use Biologic\Core\Classes\Responses\FileResponse;

class MountController
{
    public static function renderFile(Request $request)
    {
        $file = __DIR__.'/../../../mdata/'.filesafe($request->route('experiment_code')).'/'.$request->route('filename');
        $dir = __DIR__.'/../../../mdata/'.filesafe($request->route('experiment_code'));

        if (strpos(realpath($file), realpath($dir)) === 0 && file_exists($file)) {
            return new FileResponse($file);
        }

        return new Response(404);
    }
}
