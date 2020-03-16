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

        <?php include '../includes/header.inc.php'; ?>

        <main>
            <h1>Thank you!</h1>
            <p>Our records show you submitted the following:<br><br>

                Name: <?php echo htmlspecialchars($r_name, ENT_QUOTES, 'UTF-8'); ?><br>

                Age: <?php echo htmlspecialchars($r_age, ENT_QUOTES, 'UTF-8'); ?><br>

                Gender: <?php echo htmlspecialchars($r_gender, ENT_QUOTES, 'UTF-8'); ?><br>

                Email: <?php echo htmlspecialchars($r_email, ENT_QUOTES, 'UTF-8'); ?><br>

                Emergency Contact Name: <?php echo htmlspecialchars($emergency_name, ENT_QUOTES, 'UTF-8'); ?><br>

                Emergency Contact Phone Number: <?php echo htmlspecialchars($emergency_phone, ENT_QUOTES, 'UTF-8'); ?><br>

                Registering as a: <?php echo htmlspecialchars($r_type, ENT_QUOTES, 'UTF-8'); ?><br>

                Event Sat: <?php echo htmlspecialchars($sat_event, ENT_QUOTES, 'UTF-8'); ?><br>

                Event Sun: <?php echo htmlspecialchars($sun_event, ENT_QUOTES, 'UTF-8'); ?><br>

                Free Splash: <?php echo htmlspecialchars($free_splash, ENT_QUOTES, 'UTF-8'); ?><br>

                Accommodations: <?php echo htmlspecialchars($accommodations, ENT_QUOTES, 'UTF-8'); ?>
            </p>
        </main>

        <?php include '../includes/footer.inc.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../scripts/script.js"></script>

    </body>

    </html>
