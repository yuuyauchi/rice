@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href='/css/fullcalendar/core/main.css' type="text/css" rel='stylesheet' />
    <link href='/css/fullcalendar/daygrid/main.css' type="text/css" rel='stylesheet' />
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src='/js/fullcalendar/core/main.js'></script>
<script src='/js/fullcalendar/daygrid/main.js'></script>
<script src='/js/fullcalendar/interaction/main.js'></script>

<script src="/js/ajax-setup.js"></script>
<script src='/js/fullcalendar.js'></script>
<script src='/js/event-control.js'></script>
@stop