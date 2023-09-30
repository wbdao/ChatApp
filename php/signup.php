<?php
    session_start();
    include_once "config.php";
    $fname=mysqli_real_escape_string($conn, $_POST['fname']);
    $lname=mysqli_real_escape_string($conn, $_POST['lname']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $password=mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // check email validation
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            // check that email already exist in the datebase or not
            $sql=mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0 ){
                echo"$email - This email already exist!";
            }else{
                // check user upload file or not
                if(isset($_FILES['img'])){ // if file is uploaded
                    $img_name=$_FILES['img']['name'];
                    $tmp_name = $_FILES["img"]["tmp_name"];
                    // explode image and get the last extention like jpg png
                    $img_explode = explode('.', $img_name);
                    $img_ext=end($img_explode);
                    $extention=['png','jpeg','jpg'];
                    if(in_array($img_ext, $extention) === true){
                        $time=time();

                        $new_img_name=$time.$img_name;
                        $uploadImage= move_uploaded_file($tmp_name, "../image/".$new_img_name);
                        if($uploadImage){
                            $status="Active now";
                            $rondom_id=rand(time(), 1000000);
                            
                            // insert all user data inside table
                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img , status) VALUES ({$rondom_id},'{$fname}','{$lname}', '{$email}', '{$password}', '$new_img_name', '{$status}')");
                            if($sql2){
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email ='{$email}'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row =mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id']= $row['unique_id'];

                                    echo"success";
                                }
                            }else{
                                echo "some thing went wrong!";
                            }
                        }
                    }else{
                    echo "please select an image file - png ,jpeg, jpg!";
                    }
                }else{
                    echo "please select an image file!";
                }
            }
        }else{
            echo"$email - this is not a vaild email";
        }
    }else{
        echo"All input field are required";
    }
?>