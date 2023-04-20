<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nazwa artykułu</title>
    <link rel="stylesheet" href="../../assets/main-v1.css">
    <link rel="shortcut icon" href="../../assets/img/Ikona.png">
	<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
/>
</head>
<body>

	<div class="container">
	
		<header>
		
			<a href="#" class="logo"><img src="../../assets/logo.png" alt="logo"></a>
				<div class="nav">
				<ol>
					<li><a href="#">Strona główna</a></li>
					<li><a href="#">Kategorie</a>
						<ul>
							<li><a href="#">Uczeń</a></li>
							<li><a href="#">Nauczyciel</a></li>
						</ul>
					</li>
					<li><a href="#">Lata</a>
						<ul>
							<li><a href="#">2019</a></li>
							<li><a href="#">2020</a></li>
							<li><a href="#">2021</a></li>
							<li><a href="#">2022</a></li>
						</ul>
					</li>
					<li><a href="#">Kraje</a>
						<ul>
							<li><a href="#">Grecja</a></li>
							<li><a href="#">Niemcy</a></li>
							<li><a href="#">Irlandia</a></li>
							<li><a href="#">Hiszpania</a></li>
							<li><a href="#">Portugalia</a></li>
							<li><a href="#">Szwecja</a></li>
						</ul>
					</li>
					<li><a href="#">Informacje</a>
						<ul>
							<li><a href="#">Obostrzenia</a></li>
							<li><a href="#">Wymagania</a></li>
						</ul>
					</li>
				</ol>
			
			</div>
		</header>
	
		<main>
		
			<article>
				
				<?php 
     				echo file_get_contents("eugiat.htm");
					
				?>
				<script>

					function addText() {
    				var input = document.getElementById('something');
    				input.value = input.value + 'jacek';
                    }
				</script>
					<form name="frm1" action="?" onsubmit="addText()">

  					<p>Message</p>
  					<textarea id="angryarea" name="Message" cols="100" rows="10" id="something"onsubmit="addText()"maxlength="30"></textarea> 
					

  					<button type="button" id="URGENT" onclick="addText()">Enter</button>
  					<input type="submit" value="SUBMIT" id="SUBMIT"/>
					</form>

				







				<div class="flagi">
				<span class="fi fi-gr"></span> 
				<span class="fi fi-de"></span> 
				<span class="fi fi-ie"></span> 
				<span class="fi fi-es"></span> 
				<span class="fi fi-pt"></span> 
				<span class="fi fi-se"></span> 
				</div>
			<br><br>
			</article>
			
		</main>
		
		<footer class="stopka">
					2023 &copy; Stopka <a class="strona" href="https://zsl.gliwice.pl/" target="_blank">zsl.gliwice.pl</a>

		</footer>
		
	</div>
	<script src="assets/jquery-1.11.3.min.js"></script>
<script>

		$(document).ready(function() {
		var NavY = $('.nav').offset().top;
		 
		var stickyNav = function(){
	
			  
		if (ScrollY > NavY) { 
			$('.nav').addClass('sticky');
		} else {
			$('.nav').removeClass('sticky'); 
		}
		};
		 
		stickyNav();
		 
		$(window).scroll(function() {
			stickyNav();
		});
		});
		
	</script>
</body>
</html>