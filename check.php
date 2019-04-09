<?php
//入力フォームから送信されてきたデータをPHPが受け取り、各変数へ代入、画面表示へ利用する。
	$yourname=htmlspecialchars($_REQUEST['yourname'], ENT_QUOTES);

	$tel=mb_convert_kana(
	htmlspecialchars($_REQUEST['tel1'], ENT_QUOTES).'-'.
	htmlspecialchars($_REQUEST['tel2'], ENT_QUOTES).'-'.
	htmlspecialchars($_REQUEST['tel3'], ENT_QUOTES), 'a', 'UTF-8');
	
	$zip=mb_convert_kana(
	htmlspecialchars($_REQUEST['post1'], ENT_QUOTES).'-'.
	htmlspecialchars($_REQUEST['post2'], ENT_QUOTES), 'a', 'UTF-8');

	$todoufuken=htmlspecialchars($_REQUEST['todoufuken'], ENT_QUOTES);
    $jyusho=htmlspecialchars($_REQUEST['jyusho'], ENT_QUOTES);
	$koumei=htmlspecialchars($_REQUEST['koumei'], ENT_QUOTES);
	$question=htmlspecialchars($_REQUEST['question'], ENT_QUOTES);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>講座のお申し込み確認</title>
<style>
	span{
	color:red;
	}
</style>
</head>
<body>
<fieldset>
<legend><strong>講座のお申し込み確認</strong></legend>
<p><?php print($yourname) ?>様の登録内容は、下記の内容でよろしいでしょうか？</p>
<dl>
	<dt>氏名：</dt>
	<dd>
		<?php
			if($yourname == ""){
				print '<span>入力されていません！</span>';
			}else{
				print($yourname) ;
			}	
		?>
	<dd>
	<dt>電話：</dt>
	<dd>
		<?php
			if($tel == 0){
				print '<span>入力されていません！</span>';
			}else{
				print($tel) ;
			}	
		?>
	</dd>
	<dt>郵便番号：</dt>
	<dd><?php print($zip) ?></dd>
	<dt>都道府県：</dt>
	<dd><?php print($todoufuken) ?></dd>
	<dd><?php print($jyusho) ?></dd>
	<dt>受講校名：</dt>
	<dd><?php print($koumei) ?></dd>
	<dt>受講コース：</dt>
	<dd>
	<?php
		foreach((array)$_REQUEST['course'] as $course) {
			print(htmlspecialchars($course, ENT_QUOTES).'<br/>');
		}  
	 ?>
	</dd>
	<dt>きっかけ：</dt>
	<dd>
	<?php
		foreach((array)$_REQUEST['chance'] as $chance) {
			print(htmlspecialchars($chance, ENT_QUOTES).'<br/>');
		}
	?>
	</dd>
	<dt>ご意見・ご感想：</dt>
	<dd><?php print(htmlspecialchars($_REQUEST['question'], ENT_QUOTES)) ?></dd>
	<br />
</dl>
<p>
	<input type="submit" name="btn1" id="btn1" value="確定">
	<input type="button" name="btn2" id="btn2" value="修正" onClick="history.back();">
</p>
</fieldset>
</body>
</html>
