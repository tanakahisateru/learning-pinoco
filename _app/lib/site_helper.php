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

// current page marking
function nav_curr_mark_for($navid) {
    $currmark = 'curr';
    $p = Pinoco::instance()->path;
    switch($navid) {
    case 1:
        return $p == '/' || $p == '/index.html' ? $currmark : '';
    case 2:
        return $p == '/some.html' ? $currmark : '';
    case 3:
        return $p == '/navigation.html' ? $currmark : '';
    case 4:
        return $p == '/links.html' ? $currmark : '';
    default:
        return '';
    }
}
