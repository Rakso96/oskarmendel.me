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
       * @param $table is from which table we want to retrieve data.
       */
      public function select($table){
          $sql = "SELECT * FROM $table;";
          $statement = $this->db->prepare($sql);
          $statement->execute();
          var_dump($statement->fetchAll()); //Dumping all it fetches onto the screen
      }


    /**
     * Function handling insertion to the database.
     * TODO: FINISH THE SELECT FUNCTION ADDING ANOTHER ONE IF U JUST WANT A SPECIFIC AMMOUNT OF RESULTS
     * TODO: WRITE THE REST OF ALL THE FUNCTIONS
     */
    public function insert(){

    }

    /**
     *  When we update existing records in the database we use this function
     */
    public function update(){

    }

    /**
     * When we want to delete database records we call this function
     */
    public function delete(){

    }


      /**
       * Function that will check if a specified table exists in our database
       * @param $table for the table we want to look up in our database
       */
      public function tableExist($table){

    }
  }
