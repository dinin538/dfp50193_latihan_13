<?php
$nama = $_POST['nama'];
$umur = $_POST['umur'];

if($nama== ''){
?>
    <script>
    alert('sila isi nama anda');
    window.location ='index.php';
    </script>
    <?php
} else if (strlen($nama) < 2) {
?>
    <script>
         alert('sila isi nama panjang.');
         window.location = 'index.php';
    </script>
<?php
}else if ($umur < 18 or $umur > 45){
?>
    <script>
        aert('Umur anda tidak laayk');
        window.location ='index.php'
    </script>
<?php
} else {
    echo 'Nama: ' .$nama . '<br>Umur: ' .$umur . ' tahun';
}
