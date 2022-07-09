<!DOCTYPE html>
<html lang="de">
    <head>
        <?php snippet('head') ?>
    </head>
    <body class="bg-cbackground">
        <?php snippet('header') ?>
            <main class="">
                <!-- <div class="max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6"> -->
                <div class="flex">
                    <div class="min-w-[4.5rem] md:min-w-[10rem]"></div>
                    <div class="grow">
                        <h1 class="text-cbase mt-6 md:mt-14 xl:mt-10 text-2xl md:text-6xl xl:text-8xl wavy-bottom xl:after:mt-2"><?= $page->title(); ?></h1>
                        <ul class="text-clink font-heading decoration-wavy mt-0.5 xl:mt-2">
                            <?php foreach ($page->submenu()->toStructure() as $item): ?>
                                <li class="inline-block"><a class="customLink mr-4 uppercase" href="#<?= $item->link() ?>"><?= $item->title() ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="min-w-[4.5rem] md:min-w-[10rem]"></div>
                </div>
                <div class="mt-20 max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6 max-w-[100vh]">
                    <div class="aspect-square sm:aspect-video">
                        <iframe class="w-full h-full rounded-[2rem] lg:rounded-[4rem] mx-auto" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10906.425001692498!2d7.5418107!3d46.8907943!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x801cb7ebfc33ae67!2sM%C3%BChle%20Hunziken!5e0!3m2!1sen!2sch!4v1657395077487!5m2!1sen!2sch" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>




                <div class="-mt-10 max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                    <div class="text-cbase kblocks mt-24 lg:mt-32">
                        <?= $page->main_content()->toBlocks(); ?>
                    </div>
                </div>





                <div class="-mt-10 max-w-7xl 3xl:max-w-[120rem] mx-auto px-3 md:px-6">
                    <div class="text-cbase kblocks mt-24 lg:mt-32">
                        <form action="" class="form-inputs">
                            <div class="flex flex-wrap md:flex-nowrap md:space-x-10">
                                <div class="w-full">
                                    <div>
                                        <label for="name">Vor- und Nachname</label>
                                        <input type="text" id="name" name="Name">
                                    </div>
                                    <div>
                                        <label for="email">E-Mail</label>
                                        <input type="email" id="email" name="E-Mail">
                                    </div>
                                    <div>
                                        <label for="phone">Telefon</label>
                                        <input type="tel" id="phone" name="Telefon">
                                    </div>
                                    <div>
                                        <label for="message">Nachricht</label>
                                        <textarea name="Nachricht" id="message" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="flex items-center my-6 md:mt-14 pt-0.5 md:mb-7">
                                        <div>
                                            <input id="booking" type="checkbox" value="" class="w-10 h-10 inline-block text-clink bg-white border-none appearance-none rounded-lg focus:outline-none focus:ring-4 focus:ring-offset-4 focus:ring-offset-cbackground focus:ring-chover">
                                        </div>
                                        <div>
                                            <label for="booking" class="ml-3 font-heading uppercase text-3xl">Booking request</label>
                                        </div>
                                    </div>
                                    <div id="bookingForm" class="hidden md:block transition">
                                        <div>
                                            <label for="artistName">Artist Name</label>
                                            <input type="text" id="artistName" name="Artist Name" disabled>
                                        </div>
                                        <div class="flex flex-wrap md:flex-nowrap md:space-x-4">
                                            <div class="w-full">
                                                <label for="genre">Genre</label>
                                                <input type="text" id="genre" name="Gene" disabled>
                                            </div>
                                            <div class="w-full">
                                                <label for="gigs">Number of gigs played</label>
                                                <input type="number" id="gigs" name="Gigs" disabled>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="website">Website</label>
                                            <input type="url" id="website" name="URL" disabled>
                                        </div>
                                        <div>
                                            <label for="socialMedia">Social Media</label>
                                            <input type="text" id="socialMedia" name="Social Media" disabled>
                                        </div>
                                        <div>
                                            <label for="sound">Sound Link</label>
                                            <input type="text" id="soundLink" name="Sound Link" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="relative overflow-hidden group mt-3 bg-clink px-7 py-3 text-cbase uppercase rounded-xl focus:outline-none focus:ring-4 focus:ring-offset-4 focus:ring-offset-cbackground focus:ring-chover">
                                <span class="marquee after:content-[attr(data-text)] after:absolute after:px-1 after:left-full absolute hidden group-hover:inline inline-block" data-text="Senden">Senden</span>
                                <span class="group-hover:opacity-0">Senden</span>
                            </button>
                        </form>
                    </div>
                </div>
            </main>

        <?php snippet('footer') ?>
        </div>
        <?php snippet('menu') ?>
        <script>
            var toggle = document.querySelector('#bookingForm')
            var inputs = document.querySelectorAll("#bookingForm input")
            document.querySelector('#booking').onclick = function(){
                toggle.classList.toggle('active');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = !inputs[i].disabled;
                }
            };
        </script>
    </body>
</html>