<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Hotel</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />

    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@500;600;700;800&family=Poppins:wght@500;600&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        * {
            font-family: "Poppins", sans-serif;
        }

        .h-font {
            font-family: "Merienda", cursive;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex" role="search">
                    <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal"
                        data-bs-target="#login-modal">
                        LOG IN
                    </button>
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#reg-modal">
                        REGISTER
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="login-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel">
                            <i class="bi bi-person-circle fs-3 me-3"></i> User Login
                        </h1>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label ">Email address</label>
                            <input type="email" class="form-control shadow-none">

                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label ">Password</label>
                            <input type="password" class="form-control shadow-none">

                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button class="btn btn-dark sha dow-none">
                                Login
                            </button>
                            <a href="javasript: void(0)" class="text-secondary text-decoration-none"> Forgat Password
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>


    <div class="modal fade" id="reg-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel">
                            <i class="bi bi-person-circle fs-3 me-3"></i> User Login
                        </h1>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label ">Name</label>
                            <input type="email" class="form-control shadow-none">

                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label ">Password</label>
                            <input type="password" class="form-control shadow-none">

                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button class="btn btn-dark sha dow-none">
                                Login
                            </button>
                            <a href="javasript: void(0)" class="text-secondary text-decoration-none"> Forgat Password
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
</body>

</html>