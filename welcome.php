<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=4, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Future Glam | Home Page</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>
  </div>
</nav>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=4">

    <title>Future Glam | Your Career Portal</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <link rel="stylesheet" href="css/templatemo-style.css">                                   .

    
      
</head>

<body class="tm-bg-img-content">

    <div class="tm-bg-img-header">
        <div class="container-fluid">
            
            <div id="top" class="tm-header-container">
                
                <!-- 1. Site Header -->
                <div class="row tm-site-header">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-sm-center">

                        <h1 class="tm-site-title">Future Glam</h1>
                        <p class="tm-site-description">Education Is Your Passport To The Future</p>
                    
                    </div>
                </div>

                <!-- 2. Navigation -->
                <div class="row tm-navbar-row tm-navbar-row-absolute">
                    <div class="tm-navbar-container">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="text-sm-center">
                            <nav class="navbar navbar-full">
                                    
                                <div class="text-xs-center tm-navbar-rounded" id="tmNavbar">                            

                                    <ul class="nav navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#top">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tm-section-1">About</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="elements.html">Contact</a>
                                        </li>
                                        
                                    </ul>

                                </div>
                              
                            </nav>
                        </div> <!-- col-xs-12 -->
                    </div> <!-- tm-navbar-container -->                        
                </div> <!-- row -->   

            </div> <!-- .tm-header-container -->
            
            
               <!-- 3. About -->
            

               <div class="row" id="tm-section-1">
                
                <div class="container">
                    <section class="tm-2-col-img-text">
                    
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 tm-2-col-img">                                
                            <i class="fa fa-5x fa-map-o"></i>
                            <i class="fa fa-5x fa-rocket"></i>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 tm-2-col-text">
                            <h2 class="tm-2-col-text-title">Our Niche</h2>
                            <p class="tm-2-col-text-description">
                               If your not happy in your career and you are afraid to make a move,
                                                      this career portal will your little motivation to generate powerfull action.
                            </p>
                        </div>
                        
                    </section>

                    <section class="tm-2-col-img-text" id="tm-section-2">
                    
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 tm-2-col-text">
                            <p class="tm-2-col-text-description">
                               In choosing  a career ,you're almost always making the decision about what to become good at,not the other way around.How,then,should you find a job you'll love?
