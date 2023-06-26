package com.Learning.Demo;

public class Kelas {
    public String nim;
    public String nama;
    public String kelas;
    
    public Kelas(String nim, String nama, String kelas) {
        this.nim = nim;
        this.nama = nama;
        this.kelas = kelas;
    }
}
 class Main {
    public static void main(String[] args) {
        Kelas Kelas1 = new Kelas("0123456789", "John Doe", "IF-01");
        System.out.println("NIM: " + Kelas1.nim);
        System.out.println("Nama: " + Kelas1.nama);
        System.out.println("Kelas: " + Kelas1.kelas);
    }
}


