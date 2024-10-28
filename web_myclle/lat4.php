<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <link rel="stylesheet" href="lat4.css">
</head>
<body>
    <div id="container">
        <header>
            <div class="judul">
                <h1>Makanan Khas Indonesia</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="lat4.php?gambar=rendang">Rendang</a></li>
                    <li><a href="lat4.php?gambar=sotoayam">Soto Ayam</a></li>
                    <li><a href="lat4.php?gambar=lontongopor">Lontong Opor</a></li>
                    <li><a href="lat4.php?gambar=gadogado">Gado-Gado</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
                if(isset($_GET['gambar'])){
                    $gambar=$_GET['gambar'];
                    switch($gambar){
                        case "rendang":
                            ?><img src="gambar/rendang.jpg" alt="rendang" width="100%">
                        <?php
                        break;
                        case "sotoayam":
                            ?><img src="gambar/sotoayam.jpg" alt="sotoayam" width="100%">
                        <?php
                        break;
                        case "lontongopor":
                            ?><img src="gambar/lontongopor.jpg" alt="lontongopor" width="100%">
                        <?php
                        break;
                        case "gadogado":
                            ?><img src="gambar/gadogado.jpg" alt="gadogado" width="100%">
                        <?php
                        break;
                    }
                }
            ?>
        </main>
    </div>
</body>
</html>