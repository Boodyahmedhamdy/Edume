package Core;

public class Organization extends Teacher{
    // attributes
    // --------------------


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


    // main functionality
    // -----------------------

    public boolean addStudent(Student student) {
        return false;
    }



    public boolean removeStudent(Student student) {
        return false;
    }




}
