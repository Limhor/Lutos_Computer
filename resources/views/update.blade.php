@include('inc.header')
<div class="container" style="float: right ; ">
    <div class="row">
        <div class="col-mid-6">
            <form method="post" enctype="multipart/form-data" action="{{url('/edit', array($articles->id))}}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Accessory Update</legend>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Brand_Name</label>
                        <input type="text" value="<?php echo $articles->Brand_Name; ?>" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" value="<?php echo $articles->Price; ?>" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Type</label>
                        <input type="text" value="<?php echo $articles->Type; ?>" name="type" class="form-control" id="exampleInputPassword1" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Model</label>
                        <input type="text" value="<?php echo $articles->Model; ?>" name="model" class="form-control" id="exampleInputPassword1" placeholder="Enter...">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('/home')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
