<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List data cast</title>
</head>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($casts as $cast) { ?>
                <tr>
                    <td><?= $cast->id ?></td>
                    <td><?= $cast->nama ?></td>
                    <td><?= $cast->umur ?></td>
                    <td><?= $cast->bio ?></td>
                    <td><a href="/cast/<?= $cast->id ?>">View</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="/cast/create">Tambah cast</a>

</body>

</html>