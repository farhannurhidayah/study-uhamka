package com.company;

import java.io.FileWriter;
import java.io.BufferedWriter;


public class satu {
    public static void main(String[] args) {
        String data = "this is the data in the output file";

        try {
            FileWriter file = new FileWriter("C:\\Users\\USER\\Documents\\New_folder\\mayo.txt");
            BufferedWriter output = new BufferedWriter(file);
            output.write(data);
            output.close();
        }
        catch (Exception e) {
            e.getStackTrace();
        }
    }
}
