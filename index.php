<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title> Login  | Adminpanel</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
<link href="assets/css/fontawesome.css" rel="stylesheet" />
<link href="assets/css/vendor.min.css" rel="stylesheet" />
<link href="assets/css/default/app.min.css" rel="stylesheet" />
</head>
<body id="body" class="auth-page" style="background:#f5f8fa url('assets/img/login.png'); background-size: cover; background-position: center center;">
 <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box"  style="background: #232a3e;">
                                    <div class="text-center p-3">
                                        <a class="logo logo-admin">
                                           <img src="assets/img/logo.png" height="70" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">ADMIN PANEL</h4>   
                                    </div>
                                </div>
                                <div class="card-body pt-0">                                    
                                    <form class="my-4" method="post">            
										<div class="form-floating mb-20px">
                                        <input type="text" name="username" required class="form-control fs-13px h-45px" id="emailAddress" placeholder="USERNAME" />
                                        <label for="emailAddress" class="d-flex align-items-center py-0">Username</label>
                                        </div>
                                        <div class="form-floating mb-20px">
                                        <input type="password" name="password" class="form-control fs-13px h-45px" id="password" placeholder="Password" />
                                        <label for="password" class="d-flex align-items-center py-0">Password</label>
                                        </div>
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" name="login" type="submit">LOGIN <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div>
                                        </div>                           
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>