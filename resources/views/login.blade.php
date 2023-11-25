<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

{{-- login page --}}
<body class="bg-dark">

    <div class="row g-0 fixed-top" style="margin-top:0;padding-top:0; border:2px solid red;">
        <div class="col-lg-5 fixed-top">
            <img src="logo.jpg" alt="image" style="color:white;width:40rem">
        </div>
{{-- end from image on left --}}


{{-- Login_Form --}}
        <div class="col fixed-top">
            <div class="container bg-light text-light  opacity-5  float-end" style=";width:39rem;height:37.3rem;magrin-left:10rem">
                <h3><img src="logo.jpg" alt="ico" style="width:100px;" class="rounded-5 ms-3"> Enterstream</h3>
                <h1 class="text-center text-dark" style="margin-top:1rem; ">Login</h1>
                <form action="#" method="POST" class="">
                    <div class="row d-flex justify-content-center align-items-center mt-2 ">
                        <div class="col-lg-6  content">
                            <label for="username" class="text-dark">username</label>
                            <input type="text" class="form-control align-items-center rounded-3 " style="text-transform:capitalize;background-color:whitesmoke;" name="username">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-lg-6">
                            <label for="password" class="text-dark">sandi</label>
                            <input type="password" class="form-control" name="password" id="password" style="text-transform: capitalize;background-color:whitesmoke">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col"> <a href="" class="link link-offset-2 link-primary" style="margin-left:20.4rem "> forget password</a></div>
                    </div>
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-lg-7">
                            <input type="submit" class="btn btn-primary text-light mt-5" name="masuk" id="masuk" value="Login" style="width:18rem;">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center text-center mt-5">
                        <div class="col-lg-8">
                            <a href="#" class="btn btn-dark text-light"><img src="search.ico" alt="google" style="width:27px; padding-right:5px"> Or sign in with google</a>
                        </div>
                    </div>

                    <div class="row" style="border: 1px solid black;">
                        <div class="col col-lg-5 text-dark justify-content-center align-items-center text-center">
                            Tidak Punya akun ? <a href="#" class="link">Daftar disini !</a>
                        </div>
                    </div>
                </form>

            </div>
            </div>
        </div>
{{-- end from login form --}}

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
