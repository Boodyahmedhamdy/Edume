<?php

class DBController
{

   public $dbHost = "localhost";
   public $dbUser = "root";
   public $Password = "";
   public $dbName = "edume";
   public $connection;


   public function openConnection()
   {
       $this-> connection = new mysqli($this->dbHost,$this->dbUser ,$this->Password ,$this->dbName);
       if($this->connection->connect_error)
       {
         echo "error in connection : " .$this->connection->connect_error;
         return false;
       }
       else
       {
       return true;
      }
   }

   public function closeConnection()
    {
        if($this->connection)
        {
            $this->connection->close();
        }
        else
        {
            echo "Connection is not opened";
        }
    }

   public function select($qry)
    {
        $result=$this->connection->query($qry);
        if(!$result)
        {
            echo "Error : ".mysqli_error($this->connection);
            return false;
        }
        else
        {
             return $result->fetch_all(MYSQLI_ASSOC);
        }

    }

    
}

?>
