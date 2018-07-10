@extends('layouts/master1')

@section('title')
    Kral
@endsection


@section('tooll')
    <style>
        ul {
            list-style-type: none;
            width: 42%;
            margin-top: 70px;
            margin-left: 550px;
            padding: 2px;
            overflow: hidden;
            background-color: black;
            border-radius: 50px;
        }

        li {
            float: right;
            margin-right: 5px;
        }

        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover, .dropdown:hover .dropbtn {
            background-color: red;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: black;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            color: white;
        }

        .dropdown-content a:hover {
            background-color: red
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        input[type=text] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #444444;
            border-radius: 4px;
            margin-top: 5px;
            margin-left: 50px;
            font-size: 16px;
            background-color: #8c8c8c;
            background-image: url('img/search.png');
            background-position: 5px 3px;
            background-repeat: no-repeat;
            padding: 5px 10px 5px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 1s ease-in-out;
        }

        input[type=text]:focus {
            width: 20%;
        }
    </style>

@endsection
