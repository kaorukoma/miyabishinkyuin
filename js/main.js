$(function(){
  $('#js-hamburger,.sp-global-menu,.sp-global-menu__link').click(function(){
    $('body').toggleClass('is-drawerActive')
  
    if($(this).attr('aria-expanded')=='false'){
  
      $(this).attr('aria-expanded','true')
      $('#js-global-menu').attr('area-hidden','false')
  } else {
      $(this).attr('aria-expanded','false')
      $('#js-global-menu').attr('area-hidden','true')
      $('#js-hamburger').attr('aria-expanded','false')
  
  }
  });

  $('#js-drawer-background').click(function(){
  $('body').removeClass('is-drawerActive')
  $('#js-hamburger').attr('aria-expanded','false')
  $('#js-hamburger').attr('area-hidden','true')
  })


  // アコーディオンメニュー

    $('.jsAccordionText').css("display", "none");
    $('.jsAccordionTitle').on('click', function () {
        $(this).toggleClass('is-active');
      $(this).next().slideToggle();
      $('.jsAccordionTitle').not($(this)).next('.jsAccordionText').slideUp();
    })
 });


 $(function(){
    var pagetop = $('#js-scroll-fadein');
    
    $(window).scroll(function(){
    if ($(this).scrollTop() > 500) {
    pagetop.addClass('is-fadein');
    } else {
        pagetop.removeClass('is-fadein');
    }
    });
    pagetop.on('click',function(){
        // animate({アニメーションが完了時の見た目を表現するCSSプロパティと},どのくらいの時間をかけてアニメーションさせるか,’イージング（アニメーションの変化の度合い）の種類’,
        // function(){アニメーション終了時に実行する処理})
        $('body,html').animate({
            scrollTop:0
         },500);
         return false;
    
    
    })
    });
    
    // スムーススクロールの実装
   var windowWidth = $(window).width();
   var headerHeight = 113;
   $("a[href^='#']").click(function(){
     var speed = 800;
     var href = $(this).attr("href");
     var target = $(href=="#" || href==""?"html":href);
     var position = target.offset().top - headerHeight;
     $("body,html").animate({scrollTop:position}, speed, "swing");
     return false;
   });

//    tabメニュー
$(function(){
    $('.js-tab-trigger').on('click',function() {
    $('.js-tab-trigger').removeClass('is-active');
    $('.js-tab-target').removeClass('is-active');
    $(this).addClass('is-active');
    
    let id = $(this).data('id');
    $('#'+ id).addClass('is-active')
    
    });
    });
    