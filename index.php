<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div id="pic">
            <a href='img/stornemo.jpg'><img src='img/nemo.jpg' alt='Nemo' title='Nemo'></a>
            <p>HittaNemo</p>
        </div>
        <?php
        $pictures = "img/*.jpg";
        foreach (glob("img/*.jpg") as $pictures){
            echo $pictures . "\n";
        }
        ?>
    </body>
</html>
