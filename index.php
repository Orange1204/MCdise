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
    <link rel="stylesheet" href="./Style/style.css ?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./CommonShared/headfoot.css ?v=<?php echo time(); ?>">
</head>

<body>
    <!-- root XAMPP = htdocs -->
    <?php $commonSharedFolder = $_SERVER["DOCUMENT_ROOT"] . "/MCdise/CommonShared/"; ?>

    <!-- uncomment kalau root XAMPP = MCdise -->
    <?php //$commonSharedFolder = $_SERVER["DOCUMENT_ROOT"] . "/CommonShared/"; 
    ?>

    <?php include($commonSharedFolder . "header.html"); ?>

    <div class="posters">
        <div class="container">
            <div class="customNow">
                <p>Create your own custom merchandise</p>
                <div class="orange button">Custom Now</div>
            </div>
            <div class="openShop">
                <p>Open your own merchandise shop</p>
                <div class="orange button">Open Shop</div>
            </div>
        </div>
    </div>

    <div class="container">
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
    </div>

    <main class="container">        
        <div class="section-container">
            <section class="category" id="category">
                
                <div class="round-title-category">
                    <h2>Our Category</h2>
                    <div></div>
                </div>
                <div class="category-items-container">
                    <a href="" class="category-item">
                        <img src="./Assets/cat_tshirt.png" alt="">
                        <p>T-shirt</p>
                    </a>
                    <a href="" class="category-item">
                        <img src="./Assets/cat_jacket.png" alt="">
                        <p>Jacket</p>
                    </a>
                    <a href="" class="category-item">
                        <img src="./Assets/cat_hoodie.png" alt="">
                        <p>Hoodie</p>
                    </a>
                    <a href="" class="category-item">
                        <img src="./Assets/cat_hat.png" alt="">
                        <p>Hat</p>
                    </a>
                    <a href="" class="category-item">
                        <img src="./Assets/cat_pouch.png" alt="">
                        <p>Bag & Pouch</p>
                    </a>
                    <a href="" class="category-item">
                        <img src="./Assets/cat_keychain.png" alt="">
                        <p>Home Decor</p>
                    </a>
                </div>
            </section>

            <section class="getHelp">
                <div class="getHelp-left">
                    <h2>We provide tutorials that can help you navigate our website</h2>
                </div>
                <div class="getHelp-right">
                    <a href="" class="orange button"> Get Help </a>
                </div>
            </section>

            <section class="topMerchandise" id="topMerch">
                <h2 class="section-title">Top Merchandises</h2>
                <div class="topMerch-container">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <div class="topMerch-tile">
                            <div class="topMerch-image">
                                <img src="./Assets/topMerch.png" alt="">
                            </div>
                            <div class="topMerch-name">T-shirt</div>
                        </div>
                    <?php endfor; ?>
                </div>
                <a href="" class="emerald button">Lihat Selengkapnya</a>
            </section>

            <section class="newArrivals" id="newArrivals">
                <div class="newArrivals-left">
                    <h2 class="section-title">New Arrivals</h2>
                    <a href="" class="orange button"> More Details </a>
                </div>
                <div class="newArrivals-right"></div>
            </section>

            <section class="popular" id="popular">
                <h2 class="section-title">Popular Designs</h2>
                <div class="popular-container">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="popular-tile">
                            <div class="popular-image">
                                <img src="./Assets/topMerch.png" alt="">
                            </div>
                            <div class="productDescription">
                                <div class="productName">Product Title</div>
                                <div class="productInfo">
                                    <p class="productPrice">Rp 110.000</p>
                                    <p class="productCount">10K+ Sold</p>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <a href="" class="emerald button">Lihat Selengkapnya</a>
            </section>

            <section class="ourShop">
                <div class="ourShop-left">
                    <!-- for background image -->
                </div>
                <div class="ourShop-right">
                    <h2>Check out our brand's unique product designs</h2>
                    <a href="" class="orange button"> Shop now</a>
                </div>
            </section>

            <section class="top-users" id="top-users">         
                <div class="round-title-category">
                    <h2>Top Rated Users</h2>
                    <div><a href="" style="font-size: 14px;">see more</a></div>
                </div>
                <div class="user-items-container">
                    <?php for ($i = 0; $i < 7; $i++) : ?>
                        <a href="" class="user-item">
                            <img src="./Assets/pp.png" alt="">
                            <p>lazymeer54</p>
                        </a>
                        <?php endfor; ?>
                </div>
            </section>
        
            <div class="about-container">
                <div class="about-text">
                    <div class="about-title">
                        ABOUT US
                    </div>
                    <div class="about-description">
                        Consequat aliquam quam cursus aliquet in imperdiet. 
                        Aliquam commodo est nunc adipiscing scelerisque viverra eget a. 
                        Ornare magna cursus amet, nunc. 
                        Proin porttitor imperdiet ridiculus id nulla accumsan ultrices laoreet. 
                        Faucibus aliquam senectus sodales volutpat vestibulum blandit. 
                        Scelerisque scelerisque felis cras ut quis pulvinar massa. 
                        Vitae duis ut nunc, mattis vulputate volutpat.
                    </div>
                </div>
                <div class="about-pic">
                    <img src="./Assets/about-pic.png" alt="">
                </div>
            </div>                
            
            <div class="about-record">
                    <div class="about-record-description">
                        <div class="about-logo"><img src="./Assets/product-icon.png" alt=""></div>
                        <div class="about-number">34</div>
                        <div class="about-record-text">Different Products</div>
                    </div>
                    <div class="about-record-description">
                        <div class="about-logo"><img src="./Assets/users-four-icon.png" alt=""></div>
                        <div class="about-number">20,123,455</div>
                        <div class="about-record-text">People Use MCdise</div>
                    </div>
                    <div class="about-record-description">
                        <div class="about-logo"><img src="./Assets/diamond-icon.png" alt=""></div>
                        <div class="about-number">22,064</div>
                        <div class="about-record-text">Success Stories</div>
                    </div>
                </div>
        </div>

    </main>

    <?php include($commonSharedFolder . "footer.html"); ?>

</body>

</html>