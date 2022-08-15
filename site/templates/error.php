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
                    </div>
                    <div class="min-w-[4.5rem] md:min-w-[10rem]"></div>
                </div>

                <div class="h-screen w-screen flex justify-around items-center text-center">
                    <div class="p-4 mb-24 md:pb-0">
                        <div class="text-5xl md:text-7xl font-heading uppercase leading-tight">Hesch es Zündhölzli azündet?</div>
                        <div class="text-2xl md:text-4xl mt-4 md:mt-8">Die Syte existiert nid (404). <a href="<?= $site->url() ?>">Gang&nbsp;hei</a></div>
                    </div>
                </div>

            </main>
        </div>
        <?php snippet('menu') ?>
    </body>
</html>