<div class="accordion w-full m4-4">
    <input type="checkbox" name="tab-1" id="<?= $block->id() ?>" class="hidden peer" <?= $block->checked() == "true" ? 'checked' : '' ?>>
    <label class="mt-8 block wavy-bottom after:mt-1 mb-1.5 cursor-pointer font-bold text-xl" for="<?= $block->id() ?>"><?= $block->title() ?></label>
    
    <div class="tab-content max-h-0 peer-checked:max-h-[300px] overflow-hidden transition-all">
        <?= $block->text()->kt() ?>
    </div>
</div>