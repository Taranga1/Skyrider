@extends('layouts.admin_app')

@section('content')
    <div class="container-fluid px-4">
        <div class="card-header">
            <h4>View Notice</h4>
        </div>
        <div class="card-body">
            @if(session("message"))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Date</td>
                        <td>Edit</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notices as $notice)
                        <tr>
                            <td>{{$notice->id}}</td>
                            <td>{{$notice->title}}</td>
                            <td>{{$notice->description}}</td>
                            <td>{{$notice->date}}</td>
                            <td><a href="{{ url('notice/'.$notice->id)}}" class="btn btn-success">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $users->links("pagination::bootstrap-4") }} --}}
        </div>
    </div>
@endsection