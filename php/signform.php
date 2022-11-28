<?php
    //sign in form

    // بنعرف الداتا بيز
    $dbhost= "localhost";
    $dbuser="root";// اسم اليوزر 
    $dbpass="";
    $dp="login";// اسم الداتا بيز 

  
    
    // بنعمل الكونكشن بنبعت الاربع حاجات اللي عرفنها في الداتا بيز فوق 
    $conn=new mysqli($dbhost,$dbuser,$dbpass,$dp);  

  
    // بندخل نشوف ف الكونكشين في ايرور ولو فيه بنطبع ايرور
    if($conn -> connect_error) {
        echo"error";
    }

    // بناخد الزرار من الفورم 
    //post بتخفي الداتا من ال url
    if(isset($_POST['submit']))
    {  
        $username= $_POST['username'];
        $password= $_POST['password'];


        // الجمله اللي هتتنفذ جوا الداتا بيز 
        $sql="SELECT * FROM `login` WHERE username = '".$username."' AND password = '".$password."'";  
        $result=mysqli_query($conn,$sql); // هيتعبت الداتا اللي موجوده
        $row = mysqli_fetch_array($result); //هيرجع الرو من الداتا اللي دخلناها 

        // هيتشك القيم بتسا,ى بعض ,لا 
        // هنشوف لو القيم بالفعل موجوده ف الداتا بيز هيدخل ع الصفحه الرئسيه
         if($row['username'] == $username && $row['password'] == $password)
         {
             header('location:../Agency.HTML');
        }
         else{
            header('location:../SignForms.html');
        }

        exit(); // break
    }

    // لو كان الزرار اللي داس عليه انسرت هيدخل
    if(isset($_POST['Insert']))
    {  
        $username= $_POST['username'];
        $password= $_POST['password'];
        $email= $_POST['email'];
        $mobile= $_POST['mobile'];

        // هنتشك ع وجود داتا اصلا ولا لاء دخلت بعد م ادوس ع الانسرت 
        if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['mobile'])){
            
            $sql_insert="insert into `login`(username,password,email,mobile) 
            VALUES ('$username', '$password','$email','$mobile')"; // الجمله اللي هتتنفذ جوا الداتا بيز 

             // بناخد القيم من الكونكشن والداتا بيز 
            $result = mysqli_query($conn,$sql_insert);


                if($result)
                {
                    echo"Form submitted!";
                    header('location:../SignForms.HTML');// لو الرسلت صح هيروح للصفحه دي 
                }
                else
                {
                    
                    echo"Form not submitted";// لو غلط هنطبع الجمله دي 
                }
            }
            else
            {
                echo"all fields required";
            }
            exit();
    }

    // اما ادوس ع زرار الابديت ف الفورم الاوله 
    if(isset($_POST['updatewin']))
    {
        $username1= $_POST['username'];
        $password1= $_POST['password'];

        // الجمله اللي هتتنفذ جوا الداتا بيز 
        $sql="SELECT * FROM `login` WHERE username = '".$username."' AND password = '".$password."'";  

        $result=mysqli_query($conn,$sql);   // هيتعبت الداتا اللي موجوده
        $row = mysqli_fetch_array($result); //هيرجع الرو من الداتا اللي دخلناها

        // هيتشك القيم بتسا,ى بعض ,لا 
        // هنشوف لو القيم بالفعل موجوده ف الداتا بيز هيدخل ع الصفحه الرئسيه
         if($row['username'] == $username && $row['password'] == $password)
         {
            
            header('Location: ../UpdateForm.html'); // هيعمل ابديت 
         }
         else{
            header('Location: ../EditForm.html'); // هيخليه ف نفس الصفحه 
        }
        exit();
         }

   /* // زرار الكنسل ف الوندو الصغيره  
    if(isset($_POST['undo']))
    {
        return false;
        exit();
    }*/
    
    //اما ندوس ع زرار الديليت     
    if(isset($_POST['delete']))
    {
        //$username3= $_POST['username'];
        $password3= $_POST['password'];

        // بنشوف اللي دخل ف الداتا بيز ولا لاء
        $sql_del = "DELETE FROM `login` WHERE `login`.password = $password3 ";
        $query = mysqli_query($conn, $sql_del); // بناخد القيم 

        // بنتشك القيم اللي موجوده ف الداتا بيز 
        if($query)
        {
            header('location:../SignForms.html'); // لو هي موجوده امسح 
        }else{
            echo" wrong";
        }
        exit();
    }

    // اما بدوس ع زرار الرجوع
    if(isset($_POST['backToEdite'])){
        header('location:../EditForm.html');
        exit();
    }

  
    // اما يدوس ع زرار الابديت 
    if(isset($_POST['submitupdate']))
    {
        $username2= $_POST['username'];
        $old2= $_POST['oldpass'];
        $password2= $_POST['password']; //new 
        $email2= $_POST['email'];

        // هيدخل للداتا بيز يعمل ابديت للقيم بمعني انه هيشوف القيمه القديمه اللي دخلت ويبدلها بالجديده 
        $sql_update = "UPDATE `login` SET `username` = '$username2', `password` ='$password2', `email`='$email2'WHERE `login`.password = '$old2';";
        
        //بناخد القيم اللي ف الابديت وف الكونشين   
        $result_update = mysqli_query($conn,$sql_update);

        // بنتشك ع اللي اخدناه وبنشوفه هوهو ولا لاء
        if($result_update)
        {
            header('location:../SignForms.html'); //هيدخل هنا ع الفورم اللي هعدل فيها 
            echo "Data Update...";
        }
        else
        {
            echo "Data not update..";
        }
        mysqli_close($conn); //close connection
        exit();
    }

    
    
    ?>