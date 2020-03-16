    <!DOCTYPE html>

    <html lang="en">

    <head>
        <title>Ace in the Hole Multisport Events</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Eriko Maekawa">

        <meta name="description" content=" Ace in the Hole Multisport Events is a traditional annual running and triathlon event for everybody from across the country. Please join our legendary event. Register now!">

        <meta property=" og:title" content="Ace in the Hole Multisport Events">
        <meta property="og:image" content="http://kakitty.webhostingforstudents.com/cas222/project/ace/images/ace4.jpg">
        <meta property="og:image" content="http://kakitty.webhostingforstudents.com/cas222/project/ace/images/triathlon.jpg">
        <meta property="og:description" content="A legendary annual running and triathlon event in Portland, Oregon.">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159864977-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-159864977-1');

        </script>

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

            <section>
                <h1>Contact Us</h1>
                <p>If you have any questions, please feel free to send a message. We will get back to you as soon as we can.</p>

                <p>Please check our <span class="bold"><a href="<?php echo BASE_URL; ?>events/faq.php">FAQs (Frequently Asked Questions)</a></span>.</p><br>
            </section>

            <section>
                <div id="contact_container">
                    <form method="post" action=" " id="contact-form">
                        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent" />

                        <label for="myName">Full Name:</label>
                        <input type="text" name="myName" id="myName">

                        <label for="myEmail">E-mail:</label>
                        <input type="text" name="myEmail" id="myEmail">

                        <label for="myCategory">Category:</label>
                        <select size="1" name="myCategory" id="myCategory">
                            <option value="athlete">Athlete</option>
                            <option value="volunteer">Volunteer</option>
                            <option value="interested_party">Interested Party</option>
                        </select>

                        <label for="myComment">Comment:</label>
                        <textarea form="contact-form" rows="5" cols="50" name="myComment" id="myComment"></textarea>

                        <div id="submit">
                            <input id="mySubmit" type="submit" value="Submit"></div>
                    </form>
                </div>
            </section>
        </main>

        <?php include '../includes/footer.inc.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../scripts/script.js"></script>

    </body>

    </html>
