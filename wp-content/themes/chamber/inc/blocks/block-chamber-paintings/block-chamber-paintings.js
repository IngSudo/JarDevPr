(function () {
  function initChamberPaintings(block) {
    const buttons = block.querySelectorAll("[data-filter]");
    const items = block.querySelectorAll(".gallery-grid-item");

    if (!buttons.length || !items.length) return;

    buttons.forEach((button) => {
      button.addEventListener("click", function () {
        const filter = this.dataset.filter;
        const isActive = this.classList.contains("active");

        buttons.forEach((btn) => btn.classList.remove("active"));

        if (isActive) {
          items.forEach((item) => {
            item.style.display = "block";
          });
          return;
        }

        this.classList.add("active");

        items.forEach((item) => {
          if (item.classList.contains("category-" + filter)) {
            item.style.display = "block";
          } else {
            item.style.display = "none";
          }
        });
      });
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    const blocks = document.querySelectorAll(".block-chamber-paintings");

    blocks.forEach((block) => {
      initChamberPaintings(block);
    });
  });
})();
