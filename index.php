<?php
include 'dbconfig.php';

$query = "SELECT * FROM film";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <table border="1" cellpadding="5" cellspacing="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Sutradara</th>
            <th>Tahun Rilis</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id_film'] ?></td>
                <td><?= $row['judul'] ?></td>
                <td><?= $row['sutradara'] ?></td>
                <td><?= $row['tahun_rilis'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
