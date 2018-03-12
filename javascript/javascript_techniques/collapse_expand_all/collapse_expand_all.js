var CollapseExpandAllUtil = {
 collapseExpandAll: function(actionToPerform){
  var allSectionsReference = document.querySelectorAll(".sectionSelector");
  var len = allSectionsReference.length;
  for (var i = 0; i < len; i++){
   var sectionReference = allSectionsReference[i];
   switch (actionToPerform){
    case "collapseAll":
     sectionReference.style.display = "none";
     break;
    case "expandAll":
     sectionReference.style.display = "block";
     break;
   }
  }
 }
};