package com.tutorial;

public class nestedif {
    public static void main(String[] args) {
        System.out.println("ini adalah Sebuah If Nested");
        int a = 13;
        if (a == 12) {
            System.out.println("Maka Tebakan Benar");
        } else if (a >= 11 && a <= 15)  {
            if (a == 12) {
                System.out.println("Anda Adalah Bnar");
            } else {
                System.out.println("Anda Salah");
            }
        } else {
            System.out.println("Angka Tidak ada yang benar");
        }
        System.out.println("Anda Sudah Berkembang");
    }
}
