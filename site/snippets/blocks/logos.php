<?php /** @var \Kirby\Cms\Block $block */ ?>

<div class="mt-20 flex flex-wrap justify-around">
  <?php foreach ($block->set()->toStructure() as $item): ?>
  <figure class="mt-0 sm:rounded-[1.5rem] flex items-center md:w-[25%]">
    <div class="bg-white rounded-[2rem] p-6 m-6 h-32 w-full">
      <img src="<?= $item->image()->toFile()->resize(500)->url() ?>" srcset="<?= $item->image()->toFile()->srcset([500, 1200]) ?>" alt="<?= $item->text() ?>" class="h-full w-full object-contain">
    </div>
  </figure>
  <?php endforeach ?>
</div>