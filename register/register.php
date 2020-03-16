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
              <h1>Registration</h1>
              <p>Required information is marked with an asterisk (*).</p>
          </section>

          <section>
              <div id="register_container">
                  <form method="post" action=" " id="register_form">
                      <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent">

                      <label for="r_name">*Full Name:</label>
                      <input type="text" name="r_name" id="r_name">

                      <label for="r_age">*Age:</label>
                      <input type="text" name="r_age" id="r_age">

                      <label for="r_gender">*Gender:</label>
                      <select size="1" name="r_gender" id="r_gender">
                          <option value="" disabled="disabled" selected="selected">Choose Your Gender</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="non_binary">Non-binary</option>
                      </select>

                      <label for="r_email">*E-mail:</label>
                      <input type="text" name="r_email" id="r_email">

                      <label for="emergency_name">*Emergency Contact Name:</label>
                      <input type="text" name="emergency_name" id="emergency_name">

                      <label for="emergency_phone">*Emergency Contact Phone Number:</label>
                      <input type="text" name="emergency_phone" id="emergency_phone">

                      <label for="r_type">*Registering as a:</label>
                      <select size="1" name="r_type" id="r_type">
                          <option value="" disabled="disabled" selected="selected">Choose Your Registration Type</option>
                          <option value="athlete">Athlete</option>
                          <option value="volunteer">Volunteer</option>
                      </select>

                      <p>*Event Registering For:</p>
                      <div id="r_event">
                          <label for="sat_event">Saturday:</label><br>
                          <select size="1" name="sat_event" id="sat_event">

                              <option value="" disabled="disabled" selected="selected">Choose an Event</option>
                              <option value="long_course_triathlon">Long Course Triathlon</option>
                              <option value="olympic_triathlon">Olympic Triathlon</option>
                              <option value="10k">10K</option>
                              <option value="half_marathon">Half Marathon</option>
                              <option>None</option>
                          </select>

                          <label for="sun_event">Sunday:</label><br>
                          <select size="1" name="sun_event" id="sun_event">
                              <option value="" disabled="disabled" selected="selected">Choose an Event</option>
                              <option value="sprint_triathlon">Sprint Triathlon</option>
                              <option value="try_a_tri">Try-a-Tri</option>
                              <option value="10k">10K</option>
                              <option value="splash_n_dash">Splash n' Dash</option>
                              <option>None</option>
                          </select>
                      </div>

                      <p>If an adult is registered for an event above, the Splash n' Dash is free for children (ages 4-15). Otherwise, the Splash n' Dash ($25) can be chosen above.</p>

                      <label><input id="checkbox" type="checkbox" name="free_splash" value="yes">Add the free Splash n' Dash</label><br><br>

                      <label for="accommodations">Special Accommodations:</label>
                      <textarea form="register_form" rows="5" cols="50" name="accommodations" id="accommodations"></textarea>

                      <div id="submit2">
                          <input id="mySubmit2" type="submit" value="Submit"></div>
                  </form>
              </div>
          </section>

      </main>

      <?php include '../includes/footer.inc.php'; ?>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="../scripts/script.js"></script>

  </body>

  </html>
