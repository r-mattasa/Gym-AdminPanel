<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - add questions</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

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
                         <small>  Add Questions</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                             <li class="active">
                                <i class="fa fa-edit"></i>Add Questions
                            </li>
                        </ol>
                    </div>
                </div>
                          <div class="row">
              <div class="col-lg-3">
                       <form role="form">
                           
                             <div class="form-group">
                                <label>Enter your question </label>
                                <input class="form-control" id="question_id" placeholder="Enter question">
                            </div>
                             <div class="form-group">
                                <label>Select a group to add the question</label>
                                <select class="form-control" id="group_id">
                                    <option>Select group </option>
                                    <option id="1">group 1</option>
                                    <option id="2">group 2</option>
                                    <option>group 3</option>
                                    <option>group 4</option>
                                    <option>group 5</option>
                                </select>
                            </div>
                           <button type="submit" class="btn btn-default">Add </button>
                       </form>
                       <br>
                       <br>
                   </div>
                     <div class="col-lg-3">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Groups</h4>                               
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">Gym equipments </h4>
                                <p class="list-group-item-text">has 5 questions .</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">Gym Service</h4>
                                <p class="list-group-item-text">has 3 questions.</p>
                            </a>
                                            <a href="#" class="list-group-item ">
                                <h4 class="list-group-item-heading">Gym environment</h4>
                                <p class="list-group-item-text">has 5 questions.</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            </a>
                        
                        </div>
                       <br>
                       <br>
                   </div>
                </div>
                <!-- /.row --> 
               <!-- column text input-->
         
                <!-- /.feedback stmt -->
              
          
                <!-- /.row -->
              
              
      
                <!-- /.row -->
      
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

  
    <!-- Bootstrap Core JavaScript -->
     <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
