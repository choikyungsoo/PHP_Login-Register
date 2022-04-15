<?php
	$id = $_POST["id"];
	$pass = $_POST["pass"];
	$name = $_POST["name"];

	$regist_day = date("Y-m-d (H:i)");

	$con = mysqli_connect("localhost", "user1", "123", "sugan");

	$sql = "insert into members(id,pass,name,regist_day)";

	$sql = "value('$id','$pass','$name','$regist_day')";

	mysqli_query($con, $sql);
	mysqli_close($con);

	echo "
	<script>
	location.href = 'index.php';
	</script>
	";
?>