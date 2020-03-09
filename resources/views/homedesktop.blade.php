@include('inc.header')
<div class="container" style="float: right ; ">
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th colspan="6"><legend>Desktops</legend></th>
                {{--                <th>--}}
                {{--                    @if(session('info'))--}}
                {{--                        <div class="alert alert-success">--}}
                {{--                            {{session('info')}}--}}
                {{--                        </div>--}}
                {{--                    @endif--}}
                {{--                </th>--}}
                <th>
                    <a class="btn btn-success" href="{{url('/createdesktop')}}">Create</a>
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
            @if(count($desktop) > 0)
                @foreach($desktop->all() as $desktops)
                    <tr>
                        <td><img src="{{asset('/uploads/desktopimage/' .$desktops->Desktop_images)}}" alt="Desktop_images" width="100px" height="100px"></td>
                        <td>{{ $desktops->id }}</td>
                        <td>{{ $desktops->Brand_Name }}</td>
                        <td>{{ $desktops->Price }}</td>
                        <td>{{ $desktops->Processor }}</td>
                        <td>{{ $desktops->Model }}</td>
                        <td>
                            <a href='{{ url("/showdesktop/{$desktops->id}") }}' class="btn btn-primary">Show </a> |
                            <a href='{{ url("/updatedesktop/{$desktops->id}") }}' class="btn btn-success"> Edit </a> |
                            <a href='{{ url("/deletedesktopp/{$desktops->id}") }}' class="btn btn-danger">Delete </a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
