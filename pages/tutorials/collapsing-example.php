<!DOCTYPE html>
<html lang="en">
	<head>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
		<link rel="stylesheet" type="text/css" href="collapsing-styles.css">


	</head>
	<body>

	<div id="content">

<!-- Basic collapsing container in just HTML5 -->
	<div class="container" style="display: block;">
        <div class="content">
            <details>
				<summary>Thing 1</summary>
				OH MAN THERE'S MORE!
			</details>

			<details>
				<summary>Thing 2</summary>
				OH MAN THERE'S MORE!
			</details>

			 <details>
				<summary>Thing 3</summary>
				OH MAN THERE'S MORE!
			</details>
        </div>
    </div>



<!-- Now using JS...this isn't working. -->
	<input class="myButton1" type="button" value="expand"></input>
	<div class="container"></div>
	<input class="myButton2" type="button" value="expand"></input>
	<div class="container"></div>
	<input class="myButton3" type="button" value="expand"></input>
	<div class="container"></div>
	<input class="myButton4" type="button" value="expand"></input>
	<div class="container"></div>
		
	</div>

	</body>
</html>

<script>
	if (!isDetailsSupported) {
		document.documentElement.className += ' no-details';
	}
</script>