package Database;

import java.io.*;
import java.util.Scanner;

public class QueryGetter {

    private static final String pathToQueriesFolder = "queries/";

    public static String  getQueryFromFile(String fileRelativePath) throws IOException {
        // read the file
        // store it in string
        // return that string

        fileRelativePath = pathToQueriesFolder + fileRelativePath;

        File file = new File(fileRelativePath);
        Scanner scanner = new Scanner(file);

        String query = "";
        while (scanner.hasNextLine()) {
            query += scanner.nextLine();
        }
        scanner.close();
        return query;



    }


}
