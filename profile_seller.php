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
                <h2>Shop Profile</h2>
                <div class="cover-image">
                    
                </div>
            </section>
        </div>
    </main>

    <?php include($commonSharedFolder . "footer.html"); ?>
</body>
</html>