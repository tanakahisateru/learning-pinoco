<?php
require_once '_app/lib/Pinoco.php';
Pinoco::create("_app", array(
//    'use_mod_rewrite'  => TRUE,  // TRUE or FALSE default TRUE
//    'use_path_info'    => TRUE,  // TRUE or FALSE default TRUE
//    'custom_path_info' => FALSE, // FALSE(auto) or string default FALSE
//    'directory_index'  => "index.html index.php", // string like DirectoryIndex directive default "index.html index.php"
))->run();

