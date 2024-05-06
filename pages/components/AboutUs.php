<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../../styles/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src= "../../script/AboutUs.js" ></script>
    <title>Contact Us</title>
</head>
<body>
    <?php 
        include './head.php'; 
        include './header.php'; 
        
    ?>
    <div class="container-head">
        <h1>Contact Us</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, repellat consequuntur! <br>Optio perspiciatis veritatis sunt repellendus! Libero vitae autem debitis in, perspiciatis soluta amet deleniti commodi expedita repudiandae delectus quaerat.</p>
    </div>
    <div class="contact-box">
        <div class="contact-left">
            <h3>Send your request</h3>
            <form action="../../config/message-controller.php" method="post">
                <div class="input-row">
                    <div class="input-group">
                        <label >Name</label>
                        <input type="text" placeholder="Your first name" >
                    </div>
                    <div class="input-group">
                        <label >Phone</label>
                        <input type="text" placeholder="Your Number">
                    </div>
                    <div class="input-group">
                        <label >E-mail</label>
                        <input type="email" placeholder="Your E-mail">
                    </div>
                </div>
                <label > Message</label>
                <textarea rows="5" placeholder="Your message" name="user_message"></textarea>
                <button id="btn-1" type="submit" >Send</button>
            </form>
        </div>
        <idv class="contact-right">
            <h3>Reach Us</h3>
            <table>
                <tr>
                    <td>E-mail</td>
                    <td>contactus@example.com</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>077 405 3439</td>
                    
                    <td>Address</td>
                    <td>No. 42, Galle Road,
                        Mount Lavinia,
                        Western Province,
                        Sri Lanka</td>
                </tr>
            </table>
        </idv>

    </div>

   
</body>
</html>