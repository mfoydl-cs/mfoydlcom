<html>

<head>
    <title>Mfoydl - CovidGoals</title>
    
    <link rel="stylesheet" href="/static/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <?php include("navbar.html"); ?>
    
    <header>
        <div class="header-top">
            <h1>My Blog</h1>
        </div>

    </header>
    <div class="content">
        <div class="post-con">
            <?php include("./posts/post3/post3card.html"); ?>
        </div>
        <div class="post-con">
            <?php include("./posts/post2/post2card.html"); ?>
        </div>
        <div class="post-con">
            <?php include("./posts/post1/post1card.html"); ?>
        </div> 
    </div>
    <footer>
        <!-- Badge Code - Do Not Change The Code -->
        <a class="hitCounter" href="https://visitorshitcounter.com/" target="_blank" title="Hit counter"
            data-name="b747809f26b97cc44e9472a042bd65d2|5|ip|1|#030462|#ffffff|large|s-hit">Hit Counter</a>
        <script>document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v=" + Date.now() + "'><\/script>");</script>
        <!-- Badge Code End Here -->
    </footer>
</body>

</html>