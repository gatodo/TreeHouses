<?php

/*
 *  resources.php
 *  an include file to define all resource locations relative to current file
 *
 *  hedon
 */

    function define_resources($relative_loc){
        define("__SCRIPTS__",relative_loc . "/cgi-bin");
        define("__RESOURCES__",relative_loc . "/resources");
    }