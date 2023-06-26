package Meet11;

import java.io.BufferedReader;
import java.io.FileReader;
import java.nio.Buffer;


public class IO3_2 {
    public static void main(String [] args){
        char[] array = new char[403];

        try {
            FileReader file = new FileReader("D:\\study-uhamka\\Teknologi_OOP\\Halo.txt");

            BufferedReader input = new BufferedReader(file);

            input.read(array);
            System.out.println("data in the file : " );
            System.out.println(array);
            input.close(); 

        } catch(Exception e) {
            e.getStackTrace();
        }
    }
}
