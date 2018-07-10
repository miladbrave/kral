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



@section('text')
    <div style="color: orangered;float: right;margin-top: 20%">
        <h3 style="direction: rtl;margin-right: 15px">شماره تماس : 04131234567</h3>
        <h3 style="direction: rtl;margin-right: 15px"> فاکس :  04131234567 </h3>
        <hr>
        <h2 style="direction: rtl;margin-right: 15px">آدرس : تبریز-خیابان ولیعصر </h2>
    </div>
    @endsection