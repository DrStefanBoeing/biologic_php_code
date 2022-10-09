<?php

namespace Biologic\Core\Classes;

use Exception;
use Biologic\Core\Models\Setting;

const SETTINGS_FROM_DB = 1;

/**
 * Class Settings
 * @package Biologic\Core\Classes
 *
 * Handles loading settings files into the application and retrieving that data by key.
 */
class Settings {

    private static $settings = [];

    private static $capsule;

    /**
     * Merges another settings array in to the stored settings array. This will
     * overwrite old keys with new ones at the root node for that key.
     *
     * For example:
     *
     * self::$settings = array(
     *      'genes' => 'some cool string',
     *      'proteins' => array(
     *          'insulin' => array(
     *              'name' => 'Insulin',
     *              'frequency' => 5
     *          ),
     *          'oxytocin' => array(
     *              'name' => 'Oxytocin',
     *              'frequency' => 2
     *          )
     *      )
     * );
     *
     * $extra_settings = array(
     *      'proteins' => array(
     *          'oxytocin' => array(
     *              'name' => 'Oxytocin',
     *              'frequency' => 9
     *          )
     *      )
     * );
     *
     * Result of merge:
     *
     * self::$settings = array(
     *      'genes' => 'some cool string',
     *      'proteins' => array(
     *          'oxytocin' => array(
     *              'name' => 'Oxytocin',
     *              'frequency' => 9
     *          )
     *      )
     * );
     *
     * Note that while we updated the frequency of Oxytocin, Insulin is no
     * longer part of our protein array. But the genes value survives because
     * it was not one of the root nodes specified for update.
     *
     *
     * @param $extra_settings
     * @return array
     */
    public static function merge($extra_settings)
    {
        return array_merge(self::$settings, $extra_settings);
    }

    /**
     * Load another settings file based on path.
     *
     * @param $path
     */
    public static function load($path)
    {
        $extra_settings = require $path;

        self::$settings = self::merge($extra_settings);
    }

    public static function loadExperiment($experiment_code)
    {
        $extra_settings = [];

        if(SETTINGS_FROM_DB) {
            $dbsettings = Setting::where('experiment_code', $experiment_code)->first();
            $extra_settings = json_decode($dbsettings->experiment_settings, true);
        } else {
            $experiment_settings_file = __DIR__.'/../../experiments/'.$experiment_code.'/settings.php';
            $extra_settings = require $experiment_settings_file;
        }

        self::$settings = self::merge($extra_settings);
    }

    /**
     * Retrieve a setting based on key. Nested settings may be accessed using
     * a dot (.) delimiter. Returns null if the key couldn't be found.
     *
     * If a second argument is passed then the settings will instead be
     * drawn from that experiment's settings file.
     *
     * --- examples ---
     *
     * self::$settings = array(
     *      'genes' => 'some cool string',
     *      'proteins' => array(
     *          'oxytocin' => array(
     *              'name' => 'Oxytocin',
     *              'frequency' => 9
     *          )
     *      )
     * );
     *
     * $key:        'genes'
     * => returns:  'some cool string'
     *
     * $key:        'proteins.oxytocin.frequency'
     * => returns:  9
     *
     * $key:        'proteins.insulin.name'
     * => returns:  null
     *
     * @param $key
     * @param null $experiment_code
     * @return array|mixed|null
     */
    public static function get($key, $experiment_code=null)
    {
        $parts = explode('.', $key);

        $setting = self::$settings;
        if($experiment_code !== null) {
            try {
                if(SETTINGS_FROM_DB) {
                    $dbsettings = Setting::where('experiment_code', $experiment_code)->first();
                    $setting = json_decode($dbsettings->experiment_settings, true);
                } else {
                    $setting = include __DIR__ . '/../../experiments/' . filesafe($experiment_code) . '/settings.php';
                }
            } catch(Exception $e) {}
        }

        foreach($parts as $part) {
            $setting = $setting[$part] ?? null;
        }

        return $setting;
    }

    /**
     * We need to store the database capsule for later use because we are
     * registering the experiment specific databases later on in the request
     * lifecycle. This method assigns the capsule to be statically accessible.
     *
     * @param $capsule
     */
    public static function setCapsule($capsule)
    {
        self::$capsule = $capsule;
    }

    /**
     * Return the database capsule.
     *
     * @return mixed
     */
    public static function getCapsule()
    {
        return self::$capsule;
    }
}