<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$msg = 0;
@$msg = $_REQUEST['msg'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>.::Concrid Engenharia::.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="Jesspper" content="Murilo Andrade">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">   
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/camera.css" type="text/css" media="screen"> 
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/camera.js"></script>
        <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/forms.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                jQuery('.camera_wrap').camera();
            });
        </script>		
        <!--[if lt IE 8]>
                <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
        <![endif]-->

        <!--[if (gt IE 9)|!(IE)]><!-->
        <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
        <!--<![endif]-->
        <!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <![endif]-->
    </head>

    <body>
        <!--==============================header=================================-->
        <?php
        $ini = parse_ini_file('language/pt.ini', true);
        ?>
        <header class="p0">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="header-block clearfix">
                            <div class="clearfix header-block-pad">
                                <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""></a></h1>
                                <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                                    <input type="text" name="s" onBlur="if (this.value == '')
                    this.value = ''" onFocus="if (this.value == '')
                                this.value = ''"  >
                                    <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                                </form>
                                <span class="contacts">Whatsapp:  <span>61-984026001</span><br>E-mail: <a href="#">david.rodrigues@concrid.com</a></span>
                            </div>
                            <div class="navbar navbar_ clearfix">
                                <div class="navbar-inner navbar-inner_">
                                    <div class="container">
                                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                                        <div class="nav-collapse nav-collapse_ collapse">
                                            <ul class="nav sf-menu">
                                                <li class="active li-first"><a href="index.php"><em class="hidden-phone"></em><span class="visible-phone">Home</span></a></li>
                                                <li><a href="index-1.php">Sobre</a>

                                                </li>
                                                <li><a href="servicos.php">Serviços</a></li>
                                                <!--<ul>
                                                    <li><a href="planejamento.php">Planejamento</a></li>
                                                    <li><a href="engenharia.php">Projetos de Engenharia</a></li>
                                                <li><a href="gerenciamento.php">Gerenciamento</a></li>
                                                <li><a href="relatorios.php">Relatórios técnicos</a></li>
                                              </ul>-->
                                                <li><a href="index-4.php">Portifólio</a></li>
                                                <li><a href="index-5.php">Contatos</a></li>
                                            </ul>
                                        </div>
                                        <ul class="social-icons">
                                            <!--<li><a href="#"><img src="img/icon-1.png" alt=""></a></li>-->
                                            <li><a href="https://www.facebook.com/concridengenharia/?fref=ts"><img src="img/icon-2.png" alt=""></a></li>
                                            <!--<li><a href="#"><img src="img/icon-3.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/icon-4.png" alt=""></a></li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>   
            </div>