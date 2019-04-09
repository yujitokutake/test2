<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>フォーム2b</title>
</head>

<body>
<form action="check.php" method="post">
<table width="500" border="1">
<caption>
講座のお申し込みについて
</caption>
 <tr>
  <th>お名前</th>
  <td>
   <input type="text" id="yourname" name="yourname" size="20" maxlength="20">
  </td>
 </tr>
 
 <tr>
  <th>お電話番号</th>
  <td>
   <input type="text" name="tel1" id="tel1" size="4" maxlength="4">
   -
   <input type="text" name="tel2" id="tel2" size="3" maxlength="3">
   -
   <input type="text" name="tel3" id="tel3" size="4" maxlength="4">
  </td>
 </tr>
 
 <tr>
  <th>ご住所</th>
  <td>郵便番号
   <input type="text" name="post1" id="post1" size="3" maxlength="3">
   -
   <input type="text" name="post2" id="post1" size="4" maxlength="4">
  </td>
 </tr>
 <tr>
  <th>都道府県</th>
  <td>
   <select name="todoufuken" id="todoufuken">
    <option value="奈良">奈良</option>
    <option value="大阪">大阪</option>
    <option value="兵庫">兵庫</option>
    <option value="和歌山">和歌山</option>
    <option value="滋賀">滋賀</option>
    <option value="三重">三重</option>
    <option value="京都">京都</option>
   </select>
 </td>
 </tr>

 <tr>
  <th>それ以降</th>
  <td>
   <input type="text" name="jyusho" id="jyusho" size="30">
  </td>
 </tr>

<tr>
  <th>受講校名</th>
  <td>
   <label>  
    <input type="radio" name="koumei" value="鶴橋校"checked="checked">鶴橋校
   </label>
   <label>  
    <input type="radio" name="koumei" value="布施校">布施校
   </label>
   <label>  
    <input type="radio" name="koumei" value="上本町校">上本町校
   </label>
  </td>
 </tr>

<tr><th>受講コース<br>※複数選択可</th>
<td>
  <label>  
    <input type="checkbox" name="course[]" value="Word"
    checked="checked">Word
  </label>
  <label>  
    <input type="checkbox" name="course[]" value="Excel">Excel
  </label>
  <label>
    <input type="checkbox" name="course[]" value="PowerPoint">PowerPoint
  </label>
  <label>  
    <input type="checkbox" name="course[]" value="Access">Access
  </label>
</td>
</tr>

<tr>
  <th>知ったきっかけ<br />※複数選択可</th>
  <td>
   <select name="chance[]" size="4" multiple="multiple">
    <option value="新聞">新聞</option>
    <option value="テレビ">テレビ</option>
    <option value="ラジオ">ラジオ</option>
    <option value="雑誌">雑誌</option>
   </select>
  </td>
</tr>

<tr>
  <th>ご質問</th>
  <td>
   <textarea name="question" id="question" cols="45" rows="5"></textarea>
  </td>
 </tr>
 

 <tr>
  <th>
   <input type="submit" name="soushin_btn" id="soushin_btn" value="送信">
  </th>
  <td>
   <input type="reset" name="reset_btn" id="reset_btn" value="リセット">
  </td>
 </tr>
</table>
</form>
</body>
</html>
