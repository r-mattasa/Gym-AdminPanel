<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
 
    </head>
     <body>
   <div class="row text-center">
      
       <p> <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#largeModal">Add Record</a></p>
      
        <div class="table-responsive" id="questions">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th><label>
                                        <input type="checkbox" value=""> </label></th>
                                        <th>Questions</th>
                                        <th>Group Name</th>
                                         <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>  <label> <input type="checkbox" value=""></label></td>
                                        <td>How would you rate your overall experience so far with  Fitness gym </td>
                                        <td><?php echo 'group 5'; ?> </td>
                                        <td> <a href="edit_questions.php"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                      </tr>
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""></label></td>
                                        <td><?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; ?> </td>
                                          <td><?php echo 'group 2'; ?> </td>
                                          <td><a href="edit_questions.php"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td> <a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                                                         
                                    </tr>
                             
                                    <tr>
                                        <td>  <label> <input type="checkbox" value=""> </label></td>
                                        <td>How I feel about myself as a person </td>
                                             <td><?php echo 'group 3'; ?> </td>
                                        <td>     <a href="#"> <span class="glyphicon glyphicon-pencil"></span>   </a></td>
                                        <td><a href="#">  <span class="glyphicon glyphicon-trash"></span>  </a></td>
                                        
                                    </tr>
                             
                                  
                                </tbody>
                            </table>
                            
                        </div>
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
                            </div>  
                            <div class="" style="display:none;" id="question-table-new">
                                 <div class="form-group">
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" value="done" id="done" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
         <script src="../js/jquery.js"></script>
          <script src="../js/bootstrap.min.js"></script>
          <script src="../js/add_group.js"></script>

    </body>
</html>
