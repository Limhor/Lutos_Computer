@include('inc.header')
<div class="container" style="float: right ; ">
    <div class="row">
        <div class="col-mid-6">
            <form method="post" enctype="multipart/form-data" action="{{url('/updatelaptopp', array($laptop->id))}}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Laptop Update</legend>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="exampleInputPassword1">Model</label>
                        <input name="model" value="<?php echo $laptop->Model?>" class="form-control"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Brand_Name</label>
                        <input name="brand_name" value="<?php echo $laptop->Brand_Name?>" class="form-control" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">OS</label>
                        <input name="os" value="<?php echo $laptop->Os?>" class="form-control" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input name="price" value="<?php echo $laptop->Price?>" class="form-control" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Processor</label>
                        <input name="Processor" value="<?php echo $laptop->Processor?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Graphics</label>
                        <input name="Graphics" value="<?php echo $laptop->Graphics?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Display</label>
                        <input name="Display" value="<?php echo $laptop->Display?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Storage</label>
                        <input name="Storage" value="<?php echo $laptop->Storage?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Memory</label>
                        <input  name="Memory" value="<?php echo $laptop->Memory?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Battery</label>
                        <input name="Battery" value="<?php echo $laptop->Battery?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keyboard</label>
                        <input  name="Keyboard" value="<?php echo $laptop->Keyboard?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Finish</label>
                        <input  name="Finish" value="<?php echo $laptop->Finish?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Dimensions</label>
                        <input  name="dimension" value="<?php echo $laptop->Dimensions?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('/homelaptop')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
