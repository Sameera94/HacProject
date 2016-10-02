@include('header')
@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <section class="content-header">
            <h1>
                Insert
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/product/"><i class="fa fa-home"></i> Home</a></li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Quick Example</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="insert_data" method="post">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="text" class="form-control" name="test" sid="test" placeholder="Enter email">
                            </div>
                            
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>    
        </section>

    </section>
</div>

@include('footer')
    