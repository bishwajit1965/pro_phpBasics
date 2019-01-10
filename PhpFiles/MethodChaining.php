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
        				<h4>Method chaining : <small><?php echo __FILE__; ?> </small></h4>
        			</div>
        			<div class="code-result">
        			<!-- Code below -->

					<?php

					define("BR", "<br>");
					 
					class MethodChaining
					{
					    public $dinner = 50;
					    public $desserts = 25;
					    public $coldDrinks = 20;
					    public $bill;

					    public function __construct()
					    {
					        $this->bill = 5;
					    }

					    // public function __destruct()
					    // {
					    // 	echo $this->bill;
					    // }

					    public function dinner($person)
					    {
					    	$this->bill += $this->dinner * $person;
					    	return $this;
					    }

					    public function dessert($person)
					    {
					    	$this->bill += $this->desserts * $person;
					    	return $this;
					    }

					    public function drinks($person)
					    {
					    	$this->bill += $this->coldDrinks * $person;
					    	return $this;
					    }
					}
					 
					$dinner = new MethodChaining;
					// Methods are chained
					echo 'The hotel bill amounts to : '. $dinner->dinner(4)->dessert(4)->drinks(4)->bill .'.00 Tk';
 
					?>

        			<!-- Code above -->
        			</div>
        		</div>
        	</div>
        	<?php include_once('../partials/_footer.php'); ?>
        </div>   
    </body>
</html>