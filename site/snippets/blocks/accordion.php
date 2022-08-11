<div class="accordion w-full mt-2 max-w-3xl mx-auto wavy-bottom">
    <input type="checkbox" name="tab-1" id="<?= $block->id() ?>" class="hidden peer" <?= $block->checked() == "true" ? 'checked' : '' ?>>
    <label class="block after:mt-1 mb-1.5 cursor-pointer font-bold text-2xl" for="<?= $block->id() ?>"><?= $block->title() ?></label>
    
    <div class="tab-content max-h-0 peer-checked:max-h-[300px] overflow-hidden transition-all">
        <div class="mb-8">
            <?= $block->text()->kt() ?>
        </div>
    </div>
</div>