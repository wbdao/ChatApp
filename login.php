<?php include_once "header.php" ?>


<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your Email">
                </div>
                <div class="field input">
                    <label>password</label>
                    <input type="password" name="password" placeholder="Enter New Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue To Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="./index.php">Signup now</a></div>
        </section>
    </div>


    <script src="js/pass-show-hide.js?v=<?php echo time();?>"></script>
    <script src="js/login.js?v=<?php echo time();?>"></script>

</body>
</html>