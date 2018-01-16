<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>10進数→2進数変換</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="sticky-footer.css" rel="stylesheet">
</head>
<body>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$decimal = intval(htmlspecialchars($_POST['decimal']));
			$a = $decimal;
			$arr = [];
			while (true) {
				$b = $a%2;
				$arr[] = $b;
				$a = floor($a/2);
				if ($a == 0) {
					break;
			    }
			}
			$result = array_reverse($arr);
			$output = implode("", $result);
		}
	?>
	<div id="wrap">
		<div class="container">
			<div class="page-header text-center">
				<h3>10進数→2進数</h1>
				<p>10進数から2進数へ変換します。</p>
			</div>
			<div class="text-center">
				<form action="index.php" method="post" class="form-inline">
					<div class="form-group mx-sm-3">
						<input type="text" class="form-control" placeholder="10進数" name="decimal" value="<?php echo $_POST['decimal']; ?>">
					</div>
					<button type="submit" class="btn btn-primary">変換</button>
					<div class="form-group mx-sm-3">
						<input type="text" class="form-control" placeholder="2進数" value="<?php echo $output; ?>">
					</div>
				</form>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container text-center">
			<p class="text-muted">Created by <a href="https://github.com/sho23">Sho23</a></p>
		</div>
	</footer>
</body>
</html>