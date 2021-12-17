<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h2 class="title">内容確認</h2>
  <form action="{{ route('contact.send') }}" method="post">
    @csrf
    <table>
      @foreach($create as $create)
      <tr>
        <th>お名前</th>
        <td>
          <input type="text" name="name" value="{{ $create->name }}">
        </td>
      </tr>

      <tr>
        <th>性別</th>
        <td>
          <input type="text" class="sex" value="{{ $create->gender }}">
        </td>
      </tr>

      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="text" class="email" value="{{ $create->email }}">
        </td>
      </tr>

      <tr>
        <th>郵便番号</th>
        <td>
          <input type="text" class="postcode" value="{{ $create->postcode }}">
        </td>
      </tr>

      <tr>
        <th>住所</th>
        <td>
          <input type="text" class="address" value="{{ $create->address }}">
        </td>
      </tr>

      <tr>
        <th>建物名</th>
        <td>
          <input type="text" class="building_name" value="{{ $create->building_name }}">
        </td>
      </tr>

      <tr>
        <th>ご意見</th>
        <th>
          <input type="text" class="opinion" value="{{ $create->opinion }}">
        </th>
      </tr>
      @endforeach
    </table>
    <button class="confirm-submit">送信</button>
    <div class="fix">
      <a href="">修正する</a>
    </div>
  </form>
</body>
</html>