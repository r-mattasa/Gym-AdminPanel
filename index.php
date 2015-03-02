  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Custom styles for this template -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="../../js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      

      <div class="container" style=" width: 360px; height: 450px; 
          // padding-top: 10px;" > 
          <div class="row">
              <div class="col-lg-12">
             
          <form class="form-signin" style="background-color: #49afcd; box-shadow: 10px 10px 0px 0px black;border: 15px solid white;font-size: 20px; color: white" method="POST">
              <h2 class="form-signin-heading"> Log In</h2>
        
              <p>Username
                  <input type="text" id="email" class="form-control" placeholder="Enter your username"  autofocus></p> 
            
              <p>Password
            <input type="password" id="password" class="form-control" placeholder="Password" ></p> 
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="login" id="login" type="submit" >Sign in</button>
        <div id="error"></div> 
      </form>
                  </div>
      </div>

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug
    <script src="../js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
</html>
