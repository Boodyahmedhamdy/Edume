<?php


class Admin extends User {
    
    // singleton design pattern
    private static $admin;

    private function __construct(int $id, string $email,
                                string $username, 
                                string $password, 
                                string $name)
    {
        parent::__construct($id, $email, $username, $password, $name, 
        Role::ADMIN);

    }

    public static function get_instance(int $id, string $email,
                                string $username, 
                                string $password, 
                                string $name) 
    {
        if(!isset(self::$admin)) {
            self::$admin = new Admin($id, $email, $username, $password, $name);
        }
        return self::$admin;
    }

}

