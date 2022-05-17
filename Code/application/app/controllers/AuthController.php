<?php 

require_once '../../Models/User.class.php';
require_once '../../Controllers/DBController.php';
class AuthController
{
    protected $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection
    public function login(User $user)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="select * from users where Email='$user->Email' and Password ='$user->Password'";
            $result=$this->db->select($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(count($result)==0)
                {
                    session_start();
                    $_SESSION["errMsg"]="You have entered wrong email or password";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    session_start();
                    $_SESSION["userId"]=$result[0]["ID"];
                    $_SESSION["userName"]=$result[0]["Email"];
                    if($result[0]["RoleID"]==1)
                    {
                        $_SESSION["userRole"]="Admin";
                    }
                    else
                    {
                        if($result[0]["RoleID"]==2)
                        {
                            $_SESSION["userRole"]="Teacher";
                        }
                        else
                        {
                            $_SESSION["userRole"]="Student";
                        }
                    }
                    $this->db->closeConnection();
                    return true;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;
        }
    }
    
    
}

?>