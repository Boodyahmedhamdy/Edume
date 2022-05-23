package Database;

import java.sql.*;

public class SQLRunner {
    private static String hostName = "localhost";
    private static String userName = "boody";
    private static String password = "root";
    private static String databaseName = "Edume";
    private static String connectionString = "jdbc:sqlserver://" + hostName + ";Database=" + databaseName + ";";




    public static ResultSet run(String query) {

        try {
            Connection connection = DriverManager.getConnection(connectionString, userName, password);
            Statement statement = connection.createStatement();
            ResultSet resultSet = statement.executeQuery(query);

            return resultSet;

        } catch (SQLException e) {

            e.printStackTrace();
        }
        return null;
    }
}
