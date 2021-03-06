<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msvalidate.01" content="515110530E032658F4E8855E6EFDB616" />
        <title>Termomagnéticos | @yield('title','Inicio')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/simple-lightbox.min.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/card-styles.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/preloader.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/arrowAnimated.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/daterangepicker.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/iziToast.min.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css?v='.rand()) }}">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin=""/>
    </head>
<body style="overflow-x: hidden;">
    <div class="loader_bg">
        <div class="loader"></div>
    </div>