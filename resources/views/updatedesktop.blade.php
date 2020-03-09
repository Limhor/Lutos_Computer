@include('inc.header')
<div class="container" style="float: right ; ">
    <div class="row">
        <div class="col-mid-6">
            <form method="post" enctype="multipart/form-data" action="{{url('/updatedesktopp', array($desktop->id))}}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Desktop Update</legend>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="exampleInputPassword1">Model</label>
                        <input name="model" value="<?php echo $desktop->Model?>" class="form-control"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Brand_Name</label>
                        <input name="brand_name" value="<?php echo $desktop->Brand_Name?>" class="form-control" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">OS</label>
                        <input name="os" value="<?php echo $desktop->Os?>" class="form-control" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input name="price" value="<?php echo $desktop->Price?>" class="form-control" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Processor</label>
                        <input name="Processor" value="<?php echo $desktop->Processor?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Graphics</label>
                        <input name="Graphics" value="<?php echo $desktop->Graphics?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Display</label>
                        <input name="Display" value="<?php echo $desktop->Display?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Storage</label>
                        <input name="Storage" value="<?php echo $desktop->Storage?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Memory</label>
                        <input  name="Memory" value="<?php echo $desktop->Memory?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Battery</label>
                        <input name="Battery" value="<?php echo $desktop->Battery?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keyboard</label>
                        <input  name="Keyboard" value="<?php echo $desktop->Keyboard?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Finish</label>
                        <input  name="Finish" value="<?php echo $desktop->Finish?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Dimensions</label>
                        <input  name="dimension" value="<?php echo $desktop->Dimensions?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('/homedesktop')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

