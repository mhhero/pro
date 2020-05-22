
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>وب مین - قالب داشبورد مدیریت حرفه ای بوت استرپ 4</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
 
</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================
 header start-->
 
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <!-- logo -->
  <div class="text-left navbar-brand-wrapper">
    <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo-dark.png" alt="" ></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-icon-dark.png" alt=""></a>
  </div>
  <!-- Top bar left -->
  <ul class="nav navbar-nav mr-auto">
    <li class="nav-item">
      <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
    </li>
    <li class="nav-item">
      <div class="search">
        <a class="search-btn not_click" href="javascript:void(0);"></a>
        <div class="search-box not-click">
          <input type="text" class="not-click form-control" placeholder="جستجو" value="" name="search">
          <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
        </div>
      </div>
    </li>
  </ul>
  <!-- top bar right -->
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item fullscreen">
      <a id="btnFullscreen" href="#" class="nav-link" ><i class="ti-fullscreen"></i></a>
    </li>
    <li class="nav-item dropdown ">
      <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="ti-bell"></i>
        <span class="badge badge-danger notification-status"> </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
        <div class="dropdown-header notifications">
          <strong>اطلاعیه ها</strong>
          <span class="badge badge-pill badge-warning">05</span>
        </div>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">کاربر جدید ثبت شده <small class="float-right text-muted time">همین حالا</small> </a>
        <a href="#" class="dropdown-item">فاکتور جدید دریافت شد <small class="float-right text-muted time">22 دقیقه</small> </a>
        <a href="#" class="dropdown-item">گزارش خطا سرور<small class="float-right text-muted time">7 ساعت</small> </a>
        <a href="#" class="dropdown-item">گزارش پایگاه داده<small class="float-right text-muted time">1 روز</small> </a>
        <a href="#" class="dropdown-item">تایید سفارش<small class="float-right text-muted time">2 روز</small> </a>
      </div>
    </li>
    <li class="nav-item dropdown ">
      <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"> <i class=" ti-view-grid"></i> </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-big">
        <div class="dropdown-header">
          <strong>لینک های سریع</strong>
        </div>
        <div class="dropdown-divider"></div> 
        <div class="nav-grid">
          <a href="#" class="nav-grid-item"><i class="ti-files text-primary"></i><h5>وظیفه جدید</h5></a>
          <a href="#" class="nav-grid-item"><i class="ti-check-box text-success"></i><h5>اختصاص وظیفه</h5></a>
        </div>
        <div class="nav-grid">
          <a href="#" class="nav-grid-item"><i class="ti-pencil-alt text-warning"></i><h5>اضافه کردن دستور</h5></a>
          <a href="#" class="nav-grid-item"><i class="ti-truck text-danger "></i><h5>سفارشات جدید</h5></a>
        </div>
      </div>
    </li>
    <li class="nav-item dropdown mr-30">
      <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="images/profile-avatar.jpg" alt="avatar">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
          <div class="media">
            <div class="media-body">
              <h5 class="mt-0 mb-0">ارش خادملو</h5>
              <span>arashkhademloo@mail.com</span>
            </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="text-secondary ti-reload"></i>فعالیت</a>
        <a class="dropdown-item" href="#"><i class="text-success ti-email"></i>پیام</a>
        <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>پروفایل</a>
        <a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>پروژه ها <span class="badge badge-info">6</span> </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>تنظیمات</a>
        <a class="dropdown-item" href="#"><i class="text-danger ti-unlock"></i>خروج</a>
      </div>
    </li>
  </ul>
</nav>

<!--=================================
 header End-->

<!--=================================
 Main content -->
 
