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

<style>
    .search-bar-container {
        width: 50%;
        padding-bottom: 10px;
    }

    .title-category {
        justify-content: center;
    }

    /* styling khusus profile seller */
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
                        <a href="">Sales Report</a>
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
                    <div class="search-bar-container">
                        <div class="search-bar">
                            Search...
                            <img src="./Assets/search-bar-icon.png" alt="">
                        </div>
                        <img src="./Assets/filter-icon.png" alt="">
                    </div>          
                </div>  

                <div class="track-container">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div class="track-item">            
                            <button class="collapsible">Order Tracking - CB567AXE</button>
                            <div class="track-header">
                                <div class="track-shipped">
                                    <div class="track-title">
                                        SHIPPED VIA
                                    </div>
                                    <div class="track-text">
                                        JNE
                                    </div>
                                </div>
                                <div class="track-status">
                                    <div class="track-title">
                                        STATUS
                                    </div>
                                    <div class="track-text">
                                        In Transit
                                    </div>
                                </div>
                                <div class="track-expected">
                                    <div class="track-title">
                                        EXPECTED
                                    </div>
                                    <div class="track-text">
                                        Tuesday, 22 Febuary 2022
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="order-item">
                                    <div class="track-recipient-container">
                                        <p>Brooklyn Simmons</p>
                                        <p>(229) 555-0109</p>
                                        <p>2972 Westheimer Rd. Santa Ana, Illinois 85486 </p>
                                    </div>
                                    <div class="card-timeline">                                      
                                        <div class="order-tracking completed">
                                            <span class="is-complete"></span>
                                            <p>Ordered<br><span>12:18 WIB 17/02/2022</span></p>
                                        </div>
                                        <div class="order-tracking completed">
                                            <span class="is-complete"></span>
                                            <p>Printing<br><span>17:20 WIB 18/02/2022</span></p>
                                        </div>
                                        <div class="order-tracking current">
                                            <span class="is-complete"></span>
                                            <p>In Transit<br><span>18:15 WIB 20/02/2022</span></p>
                                        </div>
                                        <div class="order-tracking">
                                            <span class="is-complete"></span>
                                            <p>Completed<br><span></span></p>
                                        </div>                            
                                    </div>
                                    <?php for ($i = 0; $i < 2; $i++) : ?>
                                        <div class="order-item-detail">
                                            <div class="item-pic-det">
                                                <div class="item-picture">
                                                    <img src="./Assets/tshirt_frontCustomized.png" alt="">
                                                </div>
                                                <div class="item-detail">
                                                    <div class="orderItem-title">
                                                        T-shirt O-Neck Pria
                                                    </div>
                                                    <div class="orderSize-color">
                                                        <div class="order-size"><b>M</b></div>
                                                        <div class="order-color">
                                                            <div class="box-color"></div>
                                                            <div class="hex-color">#242424</div>
                                                        </div>
                                                    </div>
                                                    <div class="orderQty"><b>5 pcs</b></div>
                                                </div>
                                            </div>
                                            <div class="order-price">
                                                Rp 615.000,00
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                                <div class="totalOrder-item">
                                    <div class="total-title">
                                        <div>Subtotal</div>
                                        <div>Shipping Price</div>
                                        <div>Grand Total</div>
                                    </div>
                                    <div class="total-price">
                                        <div>Rp 1.230.000,00</div>
                                        <div>Rp 25.000,00</div>
                                        <div>Rp 1.255.000,00</div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    <?php endfor; ?>

                        <script>
                            var coll = document.getElementsByClassName("collapsible");
                            var i;

                            for (i = 0; i < coll.length; i++) {
                                coll[i].addEventListener("click", function() {
                                    this.classList.toggle("active");
                                    var content = this.nextElementSibling
                                        content = content.nextElementSibling;
                                    if (content.style.display === "block"){
                                        content.style.display = "none";
                                    } else {
                                        content.style.display = "block";
                                    } 
                                });
                            }
                        </script>
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
    </main>

    <?php include($commonSharedFolder . "footer.html"); ?>
</body>
</html>