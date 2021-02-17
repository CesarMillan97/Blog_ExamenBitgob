@extends('adminlte::page')
@section('title', 'Admin - Blog')



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
        
        @yield('content')
        <section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >Todas</a>
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Programación</a>
                    
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">

                    <!-- Post 1 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/Facebook.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Articulo 1</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Cesar</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/Facebook.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Articulo 2</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Cesar</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post 3 -->

                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/Facebook.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Articulo 3</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Cesar</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
        </div>
    </section>


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
@endsection
