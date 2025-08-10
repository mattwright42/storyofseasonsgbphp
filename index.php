<?php include('inc/language.php') ?>
<?php $pagenumber = "00"; //←ページ番号を記入します ?>
<?php $designcat = "00"; //←ページ番号を記入します ?>
<?php $pagetitle = "TOP"; //←ページのタイトルを記入します ?>
<?php $directory = ""; ?>
<?php $titspace = "｜"; ?>
<?php include('inc/head.php') ?>
<?php include($directory . "inc/header.php") ?>

<main>
	<nav class="header_sub"><a href="#00">物語</a><a href="#01">操作方法</a><a href="#02">画面の見方</a><a href="#03">ようこそそよかぜタウンへ！</a></nav>
	
	<section class="story fadein light nobd" id="00">
		<h2 class="tit01"><img src="img/h/tit00_01.png" alt="物語" class="pc"><img src="img/h/tit00_01_sp.png" alt="物語" class="sp"></h2>
		<article>
			<p><i>さわやかな風が吹きぬける山間の町、</i><i><big>そよかぜタウン。</big></i><br><i><big>「世界一の大バザール」</big></i><i>として知られたこの町で、</i><i>牧場主になりませんか？</i></p>
		</article>
	</section>
	
	<section class="character fadein">
		<article class="fadein">
			<h2 class="tit02"><span>登場人物</span></h2>
			<div class="fadeitem">
				<div class="swiper_wak chara">
			<div class="swiper_character">
				<ul class="swiper-wrapper">
					<li class="swiper-slide">
						<div class="card cbtn01">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/01.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>ユリス<i>内田 雄馬</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn02">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/02.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>ディルカ<i>千葉 翔也</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn03">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/03.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>ロイド<i>内山 昂輝</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn04">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/04.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>アギ<i>浦田 わたる</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn05">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/05.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>シュミット<i>大塚 剛央</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn06">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/06.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>アラタ<i>濱野 大輝</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn07">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/07.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>シェルファ<i>石見 舞菜香</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn08">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/08.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>エンジュ<i>内田 真礼</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn09">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/09.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>フレイヤ<i>加隈 亜衣</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn10">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/10.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>メイプル<i>東山 奈央</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn11">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/11.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>カゲツ<i>潘 めぐみ</i></h3>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="card cbtn12">
							<div class="tn"><figure></figure><img class="copy" src="img/chtx/12.svg" alt=""></div>
							<div class="info">
								<div class="box">
									<h3>ディアナ<i>花守 ゆみり</i></h3>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
				<div class="swiperc-button-prev"></div>
				<div class="swiperc-button-next"></div>
		</div>
			</div>
		</article>
	</section>
	
	<section class="controls fadein light" id="01">
		<article class="fadein">
			<h2 class="tit01"><img src="img/h/tit00_02.png" alt="操作方法" class="pc"><img src="img/h/tit00_02_sp.png" alt="操作方法" class="sp"></h2>
			<div class="fadeitem">
				<dl class="table2 box mt2">
					<dt><span>歩く／（大きく倒す）走る</span></dt><dd><span>Lスティック</span></dd>
					<dt><span>カーソル移動</span></dt><dd><span>Rスティック</span></dd>
					<dt><span>使う</span></dt><dd><span>Yボタン</span></dd>
					<dt><span>カバンメニュー</span></dt><dd><span>Xボタン</span></dd>
					<dt><span>調べる／話す／拾う</span></dt><dd><span>Aボタン</span></dd>
					<dt><span>ジャンプ</span></dt><dd><span>Bボタン</span></dd>
					<dt><span>アイテムバー</span></dt><dd><span>Lボタン</span></dd>
					<dt><span>道具バー</span></dt><dd><span>Rボタン</span></dd>
					<dt><span>挨拶する</span></dt><dd><span>ZLボタン</span></dd>
					<dt><span>置く／ベルを鳴らす</span></dt><dd><span>ZRボタン</span></dd>
					<dt><span>カメラのズーム</span></dt><dd><span>Rスティックボタン</span></dd>
					<dt><span>カーソル移動</span></dt><dd><span>方向ボタン</span></dd>
					<dt><span>ポーズメニュー</span></dt><dd><span>＋ボタン</span></dd>
					<dt><span>マップ</span></dt><dd><span>−ボタン</span></dd>
				</dl>
			</div>
		</article>
	</section>
	
	<section class="fieldscreen dark" id="02">
		<article class="picnum fadein">
			<h2 class="tit01"><img src="img/h/tit00_03.png" alt="画面の見方" class="pc"><img src="img/h/tit00_03_sp.png" alt="画面の見方" class="sp"></h2>
			<div class="fadeitem">
				<div class="pic mt2"><img src="img/ph/aiban01.jpg" alt="画面の見方"></div>
				<ul class="num mt5">
					<li>GUTS</li>
					<li>現在の時刻と日付</li>
					<li>天気</li>
					<li>風量</li>
					<li>特別なできごとサイン</li>
					<li>対象オブジェクト</li>
					<li>アイテムバー／道具バー</li>
					<li>アクション情報</li>
				</ul>
			</div>
		</article>
		<article class="fadein">
			<h3 class="tit02 mt10"><span>カバンメニュー</span></h3>
			<div class="fadeitem">
				<dl class="table2 w12 box mt5">
					<dt><span>カバン</span></dt><dd><span>道具や所持アイテムを確認できます。</span></dd>
					<dt><span>住人情報</span></dt><dd><span>町の住人の情報となかよし度を確認できます。</span></dd>
					<dt><span>住人からのお願い</span></dt><dd><span>現在請け負っているお願いを確認できます。</span></dd>
					<dt><span>手紙</span></dt><dd><span>受け取った手紙の内容を確認できます。</span></dd>
					<dt><span>バザール情報</span></dt><dd><span>現在のバザールのランクやトレンド、最高売上を確認できます。</span></dd>
					<dt><span>総合情報</span></dt><dd><span>プロフィールの確認やさまざまな記録を確認できます。</span></dd>
				</dl>
			</div>
		</article>
	</section>
	
	<section class="welcome fadein light" id="03">
		<h2 class="tit01"><img src="img/h/tit00_04.png" alt="ようこそそよ風タウンへ！" class="pc"><img src="img/h/tit00_04_sp.png" alt="ようこそそよ風タウンへ！" class="sp"></h2>
		<article class="swiper_wak pt c1 fadeitem">
			<div class="noswiper1 col01 mt5">
				<ul>
					<li>
						<div class="box">
							<h3><span>牧場で暮らそう</span></h3>
							<img src="img/ph/0002.jpg" alt="牧場で暮らそう">
							<p>畑を耕し、作物を収穫し、どうぶつのお世話をして……忙しくも楽しい1日は、いつも牧場から始まります。自由にあなただけの牧場生活を楽しみましょう。</p>
							<a href="01/">「牧場」について知る</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="noswiper1 col02 mt5">
				<ul>
					<li>
						<div class="box">
							<h3><span>町の住人とのふれあい</span></h3>
							<img src="img/ph/0003.jpg" alt="町の住人とのふれあい">
							<p>そよかぜタウンには、たくさんの個性豊かな住人が住んでいます。おしゃべりしたり、悩み事を解決してあげたりして、どんどん仲良くなりましょう。</p>
							<a href="02/">「町」について知る</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="noswiper1 col03 mt5">
				<ul>
					<li>
						<div class="box">
							<h3><span>目指せ世界一のバザール</span></h3>
							<img src="img/ph/0004.jpg" alt="目指せ世界一のバザール">
							<p>名物であるバザールには、あなたや住人の露店目当てに大勢のお客さんが訪れます。たくさんの商品を売って、バザールの知名度を上げましょう。</p>
							<a href="03/">「バザール」について知る</a>
						</div>
					</li>
				</ul>
			</div>
		</article>
	</section>

	<div class="character_pic cp01"><div class="box"><figure style="background-image: url('img/ch/b01.png');"></figure></div></div>
	<div class="character_pic cp02"><div class="box"><figure style="background-image: url('img/ch/b02.png');"></figure></div></div>
	<div class="character_pic cp03"><div class="box"><figure style="background-image: url('img/ch/b03.png');"></figure></div></div>
	<div class="character_pic cp04"><div class="box"><figure style="background-image: url('img/ch/b04.png');"></figure></div></div>
	<div class="character_pic cp05"><div class="box"><figure style="background-image: url('img/ch/b05.png');"></figure></div></div>
	<div class="character_pic cp06"><div class="box"><figure style="background-image: url('img/ch/b06.png');"></figure></div></div>
	<div class="character_pic cp07"><div class="box"><figure style="background-image: url('img/ch/b07.png');"></figure></div></div>
	<div class="character_pic cp08"><div class="box"><figure style="background-image: url('img/ch/b08.png');"></figure></div></div>
	<div class="character_pic cp09"><div class="box"><figure style="background-image: url('img/ch/b09.png');"></figure></div></div>
	<div class="character_pic cp10"><div class="box"><figure style="background-image: url('img/ch/b10.png');"></figure></div></div>
	<div class="character_pic cp11"><div class="box"><figure style="background-image: url('img/ch/b11.png');"></figure></div></div>
	<div class="character_pic cp12"><div class="box"><figure style="background-image: url('img/ch/b12.png');"></figure></div></div>
</main>

<?php include($directory . "inc/footer.php") ?>
