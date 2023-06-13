package com.tutorial;

import java.util.Scanner;

public class kalkulatorIF {
    public static void main(String[] args) {
        try (Scanner userInput = new Scanner(System.in)) {
            Float hasil, a, c;
            System.out.println("Masukkan Nilai 1 : ");
             a = userInput.nextFloat();
            System.out.println("Masukkan Operator : ");
            char  b = userInput.next().charAt(0);
            System.out.println("Masukkan Nilai 2 : ");
             c = userInput.nextFloat();
            hasil = a + c;
            System.out.println("Maka Jika " + a + " " + b + " "+ c + " = " + hasil );
            
            if (b == '+') {
                hasil = a + b;
                System.out.println("Maka Hasil "+ hasil );
            }
            else if (b == '-') {
                hasil = a - b;
                System.out.println("Maka Hasil "+ hasil );
            }
            else if (b == '*') {
                hasil = a * b;
                System.out.println("Maka Hasil "+ hasil );
            }
            else if (b == '/') {
                if (b == 0) {
                    System.out.println("Maka Hasil Tak Hingga");
                }
                hasil = a / b;
                System.out.println("Maka Hasil  " + hasil);
            } else {
                System.out.println("Operator salah" );
                
            }
        }


    }
}
