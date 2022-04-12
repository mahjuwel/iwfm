 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hotel Booking 
        <small>System</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Hotel</a></li>
        <li class="active">Booking</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
          	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Book
              </button>
              <a href="" class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-default7">
                Register Customer
              </a>
              
                 </h3>

          <div class="box-tools pull-right">
            <form method="post" action="<?php echo base_url();?>index.php/Hotel/Booking">
                
                 <input type="text" name="bdate" id="datepicker" class="btn btn-default" placeholder="Date">

              <button type="submit" name="submit"><i class="fa fa-search" style="height: 30%%;"></i></button>       
              

               </form>
          </div>
        </div>
        <div class="box-body">
            <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
<h5 class="modal-title" id="exampleModalCenterTitle" style="text-align: center; font-size: 20px; color:#8B008B; font-weight: bolder; font-synthesis: all;">Room Book</h5>              </div>
              <div class="modal-body">
                 <form id="myFormBook" method="post">
                  <div class="form-group">
                    <label for="pstock" class="col-sm-3 control-label">Customer</label>

                    <div class="col-sm-9">
                    <select class="cname form-control" style="width:250px" name="cid"></select>
                     </div>
                    <br>
                  </div>

               <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Room</label>
                    <div class="col-sm-9">
                         <select class="hroom form-control" style="width:250px" name="hrcode" id="hrcode"></select>
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-9">
            <select name="rstatus" class="form-control">
           	<option value="0" selected="">Choose</option>
           	<option value="1">Booked</option>
           	<option value="0">Unbook</option>
           	<option value="2">CashPaid</option>
           	<option value="3">Problem</option>


           </select>
       </div>
       <br>

        
                  
                </div>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Time</label>
                    <div class="col-sm-9">
               <input type="hidden" name="user_id" id="user_id" value="<?php echo $this->session->userdata('user_id') ?>">


            <input type="text" name="rdate" id="rdate"  class="form-control" placeholder="Time">
                    </div>
                    <br>
                </div>
           <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Date</label>
                    <div class="col-sm-9">

            <input type="text" name="bdate" id="datepicker2"  class="form-control" placeholder="Choose">
                    </div>
                    <br>
                </div>
          

         
   </form>
              </div>
              <br>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="RoomBook()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->

          </div>
          <!-- /.modal-dialog -->

        </div>

        <div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change Hotel Booking Status</h4>
              </div>
              <div class="modal-body">
              	<form method="post" id="frm-unbook">
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Customer</label>
                    <div class="col-sm-9">
               <input type="hidden" name="id" id="id" class="form-control">
            <input type="text" name="cname" id="cname"  class="form-control" readonly="">
                    </div>
                    <br>
                </div>          
                 <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Room#</label>
                    <div class="col-sm-9">
            <input type="text" name="hrcode" id="hrcode"  class="form-control" readonly="">
                    </div>
                    <br>
                </div> 
                   <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-9">
               <select name="rstatus" class="form-control">
           	<option value="" selected="">Choose</option>
           	<option value="1">Booked</option>
           	<option value="0">Unbooked</option>

           </select>
                    </div>
                    <br>
                </div> 
                   <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">BookingTime</label>
                    <div class="col-sm-9">
               <input type="hidden" name="id" id="id" class="form-control">
            <input type="text" name="rdate" id="rdate"  class="form-control" readonly="">
                    </div>
                    <br>
                </div> 
                 </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline" onclick="UnBookRoom()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 70px 25px;
  width: 100%;
  background: #1abc9c;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
}

</style>
</head>
<body>



<div class="month">      
  <ul>
    
    <li>
      <?php echo $this->session->userdata('bdate'); ?><br>
      <span style="font-size:18px"></span>
    </li>
  </ul>
</div>

<ul class="weekdays">

  <li>Dhamrai</li>
  <li>Dhanrai</li>
  <li>Dhamrai</li>
  <li>Dhamrai</li>
  <li>Dhamrai</li>
  <li>Dhamrai</li>
  <li>Dhamrai</li>

</ul>

