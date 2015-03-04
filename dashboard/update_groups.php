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
                                <i class="fa fa-edit"></i>Question Bank
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row --> 
           <div class="row text-left">
      
       <p> <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#largeModal">Create New Group</a></p>
     
                            <div class="table-responsive" id="questions">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th><label>
                                        <input type="checkbox" value=""> </label></th>
                                     
                                        <th>Group Name</th>
                                           <th>Total number of Questions</th>
                                         <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <?php 
                               //$query = mysql_query("select * from tb_group"); 
                                //$i=1;

                               // while($data=mysql_fetch_array($query)){

                               // }?>

                                <tbody>
                                     <tr>
                                        <td>  <label> <input type="checkbox" value=""></label></td>
                                        <td>GYM Equipments </td>
                                        <td><span class="edit"> 5 </span></td>
                                        <td> <a href="edit_questions.php"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                      </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""></label></td>
                                        <td><?php echo 'Lorem ipsum dolor'; ?> </td>
                                          <td><?php echo ' 2'; ?> </td>
                                          <td><a href="edit_questions.php"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td> <a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                                                         
                                    </tr>
                             
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""> </label></td>
                                        <td>How I feel about myself as a person </td>
                                             <td><?php echo '3'; ?> </td>
                                        <td>     <a href="#"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                             
                                  
                                </tbody>
                            </table>
            
                        </div>
                            <nav>
                             <ul class="pagination pull-right">
                              <li>
                               <a href="#" aria-label="Previous">
                             <span aria-hidden="true">&laquo;</span>
                             </a>
                              </li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li>
                                <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
  </div>
        
  <div class="modal fade " id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add new Record</h4>
      </div>
      <div class="modal-body">
      
                        <div class="entry-form" id="new_entry" style="padding-top:0px;">
                        <form role="form" name="userinfo">
                         <div  id="new_group">
                             <div class="form-group modal-sm">
                                 <p> <input class="form-control" id="groupName" name="groupname" required="" placeholder="Enter group Name"> </p>
                                <p> <button type="button" id="define_newques" class="btn btn-primary pull-left">Define New Questions</button></p>
                             </div>
                             <br>
                             <br>
                                 
                             <p  style="padding-left: 36px;" class=" text-left">OR</p>
                                
                                     
                                 <div class="form-group">
                                     <p><button type="button" id="add_questions"  class="btn btn-primary">Select existing questions</button></p>
                                     
                                 </div>  
                              
                            <div class=""  id="question_table" >
                             <table class="table table-bordered table-hover table-striped">
                                 <thead class="bg-primary">
                                    <tr>
                                        <th><label>Select </label></th>
                                    <th>Questions</th>
                                         <th>   
                                     <select class="form-control">
                                    <option id="1">Gym Equipment</option>
                                    <option id="2">Gym Service</option>
                                    <option id="3">Group 1</option>
                                    <option id="5">Group 2</option>
                                    <option id="6">Group 3</option>
                                </select>
                                  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                         <td>  <label><input type="checkbox" value="" id="checkbox1"> </label></td>
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
                                   <div class="pull-right">
                                    <nav>
                                    <ul class="pagination ">
        <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
                             </div>
                                <br>
                                <br>
                                 <br>
                                <br>
                      
                            </div> 
  
                            <div class=" panel panel-primary" style="display:none;" id="question-table-new">
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
   
             

                        </form>  
                           </div>
                          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" value="done" id="done" class="btn btn-primary">Update</button>
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
    <script src="../js/add_group.js"></script>



</body>

</html>
