<?php
    include('../includes/session.php');
    if(isset($_GET['logout']) && $_GET['logout']==1){
        des_sess();
    }
?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #850456;">
    <div class="container">
        <a class="navbar-brand" href="#">Umeed</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
            include('../../translate-tel-urd.php');
        ?>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: 0">
            <ul class="navbar-nav mr-auto">
                <?php
//                    include('../includes/session.php');
                    if(isset($_SESSION['id'])){
                ?>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tasks
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Upcoming</a>
                                <a class="dropdown-item" href="#">Ongoing</a>
                                <a class="dropdown-item" href="#">Completed</a>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="../task/task.php">Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../compensation/Efficiency.php">Compensation</a>
                        </li>
                        <li class="nav-item">
                            <a href="?logout=1" class="nav-link" name="logout">Logout</a>
                        </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>