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
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i>FeedBack Results
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row --> 
               <!-- column text input-->
               <div class="row">
                             <div class="col-lg-6">
                                       <div class="form-group">
                                <label>Groups</label>
                                <select class="form-control">
                                    <option id="1">Gym Equipment</option>
                                    <option id="2">Gym Service</option>
                                    <option id="3">Group 1</option>
                                    <option id="5">Group 2</option>
                                    <option id="6">Group 3</option>
                                </select>
                            </div>
                       </div>
            
               </div>
               <div class="row">
             <div class="col-lg-12">
                       <div class="table-responsive" id="questions">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th><label>
                                        <input type="checkbox" value="all"> </label></th>
                                        <th>Questions</th>
                                         <th>Great</th>
                                        <th>Good</th>
                                         <th>Poor</th>
                                         <th>Not good</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>  <label> <input type="checkbox" value=""></label></td>
                                        <td>How would you rate your overall experience so far with  Fitness gym </td>
                                         
                                        <td> 34%</td>
                                         <td> 37%</td>
                                          <td> 29%</td>
                                          <td> 25%</td>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""></label></td>
                                        <td><?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed'; ?> </td>
                                          <td> 64%</td>
                                         <td> 5%</td>
                                          <td> 19%</td>
                                          <td> 22%</td>
                                      
                                       
                                    </tr>
                             
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""> </label></td>
                                        <td>How I feel about myself as a person </td>
                                          
                                        <td> 23%</td>
                                         <td> 41%</td>
                                          <td> 36%</td>
                                          <td> 49%</td>
                                    </tr>
                             
                                  
                                </tbody>
                            </table>
                            
                        </div>
                       
                       <br>
                       
                   </div>
                        
                       <br>
                       <br>
               </div><!-- feedback12 -->
                   </div>
               
                <!-- /.feedback stmt -->
              
          
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   
    <!-- Bootstrap Core JavaScript -->
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>


