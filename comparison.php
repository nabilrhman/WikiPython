<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>WikiPython - Comparison</title>
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
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Comparison</h2>
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
                <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s" data-wow-duration="500ms">
                    How does Python compare to Java?</h3>
            </div>

            <div class="col-md-6">
                <div class="block">

                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        Python and Java look similar and share many attributes, but also have their differences. Both
                        are also very popular beginner languages, used at the the majority of the U.S.’s top schools.
                        According to Philip Guo, an assistant professor of UC San Diego, of the top 39 U.S. computer
                        science departments, 27 of them use Python as an introductory course and 22 use Java, with the
                        next closest contender being matlab at a mere 8. Some schools also use a hybrid approach,
                        teaching Python as a 0 level course, and then Java as the level 1 course.
                    </p>

                </div>
            </div>

            <div class="col-md-6 wow fadeInRight" data-wow-delay=".3s">
                <img src="images/comparison/chart.png" alt="" class="img-responsive">
            </div>

        </div>

        <div class="row">

            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s">
                <img src="images/comparison/java-python.jpg" alt="" class="img-responsive">
            </div>

            <div class="col-md-6">

                <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s" data-wow-duration="500ms">
                    Similarities</h3>

                <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                    Both Java and Python are object oriented programming. As shown above, both are easy to learn
                    programming languages, but they are also scalable to large size programs. They also both contain
                    deep standard libraries. A person that knows Java or Python, should have an easy time reading
                    the others object class with only a small lesson in syntax. They also both support cross
                    platform, with both languages compiling to bytecode that run on virtual machines. With that
                    being said, they also contain many differences.
                </p>

            </div>
        </div>

        <div class="row">


            <div class="col-md-12">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s"
                        data-wow-duration="500ms">
                        Differences</h3>
                </div>
            </div>

            <div class="col-md-6">
                <div class="block">


                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        The difference most users would probably first spot is that Python decides to use
                        no curly brackets, instead showing blocks of code through the use of indentation. This
                        helps support Pythons’ idea of well spaced, readable code. Another difference to note is
                        that while Java and Python both compile to bytecode to run on virtual machines, Python
                        compiles during runtime, and Java compiles before with javac. Java is statically typed
                        while Python is dynamically typed allowing data types to change throughout the
                        program. This means that Python users don’t need to specify their data types, and can
                        instead let the language dynamically decide. This allows users to quickly implement
                        ideas with a greater flexibility than Java, but does pose some downsides.
                    </p>

                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        When converting data type automatically it makes the code harder to read, because instead of the
                        variables data type being stated during initialization users have to reference the type of data
                        the variable currently has. Dynamic typing also can’t allow the compiler find errors, and the
                        program will have to wait to catch them during runtime. Some people refer to Pythons typing as
                        Duck Typing, with the saying "If it walks like a duck and it quacks like a duck, then it must be
                        a duck." This allows different objects to be passed in through the same function arguments
                        assuming the object has interface support. An example can be seen in the given program.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="block">

                    <pre class="wow fadeInRight" data-wow-delay=".5s" data-wow-duration="500ms">
<code class="language-python">class Duck:
	def fly(self):
		print("Duck flying")

class Airplane:
	def fly(self):
		print("Airplane flying")

class Whale:
	def swim(self):
		print("Whale swimming")

def lift_off(entity):
	entity.fly()

duck = Duck()
airplane = Airplane()
whale = Whale()

lift_off(duck) # Prints 'Duck flying'
lift_off(airplane) # Prints 'Airplane flying'
lift_off(whale) # Throws the error 'Whale' object has no attribute 'fly'
</code></pre>
                </div>
            </div>


        </div>

        <div class="row">

            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s">
                <img style="margin-top: 50px !important;" src="images/comparison/js-python.jpg" alt=""
                     class="img-responsive">
            </div>

            <div class="col-md-6">
                <div class="block">


                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s"
                        data-wow-duration="500ms">
                        Adding Javascript to the mix</h3>

                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        Python, Java and Javascript are all object-oriented, lexically scoped languages. Unlike Java,
                        Python and Javascript are both interpreted scripting languages with relatively simple syntax.
                        Also unlike Java they are both commonly used for web development, allowing the creation of
                        dynamic web pages. They also both support  functional and imperative programming, but Python can
                        also be procedural. Still, they share many differences. 
                    </p>

                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        Python is strongly typed Javascript is weakly typed, allowing the language to use one type of
                        data as if it is a different type. Not unlike static and dynamic typing, the weak typing of
                        Javascript allows more flexibility, but at the greater risk of errors. Python also contains
                        more libraries than Javascript, including examples such as machine learning, scientific
                        computing and data analytics. Python has no way to inherit from instances, whereas JavaScript
                        does. Python also relies heavily on assignments  containing no difference between variable and
                        assignment, whereas JavaScript doesn’t relay.
                    </p>

                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        In general Python is said to be a better-designed and easier to learn language,  which is easier
                        to maintain than JavaScript. Python is generally used on server side  programming or backend,
                        while JavaScript can be used to run frontend. JavaScript also  excels at mobile-development, and
                        runs faster when compared to Python.
                    </p>

                </div>
            </div>


        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s"
                        data-wow-duration="500ms">
                        Conclusion</h3>

                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        When it comes to programming, languages are almost never inherently better  than one or another.
                        Instead languages can be seen as using different tools to approach a problem. Python is an
                        ever-rising language shining in the fields of big data and AI, and  is often used as a glue to
                        combine projects using multiple languages. Java is the most  used language in big enterprise
                        producing reliable programs for decades, and isn’t  going anywhere soon. JavaScript, the first
                        language to ever run in a web browser, still holds a strong grip on web-development today.
                        While all three languages may be able to implement the same things, it may be a good idea to
                        learn and use the strength of each language depending on the purpose of the program.
                    </p>


                </div>
            </div>

            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s"
                        data-wow-duration="500ms">
                        Sources</h3>

                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">

                        <a href="https://cacm.acm.org/blogs/blog-cacm/176450-python-is-now-the-most-popular-introductory-teaching-language-at-top-u-s-universities/fulltext">cacm.acm.org</a><br>
                        <a href="https://www.activestate.com/blog/2016/01/python-vs-java-duck-typing-parsing-whitespace-and-other-cool-differences">www.activestate.com</a><br>
                        <a href="https://thenewstack.io/popularity-python-java-world">www.thenewstack.io</a><br>
                        <a href="https://hackernoon.com/javascript-vs-python-in-2017-d31efbb641b4">www.hackernoon.com</a><br>
                        <a href="https://intersog.com/blog/which-language-has-best-chance-of-survival-python-java-or-javascript">www.intersog.com</a><br>
                        <a href="https://www.educba.com/python-vs-javascript">www.educba.com</a><br>
                        <a href="https://en.wikipedia.org/wiki/Scripting_language">en.wikipedia.org/wiki/Scripting_language</a><br>
                        <a href="https://en.wikipedia.org/wiki/Strong_and_weak_typing">en.wikipedia.org/wiki/Strong_and_weak_typing</a><br>

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