<!DOCTYPE html>
<html lang="de">
    <head>
        <?php snippet('head') ?>
    </head>
    <style>
        .galleryObject > .font-heading {
            -webkit-text-stroke: 1px <?= page("home")->clink() ?>;
            color: transparent;
        }
    </style>
    <body class="bg-cbackground text-cbase">
        <?php snippet('header') ?>
            <main class="">
                <div class="flex">
                    <div class="min-w-[4.5rem] md:min-w-[10rem]"></div>
                    <div class="grow">
                        <h1 class="text-cbase mt-6 md:mt-14 xl:mt-10 text-2xl md:text-6xl xl:text-8xl wavy-bottom xl:after:mt-2"><?= $page->title(); ?></h1>
                        <ul class="text-clink font-heading decoration-wavy mt-0.5 xl:mt-2">
                            <li class="inline-block"><a class="customLink mr-4" href="#act-history">Act History</a></li>
                        </ul>
                    </div>
                    <div class="min-w-[4.5rem] md:min-w-[10rem]"></div>
                </div>

                <?php 
                            // All program event objects of the past
                            // $eventsHistory = page('programm')->children()->listed()->filter(function ($child) {
                            //     return $child->date()->toDate() < time();
                            // });
                            $eventsHistory = $kirby->collection("program")->filterBy('date', 'date <', 'today');

                            // All gallery objects. Gallery objects are pages either with or without direct relation to a program event
                            $eventsGallery = $page->children()->listed();

                            // Gallery objects without relation to an event
                            $eventsGalleryWithoutEvent = $page->children()->filterBy('past_event', '');

                            $eventsGalleryHistory = $eventsHistory->merge($eventsGalleryWithoutEvent)->sortBy(function($page){
                                return $page->date()->toDate();
                            });
                        ?>
                        

                <div class="-mt-10 max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                    <div class="mt-24 lg:mt-32">
                        <?php foreach($eventsGallery as $event): ?>
                            <a href="<?= $event->url() ?>">
                                <figure class="mt-12">
                                    <div class="aspect-video bg-chover rounded-[2rem] lg:rounded-[4rem]">
                                        <img class="grayscale rounded-[2rem] lg:rounded-[4rem] w-full object-cover" src="<?= $event->gallery()->toFiles()->first()->resize(2500)->url() ?>" alt="<?= $event->title() ?> &middot; <?= $site->title() ?>" />
                                    </div>
                                    <figcaption class="sm:ml-16 mt-2">
                                        <span class="text-2xl md:text-4xl xl:text-6xl 3xl:text-[6.2rem] font-sansC">
                                            <span class="text-[105%]">
                                            <?php if( $event->date()->isNotEmpty() ): ?>
                                                <?= $event->date()->toDate('j.n.Y') ?>
                                            <?php else: ?>
                                                <?= page($event->past_event())->date()->toDate('j.n.Y'); ?>
                                            <?php endif ?>
                                            </span>
                                        </span>
                                        <span class="font-heading text-2xl md:text-4xl xl:text-6xl 3xl:text-[6rem] text-clink"><?= $event->title() ?></span>
                                    </figcaption>
                                </figure>
                            </a>
                        <?php endforeach ?>
                    </div>
                </div>


                <div id="act-history" class="pt-20 max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6 overflow-hidden">
                    <div class="sm:mt-24 lg:mt-32">
                        <h2>Artist History</h2>

                        <div id="dateSlider" class="mt-28 sm:mt-40"></div>


                        <form class="mt-10 sm:flex">
                            <label for="search" class="sr-only">Suche</label>
                            <input type="text" name="search" id="search" autocomplete="email" required class="pt-[0.8rem] pb-[0.65rem] mt-3 appearance-none min-w-0 w-full bg-white rounded-xl px-4 text-chover placeholder-gray-400 border-none focus:outline-none focus:ring-4 focus:ring-offset-4 focus:ring-offset-cbackground focus:ring-chover" placeholder="Künstler">
                            <div class="rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                <button type="submit" class="relative overflow-hidden group mt-3 bg-clink px-7 py-3 text-cbase uppercase rounded-xl focus:outline-none focus:ring-4 focus:ring-offset-4 focus:ring-offset-cbackground focus:ring-chover w-full">
                                    <span class="marquee after:content-[attr(data-text)] after:absolute after:px-1 after:left-full absolute hidden group-hover:inline inline-block" data-text="Suchen">Suchen</span>
                                    <span class="group-hover:opacity-0">Suchen</span>
                                </button>
                            </div>
                        </form>

                        <div class="mt-12">
                            <?php foreach($eventsGalleryHistory as $event): ?>
                                <?php
                                    $linkStart = "";
                                    $linkEnd = "";
                                    $eventDate = "";
                                    if ( $event->past_event()->exists() ){
                                        $linkStart = "<a href=" . $event->url() . " class='customLink'>";
                                        $linkEnd = "</a>";
                                    }
                                    else if ( !$event->past_event()->exists() ) {

                                        // check if $event->id() exists in one of $eventsGallery's children and link to that child
                                        // @konradm make more performant?
                                        foreach( $eventsGallery as $e ){
                                            if( $e->past_event() == $event->id()) {
                                                $linkStart = "<a href=" . $e->url() . " class='customLink'>";
                                                $linkEnd = "</a>";
                                                break;
                                            }
                                        }

                                    }

                                    if( $event->date()->isNotEmpty() ){
                                        $eventDate = $event->date();
                                    } else {
                                        $eventDate = page($event->past_event())->date();
                                    }
                                ?>


                                <div class="galleryObject inline  mr-4" date="<?= $eventDate ?>">
                                    <?= $linkStart ?>
                                        <span class="text-[1.6rem] font-sansC">
                                            <?= $eventDate->toDate('j.n.Y') ?>
                                        </span>
                                        <span class="font-heading text-2xl text-clink"><?= $event->title() ?></span>
                                    <?= $linkEnd ?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </main>

        <?php snippet('footer') ?>
        </div>
        <?php snippet('menu') ?>
        <script src="/node_modules/nouislider/dist/nouislider.js"></script>
        <link href="/node_modules/nouislider/dist/nouislider.css" rel="stylesheet">
        <style>
            #dateSlider{
                height: 0;
                border: none;
            }
            
            #dateSlider:after{
                content: "";
                display: block;
                width: 100%;
                height: 0.5rem;
                top: -0.1rem;
                position: relative;
                background-color: <?= page("home")->chover() ?>;
                mask: url('../assets/img/wave.svg');
                -webkit-mask: url('../assets/img/wave.svg');
            }

            #dateSlider .noUi-tooltip{
                background: transparent;
                border: none;
                transform: rotate(-90deg);
                transform-origin: left center;
                color: <?= page("home")->cbase() ?>;
                font-weight: bold;
                padding: 0;
                bottom: 100%;
            }

            #dateSlider .noUi-handle{
                border-radius: 999px;
                border: 0.3rem solid <?= page("home")->cbackground() ?>;
                background: <?= page("home")->clink() ?>;
                width: 3rem;
                height: 3rem;
                top: -1.5rem;
                right: -1.5rem;
                box-shadow: none;
            }

            #dateSlider .noUi-handle:before,
            #dateSlider .noUi-handle:after{
                display: none;
            }
        </style>
        <script>
            var dateSlider = document.getElementById('dateSlider');

            function timestamp(str) {
                return new Date(str).getTime();
            }

            noUiSlider.create(dateSlider, {
                tooltips: {
                    to: function(numericValue) {
                        return new Date(numericValue).getFullYear();
                    }
                },
                range: {
                    min: timestamp('1990'),
                    max: timestamp('2022')
                },
                step: 52 * 7 * 24 * 60 * 60 * 1000,
                start: [timestamp('2011'), timestamp('2022')]
            });
        </script>
    </body>
</html>