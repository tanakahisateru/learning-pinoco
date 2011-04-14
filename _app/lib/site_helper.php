<?php
// IE version check
function detect_ie_version() {
    $ie = Pinoco::newVars(array(
        'mark' => 'noie',
        'ver'  => PHP_INT_MAX,
    ));
    if(preg_match('/MSIE ([0-9]+)\.[0-9]+;/i', $_SERVER['HTTP_USER_AGENT'], $m))
    {
        $ie->mark = 'ie' . $m[1];
        $ie->ver  = intval($m[1]);
    }
    return $ie;
}

