@extends('architectpanel.layouts.master')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row d-flex flex-wrap justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12 mb-3 d-flex justify-content-center">
                    <div class="card" style="width: 65%; height: 150px;">
                        <div class="card-statistic-4 d-flex align-items-center">
                            <div class="row w-100">
                                <div class="col-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5>Total Builders: 2</h5> 
                                    </div>
                                </div>
                                {{-- <div class="col-6 pl-0 text-right">
                                    <div class="banner-img">
                                        <img src="{{asset('assets/img/banner/1.png')}}" class="img-fluid" alt="">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 mb-3 d-flex justify-content-center">
                    <div class="card" style="width: 65%; height: 150px;">
                        <div class="card-statistic-4 d-flex align-items-center">
                            <div class="row w-100">
                                <div class="col-6 pr-0 pt-3">
                                    <div class="card-content">
                                        {{-- Content for Builders --}}
                                        <h5>Total Projects: 5</h5> 
                                    </div>
                                </div>
                                {{-- <div class="col-6 pl-0 text-right">
                                    <div class="banner-img">
                                        <img src="{{asset('assets/img/users/bu.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
