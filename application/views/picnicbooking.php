<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Picnic Booking
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li> <a href="<?php echo base_url(); ?>index.php/Inventory/Product">Back </a> </li>
        <li class="active">Booking</li>
      </ol>
    
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <br>
           <div class="tab-pane active" id="settings">
                <form class="form-horizontal" method="post" action="StockIn" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">Organization Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="orgname" name="orgname" required="" placeholder="Organization Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="note" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="product_code" class="col-sm-2 control-label">Mobile-01</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="mobile" name="mobile" required="" placeholder="1st Mobile">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="product_code" class="col-sm-2 control-label">Mobile-02</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="mobile2" name="mobile2" required="" placeholder="2nd Mobile">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Persons</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="persons" name="persons" required="" placeholder="Persons">
                    </div>
                  </div>
                      <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Package</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="package" style="width: 40%">
                        <option value="" selected>Choose</option>
                        <option value="D. W. P. Entry(dw350)">D. W. P. Entry(dw350)</option>
                        <option value="Dry W. P. All Rides(dw600)">Dry W. P. All Rides(dw600)</option>
                        <option value="Dry W. P. All Rides(dw500)">Dry W. P. All Rides(dw500)</option>
                      </select>
<!--                       <input type="number" class="form-control" id="mobile" name="mobile" required="" placeholder="Phone Number">
 -->                    </div>
                  </div>
                   <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Rate</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="rate" name="rate" required="" placeholder="Rate Tk.">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Total</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="total" name="total" required="" placeholder="Total Tk.">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Conference Hall</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="conferencehall" name="conferencehall" placeholder="Conference Hall Tk.">
                    </div>
                  </div>
                 
                 <!-- <div class="form-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control" id="sellprice" name="sellprice" placeholder="Selling Price">
                <span class="input-group-addon">.00</span>
              </div> -->
              <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Decorator</label>

                    <div class="col-sm-2">
                        <label for="sellprice" class="col-sm-2 control-label">Pandel</label><br>
                      <input type="checkbox" class="minimal">
                    </div>
                    <div class="col-sm-2">
                        <label for="sellprice" class="col-sm-2 control-label">Stage</label><br>
                        <input type="checkbox" class="minimal">
                        </div>
                        <div class="col-sm-2">
                        <label for="sellprice" class="col-sm-2 control-label">Cookeries</label><br>
                      <input type="checkbox" class="minimal">
                    </div>
                    <div class="col-sm-2">
                        <label for="sellprice" class="col-sm-2 control-label">ServiceMan</label><br>
                        <input type="checkbox" class="minimal">
                        </div>
                    
                  </div>
             
            
              <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Spot</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="branch" style="width: 40%">
                        <option value="" selected>Choose</option>
                        <option value="Dhamrai">Dhamrai</option>
                        <option value="Mymenshing">Mymenshing</option>
                      </select>
<!--                       <input type="number" class="form-control" id="mobile" name="mobile" required="" placeholder="Phone Number">
 -->                    </div>
                  </div>
                
                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Food</label>

                    <div class="col-sm-6">
               

    <select class="selectpicker" multiple data-live-search="true">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>
</div>
<div class="col-sm-4">
    <input type="text" class="form-control" id="foodtk" name="foodtk" placeholder="Total Tk.">
    </div>
                 </div>
                  
               <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Room</label>

                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="qty" name="qtyroom" placeholder="QTY">
                        </div>
                        <div class="col-sm-3">
    <input type="text" class="form-control" id="rateroom" name="rateroom" placeholder="Rate">
    </div>
     <div class="col-sm-3">
    <input type="text" class="form-control" id="totalroom" name="totalroom" placeholder="Total TK.">
    </div>
                      
                      
                      
                    </div>
                  
                   <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Branch</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="branch" style="width: 40%">
                        <option value="" selected>Choose</option>
                        <option value="Dhamrai">Dhamrai</option>
                        <option value="Mymenshing">Mymenshing</option>
                      </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="note" class="col-sm-2 control-label">Note</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="note" name="note" placeholder="note"></textarea>
                    </div>
                  </div>
               
               <!--    <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div> -->
                  
                 <div class="form-group">
                    <label for="tstock" class="col-sm-2 control-label">Entry Date</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" id="datepicker" required="" name="entryDate" placeholder="Entry Date">
                    </div>
                  </div>
              <br>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Submit</button>
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

     <script>
         $('select').selectpicker();
     </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


  </section>
</div>

 