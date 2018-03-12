// Central location for all imports (ie, import module_external_1.js and module_external_2.js exports here). Resolve any identifier naming conflicts. Perform web browser support implementation test and capability tests. Export anything required by HTML document embedded JavaScript module.
// Implementation test. There is no good implementation test. Cannot test if (window.export/import) (window.export/import does not exist), if (this.export/import) (TypeError FF57 and CH64) (this, which is undefined, has no properties), and if (export/import) (SyntaxError FF57 and CH64). Therefore, for implementation test, simply check for presence of objectName object from capability test two: namespace import below.
var passImplementationTest = false;
if (objectName){ // For objectName object, see capability test two: namespace import below. A test of import statement hoisting.
 passImplementationTest = true;
}
export {passImplementationTest}; // Imported by HTML document embedded JavaScript module.
// Capability test one: named exports/imports.
import {booleanLiteral} from "./module_external_1.js"; // Import single export.
import {numberLiteral, stringLiteral, nullLiteral, undefinedLiteral, undefinedVariable, functionDeclaration, functionExpression, arrayLiteral, objectLiteral, ClassDeclaration} from "./module_external_1.js"; // Import multiple exports. numberLiteral and stringLiteral variable identifiers also imported below; however, to avoid web browser JavaScript console SyntaxError: FF57 redeclaration of import/CH64 identifier already declared, import statements below rename numberLiteral to numberLiteralFoo and stringLiteral to stringLiteralFoo.
var objectOneViaClassDeclaration = new ClassDeclaration(); // Instantiate object via imported class definition.
var passNamedExportsImportsCapabilityTest = false;
if (booleanLiteral && (numberLiteral === 1) && (stringLiteral === "abc") && (nullLiteral === null) && (undefinedLiteral === undefined) && (undefinedVariable === undefined) && (functionDeclaration() === "functionDeclaration return value") && (functionExpression() === "functionExpression return value") && (arrayLiteral[0] === "a") && (objectLiteral.property === "property value") && (objectLiteral["property"] === "property value") && (objectOneViaClassDeclaration.ownProperty === "ownProperty value") && (objectOneViaClassDeclaration["ownProperty"] === "ownProperty value") && (objectOneViaClassDeclaration.prototypeProperty === "prototypeProperty value") && (objectOneViaClassDeclaration["prototypeProperty"] === "prototypeProperty value")){
 passNamedExportsImportsCapabilityTest = true;
}
// Capability test two: namespace import.
import * as objectName from "./module_external_1.js"; // Import all exports as properties of objectName object. objectName object is atypical object in that it does not inherit from Object and has no prototype. However, like typical object, objectName object supports use of object property dot notation and bracket notation.
var objectTwoViaClassDeclaration = new objectName.ClassDeclaration(); // Instantiate object via imported class definition.
var passNamespaceImportCapabilityTest = false;
if ((typeof objectName === "object") && !(objectName instanceof Object) && !Object.prototype.isPrototypeOf(objectName) && (Object.getPrototypeOf(objectName) === null) && objectName.booleanLiteral && objectName["booleanLiteral"] && (objectName.numberLiteral === 1) && (objectName["numberLiteral"] === 1) && (objectName.stringLiteral === "abc") && (objectName["stringLiteral"] === "abc") && (objectName.nullLiteral === null) && (objectName["nullLiteral"] === null) && (objectName.undefinedLiteral === undefined) && (objectName["undefinedLiteral"] === undefined) && (objectName.undefinedVariable === undefined) && (objectName["undefinedVariable"] === undefined) && (objectName.functionDeclaration() === "functionDeclaration return value") && (objectName.functionExpression() === "functionExpression return value") && (objectName.arrayLiteral[0] === "a") && (objectName.objectLiteral.property === "property value") && (objectName.objectLiteral["property"] === "property value") && (objectTwoViaClassDeclaration.ownProperty === "ownProperty value") && (objectTwoViaClassDeclaration["ownProperty"] === "ownProperty value") && (objectTwoViaClassDeclaration.prototypeProperty === "prototypeProperty value") && (objectTwoViaClassDeclaration["prototypeProperty"] === "prototypeProperty value")){
 passNamespaceImportCapabilityTest = true;
}
// Capability test three: rename exports/imports.
var passRenameExportsImportsCapabilityTest = false;
import {numberLiteralOneRenamed} from "./module_external_2.js"; // Import variable renamed in export statement.
import {numberLiteralTwo as numberLiteralTwoRenamed} from "./module_external_2.js"; // Rename variable in import statement.
if ((numberLiteralOneRenamed === 1) && (numberLiteralTwoRenamed === 2)){
 passRenameExportsImportsCapabilityTest = true;
}
// Capability test four: module default export.
import defaultExport from "./module_external_2.js"; // Module default export assigned to defaultExport, which can be any identifier. Implicit rename. Unlike import single/multiple exports above, identifier not in curly brackets ({}).
var passModuleDefaultExportCapabilityTest = false;
if (defaultExport() === "functionDeclaration return value"){
 passModuleDefaultExportCapabilityTest = true;
}
// Capability test five: imports are live connections.
import {numberLiteral as numberLiteralFoo, incrementNumberLiteral} from "./module_external_2.js"; // numberLiteral variable identifier also imported above; however, to avoid web browser JavaScript console SyntaxError: FF57 redeclaration of import/CH64 identifier already declared, import statement rename numberLiteral to numberLiteralFoo.
var numberLiteralFooInitial = numberLiteralFoo;
incrementNumberLiteral();
var numberLiteralFooFinal = numberLiteralFoo;
var passImportsAreLiveConnectionsCapabilitTest = false;
if ((numberLiteralFooInitial === 10) && (numberLiteralFooFinal === 11)){
 passImportsAreLiveConnectionsCapabilitTest = true;
}
// Capability test six: import statements are hoisted.
var passImportStatementsAreHoistedCapabilityTest = false;
if (stringLiteralFoo === "stringLiteral value"){ // stringLiteral evaluated in line before import stringLiteral statement. If import statement hoisted, passImportStatementsAreHoistedCapabilityTest set to boolean true. If import statement not hoisted, passImportStatementsAreHoistedCapabilityTest remains boolean false.
 passImportStatementsAreHoistedCapabilityTest = true;
}
import {stringLiteral as stringLiteralFoo} from "./module_external_2.js"; // stringLiteral variable identifier also imported above; however, to avoid web browser JavaScript console SyntaxError: FF57 redeclaration of import/CH64 identifier already declared, import statement rename stringLiteral to stringLiteralFoo.
// Capability test seven: module this value is undefined.
import {externalModuleThisValue} from "./module_external_2.js"; // External JavaScript module this value inside the external JavaScript module.
var passModuleThisValueIsUndefinedCapabilityTest = false;
if ((this === undefined) && (externalModuleThisValue === undefined)){ // Test this module this value and external module this value.
 passModuleThisValueIsUndefinedCapabilityTest = true;
}
var passCapabilityTest = false;
if (passNamedExportsImportsCapabilityTest && passNamespaceImportCapabilityTest && passRenameExportsImportsCapabilityTest && passModuleDefaultExportCapabilityTest && passImportsAreLiveConnectionsCapabilitTest && passImportStatementsAreHoistedCapabilityTest && passModuleThisValueIsUndefinedCapabilityTest){
 passCapabilityTest = true;
}
export {passCapabilityTest}; // Imported by HTML document embedded JavaScript module.
