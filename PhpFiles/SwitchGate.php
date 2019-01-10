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
            <h4>Switch gate class : <small><?php echo __FILE__; ?> </small></h4>
          </div>
          <div class="code-result">
            <!-- Code below -->
            <form action="" method="post" accept-charset="utf-8">
              <select name="option" >
                <option value="0"> Select an Option</option>
                <option value="1"> Insert</option>
                <option value="2"> Update</option>
                <option value="3"> Delete</option>
              </select>
              <button type="submit" name="submit" value="insert"
              class="btn btn-sm btn-success"> Submit</button>
            </form><br>
            <?php
            define("BR", "<br>");
            class SwitchGate
            {
                public function __construct()
                {
                    if (isset($_POST['submit'])) {
                        $value = $_POST['option'];
                        switch ($value) {
                            case 0:
                                echo 'Please Select an option value then submit !!!';
                                break;
                            case 1:
                                echo 'Number one: '.$value;
                                break;
                            case 2:
                                echo 'Number two: '.$value;
                                break;
                            case 3:
                                echo 'Number three: '.$value;
                                break;
                            default:
                                echo 'Number does not match';
                                break;
                        }
                    }
                }
            }
            $switch = new SwitchGate();
            ?>
            <!-- Code above -->
          </div>
        </div>
      </div>
        <?php include_once('../partials/_footer.php'); ?>
    </div>
  </body>
</html>
