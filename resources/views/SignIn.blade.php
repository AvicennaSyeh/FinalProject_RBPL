<html>

<head>
    <title>

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Grape+Nuts&family=Montserrat:wght@100&family=Nunito+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Staatliches&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-sm navbar-light bg-light-brown shadow-sm">
              <div class="container">
                <img src="logo.jpeg" class="navbar-brand py-0" alt="">
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="collapsibleNavId">
                    <ul class="nav justify-content-center  ">

                        <a href="" class="btn btn-outline-dark mx-3">Sign Up</a>
                        <a href="" class="btn btn-dark mx-3">Sign In</a>

                    </ul>
                </div>
          </div>
        </nav>

        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <div class="greeting">
                            <div class="greeting-title">
                                Sign in to <br> Infacare
                            </div>
                            <div class="greeting-caption text-secondary">
                                <h5>If you dont have an account you can <div class="text-danger">
                                    Register Here
                                </div> </h5>
                            </div>
                        </div>

                        <img src="/images/Signinawal.png" class="img-fluid greeting-image" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <center><h2>Sign In</h2></center>
                        <form>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form1Example13">Email address</label>
                                <input type="email" id="form1Example13" class="form-control form-control-lg" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form1Example23">Password</label>
                                <input type="password" id="form1Example23" class="form-control form-control-lg" />
                            </div>


                            <!-- Submit button -->
                            <a href="about.html" class="btn btn-primary btn-lg btn-block">Sign in</a>



                            <div class="d-flex justify-content-around align-items-center mb-4">

                                <p>Don't have an account?
                                <a href="/register">Sign Up</a></p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
