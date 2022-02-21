<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCdise</title>
    <link rel="shortcut icon" href="./Assets/logo_mcDiseSquared.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="stylesheet" href="./Style/checkout.css ?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./CommonShared/headfoot.css ?v=<?php echo time(); ?>">
</head>

<?php $commonSharedFolder = $_SERVER["DOCUMENT_ROOT"] . "/MCdise/CommonShared/"; ?>
<?php include($commonSharedFolder . "header.html"); ?>

<main class="container">
    <div class="section-container">
        <section class="cart">
            <div class="backToShopping">
                <div class="back-icon">
                    <img src="./Assets/backToShopping.png" alt="">
                </div>
                <div class="continueText">
                    <a href="">Continue Shopping</a>
                </div>
            </div>

            <div class="cart-info">
                <div class="cart-title">
                    <div style="font-size: 26px;">
                        <b>Shopping Cart</b>
                    </div>
                    <div style="font-size: 14px;">
                        You have 3 items in your cart
                    </div>
                </div>
                <div class="cart-sorting">
                    <div class="sortby-title">
                        Sort by:
                    </div>
                    <div class="sort-category">
                        <div class="sort-category-title">
                            Price
                        </div>
                        <div class="sort-category-icon">
                            <img src="./Assets/icon_angleDown.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-item-list">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="order-item-detail">
                        <div class="checklist">
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="insidecheck">
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
                                    <div class="editOrder"><b><a href="">Edit</a></b></div>
                                </div>
                            </div>
                            <div class="detail-tile">
                                <p>-</p>
                                <p id="counter" style="background-color: white;"><b>5</b></p>
                                <p>+</p>
                            </div>
                            <div class="order-price">
                                Rp 615.000,00
                                <div class="order-trash">
                                    <img src="./Assets/trash-icon.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </section>
        <section class="checkout">
            <div style="font-size: 30px;"><b>CHECKOUT</b></div>
            <div class="checkout-method">
                <div class="checkout-method-title">
                    Payment Method
                </div>
                <div class="method-pic-container">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <div class="checkout-method-pic">
                            <img src="./Assets/bca.logo.png" alt="">
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="checkout-method">
                <div class="checkout-method-title">
                    Delivery Method
                </div>
                <div class="method-pic-container">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <div class="checkout-method-pic">
                            <img src="./Assets/jne.logo.png" alt="">
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <div class="recipient-destination">
                <div class="checkout-method-title">
                    Recipient
                </div>
                <div class="recipient-container">
                    <div class="recipient-item">
                        <input type="text" name="name" id="name" placeholder="Recipient's Name">
                    </div>
                    <div class="recipient-item">
                        <input type="text" name="phone" id="phone" placeholder="First Phone Number">
                    </div>
                    <div class="recipient-item">
                        <input type="text" name="phone" id="phone" placeholder="Second Phone Number (optional)">
                    </div>
                </div>
            </div>

            <div class="recipient-destination">
                <div class="checkout-method-title">
                    Destination Address
                </div>
                <div class="recipient-container">
                    <div class="recipient-item">
                        <input type="text" name="name" id="name" placeholder="Recipient's Name">
                    </div>
                    <div class="recipient-item">
                        <input type="text" name="phone" id="phone" placeholder="First Phone Number">
                    </div>
                    <div class="recipient-item">
                        <input type="text" name="phone" id="phone" placeholder="Second Phone Number (optional)">
                    </div>
                </div>
            </div>

            <div class="border-total"></div>

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

            <div class="checkout-submit">
                <input type="submit" value="Order Now">
            </div>
        </section>
    </div>
</main>

<?php include($commonSharedFolder . "footer.html"); ?>
</body>

</html>