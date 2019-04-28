<?php $this->load->view('backend_view/include/head') ?>
<body> 
<?php $this->load->view('backend_view/include/header') ?>
<?php $this->load->view('backend_view/include/aside') ?>     
        <div id="page-wrapper">
        <div class="graphs">
       
     <h3><i>Edit Employee</i></h3>
   
    
      <div class="xs">
       
        <div class="well1 white">
        <form role="form" method="post" action="<?php echo base_url('backend/update_employess') ?>">
          <fieldset>
            <div class="col-sm-6 well1 white">
            <div class="form-group">
              <label class="control-label">Name</label>
              <input type="text" class="form-control1" required="" value="<?php echo $employee->Name ?>" name="Name">
            </div>
            <div class="form-group">
              <label class="control-label">Contact No</label>
              <input type="text" class="form-control1" required="" value="<?php echo $employee->Contactno ?>" name="Contactno">
            </div>
            <div class="form-group">
              <label class="control-label">Joining Date</label>
              <input type="date" class="form-control1" required="" value="<?php echo $employee->Joiningdate ?>" name="Joiningdate">
            </div>
           
          </div>
          <div class="col-sm-6 well1 white">
             <div class="form-group">
              <label class="control-label">Reason</label>
              <input type="text" class="form-control1" required="" value="<?php echo $employee->Reason ?>" name="Reason">
            </div>
            <div class="form-group">
              <label class="control-label">Employee Type</label>
              <input type="text" class="form-control1" required="" value="<?php echo $employee->Etype ?>" name="Etype">
            </div>
             <div class="form-group">
              <label class="control-label">Leaving Date</label>
              <input type="date" class="form-control1" required="" value="<?php echo $employee->Leavingdate ?>" name="Leavingdate">
            </div>
          </div>
      
             <input type="hidden" name="ID" value="<?php echo $employee->ID ?>">
            
           </fieldset>
           
             <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-sm" name="btnupdate" value="update">Update Record</button>
                    <button type="button" onclick="javascript:history.go(-1)" class="btn btn-danger btn-sm" name="btnupdate" value="update">Cancel</button>
            </div>
          
        </form>
      </div>
    </div>
   
           
    
     
     
    
      
<?php $this->load->view('backend_view/include/footer') ?> 