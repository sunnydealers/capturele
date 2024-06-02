<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <title>Capture Le - Services</title>
    <link rel="icon" type="image/x-icon" href="images/branding/favicon.png">
    <?php
        require('inc/links.php');
     ?>
    <style>
        .pop:hover{
            border-top-color: var(--neongold) !important;
            transform: scale(1.03);
            transition: 0.3s;
        }
    </style>
</head>

<body class="beta">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">SERVICES</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col=md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt2">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                            
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVALIABILITY</h5>
                                <label class="form-label ">Event Date (Starting)</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label ">Event Date (ending)</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facility two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facility three</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/services/service-1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Drone</h5>
                            <div class="features mb-3">
                                <h6 class="mb-4">Features:</h6>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                            </div>
                            <div class="facilities">
                                <h6 class="mb-4">Facilities:</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">2000 per booking</h6>
                            <a href="#" class="btn btn-sm w-100 text-white shadow-none custom-bg mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details...</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/services/service-1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Drone</h5>
                            <div class="features mb-3">
                                <h6 class="mb-4">Features:</h6>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                            </div>
                            <div class="facilities">
                                <h6 class="mb-4">Facilities:</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">2000 per booking</h6>
                            <a href="#" class="btn btn-sm w-100 text-white shadow-none custom-bg mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details...</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/services/service-1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Drone</h5>
                            <div class="features mb-3">
                                <h6 class="mb-4">Features:</h6>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge round-pill bg-light text-dark text-wrap">xyz</span>
                            </div>
                            <div class="facilities">
                                <h6 class="mb-4">Facilities:</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">xyz</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">2000 per booking</h6>
                            <a href="#" class="btn btn-sm w-100 text-white shadow-none custom-bg mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details...</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php 
        require('inc/footer.php');
    ?>

</body>

</html>