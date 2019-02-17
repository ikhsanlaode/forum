<html>
    <head>
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
            <a class="navbar-brand py-0" href="#">Forum</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <input type="text" class="form-control form-control-sm" placeholder="Type something" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary btn-sm" type="button">Search</button>
                    </div>
                </ul>
                <ul class="navbar-nav">
                
                    <li class="nav-item">
                        <a class="nav-link py-0" href="#" data-toggle="modal" data-target="#login">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-0" href="#" data-toggle="modal" data-target="#register">Register</a>
                    </li>
                </ul>               
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1998ed;">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mx-auto">
                    <li id="sub" class="nav-item" >
                        <a class="nav-link py-0" href="#">PC Games</a>
                    </li>
                    <li id="sub" class="nav-item">
                        <a class="nav-link py-0" href="#">Online Games</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="modal" id="login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="email-login">Email address</label>
                            <input type="email" class="form-control" id="email_login" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="password-login">Password</label>
                            <input type="password" class="form-control" id="pass_login" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>               
                </div>
            </div>
        </div>
        <div class="modal" id="register">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name_register"  placeholder="Masukkan nama lengkap" name ="name">
                        </div>
                        <div class="form-group">
                            <label for="email-register">Email</label>
                            <input type="email" class="form-control" id="email_register" aria-describedby="emailHelp" placeholder="Masukkan email" name ="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="user">Username</label>
                            <input type="text" class="form-control" id="user_register"  placeholder="Masukkan Username" name ="username">
                        </div>
                        <div class="form-group">
                            <label for="password-register">Password</label>
                            <input type="password" class="form-control" id="pass_register" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>               
                </div>
            </div>
        </div>
        </br>
        @yield('content')