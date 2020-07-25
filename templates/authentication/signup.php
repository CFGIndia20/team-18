<html lang="en">
    <head>
        <?php
            include('../includes/header.php');
        ?>
        <title>SignUp</title>

        <style>
            .dim {
                width: 70%;
            }
        </style>
    </head>
    <body>
        <?php
            include('../includes/navbar.php');
        ?>
        <div class="container dim mt-5 p-3 shadow-lg bg-white rounded">
            <h3 class="text-center mb-4">SignUp</h3>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="number" min="1000000000" max="9999999999" oninvalid="this.setCustomValidity('Invalid Mobile No.!')" oninput="this.setCustomValidity('')" class="form-control" id="mobile" name="mobile">
                </div>
                <label>Role</label>
                <select class="form-control mb-3">
                    <option selected disabled>Select Role</option>
                    <option value=0>Women Employee</option>
                    <option value=1>Task Manager</option>
                </select>
                <div class="form-group">
                    <label for="email">Email-ID</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <label>Have an account? <a href="./login.php">Login</a></label>
        </div>

        <?php
            include('../includes/footer.php');
            include('../includes/jscdns.php');
        ?>
    </body>
</html>