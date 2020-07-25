<html lang="en">
    <head>
        <?php
            include('../includes/header.php');
        ?>
        <title>SignUp</title>
    </head>
    <body>
        <?php
            include('../includes/navbar.php');
        ?>
        <div class="container dim mt-5 p-3 shadow-lg bg-white rounded" style="width: 70%">
            <h3 class="text-center mb-4">SignUp</h3>

            <?php
                include('../includes/db.php');
                if($connection){
                    // for sign-in
                    if(isset($_POST['sign'])){
                        include('../includes/hash.php');

                        $name = $_POST['name'];
                        $role = $_POST['role'];
                        $password = secret($_POST['password']);
                        $mobile = $_POST['mobile'];

                        $query = "SELECT * FROM users WHERE mobile = {$mobile}";
                        $feth_query =  mysqli_fetch_array(mysqli_query($connection, $query));
                        
                        if($feth_query!=null){
                            echo "<h6 class='text-center mb-3' style='color: red;'>Mobile Already Registered!</h6>";
                        } else {
                            $query = "INSERT INTO users(username, passwrd, position, mobile) VALUES('{$name}', '{$password}', '{$role}', {$mobile})";
                            $create_user_query = mysqli_query($connection, $query);
                            echo "<h6 class='text-center mb-3' style='color: green;'>Registeration Successfull!</h6>";
                        }
                    }
                }
            ?>

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="number" min="1000000000" max="9999999999" oninvalid="this.setCustomValidity('Invalid Mobile No.!')" oninput="this.setCustomValidity('')" class="form-control" id="mobile" name="mobile" required>
                </div>
                <label>Role</label>
                <select class="form-control mb-3" name="role" required>
                    <!-- <option selected disabled>Select Role</option> -->
                    <option value=0>Women Employee</option>
                    <option value=1>Task Manager</option>
                </select>
                <!-- <div class="form-group">
                    <label for="email">Email-ID</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div> -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary" name="sign">Submit</button>
            </form>
            <label>Have an account? <a href="./login.php">Login</a></label>
        </div>

        <?php
            include('../includes/footer.php');
            include('../includes/jscdns.php');
        ?>
    </body>
</html>