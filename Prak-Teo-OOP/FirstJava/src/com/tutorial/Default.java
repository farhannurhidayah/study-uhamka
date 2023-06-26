package com.tutorial;

import java.util.Scanner;

public class Default {
    public static void main(String[] args) {
        try (Scanner inputUser = new Scanner(System.in)) {
            int Panjang, Lebar, Luas;
            System.out.println("Menghitung Luas");
            System.out.print("Panjang :");
            Panjang = inputUser.nextInt();
            System.out.print("Lebar :");
            Lebar = inputUser.nextInt();
            
            Luas = Panjang * Lebar;
            System.out.println("Maka Luas Tersebut adalah : " + Luas);
            
            System.out.println("Pengelompokan Aritmatika");
            int aritmatika;
            // int ce, be;
            aritmatika = 2 * 2 + 6 / 10;
            System.out.println(aritmatika);
            System.out.print("nilai x = ");
            int xe = inputUser.nextInt();
            System.out.print("nilai o = ");
            int o = inputUser.nextInt();
            System.out.print("nilai mu = ");
            int mu = inputUser.nextInt();
            aritmatika = xe + o * mu;
            System.out.println("nilai adalah = " + aritmatika);
        }

    }
}
