@include('header')
@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <section class="content-header">
            <h1>
                Product
                <small>Manage your product prices</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/product/"><i class="fa fa-home"></i> Home</a></li>
            </ol>
        </section>

        <section class="content">

            <hr>
            <div class="container">
                <form id="AddDiningMenu" method="post" action="{{URL::to('diningMenuEdit/bun')}}" autocomplete="off">
                    <div class="panel panel-default col-md-9">
                        {{--<!-- <div class="alert col-md-7" style="top: 30px">--}}
                        {{--@if(Session::has('flash_messageError'))--}}
                        {{--<div class="alert alert-danger">{{Session::get('flash_messageError')}}</div>--}}
                        {{--@endif--}}
                        {{--</div> -->--}}
                        <div class="col-md-10">
                            <div class="form-group">
                            <div class="form-group">
                                <br>
                                <label for="itemName">Name of the food item</label>
                                <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Enter Name of the food item here" value="{{ old('itemName') }}">
                                {{--<div class="error alert-danger"><!-- {{ $errors->first('itemName') }} --></div>--}}
                            </div>
                            <div class="form-group">
                                <label for="ItemCat">Food Catogory</label>
                                <select class="form-control" id="foodCatagory" name="foodCatagory"  >
                                    <option value="">Select Food Item Catagory</option>
                                    <option value="Seafood">Seafood</option>
                                    <option value="Sandwich">Sandwich</option>
                                    <option value="Soft Drinks">Soft Drinks</option>
                                    <option value="Fried Rice">Fried Rice</option>
                                    <option value="Coffee">Coffee</option>
                                    <option value="Pasta">Pasta</option>
                                    <option value="Pizza">Pizza</option>
                                    <option value="Desserts">Desserts</option>
                                    <option value="kebab">Kebab</option>
                                    <option value="bites">Bites</option>
                                    <option value="noodles">Noodles</option>

                                </select>
                                {{--<div class="error alert-danger"><!-- {{ $errors->first('foodCatagory') }} --></div>--}}
                            </div>
                            <div class="form-group">
                                <label for="price">Price(Rs.)</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Price(Rs.)" value="{{ old('price') }}">
                                <div class="error alert-danger"><!-- {{ $errors->first('price') }} --></div>
                            </div>

                            <div class="form-group">
                                <label for="qty">Image</label>
                                <input type="text" class="form-control" id="quantitiy" name="quantitiy" placeholder="Portion size" value="{{ old('quantity') }}">
                                {{--<div class="error alert-danger"><!-- {{ $errors->first('quantitiy') }} --></div>--}}
                            </div>

                            <div class=" btn_full">
                                <input type="submit" value="Edit Food Item" class="form-control" id="addFoodItem" style="background-color: #0073b7;color: white" >
                            </div>
                        </div>
                        <!--  <div class="alert col-md-7" style="top: 30px">
            {{--@if(Session::has('flash_message'))
                                <div class=alert alert-warning">{{Session::get('flash_message')}}</div>

            @endif--}}
                                </div> -->

                    </div>
                </form>
            </div>




        </section>

    </section>
</div>

@include('footer')
