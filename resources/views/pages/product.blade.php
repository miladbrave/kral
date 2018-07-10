@extends('layouts/master2')

@section('title')
    Kral
@endsection

@section('bootsrap')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection


@section('tool')
    <link rel="stylesheet" type="text/css" href="css/toolbar.css">
@endsection

@section('list')

    <div class="panel-group" id="accordion">
        <div class="panel panel-default" style="width: 50%;float: right;margin-right: 100px;margin-top: 80px;background-color:#444444;">
            <div class="panel-heading" style="float: right;background-color: #222222">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: white">دکوراسیون داخلی</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <ul class="list-group" style="padding: 1px;margin-top: 50px;border-radius: 20px;background-color: #8c8c8c;
                                             margin-right: 20px;width: 65%;float: right;margin-bottom: 20px">
                    <h4>
                        <li >طراحی و شخصی سازی محل کار</li><br>
                        <li >زیباسیزی داخل منزل</li><br>
                        <li >تنظیم روشنایی داخل خانه</li><br>
                        <li >طراحی اتاق کودک</li><br>
                        <li >طراحی دفتر کار در منزل</li><br>
                        <li >کاغذ دیواری و پارکت</li><br>
                        <li >طراحی و ساخت انواع حوضه های مینیاتوری و تزینی</li><br>
                        <li >اسباب و اثانیه منحصربه فرد</li>
                    </h4>
                </ul>
            </div>
        </div><br>
        <div class="panel panel-default" style="width: 50%;float: right;margin-right: 100px;margin-top: 25px;background-color:#444444;">
            <div class="panel-heading" style="float: right;background-color: #222222">
                <h4 class="panel-title">
                    <a data-toggle="collapse"  data-parent="#accordion" href="#collapse2" style="color: white">طراحی نما خارجی</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <ul class="list-group" style="padding: 1px;margin-top: 50px;border-radius: 20px;background-color: #8c8c8c;
                                              margin-right: 20px;width: 65%;float: right;;margin-bottom: 20px">
                    <h4>
                        <li >طراحی انواع مدل های نما خارجی</li><br>
                        <li >به کاری گیری از بهترین محصولات</li><br>
                        <li >طراحی و اجرا فضای سبز</li><br>
                        <li >طراحی زمین بازی کودک</li><br>
                        <li >طراحی و اجرا انواع آلاچیق ها</li><br>
                        <li >طراحی و ساخت استخر و جکوزی و سونا</li><br>
                        <li>انواع نما های رومی و شرقی</li>
                    </h4>
                </ul>
            </div>
        </div><br>
        <div class="panel panel-default" style="width: 50%;float: right;margin-right: 100px;margin-top: 25px;background-color:#444444;">
            <div class="panel-heading" style="float: right;background-color: #222222">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color: white">نورپردازی</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <ul class="list-group" style="padding: 1px;margin-top: 50px;border-radius: 20px;background-color: #8c8c8c;
                                              margin-right: 20px;width: 65%;float: right;;margin-bottom: 20px">
                    <h4>
                        <li>نورپردازی نمای ساختمان</li><br>
                        <li>نور پردازی و فضا سازی حیاط</li><br>
                        <li>طراحی و تنظیم نور منازل و محیط های کاری</li>
                    </h4>
                </ul>
            </div>
        </div>
    </div>

@endsection
