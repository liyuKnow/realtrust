@extends('admin.master')

@section('title')
    Detail
@endsection

@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-form"><i class="icon-bookmark"></i> Product Provider</h4>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="card-header">
            <div class="form-group">
                <!-- button group -->
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/admin/sites/" type="button" class="rounded btn btn-info mr-1"><i class="icon-arrow-left4"></i> Back</a>
                    <a href="{{ route('admin.sites.edit' , [ 'id' => $site->id])}}" type="button" class="rounded btn btn-primary mr-1"><i class="icon-pencil"></i> Edit</a>
                    <a href="#" type="button" class="rounded btn btn-danger"><i class="icon-trash"></i> Delete</a>
                </div>
            </div>
        </div>

        <div class="card-body collapse in">
            <div class="card-block">
                <h1>Name : {{$site->name}} Real Estate</h1>
            </div>
            <div class="card-block">
                <img src="{{asset($site->img_1)}}" alt="Product Image 1">
            </div>
        </div>
    </div>
</div>
    
@endsection