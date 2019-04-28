<?php $this->load->view('backend_view/include/head') ?>
<body> 
<?php $this->load->view('backend_view/include/header') ?>
<?php $this->load->view('backend_view/include/aside') ?>     
        <div id="page-wrapper">
        <div class="graphs">
       
     <h3><i>Edit Expenses</i></h3>
   
    

      <div class="xs">
       <div class="well1 white">
        
        <form role="form" method="post" action="<?php echo base_url('backend/update_expenses') ?>">
          <fieldset>
            <div class="col-sm-6  ">
            <div class="form-group">
              <label class="control-label">Date</label>
              <input type="date" class="form-control1" required=""  name="Date">
            </div>
            <div class="form-group">
              <label class="control-label">Expense Type</label>
              <?php echo form_dropdown('ExpensetypeID',
                       $expensetypes,$expense->ExpensetypeID,'class="form-control1"')?>
            </div>
            <div class="form-group">
              <label class="control-label">Amount</label>
              <input type="text" class="form-control1" required="" value="<?php echo $expense->Amount ?>" name="Amount">
            </div>
            <div class="form-group">
              <label class="control-label">Employee</label>
             <?php echo form_dropdown('EmployeeID',
              $employees,$expense->EmployeeID,'class="form-control1"')?>
            </div>
             
            
            


           
            
             <input type="hidden" name="ID" value="<?php echo $expense->ID ?>">
            
           
           
             <div class="box-footer">
                     <button type="submit" class="btn btn-primary btn-sm" name="btnupdate" value="update">Update Record</button>
                    <button type="button" onclick="javascript:history.go(-1)" class="btn btn-danger btn-sm" name="btnupdate" value="update">Cancel</button>
            </div>
          </div>
          </fieldset>
        </form>
      </div>
    </div>
 
           
    
     
     
    
      
<?php $this->load->view('backend_view/include/footer') ?> 