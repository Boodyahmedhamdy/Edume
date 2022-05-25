package Analytics;

import Core.Admin;
import java.util.Date;

public class Report implements Generatable{
    // attributes
    // ---------------------
    private ReportAbout about;
    private Date dateCreated;

    private Admin creator;

    // constructors
    // ----------------------------

    public Report() {}
    public Report(ReportAbout about, Date dateCreated, Admin creator) {
        this.about = about;
        this.dateCreated = dateCreated;
        this.creator = creator;
    }

    // getters and setters
    // ------------------------------


    public ReportAbout getAbout() {
        return about;
    }
    public void setAbout(ReportAbout about) {
        this.about = about;
    }

    public Date getDateCreated() {
        return dateCreated;
    }
    public void setDateCreated(Date dateCreated) {
        this.dateCreated = dateCreated;
    }

    public Admin getCreator() {
        return creator;
    }
    public void setCreator(Admin creator) {
        this.creator = creator;
    }



}
