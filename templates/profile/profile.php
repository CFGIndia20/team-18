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


<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">


                <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">Number of hours I am available</a></h2>

                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
        
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                    <div class="form-group">
                                            <label for="usr">Full name:</label>
                                            <input type="text" class="form-control" id="usr">
                                    </div>
                                    <hr />
                                    <div class="form-group">
                                            <label for="pwd">Birthdate:</label><br />
                                            <label for="date">Date</label>
                                                <input type="text" id="date" name="date" />
                                                <label for="month">Month</label>
                                                <input type="text" id="month" name="month" />
                                                <label for="year">Year</label>
                                                <input type="text" id="year" name="year" />
                                    </div>
                                    <hr />
                                    <div class="form-group">
                                        <label for="comment">Address:</label>
                                         <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                    <hr />
                                    <div class="form-group">
                                        <label for="comment">Number of hours I am available:</label>
                                    <input type="number" id="quantity" name="quantity" min="1" max="20">
                                    </div>
                                    <button type="button" class="btn btn-primary">Submit data</button>

                                    </div>
                                    

                                    

                                </div>
                            </div>
                        </div>


                    </div>
<!--Card body ends here-->

                </div>
            </div>
        </div>
    </div>
        <?php
        include('../includes/footer.php');
        include('../includes/jscdns.php');
    ?>
</body>
</html>