<?php

namespace Biologic\Core\Classes;

use PDO;

/**
 * Class DB
 * @package Biologic\Core\Classes
 *
 * Manages database connections and provides the ability for querying using prepared statements.
 */
class DB
{
    /* IMPORTANT NOTE:
            we are currently treating data which is already in the database as
            trusted data for the purposes of other database queries. This data
            comes from the r script and hence the scientists themselves.
    */


    // TODO: a query builder
    // TODO: need to talk about what is trusted data r.e. limitations on escaping column names
    // at the moment things are secure since we are defining them in settings, but what if we are
    // going to get them from a database? maybe need to set up a white list for certain things in this class

    /**
     * Stores the currently open connections, with keys indicating database names.
     */
    private static $connections = [];

    /**
     * Tries to find an existing connection to the database, and return that rather than
     * creating a new connection each time we need to make a database query.
     *
     * @param $db_name
     * @return mixed
     */
    public static function getConnection($db_name)
    {
        if(!isset(self::$connections[$db_name])) {
            $host = setting('db.host');
            $db_name = is_null($db_name) ? setting('data_db_name') : $db_name;
            $user = setting('db.user');
            $password = setting('db.password');

            self::$connections[$db_name] = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
        }

        return self::$connections[$db_name];
    }

    /**
     * Queries the database and fetches the results as an associative array. Additionally allows
     * parameters to be passed through for use in prepared statements. Passing null for the db_name
     * argument will use the default database (the one defined by the 'data_db_name' key in the
     * experiment settings file).
     *
     * Example usage:
     * $query = "SELECT * FROM `agl315_gene_expr_tb` WHERE `gene`=:gene LIMIT 10";
     * $target_gene = 'HES4';
     * $db_name = 'agl_data';
     * DB::query($query, [
     *     'gene' => $target_gene
     * ], $db_name);
     *
     * @param $query
     * @param array $params
     * @param null $db_name
     * @return mixed
     */
    public static function query($query, $params=[], $db_name=null)
    {
        $conn = self::getConnection($db_name);

        $stmt = $conn->prepare($query);

        $stmt->execute($params);

        //$stmt->debugDumpParams();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
