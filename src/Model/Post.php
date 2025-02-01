<?php

namespace Habiba\Session1\Model;

use Habiba\Session1\Model;

class Post extends Model {

    public function setTableName()
    {
        $this->table = "posts";
    }


}