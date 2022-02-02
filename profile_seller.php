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
    <link rel="stylesheet" href="./Style/profile.css ?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./CommonShared/headfoot.css ?v=<?php echo time(); ?>">

</head>

<!-- styling khusus profile seller -->
<style>
    .cover-image {
        overflow: hidden;
        background-color: black;
    }

    .profile-image {
        width: 200px;
        height: 200px;
        border-radius: 100%;
        overflow: hidden;
        background-color: black;
    }

    .profile-image:hover .profilepic__content {
        opacity: 1;
    }

    .cover-image:hover .profilepic__content {
        opacity: 1;
    }

    .profile-image:hover .profile-pic{
        opacity: 0.5;
    }

    .cover-image:hover .cover-pic {
        opacity: 0.5;
    }

    .profilepic__content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        font-weight: 500;
        opacity: 0;
        transition: opacity .2s ease-in-out;
    }

    .profile-image > .profilepic__content {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .cover-image > .profilepic__content {
        position: relative;
        top: -200px;
    }
</style>

<body>
    <?php $commonSharedFolder = $_SERVER["DOCUMENT_ROOT"] . "/MCdise/CommonShared/"; ?>
    <?php include($commonSharedFolder . "header.html"); ?>

    <main class="container">
        <div class="section-container">
            <section class="shop-profile">
                <div class="title-page">
                    <h2>Shop Profile</h2>
                </div>

                <div class="wrapper">
                    <div class="cover-image">
                        <img src="./Assets/cover.jpg" class="cover-pic">
                        <!-- tambahan untuk transisi-->
                        <div class="profilepic__content">
                            <span class="profilepic__icon"><img src="./Assets/camera-white-icon.png" alt=""></span>
                            <span class="profilepic__text">Edit Cover</span>
                        </div>
                    </div>
                    <div class="profile-image">
                        <img src="./Assets/profile.jpeg" class="profile-pic">
                        <!-- tambahan untuk transisi-->
                        <div class="profilepic__content">
                            <span class="profilepic__icon"><img src="./Assets/camera-white-icon.png" alt=""></span>
                            <span class="profilepic__text">Edit Profile</span>
                        </div>
                    </div>
                </div>
                

                <div class="profile-detail">
                    <div class="profile-description">
                        <div class="shop-name">
                            <div class="profile-username">
                                <h2>Shop Name</h2>
                            </div>
                            <div class="edit-username">
                                <div class="edit-icon">
                                    <img src="./Assets/edit-icon.png" alt="">
                                </div>
                                <div class="edit-text">
                                    Edit Shop Name
                                </div>
                            </div>
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
                            <img src="./Assets/location-icon.png" alt="">
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
                    <div></div> 
                    <!-- kl ga dikasi DIV tambahan, CSS "Product" nya ga mau jalan -->
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

        <div class="section-container">
            <section class="item-navbar">
                <div class="title-category">
                    <div class="profile-category">
                        <img src="./Assets/category-icon.png" alt="">
                        <h2>Category</h2>
                    </div>
                    <div class="search-bar-container">
                        <div class="search-bar">
                            Search...
                            <img src="./Assets/search-bar-icon.png" alt="">
                        </div>
                        <img src="./Assets/filter-icon.png" alt="">
                    </div>          
                </div>  
                <div class="item-container">
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

                <div class="paginations">
                    <table cellspacing="5" cellpadding="30">
                        <tr>
                            <td><a href="">&laquo; Prev</a></td>
                            <td><a href="">1</a></td>
                            <td><a href="">2</a></td>
                            <td><a href="">3</a></td>
                            <td><a href="">4</a></td>
                            <td>...</td>
                            <td><a href="">9</a></td>
                            <td><a href="">10</a></td>
                            <td><a href="">Next &raquo;</a></td>
                        </tr>
                    </table>
                </div>     
            </section>
        </div>
        <div class="add-product-href">
            <a href="" class="emerald button">Add Product Design</a>
        </div>  
    </main>

    <?php include($commonSharedFolder . "footer.html"); ?>
</body>
</html>