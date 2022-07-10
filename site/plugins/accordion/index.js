panel.plugin("mh-2022/accordion", {
    blocks: {
      accordion: `
        <div class="k-block-title">
            <span aria-hidden="true" class="k-block-icon k-icon k-icon-divider">
                <svg viewBox="0 0 16 16"><use xlink:href="#icon-divider"></use></svg>
            </span>
            <button type="button" @click="open">
                <span style="opacity:0.3">Akkordeon:</span> {{ content.title }}
            </button>
        </div>
      `
    }
  });