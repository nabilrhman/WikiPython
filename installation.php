<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>WikiPython - Installation</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="plugins/slider/slider.css">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Prism.js -->
    <link href="plugins/prism/prism.css" rel="stylesheet"/>


</head>
<body>

<script src="plugins/prism/prism.js"></script>

<?php include 'header.php'; ?>


<!--
==================================================
    Global Page Section Start
================================================== -->
<section class="global-page-header wow fadeInDown" data-wow-delay=".2s" data-wow-duration="500ms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Installation</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<!--
==================================================
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s" data-wow-duration="500ms">
                        Get started
                    </h3>
                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="800ms">
                        To get started working with Python 3, you’ll need to have access to the Python interpreter.
                        There are several common ways to accomplish this.
                    </p>

                    <ul class="list-group wow fadeInUp" data-wow-delay=".7s" data-wow-duration="800ms"
                        style="margin-bottom: 10px !important;">
                        <li class="list-group-item">Python can be obtained from the Python Software Foundation website
                            at python.org. Typically, that involves downloading the appropriate installer for your
                            operating system and running it on your machine.
                        </li>
                        <li class="list-group-item">Some operating systems, notably Linux, provide a package manager
                            that can be run to install Python.
                        </li>
                        <li class="list-group-item">On macOS, the best way to install Python 3 involves installing a
                            package manager called Homebrew.
                        </li>
                    </ul>

                    <p class="wow fadeInUp" data-wow-delay=".9s" data-wow-duration="800ms">
                        Alternatively, there are several websites that allow you to access a Python interpreter online
                        without installing anything on your computer at all.
                        In this Python installation guide, you’ll see step by step how to set up a working Python 3
                        distribution on Windows, macOS and Linux. So let’s get started!
                    </p>

                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Windows
                    </h4>

                    <ul class="list-group wow fadeInUp" data-wow-delay=".5s" data-wow-duration="800ms"
                        style="margin-bottom: 10px !important;">
                        <li class="list-group-item">Open a browser window and navigate to the Download page for Windows
                            at python.org.
                        </li>
                        <li class="list-group-item">Underneath the heading at the top that says Python Releases for
                            Windows, click on the link for the Latest Python 3 Release - Python 3.x.x. (As of this
                            writing, the latest is Python 3.6.5.)
                        </li>
                        <li class="list-group-item">Scroll to the bottom and select either Windows x86-64 executable
                            installer for 64-bit or Windows x86 executable installer for 32-bit.
                        </li>
                        <li class="list-group-item">Once you have chosen and downloaded an installer, simply run it by
                            double-clicking on the downloaded file.
                        </li>
                        <li class="list-group-item">You want to be sure to check the box that says Add Python 3.x to
                            PATH as shown to ensure that the interpreter will be placed in your execution path.
                        </li>
                        <li class="list-group-item">Then just click Install Now. That should be all there is to it. A
                            few minutes later you should have a working Python 3 installation on your system.
                        </li>
                    </ul>

                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        MacOS
                    </h4>

                    <ul class="list-group wow fadeInUp" data-wow-delay=".5s" data-wow-duration="800ms"
                        style="margin-bottom: 10px !important;">
                        <li class="list-group-item">To get started, you first want to <a
                                    href="https://realpython.com/installing-python/#step-1-install-homebrew-part-1">install
                                Homebrew</a>.
                        </li>
                        <li class="list-group-item">Once Homebrew has finished installing, return to your terminal and
                            run the following command.
                            <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                        class="language-bash">brew install python3</code></pre>
                        </li>
                        <li class="list-group-item">This will download and install the latest version of Python. After
                            the Homebrew install command finishes, Python 3 should be installed on your system.
                        </li>
                    </ul>

                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Linux
                    </h4>

                    <ul class="list-group wow fadeInUp" data-wow-delay=".5s" data-wow-duration="800ms"
                        style="margin-bottom: 10px !important;">
                        <li class="list-group-item">There is a very good chance your Linux distribution has Python
                            installed already, but it probably won’t be the latest version, and it may be Python 2
                            instead of Python 3.
                        </li>
                        <li class="list-group-item">To find out what version(s) you have, open a terminal window and try
                            the following commands.
                            <pre class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><code
                                        class="language-bash">python --version</code></pre>
                            <pre class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><code
                                        class="language-bash">python2 --version</code></pre>
                            <pre class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><code
                                        class="language-bash">python3 --version</code></pre>
                        </li>
                        <li class="list-group-item">One or more of these commands should respond with a version. If Python is not installed or updated, try the following.
                        </li>
                        <li class="list-group-item"><strong>UBUNTU</strong><br>
                            Open a terminal and run the following commands.
                            <pre class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><code
                                        class="language-bash">sudo apt-get update</code></pre>
                            <pre class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><code
                                        class="language-bash">sudo apt-get install python3.6</code></pre>
                        </li>
                        <li class="list-group-item"><strong>CENTOS</strong><br>
                            Open a terminal and run the following command.
                            <pre class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><code
                                        class="language-bash">sudo yum install python36u</code></pre>
                        </li>
                        <li class="list-group-item"><strong>FEDORA</strong><br>
                            Open a terminal and run the following command.
                            <pre class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><code
                                        class="language-bash">sudo dnf install python36</code></pre>
                        </li>
                        <li class="list-group-item">
                            If you are using other Linux operating systems, visit <a href="https://realpython.com/installing-python/#linux">here</a> for detailed instructions.
                        </li>
                    </ul>
                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s" data-wow-duration="500ms">
                        Source
                    </h3>
                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">

                        <a href="https://realpython.com/installing-python">www.realpython.com</a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>


<!-- Template Javascript Files
================================================== -->
<!-- jquery -->
<script src="plugins/jQurey/jquery.min.js"></script>
<!-- Form Validation -->
<script src="plugins/form-validation/jquery.form.js"></script>
<script src="plugins/form-validation/jquery.validate.min.js"></script>
<!-- owl carouserl js -->
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- bootstrap js -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- wow js -->
<script src="plugins/wow-js/wow.min.js"></script>
<!-- slider js -->
<script src="plugins/slider/slider.js"></script>
<!-- Fancybox -->
<script src="plugins/facncybox/jquery.fancybox.js"></script>
<!-- template main js -->
<script src="js/main.js"></script>
</body>
</html>