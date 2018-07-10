@extends('layouts/master2')

@section('title')
    Kral
@endsection

@section('tool')
    <link rel="stylesheet" type="text/css" href="css/toolbar.css">
@endsection


@section('bootsrap')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('gallery')
    <div style="margin-top: 80px;margin-left: 25%">
   <img src="img/green_bed.jpg" width="700px" height="400">
    </div>

    <fieldset style="text-align: center;color: black;font-size: larger;width: 50%;
              margin-left: 350px;background-color: #9d9d9d;margin-top: 90px;margin-bottom: 25px;border-radius: 50px">
    <p style="direction: rtl">
        <h3>
        .بدین وسیله به استحضار میرساند به زودی فروشگاه سایت راه اندازی خواهد شد<br>
            با تشکر
        </h3>
    </fieldset>
    @endsection




