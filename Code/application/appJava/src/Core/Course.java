package Core;

import java.util.ArrayList;
import java.util.List;

public class Course {
    // attributes
    // ----------------------

    private String name; // course name
    private double price; // course price -- created by the Teacher
    private String details; // details about the course
    private String topic; // topic which is the course about
    private List<Lesson> lessons = new ArrayList<Lesson>(); // the course contains of lessons
    private Teacher teacher; // the course creator
    private List<Student> students = new ArrayList<Student>(); // students enrolled in this course


    // constructors
    public Course() {
    }

    public Course(String name, double price,
                  String details, String topic, Teacher teacher) {
        this.name = name;
        this.price = price;
        this.details = details;
        this.topic = topic;
        this.teacher = teacher;
    }

    // getters and setters
    // ----------------------

    public String getName() {
        return name;
    }
    public void setName(String name) {
        this.name = name;
    }

    public double getPrice() {
        return price;
    }
    public void setPrice(double price) {
        this.price = price;
    }

    public String getDetails() {
        return details;
    }
    public void setDetails(String details) {
        this.details = details;
    }

    public String getTopic() {
        return topic;
    }
    public void setTopic(String topic) {
        this.topic = topic;
    }

    public List<Lesson> getLessons() {
        return lessons;
    }
    public void setLessons(List<Lesson> lessons) {
        this.lessons = lessons;
    }

    public Teacher getTeacher() {
        return teacher;
    }
    public void setTeacher(Teacher teacher) {
        this.teacher = teacher;
    }

    public List<Student> getStudents() {
        return students;
    }
    public void setStudents(List<Student> students) {
        this.students = students;
    }
    
}
