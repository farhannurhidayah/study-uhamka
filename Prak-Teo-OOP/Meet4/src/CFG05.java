import java.io.*;
public class CFG05 {
    public static void main(String[] main) throws FileNotFoundException, IOException {
        FileReader file = new FileReader(null, null);

        BufferedReader fileInput = new BufferedReader(file);

        for (int counter = 0; counter < 3; counter++)
        System.out.println(fileInput.readLine());
        fileInput.close();

    }
    
}
