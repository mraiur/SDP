<?php
require_once "helpers.php";
require_once "helpers/aliases.php";
$config = require_once('config.php');
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?=metaValue('title')?></title>
        <link rel="stylesheet" href="build/app.css" />
    </head>
    <body>
        <div class="profile">
            <div class="name">
                <h5 class="dark-text"><?=myName()?></h5>
            </div>
            <figure class="profile-pic">
                 <img src="<?=profilePic()?>" alt="">
            </figure>


            <div class="details">
                <div class="position"><?=myShortDescription()?></div>
            </div>

            <div class="social-icons">
                <ul>
                    <li><a href="<?=github()?>"><i class="fa fa-github"></i></a></li>
                    <li><a href="<?=bitbucket()?>"><i class="fa fa-bitbucket"></i></a></li>
                    <li><a href="<?=facebook()?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?=twitter()?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?=linkedin();?>"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="<?=googlePlus();?>"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="<?=blog();?>"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div>
            <div class="extended-details">
                <?=assetDataFile('description')?>
            </div>
        </div>
    </body>
</html>
