package Core;

import NotificationSystem.Notifications.Notifyer;

import java.util.ArrayList;
import java.util.List;

public class Organization extends Teacher{
    // attributes
    // --------------------
    private List<Student> students = new ArrayList<Student>(); // student follows this organization


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

    public List<Student> getStudents() {
        return students;
    }
    public void setStudents(List<Student> students) {
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
