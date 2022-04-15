<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>명지대 회원가입</title>
	<link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
	<script src="registerjs.js"></script>
	<style> @import url(registerCss.css);</style>
</head>
<body>
<header>
	<a href="http://localhost/register.php"><img class="logo" src="images/registerlogo.png"></a>
</header>
<section>
	<form name="member_form" method="post" action="member_insert.php">
	
	<span>아이디</span><br>
	<input class = "underline" type="text" name="id">

	<input type="submit" class="gunbok" value=" " name="" onclick="check_id()"><br><br>
	
	<span>비밀번호</span><br>
	<input class = "underline2" type="password" name="pass"><br><br>
	
	<span>비밀번호 확인</span><br>
	<input class = "underline3" type="password" name="pass_confirm"><br><br>
	
	<span>사용자 이름</span><br>
	<input class = "underline2" type="text" name="name"><br><br><br>
	
	<input type="submit" class="join" value=" " name="" onclick="check_input()" >
</form>
</section>
<footer>
	
</footer>
</body>
</html>