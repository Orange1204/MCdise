<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="./Assets/logo_mcDiseSquared.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Style/categoryItem.css">
    <link rel="stylesheet" href="./CommonShared/headfoot.css">
</head>

<body>
    <!-- root XAMPP = htdocs -->
    <?php $commonSharedFolder = $_SERVER["DOCUMENT_ROOT"] . "/MCdise/CommonShared/"; ?>

    <!-- uncomment kalau root XAMPP = MCdise -->
    <?php //$commonSharedFolder = $_SERVER["DOCUMENT_ROOT"] . "/CommonShared/"; 
    ?>

    <?php include($commonSharedFolder . "header.html"); ?>

    <main class="container">
        <section class="topMerchandise" id="topMerch">
            <div class="section-title">
                <h2>T-shirt</h2>
                <div></div>
            </div>
            <div class="topMerch-container">
                <?php for ($i = 0; $i < 8; $i++) : ?>
                    <div class="topMerch-tile">
                        <div class="topMerch-image">
                            <img src="./Assets/topMerch.png" alt="">
                        </div>
                        <div class="topMerch-name">T-shirt</div>
                    </div>
                <?php endfor; ?>
            </div>
        </section>

        <div class="intro">
            <h2>CUSTOM PAKAIAN SESUAI KEINGINANMU!</h2>
            <div class="intro-items-container">
                <div class="intro-item">
                    <img src="./Assets/category_sewingMachine.png" alt="" class="logo">
                    <p>JAMINAN KUALITAS PRODUK</p>
                </div>
                <div class="intro-item">
                    <img src="./Assets/category_calendar.png" alt="" class="logo">
                    <p>GARANSI PRODUK 1 TAHUN</p>
                </div>
                <div class="intro-item">
                    <img src="./Assets/category_delivery.png" alt="" class="logo">
                    <p>JAMINAN TEPAT WAKTU</p>
                </div>
                <div class="intro-item">
                    <img src="./Assets/category_garansi.png" alt="" class="logo">
                    <p>GARANSI UANG KEMBALI</p>
                </div>
            </div>
        </div>

        <section class="category" id="category">
            <div class="section-title">
                <h2>Other Category</h2>
                <div></div>
            </div>
            <div class="category-items-container">
                <a href="" class="category-item">
                    <img src="./Assets/category_shirt.png" alt="">
                    <p>T-shirt</p>
                </a>
                <a href="" class="category-item">
                    <img src="./Assets/category_jacket.png" alt="">
                    <p>Jacket</p>
                </a>
                <a href="" class="category-item">
                    <img src="./Assets/category_hoodie.png" alt="">
                    <p>Hoodie</p>
                </a>
                <a href="" class="category-item">
                    <img src="./Assets/category_hat.png" alt="">
                    <p>Hat</p>
                </a>
                <a href="" class="category-item">
                    <img src="./Assets/category_pouch.png" alt="">
                    <p>Bag & Pouch</p>
                </a>
                <a href="" class="category-item">
                    <img src="./Assets/category_keychain.png" alt="">
                    <p>Home Decor</p>
                </a>
            </div>
        </section>

        <div class="motto">
            <img src="./Assets/illustration_motto.png" alt="">
        </div>
    </main>

    <?php include($commonSharedFolder . "footer.html"); ?>

</body>

</html>