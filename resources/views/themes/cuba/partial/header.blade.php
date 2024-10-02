<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cuba</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100..900&display=swap" rel="stylesheet">


    @vite([

        'resources/css/app.css',
        'resources/js/app.js'])

    <link href="{{url('storage/css/cuba.css')}}" rel="stylesheet"/>
</head>

<body>
