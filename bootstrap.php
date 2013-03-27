<?php

/**
 * @author Thomas Mundal <thmundal@gmail.com>
 * 
 */

require_once("include/util/util.php");

/**
 * Set up list of available modules in modules folder
 */

$available_modules = [];

$handle = opendir("modules");
while($dir = readdir($handle)) {
    if($dir != "." AND $dir != "..") {
        $available_modules[] = $dir;
    }
}
?>
