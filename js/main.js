/*ハンバガーメニューのJS*/
jQuery(function ($) {
  $(".openbtn").click(function () {
    //ボタンがクリックされたら
    $(this).toggleClass("active"); //ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass("panelactive"); //ナビゲーションにpanelactiveクラスを付与
  });

  $("#g-nav a").click(function () {
    //ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass("active"); //ボタンの activeクラスを除去し
    $("#g-nav").removeClass("panelactive"); //ナビゲーションのpanelactiveクラスも除去
  });
});

/*検索メニューのJS*/
jQuery(function ($) {
  $(".searchbtn").click(function () {
    //ボタンがクリックされたら
    $(this).toggleClass("active"); //ボタン自身に activeクラスを付与し
    $("#search-modal").toggleClass("panelactive"); //ナビゲーションにpanelactiveクラスを付与
  });

  $(".search-model__close-btn").click(function () {
    //ナビゲーションのリンクがクリックされたら
    $(".searchbtn").removeClass("active"); //ボタンの activeクラスを除去し
    $("#search-modal").removeClass("panelactive"); //ナビゲーションのpanelactiveクラスも除去
  });
});

// .s_07 .accordion_one(グローバルメニューのアコーディオン)
jQuery(function ($) {
  //.accordion_oneの中の.accordion_headerがクリックされたら
  $(".s_07 .accordion_one .accordion_header").click(function () {
    //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
    $(this).next(".accordion_inner").slideToggle();
    $(this).toggleClass("open");
  });
});

//検索コンテンツ内のアコーディオン
jQuery(function ($) {
  $(".js-accordion-title").on("click", function() {
    $(this).next().slideToggle(200);
    $(this).toggleClass("open",200);
  });
});

//スクロール途中でヘッダーが消え、上にスクロールすると復活する設定を関数にまとめる
jQuery(function ScrollAnime ($) {
  var _window = $(window),
        _header = $('.site-header'),
           heroBottom,
           startPos,
           winScrollTop;

           _window.on('scroll',function(){
           winScrollTop = $(this).scrollTop();
 heroBottom = $('.mv-contents').height();
           if (winScrollTop >= startPos) {
           if(winScrollTop >= heroBottom){
           _header.addClass('hide');
       }
       } else {
           _header.removeClass('hide');
       }
           startPos = winScrollTop;
       });

           _window.trigger('scroll');
     
});

//スクロール途中でヘッダーが消え、上にスクロールすると復活する設定を関数にまとめる
jQuery(function ScrollAnime ($) {
  var _window = $(window),
        _header = $('.site-header'),
           heroBottom,
           startPos,
           winScrollTop;

           _window.on('scroll',function(){
           winScrollTop = $(this).scrollTop();
 heroBottom = $('.breadcrumb').height();
           if (winScrollTop >= startPos) {
           if(winScrollTop >= heroBottom){
           _header.addClass('hide');
       }
       } else {
           _header.removeClass('hide');
       }
           startPos = winScrollTop;
       });

           _window.trigger('scroll');
     
});

//TOPをクリックしたらページトップに戻る。また500pxスクロールしたら出現
jQuery(function() {
    var pagetop = $('#page_top');
  pagetop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $('body, html').animate({
        scrollTop: 0
    }, 500);
    return false;
  });
});

//500pxスクロールしたらfoot-innerが出現
jQuery(function() {
  var pagetop = $('.foot-inner');
pagetop.hide();
$(window).scroll(function () {
  if ($(this).scrollTop() > 500) {
    pagetop.fadeIn();
  } else {
    pagetop.fadeOut();
  }
});
});