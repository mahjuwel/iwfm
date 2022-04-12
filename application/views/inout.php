 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Barcode
        <small>#<?php echo $this->session->userdata('code3');?></small>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>index.php/Inventory/Product">Product List</a></li>

        <li class="active">POS</li>

      </ol>
    </section>

   

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->

      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
         Branch: <?php echo $this->session->userdata('branch');?>
<!--<a href="<?php echo base_url(); ?>index.php/Accounting/invoice?invoice=<?php echo $this->session->userdata('user_id');?>-<?php echo $this->session->userdata('code7');?>" target="_blank" class="btn btn-default pull-right"><i class="fa fa-print"></i> Print</a>-->
<!-- <a href="<?php echo base_url(); ?>index.php/Accounting/invoicePos?invoice=<?php echo $this->session->userdata('user_id');?>-<?php echo $this->session->userdata('code7');?>" title="POS" class="btn btn-default pull-right">Today Exit</a> -->
<a href="<?php echo base_url(); ?>index.php/Accounting/InvoicePDF?invoice=<?php echo $this->session->userdata('user_id');?>-<?php echo $this->session->userdata('code7');?>" target="_blank" class="btn btn-default pull-right">Entry&Exit History</a>
<a href="" class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-default7">
                Record Entry
              </a>
            <br>
<p class="alert alert-danger test2" role="alert" style="display: none;">
  Please input value or correct value & try again!
</p>

          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          
          <address>
        
           
            <form id="frm-cms2" method="post">

              <div class="form-group">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="codesearch" name="codesearch" placeholder="Search Product by code or you can scan" onmouseover="this.focus();" onBlur="addProduct()">
                    </div>
                       <input name="Submit2" type="submit" value="submit" hidden="" />
                  </div> 
</form>
                  <br>
                   <br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          
        
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <br>
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped" style="width: 95%; float: center;">

            <thead>
              

                
          <!--   <tr>
              <th style="width: 23%">Particulars</th>
              <th style="width: 10%">Price</th>
              <th style="width: 10%">Qty</th>
              <th style="width: 10%">Subtotal</th>
              <th style="width: 2%">Action</th>

            </tr>
            </thead>
            <tbody>
          <?php if (isset($pos)) { ?>
        <?php foreach ($pos as $cart) { ?>

            <tr>
              <td style="width: 23%"><?php echo $cart->productName; ?>(<?php echo $cart->product_code; ?>)</td>
              <td style="width: 10%"><?php echo $cart->sellprice; ?></td>
                  <td style="width: 10%">
                 <form action="<?php echo base_url()?>index.php/Accounting/UpdateCart" method="post">
                    <input type="number" name="quantity" style="width: 70px;text-align: center;" value="<?php echo $cart->qty;?>"/>
                    <input type="hidden" name="invoice" value="<?php echo $cart->invoice; ?>"/>
                    <input type="hidden" name="product_code" value="<?php echo $cart->product_code; ?>"/>
                    <input type="submit" value="Update" style="background: #333 none repeat scroll 0 0;
    border: 1px solid #000;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    font-size: 15px;
    padding: 2px 5px;
" />
                  </form>
              <td style="width: 10%"><?php echo $cart->sellprice*$cart->qty; ?></td>
              <td style="width: 2%"><a href="<?php echo base_url(); ?>index.php/Accounting/DeleteCart?invoice=<?php echo $cart->invoice; ?>&&product_code=<?php echo $cart->product_code; ?>"><i class="fa fa-trash-o"></i></a></td>
            </tr>
     
         
          <?php }} ?> -->
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-12">
        

        </div>
      
        <!-- /.col -->
      </div>
      <!-- /.row -->

  <div class="md-modal md-effect-11" id="modal-11">
      <div class="md-content">
        <h4 style="text-align: center;padding-top: 5px; padding-bottom: 5px;padding-right: 5px;">Customer<button class="md-close" style="float: right;">Close</button><br>
