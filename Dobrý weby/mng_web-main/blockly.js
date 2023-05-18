// Initialize Blockly
var workspace = Blockly.inject('blocklyDiv', {
  toolbox: `<xml>
    <category name="Logic" colour="#5b80a5">
      <block type="controls_if"></block>
      <block type="controls_ifelse"></block>
      <block type="logic_compare"></block>
      <block type="logic_operation"></block>
      <block type="logic_negate"></block>
      <block type="logic_boolean"></block>
      <block type="logic_null"></block>
      <block type="logic_ternary"></block>
    </category>
    <category name="Loops" colour="#5ba55b">
      <block type="controls_repeat_ext"></block>
      <block type="controls_whileUntil"></block>
      <block type="controls_for"></block>
      <block type="controls_forEach"></block>
      <block type="controls_flow_statements"></block>
    </category>
    <category name="Math" colour="#5b67a5">
      <block type="math_number"></block>
      <block type="math_arithmetic"></block>
      <block type="math_single"></block>
      <block type="math_trig"></block>
      <block type="math_constant"></block>
      <block type="math_round"></block>
      <block type="math_random_int"></block>
      <block type="math_random_float"></block>
    </category>
    <category name="Text" colour="#a55b80">
      <block type="text"></block>
      <block type="text_length"></block>
      <block type="text_join"></block>
      <block type="text_print"></block>
      <block type="text_prompt_ext"></block>
    </category>
    <category name="Lists" colour="#5ba58c">
      <block type="lists_create_empty"></block>
      <block type="lists_create_with"></block>
      <block type="lists_repeat"></block>
      <block type="lists_length"></block>
      <block type="lists_isEmpty"></block>
      <block type="lists_indexOf"></block>
      <block type="lists_getIndex"></block>
      <block type="lists_setIndex"></block>
    </category>
    <category name="Colour" colour="#a55ba5">
      <block type="colour_picker"></block>
      <block type="colour_random"></block>
      <block type="colour_rgb"></block>
      <block type="colour_blend"></block>
    </category>
    <category name="Variables" custom="VARIABLE" colour="#a5a55b"></category>
    <category name="Functions" custom="PROCEDURE" colour="#9b5ba5"></category>
  </xml>`
});

// Generate JavaScript code from blocks
function generateCode() {
  var code = Blockly.Lua.workspaceToCode(workspace);
  return code;
}

// Run the generated JavaScript code
function runCode() {
  var code = generateCode();
  document.getElementById('codeArea').textContent = code;
  eval(code);
}
