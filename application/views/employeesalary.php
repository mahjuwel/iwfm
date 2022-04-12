<style>.table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #1f1e1e;
}</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Salary Report
        <small>Employees</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>index.php/HR_Payroll/SalaryCreate">Create Salary</a></li>
        <li class="active">Salary Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
         <div class="box-header">
             

              <div class="box-tools">
                  
                <span style="text-align: center; font-size: 20px; font-weight: bolder;">Aladin's Park Ltd</span><br>
                <span>Branch: Dhamrai</span>
                <div class="input-group input-group-sm" style="width: 600px; font-weight: bold">
                   Monthly Salary: September 2019
                   
<!--<a class="btn btn-default buttons-excel buttons-html5" tabindex="0" aria-controls="SStData" href="<?php echo base_url()?>index.php/HR_Payroll/SalaryReportCSV" style="float: right; padding-right: 5px;"><span>CSV</span></a>-->
                  
                </div>
              </div>
            </div>
            <br><br><br>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                  <?php if(isset($empsal)){

                 ?>
                <tr>
                  <th>#</th>
                  <th>Employee</th>
                  <th>Designation</th>
                  <th>Basic<br> Salary</th>
                 <th>Working<br> Day</th>
                  <th>OT<br>Day</th>
                  <th>Absent</th>
                  <th>OT<br>Payment</th>
                  <th>Salary<br> Deduct</th>
                   <th>Total <br>Salary</th>
                   <th>Advance<br> Salary</th>
                   <th>Shop<br>Bill</th>
                   <th>Mess<br>Bill</th>
                   <th>Net <br> Amount</th>
                   <th>Signature</th>

                </tr>
                <?php
               $i=1;

               foreach ($empsal as $dp) {
               ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $dp->employeename; ?></td>
                  <td><?php echo $dp->designation; ?></td>
                  <td><?php echo $dp->basicsalary; ?></td>
                  <td><?php echo $dp->wd; ?></td>
                  <td><?php echo $dp->otd; ?></td>
                  <td style="color: red; font-weight: bold;"><?php echo $dp->abs; ?></td>
                  <td><?php echo $dp->otp; ?></td>
                  <td style="color: red; font-weight: bold;"><?php echo $dp->salcut; ?></td>
                  <td><?php echo $dp->totalsal; ?></td>
                  <td><?php echo $dp->advsal; ?></td>
                  <td><?php echo $dp->shopbill; ?></td>
                 <td><?php echo $dp->messbill; ?></td>
                 <td><?php echo $dp->netamount; ?></td>
                 <td></td>
                 <!--<td></td>-->
               
                </tr>
                <?php 
                ++ $i;

                } ?>
               <tr>
                 <th>#</th>
                  <th>Employee</th>
                  <th>Designation</th>
                  <th>Basic<br> Salary<br><?php if(isset($empsal2[0]->bs)) echo $empsal2[0]->bs ?></th>
                 <th>Working<br> Day<br><?php if(isset($empsal2[0]->gwd)) echo $empsal2[0]->gwd ?></th>
                  <th>OT<br>Day<br><?php if(isset($empsal2[0]->gotd)) echo $empsal2[0]->gotd ?></th>
                  <th style="color: red; font-weight: bold;">Absent<br><?php if(isset($empsal2[0]->gabs)) echo $empsal2[0]->gabs ?></th>
                  <th>OT<br>Payment<br><?php if(isset($empsal2[0]->gotp)) echo $empsal2[0]->gotp ?></th>
                  <th style="color: red; font-weight: bold;">Salary<br> Deduct<br><?php if(isset($empsal2[0]->gsalcut)) echo $empsal2[0]->gsalcut ?></th>
                   <th>Total <br>Salary<br><?php if(isset($empsal2[0]->gtotalsal)) echo $empsal2[0]->gtotalsal ?></th>
                   <th>Advance<br> Salary<br><?php if(isset($empsal2[0]->asal)) echo $empsal2[0]->asal ?></th>
                   <th>Shop<br>Bill<br><?php if(isset($empsal2[0]->sb)) echo $empsal2[0]->sb ?></th>
                   <th>Mess<br>Bill<br><?php if(isset($empsal2[0]->mb)) echo $empsal2[0]->mb ?></th>
                   <th>Net <br> Amount<br><?php if(isset($empsal2[0]->na)) echo $empsal2[0]->na ?></th>
                   <th>Signature</th>
 
<?php } ?>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <!--<div class="box-footer clearfix">-->
            <!--  <ul class="pagination pagination-sm no-margin pull-right">-->
            <!--    <li><a href="#">&laquo;</a></li>-->
            <!--    <li><a href="#">1</a></li>-->
            <!--    <li><a href="#">2</a></li>-->
            <!--    <li><a href="#">3</a></li>-->
            <!--    <li><a href="#">&raquo;</a></li>-->
            <!--  </ul>-->
            <!--</div>-->
          </div>
          <!-- /.box -->

          
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>