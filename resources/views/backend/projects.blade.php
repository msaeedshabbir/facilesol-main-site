@extends('backend.layouts.main')
@section('title', 'Projects')
@section('main-container')
<div class="container-fluid"><br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="{{url('/admin')}}">Main Menu</a> | Projects List</h6>
                        <a href="{{url('/admin/project-add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i
                        class="fas fa-plus fa-sm text-white-50"></i>Add New Project</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Designation</th>
                                    <th>Profile</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th width="160px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($project as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>
                                        <a class="text-dark" href="/admin/team-member-details/{{ $project->id }}">
                                            {{ $project->fullname }}
                                        </a>
                                    </td>
                                    <td>{{ $project->designation }}</td>
                                    <td>{{ $project->shortintro }}</td>
                                    <td>
                                        <img src="/backend/images/projects/{{$project->image}}" class="rounded-circle" width="50px" height="50px" alt="Image Not Found">
                                    </td>
                                    <td>
                                        @if($project->status == 1)
                                            <a href="">
                                                <span class="badge badge-success p-2">Active</span>
                                            </a>
                                        @else
                                        <a href="">
                                            <span class="badge badge-danger p-2">Disabled</span>
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#">
                                            <a href="/admin/team-edit/{{ $project->id }}" class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </a>
                                        <form method="post" class="d-inline" action="/admin/team-delete/{{ $project->id }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-circle btn-sm" onClick="return confirm('Are you sure you want to Delete Record')"; title="Delete Record"><i class="fas fa-trash"></i></button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
