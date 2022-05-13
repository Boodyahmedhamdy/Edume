<?php 

class Lesson {

    // attributes
    // ---------------
    private string $lesson_name;
    private int $lesson_number;
    private Course $course;
    
    // getters
    // -------------
    public function get_lesson_name()
    {
        return $this->lesson_name;
    }
    public function get_lesson_number()
    {
        return $this->lesson_number;
    }
    public function get_course()
    {
        return $this->course;
    }

    // setters
    // ----------------
    public function set_lesson_name(string $lesson_name)
    {
        $this->lesson_name = $lesson_name;
    }
    public function set_lesson_number(int $lesson_number)
    {
        $this->lesson_number = $lesson_number;
    }
    public function set_course(Course $course)
    {
        $this->course = $course;
    }

    // constructor
    // -------------
    public function __construct(string $lesson_name, int $lesson_number,    
                                Course $course)
    {
        $this->set_lesson_name($lesson_name);
        $this->set_lesson_number($lesson_number);
        $this->set_course($course);
    }
    
}