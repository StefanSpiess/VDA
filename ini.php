<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        
        set_include_path("C:/xampp/htdocs/VDA/");

        $version = "1.0";
        $app_name = "Ventum Dependency Analyzer Version". $version;

        function autoLoader($class){
            $path = "Classes/$class.php";
            if (file_exists($path)){
                require $path;
            }
        }

        spl_autoload_register('autoLoader');

        $params = filter_input_array(INPUT_GET);
        if(isset($params["testing"])){
            settype($params["testing"], "bool");
            $testing = $params["testing"];
        }

        if(isset($testing) && $testing === true){
        $testset = new TestSet();
        $output = $testset->testInitialization($app_name);
        echo $output;
        }