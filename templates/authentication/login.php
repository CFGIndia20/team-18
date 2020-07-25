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
            <h3 class="text-center mb-4">Login</h3>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="number" min="1000000000" max="9999999999" oninvalid="this.setCustomValidity('Invalid Mobile No.!')" oninput="this.setCustomValidity('')" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck" style="opacity: 1">
                    <label class="form-check-label" for="exampleCheck" name="checkbox">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <label>Not have an account? <a href="./signup.php">SignUp</a></label>
        </div>

        <?php
            include('../includes/footer.php');
            include('../includes/jscdns.php');
        ?>
    </body>
</html>