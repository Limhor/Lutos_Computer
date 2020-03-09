@include('inc.header')
<div class="container" style="float: right ; ">
    <div class="row">
        <div class="col-mid-6">
            <form method="post" enctype="multipart/form-data" action="{{url('/insert')}}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Accessory</legend>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Brand_Name</label>
                        <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Type</label>
                        <input type="text" name="type" class="form-control" id="exampleInputPassword1" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Model</label>
                        <input type="text" name="model" class="form-control" id="exampleInputPassword1" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File Input</label>
                        <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('/home')}}" class="btn btn-danger">Back</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
