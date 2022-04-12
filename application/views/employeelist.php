<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee List
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url();?>index.php/User/CreateUser">Create</a></li>
        <li class="active">EmployeeList</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">         
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Photo</th>
                  <th>ID</th>
                  <th>UserName</th>
                  <th>Designation</th>
                  <th>Role</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Salary</th>
                  <th>JoiningDate</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	<?php if(isset($emplist)){ ?>
                    <?php foreach ($emplist as $el) {?>
                <tr>
                  <td> <?php if (isset($el->image)) { ?>
                                  <img src="<?php echo base_url()?><?php echo $el->image; ?>" alt="image" width="50px" height="50px" style="padding: 1px;"/>
                               <?php } else { ?>
                                  No Photo
                             <?php  } ?></td>
                  <td><?php echo $el->user_id; ?></td>
                  <td><?php echo $el->username; ?><br>(<?php echo $el->fullname; ?>)</td>
                  <td><?php echo $el->designation; ?></td>

                  <?php if ($el->type=='0') { ?>
                    <td>Super Admin</td>
                     <?php }?>
                  <?php if ($el->type=='1') { ?>
                    <td>Admin</td>
                     <?php }?>
                     <?php if ($el->type=='2') { ?>
                    <td>HR</td>
                     <?php }?>
                     <?php if ($el->type=='3') { ?>
                    <td>Accountant</td>
                     <?php }?>
                     <?php if ($el->type=='4') { ?>
                    <td>QC</td>
                     <?php }?> 
                     <?php if ($el->type=='null') { ?>
                    <td style="color: red; font-weight: bold;">No Role</td>
                     <?php }?>
                   
                  <td><?php echo $el->mobile; ?></td>
                  <td><?php echo $el->email; ?></td>
                  <td><?php echo $el->presentaddress; ?></td>
                  <td><?php echo $el->salary; ?></td>
                  <td><?php echo $el->joiningDate; ?></td>
                  <td><a class="btn btn-sm btn-info" href="<?php echo base_url() ?>index.php/Inventory/EmployeeDetails?id=<?php echo $el->id; ?>" title="View"><i class="fa fa-eye"></i></a> <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_due('.$el->id.')"><i class="glyphicon glyphicon-pencil"></i> Edit</a> <?php if ($el->active=='1') { ?>
                    <button class="btn btn-sm btn-success">Active</button>
                     <?php } else{ ?>
                    <button class="btn btn-sm btn-danger">Inactive</button>

                     <?php } ?>

                  </td>
                </tr>
                        <?php }} ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>Photo</th>
                  <th>ID</th>
                  <th>UserName</th>
                  <th>Designation</th>
                  <th>Role</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Salary</th>
                  <th>JoiningDate</th>
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
  </div>
  <!-- /.content-wrapper -->