panel.plugin("mh-2022/imageText-block", {
  blocks: {
    imageText: `
      <div class="k-block-title">
          <span aria-hidden="true" class="k-block-icon k-icon k-icon-divider">
              <svg viewBox="0 0 16 16"><use xlink:href="#icon-text"></use></svg>
          </span>
          <button type="button" @click="open">
              <span style="opacity:0.3">Bild mit Text:</span> {{ content.title }}
          </button>
      </div>
    `
  }
});