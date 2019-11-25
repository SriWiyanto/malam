/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author SMK2
 */
public class Segitiga2 {
double alas ;
double tinggi ;
void cetakluas() {
System.out.println("Luas Segitiga = " + ((alas * tinggi)/2));
}
}
class Segitiga2App {
public static void main(String[] args) {
Segitiga2 p1 = new Segitiga2();
Segitiga2 p2 = new Segitiga2();
p1.alas = 10;
p1.tinggi = 8;
p2.alas = 5;
p2.tinggi = 4;
p1.cetakluas();
p2.cetakluas();
}
}