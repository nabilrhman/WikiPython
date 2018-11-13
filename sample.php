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
        <div class="row" style="margin-bottom: 24px !important;">
            <div class="col-md-6">
                <a href="sample.php#basic"><button type="button" class="btn btn-primary btn-lg">BASIC</button></a>
                <a href="sample.php#advanced"><button type="button" class="btn btn-warning btn-lg">ADVANCED</button></a>
            </div>
        </div>

        <div class="row" id="basic">
            <div class="col-md-12">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s" data-wow-duration="500ms">
                        Hello World
                    </h3>
                    <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                        Program
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-python"># Print hello world to the console
print("Hello World!")</code></pre>
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
                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s" data-wow-duration="500ms">
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

# Testing
sample_list = [1,2,3,4,5,6,7,7]
sample_list_two = [44,55,66,77,44,55,66]
sample_list_three = [2,3,4,5,6,7,8,1,2,3,4,5,6,7,8,9]

print("The unique numbers in sample_list are " + ','.join(map(str, uniqueNumbers(sample_list))))
print("The unique numbers in sample_list_two are " + ','.join(map(str, uniqueNumbers(sample_list_two))))
print("The unique numbers in sample_list_three are " + ','.join(map(str, uniqueNumbers(sample_list_three))))
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
                                class="language-bash">The unique numbers in sample_list are 1,2,3,4,5,6
The unique numbers in sample_list_two are 77
The unique numbers in sample_list_three are 1,9</code></pre>
                    </p>

                    <!--
                   ==================================================
                       uniqueNumbers.py
                   ================================================== -->
                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s" data-wow-duration="500ms">
                        Fibonacci sequence
                    </h3>
                    <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                        Program
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
<code class="language-python"># Fibonacci sequence
# Return nth element in the fibonacci sequence
def fibonacci_seq(n):
    if n==0:
        return 0
    elif n==1:
        return 1
    else:
        return fibonacci_seq(n-1) + fibonacci_seq(n-2)

print('the 4th element in the fibonacci sequence is ' + str(fibonacci_seq(4)))
print('the 8th element in the fibonacci sequence is ' + str(fibonacci_seq(8)))
print('the 20th element in the fibonacci sequence is ' + str(fibonacci_seq(20)))
</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Run
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">python fibonacci.py</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Output
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">the 4th element in the fibonacci sequence is 3
the 8th element in the fibonacci sequence is 21
the 20th element in the fibonacci sequence is 6765</code></pre>
                    </p>

                    <!--
==================================================
    slicer.py
================================================== -->

                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s" data-wow-duration="500ms">
                        Slicer
                    </h3>
                    <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                        Program
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
<code class="language-python">def slicer():
    # Get user email address
    email = input("What is your email address?: ").strip()

    # Slice out user name
    username = email[:email.index("@")]

    # Slice domain name
    domainName = email[email.index("@") + 1:]

    # Format message
    output = "Your username is {} and your domain is {}".format(username, domainName)

    # Display output message
    print(output)

slicer()
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
                        Demo
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">What is your email address?: jamesbond@british-intelligence.com
Your username is jamesbond and your domain is british-intelligence.com</code></pre>
                    </p>

                    <!--
==================================================
Dog.py
================================================== -->

                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s" data-wow-duration="500ms">
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

print(Bruce.color)
print(Bruce.age)
print(Bruce.breed)
Bruce.play()
print(Bruce.status)
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
                                class="language-bash">black
5
labrador
tired
active</code></pre>
                    </p>

                    <!--
==================================================
calculator.py
================================================== -->

                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" id="advanced" data-wow-delay=".3s" data-wow-duration="500ms">
                        Calculator
                    </h3>
                    <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                        Program
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
<code class="language-python"># Calculator
# Performs simple arithmetic on values fed by the user

import math
import time

print('Starting calculator...')
time.sleep(1)

