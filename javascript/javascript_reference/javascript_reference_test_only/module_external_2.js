// Exports are imported by module_external_main.js, not by HTML document embedded JavaScript module.
// Capability test three: rename exports/imports.
var numberLiteralOne = 1;
export {numberLiteralOne as numberLiteralOneRenamed}; // Rename variable in export statement.
export var numberLiteralTwo = 2; // To be renamed in import statement.
// Capability test four: module default export.
function functionDeclaration(){return "functionDeclaration return value";} // function functionDeclaration() also in module_external_1.js.
export default functionDeclaration; // Identical to: 1.) export default function functionDeclaration(){return "functionDeclaration return value";} (export default function declaration itself, not variable. No trailing semicolon (;).); and 2.) export default function(){return "functionDeclaration return value";} (export default anonymous function declaration. Since only one export default per module is allowed, and export default import statement assigns name implicitly, can export default anonymous function declaration. No trailing semicolon (;). Also can export default anonymous class declarations and literals (eg, export default "stringLiteral value";).
// Capability test five: imports are live connections.
export var numberLiteral = 10; // var numberLiteral also in module_external_1.js.
export function incrementNumberLiteral(){
 numberLiteral++;
}
// Capability test six: import statements are hoisted.
export var stringLiteral = "stringLiteral value"; // var stringLiteral also in module_external_1.js.
// Capability test seven: module this value is undefined.
export var externalModuleThisValue = this; // External JavaScript module this value.
