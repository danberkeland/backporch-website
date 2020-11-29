<?php
require_once 'mailer.php';


if(isset($_POST['submit'])) 
{ 
 
    $email = $_POST['InputEmail'];
  $msg = $_POST['message'];
  $subject = "Email Test for Waloan.com";

//  var_dump($_REQUEST);

  $testmail = sendEmail($msg, $subject,$email);
echo $testmail;
  if($testmail) {
      echo "Mail Sent Successfully";
      echo "<br/>";
      echo $testmail;
  }



}
?>

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>


<body>
    <div class="header">
        <h2 class="text-center">Email Tester</h2>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-6 justify-content-center mt-5 pt-5">
<form class="justify-content-center" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="InputEmail">Sent to Email address</label>
    <input type="email" class="form-control" name="InputEmail" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="message">message</label>
    <input type="text" class="form-control" name="message" id="message" placeholder="Enter a Test Message">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Test Email</button>
</form>

            </div>
        </div>
    </div>


</body>


<footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</footer>
</html>
