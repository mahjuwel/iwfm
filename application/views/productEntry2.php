    <section class="content">
      <div class="row">
        <div class="col-xs-12">
       
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php if (isset($prosearch2)) { ?>
             
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>PR-Code</th>
                  <th>PR-Name</th>
                  <th>Supplier</th>
                  <th>Stock</th>
                  <th>Sell Price</th>
                  <th>Buy Price</th>
                 <th>Photo</th>
                 <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($prosearch2 as $prs) { ?>
             
                <tr>
                  <td><?php echo $prs->product_code; ?></td>
                 <td><?php echo $prs->productName; ?></td>
                    <td><?php echo $prs->supplier; ?></td>
                     <td><?php echo $prs->tstock; ?></td>
                        <td><?php echo $prs->sellprice; ?></td>
                           <td><?php echo $prs->buyprice; ?></td>
                              <td></td>
                                 <td>X</td>

                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>PR-Code</th>
                  <th>PR-Name</th>
                  <th>Supplier</th>
                  <th>Stock</th>
                  <th>Sell Price</th>
                  <th>Buy Price</th>
                 <th>Photo</th>
                 <th>Action</th>
                </tr>
                </tfoot>
              </table>
            <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>