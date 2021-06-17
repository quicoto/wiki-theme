(function () {
  const _$ = {};

  function _setElements() {
    _$.editButton = document.querySelector('#edit-button');
    _$.frontendEditor = document.querySelector('.frontend-editor');
    _$.updateButton = document.querySelector('.frontend-editor-update');
    _$.entryContent = document.querySelector('.entry-content');
  }

  function _showEditor() {
    _$.entryContent.setAttribute('hidden', 'true');
    _$.editButton.setAttribute('hidden', 'true');
    _$.frontendEditor.removeAttribute('hidden');
    _$.updateButton.removeAttribute('hidden');
  }

  function _hideEditor() {
    _$.frontendEditor.setAttribute('hidden', 'true');
    _$.updateButton.setAttribute('hidden', 'true');
    _$.editButton.removeAttribute('hidden');
    _$.entryContent.removeAttribute('hidden');
  }

  function _onKeydown(event) {
    const $target = event.target;
    const isSearch = $target.getAttribute('name') === 's';

    if (event.key === 'e' && !isSearch) {
      _showEditor();
    }
  }

  function _onClickUpdate() {
    const data = {
      content: tinymce.activeEditor.getContent()
    };
    const options = {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(data),
    };
    fetch(`${_$.frontendEditor.dataset.wpurl}wp/v2/pages/${_$.frontendEditor.dataset.postid}`, options)
      .then(() => {
        _hideEditor();
      });
  }

  function _onClickEdit() {
    _showEditor();
  }

  function _addEventListeners() {
    document.addEventListener('keydown', _onKeydown);
    _$.editButton.addEventListener('click', _onClickEdit);
    _$.updateButton.addEventListener('click', _onClickUpdate);
  }

  function _init() {
    _setElements();
    _addEventListeners();
  }

  _init();
})();