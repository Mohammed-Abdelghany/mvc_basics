<?php

namespace Mvc\Session1;

abstract class Model {

    private $conn;
    protected $table;
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost","root","","blog_c43_two");
        $this->setTableName();
    }

 
    public abstract function setTableName() ;

    public function selectAll() {

        $query = "select * from $this->table";
        $result =  mysqli_query($this->conn,$query);
        if(mysqli_num_rows($result)>0) {
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }else{
            return "data not found";
        }
    }

} 
