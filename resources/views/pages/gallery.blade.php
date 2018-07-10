@extends('layouts/master2')

@section('title')
    KRAL
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

@section('gallery')
    <style>
        div.gallery {
            margin: 35px;border: 8px solid orange;float: left;width: 350px;height: 300px;
        }

        div.gallery:hover {
            border: 8px solid gray;
        }

        div.gallery img {
            width: 100%;height:100%;
        }

        div.desc {
            padding: 15px;text-align: center;
        }
    </style>

    <div style="margin-top: 95px">
        <div class="gallery">
            <a target="_blank" href="img/bath.jpg">
                <img src="img/bath.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">سرویس بهداشتی</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/bed_pick.jpg">
                <img src="img/bed_pick.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">اتاق خواب</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/bed1.jpg">
                <img src="img/bed1.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">اتاق خواب</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/green_bed.jpg">
                <img src="img/green_bed.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">کاناپه</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/i1.jpg">
                <img src="img/i1.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc"> اتاق خواب بزرگ</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/i2.jpg">
                <img src="img/i2.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">اتاق نشیمن</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/Interior.jpg">
                <img src="img/Interior.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">اتاق پذیرایی</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/m4.jpg">
                <img src="img/m4.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">کاناپه</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/p1.jpg">
                <img src="img/p1.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">اتاق پذیرایی شرقی</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/pink.jpg">
                <img src="img/pink.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">اتاق خواب</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/pink3.jpg">
                <img src="img/pink3.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">اتاق خواب</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/pink4.jpg">
                <img src="img/pink4.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">اتاق خواب</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/sofa.jpg">
                <img src="img/sofa.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">کاناپه</div>
        </div><div class="gallery">
            <a target="_blank" href="img/sofa2.jpg">
                <img src="img/sofa2.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">کاناپه</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/sofa3.jpg">
                <img src="img/sofa3.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">کاناپه</div>
        </div><div class="gallery">
            <a target="_blank" href="img/sofa4.jpg">
                <img src="img/sofa4.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">کاناپه</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/sofa5.jpg">
                <img src="img/sofa5.jpg" alt="bathroom" width="500" height="400">
            </a>
            <div class="desc">کاناپه</div>
        </div>



    </div>
@endsection



