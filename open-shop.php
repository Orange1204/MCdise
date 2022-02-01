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
    <link rel="stylesheet" href="./CommonShared/headfoot.css ?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./Style/signIn.css ?v=<?php echo time(); ?>">
</head>

<body>
    <?php $commonSharedFolder = $_SERVER["DOCUMENT_ROOT"] . "/CommonShared/"; ?>
    <?php include($commonSharedFolder . "header.html"); ?>

    <main class="container">
        <div class="section-container">
            <section class="openShop-container">
                <div class="signIn-title">
                    <h1>Sign in</h1>
                </div>
                <div class="signIn-container">
                    <div class="signIn-left">
                        <div class="daftarkan-text">
                            <h1>Daftarkan Dirimu</h1><br>
                            <p>Dengan mendaftar, Anda setuju dengan Syarat, Ketentuan dan Kebijakan dari MCdise & Kebijakan Privasi</p>
                        </div>
                        <div class="daftarkan-image">
                            <img src="/Assets/signIn-decor.png" alt="">
                        </div>
                    </div>
                    <div class="signIn-right">
                        <div class="signIn-item">
                            <label for="username">Shop Name (Username)</label><br>
                            <input type="text" name="username" id="username" placeholder="5-20 characters">
                        </div>
                        <div class="signIn-item">
                            <label for="phone">Phone Number</label><br>
                            <input type="text" name="phone" id="phone">
                        </div>
                        <div class="signIn-item">
                            <label for="email">Email</label><br>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="signIn-item">
                            <label for="password">Password</label><br>
                            <input type="password" name="password" id="password" placeholder="8-10 characters">
                        </div>
                        
                        <!-- submit -->
                        <div class="signIn-submit">
                            <input type="submit" value="Submit">
                            <div class="submit-text">
                                <p>Have an account?</p> <a href="">Log In</a> 
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="signIn-benefit">
                    <div class="benefit-title">
                        <h1>What's the Benefits?</h1>
                    </div>
                    <div class="box-about">
                        <div class="box-item">
                            <p>5%</p>Profits
                        </div>
                        <div class="box-item">
                            Own a Shop
                        </div>
                        <div class="box-item">
                            Daily Updates
                        </div>
                    </div>

                    <div class="signIn-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nunc, amet pulvinar elit, mauris imperdiet. Montes, augue fusce etiam a consectetur eu lacus. Lorem mattis ipsum laoreet id fermentum, sem euismod volutpat. Aliquam, iaculis egestas vulputate at non ac odio mauris.</p>
                    </div>
                </div>

                <div class="motto">
                    <div class="motto-text">
                        <div class="motto-title">
                            <h1>MCdise</h1> 
                        </div>
                        <div class="motto-sentence"> 
                            <p>Express Your Design</p>
                            <p>Create Your Own Merch!</p>
                        </div>
                    </div>
                    <div class="motto-image">
                        <img src="/Assets/motto.png" alt="">
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include($commonSharedFolder . "footer.html"); ?>
</body>
</html>