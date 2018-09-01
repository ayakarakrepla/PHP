<?php
	/*
		strtotime('2018-07-19') ifadesinin içindeki parametreyi VT'den çekilen değişken olarak göstermek gerekir.
		Yani
			strtotime('2018-07-19')
			strtotime($row['birthDay'])
		gibi yapılabilir. Buradaki "$row['birthDay']" VT'den çekilen "yyyy-aa-gg" biçimindeki bir tarihtir.
	*/
	echo date('d/m/Y', strtotime('2018-07-19'));
?>

<br><br>

