@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Post</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</head>
<!-- Contenido -->
<section class="container-fluid content py-5">
<!--footer-->
<footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/logo.png')}}" alt="" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/">
                    <img src="{{asset('images/Facebook.png')}}" class="img-fluid" width="40px" alt="facebook ">
                </a>
                <a href="https://www.instagram.com/">
                    <img src="{{asset('images/Facebook.png')}}" class="img-fluid" width="40px" alt="instagram ">
                </a>
                <a href="">
                    <img src="{{asset('images/Facebook.png')}}" class="img-fluid" width="40px" alt="youtube ">
                </a>
                <p class="mt-3">Copyright © 2020, Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

        <div class="row justify-content-center">
            <!-- Post -->
            <div class="col-12 col-md-7 text-center">
                <h1>POO con Javascript, feo pero posible</h1>
                <hr>
                <img src="images/Facebook.png" alt="Post Javascript" class="img-fluid">

                <p class="text-left mt-3 post-txt">
                    <span>Autor: Cesar</span>
                    <span class="float-right">Publicado: Hace 2 semanas</span>
                </p>
                <p class="text-left">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eaque nemo accusantium libero hic repellat corporis assumenda
                    debitis adipisci modi expedita inventore vel excepturi,
                    facere animi accusamus? Voluptatem ab ad harum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eaque nemo accusantium libero hic repellat corporis assumenda
                    debitis adipisci modi expedita inventore vel excepturi,
                    facere animi accusamus? Voluptatem ab ad harum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eaque nemo accusantium libero hic repellat corporis assumenda
                    debitis adipisci modi expedita inventore vel excepturi,
                    facere animi accusamus? Voluptatem ab ad harum?
                </p>
                <p class="text-left post-txt"><i>Categoría: Desarrollo web</i></p>
            </div>

            <!-- Entradas recientes -->
            <div class="col-md-3 offset-md-1">
                <p>Últimas entradas</p>
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="#">
                            <img src="images/Facebook.png" class="img-fluid rounded" width="100" alt="">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="#" class="link-post">Aprende Python en un dos tres</a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="#">
                            <img src="images/Facebook.png" class="img-fluid rounded" width="100" alt="">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="#" class="link-post">PHP sigue vivito y coleando</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection