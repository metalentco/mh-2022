<?php /** @var \Kirby\Cms\Block $block */ ?>

<div class="mt-20 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5 gap-8">
  <?php foreach ($block->images()->toFiles() as $image): ?>
  <figure class="mt-0">
    <a href="<?= $image->url() ?>" target="_blank" class="">
        <img src="<?= $image->resize(500)->url() ?>" srcset="<?= $image->srcset([500, 1200]) ?>" alt="Mühle Hunziken" class="rounded-[2rem] sm:rounded-[1.5rem] aspect-video object-cover w-full">
    </a>
  </figure>
  <?php endforeach ?>
</div>