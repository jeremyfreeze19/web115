<!doctype html>
<html>
	<head>
		<title>PHP include</title>
		<style>
			body{
				background-color:rgba(225,225,225,1.00);
				margin:0px auto;
				
			}
			h1{
				text-align:center;
				padding-top:25%;
				
			}
			
			#container{
				width:960px;
				min-height:600px;
				background-color:rgba(251,251,251,1.00);
				font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
				margin:0px auto;
					
			}
			main{
				min-height:500px;
			}
			footer{
				min-height:50px;
				background-color:rgba(255,255,255,1.00);
				width:960px;
				margin:0px auto;
			}
		</style>
    </head>

	<body>
		<div id="container">
        	<h1> Sup. </h1>
        </div>
        <footer>
        	<?php include 'footer.php';?>
        </footer>
	</body>
</html>