<?php


class Course {

    // attributes
    // ---------------------
    private string $course_name;
    private int $course_id;
    private string $course_discription;
    private Teacher $teacher;
    private $students = array();
    private int $number_of_students;
    private int $number_of_lessons;
    
    // getters
    // ------------------
    public function get_course_name()
    {
        return $this->course_name;
    }
    public function get_course_id()
    {
        return $this->course_id;
    }
    public function get_course_discription()
    {
        return $this->course_discription;
    }
    public function get_students()  
    {
        return $this->students;
    }
    public function get_number_of_students()
    {
        return $this->number_of_students;
    }
    public function get_teacher()  
    {
        return $this->teacher;
    }
    public function get_number_of_lessons()
    {
        return $this->number_of_lessons;
    }


    // setters
    // ----------------
    public function set_course_name(string $course_name)
    {
        $this->course_name = $course_name;
    }
    public function set_course_id(int $course_id)
    {
        $this->course_id = $course_id;
    }
    public function set_course_discription(string $course_discription)
    {
        $this->course_discription = $course_discription;
    }
    public function set_students($students)
    {
        $this->students = $students;
    }
    public function set_number_of_students(int $number_of_students)
    {
        $this->number_of_students = $number_of_students;
    }
    public function set_teacher(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }
    public function set_number_of_lessons(int $number_of_lessons)
    {
        $this->number_of_lessons = $number_of_lessons;
    }


    // constructor
    // -------------
    public function __construct(string $course_name, 
                                int $course_id, string $course_discription, 
                                Teacher $teacher, 
                                int $number_of_students, int $number_of_lessons)
    {
        $this->set_course_name($course_name);
        $this->set_course_id($course_id);
        $this->set_course_discription($course_discription);
        $this->set_teacher($teacher);
        $this->set_number_of_students($number_of_students);
        $this->set_number_of_lessons($number_of_lessons);

    }

}
