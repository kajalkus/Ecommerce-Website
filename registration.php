<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <style type="text/css">
    
    body{
    background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
    }
    </style>
  </head>
  <body>
    <div class="container" style="margin-top: 5%;">
      <div class="row">
        <div class="col-sm-4"> </div>
        <div class="col-md-4">
          
          <h1 class="text-center text-success"> Register page</h1>
          <br/>
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              
              <form action="database.php" method="POST">
                <div class="form-group">
                  <label for="UserName">Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                
                <div class="form-group">
                  <label for="email">Email-address:</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" name="password">
                </div>
                <div class="form-group">
                  <label for="pwd">Confirm-Password:</label>
                  <input type="password" class="form-control" id="pwd" name="password1">
                </div>
                <button type="submit" class="btn btn-default btn-lg">Submit</button>
                <button type="submit" class=" pull-right btn-link"><a href="forget-password.php">Forget password</a></button>
              </form>
              <br/>
              <a href="login.php" class="pull-right btn btn-block btn-danger" > Already Register ?   </a>
            </div>
            <div id="menu1" class="tab-pane fade">
              <br/>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
