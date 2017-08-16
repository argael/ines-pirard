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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?= $metaTitle ?: $title ?></title>
        <meta name="description" content="<?= $metaDescription ?: $description ?>">
        <?php if($metaAuthors): ?><meta name="author" content="<?= $metaAuthors ?>">
        <?php endif; ?>

        <!-- Twitter -->
        <?php if($twitterAuthor): ?><meta name="twitter:site" content="<?= $twitterAuthor ?>">
        <meta name="twitter:creator" content="<?= $twitterAuthor ?>">
        <?php endif; ?>
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?= $metaTitle ?>">
        <meta name="twitter:description" content="<?= $metaDescription ?: $description ?>">
        <?php if($twitterImage ?: $metaImage): ?><meta name="twitter:image" content="<?= $twitterImage['url'] ?: $metaImage ?>">
        <?php endif; ?>

        <!-- Facebook -->
        <meta property="og:url" content="https://passtech.be/ines_pirard">
        <meta property="og:title" content="<?= $metaTitle ?: $title ?>">
        <meta property="og:description" content="<?= $metaDescription ?: $description ?>">
        <meta property="og:type" content="website">
        <?php if($facebookImage ?: $metaImage): ?><meta property="og:image" content="<?= $facebookImage['url'] ?: $metaImage ?>">
        <meta property="og:image:secure_url" content="<?= $facebookImage['url'] ?: $metaImage ?>">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="<?= $facebookImage['width'] ?>">
        <meta property="og:image:height" content="<?= $facebookImage['height'] ?>">
        <?php endif; ?>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/master.css">
    </head>
    <body>
        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills float-right">
                        <li class="nav-item"><a class="nav-link" href="mailto:ines.pirard@passtech.be">Contact</a></li>
                    </ul>
                </nav>
                <h3 class="text-muted"><?= $title ?></h3>
            </div>

            <div class="jumbotron">
                <h1 class="display-4"><?= $tagline ?></h2>
                <p><?= $description ?></p>
                <p><a class="btn btn-default" href="mailto:<?= $email ?>" role="button">Contactez-moi</a></p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <p><?= $address ?></p>
                    <p><?= $phone ?></p>
                    <p><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
                </div>
                <div class="col-sm-6">
                    <p><?= $birth ?></p>
                    <p><?= $nationality ?></p>
                    <p><?= $driverLicense ?></p>
                    <p><?= $disponibility ?></p>
                </div>
            </div>

            <!-- Study -->
            <h3><?= $studyTitle ?></h3>
            <?php foreach ($studySteps as $date => $step): ?><div class="row">
                <div class="col-sm-3"><?= $date ?></div>
                <div class="col-sm-9"><?= $step ?></div>
            </div>
            <?php endforeach; ?>

            <!-- Professional -->
            <h3><?= $professionalTitle ?></h3>
            <?php foreach ($professionalSteps as $date => $step): ?><div class="row">
                <div class="col-sm-3"><?= $date ?></div>
                <div class="col-sm-9"><?= $step ?></div>
                </div>
            <?php endforeach; ?>

            <!-- Languages -->
            <h3><?= $languageTitle ?></h3>
            <?php foreach ($languageSteps as $date => $step): ?><div class="row">
                <div class="col-sm-3"><?= $date ?></div>
                <div class="col-sm-9"><?= $step ?></div>
                </div>
            <?php endforeach; ?>

            <!-- IT -->
            <h3><?= $itTitle ?></h3>
            <p><?= $itContent ?></p>

            <!-- Volunteer -->
            <h3><?= $volunteerTitle ?></h3>
            <?php foreach ($languageSteps as $date => $step): ?><div class="row">
                <div class="col-sm-3"><?= $date ?></div>
                <div class="col-sm-9"><?= $step ?></div>
                </div>
            <?php endforeach; ?>

            <!-- Interest -->
            <h3><?= $interestTitle ?></h3>
            <p><?= $interestContent ?></p>
        </div> <!-- /container -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>window.console.log("Made with love ♥ for Dogstudio 🐶")</script>
</body>
</html>
