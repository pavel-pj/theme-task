<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100..900&display=swap" rel="stylesheet">


    @vite([

        'resources/css/app.css',
        'resources/js/app.js'])

    <link href="{{url('storage/css/classic.css')}}" rel="stylesheet"/>
</head>

<style>

    body {
        font-family: 'Commissioner', sans-serif;
        font-weight: 400;
        margin:0px;
        padding:0px;
        background-color: #f2f2f2;
    }

    .theme-bg{
        background-color:#7c3aed;
    }

    h3, .theme-text {

        color:#7c3aed;

    }

    .left-bar{
        padding-top:18%;
        border-right:1px solid #d7d7d7;
    }
    .button-version:hover {
       background-color:#6d28d9;
    }









</style>
<body>
