<div class="col-sm-3 sidebar-area">
	<div class="links-heading">
		<h4>Class file links </h4>
	</div>
	<a href="../index.php">Home Page</a>
	
	<?php
		$data = glob("../classes/*.php", GLOB_BRACE) ;
		foreach ($data as $file) 
		{
		    echo "<a href='$file'>$file</a>";
		}
	?>
</div>