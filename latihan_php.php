<!DOCTYPE html>
<html>

<head>
<title>Input Data Pegawai</title>
<style>
    body {
    font-family: Arial, sans-serif;
    }

    input[type="text"],
    select,
    input[type="number"] {
    margin-bottom: 10px;
    idth: 200px;
    padding: 5px;
    }

    input[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    }
</style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jumlah_anak = isset($_POST['jumlah-anak']) ? $_POST['jumlah-anak'] : '';

    echo "<h2>Data Pegawai:</h2>";
    echo "<p>Nama Pegawai: " . $nama . "</p>";
    echo "<p>Agama: " . $agama . "</p>";
    echo "<p>Jabatan: " . $jabatan . "</p>";
    echo "<p>Status: " . $status . "</p>";

    if ($status == 'Menikah') {
    echo "<p>Jumlah Anak: " . $jumlah_anak . "</p>";
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="nama">Nama Pegawai:</label><br>
    <input type="text" id="nama" name="nama" value=" "><br>

    <label for="agama">Agama:</label><br>
    <input type="text" id="agama" name="agama" value=" "><br>

    <label for="jabatan">Jabatan:</label><br>
    <select id="jabatan" name="jabatan">
    <option value="Manager">Manager</option>
    <option value="Asisten">Asisten</option>
    <option value="Kabag">Kabag</option>
    <option value="Staff">Staff</option>
    </select><br>

    <label for="status">Status:</label><br>
    <input type="radio" id="menikah" name="status" value="Menikah" checked>
    <label for="menikah">Menikah</label><br>
    <input type="radio" id="belum-menikah" name="status" value="Belum Menikah">
    <label for="belum-menikah">Belum Menikah</label><br>

    <label for="jumlah-anak">Jumlah Anak:</label><br>
    <input type="number" id="jumlah-anak" name="jumlah-anak" value=" "><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>