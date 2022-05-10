<?php

class Organization extends Teacher {
    // attributes
    // -------------------------
    private $students = array(); // array of students in this organization
    private int $number_of_students = 0;


    // getters
    // ---------------------
    public function get_students()  
    {
        return $this->students;
    }
    public function get_number_of_students()
    {
        return $this->number_of_students;
    }


    // setters
    // -------------------------
    public function set_students($students)
    {
        $this->students = $students;
    }
    public function set_number_of_students(int $number_of_students)
    {
        $this->number_of_students = $number_of_students;
    }


    // constructor
    // ----------------------------
    public function __construct(int $id, string $email,
                                string $username, 
                                string $password, 
                                string $name)
    {
        parent::__construct($id, $email, $username, $password, $name, 
        Role::ORGANIZATION);
        
    }


    // functionallity
    // -----------------------------

    public function add_student(Student $student)
    {
        array_push($this->students, $student);

    }
    public function delete_student(Student $student)
    {
        # code...
    }


    
}