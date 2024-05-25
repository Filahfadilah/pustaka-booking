<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>
</head>

<body>

    <center>
        <table>
            <tr>
                <th colspan='3'>
                    Tampil Data Mahasiswa
                </th>
            </tr>

            <tr>
                <th colspan='3'>
                    <hr>
                </th>
            </tr>
            <tr>
                <th>
                    NIM
                </th>
                <th>:</th>
                <td>
                    <?= $nim; ?>
                </td>
            </tr>
            <tr>
                <th>
                Nama Lengkap
                </th>
                <th>:</th>
                <td>
                    <?= $nama_lengkap; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Program Studi
                </th>
                <th>:</th>
                <td>
                    <?= $program_studi; ?>
                </td>
            </tr>
            <tr>
            <tr>
                <th>
                    Semester
                </th>
                <th>:</th>
                <td>
                    <?= $semester; ?>
                </td>
            </tr>
            <tr>
            <tr>
                <th>
                IPK
                </th>
                <th>:</th>
                <td>
                    <?= $ipk; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= $this->config->config['base_url'] . ''; ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>