package com.tutorial;

import java.util.Scanner;

public class ifElseisStatemen {
    public static void main(String [] args){
         try (Scanner userInput = new Scanner(System.in)) {
            int nilai;
            System.out.print("Masukkan Nilai yang ada inginkan : ");
            nilai = userInput.nextInt();
            
            if (nilai == 5) {
                System.out.print("Nilai Anda Benar");
            } else if (nilai == 10) {
                System.out.print("Nilai Anda Salah");
            } else {
                System.out.println("Kerja Bagus");
            }
        }
    }
}
