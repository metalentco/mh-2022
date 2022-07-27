panel.plugin("mh-2022/textBlockMini", {
    blocks: {
      textBlockMini: `
        <div class="k-block-title">
            <span aria-hidden="true" class="k-block-icon k-icon k-icon-text">
                <svg viewBox="0 0 16 16"><use xlink:href="#icon-text"></use></svg>
            </span>
            <button type="button" @click="open">
                <span style="opacity:0.3">Mini-Text-Block:</span> {{ content.title }}
            </button>
        </div>
      `
    }
  });