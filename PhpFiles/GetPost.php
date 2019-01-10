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
                        <h4>Super globals class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="code-result">
                    <!-- Code below -->
                        <?php

                        define("BR", "<br>");
                             
                        class SuperGlobals
                        {
                            protected $name ;
                            protected $address ;

                            public function setName($name)
                            {
                                $this->name = $name;
                            }
                            public function setAddress($address)
                            {
                                $this->address = $address;
                            }

                            public function getName()
                            {
                                return $this->name .BR;
                            }
                            public function getAddress()
                            {
                                return $this->address .BR;
                            }

                            /**----------------------------------------
                            |Validates Input data
                            |------------------------------------------
                            **/
                            public function validate($data)
                            {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }
                        }
                             
                        $object = new SuperGlobals();
                        if (isset($_POST['submit'])) {
                            $name = $object->setName($_POST['name']);
                            // Validation
                            $object->validate($name);

                            $address = $object->setAddress($_POST['address']);
                            
                            // Validation
                            $object->validate($address);
                            if ($_POST['name'] == '') {
                                $message = '<span style="color:red; font-weight:bold;">Name field is left blank! Fill uip the field and submit.<br></span>';
                                echo $message;
                            } elseif ($_POST['address'] == '') {
                                $message = '<span style="color:red; font-weight:bold;">Address field is left blank! Fill uip the field and submit.<br></span>';
                                echo $message;
                            } else {
                                echo $object->getName();
                                echo $object->getAddress();
                            }
                        }

                        ?>
                        <form action="" method="POST" accept-charset="utf-8">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="" placeholder="Name...">
                            </div>

                            <div class="form-group">
                                <input type="text" name="address" class="form-control" value="" placeholder="Address...">
                            </div>
                            
                             <div class="form-group">
                                <button type="submit" class="btn btm-md btn-primary" name="submit">Submit</button>
                                <button type="reset-data" class="btn btm-md btn-warning">Refresh</button>
                             </div>
                        </form>      
                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once('../partials/_footer.php'); ?>
        </div>   
    </body>
</html>
