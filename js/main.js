(function () {
  const _$ = {};

  function _setElements() {
    _$.frontendEditor = document.querySelector('.frontend-editor');
    _$.editButton = document.querySelector('.frontend-editor-edit');
    _$.updateButton = document.querySelector('.frontend-editor-update');
    _$.cancelButton = document.querySelector('.frontend-editor-cancel');
    _$.entryContent = document.querySelector('.entry-content');
  }

  function _showEditor() {
    _$.entryContent.setAttribute('hidden', 'true');
    _$.editButton.setAttribute('hidden', 'true');
    _$.frontendEditor.removeAttribute('hidden');
    _$.updateButton.removeAttribute('hidden');
    _$.cancelButton.removeAttribute('hidden');
  }

  function _hideEditor() {
    _$.frontendEditor.setAttribute('hidden', 'true');
    _$.updateButton.setAttribute('hidden', 'true');
    _$.cancelButton.setAttribute('hidden', 'true');
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
      ID:  _$.frontendEditor.dataset.postid,
      post_content: tinymce.activeEditor.getContent()
    };
    const options = {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(data),
    };
    fetch(`${_$.frontendEditor.dataset.wpurl}wiki/v1/update-item/`, options)
      .then(() => {
        _hideEditor();
        _$.entryContent.innerHTML = tinymce.activeEditor.getContent();
      });
  }

  function _onClickEdit() {
    _showEditor();
  }

  function _onClickCancel() {
    _hideEditor();
  }

  function _addEventListeners() {
    document.addEventListener('keydown', _onKeydown);
    _$.editButton.addEventListener('click', _onClickEdit);
    _$.cancelButton.addEventListener('click', _onClickUpdate);
    _$.updateButton.addEventListener('click', _onClickUpdate);
  }

  function _init() {
    _setElements();
    _addEventListeners();
  }

  _init();
})();