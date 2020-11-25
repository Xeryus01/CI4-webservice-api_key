<?php

function getAPI()
{
    $db = \Config\Database::connect();
    $sql = "SELECT `api_key` FROM api_key";
    $array = $db->query($sql)->getResultArray();
    $output = array();
    foreach ($array as $api) {
        array_push($output, $api['api_key']);
    }
    return $output;
}

function isInputValid($api)
{
    if (in_array($api, getAPI())) {
        return true;
    } else {
        return false;
    }
}
