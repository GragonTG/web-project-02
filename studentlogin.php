<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="container-fluid bg-black">

    <div class="col-12 row bg-black">
        <div class="mt-5 col-6">
            <div class="p-2 row">
                <div class="col-2"><img src="resources/ua logo.jpg" style="max-height: 80px;"></div>
                <div class="col-6"><span class="text-white" style="font-family: winter; font-size: 50px;">UA Academy</span></div>
            </div>
            <div class="row g-2 justify-content-center align-content-center d-flex">




                            <div class="col-sm-10 col-lg-10">
                                <label class="form-label text-white-50">Email</label>
                                <input type="email" class="form-control form" placeholder="ex:- allmight@gmail.com" id="email" />
                            </div>

                            <div class="col-sm-10 col-lg-10">
                                <label class="form-label text-white-50">Password</label>
                                <input type="password" class="form-control form" placeholder="ex:**********" id="password" />
                            </div>

                            <div class="col-lg-6 col-sm-12 justify-content-center d-flex">
                                <b class="btn-primary btn col-8 mt-2 justify-content-center" onclick="logIn();">LogIn</b>
                            </div>
                        
                            <div>
                                <a class="link-secondary justify-content-center d-flex" onclick="forgotPassword();">Forgot Password?</a>
                            </div>

                        </div>
        </div>
        <div class="col-6" style="overflow: hidden; ">
            <div class="col-6"><img src="resources/ua pic.jpg" style="height: 100%;"></div>
        </div>
    </div>
    
        <script src="script.js"></script>
        <script src="bootstrap.js"></script>
</body>
</html>