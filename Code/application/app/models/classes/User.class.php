<?php

class User {

    // attributes
    // ---------------
    private $id;
    private $email; // unique .. to send emails
    private $username; # unique like the id
    private $password;
    private $age;
    private $role;
    private $photo;

    // getters
    // -------------
    public function get_id()
    {
        return $this->id;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_username()
    {
        return $this->username;
    }
    public function get_password()
    {
        return $this->password;
    }
    
    public function get_role()
    {
        return $this->role;
    }
    public function get_age()
    {
        return $this->age;
    }
    public function get_photo()
    {
        return $this->photo;
    }


    // setters
    // ----------------
    public function set_id($id)
    {
        $this->id = $id;
    }
    public function set_email($email)
    {
        $this->email = $email;
    }
    public function set_username($username)
    {
        $this->username = $username;
    }
    public function set_password($password)
    {
        $this->password = $password;
    }
    public function set_role($role)
    {
        $this->role = $role;
    }
    public function set_age($age)
    {
        $this->age = $age;
    }
    public function set_photo($photo)
    {
        $this->photo = $photo;
    }


    // constructor
    // -------------
    public function __construct($id = 0, $email = "",
                                $age = 20,
                                 $username = "", 
                                 $password = "", 
                                 $role = "",
                                 $photo = "")
    {
        $this->set_id($id);
        $this->set_email($email);
        $this->set_username($username);
        $this->set_password($password);
        $this->set_role($role);
        $this->set_age($age);
        $this->set_photo($photo);

    }


    public function login()
    {
        // // the query
        // $sql = "select * from users where email = '$this->email' and password = '$this->password'";
        
        // // create connection object
        // $con = new mysqli("localhost", "root", "", "edume", 3307);
        
        // // run the query
        // $res = $con->query($sql);

        // // fetch and format the result from query
        // $res = $res->fetch_all(MYSQLI_ASSOC);

        // // close the connection in the end
        // $con->close();

        // // if the query worked well -- return true
        // if($res != false) {
        //     return $res;
        // }
        // else {
        //     return false;
        // }
        
        
    }
    public function logout()
    {
        # code...
    }
    public function register()
    {
    //     $con = new mysqli("localhost", "root", "", "edume", 3307);

    //     $res = $con->query("select username from users where username = '$this->username' and");

    //     $res = $res->fetch_all(MYSQLI_ASSOC);

    //     // the query is empty .. so insert new row
    //     if($res == false) {
    //         $res = $con->query("insert into users ");
    //         if($res == true) {
    //             echo "created new User";
    //             return true;
    //         }
    //         else {
    //             echo "something went wrong while regestring";
    //             return false;
    //         }

    //     // the username was taken before
    //     } else {
    //         echo "$this->username is already taken choose another username";
    //         return false;
    //     }

    }
}