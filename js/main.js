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

// .s_07 .accordion_one
jQuery(function ($) {
  //.accordion_oneの中の.accordion_headerがクリックされたら
  $(".s_07 .accordion_one .accordion_header").click(function () {
    //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
    $(this).next(".accordion_inner").slideToggle();
    $(this).toggleClass("open");
  });
});
