(function () {
  function _onKeydown(event) {
    if (event.key === 'e') {
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