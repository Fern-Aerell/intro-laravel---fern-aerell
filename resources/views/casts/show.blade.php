<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show cast</title>
</head>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $cast->id ?></td>
                <td><?= $cast->nama ?></td>
                <td><?= $cast->umur ?></td>
                <td><?= $cast->bio ?></td>
                <td><a href="/cast/{{ $cast->id }}/edit">Edit</a></td>
                <td>
                    <form action="/cast/{{ $cast->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="/cast">Kembali</a>

</body>

</html>