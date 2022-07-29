<?php

function fktWithUnset($param1 = "", $param2 = "") {

    if($param1 == "a") {
        $ret = "got a";
    } else {
        $ret = "did not get a";
    }
    if($param2 == "forget it") {
        unset ($ret);
    }
    return $ret;
}