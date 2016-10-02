@include('header')
@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <section class="content-header">
            <h1>
                Food Items
                <small>Manage your product prices</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/product/"><i class="fa fa-home"></i>Home</a></li>
            </ol>
        </section>

        <section class="content">


            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Dinning Menu</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            <h2>{{ Session::get('flash_message') }}</h2>
                        </div>
                    @endif
                    <table id="adminDinResTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="background-color: #3071a9 ;color: white">Food Item Name</th>
                            <th style="background-color: #3071a9 ;color: white">Food Category</th>
                            <th style="background-color: #3071a9 ;color: white">Price(Rs)</th>
                            <th style="background-color: #3071a9 ;color: white">Edit/Delete Item</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menuItems as $item )
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->cat}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    <a href="diningMenuEdit/{{$item->name}}" id="btnEdit">
                                        <span class="label label-warning" >Edit</span>
                                    </a>
                                    {{--<a href="{{URL::to('diningMenuUpdate/'.$diningMenuCat1->id.'/delete')}}" id="btnEdit">--}}
                                        <span class="label label-danger" >Delete</span>
                                    {{--</a>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                        <tfoot>
                        </tfoot>
                    </table>

                </div><!-- /.box-body -->
            </div>



        </section>

    </section>
</div>

@include('footer')
