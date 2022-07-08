<script>
    function toggle(){
        document.getElementById("navigation").classList.toggle("hidden");
    };
</script>

<!-- NAV -->
<div class="top-0 w-full fixed h-full bg-clink z-50 text-cbase hidden" id="navigation">
    <div class="fixed w-full z-30">
        <div class="relative">
            <div class="max-w-full 2xl:max-w-[140rem] mx-auto px-1 md:px-6 flex justify-between pt-2 md:pt-8 ">
                <div>
                    <a href="<?= $site->url() ?>" class="customLink customShake block">
                        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 445 685" style="enable-background:new 0 0 445 685;" xml:space="preserve" class="w-10 md:w-20">
                            <path class="fill-cbase" d="M245.3,0.6c1,0,2.1,0.8,3.2,0.9c5.3,4.2,7.8,9.9,13.9,12.2c2.8,4.4,7.5,7.4,7.6,13c1.3,20.5-7,7.4,1.5,33.5
                                c-4.1,5.9-0.7,11.7-6.4,16.8c0.2,9.2-3.4,18.2-5.3,26.8c0.7,8.7-7.1,6.9-2.9,16.6c1,0.3,2.4,1.6,3.1,2.8c3-2.8,7.3-3.9,10.1-6.4
                                c11.8-5.1,22.3-14.9,36.2-13.3c13.1-5.9,24.3-7.4,37.9-1.9c3.6-0.4,6.6-4.7,10.3,0c15.7,0.1,12.7,1.6,25-0.4
                                c1.9-0.6,11.6,9.5,15.2,3c3.5-2.5,5.7-1.4,6.8,3.2c2.7,2.8,7,3.1,10.7,3.8c3.2,7.3,13.7,5.4,16.6,13.4c4.9,4.3,10.2,4.6,14.8,9.8
                                c3.6,14.7-13.8,5.8-21.5,8.6c-4.9,4-13.6,4.1-18.5,7.9c-4,10.3-15.6,4.3-21.3,12.5c-7.8,4.3-16.7-0.1-21.6,7.5
                                c-1.3,0.2-2-0.2-2.9-0.8c-1.2,0.3-4,1.2-4.5,2.7c-3.5,0.8-5.8,0.2-7.3,2.9c-7,4.8-19.2-4.8-21.8,4.7c0.7,2.3,4.9,4.1,5,7.8
                                c7.8,0.3,20,0.8,23.4,11.2c1.5,0.1,3.6,0.9,5.6,1.5c1.7,4.1,6.7,6.4,9.8,9c1.2,4.1,0.5,8.1,3.3,11.9c3.4,0.3,6.2,3,8.1,6
                                c1,6.5,3.2,12.5,8.6,16.2c0.9,2.6,1.3,7.2,4.5,10.3c2.3,10.7,23.4,35-2.6,28.1c-7-9.2-17-5.1-22.4-13.6c-3.4-0.5-6.3-2.8-9.7-4.8
                                c-2.1-4-6.5-5.3-10.6-8.2c0.4-4.1-5.6-4.6-7.3-5.7c-21.5-21.4-36.9-13.5-57.9-26.2c-7.7,1.6-15,0.5-23.1-2.1
                                c-10.7,4.9-5.3,17-7.7,24.3c-4.3,5.1-4.4,6.9-3,12.9c3.8,5.1-2.4,9.6,6.3,16c3.7,12.4,11,22.7,15.7,35c0.6,1,2.8,0.8,4.3,1.2
                                c6,4,3.3,9.3,8.1,13.8c4,8.1,2.8,17.2,8.9,24.1c1.3,1.9-0.2,4.2-0.6,6.2c0,1.9,0.3,7.9-0.8,9.5c3.2,5,2.3,8.3,1.7,13.6
                                c0.3,0.4,1,0.7,1.3,0.9c4.9,11.1-6.7,18.5,0.8,19.9c2.1,2.7,0.9,4.6-1.8,7.1c0.1,3.2,0.3,7.4-2.3,10.1c-1.4,0.2-2.8,0.4-2.8,2.4
                                c-0.3,0.2-1.1,0.6-1.8,1.3c0.1,2.6-0.7,10.9,1.6,12.5c-0.4,6.9-7.3,5.6-4.1,11.6c-8.6,15.4-9.1,34-13.6,51.6c-1.2,0.2-2.3,0.9-3,2.1
                                c1.2,5.7-3,11.5-1.2,16.9c-4.9,4.1-2.8,10.2-5.9,16.2c-7.4,4.1,0.7,8.9-2.5,13.8c-7.6,4.9-5.7,13.2-3.8,20.7
                                c5.1,2.6,10.7,11.4,11.8,16.7c5.3,2.4,2.5,7.5,7.9,9.9c0.2,1.5,1.3,3.2,3.6,4.1c1.6,4.7,5.7,7.1,8.6,9.3c0.6,3.4,4.4,9.9,8.9,8.6
                                c4.5,3.4,5.1,7.7,7.9,12c8.7,1.8,6.1,0.9,9.1,8.4c4.4,2.1,7.2,4.9,10.3,8.2c1.4,2.1,1.3,5.8,4.4,5.7c1.1,3.2,4.1,4.2,6.3,6.5
                                c-0.7,14.1,1.8,19.9-10.9,19c-1.5-2.7-5.8-0.8-4.6,3.2c-9.7,3.3-22.1-4.2-31.2,2.4c-4.4,0.5-8.1,1.3-12.9,0.7
                                c-0.3,0.6-1.2,1.5-1.8,2.2c-3.7,1.3-6.4,0.8-9.7-0.6c-2.6,0.4-6.5,2.5-9,0.8c-5.4-0.2-14.2,2-19.9,1.2c-3.7,2.3-10.3-2.9-13.7,1.2
                                c-7.2-3-12.5-4.4-20.2-3.4c-5.7-3.1-12.3-1.3-17.9,0.1c-3.2,0-8.1-5.2-9.8-5.6c-3.8-1-9.2,0.4-11.1-4.5c-7.3,0-14.3-4.5-21.2-6
                                c-2.7-3.8-6.4-7-11.4-8.8c-10.2-8.2-17.1-11,0-17.2c2.8-8.2,13.2-3.1,17.6-7.5c1.2-0.6,2.5-1.4,3.6-1.5
                                c17.3-17.1,26.8-14.2,24.7-40.9c-3-4.6,4.2-9.5,4.1-14.2c-1.4-4.9-3.6-8.4-0.1-13.5c2.1-11.9,3.3-24.3,9.1-35
                                c-1.8-14.8,2.6-23.6,10-36.3c1.1-8.6,4.3-15.3,8.5-22.8c-0.8-5.9,3.1-7.8,7.4-11.8c2.2-2.7,1.1-9.9,1.3-13c2.8-2.3,3.3-7.4,3.4-11
                                c6.4-11.8-1.9-9.3,7-24.9c3.8-1.6,1.9-7.4,1.1-10.3c2.9-4.2,2.7-12,6.7-15.7c3.6-2.4,4.5-8.2,3.1-11.6c3-13,4.7-17.2-4.4-28.2
                                c1.6-4.1-0.4-7.2-4-9.1c-0.7-4.4-3.4-7.8-6.1-11.3c-0.4-6.1-8.9-5.6-9-10.6c-0.6-6.5-8.9-11.7-14.6-15.5c-4.1-8-13.5-9.3-19.6-15.6
                                c-3.5-0.3-7.7,5.3-12.9,3.7c-1.2,1.1-2.7,2.3-4,4.4c-12.2,0.6-22.3,9.4-32.2,15.4c-7.5,0.3-15.4,5.5-19.9,11.4
                                c-6,3.8-10.2,9.8-17.9,11.3c-1.2,1.9-2.4,3.5-3.9,5.1c-1.7-0.2-2.3,1.1-2.7,2.9c-5.8,5.3-12.1,12.6-17.3,18.4
                                c0.1,6.3-9.1,8.2-10,13.8c-3.4,3.1-7.6,6.6-9.7,11h-5.7c-2.3,4.1-3.8,5.1-7.1,3.4c-2.6-5.6-3.2-11.5-2-16.7
                                c7.7-5.2,8.1-16.6,16-20.1c0.3-11.4,12.4-18.6,13.3-29.6c5.2-6.1,11.9-10.5,15.4-17.6c-0.5-7.2-0.5-11.5,6.6-16.8
                                c1.7-4.7,5.1-7.9,9.2-11c1.2-3.4,2.4-5.7,4.3-8.8c1.5-2.6,4.7-2,6.9-2.4c8.1-10.5-0.1-17.2-12-10.8c-3.1,4.9-11.1,8.3-16.2,10.1
                                c-13.4-3.2-2.6-16.2,4.4-20.3c0.9-7.2-5.5-8.7-9.9-4.7c-3.4,0.6-6.4-1.8-9.7,0.8c-4.2,0.7-7.8,2.6-11.7,4.1c-5.2-1.2-8,0.9-11.5,5.3
                                c-4.6-1.7-7.7,3.5-11.5,5c-0.1,0.3-0.1,0.8-0.3,1.1c-6.4,1.8-5.3,11.1-10.2,15.5c-12.6,5-17.5-8.2-8.7-16.8v-7.3
                                c8.7-8.9,8.2-20.9,9.4-32.2c10.3-8.4,7.4-22.8,14.4-33.4c5.2-3.5,8.1-12,9.2-18c0.6-0.1,0.9-0.1,1.2-0.2
                                c12.4-17.1,34.1-30.4,55.8-30.6c4.8-3.5,15-3.7,20.2,0.1c7.3-1.3,17.1-2.2,23.8,3.3c1,0,1,0.1,1.5-0.8c15.2-2.7,10.5,7.2,19.5,6.2
                                c14,15.2,20.7,0.5,18-12.1c2.7-4.1-0.6-9.3,2.7-13.1c-0.3-0.4,0.8-8-0.7-6.9c-2.4-8.2-2.2-10.2-0.4-19.2c6.8-7.6,3.9-17.5,7.3-26.9
                                c5-0.8,4-7,4-10.5c4.2-8.9,9.5-23.3,21.3-25.1c1-6.9,11.6-5.9,13.3-5.2C232.3,10.9,238.5,3,245.3,0.6"/>
                        </svg>
                    </a>
                </div>
                <div class="mr-4">
                    <a href="#" onclick="toggle()" class="customLink">
                        <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-14 py-4 md:py-0 md:w-20 md:mt-4">
                            <path class="fill-cbase" d="M58.5892 67.3036C59.611 68.3345 60.0904 67.9407 60.6687 67.5535C61.247 67.1662 66.2202 61.5773 66.5275 60.6178C66.8349 59.6582 65.6714 58.5618 65.6714 58.5618C65.6714 58.5618 11.9136 2.71823 10.6713 1.92188C9.42888 1.12552 8.28851 1.97803 8.28851 1.97803C8.28851 1.97803 3.26062 6.94468 2.67031 8.05069C2.08 9.15669 2.07464 9.9756 2.65761 10.8765C3.24057 11.7773 58.5892 67.3036 58.5892 67.3036Z" fill="white"/>
                            <path class="fill-cbase" d="M2.95631 60.8871C2.95631 60.8871 2.18925 59.813 3.26186 58.7309L58.3492 3.15551C58.3492 3.15551 60.3767 1.82336 61.4374 2.89341L67.6703 9.18151C67.6703 9.18151 68.0864 9.91415 67.2465 11.2185C66.4066 12.5229 12.748 65.1445 11.9663 65.8361C11.1845 66.5278 10.4295 67.2279 9.36525 66.1542C6.33726 63.0994 4.80409 63.2146 2.95138 60.8822" fill="white"/>
                        </svg>                                
                    </a>
                </div>
                <div class="hidden absolute p-16 bg-indigo-500 text-black rounded-full w-10 h-10 z-40">
                    STÖRER
                </div>
            </div>
        </div>
    </div>
    <nav class="h-full py-32">
        <ul class="flex flex-col justify-center h-full text-center text-6xl sm:text-[5rem] md:text-[6rem] xl:text-[8rem]">









            <li class="relative">
                <a href="<?= $site->url() ?>" class="customLink font-heading uppercase inline-block my-2 sm:my-6"><?= page('programm')->title(); ?></a>
            </li>



            <?php
                $items = $pages->listed();
                if($items->isNotEmpty()):
            ?>
                <?php foreach($items as $item): ?>
                    <?php if($item != "programm"): ?>
                        <li class="relative">
                            <?php if($item->hasChildren() && $item->isNotEmpty()): ?>
                                <span class="pointer-events-none customLink font-heading uppercase inline-block opacity-20 my-2 sm:my-6"><?= $item->title(); ?></span>
                                <ul class="w-full absolute top-1/2 -translate-y-1/2 transform text-xl sm:text-3xl md:text-4xl xl:text-5xl">
                                    <?php foreach($item->children()->listed() as $subitem): ?>
                                        <li class="inline-block">
                                            <a href="<?= $subitem->url(); ?>" class="customLink font-heading inline-block py-2 px-1"><?= $subitem->title(); ?></a>
                                        </li>  
                                    <?php endforeach ?>
                                </ul>
                            <?php else: ?>
                                <a href="<?= $item->url() ?>" class="customLink font-heading uppercase inline-block my-2 sm:my-6"><?= $item->title(); ?></a>
                            <?php endif ?>
                        </li>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endif ?>
        </ul>
    </nav>
</div>