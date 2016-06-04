<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Cafmeyer Dieter, Gilles De Muynck"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
    WebFontConfig = {
      custom: {
        families: ['pier', 'deutschlander'],
        urls: ['assets/fonts/fonts.css']
      }
    };

    (function() {
      var wf = document.createElement('script');
      wf.src = 'js/vendor/webfontloader.min.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
    </script>

    <title>DAM</title>

    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  </head>

  <body>


    <?php if(!empty($_SESSION['info'])): ?><div class="alert_alert_success"><?php echo $_SESSION['info']; ?></div><?php endif; ?>
    <?php if(!empty($_SESSION['error'])): ?><div class="alert_alert_danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

    <main>
      <?php echo $content; ?>
    </main>
    <script src="js/rellax.min.js"></script>

    <script>
      var rellax = new Rellax('.rellax');
    </script>

    <script src="js/script.js"></script>
  </body>

</html>