<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar start-->
    <div class="side-menu-fixed">
     <div class="scrollbar side-menu-bg">
      <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">داشبورد</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
            <li> <a href="index.html">داشبورد 01</a> </li>
            <li> <a href="index-02.html">داشبورد 02</a> </li>
            <li> <a href="index-03.html">داشبورد 03</a> </li>
            <li> <a href="index-04.html">داشبورد 04</a> </li>
            <li> <a href="index-05.html">داشبورد 05</a> </li>
          </ul>
        </li>
        <!-- menu title -->
         <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">کامپونت ها </li>
        <!-- menu item Elements-->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
            <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">عناصر</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="elements" class="collapse" data-parent="#sidebarnav">
            <li><a href="accordions.html">آکاردئون ها</a></li>
            <li><a href="alerts.html">هشدار ها</a></li>
            <li><a href="button.html">دکمه</a></li>
            <li><a href="colorpicker.html">انتخاب رنگ</a></li>
            <li><a href="dropdown.html">کرکره ای</a></li>
            <li><a href="lists.html">لیست ها</a></li>
            <li><a href="modal.html">مودال</a></li>
            <li><a href="nav.html">ناوبری</a></li>
            <li><a href="nicescroll.html">نایس اسکرول</a></li>
            <li><a href="pricing-table.html">جدول قیمت گذاری</a></li>
            <li><a href="ratings.html">امتیاز دهی</a></li>
            <li><a href="date-picker.html">انتخاب تاریخ</a></li>
            <li><a href="tabs.html">برگه ها</a></li>
            <li><a href="typography.html">تایپوگرافی</a></li>
            <li><a href="popover-tooltips.html">راهنمای ابزار پیش نمایش</a></li>
            <li><a href="progress.html">پیشرفت</a></li>
            <li><a href="switch.html">تعویض</a></li>
            <li><a href="sweetalert2.html">هشدار2</a></li>
            <li><a href="touchspin.html">تاچ اسپین</a></li>
          </ul>
        </li>
        <!-- menu item calendar-->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
            <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">تقویم</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
            <li> <a href="calendar.html">تقویم رویدادها </a> </li>
            <li> <a href="calendar-list.html">تقویم لیست</a> </li>
          </ul>
        </li>
        <!-- menu item todo-->
        <li>
          <a href="todo-list.html"><i class="ti-menu-alt"></i><span class="right-nav-text">لیست برای انجام کار</span> </a>
        </li>
         <!-- menu item chat-->
         <li> 
           <a href="chat-page.html"><i class="ti-comments"></i><span class="right-nav-text">چت </span></a>  
         </li>
         <!-- menu item mailbox-->
        <li>
          <a href="mail-box.html"><i class="ti-email"></i><span class="right-nav-text">صندوق پستی</span> <span class="badge badge-pill badge-warning float-right mt-1">داغ</span> </a>
        </li>
        <!-- menu item Charts-->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
            <div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text">نمودار ها</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="chart" class="collapse" data-parent="#sidebarnav">
            <li> <a href="chart-js.html">Chart.js</a> </li>
            <li> <a href="chart-morris.html">نمودار موریس </a> </li>
            <li> <a href="chart-sparkline.html">نمودار اسپارک لاین</a> </li>
          </ul>
        </li>
        
        <!-- menu font icon-->
         <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">آیکون فونت</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
            <li> <a href="fontawesome-icon.html">فونت Awesome</a> </li>
            <li> <a href="themify-icons.html"> آیکون Themify</a> </li>
            <li> <a href="weather-icon.html">آیکون آب و هوا</a> </li>
          </ul>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">ابزارک ها، فرم ها و جداول </li>
        <!-- menu item Widgets-->
        <li>
          <a href="widgets.html"><i class="ti-blackboard"></i><span class="right-nav-text">ابزارک ها</span> <span class="badge badge-pill badge-danger float-right mt-1">59</span> </a>
        </li>
        <!-- menu item Form-->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">فرم و ویرایشگر</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="Form" class="collapse" data-parent="#sidebarnav">
            <li> <a href="editor.html">ویرایشگر</a> </li>
            <li> <a href="editor-markdown.html">نشانه گذاری ویرایشگر</a> </li>
            <li> <a href="form-input.html">ورودی فرم</a> </li>
            <li> <a href="form-validation-jquery.html">فرم تایید جی کوئری</a> </li>
            <li> <a href="form-wizard.html">فرم پیشرفته</a> </li>
            <li> <a href="form-repeater.html">تکرار کننده فرم</a> </li>
            <li> <a href="input-group.html">ورودی گروه</a> </li>
            <li> <a href="toastr.html">توستر</a> </li>
          </ul>
        </li>
        <!-- menu item table -->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">جدول داده</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="table" class="collapse" data-parent="#sidebarnav">
            <li> <a href="data-html-table.html">جدول داده html</a> </li>
            <li> <a href="data-local.html">داده های محلی</a> </li>
            <li> <a href="data-table.html">جدول داده</a> </li>
          </ul>
        </li>
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">صفحات بیشتر</li>
        <!-- menu item Custom pages-->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
            <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">صفحات سفارشی</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
            <li> <a href="projects.html">پروژه ها</a> </li>
            <li> <a href="project-summary.html">خلاصه پروژه ها</a> </li>
            <li> <a href="profile.html">پروفایل</a> </li>
            <li> <a href="app-contacts.html">مخاطبین برنامه</a> </li>
            <li> <a href="contacts.html">مخاطبین</a> </li>
            <li> <a href="file-manager.html">مدیریت فایل</a> </li>
            <li> <a href="invoice.html">فاکتور</a> </li>
            <li> <a href="blank.html">صفحه خالی</a> </li>
            <li> <a href="layout-container.html">فضای طرح بندی</a> </li>
            <li> <a href="error.html">ارور</a> </li>
            <li> <a href="faqs.html">پرسش و پاسخ</a> </li>
          </ul>
        </li>
        <!-- menu item Authentication-->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
            <div class="pull-left"><i class="ti-id-badge"></i><span class="right-nav-text">احراز هویت</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="authentication" class="collapse" data-parent="#sidebarnav">
            <li> <a href="login.html">ورود</a> </li>
            <li> <a href="register.html">ثبت نام</a> </li>
            <li> <a href="lockscreen.html">صفحه قفل</a> </li>
          </ul>
        </li>
        <!-- menu item maps-->
        <li>
          <a href="maps.html"><i class="ti-location-pin"></i><span class="right-nav-text">نقشه ها</span> <span class="badge badge-pill badge-success float-right mt-1">06</span></a>
        </li>
        <!-- menu item timeline-->
        <li>
          <a href="timeline.html"><i class="ti-panel"></i><span class="right-nav-text">خط زمانی</span> </a>
        </li>
        <!-- menu item Multi level-->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level"><div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">منو چند سطحی</span></div><div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
          <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
          <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">آیتم سطح 1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
            <ul id="auth" class="collapse">
              <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">آیتم سطح 1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                  <ul id="login" class="collapse">
                    <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice">آیتم سطح 1.1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                    <ul id="invoice" class="collapse">
                      <li> <a href="#">آیتم سطح 1.1.1.1</a> </li>
                      <li> <a href="#">آیتم سطح 1.1.1.2</a> </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li> <a href="#">آیتم سطح 1.2</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#error">آیتم سطح 2<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
            <ul id="error" class="collapse" >
              <li> <a href="#">آیتم سطح 2.1</a> </li>
              <li> <a href="#">آیتم سطح 2.2</a> </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div> 
