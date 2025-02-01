<?php

namespace Habiba\Session1\Model;

use Habiba\Session1\Model;

class User extends Model {

    public function setTableName()
    {
        $this->table = "users";
    }


}