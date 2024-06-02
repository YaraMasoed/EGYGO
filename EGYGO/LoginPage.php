<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="includes/signin_up_style.css">
    <link rel="stylesheet" href="includes/styles.css">
    <title>Sign in / Sign up Form</title>
</head>

<body>

    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <div class="container1">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="login.php" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="login" />
                </form>


                <!-- sign up -->
                <form method="POST" action="signupPage.php" class="sign-up-form" id="form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Name" id="name" name="name" />
                        <div class="error"></div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-venus-mars"></i>
                        <select id="gender" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <div class="error"></div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" id="Username" name="username" />
                        <div class="error"></div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" id="email" name="email" />
                        <div class="error"></div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="password" name="password" />
                        <div class="error"></div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" id="ConfirmPass" name="ConfirmPass" />
                        <div class="error"></div>
                    </div>
                    <input type="submit" value="singup" class="btn solid" name="singup" />
                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Create an account with us!
                    </p>
                    <button class="btn transparent" id="sign-up-btn" type="submit">
                        Sign up
                    </button>
                </div>

            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Sign in here
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>

            </div>
        </div>
    </div>


    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container1");

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });
    </script>
    <?php include 'includes/footer.php'; ?>