</h4>
        <div style="background-color: #868815;">
          <ul>
           <div class="row">
        <div class="col-md-12">
            <br>
    <form class="form-horizontal" method="post" id="frm-cms">
           <div class="tab-pane active" id="settings">
                  <div class="form-group">
                    <label for="cname" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="cname" name="cname" required="" placeholder="Customer Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mobile" class="col-sm-2 control-label">Mobile</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="mobile" name="mobile" required="" placeholder="Mobile Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                    </div>
                  </div>
                  <br>
                   <div class="col-sm-12">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                    </div>
                  </div>

                </form>
              </div>
            

          </ul>
       
       
        

        </div>
      </div>
    </div>


      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <!-- <a href="<?php echo base_url(); ?>index.php/Accounting/invoice?invoice=<?php echo $this->session->userdata('code'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fa fa-print"></i> Print</a> -->
         <!-- <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal99"><i class="fa fa-credit-card"></i> Payment
          </button> -->
        </div>
      </div>
      <br>

<!-- Modal -->


<div class="modal fade" id="modal-default7">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
 <h5 class="modal-title" id="exampleModalCenterTitle" style="text-align: center; font-size: 20px; color:#8B008B; font-weight: bolder; font-synthesis: all;">Record Visitor</h5>            
   </div> 
              <div class="modal-body">
                 <form id="myFormreg" method="post" >
                  <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                         <input type="text" name="visitorname" id="visitorname" class="form-control" style="width:250px" id="visitorname">
                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br><br>

              <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Contact</label>
                    <div class="col-sm-6">
                         <input type="text" name="contact" id="contact" class="form-control" style="width:250px" id="mobile">
                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-6">                    
       <select class="address form-control" style="width:250px" name="address" id="id" required=""></select>      
                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Whom to Meet</label>
                    <div class="col-sm-6">
           <select class="employeename form-control" style="width:250px" name="emp_id" id="id" required=""></select> 
                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-6">
          <select id="department" class="form-control" name="department">
        <option value="" selected>Choose</option>
        <option value="Director">Director</option>
        <option value="IT">IT</option>
        <option value="HR">HR</option>
        <option value="Admin">Admin</option>
        <option value="Audit">Audit</option>
        <option value="Account">Account</option>
        <option value="Marketing">Marketing</option>
        <option value="Sewing">Sewing</option>
        <option value="Cutting">Cutting</option>
        <option value="Finishing">Finishing</option>
        <option value="Store">Store</option>
        <option value="Others">Others</option>

      </select>
                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br>
              <div class="form-group">
                <label for="category" class="col-sm-3 control-label">VisitorType</label>
                    <div class="col-sm-6">
          <select id="visitortype" class="form-control" name="visitortype">
        <option value="" selected>Choose</option>
        <option value="Normal">Normal</option>
        <option value="Job Seeker">Job Seeker</option>
        <option value="Garments">Garments</option>
        <option value="Buying House">Buying House</option>
        <option value="Buyers">Buyers</option>
        <option value="Directors">Directors</option>
        <option value="Auditor">Auditor</option>
        <option value="VIP">VIP</option>
      </select>
                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br>
          <div class="form-group">
                <label for="category" class="col-sm-3 control-label">Purpose(Note)</label>
                    <div class="col-sm-6">
             <textarea type="text" name="note" id="note" class="form-control"></textarea>
                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br><br>
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="createVisitor()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>


     <div class="modal modal-success fade" id="myModal15">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
        <form method="post" id="frm-payupdate77">
            <div class="modal-body">
                        <div class="form-group">
                     <label for="pstock" class="col-sm-3 control-label">Customer Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="cname" name="cname">
                     <input type="hidden" class="form-control" id="invoice" name="invoice">

                    </div>
                    <br>
                  </div>
                  
                  <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Mobile</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="mobile" name="mobile">
                    </div>
                    <br>
                  </div>
                          
                     <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Grand Total</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ttp" name="gtotal">
                    </div>
                    <br>
                  </div>
                  
                     <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Paid</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="pp" name="paid">
                    </div>
                    <br>
                  </div>
                  
                   <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">NextPaid</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="nxtp" name="nxtp">
                    </div>
                    <br>
                  </div>
                  
                     <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Due</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="dd" name="due">
                    </div>
                    <br>
                  </div>
                  
                     <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Payment Method</label>

                    <div class="col-sm-9">
                      <select id="payment_method" class="form-control" name="payment_method">
        <option value="" selected>Choose</option>
        <option value="Cash">Cash</option>
        <option value="SIBL">SIBL</option>
        <option value="DBBL">DBBL</option>
        <option value="IBBL">IBBL</option>
        <option value="EBL">EBL</option>
      </select>
                    </div>
                    <br>
                  </div>
                  
                    
                                  
      
                   <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Tr. Date</label>
                    <div class="col-sm-9">

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="trdate" id="datepicker" required="">
                </div>
                <!-- /.input group -->
              </div>
            </div>
                  <br>
                                 

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="btnSave" onclick="savepaymentUpdate();" class="btn btn-primary">Save</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div> -->






       <div class="modal fade" id="myModal99">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="exampleModalCenterTitle" style="text-align: center; font-size: 20px; color:#8B008B; font-weight: bolder; font-synthesis: all;">Make Order</h5>
              </div>
              <div class="modal-body">
              <form method="post" id="pospay">
                 
                <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Customer</label>

                    <div class="col-sm-9">
                    <select class="cname form-control" style="width:250px" name="cid" id="cid" required=""></select>

                     </div>
                    <br>
                  </div>
                         
               
                <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Total</label>

                    <div class="col-sm-9">
                    <input type="hidden" name="branch" value="<?php echo $this->session->userdata('branch');?>">
                    <input type="hidden" name="invoice" value="<?php echo $this->session->userdata('code3');?>">
                      <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id');?>">
                     <input type="text" name="subt" class="form-control" id="subt" value="<?php if(isset($pos2)) echo $pos2[0]->subt; ?>" readonly="">
                     <input type="hidden" name="qty" class="form-control" id="qty" value="<?php if(isset($pos2)) echo $pos2[0]->q; ?>">
                       <input type="hidden" name="dw6q" class="form-control" id="dw6q" value="<?php if(isset($dw600)) echo $dw600[0]->q; ?>">
                       <input type="hidden" name="dw5q" class="form-control" id="dw6q" value="<?php if(isset($dw500)) echo $dw500[0]->q; ?>">
                       <input type="hidden" name="dw3q" class="form-control" id="dw3q" value="<?php if(isset($dw350)) echo $dw350[0]->q; ?>">
                       <input type="hidden" name="otherq" class="form-control" id="otherq" value="<?php if(isset($dwother)) echo $dwother[0]->q; ?>">
                       <input type="hidden" name="sdq" class="form-control" id="otherq" value="<?php if(isset($SuperDelux)) echo $SuperDelux[0]->q; ?>">
                      <input type="hidden" name="category" class="form-control" id="category" value="<?php if(isset($SuperDelux)) echo $SuperDelux[0]->category; ?>">
                       <input type="hidden" name="dq" class="form-control" id="otherq" value="<?php if(isset($Delux)) echo $Delux[0]->q; ?>">
                       <input type="hidden" name="sq" class="form-control" id="otherq" value="<?php if(isset($Standard)) echo $Standard[0]->q; ?>">
                       <input type="hidden" name="bt6" class="form-control" id="bt6" value="<?php if(isset($bt6)) echo $bt6[0]->q; ?>">
                       <input type="hidden" name="bt5" class="form-control" id="bt5" value="<?php if(isset($bt5)) echo $bt5[0]->q; ?>">
                       <input type="hidden" name="bt3" class="form-control" id="bt3" value="<?php if(isset($bt3)) echo $bt3[0]->q; ?>">
                       <input type="hidden" name="category" class="form-control" id="category" value="<?php if(isset($hotel)) echo $hotel[0]->category; ?><?php if(isset($ride)) echo $ride[0]->cat; ?><?php if(isset($other)) echo $other[0]->cato; ?>">
                     </div>
                    <br>
                  </div>
                                   
                
                  
                     <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Discount</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="discount" name="discount">
                    </div>
                    <br>
                  </div>
                  
                     <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Grand Total</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="gtotal" name="gtotal" readonly="">
                    </div>
                    <br>
                  </div>
                  
                     <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Paid</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="paid" name="paid">
                    </div>
                    <br>
                  </div>
                  
                     <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Due</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="due" name="due" readonly="">
                    </div>
                    <br>
                  </div>
                  
                     <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Payment Method</label>

                    <div class="col-sm-9">
          <select id="payment_method" class="form-control" name="payment_method">
        <option value="" selected>Choose</option>
        <option value="Cash">Cash</option>
        <option value="SIBL">SIBL</option>
        <option value="DBBL">DBBL</option>
        <option value="IBBL">IBBL</option>
        <option value="EBL">EBL</option>
      </select>
                    </div>
                    <br>
                  </div>
                  
                   <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Food QTY</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fqty" name="fqty" value="0">
                    </div>
                    <br>
                  </div>
                  
                     <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Note</label>
                    <div class="col-sm-9">
