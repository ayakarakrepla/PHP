<?php
	$xml = @simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
	foreach ($xml -> Currency as $Currency) {
		// USD FOREX ALIŞ-SATIŞ
		if($Currency['Kod'] == "USD"){
			$usd_FA = $Currency -> ForexBuying;
			$usd_FS = $Currency -> ForexSelling;
		}
		// USD EFEKTİF ALIŞ-SATIŞ
		if($Currency['Kod'] == "USD"){
			$usd_EA = $Currency -> BanknoteBuying;
			$usd_ES = $Currency -> BanknoteSelling;
		}
		// EURO FOREX ALIŞ-SATIŞ
		if($Currency['Kod'] == "EUR"){
			$eur_FA = $Currency -> ForexBuying;
			$eur_FS = $Currency -> ForexSelling;
		}
		// EURO EFEKTİF ALIŞ-SATIŞ
		if($Currency['Kod'] == "EUR"){
			$eur_EA = $Currency -> BanknoteBuying;
			$eur_ES = $Currency -> BanknoteSelling;
		}
		// STERLİN FOREX ALIŞ-SATIŞ
		if($Currency['Kod'] == "GBP"){
			$gbp_FA = $Currency -> ForexBuying;
			$gbp_FS = $Currency -> ForexSelling;
		}
		// STERLİN EFEKTİF ALIŞ-SATIŞ
		if($Currency['Kod'] == "GBP"){
			$gbp_EA = $Currency -> BanknoteBuying;
			$gbp_ES = $Currency -> BanknoteSelling;
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TCMB Döviz Kurları</title>
	</head>
	<body>
		<table>
			<tr>
				<td style="width: 180px;"><strong>Para Birimi</strong></td>
				<td style="width: 70px;"><strong>Alış</strong></td>
				<td style="width: 70px;"><strong>Satış</strong></td>
			</tr>
			<tr>
				<td>Dolar (USD) - Forex</td>
				<td><?php echo $usd_FA; ?> ₺</td>
				<td><?php echo $usd_FS; ?> ₺</td>
			</tr>
			<tr>
				<td>Dolar (USD) - Efektif</td>
				<td><?php echo $usd_EA; ?> ₺</td>
				<td><?php echo $usd_ES; ?> ₺</td>
			</tr>
			<tr>
				<td>Euro (EUR) - Forex</td>
				<td><?php echo $eur_FA; ?> ₺</td>
				<td><?php echo $eur_FS; ?> ₺</td>
			</tr>
			<tr>
				<td>Euro (EUR) - Efektif</td>
				<td><?php echo $eur_EA; ?> ₺</td>
				<td><?php echo $eur_ES; ?> ₺</td>
			</tr>
				<tr>
				<td>Sterlin (GBP) - Forex</td>
				<td><?php echo $gbp_FA; ?> ₺</td>
				<td><?php echo $gbp_FS; ?> ₺</td>
			</tr>
			<tr>
				<td>Sterlin (GBP) - Efektif</td>
				<td><?php echo $gbp_EA; ?> ₺</td>
				<td><?php echo $gbp_ES; ?> ₺</td>
			</tr>
		</table>

		<br />Tüm kurlar için: <a href="http://www.tcmb.gov.tr/kurlar/today.xml" target="_blank">TCMB Döviz Kurları</a>
	</body>
</html>