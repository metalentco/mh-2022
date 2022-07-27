<footer class="text-cbase">
    <div class="max-w-7xl mx-auto px-3 md:px-6 mt-60">
        <div class="max-w-md mx-auto text-center">
            <p class="uppercase font-heading tracking-wider text-cbase">Trage dich in den Newsletter ein</p>
            <form class="mt-4 sm:flex sm:max-w-md">
                <label for="email-address" class="sr-only">E-Mail-Addresse</label>
                <input type="email" name="email-address" id="email-address" autocomplete="email" required class="pt-[0.8rem] pb-[0.65rem] mt-3 appearance-none min-w-0 w-full bg-white rounded-xl px-4 text-chover placeholder-gray-400 border-none focus:outline-none focus:ring-4 focus:ring-offset-4 focus:ring-offset-cbackground focus:ring-chover" placeholder="E-Mail-Adresse eingeben">
                <div class="rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                    <button type="submit" class="relative overflow-hidden group mt-3 bg-clink px-7 py-3 text-cbase uppercase rounded-xl focus:outline-none focus:ring-4 focus:ring-offset-4 focus:ring-offset-cbackground focus:ring-chover">
                        <span class="marquee after:content-[attr(data-text)] after:absolute after:px-1 after:left-full absolute hidden group-hover:inline inline-block" data-text="Anmelden">Anmelden</span>
                        <span class="group-hover:opacity-0">Anmelden</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-20 bg-clink text-2xl bg-top footer-wave bg-no-repeat bg-[length:200%] bg-left-bottom pb-40 sm:pb-20 xl:pb-0 bg-contain sm:bg-[length:80%] lg:bg-[length:70%] xl:bg-[length:50%] 2xl:bg-[length:800px] before:bg-clink before:content-[''] before:-top-6 before:h-6 before:w-full before:block before:relative" <?php if(page('home')->footer_image()->isNotEmpty()) {echo "style=background-image:url('".page('home')->footer_image()->toFile()->url()."')";}?>>
        <div class="max-w-7xl mx-auto px-3 md:px-6">
            <div class="ml-auto md:max-w-xl">
                <ul class="sm:flex justify-between mb-8 text-center sm:text-left">
                    <li>
                        <a href="<?= $site->url() ?>" class="customLink font-heading uppercase tracking-wider inline-block py-3">Programm</a>
                    </li>
                    <li>
                        <a href="<?= page('galerie')->url() ?>" class="customLink font-heading uppercase tracking-wider inline-block py-3">Galerie</a>
                    </li>


                    <?php
                        $items = $pages->listed();
                        if($items->isNotEmpty()):
                    ?>
                        <?php foreach($items as $item): ?>
                            <?php if($item != "programm" and $item != "galerie"): ?>
                                <li>
                                    <a href="<?= $item->url() ?>" class="customLink font-heading uppercase tracking-wider inline-block py-3"><?= $item->title(); ?></a>
                                    <?php if($item->hasChildren() && $item->isNotEmpty()): ?>
                                        <ul class="flex sm:block justify-around w-full -mt-2 sm:mt-0 text-lg">
                                            <?php foreach($item->children()->listed() as $subitem): ?>
                                                <li>
                                                    <a href="<?= $subitem->url(); ?>" class="customLink py-1 inline-block"><?= $subitem->title(); ?></a>
                                                </li>  
                                            <?php endforeach ?>
                                        </ul>
                                    <?php endif ?>
                                </li>
                            <?php endif ?>
                        <?php endforeach ?>
                    <?php endif ?>
                </ul>
                <div class="py-8 text-right">
                    <a href="#" class="mr-8 inline-block font-bold"><span class="py-4">Facebook</span></a>
                    <a href="#" class="font-bold inline-block"><span class="py-4">Instagram</span></a>
                </div>
            </div>
        </div>
    </div>
</footer>