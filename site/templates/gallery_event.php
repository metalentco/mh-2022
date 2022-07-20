<!DOCTYPE html>
<html lang="de">
    <head>
        <?php snippet('head') ?>

        <link type="text/css" rel="stylesheet" href="/node_modules/lightgallery/css/lightgallery.css" />

        <?php if( $page->gallery()->isNotEmpty() ): ?>
        <style>
            .coverImage{
                background-image: url( <?= $page->gallery()->first()->toFile()->resize(1000)->url() ?>);
            }
            @media(min-width: 1024px){
                .coverImage{
                    background-image: url( <?= $page->gallery()->first()->toFile()->resize(1500)->url() ?>);
                }
            }
            @media(min-width: 1536px){
                .coverImage{
                    background-image: url( <?= $page->gallery()->first()->toFile()->resize(2500)->url() ?>);
                }
            }

            .lg-container{
                font-family: inherit;
            }
            .lg-backdrop{
                background-color: rgba(0,0,0,0.9);
            }
            .lg-toolbar .lg-counter{
                color: white;
                padding-top: 2.3rem;
                padding-left: 2rem;
            }
            .lg-toolbar{
                height: 0;
            }
            .lg-toolbar .lg-close{
                width: 3rem;
                height: 3rem;
                margin: 1.5rem;
                background-image: url("data:image/svg+xml,%3Csvg width='69' height='69' viewBox='0 0 69 69' fill='none' xmlns='http://www.w3.org/2000/svg' class='w-14 py-4 md:py-0 md:w-20 md:mt-4'%3E%3Cpath class='fill-cbase' d='M58.5892 67.3036C59.611 68.3345 60.0904 67.9407 60.6687 67.5535C61.247 67.1662 66.2202 61.5773 66.5275 60.6178C66.8349 59.6582 65.6714 58.5618 65.6714 58.5618C65.6714 58.5618 11.9136 2.71823 10.6713 1.92188C9.42888 1.12552 8.28851 1.97803 8.28851 1.97803C8.28851 1.97803 3.26062 6.94468 2.67031 8.05069C2.08 9.15669 2.07464 9.9756 2.65761 10.8765C3.24057 11.7773 58.5892 67.3036 58.5892 67.3036Z' fill='white'/%3E%3Cpath class='fill-cbase' d='M2.95631 60.8871C2.95631 60.8871 2.18925 59.813 3.26186 58.7309L58.3492 3.15551C58.3492 3.15551 60.3767 1.82336 61.4374 2.89341L67.6703 9.18151C67.6703 9.18151 68.0864 9.91415 67.2465 11.2185C66.4066 12.5229 12.748 65.1445 11.9663 65.8361C11.1845 66.5278 10.4295 67.2279 9.36525 66.1542C6.33726 63.0994 4.80409 63.2146 2.95138 60.8822' fill='white'/%3E%3C/svg%3E");
                background-size: 2rem 2rem;
                background-position: center center;
                background-repeat: no-repeat;
            }
            .lg-toolbar .lg-close:after{
                display: none;
            }
            .lg-next,
            .lg-prev{
                width: 3rem;
                height: 3rem;
                background-color: transparent;
                background-image: url("data:image/svg+xml,%3Csvg width='41' height='68' viewBox='0 0 41 68' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M40.411 36.1705C40.411 36.1705 9.51845 67.0928 8.93398 67.3626C8.34902 67.6324 7.70253 67.4559 6.70497 66.7581C5.70742 66.0604 0.718158 61.0547 0.718158 61.0547C0.718158 61.0547 -0.19737 59.9771 0.163958 59.1658C0.414935 58.6031 16.1356 43.6924 25.7338 34.6192L0.218359 9.57203C0.218359 9.57203 -0.358301 8.29346 0.712011 7.23291L7.0001 1C7.0001 1 7.6627 0.514404 8.48545 0.877197C9.12754 1.16016 28.0507 20.5867 35.9448 28.8413C37.8178 30.4402 39.829 33.1673 40.1625 33.585C41 34.5 41.0158 35.5714 40.411 36.1705Z' fill='white'/%3E%3C/svg%3E%0A");
                background-size: 2rem 2rem;
                background-position: center center;
                background-repeat: no-repeat;
            }

            .lg-prev{
                transform: rotate(180deg);
            }
            .lg-next:before,
            .lg-prev:after{
                display: none;
            }
        </style>
        <?php endif ?>

    </head>
    <body class="bg-cbackground text-cbase">
        <?php snippet('header') ?>
        <div class="h-[75vh] md:h-[90vh] w-full bg-cover flex justify-end flex-col bg-chover bg-top <?php if($page->gallery()->isNotEmpty()){ echo "coverImage"; } ?>">
            <!-- @konradm todo <div class="min-h-[90vh] w-full bg-[url('')]"> -->
            <div class="text-white mb-2 flex items-end justify-between w-full max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                <div>
                    <div class="mr-2 whitespace-nowrap text-lg leading-none sm:text-2xl md:text-4xl xl:text-6xl 3xl:text-[6.2rem] sm:min-w-[8rem] md:min-w-[10rem] xl:min-w-[15rem] 3xl:min-w-[22rem]">
                        <span class="font-sansC md:font-extralight"><?= $page->date()->isNotEmpty() ? $page->date()->toDate('j.n.Y') : page($page->past_event())->date()->toDate('j.n.Y'); ?></span>
                    </div>
                </div>
                <div class="grow">
                    <h1 class="pt-0.5 sm:mt-[-0.05rem] md:mt-[-0.43rem] xl:pt-0 md:mt-[-0.3rem] xl:mt-[-0.4rem] leading-none text-6xl md:text-7xl xl:text-8xl 3xl:text-[7rem] -ml-2"><?= $page->title(); ?></h1>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap md:flex-nowrap md:flex-row-reverse md:justify-end items-start max-w-7xl 3xl:max-w-[120rem] mx-auto p-3 md:px-6">
            <div class="w-full">
                <p class="text-base md:text-2xl"><?= $page->gallery_photographer(); ?></p>
            </div>
            <div class="mx-auto md:mx-0 mt-2 md:mt-0 flex items-center space-x-2 text-base md:text-xl sm:min-w-[8rem] md:min-w-[10rem] xl:min-w-[15rem] 3xl:min-w-[22rem]">
            </div>
        </div>




        <main class="pt-20">
            <div class="max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                <div class="mt-20 flex flex-wrap sm:flex-nowrap sm:space-x-12">

                    <div id="lightgallery" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 sm:gap-8">
                        <?php foreach ($page->gallery()->toFiles() as $image): ?>
                            <a href="<?= $image->resize(2500)->url() ?>" data-responsive="<?= $image->resize(800)->url() ?> 400, <?= $image->resize(1500)->url() ?> 1024," class="customLink">
                                <img src="<?= $image->resize(500)->url() ?>" alt="<?= $page->title() ?> &middot; <?= $site->title() ?>" />
                            </a>
                        <?php endforeach ?>
                    </div>


                </div>
            </div>





        </main>

        <?php snippet('footer') ?>
        <?php snippet('menu') ?>
        <script src="/node_modules/lightgallery/lightgallery.umd.js"></script>
        <script type="text/javascript">
            lightGallery(document.getElementById('lightgallery'), {
                download: false,
                getCaptionFromTitleOrAlt: false
            });
        </script>
    </body>
</html>