#calculator function
def calculator():
    first_number = int(input('please enter the first number: ').strip())
    first_choice = input('would you like to enter a second number? (y/n) ').strip()

    if(first_choice == 'y'):
        second_number = int(input('please enter the second number: ').strip())
        print('what kind of operation would you like to perform on these values? (type in a number) ')
        choice = int(input('[1]addition [2]subtraction [3]multiplication [4]division ').strip())

        if(choice) == 1:
            print(str(first_number) + '+' + str(second_number) + ' = ' + str(add(first_number,second_number)))
        elif choice == 2:
            print(str(first_number) + '-' + str(second_number) +
                  ' = ' + str(subtract(first_number, second_number)))
        elif choice == 3:
            print(str(first_number) + '*' + str(second_number) +
                  ' = ' + str(multiply(first_number, second_number)))
        elif choice == 4:
            print(str(first_number) + '/' + str(second_number) +
                  ' = ' + str(divide(first_number, second_number)))
    else:
        print("[1] to get the square root of " + str(first_number))
        print("[2] to get " + str(first_number) + " squared")
        option  = int(input("type 1 or 2 to continue ").strip())
        if(option == 1):
            print("square root of " + str(first_number) + " is " + str(sq_root(first_number)))
        elif(option == 2):
            print(str(first_number) + " squared is " + str(squared(first_number)))
    calculate_again()


def sq_root(number):
    sq_root_number = math.sqrt(number)
    return sq_root_number

def squared(number):
    return number**2

def add(x,y):
    return x+y

def subtract(x,y):
    return x-y

def multiply(x,y):
    return x*y

def divide(x,y):
    return x/y

def calculate_again():
    print('\n')
    option = input('would you like to keep using the calculator?(y/n) ').strip().lower()
    if option == 'y':
        calculator()
    else:
        pass

if __name__ == '__main__':
    calculator()
</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Run
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">python calculator.py</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Demo
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">Starting calculator...
please enter the first number: 2
would you like to enter a second number? (y/n) y
please enter the second number: 40
what kind of operation would you like to perform on these values? (type in a number)
[1]addition [2]subtraction [3]multiplication [4]division 3
2*40 = 80


would you like to keep using the calculator?(y/n) y
please enter the first number: 11
would you like to enter a second number? (y/n) n
[1] to get the square root of 11
[2] to get 11 squared
type 1 or 2 to continue 2
11 squared is 121


would you like to keep using the calculator?(y/n) y
please enter the first number: 50
would you like to enter a second number? (y/n) y
please enter the second number: 5
what kind of operation would you like to perform on these values? (type in a number)
[1]addition [2]subtraction [3]multiplication [4]division 4
50/5 = 10.0</code></pre>
                    </p>

                    <!--
==================================================
blackjack.py
================================================== -->

                    <h3 class="subtitle wow fadeInUp h3WithPaddingExtended" data-wow-delay=".3s" data-wow-duration="500ms">
                        Blackjack
                    </h3>
                    <h4 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">
                        Program
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
<code class="language-python"># Blackjack

import random
import os

# Initializing the deck
deck = [2,3,4,5,6,7,8,9,10,11,12,13,14]*4

higher_cards = ['J', 'Q', 'K']

#deal cards function
def deal(deck):
    hand = []
    for i in range(0,2):
        random.shuffle(deck)
        card = deck.pop()
        if card == 11:
            card = 'J'
        elif card == 12:
            card = 'Q'
        elif card == 13:
            card = 'K'
        elif card == 14:
            card = 'A'
        hand.append(card)
    return hand

# Returns the total of the hand
def hand_total(hand):
    total = 0
    for card in hand:
        if card in higher_cards:
            total += 10
        elif card == 'A':
            if total >= 11:
                total += 1
            else: total += 11
        else:
            total += card
    return total

# Adds one more card to the hand
def hit(hand):
    card = deck.pop()
    if card == 11:
        card = 'J'
    elif card == 12:
        card = 'Q'
    elif card == 13:
        card = 'K'
    else:
        card = 'A'
    hand.append(card)
    return hand

# Clears the terminal window depending on the OS
def clear():
    if os.name == 'nt':
        os.system('CLS')
    if os.name == 'posix':
        os.system('clear')

# Function displays the hands of the dealer and player
def print_results(dealerHand, playerHand):
    clear()
    print("The dealer has a" + str(dealerHand) + " for a total of " + str(hand_total(dealerHand)))
    print("You have a " + str(playerHand) + " for a total of " + str(hand_total(playerHand)))

# Restart game
def play_again():
    option = input("Would you like to play again? (Y/N): ").upper()
    if option == 'Y':
        global deck
        deck = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14] * 4
        game()
    else:
        print("Thanks for playing, see you!")
        exit()

