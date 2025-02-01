<?php

namespace Habiba\Session1\Controller;

use Habiba\Session1\Model\User;
use Habiba\Session1\View;

class UserController {

    public function all() {

      
        $post = new User;
        $data["users"]  = $post->selectAll(); // 
        
        View::render("allUsers.php" ,$data);
    }
}