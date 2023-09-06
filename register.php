<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register.css">
</head>

<body>
    <div class="container">
        <div class="row" id="main">
            <div class="col-lg-12" id="register-container">
                <h3 class="text-center text-primary"> register to your ecom </h3>
                <div class="card" id="login-container">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" name="username" id="username" class="username form-control">
                            </div>
                            <div class="form-group">
                                <label for="username">password</label>
                                <input type="text" name="password" id="password" class="password form-control">
                            </div>
                            <h6 id="error"></h6>
                            <a href="login.php" class="nav-link ">Already have account ? Login </a>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit"
                                    class="submit form-control btn btn-primary mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready((e) => {

            $("#submit").click(() => {
                let username = $('#username').val();
                let password = $('#password').val();
                let error = $("#error");
                if (username == "" || password == "") {
                    error.html(" Please fill all the fields ").css("color", "red");
                    return false;
                } else if (username.length < 6) {
                    error.html(" Username must be atleast 6 characters long ").css("color", "red");
                    return false;
                } else if (password.length < 6) {
                    error.html(" Password must be atleast 6 characters long ").css("color", "red");
                    return false;
                }

                $.ajax({
                    url: "php/insert.php",
                    method: "POST",
                    data: {
                        username: username,
                        password: password
                    },
                    success: (resp) => {
                        if (resp == 1) {
                            error.html(" You are registed now check your email!");
                        } else if (resp == 2) {
                            error.html(" username already taken by someone else ");
                        } 

                        setTimeout(() => {
                            error.html("");
                        }, 2000);
                    }
                })


                return false;
            })
        })
    </script>
</body>

</html>