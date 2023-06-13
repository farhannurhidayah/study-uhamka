package com.tutorial;

public class test {
 public static void main(String[] args){
    int a = 0;
    boolean kondisi = true;

    do {
        ++a;
        System.out.println("Ini looping ke-" + a);
        
        if (a == 100){
            kondisi = false;
        }
    }while (kondisi);

    System.out.println("asdasd");
 }   
}