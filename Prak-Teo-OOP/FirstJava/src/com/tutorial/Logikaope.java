package com.tutorial;

import java.util.Scanner;

public class Logikaope {
    public static void main(String [] args){
    try (Scanner inputUser = new Scanner(System.in)) {
        int nilai = 5;
        int nilaiTebakan;
        boolean statusTebakan;
        System.out.print("Masukan Nilai Tebakan Anda = ");
        nilaiTebakan = inputUser.nextInt();
        System.out.println("Nilai Tebakan Anda Adlah = " + nilaiTebakan );
        
        statusTebakan = (nilai == nilaiTebakan);
        System.out.println("Maka Tebakan Anda : " + statusTebakan);
        
        System.out.print("Masukan Nilai Tebakan Antara 4 dan 9 = ");
        nilaiTebakan = inputUser.nextInt();
        statusTebakan = (nilaiTebakan > 4) &&  (nilaiTebakan < 9);
        System.out.println("Maka Tebakan Anda : " + statusTebakan);
    }

    }

}
