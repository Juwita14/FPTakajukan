<!DOCTYPE html>
<html>
    <head>
        <title>SignIn</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/stylelogin1.css">
    </head>
    <body>
        <?php if(isset($_GET['err'])): ?>
            <div class="alert alert-danger">Anda belum login.</div>
        <?php endif; ?>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="register.php" method="POST">
                    <h1>Buat Akun</h1>
                    <input type="text" placeholder="Username" name="username"/>
                    <input type="password" placeholder="Password" name="password"/>
                    <button>Submit</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="login_action.php" method="POST">
                    <h1>Login</h1>
                    <input type="text" name="username" placeholder="Username" />
                    <input type="password" name="password" placeholder="Password" />
                    <button><a class = "button1" href="beranda.php">Login</a></button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Selamat Datang!</h1>
                        <p>Silakan login dengan data Anda</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Halo!</h1>
                        <p>Ingin mendaftar?</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
        });
    </script>
</html>