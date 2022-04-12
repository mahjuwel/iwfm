  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Record Absent
        <small>Employee     
</small>
      <!--   <small style="color: red; font-weight: bolder;">Today Cash Dr. <?php if(isset($todaycashflowdr)) echo $todaycashflowdr[0]->tcashdr;  ?>                      
</small>  -->     
    

      </h1>

      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
           <li><a href="<?php echo base_url();?>index.php/Search/DailyLedger">Daily Ledger</a></li>
        <li><a href="<?php echo base_url();?>index.php/Accounting/RecordDebit">Debit</a></li>
        <li class="active">Credit</li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
     
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">

              <h3 class="box-title"><p class="alert alert-danger test7" role="alert" style="display: none;">
  Successfully Absent Recorded!
</p></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 
              <form  method="post" id="frm-abs">
              
            
                <div class="form-group">
                    <label for="category" class="col-sm-2 control-label">Employee</label>
                    <div class="col-sm-5">
                         <select class="username form-control" style="width:250px" name="user_id" id="user_id"></select>
                    </div>
                    <div class="col-sm-5">
                    
              
                  </div>
                </div>
           <!--  <div class="form-group">
                    <label for="tstock" class="col-sm-2 control-label">Sub-category</label>
                    <div class="col-sm-10">
             <select id="subcat" class="form-control" name="subcat">
        <option value="" selected>Choose</option>
        <option value="Salary">Salary</option>
        <option value="Supplier">Supplier</option>>
      </select>
                    </div>
                    <br>
            </div> -->
          <!--     <br>
                 <div class="form-group">
                    <label for="tstock" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
             <select id="cat" class="form-control" name="cat">
        <option value="" selected>Choose</option>
        <option value="Asset">Asset</option>
        <option value="Bank Transfer">Bank Transfer</option>
      </select>
                    </div>
                    <br>
            </div> -->
            <br>
              <div class="form-group">
               <td><input type="text" class="form-control" id="abs" name="abs" placeholder="Number of Absent"></td>

              </div>
             <div class="form-group">
               <td><textarea class="form-control" id="note" name="note" placeholder="Note"></textarea></td>

              </div>
              <div class="form-group">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="abdate" id="datepicker" required="">
                </div>
                <!-- /.input group -->
              </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary" id="btnSave" onclick="saveab()"><i class="fa fa-save"></i> Save </button>
                <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
            </div>
            </div>
          </form>
            <!-- /.box-footer -->
          </div>
                   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Today Transactions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Cr. Voucher</th>
                  <th>Invoice</th>
                 <th>Particulars</th>
                   <th>Cr. Tk.</th>                  
                  <th>Note</th>                 
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
              <?php if(isset($creditRec)){ ?>

                  
                  <?php foreach($creditRec as $cd){ ?>

              
                <tr>
                  <td><?php echo $cd->crid; ?></td>
                  <td><a href="<?php echo base_url(); ?>index.php/Accounting/invoice?invoice=<?php echo $cd->invoice; ?>" title="View" target="_blank"><i class="fa fa-eye"></i></a>                  
                <a href="<?php echo base_url(); ?>index.php/Accounting/InvoicePDF?invoice=<?php echo $cd->invoice; ?>" title="Download" target="_blank">
                 <i class='fa fa-download'>(<?php echo $cd->invoice; ?>)</i>
                </a> 
                  </td>
                 <td><?php echo $cd->crto; ?></td>
                  <td><?php echo $cd->cr; ?></td>               
                  <td><?php echo $cd->note; ?></td>
                  <td><?php echo $cd->trdate; ?></td>
                </tr>
             <?php }} ?>
                </tbody>
                <tfoot>
                <tr>

                  <th></th>
                  <th></th>
                   <th></th>
                  <th style="color: green; font-weight: bold;">

                  <?php if (isset($crRecord)) echo $crRecord[0]->tcr; ?></small><br>
                    (<?php if (isset($creditRec13)) echo $creditRec13[0]->tcr2; ?>)

                    <!-- Dr.<br>
                            <small style="color: red; font-weight: bolder;"><?php if (isset($creditRec2)) echo $creditRec2[0]->tdr; ?></small> 
                           (<?php if (isset($creditRec14)) echo $creditRec14[0]->tdr2; ?>) --></th>
                  <th style="color: orange; font-weight: bolder;">
                   <!--  Total Balance:


                   <?php 

                if (isset($creditRec13)) $openingbalance1=$creditRec13[0]->tcr2; 
                if (isset($creditRec14)) $openingbalance2=$creditRec14[0]->tdr2;                   
  
            echo $openingbalance1 - $openingbalance2;

    
                    ?>
 -->

                  </th>
                  
                  <th>
                    <!-- Cash Opening: 
                      <?php if(isset($cashflowCronedayago)) $ocrcash=$cashflowCronedayago[0]->cashcro;                        
                          if(isset($cashflowDronedayago)) $odrcash=$cashflowDronedayago[0]->cashdro; 

                          echo $ocrcash - $odrcash;

                             ?><br> -->
                  <!--   Today Cash Cr:
                  <?php if(isset($todaycashflowcr)) echo $todaycashflowcr[0]->tcashcr;  ?><br>                   
                   Today Cash Dr:
                  <?php if(isset($todaycashflowcr)) echo $todaycashflowdr[0]->tcashdr;  ?><br>
                   Today Bal:  -->
              <!--  <?php if(isset($todaycashflowcr)) $tcrcash=$todaycashflowcr[0]->tcashcr;                        
                          if(isset($todaycashflowdr)) $tdrcash=$todaycashflowdr[0]->tcashdr; 

                          echo $tcrcash - $tdrcash;

                             ?><br> -->
                    <!-- Total Bal:
                          <?php if(isset($cashflowcr)) $crcash=$cashflowcr[0]->cashcr;                        
                          if(isset($cashflowdr)) $drcash=$cashflowdr[0]->cashdr; 
                          echo $crcash - $drcash;

                             ?> -->

                  </th>
                 
                                
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
    <script type="text/javascript">    
function saveab(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/HR_Payroll/AbsentRecord",
  type: "POST",
  data: $('#frm-abs').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
   $('.test7').show();

                setTimeout(function(){ $('.test7').hide();  }, 4000);
}

   },
   error: function(){

        alert('error');
                //if success reload ajax table

   }
 });

}
function timedRefresh(timeoutPeriod) {
  setTimeout("location.reload(true);",timeoutPeriod);
}
function reload_table()
{
window.onload = timedRefresh(2000);
}
  </script>

  