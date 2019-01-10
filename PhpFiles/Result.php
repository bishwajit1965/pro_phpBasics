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
                        <h4>Make result class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                    <!-- Code below -->

                    <?php

                    define("BR", "<br>");
                         
                    class MakeResult
                    {
                            
                        private $bangMcq ;
                        private $bangCq ;
                        private $engMcq ;
                        private $engCq ;
                        private $result ;

                        public function Bangla($bangla_one, $bangla_two)
                        {
                            $this->bangMcq = $bangla_one;
                            $this->bangCq = $bangla_two;
                            return $this;
                        }

                        public function English($english_one, $english_two)
                        {
                            $this->engMcq = $english_one;
                            $this->engCq = $english_two;
                            return $this;
                        }

                        public function getResult()
                        {
                                
                            $this->result = $this->bangMcq + $this->bangCq + $this->engMcq + $this->engCq;
                            return $this->result;
                        }
                    }
     
                        $object = new MakeResult();
                        // Method chaining
                        echo 'The calculated result is : '
                        .$object->Bangla(25, 65) ->English(25, 55)->getResult();

                    ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once('../partials/_footer.php'); ?>
        </div>   
    </body>
</html>
