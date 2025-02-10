<?php
namespace Mvc\Session1;

class Request {

    // get

    public function get($key) {
            if(isset($_GET[$key])) {

                return $_GET[$key];
            }else{
                return "data not found";
            }
        }

    // post
    public function post($key) {
        if(isset($_POST[$key])) {

            return $_POST[$key];
        }else{
            return "data not found";
        }
    }

    public function check($key) {
        return isset($key);
    }

    // filter
    public function clean($data) {
        return trim(htmlspecialchars($data));
    }

    // header
    public function redirect($path) {
        header("location:$path");
    }

    public function queryString() {
        return $_SERVER['QUERY_STRING'];
    }

}