<textarea class="form-control" id="note" name="note" placeholder="Note"></textarea>
                    </div>
                    <br>
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Tr. Date</label>
                    <div class="col-sm-9">

                <div class="input-group date">
                  <div class="input-group-addon date">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="trdate" id="datepicker2" required="">
                </div>
                <!-- /.input group -->
              </div>
            </div> 
            <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">DepartureDate</label>
                    <div class="col-sm-9">

                <div class="input-group date">
                  <div class="input-group-addon date">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="DeliveryDate" id="datepicker3" required="">
                </div>
                <!-- /.input group -->
              </div>
            </div>                  
                </form>
      </div>
      <br>
      <div class="modal-footer">
        <br>
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
        <br>
        <button type="button" name="submit" class="btn btn-success" id="btnSave" onclick="pospayment()">Save</button>
      </div>
    </div>
  </div>
</div>




    <br><br>
    </section>

      <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Invoice</th>
                  <th>InvoicePos</th>
                  <th>Customer Name</th>
                  <th>Mobile</th>
                  <th>Total Tk</th>
                  <th>Paid</th>
                  <th>Due</th>
                  <th>PaymentMethod</th>
                  <th>Note</th>
                  <th>EntryDate</th>
                  <th>DepartureDate</th>
                  <th>Branch</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  <?php if (isset($poscd)) { ?>
                  
        <?php foreach ($poscd as $pscd) { ?>
                <tr>
                  <td><a href="<?php echo base_url(); ?>index.php/Accounting/invoice?invoice=<?php echo $pscd->invoice; ?>"><?php echo $pscd->invoice; ?></a></td>
                  <td><a href="<?php echo base_url(); ?>index.php/Accounting/invoicePos?invoice=<?php echo $pscd->invoice; ?>"><?php echo $pscd->invoice; ?></a></td>
                  <td><?php echo $pscd->cname; ?></td>
                  <td><?php echo $pscd->mobile; ?></td>

                  <td><?php echo $pscd->gtotal; ?>
                  </td>
                  <td><?php echo $pscd->paid; ?></td>
                  <td style="color: red; font-weight: bolder;"><?php echo $pscd->due; ?></td>
                  <td><?php echo $pscd->payment_method; ?></td>
                  <td><?php echo $pscd->note; ?></td>                  
                  <td><?php echo $pscd->trdate; ?></td>
                 <td><?php echo $pscd->deliveryDate; ?></td>
                <td><?php echo $pscd->branch; ?></td>



                  <td>
 <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Next Pay" onclick="edit_payment('<?php echo $pscd->invoice; ?>')"><i class="fa fa-money"></i></a> 
</td>
                </tr>
             <?php }} ?>
                </tbody>
                <tfoot>
                <tr>
                <th>Invoice</th>
                  <th>InvoicePos</th>
                  <th>Customer Name</th>
                  <th>Mobile</th>
                  <th>Total Tk</th>
                  <th>Paid</th>
                  <th>Due</th>
                  <th>PaymentMethod</th>
                  <th>Note</th>
                  <th>EntryDate</th>
                  <th>DepartureDate</th>
                  <th>Branch</th>
                  <th>Action</th>

                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <script type="text/javascript">
    
