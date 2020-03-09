@include('inc.header')
<div class="container" style="float: right ; ">
    <div class="row">
        <legend ALIGN="center">Laptops Show</legend>
        <img src="{{asset('/uploads/laptopimage/' .$laptop->Laptop_images)}}" width="200px" height="200px" alt="Laptop_images">
    </div>
    <br>
    <div class="row">
        <p class="lead">{{$laptop->Model}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Brand_Name}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Os}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Price}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Processor}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Graphics}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Display}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Storage}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Memory}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Battery}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Keyboard}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Finish}}</p>
    </div>
    <div class="row">
        <p class="lead">{{$laptop->Dimensions}}</p>
    </div>
</div>
