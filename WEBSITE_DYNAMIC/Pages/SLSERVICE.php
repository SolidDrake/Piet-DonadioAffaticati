<!DOCTYPE html>
<html lang="en">

<?php

///////////////////////////////////////////////////////////////////////////////////////////////////
    //RICEVO NOME DEVICE CHE UTILIZZERO' PER COMPORRE LA MIA PAGINA WEB
    $name= $_GET["name"];

/////////////////////////////////////////////////////////////////////////

//TENTATIVO DI IMPLEMENTAZIONE OBJECT ORIENTED
class SL_Service
{
    public $sl_name;
    public $sl_description;
    public $sl_image1;
    public $sl_image2;
    public $sl_image3;
    public $logo;
    


    public function __construct($name)
    {

//CONNECTION METHOD
        $user = 'affaticatidonadiopieta';
        $pwd = '';
        //WARNING! OCCHIO AL DBNAME
        $dbname = 'my_affaticatidonadiopieta';
        $conn = new mysqli("localhost", $user, $pwd, $dbname);


// CHECK CONNECTION
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 


//SELECT QUERY + WHERE
        //WARNING! OCCHIO ALLA QUERY
        $sql = "SELECT * FROM slservices WHERE sl_name ='".$name."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

//CHIUSURA DI CONNESSIONE
        $conn -> close();

//VARIABILI DELL'OGGETTO ASSEGNATE

    
        $this -> sl_name = $row["sl_name"];
        $this -> sl_description = $row["sl_description"];
        $this -> sl_image1 = $row["sl_image1"];
        $this -> sl_image2 = $row["sl_image2"];
        $this -> sl_image3 = $row["sl_image3"];
        $this -> sl_logo = $row["logo"];
        


    }
}


//ISTANZIAZIONE OGGETTO
 $sl1 = new SL_Service ($_GET["name"]);

 
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fabio Affaticati">
    <meta name="author" content="Davide Donadio">
    <meta name="author" content="Filippo Pietà"> 
    
    <title><?php echo $sl1 -> sl_name;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../Style/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../Style/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a href="Homepage.html"> <img class="logo" src="../Images/LogoTim.png" ></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="Homepage.html" >HOME</a>
                    </li>
                     <li class="dropdown">
                        <a href="Innovations" class="dropdown-toggle" data-toggle="dropdown">CHI SIAMO<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="Innovations.html">INNOVAZIONI</a>
                            </li>
                            <li>
                                <a href="Testimonials.html">TESTIMONIALS</a>
                            </li>
                            <li>
                                <a href="Projects.html">PROGETTI</a>
                            </li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a href="AllDevCategories" class="dropdown-toggle" data-toggle="dropdown">DEVICES<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="AllDevCategories.html">ALL CATEGORIES</a>
                            </li>
                            <li>
                                <a href="AllDevices.html">ALL DEVICES</a>
                            </li>
                            <li>
                                <a href="Outlet.html">OUTLET</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="AllSLCategories" class="dropdown-toggle" data-toggle="dropdown">SMART LIFE<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="AllSLCategories.html">ALL SL CATEGORIES</a>
                            </li>
                            <li>
                                <a href="AllSL.html">ALL SL SERVICES</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="AllASCategories" class="dropdown-toggle" data-toggle="dropdown">ASSISTENZA<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="AllASCategories.html">ALL AS CATEGORIES</a>
                            </li>
                            <li>
                                <a href="ALLASServices.html">ALL AS SERVICES</a>
                            </li>
                            <li>
                                <a href="Highlights.html">HIGHLIGHTS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="Description.html" class="dropdown-toggle" data-toggle="dropdown">IL GRUPPO<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="Description.html">DESCRIPTION</a>
                            </li>
                            <li>
                                <a href="#">NEWS</a>
                            </li>
                            <li>
                                <a href="#">GOVERNANCE</a>
                            </li>
                            <li>
                                <a href="#">BUSINESS</a>
                            </li>
                            <li>
                                <a href="#">FOR INVESTORS</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $sl1 -> sl_name;?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="Homepage.html">Home</a>
                    </li>
                    <li><a href="AllSLCategories.html">All SL Categories</a>
                    </li>
                    <li><a href="TvEntertainment.html">TV & Entertainment</a>
                    </li>
                    <li class="active"><?php echo $sl1 -> sl_name;?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active" style="height: 450px; width: 750px;">
                           <center> <img class="fill" src=<?php echo $sl1 -> sl_image1 ?>  alt="" style="max-height: 450px; max-width: 750px;">
                        </center>
                        </div>
                        <div class="item" style="height: 450px; width: 750px;">
                        <center>
                            <img class="fill" src=<?php echo $sl1 -> sl_image2 ?> alt="" style="max-height: 450px; max-width: 750px;margin-top: 1%;">
                        </center>
                        </div>
                        <div class="item" style="height: 450px; width: 750px;">
                            <center>
                            <img class="fill" src=<?php echo $sl1 -> sl_image3 ?>  alt="" style="max-height: 450px; max-width: 750px;margin-top: 10%;">
                        </center>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
              <!--  <p> <br>Con TIMmusic puoi ascoltare musica in streaming senza limiti di tempo scegliendo da un vastissimo catalogo di milioni di brani musicali nazionali e internazionali di ogni genere, sempre aggiornato con le ultime uscite discografiche.

                TIMmusic ti consente anche di creare e salvare le tue playlist personali o di ascoltare quelle suggerite da Dj e artisti famosi in esclusiva per te. Inoltre puoi scegliere tra tante playlist proposte per genere e per tema o create dinamicamente dalla piattaforma in base alla musica che stai ascoltando. </p>
            -->
                <?php echo $sl1 -> sl_description?>

                <h1 class="page-header"></h1>

                 <div class="media">
                 <br>
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <a href="TIMMusicAR.html">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                            </a>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">REGOLE DI ATTIVAZIONE</h4>
                        <p>Scopri come ottenere questo servizio</p>
                    </div>
                
                </div>
     
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <a href="TIMMusicSuppDev.html">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                            </a>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">DEVICES ASSOCIATI</h4>
                        <p>Scopri i Devices associati a questo servizio</p>
                    </div>
                </div>


            </div>

        </div>

        <hr>


        <!-- Footer -->
        <footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>

			</div>

			<div class="footer-left">
				<img class="logo" src="../Images/LogoTim.png">
				<p>Telecom Italia Mobile &copy; 2015</p>
			</div>

		</footer>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../Scripts/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../Scripts/bootstrap.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>