</div> 

<!-- Left Sidebar End-->

 <!--=================================
wrapper -->

    <div class="content-wrapper">
      <div class="page-title">
        <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> داشبورد</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
              <li class="breadcrumb-item"><a href="index.html" class="default-color">خانه</a></li>
              <li class="breadcrumb-item active">داشبورد</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- widgets -->
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <span class="text-danger">
                    <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                  </span>
                </div>
                <div class="float-right text-right">
                  <p class="card-text text-dark">بازدید کنندگان</p>
                  <h4>65,650</h4>
                </div>
              </div>
              <p class="text-muted pt-3 mb-0 mt-2 border-top">
                <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> رشد 81٪ کمتر
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <span class="text-warning">
                    <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                  </span>
                </div>
                <div class="float-right text-right">
                  <p class="card-text text-dark">سفارشات</p>
                  <h4>656</h4>
                </div>
              </div>
              <p class="text-muted pt-3 mb-0 mt-2 border-top">
                <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> مجموع فروش
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <span class="text-success">
                    <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i>
                  </span>
                </div>
                <div class="float-right text-right">
                  <p class="card-text text-dark">درآمد</p>
                  <h4>65656 تومان</h4>
                </div>
              </div>
              <p class="text-muted pt-3 mb-0 mt-2 border-top">
                <i class="fa fa-calendar mr-1" aria-hidden="true"></i> فروش در هر هفته 
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <span class="text-primary">
                    <i class="fa fa-twitter highlight-icon" aria-hidden="true"></i>
                  </span>
                </div>
                <div class="float-right text-right">
                  <p class="card-text text-dark">دنبال کنندگان</p>
                  <h4>62,500+</h4>
                </div>
              </div>
              <p class="text-muted pt-3 mb-0 mt-2 border-top">
                <i class="fa fa-repeat mr-1" aria-hidden="true"></i> فقط به روز شد
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Orders Status widgets-->
      <div class="row">
        <div class="col-xl-4 mb-30">
         <div class="card card-statistics h-100">
          <!-- action group -->
           <div class="btn-group info-drop">
              <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>تازه کردن</a>
                <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>مشاهده همه</a>
              </div>
            </div>
           <div class="card-body">
             <h5 class="card-title">خلاصه بازار</h5>
              <h4>$50,500 </h4>
             <div class="row mt-20">
              <div class="col-4">
                <h6>اپل</h6>
                <b class="text-info">+ 82.24 % </b>
              </div>
              <div class="col-4">
                <h6>اینستاگرام</h6>
                <b class="text-danger">- 12.06 % </b>
              </div>
              <div class="col-4">
                <h6>گوگل</h6>
                <b class="text-warning">+ 24.86 % </b>
              </div>
            </div>
           </div>
          <div id="sparkline2" class="scrollbar-x text-center"></div>
          </div>
        </div>
        <div class="col-xl-8 mb-30">
          <div class="card h-100">
            <div class="btn-group info-drop">
              <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>تازه کردن</a>
                <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>مشاهده همه</a>
              </div>
            </div>
            <div class="card-body">
            <div class="d-block d-md-flexx justify-content-between">
              <div class="d-block">
                <h5 class="card-title">رشد بازدید سایت </h5>
              </div>
              <div class="d-flex">
                  <div class="clearfix mr-30">
                    <h6 class="text-success">درآمد</h6>
                    <p>+584</p>
                  </div>
                  <div class="clearfix  mr-50">
                    <h6 class="text-danger"> نتیجه گیری</h6>
                    <p>-255</p>
                  </div>
               </div>
             </div>
            <div id="morris-area" style="height: 320px;"></div>
          </div>
          </div>
        </div>
      </div>
       <div class="row">
       <div class="col-xl-4 mb-30">
         <div class="card h-100">
           <div class="card-body">
             <h5 class="card-title">بازخورد مشتری  </h5>
             <div class="row mb-30">
                  <div class="col-md-6">
                      <div class="clearfix">
                       <p class="mb-10 float-left">مثبت</p>
                       <i class="mb-10 text-success float-right fa fa-arrow-up"> </i>
                    </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="mt-10 text-success">8501</h4>
                  </div>
                  <div class="col-md-6">
                     <div class="clearfix">
                       <p class="mb-10 float-left">منفی</p>
                       <i class="mb-10 text-danger float-right fa fa-arrow-down"> </i>
                    </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="mt-10 text-danger">3251</h4>
                  </div>
               </div>
               <div class="chart-wrapper" style="width: 100%; margin: 0 auto;"> 
               <div id="canvas-holder">
                  <canvas id="canvas3" width="550"></canvas>
              </div>
            </div>
           </div> 
         </div> 
        </div>
        <div class="col-xl-8 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="tab nav-border" style="position: relative;">
                  <div class="d-block d-md-flex justify-content-between">
                    <div class="d-block w-100">
                      <h5 class="card-title">پرفروش ترین ها</h5>
                    </div>
                    <div class="d-block d-md-flex nav-tabs-custom">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active show" id="months-tab" data-toggle="tab" href="#months" role="tab" aria-controls="months" aria-selected="true"> ماه</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="year-tab" data-toggle="tab" href="#year" role="tab" aria-controls="year" aria-selected="false">سال </a>
                        </li>
                      </ul>
                     </div>
                   </div>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade active show" id="months" role="tabpanel" aria-labelledby="months-tab">
                        <div class="row mb-30">
                           <div class="col-md-2 col-sm-6">
                             <img class="img-fluid" src="images/blog/05.jpg" alt="">
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <h6 class="mb-0 sm-mt-5">انگیزه خود را بالا ببرید</h6>
                              <p class="sm-mb-5 d-block">من واقعا اعتقاد دارم که حرف های آگوستین درست است. </p> 
                              <span class="mb-0">توسط - <b class="text-info">ارش خادملو</b></span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                            <h5 class="text-primary mb-0"><b>45,436</b></h5>
                             <span>حراجی</span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                             <h5 class="text-secondary mb-0"><b>05,236 تومان</b></h5>
                             <span>درامد</span>
                           </div>
                          </div>
                          <div class="row mb-30">
                           <div class="col-md-2 col-sm-6">
                             <img class="img-fluid" src="images/blog/02.jpg" alt="">
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <h6 class="mb-0 sm-mt-5">هلن کلر یک فروشنده گفتگو است</h6>
                              <p class="sm-mb-5 d-block">ما همچنین داستان های حماسی، آن مدرن را می دانیم.</p> 
                              <span class="mb-0">توسط - <b class="text-warning">ارش خادملو</b> </span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                            <h5 class="text-success mb-0"><b>23,462</b></h5>
                             <span>حراجی</span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                             <h5 class="text-danger mb-0"><b>166 تومان</b></h5>
                             <span>درامد</span>
                           </div>
                          </div>
                          <div class="row mb-30">
                           <div class="col-md-2 col-sm-6">
                             <img class="img-fluid" src="images/blog/03.jpg" alt="">
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <h6 class="mb-0 sm-mt-5">هلن کلر یک فروشنده گفتگو است</h6>
                              <p class="sm-mb-5 d-block">ما همچنین داستان های حماسی، آن مدرن را می دانیم. </p> 
                              <span class="mb-0">توسط - <b class="text-danger">ارش خادملو</b> </span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                            <h5 class="text-warning mb-0"><b>5,566</b></h5>
                             <span>حراجی</span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                             <h5 class="text-info mb-0"><b>166 تومان</b></h5>
                             <span>درامد</span>
                           </div>
                          </div>
                          <div class="row">
                           <div class="col-md-2 col-sm-6">
                             <img class="img-fluid" src="images/blog/04.jpg" alt="">
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <h6 class="mb-0 sm-mt-5">هلن کلر یک فروشنده گفتگو است</h6>
                              <p class="sm-mb-5 d-block">ما همچنین داستان های حماسی، آن مدرن را می دانیم. </p> 
                              <span class="mb-0">توسط - <b class="text-success">ارش خادملو</b> </span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                            <h5 class="text-dark mb-0"><b>5,446</b></h5>
                             <span>حراجی</span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                             <h5 class="text-success mb-0"><b>166 تومان</b></h5>
                             <span>درامد</span>
                           </div>
                          </div>
                        </div> 
                      <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="year-tab">
                        <div class="row mb-30">
                           <div class="col-md-2 col-sm-6">
                             <img class="img-fluid" src="images/blog/09.jpg" alt="">
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <h6 class="mb-0 sm-mt-5">هلن کلر یک فروشنده گفتگو است</h6>
                              <p class="sm-mb-5 d-block">ما همچنین داستان های حماسی، آن مدرن را می دانیم. </p> 
                              <span class="mb-0">توسط - <b class="text-danger">ارش خادملو</b> </span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                            <h5 class="text-dark mb-0"><b>12,549</b></h5>
                             <span>حراجی</span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                             <h5 class="theme-color mb-0"><b>166 تومان</b></h5>
                             <span>درامد</span>
                           </div>
                          </div>
                        <div class="row mb-30">
                           <div class="col-md-2 col-sm-6">
                             <img class="img-fluid" src="images/blog/06.jpg" alt="">
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <h6 class="mb-0 sm-mt-5">هلن کلر یک فروشنده گفتگو است</h6>
                              <p class="sm-mb-5 d-block">ما همچنین داستان های حماسی، آن مدرن را می دانیم.</p> 
                              <span class="mb-0">توسط - <b class="text-info">ارش خادملو</b> </span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                            <h5 class="text-primary mb-0"><b>1,366</b></h5>
                             <span>حراجی</span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                             <h5 class="text-secondary mb-0"><b>166 تومان</b></h5>
                             <span>درامد</span>
                           </div>
                          </div>
                          <div class="row mb-30">
                           <div class="col-md-2 col-sm-6">
                             <img class="img-fluid" src="images/blog/07.jpg" alt="">
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <h6 class="mb-0 sm-mt-5">هلن کلر یک فروشنده گفتگو است</h6>
                              <p class="sm-mb-5 d-block">ما همچنین داستان های حماسی، آن مدرن را می دانیم. </p> 
                              <span class="mb-0">توسط - <b class="text-success">ارش خادملو</b> </span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                            <h5 class="text-success mb-0"><b>465</b></h5>
                             <span>حراجی</span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                             <h5 class="text-danger mb-0"><b>166 تومان</b></h5>
                             <span>درامد</span>
                           </div>
                          </div>
                          <div class="row">
                           <div class="col-md-2 col-sm-6">
                             <img class="img-fluid" src="images/blog/08.jpg" alt="">
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <h6 class="mb-0 sm-mt-5">هلن کلر یک فروشنده گفتگو است</h6>
                              <p class="sm-mb-5 d-block">ما همچنین داستان های حماسی، آن مدرن را می دانیم. </p> 
                              <span class="mb-0">توسط - <b class="text-warning">ارش خادملو</b> </span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                            <h5 class="text-warning mb-0"><b>4,456</b></h5>
                             <span>حراجی</span>
                           </div>
                           <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                             <h5 class="text-info mb-0"><b>166 تومان</b></h5>
                             <span>درامد</span>
                           </div>
                          </div>
                      </div>
                    </div> 
                </div>
             </div>
          </div>
        </div>
      </div>
     <div class="row">
       <div class="col-xl-4 mb-30">
           <div class="card card-statistics h-100">
             <div class="card-body">
              <h5 class="card-title">بهترین آیتم های فروش</h5>
               <ul class="list-unstyled">
                <li class="mb-20">
                  <div class="media">
                   <div class="position-relative">
                    <img class="img-fluid mr-15 avatar-small" src="images/item/01.png" alt="">
                   </div> 
                    <div class="media-body">
                       <h6 class="mt-0 mb-0">فروشنده ماشین <span class="float-right text-danger"> 8,561</span>  </h6>
                       <p>تم وردپرس خودرو </p>
                    </div>
                  </div>
                  <div class="divider dotted mt-20"></div>
                </li>
                <li class="mb-20">
                  <div class="media">
                   <div class="position-relative clearfix">
                    <img class="img-fluid mr-15 avatar-small" src="images/item/02.png" alt="">
                   </div> 
                    <div class="media-body">
                       <h6 class="mt-0 mb-0">وبستر <span class="float-right text-warning"> 6,213</span>  </h6>
                       <p>قالب چند منظوره HTML5 </p>
                    </div>
                  </div>
                  <div class="divider dotted mt-20"></div>
                </li>
                 <li class="mb-20">
                  <div class="media">
                   <div class="position-relative">
                      <img class="img-fluid mr-15 avatar-small" src="images/item/03.png" alt="">
                   </div> 
                    <div class="media-body">
                       <h6 class="mt-0 mb-0">سپاه  <span class="float-right text-success"> 2,926</span>  </h6>
                       <p> قالب چند منظوره HTML5 </p>
                    </div>
                  </div>
                  <div class="divider dotted mt-20"></div>
                </li>
                <li>
                  <div class="media">
                   <div class="position-relative clearfix">
                    <img class="img-fluid mr-15 avatar-small" src="images/item/04.png" alt="">
                   </div> 
                    <div class="media-body">
                       <h6 class="mt-0 mb-0">سام مارتین <span class="float-right text-warning">6,213 </span></h6>
                       <p>قالب چند منظوره HTML5 </p>
                    </div>
                  </div>
                </li>
              </ul>
             </div>
           </div>
        </div>
        <div class="col-xl-4 mb-30">
              <div class="card h-100">
              <div class="btn-group info-drop">
                  <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>تازه کردن</a>
                    <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>مشاهده همه</a>
                  </div>
                </div>
               <div class="card-body">
                 <h5 class="card-title">رشد بازدید سایت </h5>
                 <div class="row">
                    <div class="col-6">
                      <h6 class="text-danger">درآمد</h6>
                      <p class="text-danger">+584</p>
                    </div>
                    <div class="col-6">
                      <h6 class="text-info">نتیجه گیری</h6>
                      <p class="text-info">-255</p>
                    </div>  
                  </div>
                 <div id="morris-line" style="height: 320px;"></div>
               </div> 
             </div>
         </div>
         <div class="col-xl-4 mb-30">
          <div class="card card-statistics h-100">
            <div class="p-4 text-center bg" style="background: url(images/bg/01.jpg);">
               <h5 class="mb-70 text-white position-relative">ارش خادملو </h5>
              <div class="btn-group info-drop">
                <button type="button" class="dropdown-toggle-split text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"><i class="text-primary ti-files"></i> اضافه کردن کار</a>
                  <a class="dropdown-item" href="#"><i class="text-dark ti-pencil-alt"></i> ویرایش مشخصات</a>
                  <a class="dropdown-item" href="#"><i class="text-success ti-user"></i> نمایش مشخصات</a>
                  <a class="dropdown-item" href="#"><i class="text-secondary ti-info"></i> اطلاعات تماس</a>
                </div>
              </div>
            </div>
            <div class="card-body text-center position-relative">
              <div class="avatar-top">
                <img class="img-fluid w-25 rounded-circle " src="images/team/13.jpg" alt="">
               </div>
               <div class="row">
                  <div class="col-sm-4 mt-30">
                     <b>فایل های ذخیره شده</b>
                     <h4 class="text-success mt-10">1582</h4>
                  </div>
                  <div class="col-sm-4 mt-30">
                    <b>حافظه استفاده شده </b>
                     <h4 class="text-danger mt-10">58GB</h4>
                  </div>
                  <div class="col-sm-4 mt-30">
                    <b>پول صرف شده است</b>
                     <h4 class="text-warning mt-10">352,6$</h4>
                  </div>
                </div>
                <div class="divider mt-20"></div>
                 <p class="mt-30">17504 کارلتون استریت, گالرود, غرب, 39503</p>
                 <p class="mt-10">michael@webmin.com</p>
                <div class="social-icons color-icon mt-20">
                  <ul>
                    <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-github"><a href="#"><i class="fa fa-github"></i></a></li>
                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
             </div>
          </div>
        </div>
     </div>       
 
    <div class="calendar-main mb-30">
    <div class="row">
      <div class="col-lg-3">
        <div class="row">
            <div class="col-12 sm-mb-30">
                <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-primary btn-block m-t-20">
                        <i class="fa fa-plus pr-2"></i> ایجاد جدید
                    </a>
                <div id="external-events" class="m-t-20">
                    <br>
                    <p class="text-muted">رویداد خود را بکشید و رها کنید یا در تقویم کلیک کنید</p>
                    <div class="external-event bg-success fc-event">
                        <i class="fa fa-circle mr-2 vertical-middle"></i>انتشار تم جدید
                    </div>
                    <div class="external-event bg-info fc-event">
                        <i class="fa fa-circle mr-2 vertical-middle"></i>رویداد من
                    </div>
                    <div class="external-event bg-warning fc-event">
                        <i class="fa fa-circle mr-2 vertical-middle"></i>ملاقات با مدیر
                    </div>
                    <div class="external-event bg-danger fc-event">
                        <i class="fa fa-circle mr-2 vertical-middle"></i>ایجاد تم جدید
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="col-lg-9">
          <div id="calendar"></div>
           <div class="modal" tabindex="-1" role="dialog" id="event-modal">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">اضافه کردن رویداد جدید</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body p-20"></div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
                          <button type="button" class="btn btn-success save-event">ایجاد رویداد</button>
                          <button type="button" class="btn btn-danger delete-event" data-dismiss="modal">حذف</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Modal Add Category -->
          <div class="modal" tabindex="-1" role="dialog" id="add-category">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">یک دسته اضافه کنید</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body p-20">
                          <form>
                              <div class="row">
                                  <div class="col-md-6">
                                      <label class="control-label">نام دسته</label>
                                      <input class="form-control form-white" placeholder="نام را وارد کنید" type="text" name="category-name" />
                                  </div>
                                  <div class="col-md-6">
                                      <label class="control-label">رنگ گروه را انتخاب کنید</label>
                                      <select class="form-control form-white" data-placeholder="یک رنگ انتخاب کنید..." name="category-color">
                                          <option value="success">موفقیت</option>
                                          <option value="danger">خطر</option>
                                          <option value="info">اطلاعات</option>
                                          <option value="primary">اولیه</option>
                                          <option value="warning">هشدار</option>
                                      </select>
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
                          <button type="button" class="btn btn-success save-category" data-dismiss="modal">ذخیره</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
 </div>
