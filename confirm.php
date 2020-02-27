<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" name= "viewport" content="width=device-width,initial-scale=1.0">
<title>登録確認</title>
<link rel=stylesheet href="stylesheet.css" type="text/css">
</head>
<body>
<div class="sample_area2">
<h1>登録確認</h1>
</div>
<br>
<table>
    <tr>
        <th>テスト(キー値)</th>
        <th>テスト(入力値)</th>
    </tr>
    <tr>
        <td>顧客番号</td>
        <!--セキュリティ強化のためにhtmlspecialchars($_POST["id"], ENT_QUOTES)で
        ＜＞や””を意味のない、文字列に置き換える。値を受け取るだけならecho $_POST["name"]だけでいい。-->
        <td><?php echo htmlspecialchars($_POST["id"], ENT_QUOTES)?></td>
    </tr>
    <tr>
        <td>名前</td>
        <td><?php echo htmlspecialchars($_POST["name"], ENT_QUOTES)?></td>
    </tr>    
    <tr>
        <td>性別</td>
        <td><?php echo $_POST["gender"]."";?></td>
    </tr>
    <tr>
        <td>生年月日</td>
        <td><?php echo htmlspecialchars($_POST["birthday"], ENT_QUOTES)?></td>
    </tr>
    <tr>
        <td>電話番号</td>
        <td><?php echo htmlspecialchars($_POST["phone"], ENT_QUOTES)?></td>
    </tr>
    <tr>
        <td>郵便番号</td>
        <td><?php echo htmlspecialchars($_POST["zip01"],ENT_QUOTES)?></td>
    </tr>
    <tr>
        <td>都道府県郡</td>
        <td><?php echo htmlspecialchars($_POST["pref01"],ENT_QUOTES)?></td>
    </tr>
    <tr>
        <td>市町村・番地</td>
        <td><?php echo htmlspecialchars($_POST["addr01"],ENT_QUOTES)?></td>
    </tr>
    <tr>
        <td>建物名</td>
        <td><?php echo htmlspecialchars($_POST["address3"],ENT_QUOTES)?></td>
    </tr>
    <tr>
        <td>メールアドレス</td>
        <td><?php echo htmlspecialchars($_POST["mail"],ENT_QUOTES)?></td>
    </tr>
    <tr>
        <td>職業</td>
        <td><?php echo $_POST["jobs"]."";?></td>
    </tr>
    <tr>
        <td>登録日</td>
        <td><?php echo htmlspecialchars($_POST[""],ENT_QUOTES)?></td>
    </tr>
    <tr>
        <td>備考</td>
        <td><?php echo htmlspecialchars($_POST["other"],ENT_QUOTES)?></td>
    </tr>
</table>
<br>
   <!-- ｱﾝｶｰﾘﾝｸ貼り付け
　　　　ｱﾝｶｰの中にﾎﾞﾀﾝを入れてはならない。できない-->
<p>上記の内容がよろしければ登録するを押してください</p>
<a href="final.html" class="btn-square3">登録する！</a><br>
<br>
<a href="input_form.html" class="btn-square2">入力画面に戻る</a><br>  
<br>
<a href="front.html"class="btn-square">ホームに戻る</a><br>
</form>
</body>
</html>
