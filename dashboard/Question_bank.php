<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FeedBack Admin template</title>

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
        <?php include("navbar_header.php");?>
            <!-- Top Menu Items -->
         <?php include("TopmenuItems.php");?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("side_navbar.html"); ?>
            <!-- navbar-collapse -->
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
                        </ol>
                    </div>
                </div>
                <!-- /.row --> 
               <!-- column text input-->
               <div class="row">
                   <div class="col-lg-12">
                            <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th><label>
                                        <input type="checkbox" value=""> </label></th>
                                        <th>Questions</th>
                                        <th>Group</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""></label></td>
                                        <td><?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'; ?> </td>
                                          <td>group 1</td>
                                          <td>     <a href="edit_questions.php"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td> <a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                      
                                       
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""></label></td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </td>
                                          <td>group 2</td>
                                        <td> <a href="#"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""> </label></td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </td>
                                          <td>Group 3</td>
                                        <td>     <a href="#"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""> </label></td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </td>
                                          <td>Group 4</td>
                                        <td>     <a href="#"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""> </label></td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </td>
                                          <td>Group 1</td>
                                        <td>  <a href="#"> <span class="glyphicon glyphicon-pencil"></span>  </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                       <br>
                       <br>
                       
                   </div>
                        
                       <br>
                       <br>
                   </div>
               </div>
                <!-- /.feedback stmt -->
              
          
                <!-- /.row -->
              
                    </div>
                      
                    
                      
                </div>
                
          
                    </div>
                </div>
      
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
