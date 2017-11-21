<?php
require "functions.php";
$languages = ["en", "de", "bg"];

if (isset( $_GET["lang"]) &&  in_array($_GET["lang"], $languages)){
    $current_language = $_GET["lang"];
} else {
    $current_language = "en";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tina</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Font Awesome-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

     <!-- js-s -->
    <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="js/jquery-1.11.2.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/parsley.min.js"></script>

    <!-- Developer's css -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div id="logo" class="pull-left">
                <a href="index.php"><img src="css/logo.png" alt="logo"/></a>
            </div>
            <div class="pull-right">
                <ul id="lang-switcher">
                    <li><a href="?lang=en" class="<?php if($_GET["lang"]=="en"){echo "is-active";}?>" title="in English">En</a></li>
                    <li id="divider-vertical"></li>
                    <li><a href="?lang=bg" class="<?php if($_GET["lang"]=="bg"){echo "is-active";}?>" title="на български">Бг</a></li>
                    <li id="divider-vertical"></li>
                    <li><a href="?lang=de" class="<?php if($_GET["lang"]=="de"){echo "is-active";}?>" title="auf Deutsch">De</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <div class="row">
            <div class="jumbotron"></div>
        </div>

        <div  class="row">
            <div class="col-sm-12">
                <h2 class="text-center"><?php echo t('welcome-i-am-your-host-tina',$current_language); ?></h2>
                <h4 class="text-center"><?php echo t('come-and-see-my-virtual-creations',$current_language); ?></h4>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-sm-5 wrapper">
                <a href="http://tina.dasolutions.org/hotel" target="_blank" id="star_hotel"></a>
                <a href="http://tina.dasolutions.org/hotel" target="_blank" class="btn btn-light"><?php echo t('show-me-the-website',$current_language); ?></a>
                <h4 class="text-center"><?php echo t('hotel-the-treasure-project',$current_language); ?></h4>
                <p><?php echo t('i-call-it-my-treasure-project',$current_language); ?></p>
                <p><?php echo t('it-is-important-to',$current_language); ?></p>
                <p><?php echo t('it-is-beautiful-and-well-designed',$current_language); ?></p>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5 wrapper">
                <a href="http://tina.dasolutions.org/space_battles" target="_blank" id="space_battles"></a>
                <a href="http://tina.dasolutions.org/space_battles" target="_blank" class="btn btn-light"><?php echo t('show-me-the-app',$current_language); ?></a>
                <h4 class="text-center"><?php echo t('space-battles-the-fun-project',$current_language); ?></h4>
                <p><?php echo t('the-brains-of-the-app',$current_language); ?></p>
                <p><?php echo t('still-the-curtains-are-very',$current_language); ?></p>
                <p><?php echo t('in-fact-space-battles',$current_language); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5 wrapper">
                <a href="http://tina.dasolutions.org/solicitors" target="_blank" id="solicitors"></a>
                <a href="http://tina.dasolutions.org/solicitors" target="_blank" class="btn btn-light"><?php echo t('show-me-the-website',$current_language); ?></a>
                <h4 class="text-center"><?php echo t('solicitors-the-quick-project',$current_language); ?></h4>
                <p><?php echo t('sometimes-i-have-a-vision',$current_language); ?></p>
                <p><?php echo t('lets-say-a-law-firm',$current_language); ?></p>
                <p><?php echo t('probably-a-law-firm-is-not',$current_language); ?></p>
                <p><?php echo t('to-illustrate-my-idea-of',$current_language); ?></p>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5 wrapper">
                <a href="http://tina.dasolutions.org/calc" target="_blank" id="calculator"></a>
                <a href="http://tina.dasolutions.org/calc" target="_blank" class="btn btn-light"><?php echo t('show-me-the-app',$current_language); ?></a>
                <h4 class="text-center"><?php echo t('calculator-the-useful-project',$current_language); ?></h4>
                <p><?php echo t('i-wanted-to-learn-javascript',$current_language); ?></p>
                <p><?php echo t('obviously-calc-de-la-hrus-seems',$current_language); ?></p>
                <p><?php echo t('something-really-awesome-about',$current_language); ?></p>
                <p><?php echo t('calc-de-la-hrus-is-special',$current_language); ?></p>
                <p><?php echo t('to-make-calc-de-la-hrus-look',$current_language); ?></p>
            </div>


        </div>


        <div class="gap"></div>
        <div class="gap"></div>
        <hr />

        <div class="row">
            <div class="col-sm-4 personal">
                <div class="gap"></div>
                <h4><?php echo t('about-me-',$current_language); ?></h4>
                <br />
                <p><?php echo t('hi-there',$current_language); ?></p>
                <p><?php echo t('i-am-tina-the-creator',$current_language); ?></p>
                <p><?php echo t('let-me-tell-you-more',$current_language); ?></p>
                <p><?php echo t('i-find-programming-to-be-fascinating',$current_language); ?></p>
              </div>
            <div class="col-sm-4 personal">
                <div class="gap"></div>
                <h4><?php echo t('hire-me-',$current_language); ?></h4>
                <br />
                <p><?php echo t('why-me',$current_language); ?></p>
                <p><?php echo t('if-you-are-looking-for',$current_language); ?></p>
                <p><?php echo t('i-am-capable-of-finding',$current_language); ?></p>
                <p><?php echo t('in-addition-to-that-i',$current_language); ?></p>
                <p><?php echo t('so-if-you-think-that',$current_language); ?></p>
            </div>
            <div class="col-sm-4 personal">
                <div class="gap"></div>
                <h4><?php echo t('contact-me-',$current_language); ?></h4>
                <br />
                <p><?php echo t('lets-try',$current_language); ?></p>
                <p><?php echo t('scientists-say-that-some',$current_language); ?></p>
                <form id="demo-form" action="contact.php" method="post" data-parsley-validate="">
                    <div class="margin_top">
                        <label for="name" title="<?php echo t('enter-your-name',$current_language); ?>"><?php echo t('name',$current_language); ?></label>
                        <input class="form-control"
                               type="text"
                               name="name"
                               data-parsley-required="true"
                               data-parsley-required-message="<?php echo t('what-is-your-name',$current_language); ?>"
                               data-parsley-minlength="2"
                               data-parsley-minlength-message="<?php echo t('at-least-2-letters',$current_language); ?>"
                               data-parsley-maxlength="100"
                               data-parsley-maxlength-message="<?php echo t('this-is-enough-for-a-name',$current_language); ?>" >
                    </div>
                    <div class="margin_top">
                        <label for="email" title="<?php echo t('please-enter-your-e-mail',$current_language); ?>"><?php echo t('email',$current_language); ?></label>
                        <input id="email"
                               class="form-control"
                               name="email"
                               data-parsley-required="true"
                               data-parsley-required-message="<?php echo t('hey-i-need-a-way',$current_language); ?>"
                               data-parsley-type="email"
                               data-parsley-type-message="<?php echo t('please-type-a-valid-e-mail',$current_language); ?>">
                    </div>
                    <div class="margin_top">
                        <label for="message" title="<?php echo t('so-what-do-you-want-to',$current_language); ?>"><?php echo t('message',$current_language); ?></label>
                        <textarea
                                id="message"
                                class="form-control"
                                name="message"
                                data-parsley-required="true"
                                data-parsley-required-message="<?php echo t('tell-me-about',$current_language); ?>"
                                data-parsley-minlength="20"
                                data-parsley-minlength-message="<?php echo t('please-tell-me-more',$current_language); ?>"
                                data-parsley-maxlength="1000"
                                data-parsley-maxlength-message="<?php echo t('you-obviously-have-a-lot',$current_language); ?>"
                        ></textarea>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="row">
                            <input class="btn btn-light" value="<?php echo t('send-message',$current_language); ?>" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <footer>
                <hr />
                <h5 class="text-center">
                    <?php echo t('created-by',$current_language); ?><a href="index.php"> Hruselinda &copy;</a> 2017
                </h5>
            </footer>
        </div>

    </div>
</body>
</html>