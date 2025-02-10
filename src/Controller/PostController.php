<?php

namespace Mvc\Session1\Controller;

use Mvc\Session1\Model\Post;
use Mvc\Session1\View;

class PostController {

    public function all() {

      
        $post = new Post;
        $data["posts"]  = $post->selectAll(); // 
        
        View::render("allPosts.php" ,$data);
    }
}
