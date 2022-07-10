<?php /** @var \Kirby\Cms\Block $block */ ?>

<div class="mt-20 grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8">
  <?php foreach ($block->set()->toStructure() as $item): ?>
  <figure class="mt-0">
    <img src="<?= $item->image()->toFile()->resize(500)->url() ?>" srcset="<?= $item->image()->toFile()->srcset([500, 1200, 1500, 2500]) ?>" alt="<?= $item->text() ?>" class="rounded-[2rem] sm:rounded-[1.5rem]">
    <figcaption class="mt-2 ml-4"><strong><?= $item->text() ?></strong><?php if ($item->text2()->isNotEmpty()): ?>, <?= $item->text2() ?><?php endif ?></figcaption>
  </figure>
  <?php endforeach ?>
</div>