
<?php

if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "...";
    $password = "...";
    $dbname = "...";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn)
    {
        echo "Connection failed: " . mysqli_connect_error();
    }
    $nume = $_POST['nume'];
    $soare = $_POST['soare'];
    $luna = $_POST['luna'];
    $asc = $_POST['asc'];

    if (!$nume) $eroare_nume = array("Introduceți numele!", null);
    else{
    $deja_exista = mysqli_query($conn, "SELECT * FROM vizitatori WHERE (vizitatori.nume='$nume')");
    if (mysqli_num_rows($deja_exista)) $eroare_nume = array($nume, ", te cunoaștem deja!");
    else {

        if (!$soare)
            $eroare_soare = "Introduceți cel puțin zodia soarelui!";
        else {

            $sql = "INSERT INTO vizitatori (nume,soare,luna,asce) 
		values('$nume','$soare','$luna','$asc')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $gata = array($nume, ", ai fost înregistrat!");
                $nume = null;
            }
            mysqli_close($conn);
        }
    }
}
}
?>
