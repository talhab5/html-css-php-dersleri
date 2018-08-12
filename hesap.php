<?php
	$sayi1 = 20;
	$sayi2 = 30;

	function topla($a, $b) {
		$toplam = $a + $b;
		echo 'Toplama: '.$toplam.'<br>';
	}

	function cikar($a, $b)
	{
		$kalan = $a - $b;
		echo 'Çıkarma: '.$kalan.'<br>';
	}

	function bol($a, $b) 
	{
		$bölen = $a / $b;
		echo 'bölme: '.$bölen.'<br>';
	}

	function carp($a, $b) 
	{
		$çarpma = $a * $b;
		echo 'çarpma: '.$çarpma.'<br>';
	}

	topla($sayi1, $sayi2);
	cikar($sayi1, $sayi2);
	bol($sayi1, $sayi2);
	carp($sayi1, $sayi2);

	function ekranayazdir()
	{
		echo 'Parametresiz Fonksiyon';
	}
	ekranayazdir();

	echo '<br>';

	$sayi3 = 10;
	//$sayi3++;  sayi 3 e   1 arttırır
	//$sayi3 = $sayi3 + 5
	$sayi3 += 5;
	echo $sayi3;

	$sayi3 -= 5;
	echo '<br>'.$sayi3;

	$sayi4 = 16;
	echo '<br>'.sqrt($sayi4);
	echo '<br>'.pow($sayi4, 2);

	$dizi = array('Talha', 1, 'BULUT');
	foreach($dizi as &$eleman);
	{
		echo $eleman.'<br>';	
	}

	$a = 5;
	echo '<br>';
	while($a <= 10);
	{
		echo $a.'<br>';
		$a += 1;
	}

	for($1 = 1; $1 <= 10; $1++);
	{
		echo $1.'<br>';
	}

	$yenisayi = 35;

	if($yenisayi < 30)
	{
		echo 'Sayı 30dan küçük';
	}

	else
	{
		echo 'Sayı 30dan küçük değil';
	}

	$sayi5 = 6;

	switch($sayi5) 
	{
		case 4
			echo 'sayı 4tür';
			break;
		case 5
			echo 'sayı 5tir'
			break;
		case 6
			echo 'sayı 6dır';
			break;
		default;
			echo 'yukarıdakilerin hiçbirini sağlamıyor';
			break;
	}
?>