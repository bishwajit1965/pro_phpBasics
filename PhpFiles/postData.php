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
                        <h4>Master class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                    <!-- Code below -->

                    <?php

                    define("BR", "<br>");
                    class Master
                    {

                        public $name="ASDDS";
                        public $address ;
                        public $country ;

                        public function __construct($data)
                        {
                            $this->name = $data;
                            $this->name = $data['name'];
                            return $this->name;
                        }
                    }
     
                    $class_object = new Master("ADF");
                    
                    ?>
                    <form action="" method="post" accept-charset="utf-8">
                        
                        <input type="text" name="name">
                        <input type="submit" name="" value="Submit">
                    </form> 

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once('../partials/_footer.php');?>
        </div>   
    </body>
</html>
