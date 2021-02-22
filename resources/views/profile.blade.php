<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Document</title>
    <script type="text/javascript">
        $(document).ready(function(){
            $('a').click(function(){
                // alert("i Am click");
                var selected = $(this);
                $('a').removeClass('active');
                $(selected).addClass('active');
            });
            var $a = $('.a'),
            $b = $('.b'),
            $c = $('.c'),
            $d = $('.d'),
            $home = $('.home'),
            $aboutus = $('.aboutus'),
            $gallery = $('.gallery'),
            $contactus = $('.contactus');

            $a.click(function(){
                $home.fadeIn();
                $aboutus.fadeOut();
                $gallery.fadeOut();
                $contactus.fadeOut();
            });
            $b.click(function(){
                $aboutus.fadeIn();
                $home.fadeOut();
                $gallery.fadeOut();
                $contactus.fadeOut();
            });
            $c.click(function(){
                $gallery.fadeIn();
                $home.fadeOut();
                $aboutus.fadeOut();
                $contactus.fadeOut();
            });
            $d.click(function(){
                $contactus.fadeIn();
                $home.fadeOut();
                $aboutus.fadeOut();
                $gallery.fadeOut();
            });
        });
    </script>
    <style>
        *{
    margin: 0;
    padding: 0;
}
html, body{
    width: 100%;
    height: 100%;
    font-size: 14px;
    font-weight: normal;
}
.background{
    width: 100%;
    height: 100%;
    background-image: url(images/3508559.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    overflow-y: auto;
}
.nav{
    width: 350px;
    height: auto;
    position: absolute;
    top: 20%;
    left: 0;
}
.nav a{
    text-decoration: none;
    font-size: 28px;
    font-family: verdana;
    font-weight: bold;
    height: 90px;
    margin: 5px 0;
    float: left;
    display: inline-block;
    background-color:black;
    color: white;
    line-height: 90px;
    text-align: center;
    transition: 300ms;
}
a.active, .nav a:hover{
    background-color:white;
    color:black;
    width: 100%;
}
.a{
    width: 95%;
}
.b{
    width: 85%;
}
.c{
    width: 80%;
}
.d{
    width: 90%;
}
.content{
    position: absolute;
    width: 930px;
    min-height: 500px;
    height: auto;
    /* background-color:red; */
    right: 0;
    top: 10%;
}
.home{
    position: absolute;
    right: 0;
    bottom: -50px;
    color: white;
    font-family: verdana;
}
.home h1{
    font-size: 65px;
    padding-right: 90px;
    border-bottom: 1px solid white;
    text-transform: uppercase;
}
.home h3{
    font-size: 28px;
    padding: 5px 0;
    opacity: 0.6;
}
.aboutus{
    position: absolute;
    right: 0;
    top: 10px;
    color: white;
    font-family: century gothic;
    padding: 0 60px;
    display: none;
}
.aboutus p{
    font-size: 18px;
    line-height: 28px;
    margin-bottom: 15px;
}
.gallery{
    position: absolute;
    right: 0;
    top: 10px;
    color: white;
    padding: 0 60px;
    display: none;
}
.gallery .image{
    width: 31%;
    margin: 1%;
    float: left;

}
.image img{
    width: 100%;
    transition: all ease 0.5s;
    -webkit-transition: all ease 0.5s;
    transform: scale(1);
    -webkit-transform: scale(1);
    border-radius: 5px;
}
.image img:hover{
    transform: scale(1.2);
    -webkit-transform: scale(1.2);
}
.contactus{
    position: absolute;
    right: 0;
    top: 10px;
    color: white;
    padding: 0 60px;
    display: none;
}
.inputtext{
    width: 55%;
    height: 65px;
    border: 3px solid black;
    color: white;
    background-color: rgba(0,0,0,0.7);
    font-size: 20px;
    padding: 0 10px;
    float: left;
    margin-bottom: 15px;
}
.inputmessages{
    width: 55%;
    height: 135px;
    border: 3px solid black;
    color: white;
    background-color: rgba(0,0,0,0.7);
    font-size: 20px;
    padding: 0 10px;
    float: left;
}
.submitbutton{
    width: 160px;
    height: 65px;
    font-family: arial;
    background-color:white;
    color:black;
    font-size: 28px;
    border:none;
    font-weight: bold;
    float: left;
    clear:both;
    margin-top: 25px;
}
    </style>
</head>
<body>
    <div class="background">
        <div class="nav">
            <a class="a active" href="#">HOME</a>
            <a class="b" href="#">ABOUT ME</a>
            <a class="c" href="#">GALLERY</a>
            <a class="d" href="#">CONTACT US</a>
        </div>
        <div class="content">
            <div class="home">
                <h1>I am Tokhtarbay Ali</h1>
                <h3>Student of Suleyman Demirel University</h3>
            </div>

            <div class="aboutus">
                <p><b>Hello Friends,</b><br>
                    My name is Ali. My surname is Tokhtarbay. I am 19. I was born in 2001 in Kapchagai. I live in the town of Nur-Sultan.  I am a student. I go to university SDU. I spend a lot of time on it reading books, doing tests, etc.<br>
                    And of course, I like music! I'm fond of music of the 60-s, like the Beatles, the Rolling Stones, and Elvis Presley. The songs of the Beatles give me a lot of delight and pleasure.<br>
                    Sometimes I play different sport games for health and pleasure. I usually play such games as volleyball, basketball, tennis, and sometimes football. I  like fresh air and exercise. I wish I had more time for doing sports. I don't have much time to watch TV but sometimes I spend an hour or two watching an interesting film or a news program.
                </p>
                <p>I have a wide circle of interests. I'm very sociable, so I get on very well with people. I have many friends, most of them are my classmates. 
                    And finally, the things I hope to achieve in my life are: to have a very successful career, after finishing university I will try to enter a good job, to build the house of my dreams, and to find someone in my life to share all that with.</p>
            </div>
            <div class="gallery">
                <div class="image">
                    <img src="{{asset('images/photo_2021-02-22_10-33-29.jpg')}}" />
                </div>
                <div class="image">
                    <img src="{{asset('images/photo_2021-02-22_04-03-29.jpg')}} " />
                </div>
                <div class="image">
                    <img src="{{asset('images/photo_2021-02-22_04-03-24.jpg')}}" />
                </div>
                <div class="image">
                    <img src="{{asset('images/photo_2021-02-22_04-03-09.jpg')}}" />
                </div>
                <div class="image">
                    <img src="{{asset('images/photo_2021-02-22_10-33-33.jpg')}}" />
                </div>
                <div class="image">
                    <img src="{{asset('images/photo_2021-02-22_10-33-37.jpg')}}" />
                </div>
            </div>
            <div class="contactus">
                <div class="contactform">
                    <form action="#" method="post">
                        <input type="text" name="" class="inputtext" value="First Name">
                        <input type="text" name="" class="inputtext" value="Last Name">
                        <input type="text" name="" class="inputtext" value="Your Email">
                        <textarea cols="4" rows="6" class="inputmessages">Your Messages...!!</textarea>
                        <input type="button" name="" class="submitbutton" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>