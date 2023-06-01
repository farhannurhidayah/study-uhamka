package Assigment;

import java.util.Scanner;

public interface Biodata {
    void inputData();
}

class Mahasiswa implements Biodata {

    String nama, alamat, jurusan;
    Integer usia, nim ;


    @Override
    public void inputData() {
        Scanner add = new Scanner(System.in);
        System.out.println("***  Pendataan Mahasiswa Uhamka ***");
        System.out.print("Nama Mahasiswa : ");
        nama = add.nextLine();
        
        System.out.print("jurusan : ");
        jurusan = add.nextLine();
        
        System.out.print("Alamat : ");
        alamat = add.nextLine();
        
        System.out.print("Usia : ");
        usia = add.nextInt();

        System.out.print("NIM: ");
        nim = add.nextInt();
        
        
        System.out.println("***  Terima Kasih Telah Berpartisipasi ***");
        
        
        showResult();

    }

    void showResult() {
        System.out.println("\nNama : " + nama);
        System.out.println("NIM : " + nim);
        System.out.println("Alamat : " + alamat);
        System.out.println("Usia : " + usia);
        System.out.print("jurusan : " + jurusan);
    }

}

class maini {
    public static void main(String[] args){
        Mahasiswa t = new Mahasiswa();
        t.inputData();
    }
}
