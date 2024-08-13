<html>
    <form action="" method="get">
        <input type="number" name="angka1" placeholder="Angka 1">
        <br>
        <input type="number" name="angka2" placeholder="Angka 2">
        <button type="submit">no reason</button>
    </form>
</html>

<h2>
<?php
    if (isset($_GET['angka1']) && isset($_GET['angka2'])) {
        $no1 = $_GET['angka1'];
        $no2 = $_GET['angka2'];
        $hasil = $no1 + $no2;
        echo "Hasilnya $no1 + $no2 = $hasil ^-^";}
?>
</h2>
