<?php $this->load->view('backend_view/include/head') ?>
<body> 
<?php $this->load->view('backend_view/include/header') ?>
<?php $this->load->view('backend_view/include/aside') ?>     
        <div id="page-wrapper">
        <div class="graphs">
       
     <h3><i>Edit Expenses_types Record</i></h3>
   <div class="row">
   
      <div class="xs">
       
        <div class="  well1 white">
        <form role="form" method="post" action="<?php echo base_url('backend/update_expenses_types') ?>">
          <fieldset>
            <div class="col-sm-6">
            <div class="form-group">
              <label class="control-label">Expense Type</label>
              <input type="text" class="form-control1" required="" value="<?php echo $expense_type->Expensetype ?>" name="Expensetype">
            </div>
          
            
            
             <input type="hidden" name="ID" value="<?php echo $expense_type->ID ?>">
            
           
           
             <div class="box-footer">
                      <button type="submit" class="btn btn-primary btn-sm" name="btnupdate" value="update">Update Record</button>
                    <button type="button" onclick="javascript:history.go(-1)" class="btn btn-danger btn-sm" name="btnupdate" value="update">Cancel</button>
            </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
   
           
    
     
     
    
      
<?php $this->load->view('backend_view/include/footer') ?> 