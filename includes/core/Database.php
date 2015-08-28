<?php

  class Database(){

    protected $db_user;
    protected $db_pw;

    private $db;

    public function __construct(){
      $this->$db = new PDO('mysql:host=localhost; dbname=growncms', $this->db_user, $this->db_pass);
      echo "Good Connection!";
    }

    public function getIT(){

    }

  }
