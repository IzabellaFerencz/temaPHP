<?php
/**
 * Created by PhpStorm.
 * User: hamze
 * Date: 11/12/2018
 * Time: 11:27 AM
 */
namespace App;

class Config {
    const ENV = "prod";
    CONST DB = [
        "host" => "localhost",
        "port" => 3306,
        "driver" => "mysql",
        "dbname" => "imdb_database",
        "charset" => "utf8mb4",
        "user" => "root",
        "pass" => "",
    ];
}

