  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Credit Panel
        <small style="color: green; font-weight: bolder;"> Today Cash Cr: <?php if (isset($crRecord)) echo $crRecord[0]->tcr; ?>               
</small>
        <small>Branch: <?php echo $this->session->userdata('branch');?></small>

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
        <div class="col-md-3">
          <a href="<?php echo base_url(); ?>index.php/Accounting/RecordDebit" class="btn btn-primary btn-block margin-bottom">Debit

          <!--  <?php if (isset($pb)) $ob=$pb[0]->obcr; 
            if (isset($pb2)) $ob2=$pb2[0]->obdr; 

           $openingbal=$ob - $ob2 ;
           echo $openingbal;
           ?>
              -->




           </a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Search</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
             <li><a href="<?php echo base_url();?>index.php/Search/DailyLedger"><i class="fa fa-filter"></i>Daily Ledger</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Search/Ledger"><i class="fa fa-filter"></i>Search Ledger</a>
        <li><a href="<?php echo base_url();?>index.php/Accounting/RecordDebit"><i class="fa fa-credit-card"></i>Debit</a></l>
        <li class="active"><a href="<?php echo base_url();?>index.php/Accounting/AccountOperation"><i class="fa fa-credit-card"></i>Credit</a></l>

              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
   
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">

              <h3 class="box-title">
                   <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    
                       echo $success_msg;
                  
                  }else{
                  	echo $error_msg;

                  }
                
                  ?>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="modal modal-success fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create Header</h4>
              </div>
        <form method="post" class="form-horizontal" id="frm-createhd">
            <div class="modal-body">
                       
                  <div class="form-group">
                    <label for="pstock" class="col-sm-2 control-label">Header</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hd" name="hd" required="" placeholder="Header Name">
                    </div>
                  </div>

                                 

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
              <form  method="post" action='<?php echo base_url() ?>index.php/Accounting/crinput'>
              <div class="form-group">
                <input type="text" class="form-control" name="cr" id="cr" placeholder="Credit Amount">
              <input type="hidden" class="form-control" name="branch" id="branch" value="<?php echo $this->session->userdata('branch');?>">
              </div>
            
                <div class="form-group">
                    <label for="category" class="col-sm-2 control-label">Credit of</label>
                    <div class="col-sm-5">
                         <select class="hd form-control" style="width:250px" name="crto" id="crto"></select>
                    </div>
                    <div class="col-sm-5">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i>Create Header(If Required)
                </button>      
              
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
               <td><textarea class="form-control" id="note" name="note" placeholder="Note"></textarea></td>

              </div>
             
              <div class="form-group">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="trdate" id="datepicker" required="">
                </div>
                <!-- /.input group -->
              </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary" id="btnSave" onclick="drcredit()"><i class="fa fa-save"></i> Save </button>
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
                  <th>Branch</th>            
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
                  <td><?php echo $cd->branch; ?></td>
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
                                       <th></th>


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
//     <script type="text/javascript">    
// function drcredit(){
//  $.ajax({
//   url: "<?php echo base_url() ?>index.php/Accounting/crinput",
//   type: "POST",
//   data: $('#frm-cr').serialize(),
//   dataType: 'json',
//   success: function(data){
//  if(data.status){
//   $('.test2').show();

//                 setTimeout(function(){ $('.test2').hide();  }, 3000);
// }

//   },
//   error: function(){

//         alert('error');
//                 //if success reload ajax table

//   }
//  });

// }
// function timedRefresh(timeoutPeriod) {
//   setTimeout("location.reload(true);",timeoutPeriod);
// }
// function reload_table()
// {
// window.onload = timedRefresh(2000);
// }
//   </script>

  <script type="text/javascript">
    
function save(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/crHeader",
  type: "POST",
  data: $('#frm-createhd').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Good job!", "Successfully Header Created", "success");
 $('#myModal').modal('hide'); 
  reload_table();
}

   },
   error: function(){
     alert('Error Occurred..');
   }
 });

}
function timedRefresh(timeoutPeriod) {
  setTimeout("location.reload(true);",timeoutPeriod);
}
function reload_table()
{
window.onload = timedRefresh(1500);
}
  </script>