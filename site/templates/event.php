<!DOCTYPE html>
<html lang="de">
    <head>
        <?php snippet('head') ?>
    </head>
    <body class="bg-cbackground">
        <?php snippet('header') ?>
            <div class="min-h-[90vh] w-full bg-cover bg-center flex justify-end flex-col bg-chover" style="background-image: url('<?php if($page->cover()->isNotEmpty()){ echo $page->cover()->toFile()->url(); } ?>')">
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
                    <div class="flex flex-col justify-end mb-3">
                        <button type="submit" class="relative overflow-hidden group mt-3 bg-white px-7 py-3 text-clink uppercase rounded-xl focus:outline-none focus:ring-4 focus:ring-offset-4 focus:ring-offset-cbackground focus:ring-chover">
                            <span class="marquee after:content-[attr(data-text)] after:absolute after:px-1 after:left-full absolute hidden group-hover:inline inline-block" data-text="Ticket kaufen">Ticket kaufen</span>
                            <span class="group-hover:opacity-0">Ticket kaufen</span>
                        </button>
                    </div>
                </div>
            </div>




            <div class="flex items-start text-cbase max-w-7xl 3xl:max-w-[120rem] mx-auto p-3 md:px-6">
                <div class="flex items-center space-x-2 text-base md:text-xl sm:min-w-[8rem] md:min-w-[10rem] xl:min-w-[15rem] 3xl:min-w-[22rem]">
                    <div class="inline-block pt-2 uppercase text-chover bg-cbase rounded-[50%] w-10 h-7 md:w-12 md:h-8 text-center font-bold py-1 px-1 leading-none">
                        <?= $page->country() ?>
                    </div>
                    <div class="inline-block leading-none"><?= $page->style() ?></div>
                </div>
                <div>
                    <p class="text-xl md:text-2xl"><?= $page->subtitle(); ?></p>
                </div>
            </div>




            <main class="pt-20">
                <div class="max-w-5xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                    <div class="text-center text-2xl font-bold text-clink">
                        <?= $page->warning(); ?>
                    </div>
                </div>



                <div class="max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6 text-cbase">
                    <div class="mt-20 flex flex-wrap sm:flex-nowrap sm:space-x-12">


                        <dl class="w-full sm:w-1/2">
                            <div class="wavy-bottom">
                                <div class="flex justify-between pt-2 pb-1.5">
                                    <dt>Öffnung Mühlegarten & Aussenbar</dt>
                                    <dd><?= $page->open1()->time()->toDate('H.i'); ?></dd>
                                </div>
                            </div>
                            
                            <div class="wavy-bottom">
                                <div class="flex justify-between pt-2 pb-1.5">
                                    <dt>Türöffnung</dt>
                                    <dd><?= $page->open2()->time()->toDate('H.i'); ?></dd>
                                </div>
                            </div>

                            <div class="wavy-bottom">
                                <div class="flex justify-between pt-2 pb-1.5">
                                    <dt>Konzertbeginn</dt>
                                    <dd><?= $page->open3()->time()->toDate('H.i'); ?></dd>
                                </div>
                            </div>

                            <div class="wavy-bottom">
                                <div class="flex justify-between pt-2 pb-1.5">
                                    <dt>Pressefoto</dt>
                                    <dd><a href="#">Download</a></dd>
                                </div>
                            </div>

                            <div class="">
                                <div class="flex justify-between pt-2 pb-1.5">
                                    <dt>Speichern!</dt>
                                    <dd><a href="#">Facebook</a> &middot; <a href="#">Kalender</a></dd>
                                </div>
                                <!-- @konradm todo -->
                            </div>
                        </dl>

                        <dl class="w-full sm:w-1/2">
                            <div class="wavy-bottom">
                                <div class="flex justify-between pt-2 pb-1.5">
                                    <dt>Vorverkauf</dt>
                                    <dd><span class="text-sm">CHF</span> <?= number_format((float)$page->price1()->toFloat(), 2, '.', ''); ?></dd>
                                </div>
                            </div>

                            <div class="">
                                <div class="flex justify-between pt-2 pb-1.5">
                                    <dt>Abendkasse</dt>
                                    <dd><span class="text-sm">CHF</span> <?= number_format((float)$page->price2()->toFloat(), 2, '.', ''); ?></dd>
                                </div>
                            </div>
                        </dl>


                    </div>
                </div>



                <div class="max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                    <div class="mt-20 text-cbase sm:columns-2 leading-8 first-letter:text-8xl first-letter:font-bold first-letter:text-white first-letter:mr-3 first-letter:float-left first-letter:font-heading">
                        <?= $page->text(); ?>
                    </div>
                </div>
            </main>

        <?php snippet('footer') ?>
        </div>
        <?php snippet('menu') ?>
    </body>
</html>