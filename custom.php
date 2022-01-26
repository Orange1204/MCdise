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
    <link rel="stylesheet" href="./Style/customPage.css">
    <link rel="stylesheet" href="./CommonShared/headfoot.css">
</head>

<body>

    <?php $commonSharedFolder = $_SERVER["DOCUMENT_ROOT"] . "/CommonShared/"; ?>
    <?php include($commonSharedFolder . "header.html"); ?>

    <main class="container">
        <section class="product-detail">
            <div class="product-detail-left">

            </div>
            <div class="product-detail-right">
                <h2 class="section-title">Kaos O-Neck Pria</h2>
            </div>
        </section>

        <section class="design-recommendation">
            <h2 class="section-title">Design Recommendations</h2>

            <div class="recom-container">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="recom-tile">
                        <div class="recom-img">
                            <img src="./Assets/topMerch.png" alt="">
                        </div>

                        <div class="recom-detail">
                            <div class="recom-name">Product Title</div>
                            <div class="recom-info">
                                <p class="recom-price">Rp 110.000</p>
                                <p class="recom-count">10K+ Sold</p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <a href="" class="emerald button">Lihat Selengkapnya</a>
        </section>

        <section class="product-description">
            <h2 class="section-title">Product Description</h2>

            <div class="desc-text">
                <p>COTTON 20S</p>
                <p>Kaos Cotton 20s adalah kaos yang terbuat dari bahan katun (serat rapat) dengan ketebalan benang 20s (gramasi antara 180 - 220 gr/m2), serat kain halus karena terbuat dari serat kapas maka kaos Cotton 20s menyerap keringat sehingga nyaman dan tidak panas saat dipakai.</p>
                <p>Bahan dan warna kain Custom.co.id gunakan adalah kualitas terbaik dengan tingkat kestabilan warna yang konsisten dan tidak luntur bila dicuci.</p>
                <p>Model jahitan rantai di bahu membuat kaos lebih awet. Ditambah list kain (BIS) di bagian dalam kerah membuat kaos lebih nyaman dipakai dan terlihat eksklusif. Sambungan badan dan lengan atau ketiak kaos terjahit dengan rapi. Bagian dalam kaos diobras dengan rapi. Bagian ujung-ujung kaos (bagian bawah dan lengan) terjahit dengan rapi.</p>
                <p>Kaos Cotton 20s dirancang tanpa label merek. Tersedia layanan cetak merek khusus bagi member Custom.co.id.</p>
                <p>Di Custom.co.id, Cotton 20s tersedia dalam desain lengan pendek dengan kerah o-neck dan kerah v-neck (untuk warna-warna pilihan), lengan panjang dengan kerah o-neck untuk warna-warna pilihan.</p>
            </div>
            <div class="desc-img">
                <img src="./Assets/desc_shirtSize.png" alt="">
                <img src="./Assets/desc_sizeTable.png" alt="">
            </div>
        </section>

        <section class="product-review">
            <h2 class="section-title">Product Review</h2>

            <div class="review-header">
                <div class="review-header-total">
                    <p>4.5</p>
                    <img src="./Assets/star-4half.png" alt="">
                    <p>73 Reviews</p>
                </div>

                <div class="review-header-count">
                    <div class="review-count-box">
                        <p>44</p>
                        <img src="./Assets/star-5.png" alt="">
                    </div>
                    <div class="review-count-box">
                        <p>26</p>
                        <img src="./Assets/star-4.png" alt="">
                    </div>
                    <div class="review-count-box">
                        <p>2</p>
                        <img src="./Assets/star-3.png" alt="">
                    </div>
                    <div class="review-count-box">
                        <p>1</p>
                        <img src="./Assets/star-2.png" alt="">
                    </div>
                    <div class="review-count-box">
                        <p>0</p>
                        <img src="./Assets/star-1.png" alt="">
                    </div>
                </div>

                <div class="review-header-tool">

                </div>
            </div>

            <div class="review-content">
                <?php for ($i = 0; $i < 3; $i++) : ?>

                    <div class="review-tile">
                        <div class="review-tile-avatar-box">
                            <img src="https://idsb.tmgrup.com.tr/ly/uploads/images/2021/03/28/103524.jpg" alt="">
                        </div>
                        <div class="review-tile-main-box">
                            <div class="review-main-author">User***5</div>
                            <div class="review-main-star"><img src="./Assets/star-5.png" alt=""></div>
                            <div class="review-main-text">Bahannya bagus</div>
                            <div class="review-main-date">05-01-2022</div>
                        </div>
                    </div>

                <?php endfor; ?>
            </div>

            <div class="review-more">Show more..</div>
        </section>

        <section class="other-merch">
            <h2 class="section-title">Other Merchandise</h2>

            <div class="other-container">
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="other-tile">
                        <div class="other-img"><img src="./Assets/topMerch.png" alt=""></div>
                        <div class="other-name">T-shirt</div>
                    </div>
                <?php endfor; ?>
            </div>

            <a href="" class="emerald button">Lihat Selengkapnya</a>
        </section>
    </main>

    <?php include($commonSharedFolder . "footer.html"); ?>

</body>

</html>