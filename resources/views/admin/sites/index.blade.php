@extends('admin.master')

@section('title')
 {{($page_title)}}
@endsection

@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
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
                <p>Products <span class="float-xs-right"><a href="/admin/sites/add" class="btn btn-success">Add New {{$page_title}}</a></span></p>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#id</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Price (/mm<sup>2</sup>)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($sites as $item)
                        <tr>
                            <td class="text-truncate"><a href="#">{{$item->id}}</a></td>
                            <td class="text-truncate">{{$item->name}} Site</td>
                            <td class="text-truncate">{{$item->product_type}}</td>
                            <td class="text-truncate">${{$item->house_price_per_carre}}</td>
                            <td class="text-truncate">
                                <div class="form-group">
                                    <!-- button group -->
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('admin.sites.detail' , [ 'id' => $item->id])}}" type="button" class="rounded btn btn-success mr-1"><i class="icon-eye"></i></a>
                                        <a href="{{ route('admin.sites.edit' , [ 'id' => $item->id])}}" type="button" class="rounded btn btn-primary mr-1"><i class="icon-pencil"></i></a>
                                        {{-- <button data-toggle="modal" data-target="#iconModal" type="button" class="rounded btn btn-danger"><i class="icon-trash"></i></button> --}}
                                        <form method="POST" action="{{ route('admin.sites.delete', $item->id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger show-alert-delete-box" data-toggle="tooltip" title='Delete'><i class="icon-trash"></i></button>
                                        </form>
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

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show-alert-delete-box').click(function(event){
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
</script>
@endsection