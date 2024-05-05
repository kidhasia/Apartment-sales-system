<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Seller</title>
    <link rel="stylesheet" href="../../styles/styles.css">
    <script src="../../../script/RegisterSeller.js" defer ></script>
</head>
<body>
<?php 
        include './head.php'; 
        include './header.php'; 
   
    ?>
    <div class="container-reg">
        <div class="header-reg">
            <h2>Seller Registration</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto asperiores optio architecto possimus quis molestias, quaerat dolores eligendi odit aperiam, necessitatibus, aut laborum cum nobis sequi consectetur quas incidunt nihil?</p>
        </div>
        <div class="row-reg">
            <div class="col-reg">
                 <img src="../../source/Reg-img.jpg" alt="Reg-img"> 
            </div>
            <div class="col-reg">
                <form action="../../config/seller-reg-controller.php" method="post">
                    <div class="input-row">
                        <div class="input-group">
                            <label >First name</label>
                            <input type="text" name= 'first-name' placeholder="Your first name" >
                        </div>
                        <div class="input-group">
                            <label >Last name</label>
                            <input type="text" name= 'last-name' placeholder="Your last name" >
                        </div>
                        <div class="input-group">
                            <label >Phone</label>
                            <input type="text" placeholder="Your Number" name="phoneNo">
                        </div>
                        <div class="input-group">
                            <label >E-mail</label>
                            <input type="email" placeholder="Your E-mail" name="eMail">
                        </div>
                        <div class="input-group">
                            <label >Password</label>
                            <input type="password" placeholder="Enter your password" name="passWord">
                        </div>
                        <div class="input-group">
                            <label >Re-Enter Password</label>
                            <input type="password" placeholder="Re-enter password"  name="passWord2">
                        </div>
                        <div class="input-group">
                            <label>File</label>
                            <input type="file" name="ProPic" accept=".jpg">
                        </div>
                        
                    </div>
                    <button id="btn-1" type="submit" >Register</button>
                </form>
            </div>
        </div>

    </div>
   
</body>
</html>