@extends('backend.layouts.main')
@section('title', 'FAQs')
@section('main-container')
            <div class="container-fluid"><br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><a href="{{url('/admin')}}">Main Menu</a> | FAQs List</h6>
                        <a href="{{url('/admin/faq-add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i
                        class="fas fa-plus fa-sm text-white-50"></i>Add FAQ</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th width="160px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>
                                        <a href=""><button class="btn btn-success">Edit</button></a>
                                        <a href="" onClick="return confirm('Are you sure you want to Delete Record')"; title="Delete"><button class="btn btn-danger">Delete</button></a>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
