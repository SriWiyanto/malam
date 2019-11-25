/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Persegi;

/**
 *
 * @author SMK2
 */
public class Persegi {
    double sisi;
    double hitungluas() {
    return (sisi*sisi);
    }
    }
    class PersegiApp {
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    Persegi p1 = new Persegi();
    Persegi p2 = new Persegi();
    p1.sisi = 10;
    p2.sisi = 5;
    System.out.println("Luas Persegi = " + p1.hitungluas());
    System.out.println("Luas Persegi = " + p2.hitungluas());
    }
    }
