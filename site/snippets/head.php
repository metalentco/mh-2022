<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php
    if($page->uri() == "programm"){
        echo $site->title();
    } else {
        echo $page->title()." &middot ".$site->title();
    } ?></title>

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">


<?= css('assets/css/styles.css') ?>


<style>
    .text-cbackground{
        color: <?= page("home")->cbackground() ?>
    }
    .bg-cbackground{
        background-color: <?= page("home")->cbackground() ?>
    }
    .fill-cbackground{
        fill: <?= page("home")->cbackground() ?>
    }




    .text-cbase{
        color: <?= page("home")->cbase() ?>
    }
    .bg-cbase{
        background-color: <?= page("home")->cbase() ?>
    }
    .fill-cbase{
        fill: <?= page("home")->cbase() ?>
    }
    .ll{
        fill: <?= page("home")->cbase() ?>;
    }




    .text-clink{
        color: <?= page("home")->clink() ?>
    }
    .bg-clink{
        background-color: <?= page("home")->clink() ?>
    }
    .fill-clink{
        fill: <?= page("home")->clink() ?>
    }
    .before\:bg-clink::before{
        background-color: <?= page("home")->clink() ?>
    }




    .text-chover{
        color: <?= page("home")->chover() ?>
    }
    .group:hover .group-hover\:text-chover{
        color: <?= page("home")->chover() ?>
    }
    .bg-chover{
        background-color: <?= page("home")->chover() ?>
    }
    .fill-chover{
        fill: <?= page("home")->chover() ?>
    }
    .wavy-bottom:after{
        background-color: <?= page("home")->chover() ?>
    }



    @keyframes pulseletters{
        0%   { fill: <?= page("home")->cbase() ?> }
        10%   { fill: <?= page("home")->chover() ?> }
        20%  { fill: <?= page("home")->chover() ?> }
        30%  { fill: <?= page("home")->cbase() ?> }
    }
</style>