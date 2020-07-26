<html lang="en">
    <head>
        <?php
            include('../includes/header.php');
        ?>
        <title>Login</title>

    </head>
    <body>
        <?php
            include('../includes/navbar.php');
        ?>
        <div class="container mt-5 p-3 shadow-lg bg-white rounded" style="width: 70%;">
            <h3 class="text-center mb-4">Login</h3>

            <?php
                include('../includes/db.php');
                if($connection){
                    // for login
                    if(isset($_POST['login'])){
                        $mobile = $_POST['mobile'];
                        $password = $_POST['password'];

                        $query = "SELECT mobile, passwrd position FROM users WHERE mobile = {$mobile}";
                        $user_query = mysqli_query($connection, $query);

                        if($user_query){
                            $fetch_query = mysqli_fetch_array($user_query);
                            $db_password = $fetch_query['passwrd'];
                            
                            include('../includes/hash.php');
                            $password = secret($_POST['password']);

                            if($db_password == $password){
                                // including session section
                                // include('../includes/session.php');
                                set_sess($mobile);

                                if($fetch_query['position']){
                                    header("Location: ../task/task.php");
                                } else {
                                    header("Location: ../task/task.php");
                                }
                                // echo '<script>window.location.replace("http://www.w3schools.com");</script>';
                            }
                        }
                        echo "<h6 class='text-center mb-3' style='color: red'>Incorrect Mobile or Password!</h6>";
                    }
                }
            ?>

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="number" min="1000000000" max="9999999999" oninvalid="this.setCustomValidity('Invalid Mobile No.!')" oninput="this.setCustomValidity('')" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <!-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck" style="opacity: 1">
                    <label class="form-check-label" for="exampleCheck" name="checkbox">Check me out</label>
                </div> -->
                <button type="submit" class="btn btn-primary" name="login">Submit</button>
            </form>
            <label>Not have an account? <a href="./signup.php">SignUp</a></label>
        </div>

        <?php
            include('../includes/footer.php');
            include('../includes/jscdns.php');
        ?>
    </body>
</html>