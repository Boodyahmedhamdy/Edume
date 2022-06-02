package Core;

import NotificationSystem.Notifications.Notifyer;

public class Organization extends Teacher{
    // attributes
    // --------------------
    private Student[] students; // student follows this organization


    // constructors
    // ---------------------
    public Organization() {}

    public Organization(int id, String name, String username,
                   String email, String password) {
        this.setId(id);
        this.setName(name);
        this.setUsername(username);
        this.setEmail(email);
        this.setPassword(password);
    }


    // getters and setters
    // ------------------------

    public Student[] getStudents() {
        return students;
    }
    public void setStudents(Student[] students) {
        this.students = students;
    }


    // main functionality
    // -----------------------

    public boolean addStudent(Student student) {
        return false;
    }

    
    public boolean removeStudent(Student student) {
        return false;
    }




}
