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



        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp mystl" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('front/img/com-logo-2.jpg') }}" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h5 class="mb-3 mystl cairo" >&nbsp;&nbsp; مهندس برمجيات</h5>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>&nbsp; الخرطوم</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>&nbsp; دوام كامل</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2" > </i>&nbsp;   50.000 </span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3 cairo"> وصف الوظيفة</h4>
                            <p>
                                وصف الوظيفة وصف الوظيفة وصف الوظيفةوصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة , وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة وصف الوظيفة

                            </p>

                        </div>

                        <div class="">
                            <h4 class="mb-4 cairo"> التقديم للوظيفة </h4>
                            <form class="mystl">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="الإسم رباعي">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="رقم الهاتف">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="رسالتك للشركة "></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">تقديم </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4 mystl"> ملخص الوظيفة</h4>
                            <p><i class="fa fa-angle-left text-primary me-2 mystl"></i>  تاريخ النشر : </p>

                            <p><i class="fa fa-angle-left text-primary me-2"></i> طبيعة العمل : </p>
                            <p><i class="fa fa-angle-left text-primary me-2"></i>  السعر : </p>
                            <p><i class="fa fa-angle-left text-primary me-2"></i> المكان : </p>
                            <p class="m-0"><i class="fa fa-angle-left text-primary me-2"></i> تاريخ الإنتهاء : </p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4 mystl">وصف الشركة</h4>
                            <p class="m-0">
                                وصف الشركة   وصف الشركة   وصف الشركة  وصف الشركة   وصف الشركة   وصف الشركة   وصف الشركة  وصف الشركة  وصف الشركة   وصف الشركة
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->



    @stop
    @section('script')

    @stop


