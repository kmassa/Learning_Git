<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>

<html>
	<meta charset="utf-8">

	<head>
		<title> Let's Play </title>
	</head>
 <header>
	<h1> Let's play </h1>
 	
	<nav>
		<ul>
			<li> <a href="http://usagym.org"> usa gymnastics <a></li>
		</ul>
	</nav>
</header>

<main>

	<h2> What's what </h2>


	<form method="post" Action="/lets_play.php">

		<label for="name"> name </label>
		<input id="name" name="name" type="text" placeholder="name">
		<button> input </button>

	<h2> Definitions </h2>
	<dl>
		<dt> Foose </dt>
		<dd> toe pitch to low hand </dd>
	</dl>

	<table>
		<tr>
			<th> Level </th>
			<th> group type </th>
		</tr>

		<tr>
			<td> 8 </td>
			<td> WG </td>
		</tr>
		<tr>
			<td> 10 </td>
			<td> MP </td>
		</tr>

	</table>

	<section> 
		<h3> Photo's </h3>
		<img src="img/boys.jpg" alt="boys"> <img>
	</section>

	<article>
		<h3> story on boys </h3>
		<p> the boys competed last year 
		</p>
		<a href="#"> read more </a>
	</article>

</main>

</html>


