package Core;

public class Student extends User{
    // attributes
    // -------------------
    private Course[] courses; // courses this student enrolled in
    private Organization organization; // organization this student belongs to

    // constructors
    // -------------------
    public Student() {

    }

    public Student(int id, String name, String username,
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

    public Organization getOrganization() {
        return organization;
    }
    public void setOrganization(Organization organization) {
        this.organization = organization;
    }

    // user functionality
    // -------------------
    @Override
    public boolean login() {
        // 1. check if the student's already set up
        // 2. query the database using email, password of the user
        // 3. if the query went well -> return true and get new student
        // 4. if the query was broken (something went wrong/email, password were wrong) -> return false


        return false;
    }

    @Override
    public boolean register() {
        // 1. check if a student is already exists with the same sent data
        // if so -> return false

        // 2. else create new student in database, return true and the new student


        return false;
    }

    @Override
    public boolean logout() {
        return false;
    }


    // main functionality
    // -------------------
    public boolean enrollInCourse(Course course) {
        return false;
    }

    public boolean dropCourse(Course course) {
        return false;
    }

    public void rateCourse(Course course) {

    }

}
