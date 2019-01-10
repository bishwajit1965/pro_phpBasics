<!doctype html>
<html class="no-js" lang="">
    <?php include_once('../partials/_head.php'); ?>
    <body>
        <div class="container">
        <?php include_once('../partials/_header.php'); ?>	
        	<div class="row">
        	 <?php include_once('../partials/_sidebar.php'); ?>	
        		<div class="col-sm-9">
        			<div class="row links-heading">
        				<h4>Interface class : <small><?php echo __FILE__; ?> </small></h4>
        			</div>
        			<div class="code-result">
        			<!-- Code below -->

					<?php

						define("BR", "<br>");
						 
						Interface CalculateArea
						{
						    public function setData($radius);
						    public function getData();
						}
	 
						Class Circle implements CalculateArea
						{
							private $radius = 5;
							 
							public function __construct()
							{
								echo 'The area of the circle is : ';
							}

							public function setData($radius)
							{
								 $this->radius = $radius;
							}

							public function getData()
							{
								return( $this->radius * $this->radius) * pi() .' square centemetres' .BR;
							}
							
						}

						Class Rectangle implements CalculateArea
						{
							private $base;
							private $height = 10;
							 
							public function __construct()
							{
								echo 'The area of the rectangle is : ';
							}

							public function setData($base)
							{
								$this->base = $base;  
							}

							public function getData()
							{
								return $this->base * $this->height .' square centemetres'.BR;
							}
							
						}

						Class Triangle implements CalculateArea
						{
							private $base;
							private $height = 10;
							 
							public function __construct()
							{
								echo 'The area of the triangle is : ';
							}

							public function setData($base)
							{
								$this->base = $base;  
							}

							public function getData()
							{
								return (.5 * $this->base) * $this->height .' square centemetres'.BR;
							}
							
						}

						Class Square implements CalculateArea
						{
							private $base;
							 
							public function __construct()
							{
								echo 'The area of the square is : ';
							}

							public function setData($base)
							{
								$this->base = $base;  
							}

							public function getData()
							{
								return $this->base  * $this->base .' square centemetres'.BR;
							}
							
						}

						$circle = new Circle();
						$circle->setData(5);
						echo $circle->getData();

						$rectangle = new Rectangle();
						$rectangle->setData(10);
						echo $rectangle->getData();

						$triangle = new Triangle();
						$triangle->setData(10);
						echo $triangle->getData();

						$square = new Square();
						$square->setData(20);
						echo $square->getData();

					?>

        			<!-- Code above -->
        			</div>
        		</div>
        	</div>
        	<?php include_once('../partials/_footer.php'); ?>
        </div>   
    </body>
</html>