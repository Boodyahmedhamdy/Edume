<?php


 class Role {

    private $ID;
    private $Name;

    // getters
    // -----------
    public function get_ID()
    {
        return $this->ID;
    }

    public function get_Name()
    {
        return $this->Name;
    }



    // setters
    // -------------
    public function set_ID($ID)
    {
        $this->ID = $ID;
    }

    public function set_Name(float $Name)
    {
        $this->Name = $Name;
    }

}