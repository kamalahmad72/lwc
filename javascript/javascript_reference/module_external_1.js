// Exports are imported by module_external_main.js, not by HTML document embedded JavaScript module.
// Capability test one: named exports/imports and capability test two: namespace import.
var booleanLiteral = true; // Variable declaration.
export {booleanLiteral}; // Export statement. Variable declaration and export statement on separate lines.
export var numberLiteral = 1; // Export statement and variable declaration combined in same line. var numberLiteral also in module_external_2.js.
export var stringLiteral = "abc"; // var stringLiteral also in module_external_2.js.
export var nullLiteral = null;
export var undefinedLiteral = undefined;
export var undefinedVariable;
export function functionDeclaration(){ // function functionDeclaration() also in module_external_2.js.
 return "functionDeclaration return value";
}
export var functionExpression = function(){
 return "functionExpression return value";
};
export var arrayLiteral = ["a", "b", "c"];
export var objectLiteral = {
 property: "property value",
};
export class ClassDeclaration {
 constructor(){
  this.ownProperty = "ownProperty value";
 }
};
ClassDeclaration.prototype.prototypeProperty = "prototypeProperty value";
