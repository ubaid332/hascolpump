<?php $this->load->view('backend_view/include/head') ?>
<body> 
<?php $this->load->view('backend_view/include/header') ?>
<?php $this->load->view('backend_view/include/aside') ?>     
        <div id="page-wrapper">
        <div class="graphs">
       
    
     <button type="button" class="btn btn_5 btn-sm btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa  fa-plus"></i> Add New Expense Type </button>
    
     
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h2 class="modal-title">Add New Expense Type  </h2>
                            </div>
        <div class="modal-body">
        <!-- form start -->
                <form role="form" method="post" action="<?php echo base_url('backend/add_Expenses_types') ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Expense Type</label>
                      <input type="text" class="form-control1"  name="Expensetype" placeholder="Enter the Expensetype" required="required">
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
            <th>Expensetype</th>
            
             <th>Record Controller</th>
           
          </tr>
        </thead>
        <tbody>
          <?php 
                      foreach($expenses_types as $each)
                      {
                       echo "<tr>
                        <td>$each->ID</td>
                        <td>$each->Expensetype</td>
                        

                        <td><a href='".base_url("backend/edit_expenses_types/$each->ID")."' class='btn  btn-info btn-xs'><i class='fa  fa-edit'></i> Edit</a>

                        <a onclick=\"return confirm('Are you sure to delete this record?')\" href='".base_url("backend/delete_expenses_types/$each->ID")."'class='btn  btn-danger btn-xs'><i class='fa fa-trash-o'></i> Delete</a></td>
                       
                         
                      </tr>";
                      }
                      ?>
          
          
        </tbody>
        <tfoot>
              <tr>
            <th>ID</th>
            <th>Expensetype</th>
            
        <th>Record Controller</th>
            
          </tr>
        </tfoot>
      </table>
    </div><!-- /.table-responsive -->
     
    
      
<?php $this->load->view('backend_view/include/footer') ?> 