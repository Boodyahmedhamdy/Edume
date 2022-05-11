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


    // functionallity
    // -----------------------------

    // adding Users
    public function add_student(Student $student)
    {
        array_push($this->students, $student);
    }

    public function add_teacher(Teacher $teacher)
    {
        array_push($this->teachers, $teacher);
    }

    public function add_organizatin(Organization $organization)
    {
        array_push($this->organizations, $organization);

    }

    // deleting Users
    public function delete_student(Student $student)
    {
        $Student = array_filter($Student, function ($element) use ($student)
        { 
            return ($element != $student);
        }
            ); 

    }

    public function delete_teacher(Teacher $teacher)
    {
        $Teacher = array_filter($Teacher, function ($element) use ($teacher)
        { 
            return ($element != $teacher);
        }
            );
    }

    public function delete_organization(Organization $organization)
    {
        $Organization = array_filter($Organization, function ($element) use ($organization)
        { 
            return ($element != $organization);
        }
            );
    }

    // updating Users
    public function update_student(Student $student)
    {
        # code...
    }

    public function update_teacher(Teacher $teacher)
    {
        # code...
    }

    public function update_organization(Organization $organization)
    {
        # code...
    }

    // genrating reports
    public function generate_report()
    {
        # code...
    }

}
