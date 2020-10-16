<!DOCTYPE html>
<html lang="en">
    <head>
       	<title>Acceso a Jabones SA</title>


    </head>
    <body id="page-top">
    
    <!-- header Bar -->
    <?php include(dirname(__FILE__)."/includes/header.php");?>
    <?php include(dirname(__FILE__)."/includes/menu.php");?>

       <!-- Login Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mx-auto ">
                        <div class="register-box">
                            <h4>Login Your Account</h4>
                            <div class="innter-form">
                                <form class="sa-innate-form" method="post">
                                    <label>Email Address</label>
                                    <input type="text" name="username">
                                    <label>Password</label>
                                    <input type="password" name="password">
                                    <button type="submit">Sign In</button>
                                    <a href="">Forgot Password?</a>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>	    	
            </div>
        </section>


    <!-- Footer Section -->
    <?php include(dirname(__FILE__)."/includes/footer.php");?>


    </body>
</html>