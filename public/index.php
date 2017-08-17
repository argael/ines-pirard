<?php
/**
 * CV Inès Pirard
 *
 * @author Inès Pirard <ines@passtech.be>
 * @author Thierry Lagasse <thierry@passtech.be>
 * @since July 2017
 */
$content = include_once('../contents/main.php');
extract($content);

$sections = array_reduce(array_keys($navigation), function($sections, $key) {
    return $sections + [$key.'Id' => $key];
}, []);
extract($sections);
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
        <meta property="og:url" content="<?= $baseurl ?>">
        <meta property="og:title" content="<?= $metaTitle ?: $title ?>">
        <meta property="og:description" content="<?= $metaDescription ?: $description ?>">
        <meta property="og:type" content="website">
        <?php if($facebookImage ?: $metaImage): ?><meta property="og:image" content="<?= $facebookImage['url'] ?: $metaImage ?>">
        <meta property="og:image:secure_url" content="<?= $facebookImage['url'] ?: $metaImage ?>">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="<?= $facebookImage['width'] ?>">
        <meta property="og:image:height" content="<?= $facebookImage['height'] ?>">
        <?php endif; ?>

        <link rel="stylesheet" href="css/master.css">
    </head>
    <body data-spy="scroll" data-target="#navigation">
        <nav id="navigation" class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="mailto:<?= $email ?>"><?= $title ?></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php foreach ($navigation as $key => $label): ?><li class="nav-item">
                        <a href="#<?= $key ?>" class="nav-link"><?= $label ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>

        <div class="jumbotron">
            <img src="<?= $metaImage ?>" alt="<?= $tagline ?>" class="img-circle" width="128px" height="128px">
            <h2 class="display-2">
                <span class="hidden visible-print-inline"><strong><?= $title ?></strong></span>
                <span class="hidden-print">I</span>&nbsp;<?= $tagline ?>
            </h2>
            <p><?= $description ?></p>
        </div>

        <div class="container">
            <div id="<?= $aboutId ?>" class="page-header">
                <h3><i class="fa fa-address-book-o"></i> <?= $aboutTitle ?></h3>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <strong>Inès Pirard</strong>
                    <address><?= $address ?></address>
                    <p>
                        <i class="fa fa-phone"></i>&nbsp;
                        <?php if($phoneUrl): ?><a href="tel:<?= $phoneUrl ?>"><?= $phone ?></a>
                        <?php else: ?><?= $phone ?><?php endif; ?>
                        <br>
                        <i class="fa fa-envelope"></i>&nbsp;
                        <a href="mailto:<?= $email ?>"><?= $email ?></a>
                    </p>
                </div>
                <div class="col-sm-6">
                    <ul>
                        <li><?= $birth ?></li>
                        <li><?= $nationality ?></li>
                        <li><?= $driverLicense ?></li>
                        <li><?= $disponibility ?></li>
                    </ul>
                </div>
            </div>


            <!-- Study -->
            <div id="<?= $studyId ?>" class="page-header">
                <h3><i class="fa fa-graduation-cap"></i> <?= $studyTitle ?></h3>
            </div>
            <dl class="dl-horizontal"><?php foreach ($studySteps as $date => $step): ?>
                <dt><?= $date ?></dt>
                <dd><?= $step ?></dd>
            <?php endforeach; ?>
            </dl>

            <!-- Formation -->
            <div id="<?= $formationId ?>" class="page-header">
                <h3><i class="fa fa-graduation-cap"></i> <?= $formationTitle ?></h3>
            </div>
            <dl class="dl-horizontal"><?php foreach ($formationSteps as $date => $step): ?>
                    <dt><?= $date ?></dt>
                    <dd><?= $step ?></dd>
                <?php endforeach; ?>
            </dl>

            <!-- Professional -->
            <div id="<?= $professionalId ?>" class="page-header">
                <h3><i class="fa fa-briefcase"></i> <?= $professionalTitle ?></h3>
            </div>
            <div class="panel-body">
                <dl class="dl-horizontal"><?php foreach ($professionalSteps as $date => $step): ?>
                    <dt><?= $date ?></dt>
                    <dd><?= $step ?></dd>
                <?php endforeach; ?>
            </div>


            <!-- Languages -->
            <div id="<?= $languageId ?>" class="page-header">
                <h3><i class="fa fa-comments-o"></i> <?= $languageTitle ?></h3>
            </div>
            <div class="panel-body">
                <dl class="dl-horizontal"><?php foreach ($languageSteps as $date => $step): ?>
                    <dt><?= $date ?></dt>
                    <dd><?= $step ?></dd>
                <?php endforeach; ?>
            </div>


            <!-- IT -->
            <div id="<?= $itId ?>" class="page-header">
                <h3><i class="fa fa-code"></i> <?= $itTitle ?></h3>
            </div>
            <p><?= $itContent ?></p>


            <!-- Volunteer -->
            <div id="<?= $volunteerId ?>" class="page-header">
                <h3><i class="fa fa-hand-spock-o"></i> <?= $volunteerTitle ?></h3>
            </div>
            <dl class="dl-horizontal"><?php foreach ($volunteerSteps as $date => $step): ?>
                <dt><?= $date ?></dt>
                <dd><?= $step ?></dd>
            <?php endforeach; ?>


            <!-- Interest -->
            <div id="<?= $interestId ?>" class="page-header">
                <h3><i class="fa fa-birthday-cake"></i> <?= $interestTitle ?></h3>
            </div>
            <p><?= $interestContent ?></p>
        </div> <!-- /container -->

        <div class="footer hidden-print">
            <div class="container panel" id="contact">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="panel-body">
                            <h4>Envie d'en savoir plus ?</h4>
                            <p>Vous pouvez utiliser le formulaire pour me contacter. Je reviendrai vers vous très vite.</p>
                        </div>
                        <div class="panel-footer">
                            <form action="<?= $baseurl ?>" method="POST">
                                <input type="text" class="hidden" name="yourname" value="">

                                <div class="form-group">
                                    <label for="youremail">Votre email</label>
                                    <input type="email" class="form-control" id="youremail" name="youremail" placeholder="hire@awesome-company.com">
                                </div>

                                <div class="form-group">
                                    <label for="yourmessage">Votre message</label>
                                    <textarea class="form-control" id="yourmessage" name="yourmessage" rows="5"></textarea>
                                </div>



                                <button type="submit" class="btn btn-default">Envoyer</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel-body text-center">
                            <h4>Garder mon CV sous la main ?</h4>
                            <p>Téléchargez-le au format PDF.</p>
                            <a class="btn btn-lg btn-default" href="<?= $baseurl ?>/cv.pdf">
                                <i class="fa fa-file-pdf-o"></i> Téléchargez mon CV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <script src="js/main.js"></script>
    </body>
</html>
