<html>
    <head>
        <title>Efficiency </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    
    
    <style>
        html{
            max-width: 100%;
            overflow-x: hidden;
        }
        body
        {
            max-width: 100%;
            background: url(background1.jpg) no-repeat center center;
            background-size: cover;
            overflow-x:hidden;
        }
        
        #divData{
        opacity: 0.8;
        background-color: white;
      }
      .checked {
        color: orange;
      }
      
    </style>
        
    </head>
    
    <body>
        <?php
            include('../includes/navbar.php');
        ?>
        
        <br>
        <br>
        <br>
        <br>
        
        
    <center>
        <div class = "divData" id = "divData" style="height: 500px;width: 1000px;">
            <br>
            <br>
            <div align="left">
                <center><h3>Task-1</h3></center>
                <h4 style="margin-left: 50px;">Efficiency Calculated:- 90%</h4>
                <div class="progress" style="width:50%;margin-left: 50px;">
                    
                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                      90% Effective
                    </div>
              </div>
              <hr style="height:10px;color:'black';">              
            </div>
            
            <div align="left">
                <center><h3>Task-2</h3></center>
                <h4 style="margin-left: 50px;">Efficiency Calculated:- 50%</h4>
                <div class="progress" style="width:50%;margin-left: 50px;">
                    
                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                      50% Effective
                    </div>
              </div>
              <hr style="height:10px;color:'black';">              
            </div>
            
            <div align="left">
                <center><h3>Task-3</h3></center>
                <h4 style="margin-left: 50px;">Efficiency Calculated:- 80%</h4>
                <div class="progress" style="width:50%;margin-left: 50px;">
                    
                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                      80% Effective
                    </div>
              </div>
              <hr style="height:10px;color:'black';">              
            </div>
            
        </div>
        <hr style="heigth:10px;width:80%;border: 1px solid black;">
        
        <div class = "divData" id = "divData" style="width: 1000px;">
            <br>
            <div align="center">
                <center><h3>Overall Rating</h3></center>
                <span class="fa fa-star checked fa-3x"></span>
                <span class="fa fa-star checked fa-3x"></span>
                <span class="fa fa-star checked fa-3x"></span>
                <span class="fa fa-star fa-3x"></span>
                <span class="fa fa-star fa-3x"></span>
                
            
            </div>
            <br>
        </div>
        <hr style="heigth:10px;width:80%;border: 1px solid black;">
        
        <div class = "divData" id = "divData" style="width: 1000px;">
            <br>
            <div align="center">
                <center><h3>Compensation Received</h3></center>
                <center> <h1>Rs 1000</h1></center>
                
            
            </div>
            <br>
        </div>
        <hr style="heigth:10px;width:80%;border: 1px solid black;">
        
        <br>
        <br>
        
        
        
        
        
        
        
    </center>
        
    
        
    </body>
</html>