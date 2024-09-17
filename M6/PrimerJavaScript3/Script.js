var num1 = prompt ("Escriu el primer numero")
var num2 = prompt ("Escriu el segon numero")
var operacio = prompt ("Escriu si vols sumar o multiplicar")

numero1 = parseInt(num1);
numero2 = parseInt(num2);
var suma=numero1+numero2;
var multiplicacio=numero1*numero2;
if (operacio == "sumar") document.write("El resultat és:" +suma);
if (operacio == "multiplicar") document.write("El resultat és:" +multiplicacio);