
  <footer class="main-footer" style="background-color: #050505;">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.0
    </div>
    <strong>Copyright &copy;<?php echo date('Y'); ?> <a href="#">BUET IWFM</a></strong> All Rights
    Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>



 <script type="text/javascript">


      $('.cname').select2({
        placeholder: '--- Select Customer ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/Accounting/sc',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>

<script type="text/javascript">


      $('.address').select2({
        placeholder: '--- Choose Address ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/SecurityDep/address',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
 <script type="text/javascript">


      $('.username').select2({
        placeholder: '--- Search with ID ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/User/chooseEmployee',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
 <script type="text/javascript">


      $('.hroom').select2({
        placeholder: '--- Search with Room Code ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/Hotel/searchroom',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
 <script type="text/javascript">


      $('.hd').select2({
        placeholder: '--- Choose ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/Accounting/sc2',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
<script type="text/javascript">
   $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
</script>
 
<div class="modal fade" id="modalorder">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="text-align: center; font-weight: bold; color: green;">Default Modal</h4>
              </div>
              <div class="modal-body">
               <form id="UpdateOdrInfo" method="post" >
                  
                
                 
                  
                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Buyer</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="buyer" name="buyer">
                      <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Style</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="style" name="style">
                    
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">TOD</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="datepicker2" name="tod" placeholder="Time of Delivery">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">PO</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="po" name="po">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Season</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="season" name="season">
          
                    </div>
                  </div>                 
                  
              
                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Order Qty</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="orderqty" name="orderqty" placeholder="Qty" required=''>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">FOB</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="unitprice" name="unitprice" placeholder="FOB">
                    </div>
                  </div>

               
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Branch</label>

                    <div class="col-sm-10">
                    <select class="form-control" name="branch" style="width: 50%" required=''>
                        <option value="" selected>Choose</option>
                        <option value="Friend's Knittings">Friend's Knittings</option>
                        <option value="Debonair">Debonair Ltd</option>
                        <option value="Orbitex Knitting">Orbitex Knitting</option>                      
                        <option value="Debonair Padding & Quilting Solutiuons">DPQSL</option>
                      </select>
                    
                    </div>
                </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Merchandiser</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="merchandiser" name="merchandiser" placeholder="Merchandiser" required=''>
                    </div>
                  </div>

                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">OrderNo</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="orderNo" name="orderNo" placeholder="orderNo">
                    </div>
                  </div>
                   <div class="form-group">
            <label for="note" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                  <select class="form-control" name="status" id="status" style="width: 50%">
                     <option selected value="">Inactive</option>
                     <option value="1">Active</option>
                    
              </select>
                </div>
                  </div>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Note</label>

                    <div class="col-sm-10">

                      <textarea type="text" class="form-control" id="note" name="note" ></textarea>
                    
                    </div>
                </div>
                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">OPD</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="datepicker" name="orderdate" placeholder="Order Placement Date">
                    </div>
                  </div>

                <br>
              </div>
            </form>
              <div class="modal-footer">              
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="UpdateOdrInfo()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<div class="modal fade" id="modalrcv">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="text-align: center; font-weight: bold; color: green;">Default Modal</h4>
              </div>
              <div class="modal-body">
               <form id="fbrRecv" method="post" >
                  
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Steak</label>
                    <div class="col-sm-10">
          <select class="form-control select2" name="steak" id='steak' style="width: 75%;" required="">
              <option selected="active">Choose</option>
           <?php if(isset($steak11)){ ?>
                  <?php foreach ($steak11 as $steak) { ?>                   
                  <option value="<?php echo $steak->steak; ?>"><?php echo $steak->steak; ?></option>               
                <?php }} ?>
                                               
                </select>

                    </div>
                   
                </div>
                 
                  
                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Buyer</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="buyer" name="buyer" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Supplier</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="supplier" name="supplier" readonly="">
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">PO</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="po" name="po" readonly="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Season</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="season" name="season" readonly="">
                      <input type="hidden" class="form-control" id="id" name="id">
                      <input type="hidden" class="form-control" id="booking_id" name="booking_id">
                    </div>
                  </div>

                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Style</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="style" name="style" readonly="" >
                    
                    </div>
                  </div>
                  
                 
                   <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Roll</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="roll" name="roll" >
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Rollinfo</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="lotrollqtyinfo" name="lotrollqtyinfo" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Category</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="item" name="item" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">SubCategory</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="composition" name="composition" readonly="">
                    </div>
                  </div>
                  
                                      
           
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Size</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="size" name="size" readonly="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Dimension</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dimension" name="dimension" readonly="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Article</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="article" name="article" readonly="">
                    </div>
                  </div>
                                        
            <div class="form-group">
            <label for="note" class="col-sm-2 control-label">Group</label>
                <div class="col-sm-10">
                  <select class="form-control" name="itemgrp" id="itemgrp" style="width: 25%">
                     <option selected value="">Choose</option>
                     <option value="SH">SH</option>
                     <option value="LN">LN</option>
                     <option value="PKT">PKT</option>
                    <option value="IN">IN</option>
                  <option value="QLT">QLT</option>
                  <option value="PAD">PAD</option>
                  <option value="MSH">MSH</option>

              </select>
                </div>
                  </div>
                   
                 <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Color</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="color" name="color" >
                    
                    </div>
                </div>
                  <div class="form-group">
            <label for="note" class="col-sm-2 control-label">Shade</label>

                    <div class="col-sm-10">
                  <select class="form-control" name="shade" style="width: 25%">
                     <option selected value="">Choose</option>
                     <option value="A">A</option>
                     <option value="B">B</option>
                     <option value="C">C</option>
                     <option value="D">D</option>
                     <option value="E">E</option>
                     <option value="F">F</option>
                     <option value="G">G</option>
                     <option value="H">H</option>
                     <option value="I">I</option>
                     <option value="J">J</option>
                     <option value="K">K</option>
                     <option value="L">L</option>
                     <option value="M">M</option>
                     <option value="N">N</option>
                     <option value="O">O</option>
                     <option value="P">P</option>
                     

                  
                  </select>
                </div>
                  </div>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">UnitName</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="unitname" name="unitname" readonly="">
                    
                    </div>
                </div>
                 
                 <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Qty</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="qty" name="qty">
                    
                    </div>
                </div>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">PerUnitPrice</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="price" name="price" >
                    
                    </div>
                </div>
                 <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Issue</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" name="outqty" >
                    
                    </div>
                </div>
                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">OrderQty</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="issueOrder" name="issueOrder">
                    </div>
                  </div>
               <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Carton</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="carton" name="carton" >
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Packet</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="packet" name="packet" >
                    </div>
                  </div>
                 

               <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Issue to</label>
                    <div class="col-sm-10">
          <select class="form-control select2" name="issueto" id='issueto' style="width: 75%;" >
              <option selected="active">Choose</option>
                <option value="Cutting">Cutting</option>          
                  <option value="Designs Source Ltd">Designs Source Ltd</option>
                  <option value="Finishing-SM">Finishing-SM</option>
                  <option value="Finishing-JM">Finishing-JM</option>
                  <option value="ASKO-KNITWEARS">ASKO-KNITWEARS</option>
                  <option value="SUB-CONTRACT">SUB-CONTRACT</option>
                  <option value="SM-01">SM-01</option>
                  <option value="SM-02">SM-02</option>
                  <option value="SM-03">SM-03</option>
                  <option value="SM-04">SM-04</option>
                  <option value="SM-05">SM-05</option>
                  <option value="SM-06">SM-06</option>
                  <option value="SM-07">SM-07</option>
                  <option value="SM-08">SM-08</option>
                  <option value="SM-09">SM-09</option>
                  <option value="SM-10">SM-10</option>
                  <option value="JM-01">JM-01</option>
                  <option value="JM-02">JM-02</option>
                  <option value="JM-03">JM-03</option>
                  <option value="JM-04">JM-04</option>
                  <option value="JM-05">JM-05</option>
                  <option value="JM-06">JM-06</option>
                  <option value="JM-07">JM-07</option>
                  <option value="JM-08">JM-08</option>
                  <option value="JM-09">JM-09</option>
                  <option value="JM-10">JM-10</option>

                </select>

                    </div>
                   
                </div>
                 
                

                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
          <select class="form-control select2" name="status" style="width: 75%;" required="">
             <option selected="active">Choose</option>                                
                  <option value="0">Pending</option>          
                  <option value="1">Received</option> 
                   <option value="3">LOC</option> 
                   <option value="4">RACKOUT</option>                                 

                                 
                </select>

                    </div>
                   
                </div>             
               
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Pickup#</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="picupno" name="picupno">
                    
                    </div>
                </div>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Branch</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="branch" name="branch" readonly="">
                    
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Note</label>

                    <div class="col-sm-10">

                      <textarea type="text" class="form-control" id="note" name="note" ></textarea>
                    
                    </div>
                </div>
              <div class="form-group">
            <label for="note" class="col-sm-2 control-label">Warehouse</label>

                    <div class="col-sm-10">
                  <select class="form-control" name="store" style="width: 40%" required="">
                     <option selected value="">Choose</option>
                     <option value="0">Accessories</option>
                     <option value="1">Fabrics</option>                 
                  </select>
                </div>
                  </div>
                <br>
              </div>
            </form>
              <div class="modal-footer">              
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="fbrcRcv()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="modalrcv2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="text-align: center; font-weight: bold; color: green;">Default Modal</h4>
              </div>
              <div class="modal-body">
               <form id="fbrRecv2" method="post" >

                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Barcode</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="barcode" name="barcode" readonly="">
                      <input type="hidden" class="form-control" id="id" name="id">
<input type="hidden" class="form-control" id="booking_id" name="booking_id">


                    
                    </div>
                </div>
                 
                  <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Steak#</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="Steak" name="steak" readonly="">

                    
                    </div>
                </div>
                 <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Buyer</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="buyer" name="buyer" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Supplier</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="supplier" name="supplier" readonly="">
                    </div>
                  </div>
               
                

                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Style</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="style" name="style" readonly="">
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">PO</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="po" name="po" readonly="">
                      <input type="hidden" class="form-control" id="merchandiser" name="merchandiser" readonly="">
                      <input type="hidden" class="form-control" id="store" name="store" readonly="">
                      <input type="hidden" class="form-control" id="unitname" name="unitname" readonly="">
                      <input type="hidden" class="form-control" id="cwpc" name="cwpc" readonly="">
                      <input type="hidden" class="form-control" id="composition" name="composition" readonly="">
                      <input type="hidden" class="form-control" id="color" name="color" readonly="">
                      <input type="hidden" class="form-control" id="article" name="article" readonly="">
                      <input type="hidden" class="form-control" id="size" name="size" readonly="">
                      <input type="hidden" class="form-control" id="dimension" name="dimension" readonly="">
                      <input type="hidden" class="form-control" id="receivedate" name="receivedate" readonly="">
                    
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Item</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="item" name="item" readonly="">
                    </div>
                  </div>
                                 
                    <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Packet</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="packet" name="packet" readonly="">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Carton</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="carton" name="carton" readonly="">
                    </div>
                  </div>                
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Qty</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="qty" name="qty" readonly="" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Issue</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="outqty" name="outqty" readonly="">
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">NextIssue</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="outqty2">
                    </div>
                  </div>
               <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">TotalIssue</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="totalissue" name="totalissue" readonly="">
                    </div>
                  </div>
                     <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Issue to</label>
                    <div class="col-sm-10">
          <select class="form-control select2" name="issueto" id='issueto' style="width: 75%;" >
              <option selected="active">Choose</option>
                <option value="Cutting">Cutting</option>          
                  <option value="Designs Source Ltd">Designs Source Ltd</option>
                  <option value="Finishing-SM">Finishing-SM</option>
                  <option value="Finishing-JM">Finishing-JM</option>
                  <option value="ASKO-KNITWEARS">ASKO-KNITWEARS</option>
                  <option value="SUB-CONTRACT">SUB-CONTRACT</option>
                  <option value="SM-01">SM-01</option>
                  <option value="SM-02">SM-02</option>
                  <option value="SM-03">SM-03</option>
                  <option value="SM-04">SM-04</option>
                  <option value="SM-05">SM-05</option>
                  <option value="SM-06">SM-06</option>
                  <option value="SM-07">SM-07</option>
                  <option value="SM-08">SM-08</option>
                  <option value="SM-09">SM-09</option>
                  <option value="SM-10">SM-10</option>
                  <option value="JM-01">JM-01</option>
                  <option value="JM-02">JM-02</option>
                  <option value="JM-03">JM-03</option>
                  <option value="JM-04">JM-04</option>
                  <option value="JM-05">JM-05</option>
                  <option value="JM-06">JM-06</option>
                  <option value="JM-07">JM-07</option>
                  <option value="JM-08">JM-08</option>
                  <option value="JM-09">JM-09</option>
                  <option value="JM-10">JM-10</option>


                </select>

                    </div>
                   
                </div>
                <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">CuttingQty</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="issueOrder" name="issueOrder">
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">InputDate</label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputdate" name="inputdate">
                    </div>
                  </div> 
                 <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Requisition#</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="requisi_no" name="requisi_no">
                    </div>
                  </div> 
                 <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Cutting#</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="cuttingno" name="cuttingno">
                    </div>
                  </div> 
                <br>
              </div>
            </form>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="fbrcRcv2()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
  <div class="modal fade" id="myModal15">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
 <h5 class="modal-title" id="exampleModalCenterTitle" style="text-align: center; font-size: 20px; color:#8B008B; font-weight: bolder; font-synthesis: all;">Record Visitor</h5>            
   </div> 
              <div class="modal-body">
                 <form id="myFormreg2" method="post" >
                  <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                         <input type="text" name="visitorname" id="visitorname" class="form-control" style="width:250px" id="visitorname">
                       <input type="hidden" class="form-control" id="barcode" name="barcode">

                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br><br>

              <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Contact</label>
                    <div class="col-sm-6">
                         <input type="text" name="contact" id="contact" class="form-control" style="width:250px">
                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-6">                    
     <input type="text" name="address" id="address" class="form-control" style="width:250px">                 </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Whom to Meet</label>
                    <div class="col-sm-6">
           <select class="employeename form-control" style="width:250px" name="employeename" required=""></select> 
                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Purpose</label>
                    <div class="col-sm-6">
                   <select class="form-control" name="note">
                    <option value="Interview">Interview</option>
                     <option value="Meeting">Meeting</option>
                     <option value="Visit">Visit</option>
                     <option value="Technical Support">Technical Support</option>
                      <option value="Others">Others</option>
                  </select>
                    </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br>
             <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Note</label>
                    <div class="col-sm-6">                    
     <input type="text" name="note2" id="note2" class="form-control" style="width:250px">        
              </div>
                    <div class="col-sm-3">                  
              
                  </div>
                </div><br>
          
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="createVisitor2()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
<!-- ./wrapper -->

<script type="text/javascript">


      $('.employeename').select2({
        placeholder: '--- Select Employee ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/SecurityDep/empl',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
<script type="text/javascript">


      $('.style2').select2({
        placeholder: '--- Select Style ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/LOC/style',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
<script type="text/javascript">


      $('.productname').select2({
        placeholder: '--- Select ProductName ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/LOC/productname',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
<script type="text/javascript">


      $('.productname2').select2({
        placeholder: '--- Select ProductName ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/SecurityDep/productname',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>

<script type="text/javascript">


      $('.purchaser').select2({
        placeholder: '--- Select Purchaser ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/SecurityDep/purchaser',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>


<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<!-- FastClick -->
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<!-- page script -->
<script>
  $(function () {
    "use strict";

    // AREA CHART
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666, item2: 2666},
        {y: '2011 Q2', item1: 2778, item2: 2294},
        {y: '2011 Q3', item1: 4912, item2: 1969},
        {y: '2011 Q4', item1: 3767, item2: 3597},
        {y: '2012 Q1', item1: 6810, item2: 1914},
        {y: '2012 Q2', item1: 5670, item2: 4293},
        {y: '2012 Q3', item1: 4820, item2: 3795},
        {y: '2012 Q4', item1: 15073, item2: 5967},
        {y: '2013 Q1', item1: 10687, item2: 4460},
        {y: '2013 Q2', item1: 8432, item2: 5713}
      ],
      xkey: 'y',
      ykeys: ['item1', 'item2'],
      labels: ['Item 1', 'Item 2'],
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    });

    // LINE CHART
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666},
        {y: '2011 Q2', item1: 2778},
        {y: '2011 Q3', item1: 4912},
        {y: '2011 Q4', item1: 3767},
        {y: '2012 Q1', item1: 6810},
        {y: '2012 Q2', item1: 5670},
        {y: '2012 Q3', item1: 4820},
        {y: '2012 Q4', item1: 15073},
        {y: '2013 Q1', item1: 10687},
        {y: '2013 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [
        {label: "Download Sales", value: 12},
        {label: "In-Store Sales", value: 30},
        {label: "Mail-Order Sales", value: 20}
      ],
      hideHover: 'auto'
    });
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
  });
</script>
<script type="text/javascript">
   $(function () {
    var outqty = $('input:text[id$=outqty]').keyup(foo);
    var outqty2 = $('input:text[id$=outqty2]').keyup(foo);            
    var totalissue = $('input:text[id$=totalissue]').keyup(foo);   
 function foo() {
        var value1 = outqty.val();
        var value2 = outqty2.val();   

        if(IsNumeric(value2)){
        if(IsNumeric(value1)){
        var value3 = parseFloat(value1) + parseFloat(value2);
        $('input:text[id$=totalissue]').val(value3);
        }}

        
    }
    function IsNumeric(input) {
        return (input - 0) == input && input.length > 0;
    }
});
      
</script>

      <script type="text/javascript">
   $(function () {
    var inn = $('input:text[id$=inn]').keyup(foo);
    var stock = $('input:text[id$=stock]').keyup(foo);            
    var thg = $('input:text[id$=thg]').keyup(foo);   
 function foo() {
        var value1 = inn.val();
        var value2 = stock.val();   

        if(IsNumeric(value2)){
        if(IsNumeric(value1)){
        var value3 = parseFloat(value1) + parseFloat(value2);
        $('input:text[id$=thg]').val(value3);
        }}

        
    }
    function IsNumeric(input) {
        return (input - 0) == input && input.length > 0;
    }
});
      
</script>

      <script type="text/javascript">
   $(function () {
    var tout = $('input:text[id$=tout]').keyup(foo);
    var ot = $('input:text[id$=ot]').keyup(foo);            
    var total = $('input:text[id$=total]').keyup(foo);   
 function foo() {
        var value1 = tout.val();
        var value2 = ot.val();   

        if(IsNumeric(value2)){
        if(IsNumeric(value1)){
        var value3 = parseFloat(value1) + parseFloat(value2);
        $('input:text[id$=total]').val(value3);
        }}

        
    }
    function IsNumeric(input) {
        return (input - 0) == input && input.length > 0;
    }
});
      
</script>







      <script type="text/javascript">
   $(function () {
    var subt = $('input:text[id$=subt]').keyup(foo);
    var discount = $('input:text[id$=discount]').keyup(foo);            
    var gtotal = $('input:text[id$=gtotal]').keyup(foo);   
          
 function foo() {
        var value1 = subt.val();
        var value2 = discount.val();      
        if(IsNumeric(value2)){
        if(IsNumeric(value1)){
        var value3 = parseFloat(value1) - parseFloat(value2);
        $('input:text[id$=gtotal]').val(value3);
        }}

        
    }
    function IsNumeric(input) {
        return (input - 0) == input && input.length > 0;
    }
});
      
</script>

      <script type="text/javascript">
   $(function () {
    var gtotal = $('input:text[id$=gtotal]').keyup(foo);
    var paid = $('input:text[id$=paid]').keyup(foo);            
    var due = $('input:text[id$=due]').keyup(foo);   
 function foo() {
        var value1 = gtotal.val();
        var value2 = paid.val();   

        if(IsNumeric(value2)){
        if(IsNumeric(value1)){
        var value3 = parseFloat(value1) - parseFloat(value2);
        $('input:text[id$=due]').val(value3);
        }}

        
    }
    function IsNumeric(input) {
        return (input - 0) == input && input.length > 0;
    }
});
      
</script>

      <script type="text/javascript">
   $(function () {
        var gtotal = $('input:text[id$=gtotal]').keyup(foo);  
    var paid = $('input:text[id$=paid]').keyup(foo);            
    var due = $('input:text[id$=due]').keyup(foo);
 
 function foo() {
        var value1 = gtotal.val();
        var value2 = paid.val();   

        if(IsNumeric(value2)){
        if(IsNumeric(value1)){
        var value3 = parseFloat(value1) - parseFloat(value2);
        $('input:text[id$=due]').val(value3);
        }}

        
    }
    function IsNumeric(input) {
        return (input - 0) == input && input.length > 0;
    }
});
      
</script>
      <script type="text/javascript">
   $(function () {
        var ttp = $('input:text[id$=ttp]').keyup(foo);  
    var pp = $('input:text[id$=pp]').keyup(foo);   
        var nxtp = $('input:text[id$=nxtp]').keyup(foo);
    var dd = $('input:text[id$=dd]').keyup(foo);
 
 function foo() {
        var value1 = ttp.val();
        var value2 = pp.val();  
        var value3 = nxtp.val();   
 

        if(IsNumeric(value3)){
          if(IsNumeric(value2)){
        if(IsNumeric(value1)){
        var value4 = parseFloat(value1) - (parseFloat(value2)+parseFloat(value3));
        $('input:text[id$=dd]').val(value4);
        }}}

        
    }
    function IsNumeric(input) {
        return (input - 0) == input && input.length > 0;
    }
});
      
</script>
  

<div class="md-overlay"></div><!-- the overlay element -->

    <!-- classie.js by @desandro: https://github.com/desandro/classie -->
    <script src="<?php echo base_url() ?>js/classie.js"></script>
    <script src="<?php echo base_url() ?>js/modalEffects.js"></script>

    <!-- for the blur effect -->
    <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
    <script>
      // this is important for IEs
      var polyfilter_scriptpath = '/js/';
    </script>
    <script src="<?php echo base_url() ?>js/cssParser.js"></script>
    <script src="<?php echo base_url() ?>js/css-filters-polyfill.js"></script>
 
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

<!-- <script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script> -->
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- FastClick -->
<!-- AdminLTE App -->
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
<script type="text/javascript">
   $('#datepicker').datepicker({
      autoclose: true
    })
</script>
<script type="text/javascript">
   $('#datepicker2').datepicker({
      autoclose: true
    })
</script>
<script type="text/javascript">
   $('#datepicker3').datepicker({
      autoclose: true
    })
</script>

            <script type="text/javascript">
    
function creg(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/createCustomer",
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
   <script type="text/javascript">
    $(document).ready(function(){

  // Initialize Select2
  $('#sel_users').select2();
  

  // Set option selected onchange
  $('#user_selected').change(function(){
    var value = $(this).val();

    // Set selected 
    $('#sel_users').val(value);
    $('#sel_users').select2().trigger('change');

  });
});
  </script>
  <script src="<?php echo base_url(); ?>select2/dist/js/select2.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
</body>
</html>