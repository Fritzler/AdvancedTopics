<footer>
	<div id="copyright">
		<?php 
			$copyYear = 2013; //Start Date
			$curYear = date('Y'); //Second Year
			echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
		?>
		Copyright.
	</div>
	
	<div id="sources">
		<a href="sources.php">Sources</a>
	</div>
	
	<div id="">
		<span>Harry's Hot Sauce</span>
	</div>
</footer>