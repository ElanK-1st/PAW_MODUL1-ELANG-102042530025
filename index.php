<?php

$produk = [
    [
        "nama" => "Laptop ASUS VivoBook",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 5
    ],
    [
        "nama" => "Mouse Logitech G102",
        "kategori" => "Aksesoris",
        "harga" => 275000,
        "stok" => 12
    ],
    [
        "nama" => "Keyboard Mechanical",
        "kategori" => "Aksesoris",
        "harga" => 1200000,
        "stok" => 4
    ],
    [
        "nama" => "Monitor LG 24 Inch",
        "kategori" => "Monitor",
        "harga" => 2100000,
        "stok" => 0
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 750000,
        "stok" => 8
    ],
    [
        "nama" => "SSD NVMe 1TB",
        "kategori" => "Storage",
        "harga" => 1350000,
        "stok" => 6
    ]
];

// Function untuk format Rupiah
function rupiah($harga)
{
    return "Rp" . number_format($harga, 0, ',', '.');
}

// Function untuk menghitung harga setelah diskon
function hargaDiskon($harga)
{
    return $harga - ($harga * 10 / 100);
}

// Menghitung jumlah produk
$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SukaMundur Store</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">

        <div class="logo">
            SukaMundur Store
        </div>

        <nav>
            <a href="#home">Home</a>
            <a href="#produk">Produk</a>
            <a href="#tentang">Tentang</a>
        </nav>

    </header>


    <!-- HERO -->
    <section class="hero" id="home">

        <div class="hero-content">

            <p class="label">
                SUKAMUNDUR STORE
            </p>

            <h1>
                Perangkat Teknologi
                untuk Kebutuhanmu
            </h1>

            <p>
                Temukan berbagai perangkat dan aksesoris
                teknologi dengan harga terbaik.
            </p>

            <a href="#produk" class="hero-button">
                Lihat Produk
            </a>

        </div>

    </section>


    <!-- JUMLAH PRODUK -->
    <section class="info">

        <div>

            <span class="info-number">
                <?php echo $jumlahProduk; ?>
            </span>

            <span class="info-text">
                Produk di Katalog
            </span>

        </div>

    </section>


    <!-- KATALOG PRODUK -->
    <section class="catalog" id="produk">

        <div class="section-title">

            <p class="label">
                KATALOG
            </p>

            <h2>
                Produk SukaMundur Store
            </h2>

            <p>
                Pilih produk yang sesuai dengan kebutuhanmu.
            </p>

        </div>


        <div class="product-grid">

            <?php foreach ($produk as $item) { ?>

                <div class="product-card">

                    <div class="product-image">

                        <?php
                        echo strtoupper(
                            substr($item["nama"], 0, 1)
                        );
                        ?>

                    </div>


                    <div class="product-content">

                        <span class="category">
                            <?php
                            echo $item["kategori"];
                            ?>
                        </span>


                        <h3>
                            <?php
                            echo $item["nama"];
                            ?>
                        </h3>


                        <!-- CEK DISKON -->
                        <?php if ($item["harga"] >= 1000000) { ?>

                            <p class="price-normal">
                                <?php
                                echo rupiah($item["harga"]);
                                ?>
                            </p>

                            <span class="discount">
                                Diskon 10%
                            </span>

                            <p class="price">
                                <?php
                                echo rupiah(
                                    hargaDiskon($item["harga"])
                                );
                                ?>
                            </p>

                        <?php } else { ?>

                            <p class="price">
                                <?php
                                echo rupiah($item["harga"]);
                                ?>
                            </p>

                        <?php } ?>


                        <!-- CEK STOK -->
                        <?php if ($item["stok"] > 0) { ?>

                            <p class="stock available">
                                ✓ Tersedia
                                (Stok <?php echo $item["stok"]; ?>)
                            </p>

                            <button class="buy-button">
                                Beli Sekarang
                            </button>

                        <?php } else { ?>

                            <p class="stock empty">
                                ✕ Stok Habis
                            </p>

                            <button class="buy-button disabled" disabled>
                                Stok Habis
                            </button>

                        <?php } ?>

                    </div>

                </div>

            <?php } ?>

        </div>

    </section>


    <!-- TENTANG -->
    <section class="about" id="tentang">

        <h2>
            Tentang SukaMundur Store
        </h2>

        <p>
            SukaMundur Store menyediakan berbagai perangkat
            dan aksesoris teknologi untuk kebutuhan
            belajar, bekerja, dan hiburan.
        </p>

    </section>


    <!-- FOOTER -->
    <footer>

        <p>
            &copy; <?php echo date("Y"); ?>
            SukaMundur Store. All Rights Reserved.
        </p>

    </footer>

</body>

</html>