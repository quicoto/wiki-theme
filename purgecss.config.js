module.exports = {
  content: [
    './*.php',
    './**/*.php'
  ],
  css: ['style.css'],
  output: 'style.css',
  safelist: [
    'widget_wiki-pages-list',
    'page_item',
    'current_page_item',
    'current_page_ancestor',
    'page_item_has_children',
    'lwptoc',
    'lwptoc_item'
  ]
}