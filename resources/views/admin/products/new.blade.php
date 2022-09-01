@extends('admin.master')

@section('content')
      <div class="content-wrapper">
        <div class="content-body"><!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-tooltip">Add New Product</h4>
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
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <form class="form">
                                    @csrf
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="issueinput1">Location</label>
                                                    <input type="text" id="issueinput1" class="form-control" placeholder="issue title" name="issuetitle" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title">
                                                </div>    
                                            </div>    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="issueinput2">Provider</label>
                                                    <input type="text" id="issueinput2" class="form-control" placeholder="opened by" name="openedby" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="issueinput5">Product Type</label>
                                                    <select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority">
                                                        <option value="apartment">Apartment</option>
                                                        <option value="duplex">Duplex</option>
                                                        <option value="villa">Villa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="issueinput1">Featured Bedrooms</label>
                                                    <input type="number" id="issueinput1" class="form-control" placeholder="issue title" name="issuetitle" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="issueinput3">Date Opened</label>
                                                    <input type="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Opened">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="issueinput4">Date Fixed</label>
                                                    <input type="date" id="issueinput4" class="form-control" name="datefixed" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Fixed">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="issueinput5">Priority</label>
                                            <select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority">
                                                <option value="low">Low</option>
                                                <option value="medium">Medium</option>
                                                <option value="high">High</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="issueinput6">Status</label>
                                            <select id="issueinput6" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status">
                                                <option value="not started">Not Started</option>
                                                <option value="started">Started</option>
                                                <option value="fixed">Fixed</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="issueinput8">Comments</label>
                                            <textarea id="issueinput8" rows="5" class="form-control" name="comments" placeholder="comments" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Comments"></textarea>
                                        </div> --}}

                                    </div>

                                    <div class="form-actions">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="icon-cross2"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="icon-check2"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
      </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection