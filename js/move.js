//同じ日付で2回目以降ならローディング画面非表示の設定

var splash_text = $.cookie('accessdate'); //キーが入っていれば年月日を取得
var myD = new Date();//日付データを取得
var myYear = String(myD.getFullYear());//年
var myMonth = String(myD.getMonth() + 1);//月
var myDate = String(myD.getDate());//日
    
if (splash_text != myYear + myMonth + myDate) {//cookieデータとアクセスした日付を比較↓
        $("#splash").css("display", "block");//１回目はローディングを表示
        setTimeout(function () {
            $("#splash_logo").fadeIn(1500, function () {//1000ミリ秒（1秒）かけてロゴがフェードイン
                setTimeout(function () {
            $("#splash_logo").delay(2000).fadeOut('2000');//ロゴを1.2秒待機してからフェードアウト
                }, 1000);//1000ミリ秒（1秒）後に処理を実行
        setTimeout(function () {
            $("#splash").delay(1500).fadeOut('2000', function () {//ローディング画面を1.5秒待機してからフェードアウト
            $('body').addClass('appear');//フェードアウト後bodyにappearクラス付与
            var myD = new Date();
            var myYear = String(myD.getFullYear());
            var myMonth = String(myD.getMonth() + 1);
            var myDate = String(myD.getDate());
            $.cookie('accessdate', myYear + myMonth + myDate); //accessdateキーで年月日を記録
        });
        }, 1700);//1700ミリ秒（1.7秒）後に処理を実行
    });
}, 1000);//1000ミリ秒（1秒）後に処理を実行
}else {
    $("#splash").css("display", "none");//同日2回目のアクセスでローディング画面非表示
    $("#header").css("opacity", "1");//同日2回目のアクセスでローディング画面表示
    $("#container-main").css("opacity", "1");//同日2回目のアクセスでローディング画面表示
    $("#footer").css("opacity", "1");//同日2回目のアクセスでローディング画面表示
}  


/* --------------------------------------------------------------------------------
TabのJS
-------------------------------------------------------------------------------- */
//任意のタブにURLからリンクするための設定
function GethashID (hashIDName){
	if(hashIDName){
		//タブ設定
		$('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
			const idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
			if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
				const parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
				$('.tab li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
				$(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
				//表示させるエリア設定
				$(".area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
				$(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加	
			}
		});
	}
}

//タブをクリックしたら
$('.tab a').on('click', function() {
	const idName = $(this).attr('href'); //タブ内のリンク名を取得	
	GethashID (idName);//設定したタブの読み込みと
	return false;//aタグを無効にする
});


// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {
    $('.tab li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
    $('.area:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
	const hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
	GethashID (hashName);//設定したタブの読み込み
});


//fadein用のアニメーション設定
// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){

    // ふわっ
    $('.fadeInTrigger').each(function(){ //fadeUpTriggerというクラス名が
      var elemPos = $(this).offset().top-50;//要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeIn');// 画面内に入ったらfadeUpというクラス名を追記
      }else{
      $(this).removeClass('fadeIn');// 画面外に出たらfadeUpというクラス名を外す
      }
      });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述


  //textが流れるアニメーションの設定(sectionのh2で使用)
// 動きのきっかけとなるアニメーションの名前を定義
function slideAnime(){

    // 流れる
    $('.leftAnime').each(function(){ //leftAnimeというクラス名が
      var elemPos = $(this).offset().top-50;//要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass("slideAnimeLeftRight");//クラスを付与
      $(this).children(".leftAnimeInner").addClass("slideAnimeRightLeft");//子要素のクラスを取得してクラスを付与
      }else{
      $(this).removeClass("slideAnimeLeftRight");
      $(this).children(".leftAnimeInner").removeClass("slideAnimeRightLeft");
      }
      });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    slideAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述



  /*要素が順番に現れる*/
  function delayScrollAnime() {
    var time = 0.2;//遅延時間を増やす秒数の値
    var value = time;
    $('.delayScroll').each(function () {
      var parent = this;          //親要素を取得
      var elemPos = $(this).offset().top;//要素の位置まで来たら
      var scroll = $(window).scrollTop();//スクロール値を取得
      var windowHeight = $(window).height();//画面の高さを取得
      var childs = $(this).children();  //子要素を取得
      
      if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) {//指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
        $(childs).each(function () {
          
          if (!$(this).hasClass("fadeUp")) {//アニメーションのクラス名が指定されているかどうかをチェック
            
            $(parent).addClass("play"); //親要素にクラス名playを追加
            $(this).css("animation-delay", value + "s");//アニメーション遅延のCSS animation-delayを追加し
            $(this).addClass("fadeUp");//アニメーションのクラス名を追加
            value = value + time;//delay時間を増加させる
            
            //全ての処理を終わったらplayを外す
            var index = $(childs).index(this);
            if((childs.length-1) == index){
              $(parent).removeClass("play");
            }
          }
        })
      }else {
        $(childs).removeClass("fadeUp");//アニメーションのクラス名を削除
        value = time;//delay初期値の数値に戻す
      }
    })
  }
  
  // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
      delayScrollAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面をスクロールをしたら動かしたい場合の記述


  //ページ内リンク・スムース移動
    $('#toc_container a[href*="#"]').click(function () {
      var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
      var pos = $(elmHash).offset().top-80;//idの上部の距離からHeaderの高さを引いた値を取得
      $('body,html').animate({scrollTop: pos}, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
      return false;
    });

    $('#sidebar a[href*="#"]').click(function () {
      var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
      var pos = $(elmHash).offset().top-80;//idの上部の距離からHeaderの高さを引いた値を取得
      $('body,html').animate({scrollTop: pos}, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
      return false;
    });

    $('.linkmove-wrapper a[href*="#"]').click(function () {
      var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
      var pos = $(elmHash).offset().top-80;//idの上部の距離からHeaderの高さを引いた値を取得
      $('body,html').animate({scrollTop: pos}, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
      return false;
    });

    $('.toc a[href*="#"]').click(function () {
      var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
      var pos = $(elmHash).offset().top-80;//idの上部の距離からHeaderの高さを引いた値を取得
      $('body,html').animate({scrollTop: pos}, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
      return false;
    });

    const elements = document.querySelectorAll('.toc');

    Array.from(elements).forEach(function(el){

    //ボタンを取得
    const btn = el.querySelector('.more_btn');
    //コンテンツを取得
    const content = el.querySelector('.toc-list');

    //ボタンクリックでイベント発火
    btn.addEventListener('click', function(){

      if(!content.classList.contains('open')){
          //コンテンツの実際の高さを代入
          //キーワード値（none、max-content等）では動作しないので注意
          content.style.maxHeight = content.scrollHeight + 'px';
          //openクラスを追加
          content.classList.add('open');
          //もっと見るボタンのテキストを設定
          btn.textContent = '閉じる';
      } else {
          //コンテンツの高さを固定値を代入
          content.style.maxHeight = '150px';
          //openクラスを削除
          content.classList.remove('open');
          //もっと見るボタンのテキストを設定
          btn.textContent = 'もっと見る';
      }
    });
});