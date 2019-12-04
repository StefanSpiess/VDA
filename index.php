<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>VDA Version 1.0</title>
    </head>
    <body>
        <?php
        require './ini.php';
        if(isset($params)){
            foreach($params as $key){
                echo $key." ";
            }
        }
        ?>
    </body>
</html>
