<?php
header("Content-Type: text/html;charset=utf-8");

require_once('PHPTAL.php');
$this->renderers->html->cfg->outputMode = PHPTAL::HTML5;

// IE version check
$ie = Pinoco::newVars(array(
    'mark' => 'noie',
    'ver'  => PHP_INT_MAX,
));
if(preg_match('/MSIE ([0-9]+)\.[0-9]+;/i', $_SERVER['HTTP_USER_AGENT'], $m))
{
    $ie->mark = 'ie' . $m[1];
    $ie->ver  = intval($m[1]);
}
$this->autolocal->ie = $ie;
