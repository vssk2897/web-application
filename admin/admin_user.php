<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GOVERNANCE APPLICATION - INDEX PAGE</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/styling.css">

</head>




<body>
<nav class="navbar" style="background-color: #252527;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand crud" href="#">GOVERNANCE SYSTEM</a>
    </div>
    
    
        <!-- Collect the nav links, forms, and other content for toggling -->
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        
          <li class="list-group-item">
              <a href="dashboard.php">Dashboard</a>
          </li>
        <li class="dash">
            <a href="./logout.php">Logout</a>
        </li>
        
      </ul>
    </div>
    
    
  </div>
</nav>
<div style="margin-left :55px">
    <div class ="container" style="alignment : center;width :120%;height=110%;padding-left :40px;">    
        <div class="col-md-9" style="alignment : center;">
<!--            Boottrap corousel to display sliders-->
            <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="../images/slider2.jpg" alt="" style="padding-left : 20px;margin-left :20px;max-height : 375px;">
                                </div>
                                <div class="item" >
                                    <img class="slide-image" src="../images/slider3.jpg" alt="" style="padding-left : 25px;margin-left :30px;max-height : 400px; min-width : 875px">
                                </div> 
                                <div class="item">
                                    <img class="slide-image" src="../images/slider4.jpg" alt="" style="padding-left : 25px;margin-left :25px;max-height : 400px; min-width : 875px">
                                </div>
                            </div>

                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div><br>
        </div>
        </div>
    </div>     

<div class="container">
    <br />
    <br />
    <br />


    <br />

    <div class="" id="accordion">
        <div class="faqHeader" style="color : #FFD700;">General questions</div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Our Cheif Ministers and Governers</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="card-block">
                    <?php include("../user/query_scripts/c&g.php"); ?> 
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">How much Fortune our states are worth of and who is managing it?</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="card-block">
                    <?php include("../user/query_scripts/6.php"); ?> 
                </div>
            </div>
        </div>
        

        <div class="faqHeader" style="color : #FFD700;">Development and Legislature Statistics</div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Want to know Fiscal Perfomance and Social Sevice Ranks ranks of our states ?</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="card-block">
                    <?php include("../user/query_scripts/1.php"); ?>
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Respective Heads of states and their Justice Law and Order Ranks</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="card-block">
                    <?php include("../user/query_scripts/2.php"); ?>
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Want to know what is the GPI of each states</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="card-block">
                    <?php include("../user/query_scripts/3.php")?><br />
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Social Service delivery Rankings and Quality of Legislature Rankings</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="card-block">
                    
                    <?php include("../user/query_scripts/4.php")?>
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Quality of Legislature, Fiscal Perfomance and Justice Law and Order Ranks</a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="card-block">
                    <?php include("../user/query_scripts/5.php")?>
                </div>
            </div>
        </div>
            
    </div>
</div>

<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>

<?php include("../user/footer.php"); ?>
</body>
</html>