@extends('layouts.admin_app')

@section('content')
    <div class="container-fluid px-4">
        <div class="card-header">
            <h4>View Results</h4>
        </div>
        <div class="card-body">
            @if(session("message"))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Symbol Number</td>
                        <td>GPA</td>
                        <td>Edit</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $results)
                        <tr>
                            <td>{{$results->id}}</td>
                            <td>{{$results->symbolnumber}}</td>
                            <td>{{$results->gpa}}</td>
                            <td><a href="{{ url('admin/user/'.$results->id)}}" class="btn btn-success">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $users->links("pagination::bootstrap-4") }} --}}
        </div>
    </div>
@endsection