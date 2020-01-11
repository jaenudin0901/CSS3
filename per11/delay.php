<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style >
	.container{
	width: 900px;
	margin:10px auto;
	border: 5px solid red;
}
	.kotak {
		width: 100px;
		height: 100px;
		background-color: blue;
		text-align: center;
		line-height: 100px;
		margin: 5px 0;
		transition: margin-left 3s, transform 3s 2s, background-color 2s 3s;
			
	}
	.container:hover .kotak{
		transform: rotate(720deg);
		margin-left: 800px;
		background-color: yellow;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="kotak"></div>
	</div>

</body>
</html>