function save(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/createCustomer",
  type: "POST",
  data: $('#frm-cms').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Good job!", "Created Successfully", "success");
 $('#modal-11').modal('hide'); 
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
window.onload = timedRefresh(3000);
}

  </script>
  <script type="text/javascript">
    function timedRefresh2(timeoutPeriod) {
  setTimeout("location.reload(true);",timeoutPeriod);
}
function reload_table2()
{
window.onload = timedRefresh(300);
}
  </script>
    <script type="text/javascript">
    $( document ).ready(function() {
   $( "#clickButton" ).trigger( "click" );
});
    
  </script>
  <script type="text/javascript">
    
function addProduct(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/addProduct",
  type: "POST",
  data: $('#frm-cms2').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Hurruh!", "Added to Cart Successfully", "success");
  reload_table2();
}

   },
   error: function(){

           $('.test2').show();

                setTimeout(function(){ $('.test2').hide();  }, 3000);
                //if success reload ajax table

                $('#modal_form').modal('hide');
   }
 });

}
  </script>

<script type="text/javascript">
  function updQty(){
    $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/updateCart",
  type: "POST",
  data: $('#frm-cart').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Good Job!", "Cart Updated Successfully", "success");
  reload_table2();
}

   },

    error: function(){
     alert('Error Occurred..');
   }
 });

}
</script>
  <script type="text/javascript">
    
