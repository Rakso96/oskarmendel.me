//The document ready function.
$(function(){

//When a website in the portfolio section is hovered
  $('.websites').hover(
    function(){
      removeListItemClass(this);
      $(this).addClass("selected-website");
    }
  );
});

/**
Removes a class from sibling list items.
*/
function removeListItemClass($ListItem){
  $($ListItem).siblings().removeClass("selected-website");
}
