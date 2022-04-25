<?php
function redirectMessage($url, $msg = null)
{
    if (isset($msg))
        $url .= "?msg=" . urlencode($msg);

    header("Location: " . $url);
    exit();  
}

function validateField($value, $maxlen)
{
    if (empty($value))
        return false;

    if ($maxlen == 0)
        return true;

    return strlen($value) <= $maxlen;
}

function getDatabase($database)
{
    $db_auth = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../credentials.ini", true);
    return new mysqli($db_auth[$database]["db_host"], $db_auth[$database]["db_user"], $db_auth[$database]["db_pass"], $database);
}

