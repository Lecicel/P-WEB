<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tes.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Tes Praktik Pemograman Web</h1>
        </header>
        <main>
            <div class="judul">
                <h2>Gaji Karyawan</h2>
            </div>
            <form action="tes.php" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama"> <br>

                <label for="jabatan">Jabatan</label>
                <select name="jabatan" id="jabatan">
                    <option value="produksi">Produksi</option>
                    <option value="pemasaran">Pemasaran</option>
                    <option value="manajemen">Manajemen</option>
                </select> <br>

                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="menikah">Menikah</option>
                    <option value="lajang">Lajang</option>
                </select><br>

                <label for="anak">Jumlah Anak</label>
                <input type="text" name="anak" id="anak"> <br>

                <input type="submit" value="Hitung" name="hitung">
            </form>
        </main>
        <footer>
    </div>
        <h5>Dibuat Oleh Myclle</h5>
    </footer>
    <?php
        if(isset($_POST['hitung'])){
            $nama=$_POST['nama'];
            $jabatan=$_POST['jabatan'];
            $status=$_POST['status'];
            $anak=$_POST['anak'];

            if ($jabatan="Produksi"){
                $gaji=100000;
            }
            elseif ($jabatan="Pemasaran"){
                $gaji=120000;
            }
            elseif ($jabatan="Manajemen"){
                $gaji=150000;
            }
            else {
                $gaji=0;
            }

            if ($status="Menikah"){
                $tunjangan1=1000000;
            }
            elseif ($status="Lajang"){
                $tunjangan1=0;
            }
            else {
                $tunjangan1=0;
            }
            
            if($anak>=2){
                $tunjangan2=75000*2;
            }
            elseif ($anak=1){
                $tunjangan2=75000;
            }
            else{
                $tunjangan2=0;
            }

            $total=($gaji*25) + $tunjangan1 + $tunjangan2;

            if($total>=2000000){
                $pajak=$total*0.01;
            }
            else{
                $pajak=0;
            }

            $gajibersih=$total - $pajak;

            ?>

        <table border=1>
            <tr>
                <td>Nama</td>
                <td>Jabatan</td>
                <td>Status</td>
                <td>Anak</td>
                <td>Gaji Bersih</td>
            </tr>
            <tr>
                <td><?= $nama;?></td>
                <td><?= $jabatan;?></td>
                <td><?= $status;?></td>
                <td><?= $anak;?></td>
                <td><?= $gajibersih;?></td>
            </tr>
        </table>
        <?php
    }
?>
</body>
</html>