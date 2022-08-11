<?php
use Kirby\Cms\Html;

/** @var \Kirby\Cms\Block $block */
?>
<?php if ($video = Html::video($block->url())): ?>
<?php

    if( strpos($block->url(), "youtube") !== false ){
        parse_str( parse_url( $block->url(), PHP_URL_QUERY ), $my_array_of_vars );
        $videoID = $my_array_of_vars['v'];
        $imageLink = "https://img.youtube.com/vi/".$videoID."/hqdefault.jpg";
    } elseif( strpos($block->url(), "vimeo") !== false ){
        $videoID = substr( parse_url( $block->url(), PHP_URL_PATH ), 1 );
        $imageLink = "https://vumbnail.com/".$videoID."_large.jpg";
    }
?>


<figure class="mt-20 w-full aspect-video overflow-hidden rounded-[2rem] lg:rounded-[4rem] relative videoBlock">
    <button class="w-full absolute group" id="<?= "button-".$block->id() ?>">
        <div class="aspect-video bg-cover bg-center blur-md scale-110" style="background-image:url(<?= $imageLink ?>)"></div>
        <svg width="93" height="105" viewBox="0 0 93 105" xmlns="http://www.w3.org/2000/svg" class="group-hover:hidden fill-white absolute z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <path d="M86.1695 42.1276C94.1241 46.7551 94.1241 58.2453 86.1695 62.8728L18.034 102.509C10.0341 107.163 -4.01507e-07 101.392 0 92.1367L3.43904e-06 12.8637C3.84054e-06 3.60863 10.0341 -2.16265 18.034 2.49116L86.1695 42.1276Z" fill="#D9D9D9"/>
        </svg>
        <div class="waveTextAnimated w-full absolute top-1/2 left-1/2 text-3xl -translate-x-1/2 -translate-y-1/2 hidden opacity-0 sm:block sm:group-hover:opacity-100 text-white">
            <span>V</span>
            <span>I</span>
            <span>D</span>
            <span>E</span>
            <span>O</span>
            <span> </span>
            <span>A</span>
            <span>B</span>
            <span>S</span>
            <span>P</span>
            <span>I</span>
            <span>E</span>
            <span>L</span>
            <span>E</span>
            <span>N</span>
        </div>

    </button>
    <iframe id="<?= $block->id() ?>" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="bg-black w-full aspect-video hidden"></iframe>
    <?php if ($block->caption()->isNotEmpty()): ?>
        <figcaption><?= $block->caption() ?></figcaption>
    <?php endif ?>
</figure>
<?php endif ?>


<script>
    document.getElementById("<?= "button-".$block->id() ?>").onclick = function() {
        this.style.display = 'none';
        var iframe = document.getElementById("<?= $block->id() ?>");
        var url = "<?=$block->url()?>";
        if( url.indexOf("youtube") !== -1 ){
            iframe.src = "https://www.youtube.com/embed/<?= $videoID ?>?&autoplay=1";
        } else if( url.indexOf("vimeo") !== -1 ){
            iframe.src = "https://player.vimeo.com/video/<?= $videoID ?>?&autoplay=1";
        }
        iframe.style.display = "block";
    }
</script>