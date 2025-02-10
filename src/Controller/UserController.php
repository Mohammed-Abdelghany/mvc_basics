<?php

namespace Mvc\Session1\Controller;

use Mvc\Session1\Model\User;
use Mvc\Session1\View;

class UserController {

    public function all() {

      
        $post = new User;
        $data["users"]  = $post->selectAll(); // 
        
        View::render("allUsers.php" ,$data);
    }
}
