package Core;

import Analytics.Report;

public class Admin extends User{

    // attributes
    // -----------------------


    // constructors
    // ----------------------------
    public Admin() {

    }
    public Admin(int id, String name, String username,
                 String email, String password,
                 int age) {
        this.setId(id);
        this.setName(name);
        this.setUsername(username);
        this.setEmail(email);
        this.setPassword(password);
        this.setAge(age);

    }


    // getters and setters
    // ---------------------------



    // user functionality
    // -------------------------------
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
    // -----------------------------

    // students stuff
    public Student createStudent() {
        return null;
    }
    public void deleteStudent(Student student) {

    }
    public void updateStudent() {

    }

    // teachers stuff
    public Teacher createTeacher() {

        return null;
    }
    public void deleteTeacher(Teacher teacher) {

    }
    public void updateTeacher() {

    }

    // organization stuff
    public Organization createOrganization() {
        return null;
    }
    public void deleteOrganization(Organization organization) {

    }
    public void updateOrganization() {

    }


    // reports stuff
    public Report getReport() {
        return new Report();
    }

}
