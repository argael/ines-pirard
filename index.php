<?php
/**
 * CV Inès Pirard
 *
 * @author Inès Pirard <ines@passtech.be>
 * @author Thierry Lagasse <thierry@passtech.be>
 * @since July 2017
 */
$content  = include_once('content.php');
extract($content);
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?= $metaTitle ?: $title ?></title>
    <meta name="description" content="<?= $metaDescription ?: $description ?>">
    <?php if($metaAuthors): ?><meta name="author" content="<?= $metaAuthors ?>">
    <?php endif; ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">

        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item"><a class="nav-link active" href="#">Top <span class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="mailto:ines.pirard@passtech.be">Contact</a></li>
          </ul>
        </nav>

        <h3 class="text-muted"><?= $title ?></h3>
      </div>

      <div class="jumbotron">
          <h1 class="display-4"><?= $tagline ?></h2>
          <p><?= $description ?></p>
          <p><a class="btn btn-default" href="mailto:<?= $email ?>" role="button">Contactez-moi &raquo;</a></p>
      </div>

    </div> <!-- /container -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>window.console.log("Made with love ♥ for Dogstudio 🐶")</script>
  </body>
</html>
