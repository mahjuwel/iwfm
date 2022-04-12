  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    

    <!-- Main content -->
    <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
                <?php if(isset($empInfo->user_id)){ ?>

          <address>
            Employee: <b><?php if(isset($empInfo)) echo $empInfo->username; ?></b><br>
               Designation:  <?php if ($empInfo->type=='0') { ?>
                    Super Admin
                     <?php }?>
                  <?php if ($empInfo->type=='1') { ?>
                    Admin
                     <?php }?>
                     <?php if ($empInfo->type=='2') { ?>
                    HR
                     <?php }?>
                     <?php if ($empInfo->type=='3') { ?>
                    Accountant
                     <?php }?>
                     <?php if ($empInfo->type=='4') { ?>
                    QC
                     <?php }?> 
                     <?php if ($empInfo->type=='null') { ?>
                    No Role
                     <?php }?><br>

           Mobile:  <?php if(isset($empInfo)) echo $empInfo->mobile; ?><br>
            Email: <?php if(isset($empInfo)) echo $empInfo->email; ?><br>
             Address: <?php if(isset($empInfo)) echo $empInfo->presentaddress; ?><br>
          Joining Date: <?php if(isset($empInfo)) echo $empInfo->joiningDate; ?><br>
           Salary:  <?php if(isset($empInfo)) echo $empInfo->salary; ?>
     
          </address>
        <?php } ?>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
         
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">

          <table class="table table-striped">
            <thead>
                        

            <tr>
              <th>Salary</th>
              <th>Absent</th>
              <th>Absent Fine</th>
              <th>Total Salary</th>
              <th>Note</th>
              <th>Date</th>
            </tr>
            </thead>
            <?php if (isset($empDr2)) {
                # code...
               ?>
            <tbody>
              
              <?php foreach ($empSal as $sal) {
                # code...
               ?>
            <tr>
              <td><?php echo $sal->salary; ?></td>
              <td><?php echo $sal->abs; ?></td>
              <td><?php echo $sal->absfine; ?></td>
              <td><?php echo $sal->totalsal; ?></td>
              <td><?php echo $sal->note; ?></td>
             <td><?php echo $sal->abdate; ?></td>

           

              </tr>
        <?php } ?>
          
            </tbody>
          <?php } ?>

          </table>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-12">
          <?php if(isset($empInfo->user_id)){ ?>
       <div class="col-xs-12 table-responsive">

          <table class="table table-striped">
            <thead>
                        

            <tr>
              <th>Dr#</th>
              <th>Debit</th>
              <th>Note</th>
              <th>Date</th>
            </tr>
            </thead>
            <?php if (isset($empDr2)) {
                # code...
               ?>
            <tbody>
              
              <?php foreach ($empDr2 as $ed) {
                # code...
               ?>
            <tr>
              <td><?php echo $ed->drid; ?></td>
              <td><?php echo $ed->dr; ?></td>
              <td><?php echo $ed->note; ?></td>
             <td><?php echo $ed->trdate; ?></td>

           

              </tr>
        <?php } ?>
          
            </tbody>
          <?php } ?>

          </table>

        </div>
          <?php } ?>
         
        </div>
        <!-- /.col -->
      </div>
        <div class="col-xs-6 pull-right">
          <p class="lead"></p>

          <div class="table-responsive">
          <?php if(isset($empInfo->user_id)){ ?>

            <table class="table">
              <tr>
                <th style="width:50%">Total Credit:</th>
                <td>Tk <?php if(isset($empSal2[0]->tsal)) echo $empSal2[0]->tsal; ?></td>
              </tr>
              <tr>
                <th>Total Debit</th>
                <td>Tk <?php if(isset($empDr[0]->dr)) echo $empDr[0]->dr; ?></td>
              </tr>
              
              <tr>
                <th>Payable</th>
                <td>Tk <?php if(isset($empSal2[0]->tsal)) if(isset($empDr[0]->dr)) echo $empSal2[0]->tsal - $empDr[0]->dr; ?></td>
              </tr>
            </table>
          <?php } ?>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- this row will not appear when printing -->
   
      <!-- /modal-->
    </div>

          <!-- /.modal-end-->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  