

@extends('layout.dashboard')

@section('body')


    <div class="main-content">
        <nav class="main-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://sandbox.bookingcore.co/admin"><i class="fa fa-home"></i> Dashboard</a></li>

                <li class="breadcrumb-item ">
                    <a href="https://sandbox.bookingcore.co/admin/module/hotel">Hotels</a>
                </li>
                <li class="breadcrumb-item active">
                    All
                </li>

            </ol>
        </nav>
        <div class="container-fluid">
            <div class="d-flex justify-content-between mb20">
                <h1 class="title-bar">All Hotels</h1>
                <div class="title-actions">
                    <a href="https://sandbox.bookingcore.co/admin/module/hotel/create" class="btn btn-primary">Add new hotel</a>
                </div>
            </div>
            <div class="filter-div d-flex justify-content-between ">
                <div class="col-left">
                    <form method="post" action="https://sandbox.bookingcore.co/admin/module/hotel/bulkEdit" class="filter-form filter-form-left d-flex justify-content-start">
                        <input type="hidden" name="_token" value="ZALO0casqXI9Xc3BGH5wRpjaS5aKZG3WMfqVxjTW">
                        <select name="action" class="form-control">
                            <option value=""> Bulk Actions </option>

                            <option value="publish"> Publish </option>
                            <option value="draft"> Move to Draft </option>
                            <option value="pending">Move to Pending</option>
                            <option value="delete"> Delete </option>

                        </select>
                        <button data-confirm="Do you want to delete?" class="btn-info btn btn-icon dungdt-apply-form-btn" type="button">Apply</button>
                    </form>
                </div>
                <div class="col-left dropdown">
                    <form method="get" action="https://sandbox.bookingcore.co/admin/module/hotel " class="filter-form filter-form-right d-flex justify-content-end flex-column flex-sm-row" role="search">
                        <input type="text" name="s" value="" placeholder="Search by name" class="form-control">
                        <div class="ml-3 position-relative">
                            <button class="btn btn-secondary dropdown-toggle bc-dropdown-toggle-filter" type="button" id="dropdown_filters">
                                Advanced
                            </button>
                            <div class="dropdown-menu px-3 py-3 dropdown-menu-right" aria-labelledby="dropdown_filters">
                                <div class="mb-3">
                                    <label class="d-block" for="exampleInputEmail1">Vendor</label>
                                    <select id="select_vendor_id" class="form-control dungdt-select2-field select2-hidden-accessible" data-options="{&quot;ajax&quot;:{&quot;url&quot;:&quot;https:\/\/sandbox.bookingcore.co\/admin\/module\/user\/getForSelect2?user_type=vendor&quot;,&quot;dataType&quot;:&quot;json&quot;},&quot;allowClear&quot;:true,&quot;placeholder&quot;:&quot;-- Vendor --&quot;}" name="vendor_id" data-select2-id="select_vendor_id" tabindex="-1" aria-hidden="true">
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select_vendor_id-container"><span class="select2-selection__rendered" id="select2-select_vendor_id-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">-- Vendor --</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="mb-3">
                                    <label class="d-block" for="exampleInputEmail1">Location</label>
                                    <select id="select_location_id" class="form-control dungdt-select2-field select2-hidden-accessible" data-options="{&quot;ajax&quot;:{&quot;url&quot;:&quot;https:\/\/sandbox.bookingcore.co\/admin\/module\/location\/getForSelect2&quot;,&quot;dataType&quot;:&quot;json&quot;},&quot;allowClear&quot;:true,&quot;placeholder&quot;:&quot;-- All Location --&quot;}" name="location_id" data-select2-id="select_location_id" tabindex="-1" aria-hidden="true">
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select_location_id-container"><span class="select2-selection__rendered" id="select2-select_location_id-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">-- All Location --</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="mb-0">
                                    <label class="d-block" for="exampleInputEmail1">Featured</label>
                                    <select name="is_featured" class="form-control">
                                        <option value="">-- All -- </option>
                                        <option value="1">Only Featured</option>
                                    </select>
                                </div>                            </div>
                        </div>
                        <button class="btn-info btn btn-icon btn_search" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="text-right">
                <p><i>Found 12 items</i></p>
            </div>
            <div class="panel">
                <div class="panel-body">
                    <form action="" class="bravo-form-item">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th width="60px"><input type="checkbox" class="check-all"></th>
                                    <th> Name</th>
                                    <th width="200px"> Location</th>
                                    <th width="130px"> Author</th>
                                    <th width="100px"> Status</th>
                                    <th width="100px"> Reviews</th>
                                    <th width="100px"> Date</th>
                                    <th width="100px"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="13">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/13">SOT Motel</a>
                                    </td>
                                    <td>New York, United States</td>
                                    <td>
                                        Vendor 01
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=13" class="review-count-approved">
                                            0
                                        </a>
                                    </td>
                                    <td>07/06/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/13">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/13/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/13/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="12">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/12">Testing hotel</a>
                                    </td>
                                    <td>New York, United States</td>
                                    <td>
                                        Vendor 01
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=12" class="review-count-approved">
                                            0
                                        </a>
                                    </td>
                                    <td>07/05/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/12">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/12/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/12/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="11">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/11">The May Fair Hotel</a>
                                    </td>
                                    <td>Paris</td>
                                    <td>
                                        Lynne Victoria
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=11" class="review-count-approved">
                                            5
                                        </a>
                                    </td>
                                    <td>06/28/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/11">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/11/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/11/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="10">
                                    </td>
                                    <td class="title">
                                        <span class="badge badge-primary">Featured</span>
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/10">Dylan Hotel</a>
                                    </td>
                                    <td>New York, United States</td>
                                    <td>
                                        Elise Aarohi
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=10" class="review-count-approved">
                                            3
                                        </a>
                                    </td>
                                    <td>06/27/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/10">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/10/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/10/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="8">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/8">Stewart Hotel</a>
                                    </td>
                                    <td>Los Angeles</td>
                                    <td>
                                        Lynne Victoria
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=8" class="review-count-approved">
                                            2
                                        </a>
                                    </td>
                                    <td>06/27/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/8">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/8/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/8/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="7">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/7">Crowne Plaza Hotel</a>
                                    </td>
                                    <td>New York, United States</td>
                                    <td>
                                        Elise Aarohi
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=7" class="review-count-approved">
                                            3
                                        </a>
                                    </td>
                                    <td>06/27/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/7">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/7/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/7/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="6">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/6">EnVision Hotel Boston</a>
                                    </td>
                                    <td>California</td>
                                    <td>
                                        Elise Aarohi
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=6" class="review-count-approved">
                                            3
                                        </a>
                                    </td>
                                    <td>06/27/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/6">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/6/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/6/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="5">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/5">Studio Allston Hotel</a>
                                    </td>
                                    <td>Los Angeles</td>
                                    <td>
                                        Lynne Victoria
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=5" class="review-count-approved">
                                            5
                                        </a>
                                    </td>
                                    <td>06/27/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/5">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/5/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/5/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="draft">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="4">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/4">Redac Gateway Hotel</a>
                                    </td>
                                    <td>Paris</td>
                                    <td>
                                        System Admin
                                    </td>
                                    <td><span class="badge badge-draft">draft</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=4" class="review-count-approved">
                                            4
                                        </a>
                                    </td>
                                    <td>07/04/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/4">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/4/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/4/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="3">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/3">Castello Casole Hotel</a>
                                    </td>
                                    <td>Paris</td>
                                    <td>
                                        System Admin
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=3" class="review-count-approved">
                                            2
                                        </a>
                                    </td>
                                    <td>06/27/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/3">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/3/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/3/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="2">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/2">Hotel WBF Hommachi</a>
                                    </td>
                                    <td>Paris</td>
                                    <td>
                                        System Admin
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=2" class="review-count-approved">
                                            4
                                        </a>
                                    </td>
                                    <td>06/27/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/2">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/2/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/2/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="publish">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="1">
                                    </td>
                                    <td class="title">
                                        <a href="https://sandbox.bookingcore.co/admin/module/hotel/edit/1">Otel Kodlooper</a>
                                    </td>
                                    <td>Paris</td>
                                    <td>
                                        System Admin
                                    </td>
                                    <td><span class="badge badge-publish">publish</span></td>
                                    <td>
                                        <a target="_blank" href="https://sandbox.bookingcore.co/admin/module/review?service_id=1" class="review-count-approved">
                                            3
                                        </a>
                                    </td>
                                    <td>07/06/2023</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/edit/1">Edit hotel</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/room/1/index">Manage Rooms</a>
                                                <a class="dropdown-item" href="https://sandbox.bookingcore.co/admin/module/hotel/1/availability">Manage Rooms Availability</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
