@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Student List</h1>
        </div class="col-lg-12 mt-5">

            <form action="{{ route('student.store') }}" method="post" enctype="multipart/form">

                @csrf

                <div class="row">
                    <div class="col-lg-8">
                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Enter Students Details">
                    </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                       

                    </div>
                </div>

            </form>
           
            
        </div>

        <div class="col-lg-12 mt-5">
            <div>
                <table class="table table-striped table-success">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $key $task)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $task->name }}</td>
                            <td>
                                @if ($task->done == 0)
                                    <span class="badge bg-warning">Not Completed</span>
                                @else
                                    <span class="badge bg-success">Completed</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('student.delete', $task->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                <a href="{{ route('student.update', $task->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
                          </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
    <div>

</div>

@endsection

@push('css')
<style>
    .page-title{
        padding-top: 5vh;
        font-size: 3rem;
        color: #266019;
    }
</style>