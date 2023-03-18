$(window).on('load',function(){
	$("#splash").delay(2000).fadeOut('slow');//ローディング画面を2秒（2000ms）待機してからフェードアウト
	$("#splash_logo").delay(2200).fadeOut('slow');//ロゴを2.2秒（2200ms）待機してからフェードアウト
});


$(window).on('load',function(){
    $("#splash-logo").delay(1000).fadeOut('slow');//ロゴを1秒でフェードアウトする記述
	
    //=====ここからローディングエリア（splashエリア）を1秒でフェードアウトした後に動かしたいJSをまとめる
    $("#splash").delay(1000).fadeOut('slow',function(){//ローディングエリア（splashエリア）を1.5秒でフェードアウトする記述
    
        $('body').addClass('appear');//フェードアウト後bodyにappearクラス付与
	
    });
    //=====ここまでローディングエリア（splashエリア）を1.5秒でフェードアウトした後に動かしたいJSをまとめる
    
   //=====ここから背景が伸びた後に動かしたいJSをまとめたい場合は
    $('.splashbg').on('animationend', function() {    
        //この中に動かしたいJSを記載
    });
    //=====ここまで背景が伸びた後に動かしたいJSをまとめる
        
});


//=====Gnaviの開閉の為のJS
$(".openbtn").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});

//=====Sliderの為のJS
$('.slider').bxSlider({
touchEnabled:false,
mode: 'vertical',
controls: false,
auto: 'true',
pager: false
});


// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){

    // ふわっ
    $('.fadeUpTrigger').each(function(){ //fadeUpTriggerというクラス名が
      var elemPos = $(this).offset().top-50;//要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
      }else{
      $(this).removeClass('fadeUp');// 画面外に出たらfadeUpというクラス名を外す
      }
      });
    

      $('.flipLeftTopTrigger').each(function(){ //flipLeftTopTriggerというクラス名が
        var elemPos = $(this).offset().top-50;//要素より、50px上の
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('flipLeftTop');// 画面内に入ったらflipLeftTopというクラス名を追記
        }else{
        $(this).removeClass('flipLeftTop');// 画面外に出たらflipLeftTopというクラス名を外す
        }
        });

    // くるっ
      $('.rotateXTrigger').each(function(){ //rotateXTriggerというクラス名が
      var elemPos = $(this).offset().top-50;//要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass('rotateX');// 画面内に入ったらrotateXというクラス名を追記
      }else{
      $(this).removeClass('rotateX');// 画面外に出たらrotateXというクラス名を外す
      }
      });
    
    // シャッ（背景色が伸びて出現）
  
  　　$('.bgLRextendTrigger').each(function(){ //bgLRextendTriggerというクラス名が
    　var elemPos = $(this).offset().top-50;//要素より、50px上の
    　var scroll = $(window).scrollTop();
    　var windowHeight = $(window).height();
    　if (scroll >= elemPos - windowHeight){
      $(this).addClass('bgLRextend');// 画面内に入ったらbgLRextendというクラス名を追記
    　}else{
      $(this).removeClass('bgLRextend');// 画面外に出たらbgLRextendというクラス名を外す
    　}
  　　});

  $('.bgappearTrigger').each(function(){ //bgappearTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('bgappear');// 画面内に入ったらbgappearというクラス名を追記
    }else{
      $(this).removeClass('bgappear');// 画面外に出たらbgappearというクラス名を外す
    }
  });

  //パタっと左上から
     $('.flipLeftTopTrigger').each(function(){ //flipLeftTopTriggerというクラス名が
     var elemPos = $(this).offset().top-50;//要素より、50px上の
     var scroll = $(window).scrollTop();
     var windowHeight = $(window).height();
     if (scroll >= elemPos - windowHeight){
     $(this).addClass('flipLeftTop');// 画面内に入ったらflipLeftTopというクラス名を追記
     }else{
     $(this).removeClass('flipLeftTop');// 画面外に出たらflipLeftTopというクラス名を外す
     }
     });
    
  //パタっと右上から
    $('.flipRightTopTrigger').each(function(){ //flipRightTopTriggerというクラス名が
      var elemPos = $(this).offset().top-50;//要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass('flipRightTop');// 画面内に入ったらflipRightTopというクラス名を追記
      }else{
      $(this).removeClass('flipRightTop');// 画面外に出たらflipRightTopというクラス名を外す
      }
      });
    }

  // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
      fadeAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面をスクロールをしたら動かしたい場合の記述



function fade(){

    $('.fadeLeftTrigger').each(function(){ //fadeLeftTriggerというクラス名が
        var elemPos = $(this).offset().top-10;//要素より、50px上の
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeLeft');// 画面内に入ったらfadeLeftというクラス名を追記
        }else{
        $(this).removeClass('fadeLeft');// 画面外に出たらfadeLeftというクラス名を外す
        }
        });
}

 // 画面が読み込まれたらすぐに動かしたい場合の記述
 $(window).on('load', function(){
    fade();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述



  //アコーディオンをクリックした時の動作
$('.title').on('click', function() {//タイトル要素をクリックしたら
	$('.box').slideUp(500);//クラス名.boxがついたすべてのアコーディオンを閉じる
    
	var findElm = $(this).next(".box");//タイトル直後のアコーディオンを行うエリアを取得
    
	if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
		$(this).removeClass('close');//クラス名を除去    
	}else{//それ以外は
		$('.close').removeClass('close'); //クラス名closeを全て除去した後
		$(this).addClass('close');//クリックしたタイトルにクラス名closeを付与し
		$(findElm).slideDown(500);//アコーディオンを開く
	}
});


//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
  var scroll = $(window).scrollTop();
  if (scroll >= 200){//上から200pxスクロールしたら
    $('#page-top').removeClass('RightMove');//#page-topについているRightMoveというクラス名を除く
    $('#page-top').addClass('LeftMove');//#page-topについているLeftMoveというクラス名を付与
  }else{
    if(
      $('#page-top').hasClass('LeftMove')){//すでに#page-topにLeftMoveというクラス名がついていたら
      $('#page-top').removeClass('LeftMove');//LeftMoveというクラス名を除き
      $('#page-top').addClass('RightMove');//RightMoveというクラス名を#page-topに付与
    }
  }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});


// #page-topをクリックした際の設定
$('#page-top').click(function () {
  $('body,html').animate({
      scrollTop: 0//ページトップまでスクロール
  }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false;//リンク自体の無効化
});


$('#page-link a[href*="#"]').click(function () {
	var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
	var pos = $(elmHash).offset().top-90;//idの上部の距離からHeaderの高さを引いた値を取得
	$('body,html').animate({scrollTop: pos}, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
	return false;
});

// ヘッダーのスクロールバーの設定（まだ実装未定）
$('#container').scrollgress({//バーの高さの基準となるエリア指定
  height: '5px',//バーの高さ
  color: '#85a7cc',//バーの色
});

//100vhの調整設定//
const setVh = () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
};
 
window.addEventListener('load', setVh);
window.addEventListener('resize', setVh);