<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>WikiPython - Sample programs</title>
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
                    <h2>Sample programs</h2>
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
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                        Hello World
                    </h3>
                    <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                        Program
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-python">print("Hello World!")</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Run
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">python hello.py</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Output
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-python">Hello World!</code></pre>
                    </p>

                    <!--
                    ==================================================
                        uniqueNumbers.py
                    ================================================== -->
                    <h3 class="subtitle wow fadeInUp h3WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Unique numbers
                    </h3>
                    <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                        Program
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
<code class="language-python"># Find the unique numbers in a given list
def uniqueNumbers(list):
    unique_numbers = []
    back_list = []

    for i in range(0,len(list)):
        if list[i] in unique_numbers:
            val = list[i]
            del unique_numbers[unique_numbers.index(val)]
        else:
            if list[i] in back_list:
                continue
            back_list.append(list[i])
            unique_numbers.append(list[i])

    print(unique_numbers)
</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Run
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">python uniqueNumbers.py</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Output
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-python">Hello World!</code></pre>
                    </p>

                    <!--
==================================================
    slicer.py
================================================== -->

                    <h3 class="subtitle wow fadeInUp h3WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Slicer
                    </h3>
                    <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                        Program
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
<code class="language-python"># get user email address
email = input("What is your email address?: ").strip()

# slice out user name
username = email[:email.index("@")]

# slice domain name
domainName = email[email.index("@") + 1:]

# format message
output = "Your username is {} and your domain is {}".format(username, domainName)

# display output message
print(output)
</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Run
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">python slicer.py</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Output
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-python">Hello World!</code></pre>
                    </p>

                    <!--
==================================================
Dog.py
================================================== -->

                    <h3 class="subtitle wow fadeInUp h3WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Class example
                    </h3>
                    <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                        Program
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
<code class="language-python">class Dog:
    def __init__(self, breed, age, color):
        self.breed = breed
        self.age = age
        self.color = color
        self.status = "active"

    def bark(self):
        print("ruff")

    def play(self):
        self.status = "tired"

    def rest(self):
        self.status = "active"

# Testing the class

Bruce = Dog("labrador",5,"black")

print(Bruce.breed)
Bruce.rest()
print(Bruce.status)
</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Run
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">python Dog.py</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Output
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-python">Hello World!</code></pre>
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