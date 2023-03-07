<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite(['resources/css/front.css', 'resources/js/front.js'])
    <title>Frontend</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 px-4 mt-3">
                <h1 class="titulo-h1">Build Anything.</h1>
                <h1 class="titulo-h1 pb-3">Reimagine commerce.</h1>
                <p class="pb-4">Millions of merchants trush Shopify to run their business -- but Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime odit sunt mollitia quaerat suscipit temporibus aut corporis totam, nisi animi adipisci debitis hic eius. Blanditiis voluptates dicta culpa optio corporis! Lorem ipsum dolor sit amet. Fuga, nisi ut?</p>

                <h5 class="titulo-h5">Develop apps that solve complex merchant problems</h5>
                <p><strong>Name: </strong> {{$personaje1['name']}} <strong>status: </strong>{{$personaje1['status']}} <strong>species: </strong>{{$personaje1['species']}}
                    <strong>gender: </strong>{{$personaje1['gender']}} <strong>origin: </strong> {{$personaje1['origin']['name']}} <strong>url: </strong>{{$personaje1['origin']['url']}}
                </p>

                <h5 class="titulo-h5">Integrate seamlessly into existing workflows</h5>
                <p><span>Name: </span> {{$personaje2['name']}} <span>status: </span>{{$personaje2['status']}} <span>species: </span>{{$personaje2['species']}}
                    <span>gender: </span>{{$personaje2['gender']}} <span>origin: </span> {{$personaje2['origin']['name']}} <span>url: </span>{{$personaje2['origin']['url']}}
                </p>

                <h5 class="titulo-h5">Help merchants express themselves </h5>
                <p><span>Name: </span> {{$personaje3['name']}} <span>status: </span>{{$personaje3['status']}} <span>species: </span>{{$personaje3['species']}}
                    <span>gender: </span>{{$personaje3['gender']}} <span>origin: </span> {{$personaje3['origin']['name']}} <span>url: </span>{{$personaje3['origin']['url']}}
                </p>

                <h5 class="titulo-h5">Ship custom shopping experiences</h5>
                <p><span>Name: </span> {{$personaje4['name']}} <span>status: </span>{{$personaje4['status']}} <span>species: </span>{{$personaje4['species']}}
                    <span>gender: </span>{{$personaje4['gender']}} <span>origin: </span> {{$personaje4['origin']['name']}} <span>url: </span>{{$personaje4['origin']['url']}}
                </p>

                <div class="row">
                    <div class="col-12 content">
                        <div class="content-item">
                        <i class='bx bxs-extension'></i>
                           <span>Apps</span>
                        </div>
                        <div class="content-item">
                        <i class='bx bxs-brush'></i>
                            <span>Themes</span>
                        </div>
                        <div class="content-item">
                        <i class='bx bx-buildings'></i>
                            <span>Storefronts</span>
                        </div>
                        <div class="content-item">
                        <i class='bx bxs-store'></i>
                            <span>Marketplaces</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <img class="img-fluid img-panel float-end" src="{{asset('img/img.jpg')}}" alt="build">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="content-panel">
                   <div class="row">
                   <div class="col-6">
                        <h1>Launch your app or theme to millions of merchants</h1>
                        <h5 class="panel-h5 pb-2">App Store</h5>
                        <p>Get your app in front of the right merchants. With personalized recomendations Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit itaque doloremque nostrum nihil, sequi tempora. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <h5 class="panel-h5 pb-2">Theme Store</h5>
                        <p>Sell your theme to merchants building. With personalized recomendations Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-6">
                        <div class="box-panel float-end">
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <i class='bx bx-money-withdraw'></i>
                                    </div>
                                    <div class="col-8 ">

                                            <h4>$12.5 B USD</h4>
                                            <p>Revenue generated from the Shopify ecosystem (2020)</p>

                                    </div>
                                </div>
                            </div>
                            <div class="box-item">
                              <div class="row mt-4">
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <i class='bx bx-star'></i>
                                </div>
                                <div class="col-8 d-flex justify-content-start align-items-center">
                                    <h4>3 in 4 merchants use</h4>
                                </div>
                              </div>

                            </div>
                            <div class="box-item mt-4">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <i class='bx bx-extension' ></i>
                                    </div>

                                    <div class="col-8">
                                        <h4>Average number of apps installed per merchant</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


  </body>
</html>
