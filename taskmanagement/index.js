/*Vars*/
var menuBtn = document.getElementById('menu__btn');
var menuLinks = document.getElementById('menu__linkContainer')

/*Add new class to menu btn when clicked*/

menuBtn.onclick = function() {
  /*toggle classes*/
 
  menuLinks.classList.toggle('menu__linkContainer-show')
  menuBtn.classList.toggle('menu__btn-arrow');


}