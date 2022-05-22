package Core;

public class Teacher extends User {
    // attributes
    // -------------------
    private Course[] courses;

    // constructors
    // -------------------

    public Teacher(){}
    public Teacher(int id, String name, String username,
                   String email, String password, int age) {
        this.setId(id);
        this.setName(name);
        this.setUsername(username);
        this.setEmail(email);
        this.setPassword(password);
        this.setAge(age);
    }

    // getters and setters
    // -------------------
    public Course[] getCourses() {
        return courses;
    }
    public void setCourses(Course[] courses) {
        this.courses = courses;
    }

    // user functionality
    // -------------------
    @Override
    public boolean login() {
        return false;
    }

    @Override
    public boolean register() {
        return false;
    }

    @Override
    public boolean logout() {
        return false;
    }



    // main functionality
    // -------------------
    public boolean createCourse(Course course) {
        return false;
    }

    public void editCourse(Course course){

    }

    public boolean dropCourse(Course course) {
        return false;
    }

    public void addLessonToCourse(Lesson lesson) {
        this.courses[0].getLessons()[0] = lesson;
    }

    public void removeLessonFromCourse(Lesson lesson) {
        this.courses[2].getLessons()[lesson.getIndex()] = null;
    }



}
