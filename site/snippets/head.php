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
    .fill-cpalm{
        fill: <?= page("home")->cpalm() ?>
    }



    .fill-cbrand{
        fill: <?= page("home")->cbrand() ?>
    }
    .ll{
        fill: <?= page("home")->cbrand() ?>;
    }



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
    .border-cbase{
        border-color: <?= page("home")->cbase() ?>
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
    :root {
        --underlineColor: <?= page("home")->clink() ?>
    }
    a:not(.customLink):hover {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg id='squiggle-link' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:ev='http://www.w3.org/2001/xml-events' viewBox='0 0 20 4'%3E%3Cstyle type='text/css'%3E.squiggle{animation:shift .3s linear infinite;}@keyframes shift {from {transform:translateX(0);}to {transform:translateX(-20px);}}%3C/style%3E%3Cpath fill='none' stroke='<?= str_replace("#","%23",page("home")->clink()); ?>' stroke-width='2' class='squiggle' d='M0,3.5 c 5,0,5,-3,10,-3 s 5,3,10,3 c 5,0,5,-3,10,-3 s 5,3,10,3'/%3E%3C/svg%3E");
    }

    :root #navigation {
        --underlineColor: <?= page("home")->cbase() ?>
    }
    #navigation a:not(.customLink):hover {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg id='squiggle-link' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:ev='http://www.w3.org/2001/xml-events' viewBox='0 0 20 4'%3E%3Cstyle type='text/css'%3E.squiggle{animation:shift .3s linear infinite;}@keyframes shift {from {transform:translateX(0);}to {transform:translateX(-20px);}}%3C/style%3E%3Cpath fill='none' stroke='<?= str_replace("#","%23",page("home")->cbase()); ?>' stroke-width='2' class='squiggle' d='M0,3.5 c 5,0,5,-3,10,-3 s 5,3,10,3 c 5,0,5,-3,10,-3 s 5,3,10,3'/%3E%3C/svg%3E");
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
    .wavy-bottom:not(:last-of-type):after{
        background-color: <?= page("home")->chover() ?>
    }
    
    .shadow-chover{
        box-shadow: '1rem 1rem 0 0 <?= page("home")->chover() ?>'
    }


    .flag-container:before{
        background-color: <?= page("home")->cbase() ?>;
    }
    .flag{
        background-color: <?= page("home")->cbase() ?>;
        color: <?= page("home")->cbackground() ?>;
    }

    .linkAnimation{
        background: linear-gradient(to right, <?= page("home")->chover() ?>, <?= page("home")->chover() ?> 50%, <?= page("home")->clink() ?> 50%);
        display: inline;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: 200% 100%;
        background-position: 100%;
        transition: background-position 500ms ease;
    }

    .group:hover .linkAnimation{
        background-position: 0 100%;
    }


    input:focus,
    textarea:focus,
    button[type="submit"]{
        --tw-ring-offset-color: <?= page("home")->cbackground() ?> !important;
        --tw-ring-color: <?= page("home")->chover() ?> !important;
    }




    @keyframes pulseletters{
        0%   { fill: <?= page("home")->cbrand() ?> }
        10%   { fill: <?= page("home")->chover() ?> }
        20%  { fill: <?= page("home")->chover() ?> }
        30%  { fill: <?= page("home")->cbrand() ?> }
    }
</style>