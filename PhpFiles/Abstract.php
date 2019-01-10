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
                        <h4>Abstract class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                        <!-- Code below -->

                    <?php

                    define("BR", "<br>");
                     
                    abstract class Calculator
                    {
                        
                        protected $base = 10;
                        protected $height = 15;
                        protected $radius = 5;

                        abstract public function CalculateArea();
                    }

                    class Circle extends Calculator
                    {
                        public function CalculateArea()
                        {
                            return 'The area of the circle is: '.($this->radius * $this->radius) * pi(). ' square meters'.BR;
                        }
                    }

                    class Rectangle extends Calculator
                    {
                        public function CalculateArea()
                        {
                            return 'The area of the rectangle is: '. $this->base * $this->height .' square meters'.BR;
                        }
                    }

                    class Triangle extends Calculator
                    {
 
                        public function CalculateArea()
                        {
                            return 'The area of the triangle is: '. .5 * $this->base * $this->height .' square meters'.BR;
                        }
                    }

                    $circle = new Circle;
                    echo $circle->CalculateArea();

                    $rect = new Rectangle;
                    echo $rect->CalculateArea();
                    
                    $triangle = new Triangle;
                    echo $triangle->CalculateArea();
                     
                    ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once('../partials/_footer.php'); ?>
        </div>   
    </body>
</html>
