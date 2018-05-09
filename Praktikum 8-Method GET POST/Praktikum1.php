<html>
    <head><title>Pengolahan Form 1</title></head>
    <body>
        <FORM ACTION="" METHOD="POST" NAME="INPUT">
        Nama Anda : <input type="text" name="nama"><br>
        <input type="submit" name="input" value="input">
        </FROM>
    </body>
</html>
<?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    echo "Nama Anda : <b>$nama</b>";
}
?>