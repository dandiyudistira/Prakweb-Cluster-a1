<?php
	$input1 = 20;
	$input2 = 5;
	
	#Operator aritmatika penjumlahan
	$penjumlahan = $input2 + $input2;
	
	//Operator aritmatika pengurangan
	$pengurangan = $input2 - $input2;
	
	/*Operator aritmatika perkalian*/
	$perkalian = $input1 * $input2;
	
	#Operator aritmatika pembagian
	$pembagian = $input1 / $input2;
	
	/*Operator aritmatika modulus*/
	$hasilbagi = $input1 % $input2;
	
	//Menampilkan pada browser
	echo "Bilangan 1 = ".$input1."<br>";
	echo "Bilangan 2 = ".$input2."<br><br>";
	echo "Berikut merupakan hasil dari setiap operasi<br><br>";
	echo "PENJUMLAHAN<br>";
	echo "Operator : + <br>";
	echo "Hasil : ".$penjumlahan."<br><br>";
	echo "PENGURANGAN<br>";
	echo "Operator : - <br>";
	echo "Hasil : ".$pengurangan."<br><br>";
	echo "PERKALIAN<br>";
	echo "Operator : * <br>";
	echo "Hasil : ".$perkalian."<br><br>";
	echo "PEMBAGIAN<br>";
	echo "Operator : / <br>";
	echo "Hasil : ".$pembagian."<br><br>";
	echo "MODULUS<br>";
	echo "Operator : % <br>";
	echo "Hasil : ".$hasilbagi."<br><br>";
?>