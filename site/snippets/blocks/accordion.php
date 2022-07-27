<div class="accordion w-full m4-4 max-w-3xl mx-auto">
    <input type="checkbox" name="tab-1" id="<?= $block->id() ?>" class="hidden peer" <?= $block->checked() == "true" ? 'checked' : '' ?>>
    <label class="block wavy-bottom after:mt-1 mb-1.5 cursor-pointer font-bold text-2xl" for="<?= $block->id() ?>"><?= $block->title() ?></label>
    
    <div class="tab-content max-h-0 peer-checked:max-h-[300px] overflow-hidden transition-all">
        <div class="mb-8">
            <?= $block->text()->kt() ?>
        </div>
    </div>
</div>