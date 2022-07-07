<div class="image_text mt-16 flex flex-wrap sm:flex-nowrap sm:space-x-4 max-w-3xl mx-auto">
    <div>
        <img src="https://placehold.co/800x600" alt="">
    </div>
    <div>
        <h4><?= $block->title() ?></h4>
        <div class="mt-3">
            <div><?= $block->text() ?></div>
        </div>
        <div class="mt-3">
            <a href="<?= $block->link() ?>"><?= $block->link_text() ?></a>
        </div>
    </div>
</div>