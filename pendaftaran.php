<!DOCTYPE html>
<html lang="en">
<head>
    <title>PENDAFTARAN</title>
</head>
<center>
<body>
    <h3>Pendaftaran Siswa Baru 
        SMKN 1 SAYUNG</h3>
    <form action="proses.php" methode="post">
        <table border=0>
            <tr>
                <td>nama :</td>
                <td><input type="text" name="nama"/></td>
            </tr>
            <tr>
                <td>tempat lahir :</td>
                <td><input type="text"name="tempat"/></td>
            </tr>
            <tr>
                <td>tanggal lahir :</td>
                <td><input type="date"name="tanggal"/></td>
            </tr>
            <tr>
                <td>jenis kelamin :</td>
                <td><input type="radio" name="jk"/>laki-laki</td>
                <td><input type="radio" name="jk/">perempuan</td>
            </tr>
            <tr>
                    <td>alamat :</td>
                    <td>
                       <td><tetxtarea name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td>agama :</td>
                    <td><sselect name="agama">
                            <option value="islam">islam
                            <option value="kristen">kristen
                            <option value="katolik">katolik
                            <option value="hindu">hindu
                            <option value="budha">budha
                            <option value="konghuchu">konghuchu

                            </select> </td>
                        </tr>
                    <tr>
                    <td><input type="reset" value="ulangi" /></td>
                       <td> <input type="submit" value="submit" /></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>