function pospayment(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/payment",
  type: "POST",
  data: $('#pospay').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Good job!", "Payment Successful", "success");
 $('#modal-13').modal('hide'); 
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
window.onload = timedRefresh(1000);
}

  </script>
  <script type="text/javascript">
  var save_method; 
// $(document).ready(function() {
//     $('#addOut').click(function(){
//  $('#myModel').modal('show');
//  });

// $('#btn-create').on('click', function(){

// $.ajax({
//   url: "<?php echo base_url() ?>index.php/Inventory/createOut",
//   type: "POST",
//   data: $('#frm-create').serialize(),
//   dataType: 'json',
//   success: function(data){
// if(data.status){
//   $('frm-create')[0].reset();
// alert('Successfully Recorded');
// }
//   },
//   error: function(){
//     alert('Error Occurred..');
//   }
// });

// });
function edit_payment(invoice)
{
   save_method = 'update';
   // $('#form')[0].reset(); // reset form on modals
    // $('.form-group').removeClass('has-error'); // clear error class
    // $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo base_url() ?>index.php/Accounting/pay_edit/" + invoice,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="invoice"]').val(data.invoice);
            $('[name="cname"]').val(data.cname);
            $('[name="mobile"]').val(data.mobile);
            $('[name="gtotal"]').val(data.gtotal);  
            $('[name="paid"]').val(data.paid);            
            $('[name="due"]').val(data.due);            
            $('[name="payment_method"]').val(data.payment_method);            
            $('[name="ship_via"]').val(data.ship_via);            
            $('#myModal15').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Next Payment'); // Set title to Bootstrap modal title




        },
        error: function ()
        {
            alert('Error get data from ajax');
        }
    });
}


</script>

<script type="text/javascript">
 function savepaymentUpdate(){

   $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/updatepay",
  type: "POST",
  data: $('#frm-payupdate77').serialize(),
  dataType: 'json',
   success: function(data){
 if(data.status){
 swal("Good job!", "Updated Successful", "success");
 $('#myModal15').modal('hide'); 
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
window.onload = timedRefresh(1000);
}

  </script>
   <script type="text/javascript">
    
function createVisitor(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/SecurityDep/createVisitor",
  type: "POST",
  data: $('#myFormreg').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Good job!", "Created Successfully", "success");
 $('#modal-default7').modal('hide'); 
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
window.onload = timedRefresh(3000);
}

  </script>
  <script>
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
  </script>