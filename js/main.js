(function () {
  function _onKeydown(event) {
    const $target = event.target;
    const isSearch = $target.getAttribute('name') === 's';

    if (event.key === 'e' && !isSearch) {
      const $editButton = document.querySelector('#edit-button');

      if ($editButton) {
        window.location = $editButton.getAttribute('href');
      }
    }
  }

  function _addEventListeners() {
    document.addEventListener('keydown', _onKeydown);
  }

  function _init() {
    _addEventListeners();
  }

  _init();
})();