<?php
ini_set('display_errors', 1);
if ( ! empty($_POST)) {
    require(__DIR__ . '\Exercise\Validate.php');
    $number = $_POST['number'];
    $validate = new \Exercise\Validate();
    //Implement number validation logic
    $returnedvalue = $validate->Add($number);
}
?>
<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>String Calculator</title>
</head>
<body>
<div class="container">
  <div class="py-5 text-center">
    <h2>String Calculator</h2>
    <p class="lead">Validating Calculator</p>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form id="add_form" class="needs-validation" method="post">
        <div class="row">
          <div class="col-md-12">
            <label for="number">String Number</label>
            <input type="text" class="form-control" id="number" name="number" title="String Number" placeholder="Input String Number">
          </div>
        </div>
        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Add">
      </form>
        <?php
        if (isset($returnedvalue)) {
            echo '<br /><span style="color:#ff0000;font-size:30px;" size="6">Addition = ' . $returnedvalue . '</span>';
        }
        ?>
      <br>
      <br>
      <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/calculator-exercise/web/Exercise/Test.php">Run All Unit Tests</a>
    </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy <?php echo date('Y'); ?></p>
  </footer>
</div>
</body>
</html>