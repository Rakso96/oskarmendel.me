<?php

  class Database{

    protected $db_user = 'root'; //Username for the database
    protected $db_pw = ''; //Password for the database

    public $db; //Our database connection

    public function __construct(){
      //$this->db = new PDO('mysql:host=localhost; dbname=growncms', $this->db_user, $this->db_pw);
        $this->connect();
    }

    public function getIT(){
    // Do SELECT from a table
    $sql = "SELECT * FROM pages;";
    $sth = $this->db->prepare($sql);
    $sth->execute();
    var_dump($sth->fetchAll()); //Dumping all it fetches onto the screen
    }


    /**
     * The function used to connect to the database
     */
    public function connect(){
      if(!$this->db){
        try{
            $this->db = new PDO('mysql:host=localhost; dbname=growncms', $this->db_user, $this->db_pw);
            echo "Connected!";
        }catch(PDOException $e){
            print "Error connecting to database!";
            die();
        }
      }
    }


    /**
     * The function we call when we are finished and need to disconnect
     */
    public function disconnect(){
        $this->db = null;
    }


      /**
       * When we just want to retrieve some database records like displaying a few on the front page
       * we use this function.
       * @param $table is from which table we want to retrieve all data.
       */
      public function selectAll($table){
          $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 3;";
          $statement = $this->db->prepare($sql);
          $statement->execute();
          //var_dump($statement->fetchAll()); //Dumping all it fetches onto the screen
          return $statement->fetchAll();
      }

      /**
       * The function we use if we want to receive a specific amount of rows from the database.
       * @param $table The table we want to get rows from.
       * @param $rows The amount of rows we want.
       */
      public function select($table, $id){
          $sql = "SELECT * FROM $table; WHERE id=:id";
          $statement = $this->db->prepare($sql);
          $statement->execute(array(':id'=>$id));
      }


    /**
     * Function handling insertion to the database.
     *
     */
    public function insert($table, $label, $title, $body, $slug){
        $sql = "INSERT INTO $table SET label=:label,title=:title,body=:body,slug=:slug";
        $statement = $this->db->prepare($sql);
        $statement->execute(array(':label'=>$label,':title'=>$title,':body'=>$body,':slug'=>$slug));
    }

    /**
     *  When we update existing records in the database we use this function
     */
    public function update($table, $id, $label, $title, $body, $slug){
        $sql = "UPDATE $table SET label=:label,title=:title,body=:body,slug=:slug WHERE id=:id";
        $statement = $this->db->prepare($sql);
        $statement->execute(array(':id'=>$id, ':label'=>$label, ':title'=>$title, ':body'=>$body, ':slug'=>$slug));
    }

    /**
     * When we want to delete database records we call this function
     */
    public function delete($table, $id){
        $sql = "DELETE FROM $table WHERE id=:id;";
        $statement = $this->db->prepare($sql);
        $statement->execute(array(':id'=>$id));
    }


      /**
       * Function that will check if a specified table exists in our database
       * @param $table for the table we want to look up in our database
       */
      public function tableExist($table){

    }
  }
