@include('inc.header')
<div class="container" style="float: right ; ">
    <div class="row">
        <legend ALIGN="center">Laptops Show</legend>
        <img src="{{asset('/uploads/desktopimage/' .$desktop->Desktop_images)}}" width="200px" height="200px" alt="Desktop_images">
    </div>
    <br>
    <div class="row">
        <p class="lead">{{$desktop->Model}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Brand_Name}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Os}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Price}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Processor}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Graphics}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Display}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Storage}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Memory}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Battery}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Keyboard}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Finish}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$desktop->Dimensions}}</p>
    </div>
</div>

