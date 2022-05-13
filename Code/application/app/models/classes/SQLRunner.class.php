<?php 

// SOME PROBLEM HAPPEND WHEN I USED IT TO CONNECT TO THE DATABASE .. NOT FIXEX YET
// DON'T USE IT
class SQLRunner {
    private static string $host_name = "localhost";
    private static string $user_name = "root";
    private static string $password = "root";
    private static string $db_name = "helwan"; // temp name
    private static int $port_number = 3307;

    public static function run_query(string $query)
    {
        // declare connection
        $connection = new mysqli(self::$host_name, 
                                self::$user_name, 
                                self::$password, 
                                self::$db_name, 
                                self::$port_number);

        // chech the connection
        if (!$connection) {
            echo "failed to connect";
            return false;
        }

        // run passed query and save it
        $result = $connection->query($query);

        // fetch it from
        $result = $result->fetch_all(MYSQLI_ASSOC);

        // return the result 
        return $result;
    }
}
