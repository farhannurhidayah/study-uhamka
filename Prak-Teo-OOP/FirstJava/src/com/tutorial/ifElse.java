package com.tutorial;

import java.util.Scanner;

public class ifElse {
    public static void main(String [] args) {
        try (Scanner userInput = new Scanner(System.in)) {
            int nilai;
            System.out.print("Masukkan Nilai yang ada inginkan : ");
            nilai = userInput.nextInt();
            
            if (nilai == 5) {
                System.out.print("Nilai Anda Benar");
            } else {
                System.out.print("Nilai Anda Salah");
                
            }
        }
    }
}
