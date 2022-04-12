<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Entry
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li> <i class="fa fa-th"> </i> <a href="<?php echo base_url(); ?>index.php/Inventory/Product"> Search </a> </li>
        <li class="active"> Entry</li>
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
                    <label for="productName" class="col-sm-2 control-label">Product Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="productName" name="productName" required="" placeholder="Product Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="product_code" class="col-sm-2 control-label">Product Code</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="product_code" name="product_code" required="" placeholder="Product Code">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="category" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-5">

                       <select class="form-control select2" name="category" style="width: 100%;" required="">
                        <option selected="active">Select Category</option>
                  <?php if(isset($catSelect2)){ ?>
                  <?php foreach ($catSelect2 as $cat) { ?>                   
                  <option><?php echo $cat->category; ?></option>               
                <?php }} ?>
                </select>

                    </div>
                    <div class="col-sm-5">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success"><i class="glyphicon glyphicon-plus"></i>Category(If Required)
                </button>
                 <?php
              $success_msg2= $this->session->flashdata('success_msg2');
              
              $error_msg2= $this->session->flashdata('error_msg2');

                  if($success_msg2){                    
                  
                   echo "<p style='color: green; font-weight: bolder;'>". $success_msg2; 
                  
                  }

                  if($error_msg2){
                    
                    
                   echo "<p style='color: red; font-weight: bolder;'>". $error_msg2;                    
            
                  }
                  ?>
              
                  </div>
                </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Price</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="sellprice" name="sellprice" required="" placeholder="Price">
                    </div>
                  </div>
                 
                 <!-- <div class="form-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control" id="sellprice" name="sellprice" placeholder="Selling Price">
                <span class="input-group-addon">.00</span>
              </div> -->
                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Branch</label>

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
      <div class="modal modal-success fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create Category</h4>
              </div>
        <form action="Category_add" method="post" class="form-horizontal">
              <div class="modal-body">
                 <div class="form-group">
                    <label for="tstock" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="category" name="category" required="" placeholder="Category">
                    </div>
                    <br>
                  </div>                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-outline">Save</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      <div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create Supplier</h4>
              </div>
           <form method="post" action="addSupplier"> 
              <div class="modal-body">
                <div class="form-group">
                    <label for="supplier" class="col-sm-2 control-label">Supplier</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="supplier" name="supplier" required="" placeholder="Supplier Name">
                    </div>
                    <br>
                  </div>
                  <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Contact</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="contact" name="contact" required="" placeholder="Contact">
                    </div>
                    <br>
                  </div>
                  <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="address" name="address" required="" placeholder="Address">
                    </div>
                    <br>
                  </div>
                 
                </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline">Save</button>
              </div>
            </form>

            </div>

            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

  </section>
</div>
 