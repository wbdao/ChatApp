<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php include_once "header.php" ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your Email" required>
                </div>
                <div class="field input">
                    <label>password</label>
                    <input type="password" name="password" placeholder="Enter New Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="img" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue To Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="./login.php">Login now</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js?v=<?php echo time();?>"></script>
    <script src="js/signup.js?v=<?php echo time();?>"></script>

</body>

</html>