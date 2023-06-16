<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>무제 문서</title>
</head>

<body>
	<?php
		if($_POST['userid'] == '이우정' && $_POST['userpw'] == 'a123'){
			echo '로그인 성공';
		}else{
			echo '로그인 실패';
		}
	?>
</body>
</html>
