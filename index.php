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
             <figure class="profile-pic">
                 <img src="<?=profilePic()?>" alt="">
            </figure>


            <div class="details">
                <h5 class="dark-text red-border-bottom"><?=myName()?></h5>
                <div class="position"><?=myShortDescription()?></div>
            </div>

            <div class="social-icons">
                <ul>
                    <li><a href="<?=facebook()?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?=twitter()?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?=linkedin();?>"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="details">

                <?=assetDataFile('description')?>
            </div>
        </div>
    </body>
</html>
