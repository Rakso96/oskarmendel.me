/*  WINDOW REZIE EVENT HANDLER
If the window is rezised do functions that depends on rezize so the site doesnt need manual refresh
  *In our case here we add margin to our portfolio list incase the screen was rezized.
'*/
$(window).resize(function () {
    if($(window).width() < 965){
      if($(document).width() < 980){
        addMarginList(100, ".previous-work");
      }
      else{
        resetInfoMargin();
      }
    }
    else{
      resetInfoMargin();
    }
});

$(window).scroll(function(){
  var wScroll = $(this).scrollTop();

  if(wScroll > $(".workflow-container").offset().top - ($(window).height() / 1.1)){

    $(".workflow-item").each(function (i){
      setTimeout(function(){
        $(".workflow-item").eq(i).addClass("workflow-effect");
      }, 150 * (i+1));
    });
  }
});

//The document ready function.
$(function(){

//Resize the portfolio list incase the window is small (Mobile adjustment)
  if($(window).width() < 967){
    addMarginList(100, ".previous-work");
  }

//When a website in the portfolio section is hovered
  $('.websites').hover(
    function(){
      removeListItemClass(this);
      $(this).addClass("selected-website");
    }
  );


/*
IF A LINK WITH A # IS CLICKED FIND AN ID WITH THE #NAME
AND ANIMATE A SCROLL TO IT.
*/
  $('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});

//The tabbed list under the the about section
  $('.about-tablist li').on('click', function(e){
    e.preventDefault();

    //var $target = $(this.hash);
    var hrefVal = $(this).children().attr('href'); //Get the link from the anchor tag inside the listitem


    $(this).addClass('about-active').siblings().removeClass('about-active'); //change class on the list item
    $('#' + hrefVal).addClass('active').siblings().removeClass('active'); //change class on the tabContent
  });

  //setting the % of all the skills
  $('#skillHtml').css('width', '100%').css('border-radius', '20px');
  $('#skillJs').css('width', '65%');
  $('#skillWp').css('width', '80%');
  $('#skillPhp').css('width', '40%');
  $('#skillPython').css('width', '15%');
  $('#skillPhotoshop').css('width', '80%');
});

/** REMOVE LIST ITEM CLASS
Removes a class from sibling list items.
*/
function removeListItemClass($ListItem){
  $($ListItem).siblings().removeClass("selected-website");
}

/* ADD MARGIN LIST
Adds margin of your choise to target list.
*/
function addMarginList(marginAmmount, target){
  var n = ($(window).width() / 2) - 140;
  var x = 0;

  $(target).children().each(function (){
    $(this).children().css('left', (-100 * x) + 'px');
    $(this).css('left', n + 'px');
    n = n + marginAmmount;
    x++;
  });
}

function resetInfoMargin(){
  $(".previous-work").children().each(function (){
    $(this).children().removeAttr("style");
  });
}
