window.onload = () => {
  // MOBILE MENU TOGGLE
  const offCanvas = document.querySelector(".toggleable_menu-wrapp"),
    menuToggle = document.querySelector(".header_togg-menu-btn"),
    menuClose = document.querySelector(".toggleable_close"),
    main = document.querySelector(".toggleable_background-close");

  const closingElements = [menuClose, main];
  const toggleElements = [offCanvas, main];

  menuToggle.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopImmediatePropagation();
    openElements(...toggleElements);
  });

  closingElements.forEach((closingElem) => {
    closingElem.addEventListener("click", (e) => {
      e.preventDefault();
      if (
        main.classList.contains("is-open") &&
        !e.target.classList.contains("menu-toggle")
      ) {
        closeElements(...toggleElements);
      }
    });
  });

  function openElements(...elements) {
    const elementsToOpen = [...elements];
    elementsToOpen.forEach((elementToOpen) =>
      elementToOpen.classList.add("is-open")
    );
  }

  function closeElements(...elements) {
    const elementsToClose = [...elements];
    elementsToClose.forEach((elementToClose) =>
      elementToClose.classList.remove("is-open")
    );
  }

  // MOBILE SEARCH TOGGLE
  const searchOffCanvas = document.querySelector(".toggleable_search-wrapp"),
    searchToggle = document.querySelector(".header_togg-search-btn"),
    searchClose = document.querySelector(".toggleable_search-close"),
    searchMain = document.querySelector(".toggleable_search-backg-close");

  const searchClosingElements = [searchClose, searchMain];
  const searchToggleElements = [searchOffCanvas, main];

  searchToggle.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopImmediatePropagation();
    openElements(...searchToggleElements);
  });

  searchClosingElements.forEach((closingElem) => {
    closingElem.addEventListener("click", (e) => {
      e.preventDefault();
      if (
        main.classList.contains("is-open") &&
        !e.target.classList.contains("menu-toggle")
      ) {
        closeElements(...searchToggleElements);
      }
    });
  });

  function openElements(...elements) {
    const elementsToOpen = [...elements];
    elementsToOpen.forEach((elementToOpen) =>
      elementToOpen.classList.add("is-open")
    );
  }

  function closeElements(...elements) {
    const elementsToClose = [...elements];
    elementsToClose.forEach((elementToClose) =>
      elementToClose.classList.remove("is-open")
    );
  }
};
