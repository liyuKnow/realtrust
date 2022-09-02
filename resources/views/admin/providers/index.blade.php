@extends('admin.master')

@section('title')
 {{($page_title)}}
@endsection

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"></h4>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="card-block">
                <p>Products <span class="float-xs-right"><a href="/admin/providers/add" class="btn btn-success">Add New Product</a></span></p>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#id</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($providers as $item)
                        <tr>
                            <td class="text-truncate"><a href="#">{{$item->id}}</a></td>
                            <td class="text-truncate">{{$item->name}} Real Estate</td>
                            <td class="text-truncate">
                                <div class="form-group">
                                    <!-- button group -->
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('admin.providers.detail' , [ 'id' => $item->id])}}" type="button" class="rounded btn btn-success mr-1"><i class="icon-eye"></i></a>
                                        <a href="{{ route('admin.providers.edit' , [ 'id' => $item->id])}}" type="button" class="rounded btn btn-primary mr-1"><i class="icon-pencil"></i></a>
                                        <button data-toggle="modal" data-target="#iconModal" type="button" class="rounded btn btn-danger"><i class="icon-trash"></i></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @include('admin.providers.delete_modal')
                       @empty
                        <tr >
                            <td colspan="6" class="text-xs-center">No {{$page_title}} found yet!</td>
                        </tr>
                       @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection