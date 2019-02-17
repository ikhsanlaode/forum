<html>
    <head>
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Forum</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#register">Register</a>
                    </li>
                </ul>
                
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="dropdown">
            <button class="btn btn-info  btn-sm dropdown-toggle" type="button" id="xx" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">PC Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Online Games</a>
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
        <div class="container">
            <div class = "row">
                <div class = "col-md-8">
                    <table class="table table-bordered">
                        <thead class="table-primary">
                            <tr>
                            <th style="width:50%">First Category</th>
                            <th style="width:10%" align ="center">Topics</th>
                            <th style="width:10%" align ="center">Post</th>
                            <th style="width:30%" align ="center">Last post</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>First Sub category</td>
                            <td>1</td>
                            <td>1</td>
                            <td>by <a href="#">ikhsan <i class="fas fa-chevron-right"></i></a>
                                <br>
                                17-02-2019 9:12
                            </td>
                            </tr>
                            <tr>
                            <td>Second Sub category</td>
                            <td>1</td>
                            <td>1</td>
                            <td>by <a href="#">ikhsan <i class="fas fa-chevron-right"></i></a>
                                <br>
                                17-02-2019 9:12
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class = "col-md">
                    <div class="card">
                        <div class="card-header card text-white bg-info mb-3">
                            NEW FORUM POSTS
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Testing post
                                <br>
                                by <a href ="#"> ikhsan </a>
                                <br>
                                17-02-2019 10:19
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header card text-white bg-info mb-3">
                            NEW FORUM POSTS
                        </div>
                        <div class ="card-body">
                            Total member: 9999 <br>
                            Total post: 9999 <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
