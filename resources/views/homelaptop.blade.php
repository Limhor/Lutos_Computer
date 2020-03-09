@include('inc.header')
<div class="container" style="float: right ; ">
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th colspan="6"><legend>Laptops</legend></th>
{{--                <th>--}}
{{--                    @if(session('info'))--}}
{{--                        <div class="alert alert-success">--}}
{{--                            {{session('info')}}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </th>--}}
                <th>
                    <a class="btn btn-success" href="{{url('/createlaptop')}}">Create</a>
                </th>
            </tr>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">ID</th>
                <th scope="col">Brand_Name</th>
                <th scope="col">Price</th>
                <th scope="col">Processor</th>
                <th scope="col">Model</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($laptop) > 0)
                @foreach($laptop->all() as $laptops)
                <tr>
                    <td><img src="{{asset('/uploads/laptopimage/' .$laptops->Laptop_images)}}" alt="Laptop_images" width="100px" height="100px"></td>
                    <td>{{ $laptops->id }}</td>
                    <td>{{ $laptops->Brand_Name }}</td>
                    <td>{{ $laptops->Price }}</td>
                    <td>{{ $laptops->Processor }}</td>
                    <td>{{ $laptops->Model }}</td>
                    <td>
                        <a href='{{ url("/showlaptop/{$laptops->id}") }}' class="btn btn-primary">Show </a> |
                        <a href='{{ url("/updatelaptop/{$laptops->id}") }}' class="btn btn-success"> Edit </a> |
                        <a href='{{ url("/deletelaptopp/{$laptops->id}") }}' class="btn btn-danger">Delete </a>
                    </td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
