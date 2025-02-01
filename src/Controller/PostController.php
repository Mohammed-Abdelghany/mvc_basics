<?php

namespace Habiba\Session1\Controller;

use Habiba\Session1\Model\Post;
use Habiba\Session1\View;

class PostController {

    public function all() {

      
        $post = new Post;
        $data["posts"]  = $post->selectAll(); // 
        
        View::render("allPosts.php" ,$data);
    }
}