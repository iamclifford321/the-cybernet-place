<?php

  spl_autoload_register(function( $className ){

    if (!file_exists('../classes/' . $className . '.php')) {
        return false;
    }
    
    include_once '../classes/' . $className . '.php';

  });
