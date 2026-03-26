(function () {
  function initChamberPaintings(block) {
    const buttons = block.querySelectorAll("[data-filter]");
    const items = block.querySelectorAll(".gallery-grid-item");
    const itemsArray = Array.from(items);

    const modal = block.querySelector(".block-chamber-paintings__modal");
    const modalImg = block.querySelector(
      ".block-chamber-paintings__modal__img",
    );
    const modalDesc = block.querySelector(
      ".block-chamber-paintings__modal__desc",
    );
    const modalClose = block.querySelector(
      ".block-chamber-paintings__modal__close",
    );
    const modalOverlay = block.querySelector(
      ".block-chamber-paintings__modal__overlay",
    );
    const arrowLeft = block.querySelector(
      ".block-chamber-paintings__modal__arrow--left",
    );
    const arrowRight = block.querySelector(
      ".block-chamber-paintings__modal__arrow--right",
    );

    if (!buttons.length || !items.length || !modal) return;

    let currentIndex = 0;
    
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

    function showItem(index) {
      const item = itemsArray[index];

      modalImg.src = item.dataset.img;
      modalDesc.textContent = item.dataset.desc;

      currentIndex = index;
    }

    function openModal(index) {
      showItem(index);
      modal.classList.add("active");
    }

    function closeModal() {
      modal.classList.remove("active");
    }

    items.forEach((item, index) => {
      const img = item.querySelector("img");

      if (img) {
        img.addEventListener("click", (e) => {
          e.stopPropagation();
          openModal(index);
        });
      }
    });

    function showNext() {
      const newIndex = (currentIndex + 1) % itemsArray.length;
      showItem(newIndex);
    }

    function showPrev() {
      const newIndex =
        (currentIndex - 1 + itemsArray.length) % itemsArray.length;
      showItem(newIndex);
    }

    arrowRight?.addEventListener("click", showNext);
    arrowLeft?.addEventListener("click", showPrev);

    modalClose?.addEventListener("click", closeModal);
    modalOverlay?.addEventListener("click", closeModal);

    document.addEventListener("keydown", (e) => {
      if (!modal.classList.contains("active")) return;

      if (e.key === "Escape") closeModal();
      if (e.key === "ArrowRight") showNext();
      if (e.key === "ArrowLeft") showPrev();
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    const blocks = document.querySelectorAll(".block-chamber-paintings");

    blocks.forEach((block) => {
      initChamberPaintings(block);
    });
  });
})();
