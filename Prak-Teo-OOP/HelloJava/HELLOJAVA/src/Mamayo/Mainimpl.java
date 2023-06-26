package Mamayo;

import java.util.*;

public class Mainimpl implements mainin {
    
    private String namaDepan;
    private String namaBelakang;
    private String tempatLahir;
    private Integer tanggalLahir;
    private String bulanLahir;
    private String jurusan;

    
    @Override
    public void menu() {
        try (Scanner input = new Scanner(System.in)) {
            List<String> menu = new ArrayList<>();
            menu.addAll(List.of("1. Pendaftaran", "2. Jabodetabek"));
            System.out.println("Silahkan pilih menu dibawah ini");
            for (var value : menu) {
                System.out.println(value);
            }
            System.out.print("Silahkan pilih menu : ");
            menu = Collections.singletonList(input.next());
            if  (menu.contains("1")) {
                pendaftaran();
            } else if (menu.contains("2")) {
                jadwalMatkul();
            }
        }

    }

    @Override
    public void pendaftaran() {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.println("*** Selamat Datang di Pendaftaran Mahasiswa Uhamaka ***");
            System.out.println("Silahkan isi form dibawah ini : ");
            System.out.print("Nama Depan : ");
            namaDepan = scanner.next();

            System.out.print("Nama Belakang :");
            namaBelakang = scanner.next();

            System.out.print("Tempat Lahir :");
            tempatLahir = scanner.next();

            System.out.print("Tanggal Lahir :");
            tanggalLahir = scanner.nextInt();

            System.out.print("Bulan Lahir :");
            bulanLahir = scanner.next();

            System.out.print("Jurusan :");
            jurusan = scanner.next();
        }
        System.out.println("****************  Selamat Pendaftaran Berhasil ********************");
        showResult();

    }

    public void showResult() {
        System.out.println("Nama : " + namaDepan + namaBelakang);
        System.out.println("TTL : " +(tempatLahir + ", " + tanggalLahir + ", " + bulanLahir));
        System.out.println("Jurusan : " + jurusan );
    }

    @Override
    public void jadwalMatkul() {
        Map<String,String> jadwal = new HashMap<>();
        System.out.println("****** JADWAL KELAS *******"); 
        jadwal.put("Senin", "Kriptografi, Algebra, Matdis ");
        jadwal.put("Selasa", "TBO, Grafkom, PrakTBO ");
        jadwal.put("Rabu", "WEB, Muamalah, PrakWeb ");
        jadwal.put("Kamis", "RPL, Logika Informatika, Kalkulus ");
        for (var value : jadwal.entrySet()){
            System.out.println(value);
        }
    }

    
}
