<!DOCTYPE html>
<html lang="de">
    <head>
        <?php snippet('head') ?>

        <?php if( $page->cover()->isNotEmpty() ): ?>
        <style>
            .coverImage{
                background-image: url( <?= $page->cover()->toFile()->resize(1000)->url() ?>);
            }
            @media(min-width: 1024px){
                .coverImage{
                    background-image: url( <?= $page->cover()->toFile()->resize(1500)->url() ?>);
                }
            }
            @media(min-width: 1536px){
                .coverImage{
                    background-image: url( <?= $page->cover()->toFile()->resize(2500)->url() ?>);
                }
            }
        </style>
        <?php endif ?>

    </head>
    <body class="bg-cbackground text-cbase">
        <?php snippet('header') ?>
        <div class="fixed w-full z-30 pointer-events-none sm:hidden flex">
            <div class="relative mx-auto">
                <?php if( $page->ticket()->isNotEmpty() ): ?>
                <a href="<?= $page->ticket() ?>" type="submit" class="pointer-events-auto inline-block mx-auto customLink font-heading relative overflow-hidden group mt-3 bg-white px-7 py-3 text-clink uppercase rounded-xl focus:outline-none focus:ring-4 focus:ring-offset-4 focus:ring-offset-cbackground focus:ring-chover appearance-none">
                    <span class="marquee after:content-[attr(data-text)] after:absolute after:px-1 after:left-full absolute hidden group-hover:inline inline-block" data-text="Ticket kaufen">Ticket kaufen</span>
                    <span class="group-hover:opacity-0">Ticket kaufen</span>
                </a>
                <?php endif ?>
            
            </div>
        </div>
        <div class="h-[75vh] md:h-[90vh] w-full bg-cover flex justify-end flex-col bg-chover bg-top <?php if($page->cover()->isNotEmpty()){ echo "coverImage"; } ?>">
            <!-- @konradm todo <div class="min-h-[90vh] w-full bg-[url('')]"> -->
            <div class="text-white mb-2 flex items-end justify-between w-full max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                <div>
                    <div class="mr-2 whitespace-nowrap text-lg leading-none sm:text-2xl md:text-4xl xl:text-6xl 3xl:text-[6.2rem] sm:min-w-[8rem] md:min-w-[10rem] xl:min-w-[15rem] 3xl:min-w-[22rem]">
                        <span class="font-sansC md:font-extralight xl:font-sans uppercase mr-[-4px] text-[70%] md:text-[80%] xl:text-[78%] relative top-[-0.2rem] sm:top-[-0.3rem] md:top-[-0.35rem] xl:top-[-0.55rem] 3xl:top-[-0.95rem] border-white border-b-[0.1rem] sm:border-b-2 md:border-b-2 xl:border-b-[0.2rem] 3xl:border-b-[0.3rem] inline-block leading-[0.9em] md:leading-[0.8em]"><?= substr(strval($page->date()->toDate('D')), 0, -1); ?></span>
                        <span class="font-sansC md:font-extralight"><?= $page->date()->toDate('j.n.'); ?></span>
                    </div>
                </div>
                <div class="grow">
                    <h1 class="pt-0.5 sm:mt-[-0.05rem] md:mt-[-0.43rem] xl:pt-0 md:mt-[-0.3rem] xl:mt-[-0.4rem] leading-none text-6xl md:text-7xl xl:text-8xl 3xl:text-[7rem] -ml-2"><?= $page->title(); ?></h1>
                </div>
                <div class="mb-3 shrink-0 hidden sm:block relative">
                    <?php if( $page->ticket()->isNotEmpty() ): ?>
                    <a href="<?= $page->ticket() ?>" type="submit" class="block customLink font-heading relative overflow-hidden group mt-3 bg-white px-7 py-3 text-clink uppercase rounded-xl focus:outline-none focus:ring-4 focus:ring-offset-4 focus:ring-offset-cbackground focus:ring-chover appearance-none">
                        <span class="marquee after:content-[attr(data-text)] after:absolute after:px-1 after:left-full absolute hidden group-hover:inline inline-block" data-text="Ticket kaufen">Ticket kaufen</span>
                        <span class="group-hover:opacity-0">Ticket kaufen</span>
                    </a>
                    <?php endif ?>
                </div>
            </div>
        </div>



        <div class="flex flex-wrap md:flex-nowrap md:flex-row-reverse md:justify-end items-start max-w-7xl 3xl:max-w-[120rem] mx-auto p-3 md:px-6">
            <div class="w-full">
                <p class="text-base md:text-2xl"><?= $page->subtitle(); ?></p>
            </div>
            <div class="md:mx-0 mt-2 md:mt-0 flex space-x-2 text-base md:text-xl sm:min-w-[8rem] md:min-w-[10rem] xl:min-w-[15rem] 3xl:min-w-[22rem]">
                <div class="flex md:flex-wrap">
                    <?php foreach( $page->country()->split() as $country ):  ?>
                    <div class="md:mt-2 md:first-of-type:mt-0 mr-2 md:basis-full">
                        <div class="inline-block pt-2 uppercase text-chover bg-cbase rounded-[50%] w-10 h-7 md:w-12 md:h-8 text-center font-bold py-1 px-1 leading-none">
                            <?= $country ?>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>

                <div class="inline-block leading-none mt-[0.5rem] sm:mt-1.5 sm:leading-6">
                    <?php foreach( $page->style()->split() as $style ):  ?>
                        <?= Str::ucfirst($style) ?><span class="md:hidden last-of-type:hidden">, </span><br class="hidden md:inline">
                    <?php endforeach ?>
                </div>
            </div>
        </div>




        <main class="pt-6">
            <div class="max-w-5xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">

                <div class="inline-block left-1/2 relative -translate-x-1/2 mb-8">
                <?php if( $page->status_event()->isNotEmpty() ): ?>
                    <div class="flag-container">
                        <div class="flag"><?= $page->blueprint()->field('status_event')['options'][$page->status_event()->value()] ?></div>
                    </div>
                <?php elseif( $page->availability() != "available" ): ?>
                    <div class="flag-container">
                        <div class="flag">Ausverkauft</div>
                    </div>
                <?php endif ?>
                </div>

                <div class="text-center text-xl sm:text-2xl font-bold text-clink">
                    <?= $page->warning(); ?>
                </div>
            </div>



            <div class="max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                <div class="mt-20 flex flex-wrap sm:flex-nowrap sm:space-x-12">


                    <dl class="w-full sm:w-1/2">
                        <?php if( $page->open1()->isNotEmpty() ): ?>
                        <div class="wavy-bottom">
                            <div class="flex justify-between pt-2 pb-1.5">
                                <dt>Öffnung Mühlegarten & Aussenbar</dt>
                                <dd><?= $page->open1()->time()->toDate('H.i'); ?></dd>
                            </div>
                        </div>
                        <?php endif ?>
                        
                        <?php if( $page->open2()->isNotEmpty() ): ?>
                        <div class="wavy-bottom">
                            <div class="flex justify-between pt-2 pb-1.5">
                                <dt>Türöffnung</dt>
                                <dd><?= $page->open2()->time()->toDate('H.i'); ?></dd>
                            </div>
                        </div>
                        <?php endif ?>

                        <?php if( $page->open3()->isNotEmpty() ): ?>
                        <div class="wavy-bottom">
                            <div class="flex justify-between pt-2 pb-1.5">
                                <dt>Konzertbeginn</dt>
                                <dd><?= $page->open3()->time()->toDate('H.i'); ?></dd>
                            </div>
                        </div>
                        <?php endif ?>

                        <?php if( $page->press()->isNotEmpty() ): ?>
                        <div class="wavy-bottom">
                            <div class="flex justify-between pt-2 pb-1.5">
                                <dt>Pressefotos</dt>
                                <dd><a href="<?= $page->press()->toFile()->url() ?>" target="_blank">Download</a></dd>
                            </div>
                        </div>
                        <?php endif ?>

                        <?php if( $page->facebook()->isNotEmpty() || $page->date()->isNotEmpty() ): ?>
                        <div class="wavy-bottom">
                            <div class="flex justify-between pt-2 pb-1.5">
                                <dt>Speichern!</dt>
                                <dd>
                                    <?php if( $page->facebook()->isNotEmpty()): ?><a href="<?= $page->facebook() ?>">Facebook</a> &middot; <?php endif ?>
                                    <?php if( $page->date()->isNotEmpty() ): ?>
                                    <script type="text/javascript" src="https://cdn.addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
                                    <div title="Zu Kalender hinzufügen" class="addeventatc">
                                        Kalender
                                        <span class="start"><?= date('Y-m-d H:i', strtotime($page->date().$page->open2())) ?></span>
                                        <span class="end"><?= date('Y-m-d H:i', strtotime( $page->date().$page->open2().'+ 3 hours' )) ?></span>
                                        <span class="timezone">Europe/Bern</span>
                                        <span class="title"><?= $page->title() ?></span>
                                        <span class="description"><?= $page->title() ?><br /><?= $page->subtitle() ?><br /><br /><?= $page->text(); ?></span>
                                        <span class="location">Mühle Hunziken<br />3113 Rubigen</span>
                                    </div>
                                    <?php endif ?>
                                        
                                    
                                </dd>
                            </div>
                        </div>
                        <?php endif ?>
                    </dl>

                    <dl class="w-full sm:w-1/2">
                        <?php if( $page->price1()->isNotEmpty() ): ?>
                        <div class="wavy-bottom">
                            <div class="flex justify-between pt-2 pb-1.5">
                                <dt>Vorverkauf</dt>
                                <dd><span class="text-sm">CHF</span> <?= number_format((float)$page->price1()->toFloat(), 2, '.', ''); ?></dd>
                            </div>
                        </div>
                        <?php endif ?>
                        
                        <?php if( $page->price2()->isNotEmpty() ): ?>
                        <div class="">
                            <div class="flex justify-between pt-2 pb-1.5">
                                <dt>Abendkasse</dt>
                                <dd><span class="text-sm">CHF</span> <?= number_format((float)$page->price2()->toFloat(), 2, '.', ''); ?></dd>
                            </div>
                        </div>
                        <?php endif ?>
                    </dl>


                </div>
            </div>


            <div class="max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                <div class="ktext mt-20 md:columns-2 leading-8 first-letter:text-8xl first-letter:font-bold first-letter:text-white first-letter:mr-3 first-letter:float-left first-letter:font-heading">
                    <?= $page->text()->kirbytext(); ?>
                </div>
            </div>



            <div class="max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                <div class="mt-20 kblocks">
                    <?= $page->media()->toBlocks(); ?>
                </div>
            </div>


            <div class="max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                <div class="ktext mt-20 md:columns-2 leading-8">
                    <?= $page->text_end()->kirbytext(); ?>
                </div>
            </div>



        </main>

        <?php snippet('footer') ?>
        <?php snippet('menu') ?>
        <style>
            .addeventatc{
                background-color: transparent;
                color: <?= page("home")->cbase() ?> !important;
                box-shadow: none !important;
                border-radius: 0;
                padding: 0;
                font-size: inherit;
                border: none;
                outline-color: transparent;
                text-shadow: none;
                font-family: inherit;
                font-weight: 400;
                background: linear-gradient(to bottom, var(--underlineColor) 0%, var(--underlineColor) 100%);
                background-position: 0 100%;
                background-repeat: repeat-x;
                background-size: 2px 2px;
                padding-bottom: 1px;
                -webkit-font-smoothing: auto !important;
            }
            .addeventatc .addeventatc_icon{
                display: none;
            }
            .addeventatc:hover{
                background-color: transparent;
                font-size: inherit;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg id='squiggle-link' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:ev='http://www.w3.org/2001/xml-events' viewBox='0 0 20 4'%3E%3Cstyle type='text/css'%3E.squiggle{animation:shift .3s linear infinite;}@keyframes shift {from {transform:translateX(0);}to {transform:translateX(-20px);}}%3C/style%3E%3Cpath fill='none' stroke='%23AD4F41' stroke-width='2' class='squiggle' d='M0,3.5 c 5,0,5,-3,10,-3 s 5,3,10,3 c 5,0,5,-3,10,-3 s 5,3,10,3'/%3E%3C/svg%3E");
                background-position: 0 100%;
                background-size: auto 4px;
                background-repeat: repeat-x;
                text-decoration: none;
            }
            .addeventatc .addeventatc_dropdown{
                background-color: <?= page("home")->clink() ?>;
                border-radius: 1rem;
                overflow: hidden;
                width: auto;
                padding: 0;
                font-family: inherit;
                font-size: inherit;
            }
            .addeventatc .addeventatc_dropdown span{
                color: <?= page("home")->cbase() ?>;
                background-image: none;
                padding-left: 10px;
                font-family: inherit;
                font-weight: bold;
                font-size: inherit;
            }
            .addeventatc .addeventatc_dropdown span:hover{
                background-color: transparent;
            }
            .addeventatc .addeventatc_dropdown span:first-of-type{
                padding-top: 16px;
            }
            .addeventatc .addeventatc_dropdown span:last-of-type{
                padding-bottom: 16px;
            }
            .addeventatc .addeventatc_dropdown span em{
                display: none;
            }
            .addeventatc .addeventatc_dropdown .copyx{
                display: none;
            }
        </style>
    </body>
</html>