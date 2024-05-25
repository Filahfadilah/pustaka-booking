<html>

<head>
    <title>Form Input mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data mahasiswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" id="nim">
                    </td>
                </tr>
                <tr>
                    <th>kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>tanggallahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tanggallahir" id="tanggallahir">
                    </td>
                </tr>
                <tr>
                    <th>tempatlahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempatlahir" id="tempatlahir">
                    </td>
                </tr>
                <tr>
                    <th>alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                 </tr>
                <tr>
                     <th>jenis kelamin</th>
                     <td>:</td>
                     <td>
    
                    <input type="radio" id="laki" name="jenis_kelamin" value="laki-laki">
                 <label for="laki">Laki-Laki</label><br>
                        
                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
                 <label for="perempuan">Perempuan</label><br>
                    </td>
                </tr>
                <tr>
                    <th>agama</th>
                    <td>:</td>
                    <td>
                         <select name="agama" id="agama">
                            <option value="">Pilih agamar</option>
                            <option value="islam">islam</option>
                            <option value="kristen">kristen</option>
                            <option value="katolik">katolik</option>
                            <option value="hindu">hindu</option>
                            <option value="prostestan">prostetan</option>
                            <option value="khonghucu">khonghucu</option>
                        </select>
                    </td>
                
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>