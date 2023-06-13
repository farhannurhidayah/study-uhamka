package com.tutorial;

import java.util.Scanner;

public class ternaryOperator {
    public static void main(String[] args){
        try (Scanner inputUser = new Scanner(System.in)) {
            int input, x;

            System.out.print("Masukkan nilai : ");
            input = inputUser.nextInt();
            x = (input == 10) ? (input * input) : (input / 2);
            System.out.println("Maka nilai : " + x);
        }
    }
}
