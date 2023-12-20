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

//ハンバーガーメニューをクリックしたら背景が止まる
// 要素の取得
const html = document.documentElement;
const menuBtn = document.querySelector('.openbtn');
const nav = document.querySelector('.g-nav-list');

// .menu-btnをクリックした時、
menuBtn.addEventListener('click', function() {
  // .menu-btnに.activeがなかったら、
  // .activeを追加し、html要素に.fixed、.navに.activeを追加する。
  if (!this.classList.contains('active')) {
    html.classList.add('fixed');
  } else {
    // .menu-btnに.activeがすでに追加されていれば、
    // .activeを削除し、html要素の.fixed、.navの.activeを削除する。
    html.classList.remove('fixed');
  }
});

//ハンバーガーメニューをクリックしたら背景が止まる
// 要素の取得
const body = document.documentElement;
const searchBtn = document.querySelector('.searchbtn');
const searchNav = document.querySelector('#search-modal');
const searchClose = document.querySelector('.search-model__close-btn');

// .searchbtnをクリックした時、
searchBtn.addEventListener('click', function() {
  // .searchBtnに.activeがなかったら、
  // .activeを追加し、html要素に.fixed、.navに.activeを追加する。
  if (!this.classList.contains('active')) {
    body.classList.add('fixed');
    searchNav.classList.add('active');
  } else {
    // .searchBtnに.activeがすでに追加されていれば、
    // .activeを削除し、html要素の.fixed、.navの.activeを削除する。
    body.classList.remove('fixed');
    searchNav.classList.remove('active');
  }
});
searchClose.addEventListener('click', function() {
    body.classList.remove('fixed');
    searchNav.classList.remove('active');
});


//検索コンテンツ内のアコーディオン
jQuery(function ($) {
  $(".js-accordion-title").on("click", function() {
    $(this).next().slideToggle(200);
    $(this).toggleClass("open",200);
  });
});

//メガメニュー内のフェードインアニメーション
const id1 = document.getElementById('id1');
 
id1.addEventListener('mouseover', function() {
    $('.inner').addClass("is-active-move");
    });
id1.addEventListener('mouseleave', function() {
    $('.inner').removeClass("is-active-move");
    });

const id2 = document.getElementById('id2');
 
id2.addEventListener('mouseover', function() {
        $('.inner').addClass("is-active-move");
        });
id2.addEventListener('mouseleave', function() {
        $('.inner').removeClass("is-active-move");
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
jQuery(function($) {
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

//ボタンを押したらモーダルが出現
function buttonClick() {
  $(".modal").fadeIn();
  $("html").addClass("fixed"); // 背景固定させるクラス付与
}

$(".popup-close").on("click", function () {
  $("html").removeClass("fixed"); // 背景固定させるクラス付与
  $(".modal").fadeOut();
  return false;
});

