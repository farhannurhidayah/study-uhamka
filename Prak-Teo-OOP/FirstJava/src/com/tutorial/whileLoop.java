package com.tutorial;

public class whileLoop {
    public static void main(String[] args) {
        System.out.println("Proses Loop");
        
        int a = 0;
        boolean kondisi = true;
        while (kondisi) {
            System.out.println("Proses Loop ke-" + a);
            a++;

            if (a == 10){
                kondisi = false;
            }

        }
        System.out.println("Selesai");
    }
}
