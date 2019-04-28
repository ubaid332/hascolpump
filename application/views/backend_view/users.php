<?php $this->load->view('backend_view/include/head') ?>
<body> 
<?php $this->load->view('backend_view/include/header') ?>
<?php $this->load->view('backend_view/include/aside') ?>     
        <div id="page-wrapper">
        <div class="graphs">
       
    
     <button type="button" class="btn btn_5 btn-sm btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa  fa-plus"></i> Add New Users</button>
    
     
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h2 class="modal-title">Add New Users  </h2>
                            </div>
        <div class="modal-body">
        <!-- form start -->
                <form role="form" method="post" action="<?php echo base_url('backend/add_users') ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Employee</label>
                      <input type="text" class="form-control1"  name="EmployeeID" placeholder="Enter the Employee " required="required">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control1"  name="Email" placeholder="Enter the Email" required="required">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="password" class="form-control1"  name="Password" placeholder="Enter the Password" required="required">
                    </div>
                    <div class="form-group">
                        <label for="selector1" >Your Role is</label>
                       <select name="Role" id="selector1" class="form-control1">
                          <option>Salesman</option>
                          <option>Manger</option>
                          <option>Admin</option>
                          
                        </select>
                    </div>

                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="btnsave" value="save">Save Record</button>
                  </div>
                </form>
      </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
           
      <div class="clearfix"> </div>
      <br>
       <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Employee</th>
            <th>Email  </th>
            <th>Password</th>
            <th>Role</th>
            <th>Record Control</th>
            
            
          </tr>
        </thead>
        <tbody>
          <?php 
                      foreach($users as $each)
                      {
                       echo "<tr>
                        <td>$each->ID</td>
                        <td>$each->Name</td>
                        <td>$each->Email</td>
                        <td>$each->Password</td>
                        <td>$each->Role</td>

                        <td><a href='".base_url("backend/edit_users/$each->ID")."' class='btn  btn-info btn-xs'><i class='fa  fa-edit'></i> Edit</a>
                        <a onclick=\"return confirm('Are you sure to delete this record?')\" href='".base_url("backend/delete_users/$each->ID")."'class='btn  btn-danger btn-xs'><i class='fa fa-trash-o'></i> Delete</a></td>
                       
                         
                      </tr>";
                      }
                      ?>
          
          
        </tbody>
        <tfoot>
              <tr>
            <th>ID</th>
            <th>Employee</th>
            <th>Email  </th>
            <th>Password</th>
            <th>Role</th>
            <th>Record Control</th>
           
            
          </tr>
        </tfoot>
      </table>
    </div><!-- /.table-responsive -->
     
    
      
<?php $this->load->view('backend_view/include/footer') ?> 