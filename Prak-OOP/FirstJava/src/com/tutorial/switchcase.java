package com.tutorial;

import java.util.Scanner;

public class switchcase {
    public static void main(String [] args) {
        try (Scanner userInput = new Scanner(System.in)) {
            System.out.print("Masukkan Nilai Input Anda : ");
            String input = userInput.nextLine();

            switch (input) {
                case "maman" :
                System.out.println("hadir Pak Boss !!!"); 
                break;
                case "mimin" :
                System.out.println("hadir Pak Boss !!!"); 
                break;
                case "mumun" :
                System.out.println("hadir Pak Boss !!!"); 
                break;
                default :
                System.out.println("Tidak hadi Bos"); 
            }
            System.out.println("Program Selesai"); 

        }
    }
}
