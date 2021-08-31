<?php

namespace Biologic\Core\Classes;

/**
 * Class Logger
 * @package Biologic\Core\Classes
 */
class Logger
{
    /**
     * Where we are planning to write logs
     */
    const LOG_DIR = __DIR__.'/../../../logs/';

    /**
     * Delete logs from more than one week back.
     */
    public static function handleArchive()
    {
        foreach(glob(self::LOG_DIR . '*') as $file) {
            $file_date = str_replace('_', '-', explode('.log', basename($file))[0]);
            if(strtotime($file_date) < strtotime('-7 days')) {
                unlink($file);
            }
        }
    }

    /**
     * Log an error and its stack trace to a file.
     *
     * @param $message
     * @param $trace
     */
    public static function error($message, $trace)
    {

        self::handleArchive();

        $report = date('Y-m-d H:i:s') . ' INTERNAL SERVER ERROR: ' . $message . "\n" . $trace . "\n";

        if (!file_exists(self::LOG_DIR)) {
            mkdir(self::LOG_DIR);
        }

        file_put_contents(self::LOG_DIR . date('Y_m_d').'.log', $report,FILE_APPEND | LOCK_EX);
    }
}

