<div class="accordion w-full mb-8 md:w-1/2 md:float-left md:even:pr-5">
    <input type="checkbox" name="tab-1" id="<?= $block->id() ?>" class="hidden peer" <?= $block->checked() == "true" ? 'checked' : '' ?>>
    <label class="mt-8 block wavy-bottom after:mt-1 mb-1.5 cursor-pointer font-bold" for="<?= $block->id() ?>"><?= $block->title() ?></label>
    
    <div class="tab-content max-h-0 peer-checked:max-h-[300px] overflow-hidden transition-all">
        <?= $block->text() ?>
    </div>
</div>