 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Datewise Branch Cr.
        <small>Reports   
</small>
      <!--   <small style="color: red; font-weight: bolder;">Today Cash Dr. <?php if(isset($todaycashflowdr)) echo $todaycashflowdr[0]->tcashdr;  ?>                      
</small>  -->     
    

      </h1>

      <ol class="breadcrumb">
               <li><a href="<?php echo base_url() ?>index.php/SalePanel/Sales"><i class="fa fa-home"></i> Home</a></li>

   <li class="active">Search</li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
     
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">

<!--               <h3 class="box-title">Search Salary Report with Date</h3>
 -->            </div>
            <!-- /.box-header -->
            <div class="box-body">
 
              <form  method="post" action="<?php echo base_url();?>index.php/SalePanel/DatewiseCrReportmanager">
              
         
              <div class="form-group">
              	<label for="category" class="col-sm-2 control-label">Date-From</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="rdate1" required="" style="width: 34%">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
              	<label for="category" class="col-sm-2 control-label">Date</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="rdate2" required="" style="width: 34%">
                </div>
                <!-- /.input group -->
              </div>
              
              <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">BranchManager </label>

                    <div class="col-sm-10">
                   <select class="form-control select2" name="user_id" style="width: 37%;" required="">
                        <option selected value="">Select BranchManager</option>
                  <?php if(isset($brnu)){ ?>
                  <?php foreach ($brnu as $brn) { ?>                   
                  <option value="<?php echo $brn->user_id; ?>"><?php echo $brn->username; ?>(<?php echo $brn->user_id; ?>-<?php echo $brn->branch; ?>)</option>               
                <?php }} ?>
                </select>
                    
                    </div>
                </div>
                <br>
              </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search </button>
                <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
            </div>
            </div>
          </form>
            <!-- /.box-footer -->
          </div>
             
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>