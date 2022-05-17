<?php


class Student extends User {

    // attributes
    private float $gpa;


    // getters
    // -----------
    public function get_gpa()
    {
        return $this->gpa;
    }



    // setters
    // -------------
    public function set_gpa(float $gpa)
    {
        $this->gpa = $gpa;
    }




    // constructor
    // --------------------
    public function __construct(int $id, string $email,
                                string $username, 
                                string $password, 
                                string $name)
    {
        parent::__construct($id, $email, $username, $password, $name, 
        "STUDENT");
    }



    // functionallity
    // ------------------
    public function enroll_in_course(Course $course)
    {
        # code...
    }

    public function drop_course(Course $course)
    {
        # code...
    }
    




}