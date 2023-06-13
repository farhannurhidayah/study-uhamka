package com.tutorial;

public class mainan {
    public static void main(String[] args){
        int variabel1 = 5;
        int variabel2 = 6;
        int hasil;
        hasil = variabel1 + variabel2;
        System.out.println(variabel1 + "+" + variabel2 + " = " + hasil);

        hasil = variabel1 - variabel2;
        System.out.printf(" %d - %d = %d \n" ,variabel1,variabel2,hasil);
        
        int nilaiINT = 255;
        System.out.println("/n nilai int = " + nilaiINT );

        int angka = 1;
        System.out.printf("Ini adalah unary +  =  %d \n" , +angka);
        System.out.printf("Ini adalah unary +  =  %d \n" , -angka);
        
        int number = 2;
        System.out.printf("Ini adalah increment prefix  =  %d \n" , ++number);
        number = 2;
        System.out.printf("Ini adalah increment postfix  =  %d \n" , number++);
        System.out.printf("Ini adalah increment +  =  %d \n" , number);
        
        boolean roqmun = true;
        System.out.println("ini adalah true = " + roqmun );
        System.out.println("ini adalah true = " + !roqmun );
        // \n\n\n\n
        // \n\n\n\n
        System.out.println("\n\n\n\nProses Assigment");
        int komparasi = 2;
        komparasi += 10;
        System.out.println("Maka hasil aritmatika = " + komparasi);
        int c = 10;
        c -= 2;
        System.out.println("Maka hasil aritmatika = " + c);
        int d = 10;
        d *= 2;
        System.out.println("Maka hasil aritmatika = " + d);
        int e = 10;
        e /= 5;
        System.out.println("Maka hasil aritmatika = " + e);
        int z = 10;
        z %= 5;
        System.out.println("Maka hasil aritmatika = " + z);

        System.out.println("\n\n\n\nProses Komparasi"); 
        int a , b;
        boolean hasilKOmparasi; 
        System.out.println("------- equal or Persamaan");
        a = 10;
        b = 20;
        hasilKOmparasi = (a == b);
        System.out.printf("%d == %d = %s" ,a,b,hasilKOmparasi );
        System.out.println("\n\n------- not equal or Pertidaksamaan");
        a = 10;
        b = 20;
        hasilKOmparasi = (a != b);
        System.out.printf("%d != %d = %s" ,a,b,hasilKOmparasi );
        
        System.out.println("\n\n------- less than or Kurang dari");
        a = 10;
        b = 20;
        hasilKOmparasi = (a < b);
        System.out.printf("%d < %d = %s" ,a,b,hasilKOmparasi );
        
        System.out.println("\n\n------- more than or Lebih dari");
        a = 10;
        b = 20;
        hasilKOmparasi = (a > b);
        System.out.printf("%d > %d = %s" ,a,b,hasilKOmparasi );
        
        System.out.println("\n\n------- less than qual or Kurang dari");
        a = 10;
        b = 20;
        hasilKOmparasi = (a <= b);
        System.out.printf("%d <= %d = %s" ,a,b,hasilKOmparasi );
        
        System.out.println("\n\n------- more than equal or Besar dari");
        a = 10;
        b = 20;
        hasilKOmparasi = (a >= b);
        System.out.printf("%d >= %d = %s" ,a,b,hasilKOmparasi );
        

        System.out.println("\n\n\n\nProses Logika"); 
        boolean m,n,v;
        System.out.println("==== OR (||) =====");
        m = false;
        n = false;
        v = (m||n);
        System.out.println(m + " || " + n + " = " + v);
        m = false;
        n = true;
        v = (m||n);
        System.out.println(m + " || " + n + " = " + v);
        m = true;
        n = false;
        v = (m||n);
        System.out.println(m + " || " + n + " = " + v);
        m = true;
        n = true;
        v = (m||n);
        System.out.println(m + " || " + n + " = " + v);
        
        // AND / dan (&&)
        
        System.out.println("==== AND (&&) =====");
        m = false;
        n = false;
        v = (m && n);
        System.out.println(m + " && " + n + " = " + v);
        m = false;
        n = true;
        v = (m&&n);
        System.out.println(m + " && " + n + " = " + v);
        m = true;
        n = false;
        v = (m&&n);
        System.out.println(m + " && " + n + " = " + v);
        m = true;
        n = true;
        v = (m&&n);
        System.out.println(m + " && " + n + " = " + v);
        
        
        // XOR / exlusive or (^)
        
        System.out.println("==== XOR (^) =====");
        m = false;
        n = false;
        v = (m ^ n);
        System.out.println(m + " ^ " + n + " = " + v);
        m = false;
        n = true;
        v = (m^n);
        System.out.println(m + " ^ " + n + " = " + v);
        m = true;
        n = false;
        v = (m^n);
        System.out.println(m + " ^ " + n + " = " + v);
        m = true;
        n = true;
        v = (m^n);
        System.out.println(m + " ^ " + n + " = " + v);

        // NOT / negasi --> flipping (!)
        System.out.println("==== NEGASI (!) ====");
        m = true;
        v = !m;
        System.out.println(m + " --> (!) = " + v);
        
        m = false;
        v = !m;
        System.out.println(m + " --> (!) = " + v);
        
        System.out.println("\n\n\n\nProses Bitwise"); 
        byte p = 0;
        String a_bits;
        a_bits = String.format("%8s", Integer.toBinaryString(p)).replace(' ', '0');
        System.out.printf("%s = %d \n", a_bits,p);
        
        
    }
}
