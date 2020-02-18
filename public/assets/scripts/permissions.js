var toggler = document.getElementsByClassName("caret");
var i;
for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function () {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}

$("input[type=checkbox]").click(function(event){
  if(event.target.attributes['base'].value == '1') {
    runRecursiveChildren(event.target.nextElementSibling.children, event.target.checked);
  }
  if (this.attributes['raiz'] == undefined) {
    recorreRecursiveParent(this, this.checked);
  }
});

function existCheked(object)
{
  var exist = false;
  $.each(object, function (indexInArray, valueOfElement) { 
    if ($(valueOfElement).children('input')[0].checked) {
      exist = true;
    }
  });
  return exist;
}

function runRecursiveChildren(object, check)
{
  $.each(object, function (indexInArray, liObject) { 
    $(liObject).children('input')[0].checked = check;
    if($(liObject).children('input')[0].attributes['base'].value == '1') {
      runRecursiveChildren($(liObject).children('ul')[0].children, check);
    }
  });
}

function recorreRecursiveParent(element, check)
{
  var lis = element.parentElement.parentElement.children;
  var element = element.parentElement.parentElement.previousElementSibling;
  element.checked = !existCheked(lis) ? false : true;
  if (element.attributes['raiz'] == undefined) {
    recorreRecursiveParent(element, element.checked);
  }
}