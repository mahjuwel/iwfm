<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Search Cash
        <small>According to Park</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Search</li>
      </ol>
    
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box">
      <br>
            
           <div class="tab-pane active" id="settings">
                <form class="form-horizontal" method="GET" action="<?php echo base_url(); ?>index.php/Accounting/Dailycashstatement">
                  <div class="form-group">
                    <label for="product_code" class="col-sm-2 control-label">Parks</label>

                    <div class="col-sm-5">
                    	<select name="branch" class="form-control">
                    		<option value="">Choose</option>
                    		 <option value="Dhamrai">Dhamrai</option>
                    		<option value="Mymenshing">Mymenshing</option>
                    		                    		
                    	</select>
                    </div>
                    	 <div class="col-sm-5">                  
              
                  </div>
                   
                  </div>
                  <div class="form-group">
                    <label for="category" class="col-sm-2 control-label">Date</label>
                   
                    <div class="col-sm-5">                  
                 <input type="text" class="form-control" id="datepicker" required="" name="trdate" placeholder="Date">

                  </div>
                </div>
                 
              
            
                   
                  
                <br>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Search</button>
                      <br><br>
                    </div>
                  </div>
                </form>
              </div>
          </div>
          </div>
      </div>
      <br>
   
        <!-- /.modal -->


  </section>
</div>
