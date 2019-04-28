<?php $this->load->view('backend_view/include/head') ?>
<body> 
<?php $this->load->view('backend_view/include/header') ?>
<?php $this->load->view('backend_view/include/aside') ?>     
        <div id="page-wrapper">
        <div class="graphs">
       
     
     <button type="button" class="btn btn_5 btn-sm btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa  fa-plus"></i> Add New Employee </button>
    
     
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h2 class="modal-title">Add New Record  </h2>
                            </div>
        <div class="modal-body">
        <!-- form start -->
                <form role="form" method="post" action="<?php echo base_url('backend/add_employess') ?>">
                  
                  <div class="box-body">
                    <div class="col-sm-6 well1 white">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control1"  name="Name" placeholder="Enter the employee Name" required="required">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact No</label>
                      <input type="text" class="form-control1"  name="Contactno" placeholder="Enter the Contact number" required="required">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Joining Date</label>
                      <input type="date" class="form-control1"  name="Joiningdate" placeholder="Enter the Joiningdate" required="required">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Leaving Date</label>
                      <input type="date" class="form-control1"  name="Leavingdate" placeholder="Enter the Leavingdate" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6 well1 white">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Reason</label>
                      <input type="text" class="form-control1"  name="Reason" placeholder="Enter the Reason" required="required">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Employee Type</label>
                      <input type="text" class="form-control1"  name="Etype" placeholder="Enter the Employee Role" required="required">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                       <input type="checkbox" checked="" class="checkbox-inline1" name="Status" value="1" >True
                      <input type="checkbox" class="checkbox-inline1" name="Status" value="0" >False
                    </div>
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
            <th>Name</th>
            <th>Conatactno</th>
            <th>Joiningdate</th>
            <th>Leavingdate</th>
            <th>Reason</th>
            <th>Etype</th>
            <th>Status</th>
           
            <th>Record Control</th>
           
            
          </tr>
        </thead>
        <tbody>
          <?php 
                      foreach($employess as $each)
                      {
                       echo "<tr>
                        <td>$each->ID</td>
                        <td>$each->Name</td>
                        <td>$each->Contactno</td>
                        <td>$each->Joiningdate</td>
                        <td>$each->Leavingdate</td>
                        <td>$each->Reason</td>
                        <td>$each->Etype</td>";
                        if($each->Status==1)
                        {
                          echo "<td><span class='label label-success'>Active</span></td>";
                        }
                        else
                        {
                          echo "<td><span class='label label-danger'>Inactive</span></td>";
                        }
                        
                      echo " 

                        <td><a href='".base_url("backend/edit_employess/$each->ID")."' class='btn btn-info btn-xs'><i class=\"fa  fa-edit\"></i> Edit</a> <a onclick=\"return confirm('Are you sure to delete this record?')\" href='".base_url("backend/delete_employess/$each->ID")."'class='btn  btn-danger btn-xs'><i class=\"fa fa-trash-o\"></i> Delete</a></td>
                       
                         
                      </tr>";
                      }
                      ?>
          
          
        </tbody>
        <tfoot>
              <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Conatactno</th>
            <th>Joiningdate</th>
            <th>Leavingdate</th>
            <th>Reason</th>
            <th>Etype</th>
             <th>Status</th>
            <th>Record Control</th>
            
          </tr>
        </tfoot>
      </table>
    </div><!-- /.table-responsive -->
     
    
      
<?php $this->load->view('backend_view/include/footer') ?> 