</P>
                           <p class="tm-2-col-text-description">
                           "DO SOMETHING VALUABLE."
                            </p>
                        </div>
                        
                    </section>
                </div>                

            </div> <!-- About section, tm-section-1 & 2 -->

        </div> <!-- container-fluid -->               
    </div> <!-- tm-bg-img-header -->
        
    <div class="container-fluid">
        
       
        <div class="row tm-section" id="tm-section-3">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-xs-center">
                <h2 class="tm-section-title">Select Your Program</h2>
                <p class="tm-section-subtitle">
                    
                </p>    
            </div>
                    
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    
                <div class="tm-plan-boxes-container">
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-table-col">
                            
                        <table class="tm-table-full-width">
                            <thead>
                                <tr class="tm-bg-green-1">
                                    <th class="tm-plan-table-header">Under Graduate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tm-bg-green-2"><td class="tm-plan-table-cell">B.SC</td></tr>
                                <tr class="tm-bg-green-3"><td class="tm-plan-table-cell">B.COM</td></tr>
                                <tr class="tm-bg-green-1"><td class="tm-plan-table-cell">B.A</td></tr>
                                <tr class="tm-bg-green-2"><td class="tm-plan-table-cell">BBA</td></tr>
                                <tr class="tm-bg-green-3"><td class="tm-plan-table-cell">B.E/B.Tech</td></tr>
                                <tr class="tm-bg-green-1"><td class="tm-plan-table-cell tm-plan-table-cell-pad-small text-xs-center">
                                        <a href="elements.html" class="tm-bg-green-1 tm-btn-rounded tm-btn-green">More Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>  

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-table-col">
                        
                        <table class="tm-table-full-width">
                            <thead>
                                <tr class="tm-bg-blue-1">
                                    <th class="tm-plan-table-header">Post Graduation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tm-bg-blue-2"><td class="tm-plan-table-cell">M.SC</td></tr>
                                <tr class="tm-bg-blue-3"><td class="tm-plan-table-cell">M.COM</td></tr>
                                <tr class="tm-bg-blue-1"><td class="tm-plan-table-cell">M.A</td></tr>
                                <tr class="tm-bg-blue-2"><td class="tm-plan-table-cell">MBA</td></tr>
                                <tr class="tm-bg-blue-3"><td class="tm-plan-table-cell">M.E/M.Tech</td></tr>
                                <tr class="tm-bg-blue-1"><td class="tm-plan-table-cell tm-plan-table-cell-pad-small text-xs-center">
                                 <a href="elements.html" class="tm-bg-blue-1 tm-btn-rounded tm-btn-blue">More Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>  

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-table-col">

                        <table class="tm-table-full-width">
                            <thead>
                                <tr class="tm-bg-gold-1">
                                    <th class="tm-plan-table-header">Ph.D/Research</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tm-bg-gold-2"><td class="tm-plan-table-cell">Ph.D In Science</td></tr>
                                <tr class="tm-bg-gold-3"><td class="tm-plan-table-cell">Ph.D In Commerce</td></tr>
                                <tr class="tm-bg-gold-1"><td class="tm-plan-table-cell">Ph.D In Law</td></tr>
                                <tr class="tm-bg-gold-2"><td class="tm-plan-table-cell">Ph.D In Management</td></tr>
                                <tr class="tm-bg-gold-3"><td class="tm-plan-table-cell">Ph.D In Engineering</td></tr>
                                <tr class="tm-bg-gold-1"><td class="tm-plan-table-cell tm-plan-table-cell-pad-small text-xs-center">
                                <a href="elements.html" class="tm-bg-gold-1 tm-btn-rounded tm-btn-gold">More Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>  

                    </div>

                </div> 
            </div> 

        </div> 

    </div> 
    

            <div class="row tm-footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-xs-center">
                    
                    <div class="tm-social-icons-container">
                       <a href="https://www.linkedin.com/in/vaishnavi-gare" class="tm-social-icon-link-brown"><i class="fa fa-linkedin tm-social-icon"></i></a>
                        <a href="https://twitter.com/ruchi__ganurkar" class="tm-social-icon-link-brown"><i class="fa fa-twitter tm-social-icon"></i></a>
                        
                        <a href="https://www.linkedin.com/in/priyassonawane" class="tm-social-icon-link-brown"><i class="fa fa-linkedin tm-social-icon"></i></a>
                    </div>

                </div>

                <footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-xs-center">
                    <p class="tm-copyright-text"></p>
                </footer>

            </div>                 
        </div>
    </div> <!-- tm-section-contact-form -->
        
   
</body>
</html>

 <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>             
    <script src="js/jquery.singlePageNav.min.js"></script>      

    <script>

        function prepareMenuForDesktop() {

            var navbarHeight = 0;

            
            // For screens greater than 767
            if($(window).width() > 767) {

                // target at which the menu bar changes to sticky
               var target = $("#tm-section-1").offset().top - 100;

                // window scroll
                $(window).scroll(function(){

                    if($(this).scrollTop() > target) {                            
                        $(".tm-navbar-row").addClass("sticky");                            
                    }
                    else {
                        $(".tm-navbar-row").removeClass("sticky");
                    }     

                }); 

                navbarHeight = 56;
            }

            // Single Page Nav
            $('#tmNavbar').singlePageNav({
               'currentClass' : "active",
                offset : navbarHeight,
                'filter': ':not(.external)'
            });  
        }  
   
        $(document).ready(function(){                 

            prepareMenuForDesktop();

            // On window resize, prepare menu
            $(window).resize(function(){
                prepareMenuForDesktop();                 
                                  
            });       
        });

    </script>      



</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
