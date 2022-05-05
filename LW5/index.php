<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
    <link rel="stylesheet"
          href="styles.css">
    <script async src="main.js"></script>
</head>
<body>



    <header class="header">
        <div class="logo">
            <p class="header__logo">Don't <span class = "header__logo rose">do</span> it</p>
        </div>
        <menu class="menu" >
            <li>What is it about?</li>
            <li class="menu-tag">Questions</li>
            <li class="menu-tag">Author</li>
        </menu>
        <button class="button header">
            <span class="button_text">Sign up for a course</span>
        </button>
    </header>


    <div class="intro__block">
        <div>
            <h1 class="h1__text"> Don't <span class="h1__text rose">do </span>it</h1>
            <div class="subtitle">Online course for creative people on how<br> to manage your time</div>
            <button class="button intro__block">
                <span class="button_text">Sign up for a course</span>
            </button>
        </div>
        <img class="intro__picture" src="images/man.png" alt="man lying">
    </div>


    <div class="benefits__blocks">
        <div class="benefits time">
            <img class="clock" src="images/Time.svg" alt="time">
            <p class="benefits__text1">For those who have too many<br>ideas and too little time</p>
        </div>
        <div class="benefits notebook">
            <img class="notebook" src="images/notebook.svg" alt="notebook">
            <p class="benefits__text2">The "to-do list" method, which<br>will allow you to keep up and implement</p>
        </div>
        <div class="benefits target">
            <img class="target" src="images/target.svg" alt="target">
            <p class="benefits__text3">The course will teach creative people<br>to focus</p>
        </div>
    </div>



    <div class="problems__blocks">
        <div class="problems__time-problem">
            <img class="finances" src="images/Finances.svg" alt="finances">
            <div>

                <p class="problems__title one">You won't make it</p>

                <p class="problems__text one">All creative people are united by one problem - the lack of time<br>to implement ideas. How to add hours to the day, we will consider in our course.</p>
            </div>
        </div>
        <div class="problems__deadline">
            <div>
                <p class="problems__title two">Deadline again</p>
                <p class="problems__text two">In a world where there are so many interesting things, when do you have time to live?</p>
            </div>
            <img class="mind" src="images/Mind%20Blowing.svg" alt="mind blowing photo">
        </div>
    </div>



    <div class="abilities_blocks">

        <p class="abilities__title">On the course you <span class="abilities__title rose">can</span></p>
        <div class="abilities one">
            <div class="abilities__block first">
                <img class="abilities__img" src="images/one%20finger.svg" alt="one finger">
                <p class="abilities__text">Know what to do and<br>what not to do.</p>
            </div>

            <div class="abilities__block second">
                <img class="abilities__img" src="images/two%20fingers.svg" alt="two fingers">
                <p class="abilities__text">Stop artificially limiting yourself.</p>
            </div>

            <div class="abilities__block third">
                <img class="abilities__img" src="images/three%20fingers.svg" alt="three fingers">
                <p class="abilities__text">Identify strengths and start<br>using the weak ones.</p>
            </div>
        </div>
        <div class="abilities two">
            <div class="abilities__block four">
                <img class="abilities__img" src="images/four%20fingers.svg" alt="four fingers">
                <p class="abilities__text">Learn how to achieve any goal in 3 clear steps.</p>
            </div>

            <div class="abilities__block five">
                <img class="abilities__img" src="images/five%20fingers.svg" alt="five fingers">
                <p class="abilities__text">Collaborate effectively with the right people.</p>
            </div>

            <div class="abilities__block six">
                <img class="abilities__img" src="images/three%20fingers2.svg" alt="three fingers">
                <p class="abilities__text">Optimize customer communication and meetings.</p>
            </div>
        </div>
    </div>



    <div class="popup__bg">
        <div class="popup">
            <img alt="close" src="images/close.svg" class="close-popup">
            <img class="form__image" src="images/Welcome.svg" alt="welcome">
            <p class="form__title">Sign up for a course</p>
            <form action="contact.php" method="post">
                <div class="elem-group">
                    <label for="name"></label>
                    <input type="text" id="name" name="visitor_name" placeholder="Your name" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="email"></label>
                    <input type="email" id="email" name="visitor_email" placeholder="Email" required>
                </div>
                <div class="elem-group">
                    <label for="activity-selection"></label>
                    <select style="opacity: 75%" id="activity-selection" name="activity"  required>
                        <option value="">Activity</option>
                        <option value="designer">Designer</option>
                        <option value="programmer">Programmer</option>
                        <option value="marketer">Marketer</option>
                    </select>
                </div>

                <div style="display: flex;">
                    <input class="form__checkbox" type="checkbox" id="subscribeNews" name="subscribe" value="newsletter">
                    <label class="form__checkbox-text" for="subscribeNews">I agree to receive information materials about the start of the course</label>
                </div>

                <button  class="form__button" type="submit">Sign up for a course</button>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p class="footer__logo">Don't <span class="footer__logo rose">do</span> it</p>
    </footer>
</body>
</html>