<ul class="days">  
	<li><span class="<?php if(isset($bk[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk[0]->cname)) echo 'Booked' ?>, <?php echo $bk[0]->rdate ?>, <?php echo $bk[0]->cname ?>, <?php echo $bk[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-s-101</a> 
</span></li>
<li><span class="<?php if(isset($bk2[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk2[0]->cname)) echo 'Booked' ?>, <?php echo $bk2[0]->rdate ?>, <?php echo $bk2[0]->cname ?>, <?php echo $bk2[0]->mobile ?>"><a href="javascript:void(0)" title="Unbook" onclick="Undo2('<?php echo $bk2[0]->id; ?>')" <?php if (!isset($bk2[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-s-102</a> 
</span></li>
<li><span class="<?php if(isset($bk3[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk3[0]->cname)) echo 'Booked' ?>, <?php echo $bk3[0]->rdate ?>, <?php echo $bk3[0]->cname ?>, <?php echo $bk3[0]->mobile ?>"><a href="javascript:void(0)" title="Unbook" onclick="Undo3('<?php echo $bk3[0]->id; ?>')" <?php if (!isset($bk3[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-s-103</a> 
</span></li>
<li><span class="<?php if(isset($bk4[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk4[0]->cname)) echo 'Booked' ?>, <?php echo $bk4[0]->rdate ?>, <?php echo $bk4[0]->cname ?>, <?php echo $bk4[0]->mobile ?>"><a href="javascript:void(0)" title="Unbook" onclick="Undo4('<?php echo $bk4[0]->id; ?>')" <?php if (!isset($bk4[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-s-104</a> 
</span></li>
<li><span class="<?php if(isset($bk5[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk5[0]->cname)) echo 'Booked' ?>, <?php echo $bk5[0]->rdate ?>, <?php echo $bk5[0]->cname ?>, <?php echo $bk5[0]->mobile ?>"><a href="javascript:void(0)" title="Unbook" onclick="Undo5('<?php echo $bk5[0]->id; ?>')" <?php if (!isset($bk5[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-s-105</a> 
</span></li>
<li><span class="<?php if(isset($bk6[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk6[0]->cname)) echo 'Booked' ?>, <?php echo $bk6[0]->rdate ?>, <?php echo $bk6[0]->cname ?>, <?php echo $bk6[0]->mobile ?>"><a href="javascript:void(0)" title="Unbook" onclick="Undo6('<?php echo $bk6[0]->id; ?>')" <?php if (!isset($bk6[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-s-106</a> 
</span></li>
<li><span class="<?php if(isset($bk7[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk7[0]->cname)) echo 'Booked' ?>, <?php echo $bk7[0]->rdate ?>, <?php echo $bk7[0]->cname ?>, <?php echo $bk7[0]->mobile ?>"><a href="javascript:void(0)" title="Unbook" onclick="Undo7('<?php echo $bk7[0]->id; ?>')" <?php if (!isset($bk7[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-s-107</a> 
</span></li>
 
  <li><span class="<?php if(isset($bk8[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk8[0]->cname)) echo 'Booked' ?>, <?php echo $bk8[0]->rdate ?>, <?php echo $bk8[0]->cname ?>, <?php echo $bk8[0]->mobile ?>"><a href="javascript:void(0)" title="Unbook" onclick="Undo8('<?php echo $bk8[0]->id; ?>')" <?php if (!isset($bk8[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-s-108</a> 
</span></li>

	<li><span class="<?php if(isset($bk9[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk9[0]->cname)) echo 'Booked' ?>, <?php echo $bk9[0]->rdate ?>, <?php echo $bk9[0]->cname ?>, <?php echo $bk9[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk9[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk9[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-201</a> 
</span></li>
	<li><span class="<?php if(isset($bk10[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk10[0]->cname)) echo 'Booked' ?>, <?php echo $bk10[0]->rdate ?>, <?php echo $bk10[0]->cname ?>, <?php echo $bk10[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk10[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk10[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-202</a> 
</span></li>
	<li><span class="<?php if(isset($bk11[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk11[0]->cname)) echo 'Booked' ?>, <?php echo $bk11[0]->rdate ?>, <?php echo $bk11[0]->cname ?>, <?php echo $bk11[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk11[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk11[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-203</a> 
</span></li>
	<li><span class="<?php if(isset($bk12[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk12[0]->cname)) echo 'Booked' ?>, <?php echo $bk12[0]->rdate ?>, <?php echo $bk12[0]->cname ?>, <?php echo $bk12[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk12[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk12[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-204</a> 
</span></li> 
	<li><span class="<?php if(isset($bk13[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk13[0]->cname)) echo 'Booked' ?>, <?php echo $bk13[0]->rdate ?>, <?php echo $bk13[0]->cname ?>, <?php echo $bk13[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk13[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk13[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-205</a> 
</span></li>
	<li><span class="<?php if(isset($bk14[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk14[0]->cname)) echo 'Booked' ?>, <?php echo $bk14[0]->rdate ?>, <?php echo $bk14[0]->cname ?>, <?php echo $bk14[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk14[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk14[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-206</a> 
</span></li>
	<li><span class="<?php if(isset($bk15[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk15[0]->cname)) echo 'Booked' ?>, <?php echo $bk15[0]->rdate ?>, <?php echo $bk15[0]->cname ?>, <?php echo $bk15[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk15[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk15[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-207</a> 
</span></li>
	<li><span class="<?php if(isset($bk16[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk16[0]->cname)) echo 'Booked' ?>, <?php echo $bk16[0]->rdate ?>, <?php echo $bk16[0]->cname ?>, <?php echo $bk16[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk16[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk16[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-208</a> 
</span></li>
<li><span class="<?php if(isset($bk17[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk17[0]->cname)) echo 'Booked' ?>, <?php echo $bk17[0]->rdate ?>, <?php echo $bk17[0]->cname ?>, <?php echo $bk17[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk17[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk17[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-209</a> 
</span></li>
<li><span class="<?php if(isset($bk18[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk18[0]->cname)) echo 'Booked' ?>, <?php echo $bk18[0]->rdate ?>, <?php echo $bk18[0]->cname ?>, <?php echo $bk18[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk18[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk18[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-210</a> 
</span></li>
<li><span class="<?php if(isset($bk19[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk19[0]->cname)) echo 'Booked' ?>, <?php echo $bk19[0]->rdate ?>, <?php echo $bk19[0]->cname ?>, <?php echo $bk19[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk19[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk19[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-211</a> 
</span></li>
<li><span class="<?php if(isset($bk20[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk20[0]->cname)) echo 'Booked' ?>, <?php echo $bk20[0]->rdate ?>, <?php echo $bk20[0]->cname ?>, <?php echo $bk20[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk20[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk20[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-212</a> 
</span></li>
<li><span class="<?php if(isset($bk21[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk21[0]->cname)) echo 'Booked' ?>, <?php echo $bk21[0]->rdate ?>, <?php echo $bk21[0]->cname ?>, <?php echo $bk21[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk21[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk21[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-213</a> 
</span></li>
<li><span class="<?php if(isset($bk22[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk22[0]->cname)) echo 'Booked' ?>, <?php echo $bk22[0]->rdate ?>, <?php echo $bk22[0]->cname ?>, <?php echo $bk22[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk22[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk22[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-214</a> 
</span></li>
<li><span class="<?php if(isset($bk23[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk23[0]->cname)) echo 'Booked' ?>, <?php echo $bk23[0]->rdate ?>, <?php echo $bk23[0]->cname ?>, <?php echo $bk23[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk23[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk23[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-215</a> 
</span></li>
<li><span class="<?php if(isset($bk24[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk24[0]->cname)) echo 'Booked' ?>, <?php echo $bk24[0]->rdate ?>, <?php echo $bk24[0]->cname ?>, <?php echo $bk24[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk24[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk24[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-216</a> 
</span></li>
<li><span class="<?php if(isset($bk25[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk25[0]->cname)) echo 'Booked' ?>, <?php echo $bk25[0]->rdate ?>, <?php echo $bk25[0]->cname ?>, <?php echo $bk25[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk25[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk25[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-217</a> 
</span></li>
<li><span class="<?php if(isset($bk26[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk26[0]->cname)) echo 'Booked' ?>, <?php echo $bk26[0]->rdate ?>, <?php echo $bk26[0]->cname ?>, <?php echo $bk26[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk26[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk26[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-sd-218</a> 
</span></li>
<li><span class="<?php if(isset($bk27[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk27[0]->cname)) echo 'Booked' ?>, <?php echo $bk27[0]->rdate ?>, <?php echo $bk27[0]->cname ?>, <?php echo $bk27[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk27[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk27[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-301</a> 
</span></li>
<li><span class="<?php if(isset($bk28[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk28[0]->cname)) echo 'Booked' ?>, <?php echo $bk28[0]->rdate ?>, <?php echo $bk28[0]->cname ?>, <?php echo $bk28[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk28[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk28[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-302</a> 
</span></li>
<li><span class="<?php if(isset($bk29[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk29[0]->cname)) echo 'Booked' ?>, <?php echo $bk29[0]->rdate ?>, <?php echo $bk29[0]->cname ?>, <?php echo $bk29[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk29[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk29[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-303</a> 
</span></li>
<li><span class="<?php if(isset($bk30[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk30[0]->cname)) echo 'Booked' ?>, <?php echo $bk30[0]->rdate ?>, <?php echo $bk30[0]->cname ?>, <?php echo $bk30[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk30[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk30[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-304</a> 
</span></li>
<li><span class="<?php if(isset($bk31[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk31[0]->cname)) echo 'Booked' ?>, <?php echo $bk31[0]->rdate ?>, <?php echo $bk31[0]->cname ?>, <?php echo $bk31[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk31[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk31[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-305</a> 
</span></li>
<li><span class="<?php if(isset($bk32[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk32[0]->cname)) echo 'Booked' ?>, <?php echo $bk32[0]->rdate ?>, <?php echo $bk32[0]->cname ?>, <?php echo $bk32[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk32[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk32[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-306</a> 
</span></li>
<li><span class="<?php if(isset($bk33[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk33[0]->cname)) echo 'Booked' ?>, <?php echo $bk33[0]->rdate ?>, <?php echo $bk33[0]->cname ?>, <?php echo $bk33[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk33[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk33[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-307</a> 
</span></li>
<li><span class="<?php if(isset($bk34[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk34[0]->cname)) echo 'Booked' ?>, <?php echo $bk34[0]->rdate ?>, <?php echo $bk34[0]->cname ?>, <?php echo $bk34[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk34[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk34[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-308</a> 
</span></li>
<li><span class="<?php if(isset($bk35[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk35[0]->cname)) echo 'Booked' ?>, <?php echo $bk35[0]->rdate ?>, <?php echo $bk35[0]->cname ?>, <?php echo $bk35[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk35[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk35[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-309</a> 
</span></li>
<li><span class="<?php if(isset($bk36[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk36[0]->cname)) echo 'Booked' ?>, <?php echo $bk36[0]->rdate ?>, <?php echo $bk36[0]->cname ?>, <?php echo $bk36[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk36[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk36[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-310</a> 
</span></li>
<li><span class="<?php if(isset($bk37[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk37[0]->cname)) echo 'Booked' ?>, <?php echo $bk37[0]->rdate ?>, <?php echo $bk37[0]->cname ?>, <?php echo $bk37[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk37[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk37[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-311</a> 
</span></li>
<li><span class="<?php if(isset($bk38[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk38[0]->cname)) echo 'Booked' ?>, <?php echo $bk38[0]->rdate ?>, <?php echo $bk38[0]->cname ?>, <?php echo $bk38[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk38[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk38[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-312</a> 
</span></li>
<li><span class="<?php if(isset($bk39[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk39[0]->cname)) echo 'Booked' ?>, <?php echo $bk39[0]->rdate ?>, <?php echo $bk39[0]->cname ?>, <?php echo $bk39[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk39[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk39[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-313</a> 
</span></li>
<li><span class="<?php if(isset($bk40[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk40[0]->cname)) echo 'Booked' ?>, <?php echo $bk40[0]->rdate ?>, <?php echo $bk40[0]->cname ?>, <?php echo $bk40[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk40[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk40[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-314</a> 
</span></li>
<li><span class="<?php if(isset($bk41[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk41[0]->cname)) echo 'Booked' ?>, <?php echo $bk41[0]->rdate ?>, <?php echo $bk41[0]->cname ?>, <?php echo $bk41[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk41[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk41[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-315</a> 
</span></li>
<li><span class="<?php if(isset($bk42[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk42[0]->cname)) echo 'Booked' ?>, <?php echo $bk42[0]->rdate ?>, <?php echo $bk42[0]->cname ?>, <?php echo $bk42[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk42[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk42[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-316</a> 
</span></li>
<li><span class="<?php if(isset($bk43[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk43[0]->cname)) echo 'Booked' ?>, <?php echo $bk43[0]->rdate ?>, <?php echo $bk43[0]->cname ?>, <?php echo $bk43[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk43[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk43[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-317</a> 
</span></li>
<li><span class="<?php if(isset($bk44[0]->cname)) echo 'active';
  	?>" data-toggle="tooltip" title="<?php if (isset($bk44[0]->cname)) echo 'Booked' ?>, <?php echo $bk44[0]->rdate ?>, <?php echo $bk44[0]->cname ?>, <?php echo $bk44[0]->mobile ?>"><a href="<?php echo base_url();?>index.php/Hotel/Ubbook?id=<?php echo $bk44[0]->id; ?> ?>" title="Unbook"  <?php if (!isset($bk44[0]->cname)) { ?>
  		style="color: red;"
 <?php 	} ?>>dm-d-318</a> 
</span></li>
  
</ul>

</body>
</html>





        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

  <script type="text/javascript">
    
function RoomBook(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/Hotel/BookRoom",
  type: "POST",
  data: $('#myFormBook').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Good job!", "Successfully Booked !", "success");
 $('#modal-default').modal('hide'); 
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
function Undo(id)
{
   save_method = 'update';
   // $('#form')[0].reset(); // reset form on modals
    // $('.form-group').removeClass('has-error'); // clear error class
    // $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo base_url() ?>index.php/Hotel/roomupdate/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

             $('[name="id"]').val(data.id);
             $('[name="cname"]').val(data.cname);
            $('[name="hrcode"]').val(data.hrcode);
            $('[name="rstatus"]').val(data.rstatus);
            $('[name="rdate"]').val(data.rdate);  
            $('[name="bdate"]').val(data.bdate);            
            $('[name="due"]').val(data.due);            
                       
                
            $('#modal-warning').modal('show'); // show bootstrap modal when complete loaded
            //$('.modal-title').text('Unbook'); // Set title to Bootstrap modal title




        },
        error: function ()
        {
            alert('Error get data from ajax');
        }
    });
}


</script>

<script type="text/javascript">
	function Undo2(id)
{
   save_method = 'update';
   // $('#form')[0].reset(); // reset form on modals
    // $('.form-group').removeClass('has-error'); // clear error class
    // $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo base_url() ?>index.php/Hotel/roomupdate/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

             $('[name="id"]').val(data.id);
             $('[name="cname"]').val(data.cname);
            $('[name="hrcode"]').val(data.hrcode);
            $('[name="rstatus"]').val(data.rstatus);
            $('[name="rdate"]').val(data.rdate);  
            $('[name="bdate"]').val(data.bdate);            
            $('[name="due"]').val(data.due);            
                       
                
            $('#modal-warning').modal('show'); // show bootstrap modal when complete loaded
            //$('.modal-title').text('Unbook'); // Set title to Bootstrap modal title




        },
        error: function ()
        {
            alert('Error get data from ajax');
        }
    });
}


</script>
</script>
  <script type="text/javascript">
    
function UnBookRoom(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/Hotel/UnBookRoom",
  type: "POST",
  data: $('#frm-unbook').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Good job!", "Successfully UnBooked !", "success");
 $('#modal-warning').modal('hide'); 
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


