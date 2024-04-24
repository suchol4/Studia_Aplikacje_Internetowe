<!doctype html>
<html lang="pl">
    <head>
        <title>No Sidebar - Escape Velocity by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{$app_url}/assets/css/main.css">	
    </head>

    <body class="no-sidebar is-preload">
        <div id="page-wrapper">
            <!-- Header -->
            <section id="header" class="wrapper">

                <!-- Logo -->
                <div id="logo">
                    <h1><a href="index.html">Kalkulator bankowy</a></h1>
                    <p>Strona została stworzona na potrzeby ćwiczeń labolatoryjnych</p>
                </div>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="{$app_url}/index.php">Home</a></li>
                        <li class="current"><a href="{$app_url}/index.php">Strona testowa</a></li>
                    </ul>
                </nav>

            </section>

            <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Kalkulator</div>
                <div class="container">
                    <!-- Content -->
                    <div id="content">
                        {block name=content} Domyślna treść zawartości .... {/block}
                    </div>
                </div>
            </div>


            <!-- Highlights -->
            
            {block name=Highlights} Domyślna treść zawartości .... {/block}
            
            <!-- Footer -->
            <section id="footer" class="wrapper">
                <div class="title">Dane kontaktowe</div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-12-medium">
                            <!-- Contact -->
                            <section class="feature-list small">
                                <div class="row">
                                    <div class="col-6 col-12-small">
                                        <section>
                                            <h3 class="icon solid fa-home style1">Adres</h3>
                                            <p>
                                                31-422, Kraków<br />
                                                Strzelców 9A/82<br />
                                            </p>
                                        </section>
                                    </div>
                                    <div class="col-6 col-12-small">
                                        <section>
                                            <h3 class="icon solid fa-comment">Social</h3>
                                            <p>
                                                <a href="#">@untitled-corp</a><br />
                                                <a href="#">linkedin.com/untitled</a><br />
                                                <a href="#">facebook.com/untitled</a>
                                            </p>
                                        </section>
                                    </div>
                                    <div class="col-6 col-12-small">
                                        <section>
                                            <h3 class="icon solid fa-envelope">Email</h3>
                                            <p>
                                                <a href="#">j.dynowski@o365.us.edu.pl</a>
                                            </p>
                                        </section>
                                    </div>
                                    <div class="col-6 col-12-small">
                                        <section>
                                            <h3 class="icon solid fa-phone">Phone</h3>
                                            <p>
                                                555 222 999
                                            </p>
                                        </section>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                    <div id="copyright">
                        <ul>
                            <li>&copy; JD_UŚ</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        
    </body>
</html>