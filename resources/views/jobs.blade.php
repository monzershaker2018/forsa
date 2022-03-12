@extends('layouts.front.master2')
@section('title')

@stop
@section('css')

@stop
@section('content')

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">FORSA</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">



            <a href="/" class="nav-item nav-link "> العودة الي القائمة الرئيسية </a>

        </div>
        <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5  d-lg-block"> تسجيل الدخول  <i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->



 <!-- Search Start -->
 <div class="container-fluid bg-primary mb-5 wow fadeIn mystl" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-2">


            <div class="col-md-10">

                    <div class="col">
                        <input type="text" name="" class="form-control " placeholder="إبحث عن التخصص ..">

                    </div>







            </div>
            <div class="col-md-2">
                <button class="btn btn-dark border-0 w-100">بحث</button>
            </div>
        </div> <br>

        <div class="row g-2">


            <div class="col-md-10">
                <div class="row g-2">
                    <div class="col-md-6">
                        <select class="form-select border-0">
                            <option selected>-- المجالات --</option>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                        </select>
                     </div>




                    <div class="col-md-6">
                        <select class="form-select border-0">
                            <option selected>--  التخصصات --</option>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-dark border-0 w-100">بحث</button>
            </div>
        </div>
    </div>
</div>
<!-- Search End -->




 <!-- Jobs Start -->
 <div class="container-xxl py-5" id="jobs">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp cairo" data-wow-delay="0.1s">قائمة الوظائف</h1>
        <div class="tab-class text-center wow fadeInUp " data-wow-delay="0.3s">

            <div class="tab-content ">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="job-item p-4 mb-4 mystl">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('front/img/com-logo-1.jpg') }}" alt="" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3 mystl cairo" >&nbsp;&nbsp; مهندس برمجيات</h5>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>&nbsp; الخرطوم</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>&nbsp; دوام كامل</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2" > </i>&nbsp;   50.000 </span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">

                                    <a class="btn btn-primary" href="/job-detail"> التقديم للوظيفة</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i> 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4 mystl">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('front/img/com-logo-2.jpg') }}" alt="" style="width: 80px; height: 80px;">
                                   <div class="text-start ps-4">
                                    <h5 class="mb-3 mystl cairo" >&nbsp;&nbsp; مهندس برمجيات</h5>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>&nbsp; الخرطوم</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>&nbsp; دوام كامل</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2" > </i>&nbsp;   50.000 </span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">

                                    <a class="btn btn-primary" href="/job-detail"> التقديم للوظيفة</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i> 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4 mystl">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('front/img/com-logo-3.jpg') }}" alt="" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3 mystl cairo" >&nbsp;&nbsp; مهندس برمجيات</h5>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>&nbsp; الخرطوم</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>&nbsp; دوام كامل</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2" > </i>&nbsp;   50.000 </span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">

                                    <a class="btn btn-primary" href="/job-detail"> التقديم للوظيفة</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i> 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>

                {{-- pagination must be here --}}


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jobs End -->





    @stop
        @section('script')

        @stop








