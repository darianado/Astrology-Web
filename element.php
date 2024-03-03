<html>

<head>
	<link rel="stylesheet" type="text/css" href="frame.css">	
</head>
<?php
if (!isset($_POST["submit"]))

	echo "
			<body style='margin-top:0;'> 
				<img src='media/roata_zodii.png'>
				<p><br><br><br><br>Calităţile zodiilor se referă mai ales la aspectele dinamice, 
				tranzitorii, asta în timp ce Elementele se referă la aspecte statice, 
				la trăsături intrinseci ale acestora. Astfel, semnul zodiacal este o asociere 
				unică a unei Calităţi cu un Element.</p>
		 ";

else {
	echo '<body style="display:flex;">';
	$zi = $_POST['day'];
	$luna = $_POST["month"];

	echo '<div class="col_marg">
				<h2 align="center">Element</h2>';

	if (
		$zi >= "22" && $luna == "dec"
		|| $zi < "20" && $luna == "ian" ||   //cap
		$zi >= "20" && $luna == "apr"
		|| $zi < "21" && $luna == "mai" ||    //taur
		$zi >= "23" && $luna == "aug"
		|| $zi < "23" && $luna == "sep"
	)      //fec
		echo "<p><img src='media/earth.png'> Fiecare triunghi format de zodii 
		pe cerc esta caracterizată de trăsătură uneia din cele 4 stări fundamentale ale universului.
		Nativii elementului feminin<b> Pământ </b>au că trăsătură predominantă spiritul practic. Aceștia țin foarte mult 
		la bunăstarea lor fizică și materială. Preocupați foarte mult de propriul
		corp, acești oameni sunt și pasionali, senzuali, practici, organizați 
		și determinați. Cei născuți sub aceste semne zodiacale nu sunt 
		firi aventuriere, nu le place riscul și trec la acțiune doar după 
		o analiză lungă și metodică. Sunt materialiști și pun mare preț pe 
		lucrurile fizice din posesia lor, dar în același timp, sunt responsabili 
		și au un atașament deosebit față de familie, stabilitate și confort.</p>";

	else if (
		$zi >= "20" && $luna == "ian"
		|| $zi < "19" && $luna == "feb" ||     //vars
		$zi >= "21" && $luna == "mai"
		|| $zi < "21" && $luna == "iun" ||     //gemeni
		$zi >= "23" && $luna == "sep"
		|| $zi < "23" && $luna == "oct"
	)        //balanta
		echo "<p><img src='media/air.png'>Fiecare triunghi format de zodii 
		pe cerc esta caracterizată de trăsătură uneia din cele 4 stări fundamentale ale universului.
		Nativii născuți în semnul masculin<b> Aer</b>
		au ca trăsătură dominantă intelectul. Aceștia sunt 
		persoane cu o curiozitate nativă, deschise la minte, cu gândire analitică 
		și cu o mare capacitate de conceptualizare. Sunt caracterizate de 
		calmitate și obiectivitate, dar dau dovadă de apatie, nervozitate sau 
		deprimare atunci când echilibrul vieții lor este deranjat. 
		Reprezentații elementului Aer sunt sinceri, prietenoși, 
		cooperanți și loiali.</p>";

	else if (
		$zi >= "19" && $luna == "feb"
		|| $zi < "21" && $luna == "mar" ||      //pesti
		$zi >= "21" && $luna == "iun"
		|| $zi < "24" && $luna == "iul" ||       //rac
		$zi >= "23" && $luna == "oct"
		|| $zi < "23" && $luna == "noi"
	)          //scorp
		echo "<p><img src='media/water.png'>Fiecare triunghi format de zodii 
		pe cerc esta caracterizată de trăsătură uneia din cele 4 stări fundamentale ale universului.
		Trăsătura dominantă de caracter a 
		nativilor din elementul feminin <b>Apă</b> este emoționalul. Ei sunt profunzi, 
		intimi și vulnerabili, oameni empatici care îi simt mai bine pe cei din jur,
		dau dovadă de compasiune și înțelegere și sunt foarte implicați 
		în relațiile afectuoase. Nativii acestui element sunt foarte profund 
		atașați de familie și de prietenii importanți din viața lor. 
		Nu sunt persoane raționale, ci mai degrabă artistice și melancolice.</p>";

	else if (
		$zi >= "21" && $luna == "mar"
		|| $zi < "20" && $luna == "apr" ||         //berbe
		$zi >= "24" && $luna == "iul"
		|| $zi < "23" && $luna == "aug" ||        //leu
		$zi >= "23" && $luna == "noi"
		|| $zi < "22" && $luna == "dec"
	)         //sage
		echo "<p><img src='media/fire.png'>Fiecare triunghi format de zodii 
		pe cerc esta caracterizată de trăsătura uneia din cele 4 stări fundamentale ale universului.
		Caracterizați de latura fizică a lucrurilor, 
		nativii elementului masculin <b>Foc</b> sunt oameni ambițioși, 
		care nu renunță ușor la ceea ce și-au propus, colerici, a
		gitați și instinctivi. Aceste persoane sunt active și sociabile, 
		comunicative cu cei din jur și fac alegeri de viață inspirate. 
		De asemenea, sunt caracterizate de independență, de nevoia de a 
		câștiga și de curajul de care dau dovadă în situațiile care cer acest lucru.
		În viața amoroasă, nativii elementului Foc sunt oameni pasionali, 
		irezistibili, fermecători și arzători, care iubesc cu dăruire și 
		necondiționat.</p>";

	echo '</div>';

	echo '<div class="col_marg">
		<h2 align="center">Calitate</h2>';

	if (
		$zi >= "22" && $luna == "dec"
		|| $zi < "20" && $luna == "ian"
		|| $zi >= "21" && $luna == "mar"
		|| $zi < "20" && $luna == "apr"
		|| $zi >= "21" && $luna == "iun"
		|| $zi < "24" && $luna == "iul"
		|| $zi >= "23" && $luna == "sep"
		|| $zi < "23" && $luna == "oct"
	)
		echo " <p> <img src='media/cardinal.png'>Crucea cardinală este formată din semnele care, pe Zodiac, 
			încep la cele patru puncte cardinale. În acest caz, semnele 
			<b>Cardinale</b> sunt caracterizate de iniţiativă, influenţă, 
			autoritate, entuziasm, spirit de lider şi de inovaţie, chiar pionierat. 
			Pentru că Soarele parcurge un semn Cardinal la începutul fiecăruia din cele 
			patru anotimpuri, un semn Cardinal este asociat cu începutul unei etape noi 
			dintr-un ciclu natural, firesc. </p>";

	else if (
		$zi >= "20" && $luna == "ian"
		|| $zi < "19" && $luna == "feb"
		|| $zi >= "20" && $luna == "apr"
		|| $zi < "21" && $luna == "mai"
		|| $zi >= "24" && $luna == "iul"
		|| $zi < "23" && $luna == "aug"
		|| $zi >= "23" && $luna == "oct"
		|| $zi < "23" && $luna == "noi"
	)
		echo "<p><img src='media/fixed.png'>Crucea fixă este alcătuită din 
			patru semne care formeaza pe cerc unghi de 90 de grade intre ele. 
			Semnele <b>Fixe</b> sunt definite de continuitate, perseverenţă, răbdare, 
			tenacitate, dar şi de conservatorism, calităţi de bun executant, 
			prudenţă şi un simţ practice deosebit. Soarele parcurge un semn 
			Fix la mijlocul fiecărui anotimp, aceasta fiind perioada când 
			caracteristicile anotimpului respectiv sunt cel mai bine fixate şi 
			evidenţiate. Prin urmare, un semn Fix este asociat cu un moment de 
			stabilitate şi derulare constantă a lucrurilor.</p>";

	else if (
		$zi >= "19" && $luna == "feb"
		|| $zi < "21" && $luna == "mar"
		|| $zi >= "21" && $luna == "mai"
		|| $zi < "21" && $luna == "iun"
		|| $zi >= "23" && $luna == "aug"
		|| $zi < "23" && $luna == "sep"
		|| $zi >= "23" && $luna == "noi"
		|| $zi < "22" && $luna == "dec"
	)
		echo "<p><img src='media/mutable.png'>Crucea mobilă este alcătuită din 
			patru semne care formeaza pe cerc unghi de 90 de grade intre ele. 
			Semnele <b>Mobile</b> denotă mobilitate, dualitate, flexibilitate, 
			agilitate, dar şi inconsecvenţă, instabilitate sau un caracter schimbator. 
			Soarele parcurge un semn Mobil atunci când se apropie de sfârşitul unui anotimp, 
			aşa că un semn Mobil stă sub semnul schimbării, a înlocuirii unei condiţii 
		cu alta, dar şi de pregătire pentru a trece la o altă etapă.</p>";
}


echo '</div>'; ?>



</body>

</html>