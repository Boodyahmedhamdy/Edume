package Core;

public class SysAdmin extends Admin{
    // attributes
    // ---------------------


    // constructors
    // ------------------------
    public SysAdmin() {}
    public SysAdmin(int id, String name, String username,
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
    // --------------------------


    // user functionality
    // --------------------------
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

    public Admin createAdmin() {
        return new Admin();
    }
    public void deleteAdmin(Admin admin) {

    }
    public void updateAdmin() {

    }

}
