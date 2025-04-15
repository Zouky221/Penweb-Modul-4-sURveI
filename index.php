<!DOCTYPE html>
<html>
<head>
    <title>Form Survei</title>
    <a href="grafik.php" style="display:inline-block; margin-top:10px; text-decoration:none; background:#28a745; color:white; padding:8px 12px; border-radius:5px;">Lihat Hasil Survei</a>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Form Survei</h2>
    <form action="simpan.php" method="post">
        Nama: <input type="text" name="nama" required><br>
        Pilihan:
        <select name="pilihan">
            <option value="A">Pilihan A</option>
            <option value="B">Pilihan B</option>
            <option value="C">Pilihan C</option>
        </select><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
