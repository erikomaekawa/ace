    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Eriko Maekawa">

        <title>Ace in the Hole Multisport Events</title>

        <link href="../css/style.css" rel="stylesheet/less">

        <link href="../css/navigation.css" rel="stylesheet" type="text/css">

        <link href="../css/grid.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

        <link href="https://fonts.googleapis.com/css?family=Lato|Volkhov:400,700&display=swap" rel="stylesheet">

        <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>


    </head>

    <body>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>

        <?php include '../includes/header.inc.php'; ?>

        <main>
            <h1>Thank you!</h1>
            <p>A cheerful member of our staff will be in contact with you soon:<br><br>

                Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br>

                Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br>

                Category: <?php echo htmlspecialchars($myCategory, ENT_QUOTES, 'UTF-8'); ?><br>

                Comment: <?php echo htmlspecialchars($myComment, ENT_QUOTES, 'UTF-8'); ?>
            </p>
        </main>

        <?php include '../includes/footer.inc.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../scripts/script.js"></script>

    </body>

    </html>
