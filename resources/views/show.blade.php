@include('inc.header')
    <div class="container" style="float: right ; ">
        <div class="row">
            <legend ALIGN="center">Accessory Show</legend>
            <img src="{{asset('/uploads/accessoryimage/' .$articles->Image)}}" width="200px;" height="200px;" alt="Image">
        </div>
        <br>
        <div class="row">
            <p class="lead">{{$articles->Brand_Name}}</p>
        </div>
        <div class="row">
            <p class="lead">{{$articles->Price}}</p>
        </div>
        <div class="row">
            <p class="lead">{{$articles->Type}}</p>
        </div>
        <div class="row">
            <p class="lead">{{$articles->Model}}</p>
        </div>
    </div>
