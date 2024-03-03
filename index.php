<!DOCTYPE html>
<html>

<head>
	<title>AstroLearnogy</title>
	<link rel="stylesheet" href="style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<div id="tot">
		<header style="background-image:url(media/cer.gif)">
			<div id="titlu_bara">
				<h1>AstroLearnogy</h1>
			</div>
			<div id="titlu">
				<p id="titlu1">Dicționar Astrologic</p>
				<p id="titlu2">harta astrologică și cele 3 componente</p>
			</div>
		</header>

		<div class="main" style="height:auto;">
			<div class="col_marg">
				<a href="1.html">
					<div class="cutie">
						<h2>CUM? <h3>zodii</h3></h2>
						<p>Ce este harta astrologică?<br>Care sunt trăsăturile zodiilor?</p>
					</div>
				</a>
			</div>
			<div class="col_mij">
				<a href="2.html">
					<div class="cutie">
						<h2>CE? <h3>planete</h3></h2>
						<p>Care sunt? Ce reprezintă simbolurile?<br> Ce controleaza fiecare? </p>
					</div>
				</a>
			</div>
			<div class="col_marg">
				<a href="3.html">
					<div class="cutie">
						<h2>UNDE? <h3>case</h3></h2>
						<p>Ce domenii ale vieții reprezintă?<br> Despre ce este vorba în ele?</p>
					</div>
				</a>
			</div>
		</div>

		<footer><br><br><br><br>
			<p id="ancora">Ajută la studiul nostru! Completează formularul
				de mai jos pentru a ne cunoaste și înțelege mai bine comunitatea:</p>
			<?php
			$eroare_nume = array(null, null);
			$eroare_soare = null;
			$gata = array(null, null);
			$nume = null;
			$deja_exista = null;
			?>
			<?php include 'test.php'; ?>
			<form method="post" action="#ancora">
				<div class="el_form">
					<label><b>Nume:</b></label>
					<input type="text" name="nume" value="<?php echo $nume; ?>"><br>
					<?php echo '<p style="color:red;font-size:16px;"><b>' . $eroare_nume[0] .'</b>'. $eroare_nume[1] . '</p>'; ?>
					<?php if ($eroare_soare && !$eroare_nume[0]) echo "<br>"; ?>
				</div>
				<div class="el_form">
					<label><b> Soare</b></label>

					<select name="soare">
						<option value="0">-</option>
						<option value="1">berbec</option>
						<option value="2">taur</option>
						<option value="3">gemeni</option>
						<option value="4">rac</option>
						<option value="5">leu</option>
						<option value="6">fecioară</option>
						<option value="7">balanță</option>
						<option value="8">scorpion</option>
						<option value="9">săgetător</option>
						<option value="10">capricorn</option>
						<option value="11">vărsător</option>
						<option value="12">pești</option>
					</select><br>
					<?php echo '<p style="color:red;font-size:16px;">' . $eroare_soare . '</p>' ?>
					<?php if ($eroare_nume[0] && !$eroare_soare) echo "<br>"; ?>

				</div>
				<div class="el_form">
					<label><b> Luna</b></label>

					<select name="luna">
					<option value="0">-</option>
						<option value="1">berbec</option>
						<option value="2">taur</option>
						<option value="3">gemeni</option>
						<option value="4">rac</option>
						<option value="5">leu</option>
						<option value="6">fecioară</option>
						<option value="7">balanță</option>
						<option value="8">scorpion</option>
						<option value="9">săgetător</option>
						<option value="10">capricorn</option>
						<option value="11">vărsător</option>
						<option value="12">pești</option>
					</select>
					<br>
					<?php if ($eroare_nume[0] || $eroare_soare) echo "<br><br>"; ?>
				</div>
				<div class="el_form">
					<label><b> Ascendent</b></label>

					<select name="asc">
					<option value="0">-</option>
						<option value="1">berbec</option>
						<option value="2">taur</option>
						<option value="3">gemeni</option>
						<option value="4">rac</option>
						<option value="5">leu</option>
						<option value="6">fecioară</option>
						<option value="7">balanță</option>
						<option value="8">scorpion</option>
						<option value="9">săgetător</option>
						<option value="10">capricorn</option>
						<option value="11">vărsător</option>
						<option value="12">pești</option>
					</select>
					<br>
					<?php if ($eroare_nume[0] || $eroare_soare) echo "<br><br>"; ?>
				</div>
				
				<br><input type="submit" name="submit" value="Multumim!">
				<br>
				<?php echo $gata[0] . $gata[1]; ?>
			</form>
			<p style="font-size:14px;">astrolearnogy@contact.com <br>©2020 created by Dariana Dorin</p>

		</footer>

	</div>
</body>

</html>