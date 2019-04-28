<?php $this->load->view('backend_view/include/head') ?>
<body> 
<?php $this->load->view('backend_view/include/header') ?>
<?php $this->load->view('backend_view/include/aside') ?>     
        <div id="page-wrapper">
        <div class="graphs">
       
     <h3><i>Edit customers Record</i></h3>
   
   
      <div class="xs">
       
        <div class=" well1 white">
        <form role="form" method="post" action="<?php echo base_url('backend/update_customers') ?>">
          <fieldset>
            <div class="col-sm-6">
            <div class="form-group">
              <label class="control-label">Name</label>
              <input type="text" class="form-control1" required="" value="<?php echo $customer->Name ?>" name="Name">
            </div>
            <div class="form-group">
              <label class="control-label">Contact No</label>
              <input type="text" class="form-control1" required="" value="<?php echo $customer->ContactNo ?>" name="ContactNo">
            </div>
             <div class="form-group">
              <label class="control-label">Address</label>
              <input type="text" class="form-control1" required="" value="<?php echo $customer->Address ?>" name="Address">
            </div>
            
             <input type="hidden" name="ID" value="<?php echo $customer->ID ?>">
            
           
           
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