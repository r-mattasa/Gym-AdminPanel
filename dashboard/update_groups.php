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
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        $(document).ready(function() {
    $('#select_all').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('#checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('#checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});
    </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.html">Welcome Admin</a>
            </div>
            <!-- Top Menu Items -->
         <?php include("TopmenuItems.php")?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("side_navbar.html") ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <small> Edit/Update groups</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                            </li>
                             <li class="active">
                                <i class="fa fa-dashboard"></i> Manage Groups
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row --> 
               <!-- column text input-->
               <div class="row">
                   <div class="col-lg-12">
                       <div class="table-responsive" id="groups">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <label>
                                        <input type="checkbox" value="select all" id="select_all"> </label></th>
                                        
                                        <th>Group</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>  <label> <input type="checkbox" value="" id="checkbox1"></label></td>
                                        <td><a href="Question_bank.php?id="><?php echo 'Gym equipement'; ?> </a></td>
                                          
                                          <td>     <a href="edit_groups.php"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td> <a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                      
                                       
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" id="checkbox1" value=""></label></td>
                                        
                                        <td><a href="Question_bank.php">Gym service</a></td>
                                        <td> <a href="#"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" id="checkbox1"  value=""> </label></td>
                                        <td><a href="Question_bank.php">Gym Equipment</a></td>
                                        <td>     <a href="#"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" id="checkbox1" value=""> </label></td>
                                        
                                        <td><a href="Question_bank.php">Group 4</a></td>
                                        <td>     <a href="#"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" id="checkbox1" value=""> </label></td>
                                        
                                        <td><a href="Question_bank.php">Group 1</a></td>
                                        <td>  <a href="#"> <span class="glyphicon glyphicon-pencil"></span>  </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                            <tr>
                                        <td>  <label> <input type="checkbox" id="checkbox1" value=""> </label></td>
                                        
                                        <td><a href="Question_bank.php">Group 3</a></td>
                                        <td>     <a href="#"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" id="checkbox1" value=""> </label></td>
                                        
                                        <td><a href="Question_bank.php">Group 4</a></td>
                                        <td>     <a href="#"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" id="checkbox1" value=""> </label></td>
                                        
                                        <td><a href="Question_bank.php">Group 1</a></td>
                                        <td>  <a href="#"> <span class="glyphicon glyphicon-pencil"></span>  </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                                  
                                </tbody>
                            </table>
                           

                        </div>
                        <button type="submit" class="btn btn-default">Set as current feedback display questions</button>
                         <button type="submit" class="btn btn-default">Edit</button>
                   </div>
                   
                  
               </div>
                <!-- /.feedback stmt -->
              
          
              
      
                <!-- /.row -->
      
            
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


