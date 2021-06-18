<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Comparateur ETF</title>
</head>

<body>

    <header>
        <?php include "pages/nav_bar.php"; ?>
        <?php include "pages/header2.php"; ?>
    </header>
<div>

// End-of-Day Data API Endpoint

http://api.marketstack.com/v1/eod
    ? access_key = YOUR_ACCESS_KEY
    & symbols = AAPL
    
// optional parameters: 

    & sort = DESC
    & date_from = YYYY-MM-DD
    & date_to = YYYY-MM-DD
    & limit = 100
    & offset = 0

    
</div>

    <footer>
        <?php include "pages/footer.php"; ?>
    </footer>
    <script href="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script href="accueil.js"></script>
</body>

</html>