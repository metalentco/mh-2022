
<dl class="mt-8 grid sm:grid-cols-2 3xl:grid-cols-3 gap-x-8">
    <?php foreach ($block->details()->toStructure() as $item): ?>
        <div class="wavy-bottom w-full">
            <div class="flex justify-between pt-2 pb-1.5">
                <dt><?= $item->title() ?></dt>
                <dd>
                    <?php if($item->choice() == "false"): ?>
                        <a href="<?= $item->link()->url() ?>" target="_blank">Click me!</a>
                    <?php else: ?>
                        <a href="<?= $item->file()->toFile()->url() ?>" target="_blank">Download</a>
                    <?php endif ?>
                </dd>
            </div>
        </div>
    <?php endforeach ?>
</dl>