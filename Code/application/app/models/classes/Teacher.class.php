<?php

class Teacher extends User{


    // attributes
    // ---------------------
    private int $number_of_courses = 0;
    private $courses = array();





    // getters
    // -----------------------
    public function get_number_of_courses()
    {
        return $this->number_of_courses;
    }





    // setters 
    // --------------------------

    public function set_number_of_courses(int $number_of_courses)
    {
        $this->number_of_courses = $number_of_courses;
    }





    // constructor
    // -----------------------
    public function __construct(int $id, string $email,
                                string $username, 
                                string $password, 
                                string $name)
    {
        parent::__construct($id, $email, $username, $password, $name, 
        Role::TEACHER);
    }


    // functionality
    // --------------------

    public function create_course(Course $course)
    {
        array_push($this->courses, $course);
        $this->number_of_courses++;

    }

    public function delete_course(Course $course)
    {
        // some code to delete it from courses array
        $this->number_of_courses--;
    }
    







    
}

