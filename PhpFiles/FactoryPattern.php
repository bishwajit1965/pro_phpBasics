<!doctype html>
<html class="no-js" lang="">
    <?php include_once '../partials/_head.php'; ?>
    <body>
        <div class="container">
        <?php include_once '../partials/_header.php'; ?>
            <div class="row">
                <?php include_once '../partials/_sidebar.php'; ?>
                <div class="col-sm-9">
                    <div class="row links-heading">
                        <h4>Master class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                    <!-- Code below -->

                    <?php

                    define('BR', '<br>');

                    class Automobile
                    {
                        private $vehicleMake;
                        private $vehicleModel;

                        public function __construct($make, $model)
                        {
                            $this->vehicleMake = $make;
                            $this->vehicleModel = $model;
                        }

                        public function getMakeAndModel()
                        {
                            return $this->vehicleMake.' '.$this->vehicleModel;
                        }
                    }

                    class AutomobileFactory
                    {
                        public static function create($make, $model)
                        {
                            return new Automobile($make, $model);
                        }
                    }

                    // have the factory create the Automobile object
                    $veyron = AutomobileFactory::create('Toyota Corolla', 'Mercedes Benz');

                    echo $veyron->getMakeAndModel(); // outputs "Bugatti Veyron"

                    ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once '../partials/_footer.php'; ?>
        </div>
    </body>
</html>
