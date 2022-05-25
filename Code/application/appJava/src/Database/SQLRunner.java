package Database;

import java.sql.*;

public class SQLRunner {
    private static final String hostName = "localhost";
    private static final String userName = "testLogin";
    private static final String password = "test";
    private static final String databaseName = "Edume";
    private static final String connectionString = "jdbc:sqlserver://" + hostName + ";Database=" + databaseName + ";";



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
