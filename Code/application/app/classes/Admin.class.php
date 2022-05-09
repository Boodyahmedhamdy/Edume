<?php


class Admin extends User {
    
    private static $admin;

    public static function get_instance() 
    {
        if(!isset(self::$admin)) {
            self::$admin = new Admin();
        }
        return self::$admin;
    }

}

$ahmed = new Admin();
