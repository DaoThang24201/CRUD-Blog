@extends('layout.dashboard')

@section('body')

    <div class="main-content">
        <nav class="main-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://sandbox.bookingcore.co/admin"><i class="fa fa-home"></i> Dashboard</a></li>

                <li class="breadcrumb-item ">
                    <a href="https://sandbox.bookingcore.co/admin/module/hotel">Hotel</a>
                </li>
                <li class="breadcrumb-item ">
                    <a href="https://sandbox.bookingcore.co/admin/module/hotel/room/attribute">Room Attributes</a>
                </li>
                <li class="breadcrumb-item active">
                    Attribute: Room Amenities
                </li>

            </ol>
        </nav>
        <form action="https://sandbox.bookingcore.co/admin/module/hotel/room/attribute/store/8" method="post">
            <input type="hidden" name="_token" value="ZALO0casqXI9Xc3BGH5wRpjaS5aKZG3WMfqVxjTW">        <input type="hidden" name="id" value="8">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between mb20">
                            <div class="">
                                <h1 class="title-bar">Edit: Room Amenities</h1>
                            </div>
                        </div>
                        <div class="language-navigation" id="language-navs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link " href="https://sandbox.bookingcore.co/admin/module/hotel/room/attribute/edit/8?lang=ar">
                                        <span class="flag-icon flag-icon-ar"></span>
                                        عربي
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="lang-content-box">
                            <div class="panel">
                                <div class="panel-title">
                                    <strong>Attribute Content</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" value="Room Amenities" placeholder="Attribute name" name="name" class="form-control">
                                    </div>                            </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span></span>
                            <button class="btn btn-primary" type="submit">Save Change</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



@endsection
