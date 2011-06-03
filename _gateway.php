<?php
require_once '_app/lib/Pinoco.php';
$pinoco = Pinoco::create("_app", array(
//    'use_mod_rewrite'  => TRUE,  // TRUE or FALSE default TRUE
      'use_path_info'    => FALSE,  // TRUE or FALSE default TRUE
//    'custom_path_info' => FALSE, // FALSE(auto) or string default FALSE
//    'directory_index'  => "index.html index.php", // string like DirectoryIndex directive default "index.html index.php"
));
if (substr(PHP_OS, 0, 3) == 'WIN') {
    if (file_exists('c:\\WINNT\\Temp\\')) {
        $cachedir = 'c:\\WINNT\\Temp\\';
    } else {
        $cachedir = 'c:\\WINDOWS\\Temp\\';
    }
}
else {
    $cachedir = '/tmp';
}
$pinoco->renderers->html->cfg->phpCodeDestination = $cachedir;
$pinoco->run();

