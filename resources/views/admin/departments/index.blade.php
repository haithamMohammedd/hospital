@extends('admin.master')

@section('title','Department | ' . env('APP_NAME'))


@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="m-0">All Department</h1>
        <a href="{{ route('admin.departments.create') }}" class="btn btn-primary">Add New</a>
    </div>

    <table class="table table-hover table-striped table-bordered text-center">
        <tr class="bg-dark text-white">
            <th>ID</th>
            <th>English Name</th>
            <th>Arabic Name</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
       @forelse ($departments as $department)
            <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->name_en }}</td>
                <td>{{ $department->name_ar }}</td>
                <td>12 Dec, 2022</td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
       @empty
            <tr >
                <td colspan="5" class="text-center">Not Data Found</td>
            </tr>
       @endforelse
    </table>

    {{ $departments->links() }}
@stop
