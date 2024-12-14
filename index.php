<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="main">
        
    <div class="form">
          <h2>Send Us a Message!</h2>

          <form id="form" method="POST" >
            <div class="name">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="name" id="name" placeholder="Enter Name"> 
        </div>
        <div class="email">
            <i class="fa-solid fa-envelope"></i>
        
            <input type="email" name="email" id="email" placeholder="Enter Email">
        </div>
        <div class="phone">
            <i class="fa-solid fa-phone"></i>
        
            <input type="tel" name="phone" id="phone" placeholder="Enter Phone">
        </div>
        <div class="website">
            <i class="fa-solid fa-link"></i>
        
            <input type="text" name="website" id="website" placeholder="Enter Website Url">
        </div>
        <div class="message">
            <i class="fa-solid fa-message"></i>
            <textarea name="message" id="message" cols="20" rows="5" placeholder="Enter Message"></textarea>
        </div>
            <div class="button">
                <div class="send">
                    <i class="fa-solid fa-paper-plane"></i>
                <button type="submit" name="submit" id="submit">Send Message</button>
            </div>
                <span>Sending Message!</span>
            </div>
          </form>
        
    </div>
</div>
    
</body>
<script src="script.js"></script>
</html>