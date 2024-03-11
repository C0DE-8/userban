<?php

define("WEB_TITLE","BankScript"); // Bank Name
define("WEB_URL",""); // No Ending splash
define("WEB_EMAIL",""); // Your Website Email

$web_url = WEB_URL;

function dbConnect(){
    $servername = "shareddb-r.hosting.stackcp.net";
    $username = "banker-7895";//DATABASE USERNAME
    $password = "@12345678";//DATABASE PASSWORD
    $database = "banklist-31323335ee";//DATABASE NAME
    $dns = "mysql:host=$servername;dbname=$database";

    try {
        $conn = new PDO($dns, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
//return dbConnect();

function inputValidation($value): string
{
    return trim(htmlspecialchars(htmlentities($value)));
}
