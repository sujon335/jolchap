<?php /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ ?>
<section><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-1">
                <?php
                if (isset($status) && $status != NULL):
                    $class_name = "";
                    if ($status == "success")
                        $class_name = "success";
                    else if ($status == "failed")
                        $class_name = "danger";
                    ?>
                    <div class="alert alert-<?php echo $class_name; ?>">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $message; ?>
                    </div>
                    <?php
                endif;
                ?>
            </div>
            <div class="col-sm-2"></div>

            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form action="<?php echo base_url() ?>index.php/auth/login" method="post">
                        <input type="email" name="email" placeholder="Email" />
                        <input type="password" name="password" placeholder="Password" />
                        <input type="hidden" name="login_captcha_id" value="<?php echo $login_captcha_id; ?>" />
                        <input type="text" name="login_captcha" placeholder="Input the text shown below" />
                        <?php echo $login_captcha['image']; ?>
                        
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="<?php echo base_url(); ?>index.php/auth/signup" method="post">
                        <input type="text" name="name" placeholder="Name"/>
                        <input type="email" name="email" placeholder="Email Address"/>
                        <input type="password" name="password" placeholder="Password"/>
                        <input type="hidden" name="signup_captcha_id" value="<?php echo $signup_captcha_id; ?>" />
                        <input type="text" name="signup_captcha" placeholder="Input the text shown below" />
                        <?php echo $signup_captcha['image']; ?>
                        
                        
                        <button type="submit" class="btn btn-default" style=" margin-top: 5px;">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Social Login</h2>

                    <a class="btn btn-lg btn-block btn-social btn-facebook" href="<?php echo $fb_login_url; ?>">
                        <span class="fa fa-facebook"></span> Login with Facebook
                    </a>
                    <!--
                    <button class="btn btn-lg btn-block btn-social btn-google" id="google_login">
                        <span class="fa fa-google"></span> Sign in with Google
                    </button>
                    -->
                    <span>
                        
                    </span>
                    

                </div><!--/login form-->
            </div>

        </div>
        <div class="row" style="height: 250px;"></div>
        <div>
            <script>
                $('#google_login').click(function () {
                    // signInCallback defined in step 6.
                    auth2.grantOfflineAccess({'redirect_uri': 'postmessage'}).then(signInCallback);
                });
            </script>


            <script>
                function signInCallback(authResult) {
                    //alert('jhkhkhkj');
                    console.log(JSON.stringify(authResult));
                    if (authResult['code']) {
                        console.log(authResult['code']);
                        // Hide the sign-in button now that the user is authorized, for example:
                        $('#google_login').attr('style', 'display: none');

                        // Send the code to the server
                        $.ajax({
                            type: 'GET',
                            url: '<?php echo base_url(); ?>index.php/auth/google_login?code='+authResult['code'],
                            contentType: 'application/octet-stream; charset=utf-8',
                            success: function (result) {
                                // Handle or verify the server response.
                                alert(result);
                            }
                            
                        });
                    } else {
                        // There was an error.
                    }
                }
            </script>
            <script>
                function signOut(){
                    auth2.disconnect();
                }
            </script>
        </div>
    </div>
</section><!--/form-->

