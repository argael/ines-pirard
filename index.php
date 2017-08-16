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

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/master.css">
    </head>
    <body>
        <div class="container-fluid">
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


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-address-book-o"></i> <?= $aboutTitle ?></h3>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <p><?= $address ?></p>
                            <p><?php if($phoneUrl): ?>
                                    <a href="tel:<?= $phoneUrl ?>"><?= $phone ?></a>
                                <?php else: ?>
                                    <?= $phone ?>
                                <?php endif; ?>
                            </p>
                            <p><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
                        </div>
                        <div class="col-sm-6">
                            <p><?= $birth ?></p>
                            <p><?= $nationality ?></p>
                            <p><?= $driverLicense ?></p>
                            <p><?= $disponibility ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Study -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-graduation-cap"></i> <?= $studyTitle ?></h3>
                </div>
                <div class="panel-body">
                    <?php foreach ($studySteps as $date => $step): ?><div class="row">
                        <div class="col-sm-3"><strong><?= $date ?></strong></div>
                        <div class="col-sm-9"><?= $step ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Professional -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-briefcase"></i> <?= $professionalTitle ?></h3>
                </div>
                <div class="panel-body">
                    <?php foreach ($professionalSteps as $date => $step): ?><div class="row">
                        <div class="col-sm-3"><strong><?= $date ?></strong></div>
                        <div class="col-sm-9"><?= $step ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Languages -->

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-comments-o"></i> <?= $languageTitle ?></h3>
                </div>
                <div class="panel-body">
                    <?php foreach ($languageSteps as $date => $step): ?><div class="row">
                        <div class="col-sm-3"><strong><?= $date ?></strong></div>
                        <div class="col-sm-9"><?= $step ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- IT -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-code"></i> <?= $itTitle ?></h3>
                </div>
                <div class="panel-body">
                    <p><?= $itContent ?></p>
                </div>
            </div>

            <!-- Volunteer -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-hand-spock-o"></i> <?= $volunteerTitle ?></h3>
                </div>
                <div class="panel-body">
                    <?php foreach ($languageSteps as $date => $step): ?><div class="row">
                        <div class="col-sm-3"><strong><?= $date ?></strong></div>
                        <div class="col-sm-9"><?= $step ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Interest -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-birthday-cake"></i> <?= $interestTitle ?></h3>
                </div>
                <div class="panel-body">
                    <p><?= $interestContent ?></p>
                </div>
            </div>
        </div> <!-- /container -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>window.console.log("Made with love ♥ for Dogstudio 🐶")</script>
</body>
</html>
