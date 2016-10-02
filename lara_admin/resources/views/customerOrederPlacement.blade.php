@include('header')
@include('sidebar')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
      <br>
        <br>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Customer Orders</h3>

                
              <div class="box-tools">
                  <form action="searchOrderStatus" method="post">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text"  name="key" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
                      </form>
              </div>
                
            </div>
              <br>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Order ID</th>
                  <th>Order Description</th>
                  <th>Order Status</th>
                  <th>Collection Status</th>
<!--
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
-->
                </tr>
                <?php  foreach( $order as $row ){
                 ?>
                <tr>
                  <td><?php echo $row->id; ?></td>
                  <td><?php echo $row->description; ?></td>
                 <?php $x=$row->statuscomplete; if($x=="pending"){
                 ?>
                  <td><span class="label label-danger">Pending</span></td>
                 <?php }else{ ?>
                    <td><span class="label label-warning">Completed</span></td>
                 <?php } ?>
<!--                    <td><a href="#"><button type="button" class="btn  btn-success btn-sm">Confirms</button></a></td> -->
                    <?php $y=$row->statuscomplete; if($y == "completed"){
                     ?>
                    
                    <?php $y=$row->statuspicked; if($y != "delivered"){
                     ?>
                    <td><a href="updateOrderStatus<?php echo $row->id; ?>"><span class="label label-danger">Picke Me</span></a></td> 
                    <?php }else{ ?>
                    <td><span class="label label-success">Picked</span></td>
                    <?php } ?>
                    
                    <?php } ?>
                </tr>
                  
                <?php } ?>
                  
                  <?php if (isset($done)){ ?>
                  <div class="callout callout-success">
                    <h4>Tip!</h4>

                    <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
                      is bigger than your content because it prevents extra unwanted scrolling.</p>
                  </div>
                  <?php } ?>
                  
                  
<?php $ds=Session::get('message'); if (isset($ds)){ ?>
    
                  <div class="callout callout-success">
                    <h4>Successfully Picked...!!!</h4>
                  </div>
    <?php } ?>              

                  
<!--
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
-->
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

@include('footer')
    