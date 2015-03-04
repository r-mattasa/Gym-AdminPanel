<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gym FeedBack Admin template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin/sb-admin.css" rel="stylesheet">
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
                         <small>  Organize Questions</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                 <i class="fa fa-dashboard"><a href="index.php">Dashboard</a></i> 
                            </li>
                             <li class="active">
                                <i class="fa fa-edit"></i>Add Questions
                            </li>
                        </ol>
                    </div>
                </div>
                          <div class="row">
                            
              <div class="col-lg-12">
                  
                  
                       <form role="form">
                           
                                     <div class=" panel panel-primary" id="question-table-new">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Define New questions</h3>
                                </div>
                                <div class="panel-body">
                                 <div class="form-group ">
                                <label for="exampleInputFile">Enter your question </label>
                                <input class="form-control" id="question_id" required="" placeholder="Enter question">
                                </div>
                             <div class="form-group modal-sm">
                             <label>Select a group to add the question</label>
                              <select class="form-control" id="group_id">
                                <option>Select group </option>
                                <option id="1"><?php echo 'group 1'; ?></option>                                   
                                </select>
                             </div>
                                    
                           </div>
                           <div class="panel-footer">
                            <button type="submit" value="done" id="add_question" class="btn btn-primary">Add Question</button>
                          </div>
                           </div>
                           
                       </form>
                       <br>
                       <br>
                   </div>
                              
                                <div class="col-lg-12">
                               <div class=""  id="question_table" >
                             <table class="table table-bordered table-hover table-striped">
                                 <thead class="bg-primary">
                                    <tr>
                                        <th><label>Selection </label></th>
                                    <th>Questions</th>
                                         <th> Group </th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                         <td><label><input type="checkbox" value="" id="checkbox1"> </label></td>
                                        <td>How would you rate your overall experience so far with  Fitness gym </td>
                                        <td><?php echo 'Group 1'; ?> </td>                                  
                                    </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" value="" id="checkbox1"></label></td>
                                        <td><?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; ?> </td>
                                         
                                          <td>    <?php echo 'Group 2'; ?> </td>
                                            
                                    </tr>
                                          <tr>
                                        <td>  <label> <input type="checkbox" value="" id="checkbox1"></label></td>
                                        <td><?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; ?> </td>
                                         
                                          <td>    <?php echo 'Group 5'; ?> </td>
                                            
                                    </tr>
                                   <tr>
                                        <td>  <label> <input type="checkbox" value="" id="checkbox1"></label></td>
                                        <td><?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; ?> </td>
                                         <td><?php echo 'Group 6'; ?> </td>                                            
                                    </tr>
                                                         
                                </tbody>
                            </table>
                            </div>  
                                  
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
