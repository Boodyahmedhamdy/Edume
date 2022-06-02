package Database;

import java.sql.*;

public class SQLRunner {
    private static final String hostName = "DESKTOP-JCIOT16\\NARUTO";
    private static final String userName = "testLogin";
    private static final String password = "testLogin";
    private static final String databaseName = "Edume";
    private static final String connectionString = "jdbc:sqlserver://" + hostName + ";Database=" + databaseName + ";";
//    private static final String connectionString = "jdbc:mysql://" + hostName + ":3306/" + databaseName;



    public static ResultSet run(String query) {

        try {
            Connection connection = DriverManager.getConnection(connectionString, userName, password);
            Statement statement = connection.createStatement();
            ResultSet resultSet = statement.executeQuery(query);
            connection.close();

            return resultSet;

        } catch (SQLException e) {

            e.printStackTrace();
        }
        return null;
    }
}
