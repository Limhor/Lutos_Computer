@include('inc.header')
<div class="container" style="float: right ; ">
    <div class="row">
        <div class="col-mid-6">
            <form method="post" enctype="multipart/form-data" action="{{url('/insertdesktop')}}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Desktops</legend>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="exampleInputPassword1">Model</label>
                        <input name="model" class="form-control"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Brand_Name</label>
                        <input name="brand_name" class="form-control" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">OS</label>
                        <input name="os" class="form-control" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input name="price" class="form-control"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Processor</label>
                        <input name="Processor" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Graphics</label>
                        <input name="Graphics" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Display</label>
                        <input name="Display" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Storage</label>
                        <input name="Storage" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Memory</label>
                        <input  name="Memory" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Battery</label>
                        <input name="Battery"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keyboard</label>
                        <input  name="Keyboard" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Finish</label>
                        <input  name="Finish" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Dimensions</label>
                        <input  name="dimension" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File Input</label>
                        <input type="file" name="Desktop_images" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('/homedesktop')}}" class="btn btn-danger">Back</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

