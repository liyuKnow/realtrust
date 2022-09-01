@extends('admin.master')

@section('title')
    Appointments
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
                <p>Products <span class="float-xs-right"><a href="/admin/appointments/add" class="btn btn-success">Add New Product</a></span></p>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#id</th>
                            <th>Provider</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Berooms</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($appointments as $item)
                        <tr>
                            <td class="text-truncate"><a href="#">{{$item->id}}</a></td>
                            <td class="text-truncate">{{$item->provider}} Real Estate</td>
                            <td class="text-truncate">
                                @if ($item->status)
                                    <span class="tag tag-default tag-success">On Sale</span>
                                @else
                                    <span class="tag tag-default tag-danger">Sold Out</span>
                                @endif
                            </td>
                            <td class="text-truncate">{{$item->price}}</td>
                            <td class="text-truncate">{{$item->type}}</td>
                            <td class="text-truncate">{{$item->featured_bedrooms}}</td>
                        </tr>
                       @empty
                        <tr >
                            <td colspan="6" class="text-xs-center text-md-center">No employees found yet!</td>
                        </tr>
                       @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection