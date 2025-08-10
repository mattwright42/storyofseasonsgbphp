<?php include('../inc/language.php') ?>
<?php $pagenumber = "01"; //←ページ番号を記入します ?>
<?php $designcat = "01"; //←ページ番号を記入します ?>
<?php $pagetitle = "牧場生活"; //←ページのタイトルを記入します ?>
<?php $directory = "../"; ?>
<?php $titspace = "｜"; ?>
<?php include($directory . "inc/head.php") ?>
<?php include($directory . "inc/header.php") ?>

<main>
	<nav class="header_sub"><a href="#01">生活の知識</a><a href="#02">農作</a><a href="#03">飼育</a><a href="#04">自宅</a><a href="#05">風車</a></nav>

	<section class="light fadein nobd" id="01" >
		<h2 class="tit01"><img src="../img/h/tit01_01.png" alt="生活の知識" class="pc"><img src="../img/h/tit01_01_sp.png" alt="生活の知識" class="sp"></h2>
		<div class="fadeitem">
			<div class="swiper_wak pt col00 c3 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>季節</span></h3>
								<img src="../img/ph/0101.jpg" alt="季節">
								<p>牧場では、はる、なつ、あき、ふゆの4つの季節が順番に巡ります。季節ごとに育つ作物が変わったり、町の行事があったりします。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>天気</span></h3>
								<img src="../img/ph/0102.jpg" alt="天気">
								<p>晴れや曇り、雨など天気は毎日変化します。雨の日は畑に水やりをする必要がありません。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>風力</span></h3>
								<img src="../img/ph/0103.jpg" alt="風力">
								<p>天気と同様に風力も毎日変化し、風車での作成スピードや、グライダーの滑空に影響します。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col02 c3 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>GUTS</span></h3>
								<img src="../img/ph/0104.jpg" alt="GUTS">
								<p>農作や採取、釣りなどさまざまな行動をすると、GUTSのゲージが減っていきます。GUTSがゼロになるとその場で倒れ、次の日の自宅から始まります。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>GUTSの回復</span></h3>
								<img src="../img/ph/0105.jpg" alt="GUTSの回復">
								<p>GUTSは自宅で睡眠を取ったり、お風呂に入ったりすると回復します。また、食べ物を食べることでも回復します。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>活動時間</span></h3>
								<img src="../img/ph/0106.jpg" alt="活動時間">
								<p>次の日のAM 5:00まで活動すると倒れてしまい、次の日の自宅から始まります。倒れた場合は、GUTSがあまり回復しません。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col03 c2 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>アイテムの種類</span></h3>
								<img src="../img/ph/0107.jpg" alt="アイテムの種類">
								<p>アイテムには作物や食べ物、宝石など、多くの種類があります。動物の副産物、収穫、採取、釣り、購入、風車での加工など、入手方法も異なります。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>アイテムの品質</span></h3>
								<img src="../img/ph/0108.jpg" alt="アイテムの品質">
								<p>アイテムには品質があり、高くなるほど値段や効果が上がります。畑を栄養いっぱいにする、どうぶつを愛情たっぷりお世話するなどで、品質は上がっていきます。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col00 c2 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>カバン</span></h3>
								<img src="../img/ph/0109.jpg" alt="カバン">
								<p>入手したアイテムが入っています。カバンがいっぱいになったら、そうこに移したり、捨てたりしましょう。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>アイテムバー</span></h3>
								<img src="../img/ph/0110.jpg" alt="アイテムバー">
								<p>Lボタンを押すと、カバンの中からアイテムを選択して持つことができます。種をまくときや、アイテムをプレゼントするときに使いましょう。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col02 c3 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>道具バー</span></h3>
								<img src="../img/ph/0111.jpg" alt="道具バー">
								<p>Rボタンを押すと、しまってある道具を選択して持つことができます。畑を耕したり、水をまいたりしましょう。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>道具の一覧</span></h3>
								<dl class="table2 min_tab w8">
									<dt><span>クワ</span></dt><dd><span>土地を耕し畑を作ります。</span></dd>
									<dt><span>じょうろ</span></dt><dd><span>耕した畑に水をまきます。</span></dd>
									<dt><span>カマ</span></dt><dd><span>作物や草花を刈り取ります。</span></dd>
									<dt><span>ハチェット</span></dt><dd><span>岩や鉱石を壊します。</span></dd>
									<dt><span>ブラシ</span></dt><dd><span>どうぶつを綺麗にします。</span></dd>
									<dt><span>乳しぼり器</span></dt><dd><span>ウシのミルクが採れます。</span></dd>
									<dt><span>毛刈りばさみ</span></dt><dd><span>ヒツジやアルパカの毛を刈ります。</span></dd>
									<dt><span>釣り竿</span></dt><dd><span>水場で釣りをします。</span></dd>
								</dl>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>ジャンプアクション</span></h3>
								<img src="../img/ph/0112.jpg" alt="ジャンプアクション">
								<p>クワやじょうろ、カマ、ハチェットは、ジャンプ中に使うと範囲が広がります。道具のランクが上がるとさらに広がります。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col03 c3 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>コロボックル</span></h3>
								<img src="../img/ph/0113.jpg" alt="コロボックル">
								<p>5人組の不思議な妖精です。彼らに会うと、ハッピーエナジーを貯められるようになります。普段は町に点在しており、それぞれ採取物やきのこ、虫などを集めているので、おすそわけしてあげましょう。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>ハッピーエナジー</span></h3>
								<img src="../img/ph/0114.jpg" alt="ハッピーエナジー">
								<p>ハッピーエナジーは農作や交流などさまざまな場面で獲得できます。貯めたハッピーエナジーは、バザールのコロボックルのショップで、さまざまなアイテムとの交換に使います。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>コロボックルのレベル</span></h3>
								<img src="../img/ph/0115.jpg" alt="コロボックルのレベル">
								<p>コロボックルにアイテムをおすそわけすると経験値が貯まり、一定値になるとレベルが上がります。レベルが上がると、そのコロボックルが集めているアイテム入手時の品質が上昇します。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section class="dark fadein" id="02" >
		<h2 class="tit01"><img src="../img/h/tit01_02.png" alt="農作" class="pc"><img src="../img/h/tit01_02_sp.png" alt="農作" class="sp"></h2>
		<div class="fadeitem">
			<div class="swiper_wak pt col00 c1 mt5">
				<div class="noswiper1">
					<ul>
						<li>
							<div class="box">
								<h3><span>畑</span></h3>
								<img src="../img/ph/0116.jpg" alt="畑">
								<p>耕せる土地があれば、クワを使って畑を作ることができます。自由に作物を育てましょう。</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="swiper_wak pt col02 c4 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>種まき</span></h3>
								<img src="../img/ph/0117.jpg" alt="種まき">
								<p>畑には種をまくことができます。季節に合った種であれば、水やりを行うと成長していきます。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>水やり</span></h3>
								<img src="../img/ph/0118.jpg" alt="水やり">
								<p>水やりは朝と夕方の2回行え、水汲み場で補充できます。水をあげずにいると、作物は枯れてしまいます。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>肥料</span></h3>
								<img src="../img/ph/0119.jpg" alt="肥料">
								<p>まいた種には1日1回、肥料を使うことができます。肥料を使った種は、品質が上がりやすくなります。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>収穫</span></h3>
								<img src="../img/ph/0120.jpg" alt="収穫">
								<p>作物が育ったら収穫できます。Aボタンで直接引き抜いたり、作物によっては道具のカマで刈ったりして収穫します。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col03 c3 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>苗を植える</span></h3>
								<img src="../img/ph/0121.jpg" alt="苗を植える">
								<p>畑の3×3マスのスペースを使って、たくさんの実がなる木を育てることができます。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>苗の成長</span></h3>
								<img src="../img/ph/0122.jpg" alt="苗の成長">
								<p>苗には水をあげる必要がなく、枯れることもありません。季節が来て成長しきると実をつけるので、Yボタンで収穫しましょう。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>木の引き抜き</span></h3>
								<img src="../img/ph/0123.jpg" alt="木の引き抜き">
								<p>道具のハチェットを使って木を引き抜くと、アイテムとして持ち運べます。引き抜いた木は植え直すことが可能です。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="light fadein" id="03" >
		<h2 class="tit01"><img src="../img/h/tit01_03.png" alt="飼育" class="pc"><img src="../img/h/tit01_03_sp.png" alt="飼育" class="sp"></h2>
		<div class="fadeitem">
			<div class="swiper_wak pt col00 c3 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>どうぶつ小屋</span></h3>
								<img src="../img/ph/0124.jpg" alt="どうぶつ小屋">
								<p>どうぶつ小屋では、どうぶつを飼うことができます。どうぶつにエサをあげることで、さまざまな副産物をくれます。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>エサ</span></h3>
								<img src="../img/ph/0125.jpg" alt="エサ">
								<p>どうぶつによってエサは違います。町のショップで購入したり、風車で作成したりしましょう。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>健康度</span></h3>
								<img src="../img/ph/0126.jpg" alt="健康度">
								<p>エサをあげなかったり、放置したりしていると健康度が下がります。健康度が下がると副産物に影響が出ます。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col02 c2 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>ふれあい</span></h3>
								<img src="../img/ph/0127.jpg" alt="ふれあい">
								<p>どうぶつたちは撫でたり、ブラシをかけたりすると喜び、なかよし度が上がります。なかよし度が上がると、高品質な副産物をくれやすくなります。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>ブラシがけ</span></h3>
								<img src="../img/ph/0128.jpg" alt="ブラシがけ">
								<p>道具のブラシを大きめのどうぶつに使うと、なかよし度や健康度が上がります。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col03 c2 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>放牧</span></h3>
								<img src="../img/ph/0129.jpg" alt="放牧">
								<p>天気の良い日には、外に出すことで放牧ができます。放牧中はエサをあげる必要がありません。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>放牧のさせ方</span></h3>
								<img src="../img/ph/0130.jpg" alt="放牧のさせ方">
								<p>ZRボタンでベルを鳴らし、どうぶつを呼び寄せることができます。また、Yボタンを押すと、小さめのどうぶつは抱きかかえ、大きめのどうぶつは押すことができます。小屋の外まで運んであげましょう。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col00 c2 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>乳しぼり</span></h3>
								<img src="../img/ph/0131.jpg" alt="乳しぼり">
								<p>道具の乳しぼり器をおとなのウシに使うと、ミルクを採ることができます。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>毛刈り</span></h3>
								<img src="../img/ph/0132.jpg" alt="毛刈り">
								<p>おとなのヒツジやアルパカに、道具の毛刈りばさみを使うと毛を刈ることができます。数日経つとまた刈ることが可能です。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col02 c1 mt5">
				<div class="noswiper1">
					<ul>
						<li>
							<div class="box">
								<h3><span>たねつけ</span></h3>
								<img src="../img/ph/0133.jpg" alt="たねつけ">
								<p>SHOP・ラモラモーンで行えるたねつけは、数日後に新たな生命を誕生させてくれます。一度にたねつけできるのは、1つの小屋につき健康な1匹だけです。</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section class="dark fadein" id="04" >
		<h2 class="tit01"><img src="../img/h/tit01_04.png" alt="自宅" class="pc"><img src="../img/h/tit01_04_sp.png" alt="自宅" class="sp"></h2>
		<div class="fadeitem">
			<div class="swiper_wak pt col03 c2 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>ベッド</span></h3>
								<img src="../img/ph/0134.jpg" alt="ベッド">
								<p>ベッドを調べると、いつでも睡眠が取れます。睡眠を取るとGUTSが回復し、次の日になります。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>お風呂</span></h3>
								<img src="../img/ph/0135.jpg" alt="お風呂">
								<p>入ることでGUTSが回復し、30分経過します。一度入るとしばらくは入れませんが、時間が経てば再び入ることが可能です。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col00 c4 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>キッチン</span></h3>
								<img src="../img/ph/0136.jpg" alt="キッチン">
								<p>キッチンでは料理を作ることができます。最初は簡単な料理だけですが、物語が進んで調理器具が増えると多彩な料理を作れます。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>料理</span></h3>
								<img src="../img/ph/0137.jpg" alt="料理">
								<p>料理にはサラダやメインなどのカテゴリがあります。いずれもGUTSが回復しますが、メインは回復量が大きく、それ以外はさまざまな効果が発動します。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>アレンジ</span></h3>
								<img src="../img/ph/0138.jpg" alt="アレンジ">
								<p>料理を作る際、特定の食材を持っていればアレンジとして追加でき、品質を高めることができます。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>レシピ</span></h3>
								<img src="../img/ph/0139.jpg" alt="レシピ">
								<p>料理を作るにはレシピと食材が必要です。レシピは町を探索したり、その料理を食べたりすることで覚えます。料理はカフェで買えるほか、住人のお願い達成のお礼としてもらうこともあります。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col02 c1 mt5">
				<div class="noswiper1">
					<ul>
						<li>
							<div class="box">
								<h3><span>そうこ</span></h3>
								<img src="../img/ph/0140.jpg" alt="そうこ">
								<p>アイテムを保管できます。保管できる数には限りがあるので、売ったり捨てたりして整理しましょう。そうこは家の外にも設置されています。物語がすすめば、そうこ機能をパワーアップさせることができます。</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="swiper_wak pt col03 c4 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>カレンダー</span></h3>
								<img src="../img/ph/0141.jpg" alt="カレンダー">
								<p>住人たちの誕生日や、そよかぜタウンの行事が2年分確認できます。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>ラジオ</span></h3>
								<img src="../img/ph/0142.jpg" alt="ラジオ">
								<p>放送中の3つの番組から選び、ラジオを聴くことができます。番組は曜日や時間帯によって変わります。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>本棚</span></h3>
								<img src="../img/ph/0143.jpg" alt="本棚">
								<p>これまでに入手したアイテムの図鑑が確認できます。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>飾り棚</span></h3>
								<img src="../img/ph/0144.jpg" alt="飾り棚">
								<p>これまでに入手した特別なアイテムが確認できます。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col00 c2 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>花びん</span></h3>
								<img src="../img/ph/0145.jpg" alt="花びん">
								<p>入り口にある花びんには、花を生けることができます。花は徐々にしおれていくので、元気がなくなってきたら変えましょう。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>チェスト</span></h3>
								<img src="../img/ph/0146.jpg" alt="チェスト">
								<p>ベッド脇のチェストでは、顔立ちや目の色といったプレイヤーの見た目を変えることができるほか、服を着替えたりグライダーの変更もできます。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>		
			<div class="swiper_wak pt col02 c1 mt5">
				<div class="noswiper1">
					<ul>
						<li>
							<div class="box">
								<h3><span>ペット</span></h3>
								<img src="../img/ph/0147.jpg" alt="ペット">
								<p>ペットは牧場内を自由に動きます。撫でたり抱っこしたりしてコミュニケーションを取りましょう。イヌやネコは放牧を手伝ってくれ、ウマは騎乗して移動できます。</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section class="light fadein" id="05" >
		<h2 class="tit01"><img src="../img/h/tit01_05.png" alt="風車" class="pc"><img src="../img/h/tit01_05_sp.png" alt="風車" class="sp"></h2>
		<div class="fadeitem">
			<div class="swiper_wak pt col03 c2 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>壊れた風車</span></h3>
								<img src="../img/ph/0148.jpg" alt="壊れた風車">
								<p>牧場には壊れた風車があり、物語を進めると修理して使えるようになります。また、壊れた風車は町にもあり、住人のなかよし度を上げると利用できます。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>新たなアイテムを作成</span></h3>
								<img src="../img/ph/0149.jpg" alt="新たなアイテムを作成">
								<p>風車では、素材となるアイテムを使って別のアイテムを作成できます。利用する風車によって作成できるアイテムは変わります。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
			<div class="swiper_wak pt col00 c3 mt5">
				<div class="swiper_pictx">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="box">
								<h3><span>作成時間</span></h3>
								<img src="../img/ph/0150.jpg" alt="作成時間">
								<p>アイテムの作成は、種類や数によってかかる時間が変わります。なお、風力が強いと早く完成します。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>ラインの活用</span></h3>
								<img src="../img/ph/0151.jpg" alt="ラインの活用">
								<p>風車には作成ラインが複数あり、アイテムも複数作ることができます。現在どのラインが稼働しているかは、左側のボードで確認可能です。</p>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="box">
								<h3><span>取り出し口</span></h3>
								<img src="../img/ph/0152.jpg" alt="取り出し口">
								<p>右側にある赤い取り出し口から、完成したアイテムを取り出せます。また、奥の中断レバーを引いてラインを止めたときも、素材は取り出し口に戻ります。</p>
							</div>
						</li>
					</ul>
					<div class="swiperpt-nav">
						<div class="swiperpt-button-prev"></div>
						<div class="swiperpt-pagination"></div>
						<div class="swiperpt-button-next"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<?php include($directory . "inc/footer.php") ?>
