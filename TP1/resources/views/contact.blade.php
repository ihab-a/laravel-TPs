<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<style type="text/css">
		*{
			text-align: center;
		}
		input, textarea{
			width: 100%;
			padding: .4rem;
			color: purple;
			border-radius: .4rem;
			border: 1px solid purple;
			margin: .4rem;
		}
		textarea{
			resize: vertical;
		}
		input[type="submit"]{
			color: purple;
			max-width: fit-content;
		}
		input[type="submit"]:hover{
			background-color: #000;
		}
		form{
			display: flex;
			flex-direction: column;
			height: fit-content;
			width: fit-content;
			position: relative;
			inset: 0;
			margin: auto;
			align-items: center;
			justify-content: center;
		}
	</style>
</head>
<body>
  <h1 style="text-align: center;">TP1 Contact</h1>

	<form action="/thanks" method="POST">
		@csrf
		<input type="text" name="name" placeholder="name" />
		<input type="text" name="email" placeholder="email" />
		<textarea type="" name="msg" placeholder="msg" ></textarea>
		<input type="submit" value="ok"/>
	</form>
</body>
</html>