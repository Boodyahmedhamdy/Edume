package Core;

public class Course {
    // attributes
    // ----------------------

    private String name;
    private double price;
    private String details;
    private String topic;
    private Lesson[] lessons;
    private Teacher teacher;
    private Student[] students;


    // constructors
    public Course() {
    }

    public Course(String name, double price,
                  String details, String topic,
                  Lesson[] lessons, Teacher teacher,
                  Student[] students) {
        this.name = name;
        this.price = price;
        this.details = details;
        this.topic = topic;
        this.lessons = lessons;
        this.teacher = teacher;
        this.students = students;
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

    public Lesson[] getLessons() {
        return lessons;
    }
    public void setLessons(Lesson[] lessons) {
        this.lessons = lessons;
    }

    public Teacher getTeacher() {
        return teacher;
    }
    public void setTeacher(Teacher teacher) {
        this.teacher = teacher;
    }

    public Student[] getStudents() {
        return students;
    }
    public void setStudents(Student[] students) {
        this.students = students;
    }



}
