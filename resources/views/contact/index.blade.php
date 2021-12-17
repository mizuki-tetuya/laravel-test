<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script src="/resources/js/text.js"></script>
</head>


<style>
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

/* change border colour to suit your needs */
hr {
    display:block;
    height:1px;
    border:0;
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

body {
  width: 100%;
  line-height: 1.5;
}
h2 {
  margin: 10px 0px;
  text-align:center;
  font-size: 25px;
}
form {
  width: 30%;
  margin: auto;
  box-sizing: border-box;
}
.name-card,
.mailadress-card,
.mailnumber-card,
.address-card,
.building-card,
.contact-card {
  width:100%;
  margin: auto;
  box-sizing: border-box;
}
span {
  color: red;
}
/*名前 */

.name-card-content {
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.name {
  display: block;
  width: 30%;
  font-weight: bold;
}
.name-content {
  display: flex;;
  width: 70%;
}
.name-content1 input {
  width: 90%;
}
.name-content2 input {
  width: 90%;
}
.name-under-card {
  width: 85%;
  box-sizing: border-box;
  display:flex;
  justify-content: right;
}
.name-under-content1 input {
  width: 90%;
}
.name-under-content2 input {
  width: 90%;
}
/*性別 */
.sex-card {
  width: 56%;
  display: flex;
  justify-content: space-between;
  margin: 10px 0px;
}
.sex {
  font-weight: bold;
}
.sex-content label {
  padding: 0 0 0 40px;	/* ラベルの位置 */
	font-size: 16px;
	line-height: 28px;		/* ボタンのサイズに合わせる */
	display: inline-block;
	cursor:	pointer;
	position: relative;
}
.sex-content label:before {
  content: '';
	width: 28px;		/* ボタンの横幅 */
	height: 28px;		/* ボタンの縦幅 */
	position: absolute;
	top: 0;
	left: 0;
	background-color: white;
  border: 1px solid black;
	border-radius: 50%;
}
.sex-content input[type="radio"] {
  display:none;
}
.sex-content input[type="radio"]:checked + label:after {
	content: '';
	width: 10px;		/* マークの横幅 */
	height: 10px;		/* マークの縦幅 */
	position: absolute;
	top: 9px;
	left: 9px;
	background-color: black;
	border-radius: 50%;
}

/*メールアドレス */
.mailadress-card {
  display: flex;
  justify-content: space-between;
}
.mailadress-ttl {
  width: 30%;
  font-weight: bold;
}
.mailadress-content {
  width: 70%;
}
.mailadress-content-up input {
  width: 77%;
}
/*郵便番号 */
.mailnumber-card {
  display: flex;
  justify-content: space-between;
  margin: 10px 0px;
}
.mailnumber-ttl {
  width: 30%;
  font-weight: bold;
}
.mailnumber-content {
  width: 70%;
  display: flex;
}
.mailnumber-under-content input {
  width: 180%;
}

/*住所 */
.address-card {
  display: flex;
}
.address-ttl {
  width: 30%;
  font-weight: bold;
}
.adress-content {
  width: 70%;
}
.adress-content1 input,
.adress-content2 input {
  width: 190%;
}

/*建物名 */
.building-card {
  display: flex;
  margin: 10px 0px;
}
.building-ttl {
  width: 30%;
  font-weight: bold;
}
.building-content {
  width: 70%;
}
.building-content1 input {
  width: 77%;
}
.building-under-content input {
  width: 77%;
}

/*ご意見 */
.contact-card {
  display: flex;
  margin-bottom: 10px;
}
.contact-ttl {
  width: 30%;
  font-weight: bold;
}
.contact-content {
  width: 70%;
}
.contact-content textarea {
  width: 77%;
}

/*送信ボタン */
.submit-btn {
  text-align: center;
}
.submit-btn input {
  background-color: black;
  color: white;
  font-weight: bold;
  padding: 10px 30px;
  border-radius: 10px;
}
</style>


<body>
  <h2>お問い合わせ</h2>
  <form action=" {{ route('contact.confirm') }}" method="post">
    @csrf
    <div class="name-card">
      <div class="name-card-content">
        <div class="name">お名前<span>※</span></div>
        <div class="name-content">
          <div class="name-content1"><input type="text" name="family-name" value="{{ old('fullname') }}"></div>
          @if ($errors->has('fullname'))
           <p class="error-message">{{ $errors->first('fullname')}}</p>
          @endif
          <div class="name-content2"><input type="text" name="first-name" value="{{ old('fullname') }}"></div>
          @if ($errors->has('fullname'))
           <p class="error-message">{{ $errors->first('fullname')}}</p>
          @endif
        </div>
      </div>
      <div class="name-under-card">
        <div class="name-under-content1"><input type="text" name="under-name" style=border:none; placeholder="  例) 山田"></div>
        <div class="name-under-content2"><input type="text" name="under-name" style=border:none; placeholder="  例) 太郎"></div>
      </div>
    </div>

    <div class="sex-card">
      <div class="sex">性別<span>※</span></div>
      <div class="sex-content" value="{{ old('gender') }}">
        <input type="radio" id="male" name="sex-type" value="1" checked>
        <label for="male">男性</label>
        <input type="radio" id="female" name="sex-type" value="2">
        <label for="female">女性</label>
      </div>
      @if ($errors->has('gender'))
        <p class="error-message">{{ $errors->first('gender') }}</p>
        @endif
    </div>

    <div class="mailadress-card">
      <div class="mailadress-ttl">メールアドレス<span>※</span></div>
      <div class="mailadress-content">
        <div class="mailadress-content-up"><input type="text" name="mailadress" value="{{ old('email')}}"></div>
        @if( $errors->has('email'))
         <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
        <div class="mailaress-under-content"><input type="text" name="under-mailadress" style=border:none; placeholder="  例) test@example.com"></div>
      </div>
    </div>

    <div class="mailnumber-card">
      <div class="mailnumber-ttl">郵便番号<span>※</span></div>
      <div class="mailnumber-content">
        <div class="mailnumber-content-up">
          <div class="mailnumber-content1">〒</div>
        </div>
        <div class="mailnumber-under-content">
          <div class="mailnumber-under-content1"><input type="text" name="mailnumber" id="post1" value="{{ old('postcode') }}"></div>
          @if( $errors->has('postcode'))
         <p class="error-message">{{ $errors->first('postcode') }}</p>
        @endif
          <div class="mailnumber-under-content2"><input type="text" name="under-mailnumber" style=border:none; placeholder="例) 123-4567"></div>
        </div>
      </div>
    </div>

    <div class="address-card">
      <div class="address-ttl">住所<span>※</span></div>
      <div class="address-under-content">
        <div class="adress-content1">
          <input type="text" id="address1" name="address" value="{{ old('address') }}">
        </div>
         @if( $errors->has('address'))
         <p class="error-message">{{ $errors->first('address') }}</p>
        @endif
        <div class="adress-content2">
          <input type="text" name="under-adress" style=border:none; placeholder="   例) 東京都渋谷区千駄ヶ谷1-2-3">
        </div>
      </div>
    </div>

    <div class="building-card">
      <div class="building-ttl">建物名</div>
      <div class="building-content">
        <div class="building-content1"><input type="text" name="building" value="{{ old('building_name') }}"></div>
         @if( $errors->has('building_name'))
         <p class="error-message">{{ $errors->first('building_name') }}</p>
        @endif
        <div class="building-under-content">
          <input type="text" name="under-building" style=border:none; placeholder="   例) 千駄ヶ谷マンション101">
        </div>
      </div>
    </div>

    <div class="contact-card">
      <div class="contact-ttl">ご意見<span>※</span></div>
      <div class="contact-content">
        <textarea name="contact" id="contact" cols="30" rows="10">{{ old('opinion')}}</textarea>
        @if( $errors->has('opinion'))
         <p class="error-message">{{ $errors->first('opinion') }}</p>
        @endif
      </div>
    </div>

    <div class="submit-btn"><input type="submit" value="確認" name="submit"></div>
  </form>
</body>
</html>