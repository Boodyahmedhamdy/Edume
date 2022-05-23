import Core.Student;
import Database.SQLRunner;

import java.sql.*;

public class Main {


    public static void main(String[] args) throws SQLException {
//        System.out.println("something");
//        ResultSet rs = SQLRunner.run("select * from students");
//        while(rs.next()){
//            for(int colNumber = 1 ; colNumber < 8 ; colNumber++) {
//                System.out.print(rs.getString(colNumber) + " -> ");
//            }
//        }

        try {
            Connection connection = DriverManager.getConnection(
                    "jdbc:sqlserver:localhost;Database=Edume",
                    "boody",
                    "root");
            Statement statement = connection.createStatement();
            ResultSet resultSet = statement.executeQuery("select * from students");

            while(resultSet.next()){
            for(int colNumber = 1 ; colNumber < 8 ; colNumber++) {
                System.out.print(resultSet.getString(colNumber) + " -> ");
            }
        }

        } catch (SQLException e) {

            e.printStackTrace();
        }
    }


}
