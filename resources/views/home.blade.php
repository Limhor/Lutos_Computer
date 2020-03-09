@include('inc.header')
    <div class="container" style="float: right ; ">
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th colspan="6"><legend>Accessory</legend></th>
{{--                    <th>--}}
{{--                        @if(session('info'))--}}
{{--                            <div class="alert alert-success">--}}
{{--                                {{session('info')}}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </th>--}}
                    <th>
                        <a class="btn btn-success" href="{{url('/create')}}">Create</a>
                    </th>
                </tr>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">ID</th>
                    <th scope="col">Brand_Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Type</th>
                    <th scope="col">Model</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($articles) > 0)
                    @foreach($articles->all() as $article)
                <tr>
                    <td><img src="{{asset('/uploads/accessoryimage/' .$article->Image)}}" width="100px;" height="100px;" alt="Image"></td>
                    <td>{{$article->id}}</td>
                    <td>{{$article->Brand_Name}}</td>
                    <td>{{$article->Price}}</td>
                    <td>{{$article->Type}}</td>
                    <td>{{$article->Model}}</td>
                    <td>
                        <a href='{{url("/show/{$article->id}")}}' class="btn btn-primary">Show </a> |
                        <a href='{{url("/update/{$article->id}")}}' class="btn btn-success"> Edit </a> |
                        <a href='{{url("/delete/{$article->id}")}}' class="btn btn-danger">Delete </a>
                    </td>
                </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
