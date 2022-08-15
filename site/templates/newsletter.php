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
                    <div class="pb-24 md:pb-0 w-full sm:max-w-xl">
                    <p class="uppercase font-heading tracking-wider text-cbase">Trage dich in den Newsletter ein</p>
                        <form class="mt-4 sm:flex px-4">
                            <label for="email-address" class="sr-only">E-Mail-Addresse</label>
                            <input type="email" name="email-address" id="email-address" autocomplete="email" required class="pt-[0.8rem] pb-[0.65rem] mt-3 appearance-none min-w-0 w-full bg-white rounded-xl px-4 text-chover placeholder-gray-400 border-none focus:outline-none focus:ring-4 focus:ring-offset-4 focus:ring-offset-cbackground focus:ring-chover" placeholder="E-Mail-Adresse eingeben">
                            <div class="rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                <button type="submit" class="relative overflow-hidden group mt-3 bg-clink px-7 py-3 text-cbase uppercase rounded-xl focus:outline-none focus:ring-4 focus:ring-offset-4">
                                    <span class="marquee after:content-[attr(data-text)] after:absolute after:px-1 after:left-full absolute hidden group-hover:inline inline-block" data-text="Anmelden">Anmelden</span>
                                    <span class="group-hover:opacity-0">Anmelden</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </main>
        </div>
        <?php snippet('menu') ?>
    </body>
</html>