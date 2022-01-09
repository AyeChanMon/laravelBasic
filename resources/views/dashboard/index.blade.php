@extends('dashboard.master')
@section('title') Index Page @endsection
@section("content")
<div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 card-status" onclick="go('https://google.com')">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="feather-shopping-bag fs-1 text-primary"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-1 fs-4 fw-bolder">
                                            <span class="counter-up">123</span>
                                        </p>
                                        <p class="mb-0 text-black-50">Today Order</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 card-status" onclick="go('https://google.com')">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="feather-users fs-1 text-primary"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-1 fs-4 fw-bolder">
                                            <span class="counter-up">456</span>
                                        </p>
                                        <p class="mb-0 text-black-50">Today User</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 card-status" onclick="go('item_list.html')">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="feather-package fs-1 text-primary"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-1 fs-4 fw-bolder">
                                            <span class="counter-up">223</span>
                                        </p>
                                        <p class="mb-0 text-black-50">Total Items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 card-status" onclick="go('https://google.com')">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="feather-map-pin fs-1 text-primary"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-1 fs-4 fw-bolder">
                                            <span class="counter-up">14</span>
                                        </p>
                                        <p class="mb-0 text-black-50">Support Location</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-12 col-xl-7">
                        <div class="card overflow-hidden shadow mb-4">
                            <div class="">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <p class="fs-4 mb-0 fw-bolder">Order & Viewer</p>
                                    <div>
                                        <img src="img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                                        <img src="img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                                        <img src="img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                                        <img src="img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                                        <img src="img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                                    </div>
                                </div>
                                <canvas id="ov" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-5">
                        <div class="card mb-4 item-carousel-card">
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide item-carousel"
                                    data-bs-ride="carousel">
                                    <div class="carousel-indicators" style="bottom: -30px;">
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="active bg-secondary" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" class="bg-secondary"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                            aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="2" class="bg-secondary" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="3" class="bg-secondary" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="item-card">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div class="w-50">
                                                        <p class="fs-4 text-capitalize mb-0 fw-bolder">Coffee Cup</p>
                                                        <p class="fw-bolder text-black-50">500 MMK</p>
                                                        <div class="progress mb-3">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <img src="img/item/item1.png" alt="" class="item-card-img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="item-card">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div class="w-50">
                                                        <p class="fs-4 text-capitalize mb-0 fw-bolder">Stick</p>
                                                        <p class="fw-bolder text-black-50">1500 MMK</p>
                                                        <div class="progress mb-3">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <img src="img/item/item2.png" alt="" class="item-card-img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="item-card">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div class="w-50">
                                                        <p class="fs-4 text-capitalize mb-0 fw-bolder">Book</p>
                                                        <p class="fw-bolder text-black-50">530 MMK</p>
                                                        <div class="progress mb-3">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <img src="img/item/item3.png" alt="" class="item-card-img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="item-card">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div class="w-50">
                                                        <p class="fs-4 text-capitalize mb-0 fw-bolder">Name Card</p>
                                                        <p class="fw-bolder text-black-50">300 MMK</p>
                                                        <div class="progress mb-3">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <img src="img/item/item4.png" alt="" class="item-card-img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-5">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <p class="fs-4 mb-0 fw-bolder">Order & Place</p>
                                    <div class="">
                                        <i class="feather-pie-chart text-primary fs-4"></i>

                                    </div>
                                </div>
                                <canvas id="op" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="card mb-4">
                            <div class="d-flex justify-content-between align-items-center p-3">
                                <p class="fs-4 mb-0 fw-bolder">Subscriber List</p>
                                <div>
                                    <i class="feather-more-vertical fs-4 mb-0 text-primary"></i>
                                </div>
                            </div>
                            <table id="sl" class="table table-hover p-2">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Start Date</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Michael Austin</td>
                                        <td>ABC Fintech LTD.</td>
                                        <td>Jan 1,2019</td>
                                        <td><span class="badge rounded-pill bg-danger">Close</span></td>
                                        <td>$ 1000.00</td>
                                        <td><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Aldin Rakić</td>
                                        <td>ACME Pvt LTD.</td>
                                        <td>Jan 10,2019</td>
                                        <td><span class="badge rounded-pill bg-success">Open</span></td>
                                        <td>$ 3000.00</td>
                                        <td class=""><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>İris Yılmaz</td>
                                        <td>Collboy Tech LTD.</td>
                                        <td>Jan 12,2019</td>
                                        <td><span class="badge rounded-pill bg-success">Open</span></td>
                                        <td>$ 2000.00</td>
                                        <td><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lidia Livescu</td>
                                        <td>My Fintech LTD.</td>
                                        <td>Jan 14,2019</td>
                                        <td><span class="badge rounded-pill bg-danger">Close</span></td>
                                        <td>$ 1100.00</td>
                                        <td><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Michael Austin</td>
                                        <td>ABC Fintech LTD.</td>
                                        <td>Jan 1,2019</td>
                                        <td><span class="badge rounded-pill bg-danger">Close</span></td>
                                        <td>$ 1000.00</td>
                                        <td><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Aldin Rakić</td>
                                        <td>ACME Pvt LTD.</td>
                                        <td>Jan 10,2019</td>
                                        <td><span class="badge rounded-pill bg-success">Open</span></td>
                                        <td>$ 3000.00</td>
                                        <td><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection

@section('foot')
<script src="js/dashboard.js">
@endsection