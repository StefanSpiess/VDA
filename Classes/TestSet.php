<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AutoLoader
 *
 * @author sspiess
 */
class TestSet {
    //put your code here
    
    //Test Initialization
    function testInitialization($app_name){
        $result = "Application ". $app_name ." was successfully tested for initialization.<br>"
                . "Application is in Test Mode<br>";
        return $result;
    }
}
