<?php /** @var \Kirby\Cms\Block $block */ ?>

<div class="mt-20 grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8">
  <?php foreach ($block->set()->toStructure() as $item): ?>
  <figure class="mt-0">
    <div class="aspect-[4/3]">
      <?php if( $item->image()->isNotEmpty() ): ?>
      <img src="<?= $item->image()->toFile()->resize(500)->url() ?>" srcset="<?= $item->image()->toFile()->resize(500)->url() ?>" alt="<?= $item->text() ?>" class="rounded-[2rem] sm:rounded-[1.5rem] object-cover h-full w-full bg-black">
      <?php else: ?>
      <div class="rounded-[2rem] sm:rounded-[1.5rem] bg-black/20 w-full h-full"></div>
      <?php endif ?>
    </div>
    <figcaption class="mt-2 ml-4"><strong><?= $item->text() ?></strong><?php if ($item->text2()->isNotEmpty()): ?>, <?= $item->text2() ?><?php endif ?></figcaption>
  </figure>
  <?php endforeach ?>
</div>