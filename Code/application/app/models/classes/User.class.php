<?php

class User {

    // attributes
    // ---------------
    private int $id;
    private string $email; // unique .. to send emails
    private string $username; # unique like the id
    private string $password;
    private string $name;
    private $role;

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
    public function get_name()
    {
        return $this->name;
    }
    public function get_role()
    {
        return $this->role;
    }


    // setters
    // ----------------
    public function set_id(int $id)
    {
        $this->id = $id;
    }
    public function set_email(string $email)
    {
        $this->email = $email;
    }
    public function set_username(string $username)
    {
        $this->username = $username;
    }
    public function set_password(string $password)
    {
        $this->password = $password;
    }
    public function set_name(string $name)
    {
        $this->name = $name;
    }
    public function set_role(Role $role)
    {
        $this->role = $role;
    }


    // constructor
    // -------------
    public function __construct(int $id = 0, string $email = "",
                                string $username = "", 
                                string $password = "", 
                                string $name = "", 
                                $role = Role::USER)
    {
        $this->set_id($id);
        $this->set_email($email);
        $this->set_username($username);
        $this->set_password($password);
        $this->set_name($name);
        $this->set_role($role);

    }


    public function login()
    {
        # code...
    }
    public function logout()
    {
        # code...
    }
    public function register()
    {
        # code...
    }


}
