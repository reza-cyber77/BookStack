/**
 * @param {Editor} editor
 * @param {String} url
 */
function register (editor, url) {
  editor.addCommand('InsertHorizontalRule', function () {
    const hrElem = document.createElement('hr')
    const cNode = editor.selection.getNode()
    const parentNode = cNode.parentNode
    parentNode.insertBefore(hrElem, cNode)
  })

  editor.ui.registry.addButton('customhr', {
    icon: 'horizontal-rule',
    tooltip: 'Insert horizontal line',
    onAction () {
      editor.execCommand('InsertHorizontalRule')
    }
  })
}

/**
 * @param {WysiwygConfigOptions} options
 * @return {register}
 */
export function getPlugin (options) {
  return register
}
