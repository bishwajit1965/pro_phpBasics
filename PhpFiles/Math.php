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
                        <h4>Math class : <small><?php echo __FILE__; ?> </small></h4>
                    </div>
                    <div class="row code-result">
                        <div class="col-sm-4">
                            <form action="" method="post" accept-charset="utf-8">
                                <div class="form-group">
                                    <input type="text" name="banglacq" placeholder="Bangla CQ" class="form-control" value="<?= isset($_POST['banglacq']) ? $_POST['banglacq'] : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="banglamcq" placeholder="Bangla MCQ" class="form-control" value="<?= isset($_POST['banglamcq']) ? $_POST['banglamcq'] : ''; ?>">
                                </div>
                                <button type="submit" name="submit" class="form-group btn btn-primary btn-md">Submit</button>
                                <button type="reset-data" class="form-group btn btn-warning btn-md">Refresh</button>
                            </form>
                            <?php
                            define("BR", "<br>");
                                
                            class Math
                            {
                                private $banglacq;
                                private $banglamcq;
                                public function setBanglacq($banglacq)
                                {
                                    $this->banglacq = $banglacq;
                                }
                                public function getBanglacq()
                                {
                                    return $this->banglacq;
                                }

                                public function setBanglamcq($banglamcq)
                                {
                                    $this->banglamcq = $banglamcq;
                                }
                                public function getBanglamcq()
                                {
                                    return $this->banglamcq;
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
                                
                            ?>
                        </div>
                        <div class="col-sm-8">
                            <!-- Code below -->
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>BanglaCQ</th>
                                        <th>BanglaMCQ</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $object = new Math();
                                    if (isset($_POST['submit'])) {
                                        $bcq = $object->setBanglacq($_POST['banglacq']);
                                        $bmcq = $object->setBanglamcq($_POST['banglamcq']);

                                        if (empty($_POST['banglacq'])) {
                                            echo '<span style="color:red;">Bangla cq field is empty!</span>'.'<br>';
                                        } elseif (!is_numeric($_POST['banglacq'])) {
                                            echo '<span style="color:red;">Insert numbers only in BanglaCQ</span>' .'<br>';
                                        }
                                        if (empty($_POST['banglamcq'])) {
                                            echo '<span style="color:red;">Bangla mcq field is empty!</span>'.'<br>';
                                        } elseif (!is_numeric($_POST['banglamcq'])) {
                                            echo '<span style="color:red;">Insert numbers only in BanglaMCQ</span>' .'<br>';
                                        } else { ?>
                                            <tr>
                                                <td><?php  echo $object->getBanglacq();?></td>
                                                <td><?php  echo $object->getBanglamcq();?></td>
                                                <td>
                                                <?php $total = $object->getBanglacq() + $object->getBanglamcq();
                                                echo $total;
                                                if ($total >= 33 && $total <= 100) {
                                                    echo 'You have passed out.';
                                                }
                                                ?>   
                                                </td>    
                                            </tr>
                                        <?php }
                                    }
                                    ?> 
                                </tbody>
                            </table>
                            
                        </div>
                        <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once('../partials/_footer.php'); ?>
        </div>
    </body>
</html>
