package com.tutorial;

import java.util.Scanner;


public class kalkulatorSwitch {
    public static void main(String[] args) {
        try (Scanner userInput = new Scanner(System.in)) {
            Float a, c, hasil;
            String operator;

            System.out.print("Masukkan Nilai : ");
            a = userInput.nextFloat();
            System.out.print("Masukkan Operator : ");
            operator = userInput.next();
            System.out.print("Masukkan Nilai : ");
            c = userInput.nextFloat();
            
            switch (operator) {
                case "+" :
                hasil = a + c;
                System.out.println("Hasil Penjumlahan : " + hasil);
                break;
                case "-" :
                hasil = a - c;
                System.out.println("Hasil Penjumlahan : " + hasil);
                break;
                case "*" :
                hasil = a * c;
                System.out.println("Hasil Penjumlahan : " + hasil);
                break;
                case "/" :
                hasil = a / c;
                System.out.println("Hasil Penjumlahan : " + hasil);
                break;

            }
        }
    }
}
