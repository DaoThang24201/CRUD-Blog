@extends('layout.dashboard')

@section('body')


    <div class="main-content">
        <nav class="main-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://sandbox.bookingcore.co/admin"><i class="fa fa-home"></i> Dashboard</a></li>

                <li class="breadcrumb-item ">
                    <a href="https://sandbox.bookingcore.co/admin/module/hotel">Hotel</a>
                </li>
                <li class="breadcrumb-item active">
                    Room Attributes
                </li>

            </ol>
        </nav>
        <div class="container-fluid">
            <div class="d-flex justify-content-between mb20">
                <h1 class="title-bar">Room Attributes</h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb40">
                    <div class="panel">
                        <div class="panel-title">Add Attributes</div>
                        <div class="panel-body">
                            <form action="https://sandbox.bookingcore.co/admin/module/hotel/room/attribute/store/-1" method="post">
                                <input type="hidden" name="_token" value="ZALO0casqXI9Xc3BGH5wRpjaS5aKZG3WMfqVxjTW">                            <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="" placeholder="Attribute name" name="name" class="form-control">
                                </div>                            <div class="">
                                    <button class="btn btn-primary" type="submit">Add new</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="filter-div d-flex justify-content-between ">
                        <div class="col-left">
                            <form method="post" action="https://sandbox.bookingcore.co/admin/module/hotel/room/attribute/editAttrBulk" class="filter-form filter-form-left d-flex justify-content-start">
                                <input type="hidden" name="_token" value="ZALO0casqXI9Xc3BGH5wRpjaS5aKZG3WMfqVxjTW">
                                <select name="action" class="form-control">
                                    <option value=""> Bulk Action </option>
                                    <option value="delete"> Delete </option>
                                </select>
                                <button data-confirm="Do you want to delete?" class="btn-info btn btn-icon dungdt-apply-form-btn" type="button">Apply</button>
                            </form>
                        </div>
                        <div class="col-left">
                            <form method="get" action="https://sandbox.bookingcore.co/admin/module/hotel/room/attribute " class="filter-form filter-form-right d-flex justify-content-end" role="search">
                                <input type="text" name="s" value="" class="form-control" placeholder="Search by name">
                                <button class="btn-info btn btn-icon btn_search" id="search-submit" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title">All Attributes</div>
                        <div class="panel-body">
                            <form class="bravo-form-item">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th width="60px"><input type="checkbox" class="check-all"></th>
                                        <th>Name</th>
                                        <th class="">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="check-item" name="ids[]" value="8">
                                        </td>
                                        <td class="title">
                                            <a href="{{--{{route('admin.hotel.room_edit')}}--}}">Room Amenities</a>
                                        </td>
                                        <td>
                                            <a href="https://sandbox.bookingcore.co/admin/module/hotel/room/attribute/edit/8" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="https://sandbox.bookingcore.co/admin/module/hotel/room/attribute/terms/8" class="btn btn-sm btn-success"><i class="fa fa"></i> Manage Terms
                                            </a>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
