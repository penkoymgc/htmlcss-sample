<!DOCTYPE html>
<html>
<head>
	<meta charaset ="UTF-8">
	<title>Contact | 風景写真家「SNAPPERS」</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body id="contact">

	<!-- header 始まり -->
	<header>
		<div class="logo">
			<a href="/index"><img src="images/logo.png" alt="SNAPPERS"></a>
		</div>
		<nav>
			<ul class="global-nav">
				<li><a href="/portfolio">Portfolio</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- header 終わり -->

	<!-- wrap 始まり -->
	<div id="wrap">
		<div class="contact">
			<div class="main-center">
				<h1>Contact</h1>
				<p>SNAPPERSへのアクセス方法、お問い合わせ、撮影のご依頼フォームのページです。お気軽にお問い合わせください。</p>
				<section class="access clearfix">
					<h2 class="icon">Access</h2>
					<table>
						<tr>
							<th>所在地住所</th>
							<td>〒123-4567<br>静岡県伊東市伊豆高原○△⭐︎-12</td>
						</tr>
						<tr>
							<th>電話番号</th>
							<td>012-3456-7890</td>
						</tr>
						<tr>
							<th>電車でのアクセス　</th>
							<td>伊豆急行「伊豆高原」駅より徒歩15分</td>
						</tr>
						<tr>
							<th>お車でのアクセス</th>
							<td>伊豆山I.Cより国道135号戦経由で50分</td>
						</tr>
					</table>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13092.353303890986!2d139.100901232542!3d34.87912828931905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6019dcd319ce2d9f%3A0xbc111be9ad0e0569!2z5LyK6LGG6auY5Y6f!5e0!3m2!1sja!2sjp!4v1549264871294" width="460" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
				</section>
				<section>
					<h2 class="icon">Contact form</h2>
					<div class="form">
						<form method="POST" action="/contact/send">
							<dl>
								<dt><span class="required">お名前</span></dt>
								<dd><input type="text" name="name" class="name" required></dd>
								<dt><span class="required">メールアドレス</span></dt>
								<dd><input type="email" name="email" class="email" required></dd>
								<dt>お電話番号</dt>
								<dd><input type="tel" name="tel" class="tel"><p>※ハイフン無しで入力してください</p></dd>
								<dt>お問い合わせ種別</dt>
								<dd>
									<select name="type" class="type">
										<option value="撮影のご依頼">撮影のご依頼</option>
										<option value="講演・各種メディア出演のご依頼">講演・各種メディア出演のご依頼</option>
										<option value="その他お問い合わせ">その他お問い合わせ</option>
									</select>
								</dd>
								<dt>ご希望のご連絡方法</dt>
								<dd>
									<input type="radio" name="contact" value="Eメール">Eメール
									<input type="radio" name="contact" value="お電話">お電話
								</dd>
								<dt>メッセージ</dt>
								<dd><textarea name="message" class="message"></textarea></dd>
							</dl>
							<button type="submit" class="btn">送信</button>
							@csrf
						</form>
						<div class="attention">
							<p>※「<span class="required"></span>」の付いている項目は必須項目です。<br>※メッセージ送信後、48時間以内に担当者よりご連絡いたします。</p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- wrap 終わり -->

	<!-- footer 始まり -->
	<footer>
		<small>(C)2017 Hottori-studio.</small>
	</footer>
	<!-- footer 終わり-->

</body>
</html>