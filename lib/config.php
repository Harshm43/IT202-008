<?php

$ini = @parse_ini_file(".env");

if($ini && isset($ini["DB_URL"])){
    //load local .env file
    $url = $ini["DB_URL"];
    $DB_url = parse_url($url);
}
else{
    //load from heroku env variables
    $url = getenv("DB_URL");
    $DB_url = parse_url($url);
    
}
//attempts to handle a failure where parse_url doesn't parse properly (usually happens when special characters are included)
if (!$DB_url || count($DB_url) === 0) {
    $matches;
    $pattern = "/mysql:\/\/(\w+):(\w+)@([^:]+):(\d+)\/(\w+)/i";
    preg_match($pattern, $url, $matches);
    $DB_url["host"] = $matches[3];
    $DB_url["user"] = $matches[1];
    $DB_url["pass"] = $matches[2];
    $DB_url["path"] = "/" . $matches[5];
}
$dbhost   = $DB_url["host"];
$dbuser = $DB_url["user"];
$dbpass = $DB_url["pass"];
$dbdatabase       = substr($DB_url["path"],1);
?>
