@extends('dashboard.layouts.app')
@section('contents')
{{--    <div class="row">--}}
{{--    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-9">--}}
{{--                                            <div class="d-flex align-items-center align-self-start">--}}
{{--                                                <h3 class="mb-0">$12.34</h3>--}}
{{--                                                <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-3">--}}
{{--                                            <div class="icon icon-box-success ">--}}
{{--                                                <span class="mdi mdi-arrow-top-right icon-item"></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <h6 class="text-muted font-weight-normal">Potential growth</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-9">--}}
{{--                                            <div class="d-flex align-items-center align-self-start">--}}
{{--                                                <h3 class="mb-0">$17.34</h3>--}}
{{--                                                <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-3">--}}
{{--                                            <div class="icon icon-box-success">--}}
{{--                                                <span class="mdi mdi-arrow-top-right icon-item"></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <h6 class="text-muted font-weight-normal">Revenue current</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-9">--}}
{{--                                            <div class="d-flex align-items-center align-self-start">--}}
{{--                                                <h3 class="mb-0">$12.34</h3>--}}
{{--                                                <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-3">--}}
{{--                                            <div class="icon icon-box-danger">--}}
{{--                                                <span class="mdi mdi-arrow-bottom-left icon-item"></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <h6 class="text-muted font-weight-normal">Daily Income</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-9">--}}
{{--                                            <div class="d-flex align-items-center align-self-start">--}}
{{--                                                <h3 class="mb-0">$31.53</h3>--}}
{{--                                                <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-3">--}}
{{--                                            <div class="icon icon-box-success ">--}}
{{--                                                <span class="mdi mdi-arrow-top-right icon-item"></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <h6 class="text-muted font-weight-normal">Expense current</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--    </div>--}}


    <form action="" method="post" enctype="application/x-www-form-urlencoded">
        @csrf
        <button type="submit" class="btn btn-primary"><a style="text-decoration: none;color: white" href="https://live-8640.wati.io/login">Send Messages</a></button>
    </form>




@endsection
