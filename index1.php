<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nitin_protfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
 <!--********************************** header / nav bar ******************************** -->
    <div class="header_box">
     <div class="box1"><h2 class="name_1">NITIN LOHUMI </h2>
       <span class="btn_box"><h3 class="nav_top">Let us <button class="btn"><a style="color:blue;" href="index2.php">Chat</a></button></h3></span>
        </div> 
        <div class="navbar">
            <p><a href="#home">HOME</a></p>
            <p><a href="#about">ABOUT</a></p>
            <p><a href="#contact">CONTACTS</a></p>
        </div>
    </div>
 <!--******************************************************************************** -->
 <div class="home_page" id="home" >
    <h1 class="heading_line">hey ! This is <span class="name">nitin lohumi</span>
        <br> I am a fullStack doveloper.
        <br>
<span class="wlcom">welcome to my webpage</span>
          </h1>
 </div>   
 <!-- ******************************about********************************************** -->
    <div class="about_page" id="about">
        <h2 id="about_heading">ABOUT</h2>
        <div class="artical">
            <p>
              hey !  I am Nitin Lohumi. <br>
I am a Fullstack Developer .  I am particularly interested in the dynamic nature of web development.
 i  learned exploring programming languages like - PHP, JavaScript, and Python, as well as frameworks such as AngularJS and ReactJS, node Js, express js. 
I am also familiar with front-end development tools like AJAX, CSS frameworks, and JavaScript libraries.
 basically i have learned - 
 front-end : Javascript , ReactJs, AngularJs , Vue js, JQuery .
 back-end : express, nodeJs, PHP , Python.
 Database - mongodb, SQL.
Version Control Systems - GIT 
            </p>
           <div class="image_container">
             <a href="#contact">
                 <img class="image" src="IMG_20200615_164210.jpg" alt="nitin_image">
             </a>
          </div> 
        </div>
        <h2 class="table_heading">Here bord result and marks</h2>
     <table>
            <tr>
                <th colspan="5"><h3 id="clg_mark">Bords marks</h3></th>
            </tr> 
            <tr>
                <th>class</th>
                <th>marks</th>
                <th>total</th>
                <th>percentage</th>
                <th>grade</th>
            </tr>
            <tr>
                <td>10 <sup>th</sup></td>
                <td>378</td>
                <td>500</td>
                <td>76.8%</td>
                <td>A</td>
            </tr>
            <tr>
                <td>12 <sup>th</sup></td>
                <td>375</td>
                <td>500</td>
                <td>76%</td>
                <td>A</td>
            </tr>
            

        </table>
 <h2 class="table_heading">Here my collage marks and dgree.</h2>

        <table>
            <tr>
                <th colspan="5"><h3 id="clg_mark">collage marks</h3></th>
            </tr>
            
            <tr>
                <th>course</th>
                <th>marks</th>
                <th>total</th>
                <th>percentage</th>
                <th>grade</th>
            </tr>
            <tr>
                <td>BCA</td>
                <td>2100</td>
                <td>2500</td>
                <td>74.8%</td>
                <td>A</td>
            </tr>
            <tr>
                <td>MCA</td>
                <td>appering</td>
                <td>appering</td>
                <td>appering</td>
                <td>appering</td>
            </tr>

            <tr>
                <th colspan="3" style="color:rgb(255, 4, 129)">Resume</th>
                <td colspan="2"><a href="#">download Pdf</a></td>
            </tr>     
        </table>
    </div>
    <!-- *****************************contact******************************************* -->
    <div class="contact" id="contact">  
    <h1 class="contact_heading">CONTACT</h1>
      <div class="contact_page">
        <div>
            <h1 class="contact_heading"> <i class="fa-regular fa-address-card"></i> my portfolio</h1>
            <p class="contact_para">thanks for keep your eyes here! <i class="fa-regular fa-face-smile-beam" style="color:white;"></i></p>
        </div>

        <div>
            <h1 class="contact_heading"> Keep conected</h1>
                <p class="contact_para" style="letter-spacing: 0px;">
                    <i class="fa-solid fa-phone-flip"></i> phone-number : <a href="tel:+7417696780">7417696780
                   </a></p>

                <p class="contact_para"><i class="fa-brands fa-whatsapp"></i>  whatsapp : <a href="#"> 7417696780
                </a></p>

                <p class="contact_para"  style="letter-spacing: 2.4px;"><i class="fa-brands fa-instagram"></i> Instagram : <a href="#"> lohumi_jii
                </a></p>

                <p class="contact_para"><i class="fa-brands fa-telegram"></i> telegram : <a href="#"> Nitin lohumi
                </a></p>


        </div>

        <div class="feedback">
                    <h1 class="contact_heading">send feedback</h1>
                    <textarea name="feedback" id="text" cols="20" rows="2" style="font-size: 1.5rem; margin-right:5px; outline: none;"></textarea> 
                    
                    <input type="submit" value="Send" style="float:right; font-size:1.5rem; margin-right:5px; margin-top:20px; margin-bottom: 2rem; padding:5px  30px;">
          </div>  

      </div>
      <hr>
      <h1 style="padding-bottom:20px; margin-bottom:20px;color:rgb(248, 43, 43);"><i class="fa-regular fa-copyright"></i>copyright - Nitin Lohumi</h1>
 </div>
   
</body>
<script src="script.js"></script> 
</html>