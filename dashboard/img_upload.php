<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/add_group_popup.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/sb-admin/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>

    </script>
        

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
   <?php include "navbar_header.php";?>
            <!-- Top Menu Items -->
         <?php include "TopmenuItems.php";?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php require 'side_navbar.html';  ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">


            <div class="container-fluid">

       <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <small> Edit/Update Questions</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"><a href="index.php">Dashboard</a></i>  
                        
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row --> 
        
               
   <div class="row col-lg-12">
       <div class="panel panel-primary">
       <div class="panel-heading">
           Image Gallery
       </div>
      <div class="panel-body">
      <div class="col-lg-3 col-sm-4 col-xs-6">
         
          <a title="Image 1" href="#"><img class="thumbnail img-responsive" id="image1" width="600" height="350"  src="../img/gym4.jpg"></a>
           <span id="chkdel" style="display:none;"><input type="checkbox"/></span>
     </div>
          <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 2" href="#"><img class="thumbnail img-responsive" id="image2" width="600" height="350" src="../img/gym5.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 3" href="#"><img class="thumbnail img-responsive" width="600" height="350"  src="../img/gym4.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 4" href="#"><img class="thumbnail img-responsive" width="600" height="350"  src="../img/gym5.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 5" href="#"><img class="thumbnail img-responsive" width="600" height="350"  src="../img/gym4.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 6" href="#"><img class="thumbnail img-responsive" width="600" height="350"  src="../img/gym5.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 8" href="#"><img class="thumbnail img-responsive" width="600" height="350"  src="../img/gym4.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 9" href="#"><img class="thumbnail img-responsive"  width="600" height="350" src="../img/gym5.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 10" href="#"><img class="thumbnail img-responsive"  width="600" height="350" src="../img/gym4.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 11" href="#"><img class="thumbnail img-responsive" width="600" height="350"  src="../img/gym5.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 12" href="#"><img class="thumbnail img-responsive" width="600" height="350" src="../img/gym4.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 12" href="#"><img class="thumbnail img-responsive" width="600" height="350" src="../img/gym5.jpg"></a></div>
       </div>
  
       <div class="panel-footer"></div>
       </div>
           
   </div>
<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title"></h3>
	</div>
	<div class="modal-body">
	<div id="modalCarousel" class="carousel">
          <div class="carousel-inner"></div>
          <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>
 
            <!-- /.container-fluid -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

  
    <!-- Bootstrap Core JavaScript -->
     <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="../js/add_group.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>


