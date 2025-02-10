<?php

namespace Mvc\Session1;

class View {


    public static function render($file,$data){

        $path = "C:/xampp/htdocs/c43/group_two/week15/session1/src/view/".$file;

        if(file_exists($path)){
            
            extract($data);
            include($path);
        }else{
            die("file not found");
        }

    }
}
