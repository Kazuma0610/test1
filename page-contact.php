<?php get_header(); ?>
    <section id="primary" class="content-area">
            
        <section id="contact">
              <?php
                // 変数の初期化
                $page_flag = 0;
				$clean = array();
				$error = array();

                // サニタイズ
                if( !empty($_POST) ) {
	              foreach( $_POST as $key => $value ) {
		          $clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	              }
                }

                if( !empty($clean['btn_confirm']) ) {

	                

					$error = validation($clean);

					if (empty($error)){

						$page_flag = 1;


					}

                } elseif( !empty($clean['btn_submit']) ) {



                  $page_flag = 2;

                  // 変数とタイムゾーンを初期化
                    $header = null;
	                $auto_reply_subject = null;
	                $auto_reply_text = null;
	                date_default_timezone_set('Asia/Tokyo');

                  // ヘッダー情報を設定
	                $header = "MIME-Version: 1.0\n";
	                $header .= "From: DAIEIRECORD <mail@daieirecord.jp>\n";
	                $header .= "Reply-To: DAIEIRECORD <mail@daieirecord.jp>\n";

	                // 件名を設定
	                $auto_reply_subject = 'お問い合わせありがとうございます。';

	                // 本文を設定
	                $auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。下記の内容でお問い合わせを受け付けました。\n\n";
	                $auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n\n";
	                $auto_reply_text .= "氏名：" . $clean['your_name'] . "\n\n";
	                $auto_reply_text .= "メールアドレス：" . $clean['email'] . "\n\n";
					$auto_reply_text .= "電話番号：" . $clean['tel'] . "\n\n";
                    if( $clean['gender'] === "male" ) {
                        $auto_reply_text .= "性別：男性\n\n";
                    } else {
                        $auto_reply_text .= "性別：女性\n\n";
                    }
                
                    if( $clean['age'] === "1" ){
                        $auto_reply_text .= "年齢：〜19歳\n\n";
                    } elseif ( $clean['age'] === "2" ){
                        $auto_reply_text .= "年齢：20歳〜29歳\n\n";
                    } elseif ( $clean['age'] === "3" ){
                        $auto_reply_text .= "年齢：30歳〜39歳\n\n";
                    } elseif ( $clean['age'] === "4" ){
                        $auto_reply_text .= "年齢：40歳〜49歳\n\n";
                    } elseif( $clean['age'] === "5" ){
                        $auto_reply_text .= "年齢：50歳〜59歳\n\n";
                    } elseif( $clean['age'] === "6" ){
                        $auto_reply_text .= "年齢：60歳〜\n\n";
                    }

					if( $clean['know'] === "1" ){
						$auto_reply_text .= "どこで当商品を知りましたか？：TVのCM\n\n";
					} elseif ( $clean['know'] === "2" ){
						$auto_reply_text .= "どこで当商品を知りましたか？：雑誌\n\n";
					} elseif ( $clean['know'] === "3" ){
						$auto_reply_text .= "どこで当商品を知りましたか？：電車内の広告\n\n";
					} elseif ( $clean['know'] === "4" ){
						$auto_reply_text .= "どこで当商品を知りましたか？：SNS\n\n";
					} elseif( $clean['know'] === "5" ){
						$auto_reply_text .= "どこで当商品を知りましたか？：ネット広告\n\n";
					} elseif( $clean['know'] === "6" ){
						$auto_reply_text .= "どこで当商品を知りましたか？：その他\n\n";
					}

					$auto_reply_text .= "好きなブランドはなんですか？：" . implode(' ／ ', $_POST['brand']) . "\n\n";

                    $auto_reply_text .= "お問い合わせ内容：" . nl2br($clean['contact']) . "\n\n";
	                
                    $auto_reply_text .= "肌十色";

	                // メール送信
	                mb_send_mail( $clean['email'], $auto_reply_subject, $auto_reply_text, $header);

                  // 運営側へ送るメールの件名
	                $admin_reply_subject = "お問い合わせを受け付けました";
	
	                // 本文を設定
	                $admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
	                $admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n\n";
	                $admin_reply_text .= "氏名：" . $clean['your_name'] . "\n\n";
	                $admin_reply_text .= "メールアドレス：" . $clean['email'] . "\n\n";
					$admin_reply_text .= "電話番号：" . $clean['tel'] . "\n\n";
                    if( $clean['gender'] === "male" ) {
                        $admin_reply_text .= "性別：男性\n\n";
                    } else {
                        $admin_reply_text .= "性別：女性\n\n";
                    }
                
                    if( $clean['age'] === "1" ){
                        $admin_reply_text .= "年齢：〜19歳\n\n";
                    } elseif ( $clean['age'] === "2" ){
                        $admin_reply_text .= "年齢：20歳〜29歳\n\n";
                    } elseif ( $clean['age'] === "3" ){
                        $admin_reply_text .= "年齢：30歳〜39歳\n\n";
                    } elseif ( $clean['age'] === "4" ){
                        $admin_reply_text .= "年齢：40歳〜49歳\n\n";
                    } elseif( $clean['age'] === "5" ){
                        $admin_reply_text.= "年齢：50歳〜59歳\n\n";
                    } elseif( $clean['age'] === "6" ){
                        $admin_reply_text.= "年齢：60歳〜\n\n";
                    }

					if( $clean['know'] === "1" ){
						$admin_reply_text .= "どこで当商品を知りましたか？：TVのCM\n\n";
					} elseif ( $clean['know'] === "2" ){
						$admin_reply_text .= "どこで当商品を知りましたか？：雑誌\n\n";
					} elseif ( $clean['know'] === "3" ){
						$admin_reply_text .= "どこで当商品を知りましたか？：電車内の広告\n\n";
					} elseif ( $clean['know'] === "4" ){
						$admin_reply_text .= "どこで当商品を知りましたか？：SNS\n\n";
					} elseif( $clean['know'] === "5" ){
						$admin_reply_text.= "どこで当商品を知りましたか？：ネット広告\n\n";
					} elseif( $clean['know'] === "6" ){
						$admin_reply_text.= "どこで当商品を知りましたか？：その他\n\n";
					}

					$admin_reply_text .= "好きなブランドはなんですか？：" . implode(' ／ ', $_POST['brand']) . "\n\n";

                    $admin_reply_text .= "お問い合わせ内容：" . nl2br($clean['contact']) . "\n\n";

	                // 運営側へメール送信
	                mb_send_mail( 'mail@daieirecord.jp', $admin_reply_subject, $admin_reply_text, $header);

                }

				function validation($data) {

					$error = array();
				
					// 氏名のバリデーション
					if( empty($data['your_name']) ) {
						$error[] = "「氏名」は必ず入力してください。";
					} elseif( 20 < mb_strlen($data['your_name']) ) {
						$error[] = "「氏名」は20文字以内で入力してください。";
					}
				  // メールアドレスのバリデーション
					if( empty($data['email']) ) {
						$error[] = "「メールアドレス」は必ず入力してください。";
				
					} elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
						$error[] = "「メールアドレス」は正しい形式で入力してください。";
					}
				  // 電話番号のバリデーション
					if( empty($data['tel']) ) {
						$error[] = "「電話番号」は必ず入力してください。";
					} elseif( !preg_match( '/^[0-9.-]+$/', $data['tel']) ) {
						$error[] = "「電話番号」は正しい形式で入力してください。";
					} elseif( 10 > mb_strlen($data['tel']) ) {
						$error[] = "電話番号は10桁以上でご記入ください";
					}
				  // 性別のバリデーション
					if( empty($data['gender']) ) {
						$error[] = "「性別」は必ず入力してください。";
					} elseif( $data['gender'] !== 'male' && $data['gender'] !== 'female' ) {
					$error[] = "「性別」は必ず入力してください。";
				  }
				  // 年齢のバリデーション
					if( empty($data['age']) ) {
						$error[] = "「年齢」は必ず入力してください。";
					} elseif( (int)$data['age'] < 1 || 6 < (int)$data['age'] ) {
						$error[] = "「年齢」は必ず入力してください。";
					}
				  // どこで当商品を知ったかのバリデーション
					if( empty($data['know']) ) {
						$error[] = "「どこで当商品を知ったのか」は必ず入力してください。";
					}
				  // 好きなブランドは？のバリデーション
	                if( empty($_POST['brand']) ) {
		                $error[] = "好きなブランドをご選択ください。";
                    }
				  // お問い合わせ内容のバリデーション
					if( !empty($data['contact']) ) {
						$error[] = "「お問い合わせ内容」は必ず入力してください。";
					}
				  // プライバシーポリシー同意のバリデーション
					if( empty($data['agreement']) ) {
						$error[] = "プライバシーポリシーをご確認ください。";
					} elseif( (int)$data['agreement'] !== 1 ) {
						$error[] = "プライバシーポリシーをご確認ください。";
					}
				
					return $error;
				}
              ?>
              <h2><span class="slide-in_inner leftAnimeInner">Contact</span><span class="subtitle slide-in_inner leftAnimeInner">お問合せ</span></span></h2>
              <div class="contact-wrap">
                <?php if( $page_flag === 1 ): ?>

                  <form method="post" action="">
	                  <div class="element_wrap">
		                <label>氏名</label>
		                <p><?php echo $clean['your_name']; ?></p>
	                  </div>
	                  <div class="element_wrap">
		                <label>メールアドレス</label>
		                <p><?php echo $clean['email']; ?></p>
	                  </div>
					  <div class="element_wrap">
		                <label>電話番号</label>
		                <p><?php echo $clean['tel']; ?></p>
	                  </div>
                      <div class="element_wrap">
		                <label>性別</label>
		                <p><?php if( $clean['gender'] === "male" ){ echo '男性'; } else{ echo '女性'; } ?></p>
	                  </div>
	                  <div class="element_wrap">
		                <label>年齢</label>
		                <p><?php if( $clean['age'] === "1" ){ echo '〜19歳'; }
		                  elseif( $clean['age'] === "2" ){ echo '20歳〜29歳'; }
		                  elseif( $clean['age'] === "3" ){ echo '30歳〜39歳'; }
		                  elseif( $clean['age'] === "4" ){ echo '40歳〜49歳'; }
		                  elseif( $clean['age'] === "5" ){ echo '50歳〜59歳'; }
		                  elseif( $clean['age'] === "6" ){ echo '60歳〜'; } ?></p>
	                  </div>
					  <div class="element_wrap">
		                <label>どこで当商品を知りましたか？</label>
		                  <p><?php if( $clean['know'] === "1" ){ echo 'TVのCM'; }
		                    elseif( $clean['know'] === "2" ){ echo '雑誌'; }
		                    elseif( $clean['know'] === "3" ){ echo '電車内の広告'; }
		                    elseif( $clean['know'] === "4" ){ echo 'SNS'; }
		                    elseif( $clean['know'] === "5" ){ echo 'ネット広告'; }
		                    elseif( $clean['know'] === "6" ){ echo 'その他'; } ?>
                          </p>
	                  </div>
					  <div class="element_wrap">
                        <label>好きなブランドはなんですか？</label>
                        <p><?php echo implode(' ／ ', $_POST['brand']);?></p>
                      </div>
	                  <div class="element_wrap">
		                <label>お問い合わせ内容</label>
		                <p><?php echo nl2br($clean['contact']); ?></p>
	                  </div>
	                  <div class="element_wrap">
		                <label>プライバシーポリシーに同意する</label>
		                <p><?php if( $clean['agreement'] === "1" ){ echo '同意する'; }
		                  else{ echo '同意しない'; } ?></p>
	                  </div>
	                  <input type="submit" name="btn_back" value="戻る">
	                  <input type="submit" name="btn_submit" value="送信">
                    <!--　▼▼▼ 受け渡し用の（自動送信メール等に使う）▼▼▼ -->
	                  <input type="hidden" name="your_name" value="<?php echo $clean['your_name']; ?>">
	                  <input type="hidden" name="email" value="<?php echo $clean['email']; ?>">
					  <input type="hidden" name="tel" value="<?php echo $clean['tel']; ?>">
                      <input type="hidden" name="gender" value="<?php echo $clean['gender']; ?>">
	                  <input type="hidden" name="age" value="<?php echo $clean['age']; ?>">
					  <input type="hidden" name="know" value="<?php echo $clean['know']; ?>">
					  <!-- チェックボックスの選択された値をhiddenで持たせる -->
					  <?php
                        if( !empty($_POST['brand']) ){
                          foreach($_POST['brand'] as $brand_value){
                          echo '<input type="hidden" name="brand[]" value="'.$brand_value.'">';
                        }
                        }
                      ?>
	                  <input type="hidden" name="contact" value="<?php echo $clean['contact']; ?>">
	                  <input type="hidden" name="agreement" value="<?php echo $clean['agreement']; ?>">
                  </form>

                <?php elseif( $page_flag === 2 ): ?>

                      <p class="done_text">送信が完了しました。</p>
                      <p class="done_text">自動送信メールが送られます。<br>担当者からは2営業日以内にご連絡いたします。</p>

                  <form method="post" action="">
	                    <input type="submit" name="btn_back_top" value="入力画面に戻る">
                  </form>

                <?php else: ?>

				  <?php if( !empty($error) ): ?>
	                <ul class="error_list">
	                  <?php foreach( $error as $value ): ?>
		                <li><?php echo $value; ?></li>
	                  <?php endforeach; ?>
	                </ul>
                  <?php endif; ?>

                  <form method="post" action="">
	                  <div class="element_wrap">
		                  <label>氏名<br><span class="required">必須</sapn></label>
		                  <input type="text" name="your_name" value="<?php if( !empty($clean['your_name']) ){ echo $clean['your_name']; } ?>">
	                  </div>
	                  <div class="element_wrap">
		                  <label>メールアドレス<br><span class="required">必須</sapn></label>
		                  <input type="text" name="email" value="<?php if( !empty($clean['email']) ){ echo $clean['email']; } ?>">
	                  </div>
					  <div class="element_wrap">
		                <label>電話番号<br><span class="required">必須</sapn></br><span class="required">ハイフン無しでも可</sapn></label>
		                <input type="text" name="tel" placeholder="例：○○○-○○○○-○○○○" value="<?php if( !empty($clean['tel']) ){ echo $clean['tel']; } ?>">
	                  </div>
                      <div class="element_wrap">
		                <label>性別<br><span class="required">必須</sapn></label>
		                <label for="gender_male"><input id="gender_male" type="radio" name="gender" value="male" <?php if( !empty($clean['gender']) && $clean['gender'] === "male" ){ echo 'checked'; } ?>>男性</label>
		                <label for="gender_female"><input id="gender_female" type="radio" name="gender" value="female" <?php if( !empty($clean['gender']) && $clean['gender'] === "female" ){ echo 'checked'; } ?>>女性</label>
	                  </div>
	                  <div class="element_wrap">
		                <label>年齢<br><span class="required">必須</sapn></label>
		                  <select name="age">
			                <option value="">選択してください</option>
			                <option value="1" <?php if( !empty($clean['age']) && $clean['age'] === "1" ){ echo 'selected'; } ?>>〜19歳</option>
			                <option value="2" <?php if( !empty($clean['age']) && $clean['age'] === "2" ){ echo 'selected'; } ?>>20歳〜29歳</option>
			                <option value="3" <?php if( !empty($clean['age']) && $clean['age'] === "3" ){ echo 'selected'; } ?>>30歳〜39歳</option>
			                <option value="4" <?php if( !empty($clean['age']) && $clean['age'] === "4" ){ echo 'selected'; } ?>>40歳〜49歳</option>
			                <option value="5" <?php if( !empty($clean['age']) && $clean['age'] === "5" ){ echo 'selected'; } ?>>50歳〜59歳</option>
			                <option value="6" <?php if( !empty($clean['age']) && $clean['age'] === "6" ){ echo 'selected'; } ?>>60歳〜</option>
		                  </select>
	                  </div>
					  <div class="element_wrap">
		                <label>どこで当店を知りましたか？<br><span class="required">必須</sapn></label>
		                  <select name="know">
			                <option value="">選択してください</option>
			                <option value="1"<?php if( !empty($clean['know']) && $clean['know'] === "1" ){ echo 'selected'; } ?>>TVのCM</option>
			                <option value="2"<?php if( !empty($clean['know']) && $clean['know'] === "2" ){ echo 'selected'; } ?>>雑誌</option>
			                <option value="3"<?php if( !empty($clean['know']) && $clean['know'] === "3" ){ echo 'selected'; } ?>>電車内の広告</option>
			                <option value="4"<?php if( !empty($clean['know']) && $clean['know'] === "4" ){ echo 'selected'; } ?>>SNS</option>
			                <option value="5"<?php if( !empty($clean['know']) && $clean['know'] === "5" ){ echo 'selected'; } ?>>ネット広告</option>
			                <option value="6"<?php if( !empty($clean['know']) && $clean['know'] === "6" ){ echo 'selected'; } ?>>その他</option>
		                  </select>
	                  </div>
					  <div class="element_wrap_cb">
                        <label>好きなブランドはなんですか？<br><span class="required">必須</sapn></label>
                          <div class="cb-wrap">
                            <label><input type="checkbox" name="brand[]" value="サプリメント1" <?php if( !empty($_POST['brand']) && in_array('サプリメント1', $_POST['brand']) ){ echo 'checked'; } ?>>サプリメント1</label>
                            <label><input type="checkbox" name="brand[]" value="サプリメント2" <?php if( !empty($_POST['brand']) && in_array('サプリメント2', $_POST['brand']) ){ echo 'checked'; } ?>>サプリメント2</label>
                            <label><input type="checkbox" name="brand[]" value="サプリメント3" <?php if( !empty($_POST['brand']) && in_array('サプリメント3', $_POST['brand']) ){ echo 'checked'; } ?>>サプリメント3</label>
                            <label><input type="checkbox" name="brand[]" value="サプリメント4" <?php if( !empty($_POST['brand']) && in_array('サプリメント4', $_POST['brand']) ){ echo 'checked'; } ?>>サプリメント4</label>
                            <label><input type="checkbox" name="brand[]" value="サプリメント5" <?php if( !empty($_POST['brand']) && in_array('サプリメント5', $_POST['brand']) ){ echo 'checked'; } ?>>サプリメント5</label>
                            <label><input type="checkbox" name="brand[]" value="サプリメント6" <?php if( !empty($_POST['brand']) && in_array('サプリメント6', $_POST['brand']) ){ echo 'checked'; } ?>>サプリメント6</label>
                            <label><input type="checkbox" name="brand[]" value="サプリメント7" <?php if( !empty($_POST['brand']) && in_array('サプリメント7', $_POST['brand']) ){ echo 'checked'; } ?>>サプリメント7</label>
                            <label><input type="checkbox" name="brand[]" value="サプリメント8" <?php if( !empty($_POST['brand']) && in_array('サプリメント8', $_POST['brand']) ){ echo 'checked'; } ?>>サプリメント8</label>
                          </div>
                      </div>
	                  <div class="element_wrap">
		                <label>お問い合わせ内容<br><span class="required">必須</sapn></label>
		                <textarea name="contact"><?php if( !empty($clean['contact']) ){ echo $clean['contact']; } ?></textarea>
	                  </div>
	                  <div class="element_wrap">
		                <label for="agreement"><input id="agreement" type="checkbox" name="agreement" value="1" <?php if( !empty($clean['agreement']) && $clean['agreement'] === "1" ){ echo 'checked'; } ?>>プライバシーポリシーに同意する</label>
	                  </div>
	                  <input type="submit" name="btn_confirm" value="入力内容を確認する">
                      <input type="hidden" name="scroll_top" value="" class="st">
                  </form>

                <?php endif; ?>
              </div>
            </section><!--access-->

    </section><!-- #primary-->                   
<?php get_footer(); ?>