# This function takes care of the case either dealer or player have blackjack
def blackjack(dealerHand, playerHand):
    if hand_total(playerHand) == 21:
        print_results(dealerHand, playerHand)
        print("Well done! You got a Blackjack!\n")
        play_again()
    elif hand_total(dealerHand) == 21:
        print_results(dealerHand, playerHand)
        print("Sorry, dealer got a blackjack... you lose\n")
        play_again()

# This function display the results according to the hands both the player and dealer have
def score(dealerHand, playerHand):
    if hand_total(playerHand) == 21:
        print_results(dealerHand, playerHand)
        print("Congratulations! You got a Blackjack!\n")
    elif hand_total(dealerHand) == 21:
        print_results(dealerHand, playerHand)
        print("Sorry, dealer got a blackjack... you lose\n")
    elif hand_total(playerHand) > 21:
        print_results(dealerHand, playerHand)
        print("Sorry. You busted. You lose.\n")
    elif hand_total(dealerHand) > 21:
        print_results(dealerHand, playerHand)
        print("Dealer busted. You win!\n")
    elif hand_total(playerHand) < hand_total(dealerHand):
        print_results(dealerHand, playerHand)
        print("Sorry. Your score isn't higher than the dealer. You lose.\n")
    elif hand_total(playerHand) > hand_total(dealerHand):
        print_results(dealerHand, playerHand)
        print("Congratulations. Your score is higher than the dealer. You win\n")
    elif hand_total(playerHand) == hand_total(dealerHand):
        print("It's a tie!")

# Run game function
def game():
    choice = 0
    clear()
    print("WELCOME TO BLACKJACK!\n")
    dealerHand = deal(deck)
    playerHand = deal(deck)
    while choice != "q":
        print("The dealer is showing a {}".format(dealerHand[0]))
        print("You have a " + str(playerHand) + " for a total of " + str(hand_total(playerHand)))
        blackjack(dealerHand, playerHand)
        choice = input("Do you want to [H]it, [S]tand, or [Q]uit: ").lower()
        clear()
        if choice == "h":
            hit(playerHand)
            while hand_total(dealerHand) < 17:
                hit(dealerHand)
            score(dealerHand, playerHand)
            play_again()
        elif choice == "s":
            while hand_total(dealerHand) < 17:
                hit(dealerHand)
            score(dealerHand, playerHand)
            play_again()
        elif choice == "q":
            print("Bye!")
            exit()

if __name__ == '__main__':
    game()
</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Run
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">python blackjack.py</code></pre>
                    </p>
                    <h4 class="subtitle wow fadeInUp h4WithPadding" data-wow-delay=".3s" data-wow-duration="500ms">
                        Demo
                    </h4>
                    <p>
                    <pre class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><code
                                class="language-bash">WELCOME TO BLACKJACK!

The dealer is showing a 4
You have a [7, 'K'] for a total of 17
Do you want to [H]it, [S]tand, or [Q]uit: s
The dealer has a[4, 5, 'A'] for a total of 20
You have a [7, 'K'] for a total of 17
Sorry. Your score isn't higher than the dealer. You lose.

Would you like to play again? (Y/N): y
WELCOME TO BLACKJACK!

The dealer is showing a 5
You have a [10, 4] for a total of 14
Do you want to [H]it, [S]tand, or [Q]uit: h
The dealer has a[5, 2, 'A'] for a total of 18
You have a [10, 4, 'A'] for a total of 15
Sorry. Your score isn't higher than the dealer. You lose.

Would you like to play again? (Y/N): y
WELCOME TO BLACKJACK!

The dealer is showing a 4
You have a [9, 'K'] for a total of 19
Do you want to [H]it, [S]tand, or [Q]uit: s
The dealer has a[4, 7, 'J'] for a total of 21
You have a [9, 'K'] for a total of 19
Sorry, dealer got a blackjack... you lose

Would you like to play again? (Y/N): y
WELCOME TO BLACKJACK!

The dealer is showing a Q
You have a ['A', 10] for a total of 21
The dealer has a['Q', 9] for a total of 19
You have a ['A', 10] for a total of 21
Well done! You got a Blackjack!</code></pre>
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