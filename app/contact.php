<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="css/contact-style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Contact Me</title>
  </head>
  <body class="background-img contact-img">
    <header>
      <!-- adding Nav Bar file is located in include folder as nav-bar.php-->
      <?php include 'includes/nav-bar.php'; ?>
    </header>
    <main>
      <div class="full">
        <h1 class="contact-page-heading">Contact Me</h1>
        <div class="contact-page">
          <?php include 'includes/contact-form.php'; ?>
        </div>
      </div>

    </main>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>
