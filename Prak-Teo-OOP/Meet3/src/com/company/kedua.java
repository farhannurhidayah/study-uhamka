package com.company;

import java.util.Scanner;

public class kedua {
    public static void main(String[] args) {
        try (Scanner input = new Scanner(System.in)) {
            System.out.println("***** Selamat Datang di kampus Uhamka *****");
            System.out.print("Enter your nim : ");
            Integer nim = input.nextInt();

            System.out.print("Enter your Address: ");
            String address = input.next();

            System.out.print("Enter your Birth of Place : ");
            String place = input.next();

            System.out.print("Enter your Birth of Date : ");
            Integer date = input.nextInt();

            System.out.println("\nMy Name Is " + nim);
            System.out.println("My Address Is " + address);
            System.out.println("My Birth Of Place Is " + place);
            System.out.println("My Birth Of Date Is " + date);

            input.close();


        }
        
    }
    
}
