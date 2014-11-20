<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'global.php';
        include_once './dataOperation/MyClass.class.php';
        include_once './dataOperation/MyArea.class.php';
        include_once './dataOperation/MyStudent.class.php';
        include_once './dataOperation/MyTeacher.class.php';
        include_once 'Tools.php';
//        $myClass = new MyClass($myPDO);
//        $myClass->myEcho($myClass->getClassNameById(3));
//        
//        $myArea = new MyArea($myPDO);
//        $name = $myArea->getNameById(3);
//        $MyStudent = new MyStudent($myPDO);
//        $MyStudent->myEcho($MyStudent->getAllById(">0"));
//        
        $MyTeacher = new MyTeacher($myPDO);
        $all = $MyTeacher->getAllById(">0");
        echo $all;
        Tools::toArray($all);
        foreach ($all as $value) {
            echo $value['name'];
//            foreach ($value as $key => $value) {
//            if(!is_int($key))
//              echo $key.">=".$value."   ";  
//                
//            }
            echo"<br/>";
        }
        ?>

        <select>
            <option>Volvo</option>
            <option>Saab</option>
            <option>Mercedes</option>
            <option>Audi</option>
        </select>
    </body>
</html>