<!--=================================
 wrapper -->
      
<!--=================================
 footer -->

    <footer class="bg-white p-4">
      <div class="row">
        <div class="col-md-6">
          <div class="text-center text-md-left">
              <p class="mb-0"> &copy; کپی رایت <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>. <a href="#"> وب مین </a> همه حقوق محفوظ است. </p>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="text-center text-md-right">
            <li class="list-inline-item"><a href="#">شرایط و ضوابط </a> </li>
            <li class="list-inline-item"><a href="#">API استفاده از خط مشی </a> </li>
            <li class="list-inline-item"><a href="#">حریم خصوصی </a> </li>
          </ul>
        </div>
      </div>
    </footer>
    </div><!-- main content wrapper end-->
  </div>
 </div>
</div>

<!--=================================
 footer -->



<!--=================================
 jquery -->

<!-- jquery -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>

<!-- chart -->
<script src="js/chart-init.js"></script>

<!-- calendar -->
<script src="js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="js/morris.init.js"></script>

<!-- datepicker -->
<script src="js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="js/sweetalert2.js"></script>

<!-- toastr -->
<script src="js/toastr.js"></script>

<!-- validation -->
<script src="js/validation.js"></script>

<!-- lobilist -->
<script src="js/lobilist.js"></script>
 
<!-- custom -->
<script src="js/custom.js"></script>
  
</body>

</html>