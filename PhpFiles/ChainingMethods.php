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

                    if (isset($_POST['submit'])) {
                        $object = new Master();

                        if ($_POST['bangla'] == '') {
                            echo '<div class= "alert alert-danger">Bangla field is blank!</div>';
                        } else {
                            $object->setBangla($_POST['bangla']);
                        }

                        if ($_POST['english'] == '') {
                            echo '<div class= "alert alert-danger">English field is blank!</div>';
                        } else {
                            $object->setEnglish($_POST['english']);
                        }
                        if ($_POST['math'] == '') {
                            echo '<div class= "alert alert-danger">Math field is blank!</div>';
                        } else {
                            $object->setMath($_POST['math']);
                        }

                        echo ' Bangla  : '.$object->getBangla();
                        echo ' English : '.$object->getEnglish();
                        echo ' Math    : '.$object->getMath();
                        echo BR;

                        if ($object->getBangla() !== '' || $object->getEnglish() !== '' || $object->getMath() !== '') {
                            echo 'The total number is: ';
                            echo $data = $object->getBangla() + $object->getEnglish() + $object->getMath();
                        }
                        if ($data) {
                            echo '<div class="alert alert-success">
                                WOW!!! data is calculated successfully!</div>';
                        } else {
                            echo "<div class='alert alert-danger'>
                                SORRY!!! calculated total number is = {$data} !</div>";
                        }
                    }

                    ?>

                    <form action="" class="form" method="post" accept-charset="utf-8">
                        <input type="text" name="bangla" placeholder="Enter bangla....." class="form-control form-group">

                        <input type="text" name="english" placeholder="Enter english....." class="form-control form-group">

                        <input type="text" name="math" placeholder="Enter math....." class="form-control form-group">

                        <button type="submit" name="submit" class="form-group btn-secondary">Submit</button>
                    </form>

                    <?php

                    class Master
                    {
                        public $data;
                        public $bangla;
                        public $English;
                        public $math;

                        public function setBangla($bangla)
                        {
                            $this->bangla = $bangla;
                        }

                        public function getBangla()
                        {
                            return $this->bangla;
                        }

                        public function setEnglish($English)
                        {
                            $this->English = $English;

                            return $this;
                        }

                        public function getEnglish()
                        {
                            return $this->English;
                        }

                        public function setMath($math)
                        {
                            $this->math = $math;

                            return $this;
                        }

                        public function getMath()
                        {
                            return $this->math;
                        }
                    }

                    ?>

                    <!-- Code above -->
                    </div>
                </div>
            </div>
            <?php include_once '../partials/_footer.php'; ?>
        </div>
    </body>
</html>
