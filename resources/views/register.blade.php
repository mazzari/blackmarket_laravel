<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Blackmarket</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href={{asset('css/register_style.css') }}>

</head>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="{{url('register')}}">                           
                        @csrf
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-nama"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Your name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="password" placeholder="email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="telepon><i class="zmdi zmdi-telepon"></i></label>
                                <input type="text" name="no_tlp" id="no_tlp" placeholder="phone number" required/>
                            </div>
                            <div class="form-group">
                                <label for="alamat"><i class="zmdi zmdi-lock"></i></label>
                                <textarea name="alamat" id="alamat" placeholder="your address"></textarea>
                            </div>                      
                           
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="../login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src={{ asset('vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('js/main.js') }}></script>
</body>
</html>