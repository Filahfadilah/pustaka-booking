<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
</head>
<body>

    <center>
        <form action="<?= $this->config->config['base_url'].'mahasiswa/cetak';?>" method="post"> 
            <table>
                <tr>
                    <th colspan='3'>
                        Form Input Data Mahasiswa
                    </th>
                </tr>
                
                <tr>
                    <th colspan='3'>
                        <hr>
                    </th>
                </tr>
                <tr>
                    <th >
                        NIM
                    </th>
                    <th>:</th>
                    <td>
                        <input type="number" name="nim" id="nim">
                    </td>
                </tr>
                <tr>
                    <th >
                        Nama Lengkap
                    </th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama_lengkap" id="nama_lengkap">
                    </td>
                </tr>
                <tr>
                    <th >
                        Program Studi
                    </th>
                    <th>:</th>
                    <td>
                        <input type="text" name="program_studi" id="program_studi">
                    </td>
                </tr>
                <tr>
                    <th >
                        Semester
                    </th>
                    <th>:</th>
                    <td>
                        <select name="semester" id="semester">
                            <option value="">Pilih Semester</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th >
                        IPK
                    </th>
                    <th>:</th>
                    <td>
                        <input type="number" name="ipk" id="ipk">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>