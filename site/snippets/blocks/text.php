<?php /** @var \Kirby\Cms\Block $block */ ?>
<p class="<?= $level = $block->level()->or('normal') ?>"><?= $block->text(); ?></p>