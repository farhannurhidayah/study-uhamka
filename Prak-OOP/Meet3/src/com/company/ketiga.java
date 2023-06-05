package com.company;

import java.io.FileReader;
import java.io.BufferedReader;
import java.io.File;


public class ketiga {
    public static void main(String[] args) {
        char[] array = new char[403];

        try {
            FileReader file = new FileReader("C:\\Users\\USER\\Documents\\New_folder\\haloo.txt");

            BufferedReader input = new BufferedReader(file);

            input.read(array);
            System.out.println("Data in the file");
            System.out.println(array);
            input.close();
        }
        catch (Exception e) {
            e.getStackTrace();
        }
    }
}
