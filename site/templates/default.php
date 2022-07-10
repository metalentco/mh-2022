<!DOCTYPE html>
<html lang="de">
    <head>
        <?php snippet('head') ?>
    </head>
    <body class="bg-cbackground text-cbase">
        <?php snippet('header') ?>
            <main class="">
                <div class="flex">
                    <div class="min-w-[4.5rem] md:min-w-[10rem]"></div>
                    <div class="grow">
                        <h1 class="text-cbase mt-6 md:mt-14 xl:mt-10 text-2xl md:text-6xl xl:text-8xl wavy-bottom xl:after:mt-2"><?= $page->title(); ?></h1>
                        <ul class="text-clink font-heading decoration-wavy mt-0.5 xl:mt-2">
                            <?php foreach ($page->submenu()->toStructure() as $item): ?>
                                <li class="inline-block"><a class="customLink mr-4" href="#<?= $item->link() ?>"><?= $item->title() ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="min-w-[4.5rem] md:min-w-[10rem]"></div>
                </div>

                <?php if ( $page->cover()->isNotEmpty() ): ?>
                <div class="mt-20 max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6 max-w-[100vh]">
                    <div class="shadow-image hover:shadow-none transition rounded-[2rem] lg:rounded-[4rem] overflow-hidden shadow-chover">
                        <img src="<?= $page->cover()->toFile()->resize(400)->url() ?>" srcset="<?= $page->cover()->toFile()->srcset([1000, 1500, 2500]) ?>" alt="<?= $page->title() ?>" class="w-full mx-auto grayscale aspect-video object-cover">
                    </div>
                </div>
                <?php endif ?>

                <div class="-mt-10 max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">

                    <div class="kblocks mt-24 lg:mt-32">
                        <?= $page->main_content()->toBlocks(); ?>
                    </div>

                </div>

            </main>

        <?php snippet('footer') ?>
        </div>
        <?php snippet('menu') ?>
    </body>
</html>