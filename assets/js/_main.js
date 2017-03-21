function resizeBanners(){    
  height=$('.grey-block .text-area').innerHeight();
  $('.slideshow').css('height',height+'px');
}

$(document).ready(function(){
  $('.showMenu').click(function() {
    if($(this).hasClass('active')){
      $(this).removeClass('active');
      $("#menu-main .top-menu").slideToggle(700);
    }
    else{
      $(this).addClass('active');
      $("#menu-main .top-menu").slideToggle(700);
    }
  });
});


$(document).ready(function(){
  $('.special-label').click(function() {
    if(!($(this).hasClass('active'))){
      var classList = $(this).attr('class').split(/\s+/);
      $.each(classList, function(index, item) {
          if (item != 'special-label') {
            $('.'+item).removeClass('active');
          }
      });
      $(this).addClass('active');     
    }
  });
});

function showDescription(button){
  if(!$(button).hasClass('active')){
    $('.cars-list .car .showDescription').removeClass('active');
    $(button).addClass('active');
    $('.cars-list .car .description-area').removeClass('active');
    $(button).closest('.car').find('.description-area').addClass('active');                                                                          
  }
  else{
    $(button).removeClass('active');
    $(button).closest('.car').find('.description-area').removeClass('active');        
  }
}

function showBlock(bookmark,block){
  if(!$(bookmark).hasClass('active')){
    $('.bookmarks .bookmark').removeClass('active');
    $(bookmark).addClass('active');
    $('.blocks .block').removeClass('active');
    $('.blocks .'+block).addClass('active');
  }
}

$(document).ready(function(){
  if(($('.cars-list .car .image ul').children().length)==1){
    $('.photo-navigation .arrow').hide();
  }
  
  $('.photo-navigation .arrow').click(function() {
    items = $(this).closest('.car').find('.image ul li');
    active = $(this).closest('.car').find('.image ul li.active');
    
    
    if($(this).hasClass('right')){
      if(active.next().length==0){
        $(items).first().addClass('active').removeClass('hidden');
      }
      else{
        active.next().addClass('active').removeClass('hidden');
      }
      active.addClass('hidden').removeClass('active');
    }      
    if($(this).hasClass('left')){
      if(active.prev().length==0){
        $(items).last().addClass('active').removeClass('hidden');
      }
      else{
        active.prev().addClass('active').removeClass('hidden');
      }      
      active.addClass('hidden').removeClass('active'); 
    }                  
    
    active = $(this).closest('.car').find('.image ul li.active');
    var index = items.index(active)+1;
    
    $(this).closest('.car').find('.count span').html(index);
  });
});