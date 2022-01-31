<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="shortcut icon" href="./Assets/logo_mcDiseSquared.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="stylesheet" href="./Style/profile.css">
    <link rel="stylesheet" href="./CommonShared/headfoot.css">
</head>

<body>
    <?php $commonSharedFolder = $_SERVER["DOCUMENT_ROOT"] . "/CommonShared/"; ?>
    <?php include($commonSharedFolder . "header.html"); ?>

    <main class="container">
        <div class="section-container">
            <section class="shop-profile" id="shop-profile">
                <div class="title">
                    <h2>Shop Profile</h2>
                </div>

                <div class="wrapper">
                    <div class="cover-image">
                    <img src="/Assets/cover.jpg" class="cover-pic">
                    </div>
                    <div class="profile-image">
                        <img src="/Assets/profile.jpeg" class="profile-pic">
                    </div>
                </div>
                

                <div class="profile-detail">
                    <div class="profile-description">
                        <div class="shop-name">
                            <h2>Shop Name</h2>
                        </div>
                        <div class="shop-count">
                            <div class="product-count">
                                80 Products
                            </div>
                            <div class="followers-count">
                                2.5k Followers
                            </div>
                            <div class="following-count">
                                10 Following
                            </div>
                        </div>
                        <div class="shop-location">
                            <h4>Sentul, Bogor</h4>
                        </div>
                    </div>
                    <div class="profile-rating">
                        <div class="rating-title">
                            <h3>Rating</h3>
                        </div>
                        <div class="rating-point">
                            <div class="rating-score">
                                <h2>4.5</h2>(232)
                            </div>
                            <div class="rating-star">
                                <img src="Assets/star-4half.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- navbar profile -->
                <div class="profile-navbar">
                    <div class="profile-item">
                        <a href="">Product</a>
                    </div>
                    <div class="profile-item">
                        <a href="">About</a>
                    </div>
                    <div class="profile-item">
                        <a href="">Statistics</a>
                    </div>
                    <div class="profile-item">
                        <a href="">Track Order</a>
                    </div>
                    <div class="profile-item">
                        <a href="">Order History</a>
                    </div>
                    <div class="profile-item">
                        <a href="">Settings</a>
                    </div>
                </div>
            </section>

            
        </div>

        <!-- <div class="section-container">
            <section class="shop-navbar">

            </section>
        </div> -->
    </main>

    <?php include($commonSharedFolder . "footer.html"); ?>
</body>
</html>