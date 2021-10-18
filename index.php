<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h1>Borang Permohonan (A)</h1>
    <p>validation guna HTML</p>

    <form action="semak.php" method="post" >
        <table> 
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur" id="umur"></td>
            </tr>
        </table>
        <button type="submit">Hantar</button>
    </form>
    <p> 
        Hanya pemohon yang berumur antara 18 dan 45 tahun saja yang
        layak moohon.
    </p>
    <hr>
    <h1>Borang Permohonan (B)</h1>
    <p>validation guna HTML</p>

    <form action="semak.php" method="post" >
        <table> 
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur" id="umur"></td>
            </tr>
        </table>
        <button type="submit">Hantar</button>
    </form>
    <p> 
        Hanya pemohon yang berumur antara 18 dan 45 tahun saja yang
        layak moohon.
    </p>
    <script>
        function semak() {
            let nama = document.getElementById('nama').value;
            let umur = document.getElementById('umur').value;

            if (umur === ''){
                alert('sila isi nama anda');
                return false;
            } else if (nama.length < 2){
                alert('sila isi nama panjang.');
                return false;
            } else if (umur < 18 || umur > 45){
                alert('umur anda tidak layak');
                return false;
            }
        }
    </script>
    </hr>
    <hr>
    <h1>Borang Permohonan (C)</h1>
    <p>validation guna PHP</p>

    <form action="semak.php" method="post" >
        <table> 
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur" id="umur"></td>
            </tr>
        </table>
        <button type="submit">Hantar</button>
    </form>


</body>
</html>