let editor = document.querySelector("#editor");

ace.edit(editor, {
  theme: "ace/theme/xcode",
  mode: "ace/mode/c_cpp",
});

editor.setOptions({
  autoScrollEditorIntoView: true,
  copyWithEmptySelection: true,
});