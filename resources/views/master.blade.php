<!DOCTYPE html>
<html>
<head>
    <title>Blog Laravel 5.2</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body { height: 100%; }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title { font-size: 45px; }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        div{
            margin: 5px 0;
            padding: 0 40px;
            overflow: hidden;
        }
        div table{
            width: 1000px;
        }
        div table a{
            text-decoration: none;
        }
        div table input[type=text],
        div table input[type=number]{
            width: 100%;
            padding: 1% 1%;
        }
        div table input[type=submit]{
            width: 30%;
            margin: 2% 35%;
            padding: 10px 5px;
            font-size: 15px;
            font-weight: bold;
            font-family: Arial,sans-serif;
            background: #66b770;
        }
        div table tr{
            font-family: Arial,sans-serif,fantasy,inherit,Helvetica;
            font-weight: bold;
            text-align: left;
            padding: 5px;
            border-right: 2px solid #ccc;
            border-bottom: 2px solid #ccc;
        }
        div table tr:last-child{
            border-right: none;
        }
        div table td{
            font-family: Arial,sans-serif,fantasy,inherit,Helvetica;
            text-align: left;
            padding: 5px;
            border-right: 2px solid #ccc;
            border-bottom: 2px solid #ccc;
        }
        div table td:last-child{
            border-right: none;
        }
        div table tr:nth-child(2n) td{
            background: #abb7b4;
        }
        .btn.btn-danger{
            cursor: pointer;
            color: #fff;
            background-color: #dc3545;
            display: inline-block;
            vertical-align: middle;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1.5rem;
            text-decoration: none;
            margin: 2% 35%;
            border-radius: 5%;
            font-weight: bold;
        }
        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }
        .btn.btn-default{
            cursor: pointer;
            color: #5b5858;
            background-color: #ece6e7;
            display: inline-block;
            vertical-align: middle;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1.2rem;
            text-decoration: none;
            margin: 2% 35%;
            border-radius: 5%;
            font-weight: bold;
        }
        .list-group-item:focus, .list-group-item:hover {
            z-index: 1;
            text-decoration: none;
        }
        .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem;
        }
        .list-group-item {
            position: relative;
            display: block;
            padding: .75rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,.125);
        }
        .input-group > .custom-select:not(:last-child), .input-group > .form-control:not(:last-child) {
            border-top-right-radius: 15px;
            border-bottom-right-radius: 0px;
        }
        .form-control {
            display: inline-block;
            float: left;
            width: 80%;
            height: calc(2.25rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        span.input-group-btn{
            float: right;
            margin: -5px 45px;
        }
        .error ul li{
            list-style: none;
            background: darkred;
            color: #fff;
            border-radius: 10px;
        }
        td.bt{
            width: 35%;
        }
        td div.bt_delete{
            float: left;
        }
        td div.bt_edit{
            float: right;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">
            @yield('content')
        </div>
        <div class="links">
            @yield('home')
        </div>
    </div>
</div>
</body>
</html>