<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$title ?></title>
	<style>
		h1 {
			font-size: 48pt;
			margin: 0 0 10px 0;
			padding: 0 20px;
			color: white;
			background: linear-gradient(to right, #aaa, #fff);
		}

		p {
			font-size: 14pt;
			color: #666;
		}
	</style>
</head>

<body>
	<header class="row">
		<h1><?=h($title) ?></h1>
	</header>
	<div class="row">
		<p><?=h($message) ?></p>
	</div>
</body>

</html>