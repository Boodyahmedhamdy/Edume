import Core.Course;
import Core.Teacher;
import Database.QueryGetter;
import Database.SQLRunner;
import NotificationSystem.Notifications.Notification;

import java.io.IOException;
import java.sql.*;

public class Main {


    public static void main(String[] args) throws SQLException, IOException {
//        System.out.println("something");
//        ResultSet rs = SQLRunner.run("select * from students");
//        while(rs.next()){
//            for(int colNumber = 1 ; colNumber < 8 ; colNumber++) {
//                System.out.print(rs.getString(colNumber) + " -> ");
//            }
//        }

//        try {
//            Connection connection = DriverManager.getConnection(
//                    "jdbc:sqlserver://localhost;Database=Edume;",
//                    "edumeUser",
//                    "password");
//            Statement statement = connection.createStatement();
//            ResultSet resultSet = statement.executeQuery("select * from students");
//
//            while(resultSet.next()){
//            for(int colNumber = 1 ; colNumber < 8 ; colNumber++) {
//                System.out.print(resultSet.getString(colNumber) + " -> ");
//            }
//        }
//
//        } catch (SQLException e) {
//
//            e.printStackTrace();
//        }


//        try {
//            System.out.println(QueryGetter.getQueryFromFile("allStudents.sql"));
//            System.out.println(QueryGetter.getQueryFromFile("useDatabase.sql"));
//        } catch (IOException e) {
//            e.printStackTrace();
//        }
//        ResultSet rs = SQLRunner.run(QueryGetter.getQueryFromFile("allStudents.sql"));
//
//        while(rs.next()) {
//            System.out.println(rs.getString(1));
//        }

        ResultSet rs = SQLRunner.run("select * from students");
        Notification notification = new Notification();
        Teacher t = new Teacher();
        t.createCourse(new Course());

    }
}
