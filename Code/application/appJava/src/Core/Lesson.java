package Core;

public class Lesson {
    // attributes
    // ----------------------------
    private Course course; // the course which this lesson belongs to
    private int index; // number of this course in course
    private String name;

    // constructors
    public Lesson(){}

    public Lesson(int index) {
        this.index = index;
    }

    // getters and setters
    // --------------------------


    public int getIndex() {
        return index;
    }
    public void setIndex(int index) {
        this.index = index;
    }

    public Course getCourse() {
        return course;
    }
    public void setCourse(Course course) {
        this.course = course;
    }

    public String getName() {
        return name;
    }
    public void setName(String name) {
        this.name = name;
    }

}
