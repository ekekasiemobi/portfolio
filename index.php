<?php 
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $ema = "";
    $mes = "from . $message";

        $receiver = "kasiemobijanfrancis@gmail.com" ;
        $subject = $subject;
        $message = $name . '<br>' . $mes ;
        $header = $ema;
        $header .= "MIME-Version:1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        

    $test =  mail($receiver, $subject, $message, $header);
    if($test== true){
        ?>
            <script>
            function myFunction() {
            alert("Email sent Successfully");
            }
            </script>

        <?php
            
            header("Location:index.php");
    }else{
        echo 'incorrect email address';
    };
     
 };
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
    <link rel="icon" href="img/IMG-20220903-WA0027-removebg-preview (1).png">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a278e9af44.js" crossorigin="anonymous"></script>
    
    <title>kasiemobi porfolio</title>
</head>

<body>

<style>
    .parent {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}
</style>
    
   <div style="width: 100%;height: 100%; position: fixed;background-color: #0A192F;z-index: 99;" id="load_large" class="hide-on-med-and-down">
        <div style="position: fixed;top: 40%;margin-left: 45%;" class="loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
   </div>
   <div style="width: 100%;height: 100%; position: fixed;background-color: #0A192F;z-index: 99;" id="load_med" class="hide-on-large-only hide-on-small-only">
        <div style="position: fixed;top: 45%;margin-left: 45%;" class="loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
   </div>
   <div style="width: 100%;height: 100%; position: fixed;background-color: #0A192F;z-index: 99;" id="load_mobile"class="hide-on-med-and-up">
        <div style="position: fixed;top: 45%;margin-left: 35%;" class="loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
   </div>

   <script>
        function stop(){
       var load =  document.getElementById('load_large');    
       load.style.display='none';
        }
        function run(){
        setTimeout(stop,0000);
        }
        run();


        function stop1(){  
       var load =  document.getElementById('load_med');  
       load.style.display='none';
        }
        function run1(){
        setTimeout(stop1,0000);
        }
        run1();


        function stop2(){ 
       var load =  document.getElementById('load_mobile');  
       load.style.display='none';
        }
        function run2(){
        setTimeout(stop2,0000);
        }
        run2();
   </script>

    <section class="scrollspy"id="top">
        <nav style="background-color:#0A192F;position: fixed;z-index: 9;">
            <div class="container">
                <a style="color:#CCD6F6;" href="#top">KASIEMOBI</a>
                <a href="#mobile-menu" class="sidenav-trigger">
                    <i style="color: #64FFDA;font-size:xx-large" class="material-icons">menu</i>
                </a>
                <div class="right hide-on-med-and-down">
                    
                    <ul>
                        <li><a style="color:#CCD6F6;font-size:large;" href="#home">Home</a></li>
                        <li><a  style="color:#CCD6F6;font-size:large;" href="#about">About</a></li>
                        <li><a  style="color:#CCD6F6;font-size:large;" href="#skills">Skills</a></li>
                        
                        <li><a  style="color:#CCD6F6;font-size:large;" href="#portfolio">projects</a></li>
                        <li><a  style="color:#CCD6F6;font-size:large;" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=" hide-on-large-only">
            
            <ul style="background-color: #112240;" class="sidenav" id="mobile-menu">
                <li><a style="color:#CCD6F6;font-size:large;"  href="#home">Home</a></li>
                <li><a  style="color:#CCD6F6;font-size:large;" href="#about1">About</a></li>
                <li><a  style="color:#CCD6F6;font-size:large;" href="#skills1">Skills</a></li>
               
                <li><a  style="color:#CCD6F6;font-size:large;" href="#portfolio">projects</a></li>
                <li><a  style="color:#CCD6F6;font-size:large;" href="#contact1">Contact</a></li>
            </ul>
        </div>   
    </section><br><br>
    
    <div class="scrollspy"id="home">
        <section style="background-color:#0A192F" >
            <div class="container">
                 <div class="row">
                     <div class="col s12 m12 l12">
                         <div style="margin-top:10%">
                             <h6 style="color: #CCD6F6">Hi, My Name Is</h6>
                             <h1 style="color: #CCD6F6;" class="hide-on-small-only">KASIEMOBI EKE <br> a creative Frontend Developer</h1>
                             <h4 style="color: #CCD6F6;" class="hide-on-med-and-up">KASIEMOBI EKE <br> a creative Frontend Developer</h4>
                             <p style="color: white; font-size:large;">I build things for the web. i like to craft solid and <br> scalable frontend products with great user experiences</p>
                             <div class="row">
                                 <div class="col s12 m6 l6">
                                   
                                    <button> <a href="https://drive.google.com/file/d/1JKP_vsPQMhdvcRecMeH5fa3LJIQx0XCE/view?usp=drivesdk" target="_blank">Download Resume</a></button>
                                 </div>
                                 
                             </div>
         
                         </div>
                     </div>
                     
                     
                </div>
            </div><br><br>
          
        </section>
    </div> 

    
    


    <div class="scrollspy" id="about"></div>
    <section style="background-color: #0A192F;" class="hide-on-med-and-down">
        <div style="width:100%;height: 620px;">
            <div class="container"> <br><br><br>
                <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">About me</h5>
                <div style="width: 30%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br>
                <div class="row">
                    <div class="col s12 l7 m7">
                       
                       
                        <!-- <div style="width: 10%; background-color:#64FFDA;height: 3px;"></div><br> -->
                        <p style="color: #CCD6F6;font-size: large; margin-top: 20%;text-align: justify;">
                        I am a seasoned Web Developer with expertise in front-end development, I have extensive experience in all phases of dynamic web project development. My technical proficiency extends to various programming languages, and I have a background in product design.
                            
                        </p>
                        <p style="color: #CCD6F6;font-size: large;">
                        In addition to on-the-job experience, I have honed my technical and soft skills through various training programs. I have also supplemented my knowledge through the completion of advanced online courses, further solidifying my understanding of programming
                        </p>
                        
                    </div>
                    <div class="col s12 m1 l1">

                    </div>
                    <div style="position: relative;" class="col s12 l4 m4">
                        <div style="background-color:#388F87; margin-left: 10%; margin-top:10%; width: 340px;height: 380px;">
                           
                        </div>
                       <div style="margin-top: -350px;position: absolute;">
                            <img class="responsive-img" src="img/IMG-20220903-WA0027.jpg" alt="">
                       </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="scrollspy"id="about1">
    <section style="background-color: #0A192F;" class="hide-on-large-only hide-on-small-only">
        <div style="width:100%;height: 620px;">
            <div class="container"> <br><br><br>
                <div class="row">
                    <div class="col s12 l7 m7">
                       
                    <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">About me</h5>
                <div style="width: 30%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br><br><br>
                        <p style="color: #CCD6F6;font-size: large;text-align:justify">
                        I am a seasoned Web Developer with expertise in front-end development, I have extensive experience in all phases of dynamic web project development. My technical proficiency extends to various programming languages, and I have a strong background in product design.
                            
                        </p>
                        <p style="color: #CCD6F6;font-size: large;text-align:justify">
                        In addition to on-the-job experience, I have honed my technical and soft skills through various training programs. I have also supplemented my knowledge through the completion of advanced online courses, further solidifying my understanding of programming
                        </p>
                        
                    </div>
                    <div class="col s12 m1 l1">

                    </div>
                    <div style="position: relative;" class="col s12 l4 m4">
                        <div style="background-color:#388F87; margin-left: 10%; margin-top:10%; width: 270px;height: 310px;">
                           
                        </div>
                       <div style="margin-top: -275px;position: absolute;">
                            <img class="responsive-img" src="img/IMG-20220903-WA0027.jpg" alt="">
                       </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="scrollspy"id="about1">
    <section style="background-color: #0A192F;" class="hide-on-med-and-up">
        <div style="width:100%;height: 900px;">
            <div class="container"> 
                <div class="row">
                    <div class="col s12 l7 m7">
                       
                        <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">About me</h5>
                        <div style="width: 30%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br>
                        <p style="color: #CCD6F6; font-size:18px;">
                        I am a seasoned Web Developer with expertise in front-end development, I have extensive experience in all phases of dynamic web project development. My technical proficiency extends to various programming languages, and I have a background in product design.
                            
                        </p>
                        <p style="color: #CCD6F6;font-size:18px;">
                        In addition to on-the-job experience, I have honed my technical and soft skills through various training programs. I have also supplemented my knowledge through the completion of advanced online courses, further solidifying my understanding of programming
                        </p>
                        
                    </div>
                    <div class="col s12 m1 l1">

                    </div>
                    <div style="position: relative;" class="col s12 l4 m4">
                        <div style="background-color:#388F87; margin-top:10%; width: 295px;height: 330px; text-align:center">
                           
                        </div>
                       <div style="margin-top: -305px;position: absolute;text-align:center">
                            <img width="90%" class="responsive-img" src="img/IMG-20220903-WA0027.jpg" alt="">
                       </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section> 




    <div class="scrollspy" id="skills"></div>
    <section style="background-color: #0A192F;" class="hide-on-small-only">
        <div class="container">
            <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">Skills</h5>
            <div style="width: 30%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br><br><br><br><br>
           <div class="row">
                <div class="col s4 m2 l2">
                    <div  style="width: 120px;height: 140px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 90%;" src="img/css-internet-technology-website-web-style-css3-icon.png" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 30%;">HtmlL</p>
                    </div>
                   
                </div>
                <div class="col s4 m2 l2">
                    <div  style="width: 120px;height: 140px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 90%;padding: 15px 20px;" src="img/cdnlogo.com_html.svg" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 30%;">Css</p>
                    </div>
                   
                </div>
                <div class="col s4 m2 l2">
                    <div  style="width: 120px;height: 140px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 90%;padding: 20px;" src="img/js.png" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 20%;">javascript</p>
                    </div>
                   
                </div>
                <div class="col s4 m2 l2">
                    <div  style="width: 120px;height: 140px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 90%;padding: 10px 10px;" src="img/Tailwind_CSS_Logo.svg.png" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 15%;">Tailwindcss</p>
                    </div>
                   
                </div>
                
                <div class="col s4 m2 l2">
                    <div  style="width: 120px;height: 140px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 100%;padding: 12px 20px;" src="img/2396380601551941189-128.png" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 10%;">Materializecss</p>
                    </div>
                   
                </div>
                <div class="col s4 m2 l2">
                    <div  style="width: 120px;height: 140px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 90%;padding:17px 17px;" src="img/64px-Vue.js_Logo_2.svg.png" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 30%;">Vue.Js</p>
                    </div>
                   
                </div>
           </div>
           
        </div> <br><br><br><br><br><br><br><br>
    </section>

    <div class="scrollspy" id="skills1"></div>
    <section style="background-color: #0A192F;" class="hide-on-med-and-up">
        <div>
           <div class="container">
                <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;" >Skills</h5>
                <div style="width: 30%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br><br><br>
           </div>
           <div class="row">
                <div class="col s3 m2 l2">
                    <div  style="width: 100px;height: 120px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 90%;" src="img/css-internet-technology-website-web-style-css3-icon.png" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 30%;">HtmlL</p>
                    </div>
                   
                </div>
            
                <div class="col s1 m2 l2"> 
                </div>
                <div class="col s3 m2 l2">
                    <div  style="width: 100px;height: 120px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 90%;padding: 15px 20px;" src="img/cdnlogo.com_html.svg" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 30%;">Css</p>
                    </div>
                   
                </div>
                <div class="col s1 m2 l2">  
                </div>
                <div class="col s3 m2 l2">
                    <div  style="width: 100px;height: 120px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 90%;padding: 20px;" src="img/js.png" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 20%;">javascript</p>
                    </div>
                   
                </div>  <br>
            </div>    
            <div class="row">
                <div class="col s3 m2 l2">
                    <div  style="width: 100px;height: 120px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 90%;padding: 10px 10px;" src="img/Tailwind_CSS_Logo.svg.png" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 10%;">Tailwindcss</p>
                    </div>
                   
                </div>
                <div class="col s1 m2 l2">  
                </div>
                
                <div class="col s3 m2 l2">
                    <div  style="width: 100px;height: 120px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 100%;padding: 12px 20px;" src="img/2396380601551941189-128.png" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 10%;">Materialize</p>
                    </div>
                   
                </div>
                <div class="col s1 m2 l2">  
                </div>
                <div class="col s3 m2 l2">
                    <div  style="width: 100px;height: 120px;background-color:#112240;border-radius: 5px;">
                        <img class="responsive-img" style="width: 90%;padding:17px 17px;" src="img/64px-Vue.js_Logo_2.svg.png" alt="">
                        <p style="font-weight: bold;color: #CCD6F6; margin-top: -10px;margin-left: 30%;">Vue.Js</p>
                    </div>
                   
                </div>
            </div>
                
           
           
        </div> <br><br><br><br>
    </section>
    
    <div class="scrollspy" id="portfolio"></div>
    <section style="background-color: #0A192F" class="hide-on-small-only">
        <div  style="margin-left:3%; margin-right:10%">
            <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">Projects</h5>
            <div style="width: 30%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br><br><br><br><br>
            <div class="row parent">
                <div  class="col s12 m6 l6 push-l1 push-m1">
                    <img class="responsive-img z-depth-2" style="z-index: 9;" src="img/shop.PNG" alt="">
                </div>
        
                <div style="background-color:#112240; height: 330px;" class="col s12 m6 l6">
                    <p style="color: white;font-size: x-large;padding-left: 15%;padding-top: 5%;margin-bottom: -8px;">ShopNest</p>
                    <p style="color: white;padding-left: 15%; padding-right:10%;padding-top: -5%;">ShopNest is an e-commerce platform that enables users to buy products online. The checkout process requires either a login or registration, allowing customers to securely make payments through their credit card or Paystack.</p>

                    <p style="padding-left: 15%; color:#64FFDA">
                        Tools: Html, css, Jquery and Materializecss
                </p>

                    <div style="margin-left: 15%;">
                        <a href="https://shopNest.netlify.app" target="_blank">
                            <button style="background-color: #CCD6F6; color:#0A192F; padding: 10px 20px; border: none; border-radius: 5px;text-transform:none">
                            <i class="fas fa-globe" style="font-size: 20px; margin-right: 10px;"></i> Open Site
                            </button>
                        </a>
                        
                        <a href="https://github.com/ekekasiemobi/shopnest" target="_blank">
                            <button style="background-color: #CCD6F6; color:#0A192F; padding: 11px 20px; border: none; border-radius: 5px; text-transform:none">
                                <i class="fa fa-github" style="margin-right: 10px;"></i> Github
                            </button>
                        </a>
                    </div>
                </div>
            </div><br><br>


            <div class="row parent">
                <div class="col s12 m6 l6 push-l1 push-m1">
                    <div style="height: 330px; background-color: #112240;">
                        <p style="color: white; font-size: x-large; padding-left: 10%; padding-top: 5%; margin-bottom: -8px;">Pro M</p>
                        <p style="color: white; padding-left: 10%; padding-right: 17%; padding-top: -5%;">Pro M is a comprehensive product management platform designed to streamline the work of product managers. It empowers them to effectively assign tasks and manage the activities of their team members, ensuring a cohesive and efficient work environment.</p>
                        <p style="padding-left: 10%; color: #64FFDA">
                            Tools: Html,css , Jquery, and Materializecss
                        </p>

                        <div style="margin-left: 10%;">
                            <a href="https://programmanager.netlify.app" target="_blank">
                                <button style="background-color: #CCD6F6; color:#0A192F; padding: 10px 20px; border: none; border-radius: 5px;text-transform:none">
                                <i class="fas fa-globe" style="font-size: 20px; margin-right: 10px;"></i> Open Site
                                </button>
                            </a>
                            
                            <a href="https://github.com/ekekasiemobi/proM" target="_blank">
                                <button style="background-color: #CCD6F6; color:#0A192F; padding: 11px 20px; border: none; border-radius: 5px; text-transform:none">
                                    <i class="fa fa-github" style="margin-right: 10px;"></i> Github
                                </button>
                            </a>
                       </div>
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <img class="responsive-img" src="img/prom.PNG" alt="" style="margin-top: 8%; z-index:99">                     
                </div>
            </div><br><br>

            <div class="row">
                <div  class="col s12 m6 l6 push-l1">
                    <img class="responsive-img z-depth-2" style="z-index: 9;margin-top:7%" src="img/TTPNet.PNG" alt="">
                </div>
                
                <div class="col s12 m6 l6">
                    
                    <div style="height: 300px; background-color:#112240;" class="">
                       <p style="color: white;font-size: x-large;padding-left: 15%;padding-top: 5%;margin-bottom: -8px;">TTPNetwork</p>
                       <p style="color: white;padding-left: 15%; padding-right:10%;padding-top: -5%;">TTPnetwork is a career support platform that helps graduates and undergraduates with their job search. Services include CV/resume writing, cover letter writing, LinkedIn optimization, and consultation booking.</p>

                       <p style="padding-left: 15%; color:#64FFDA">
                            Tools: Html, css, Jquery and Materializecss
                       </p>
                        
                       <div style="margin-left: 15%;">
                            <a href="https://TTPNetwork.netlify.app" target="_blank">
                                <button style="background-color: #CCD6F6; color:#0A192F; padding: 10px 20px; border: none; border-radius: 5px;text-transform:none">
                                <i class="fas fa-globe" style="font-size: 20px; margin-right: 10px;"></i> Open Site
                                </button>
                            </a>
                            
                            <a href="https://github.com/ekekasiemobi/TTPNetwork" target="_blank">
                                <button style="background-color: #CCD6F6; color:#0A192F; padding: 11px 20px; border: none; border-radius: 5px; text-transform:none">
                                    <i class="fa fa-github" style="margin-right: 10px;"></i> Github
                                </button>
                            </a>
                       </div>
                       
                    </div>
                </div>
            </div> 
 
            

            
            
        </div> <br><br>
    </section>

    <section style="background-color: #0A192F" class="hide-on-med-and-up">
        <div  class="container">
        <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">Projects</h5>
            <div style="width: 30%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br><br><br>
            <div style="vertical-align:middle" class="row">
                <div class="col s12 m6 l6">
                    <img class="responsive-img" src="img/shop.PNG" alt="">
                </div>
                
                <div class="col s12 m6 l6">
                    
                    <div style="height: 280px; background-color:#112240;margin-top: -10%;" class="z-depth-2">
                       <p style="color: white;font-size: x-large;padding-left: 10%;padding-top: 5%;margin-bottom: -8px;">ShopNest</p>
                       <p style="color: white;padding-left: 10%; padding-right:10%;padding-top: -5%;">ShopNest is an e-commerce platform that enables users to buy products online. The checkout process requires either a login or registration, allowing customers to securely make payments through their credit card or Paystack.</p>

                       <p style="padding-left: 10%; color:#64FFDA">
                            Tools: Html, css, Jquery and Materializecss
                       </p>

                       <div style="margin-left: 10%;">
                            <a href="https://shopNest.netlify.app" target="_blank">
                                <button style="background-color: #CCD6F6; color:#0A192F; padding: 10px 20px; border: none; border-radius: 5px;text-transform:none">
                                <i class="fas fa-globe" style="font-size: 20px; margin-right: 10px;"></i> Open Site
                                </button>
                            </a>
                            
                            <a href="https://github.com/ekekasiemobi/shopnest" target="_blank">
                                <button style="background-color: #CCD6F6; color:#0A192F; padding: 11px 20px; border: none; border-radius: 5px; text-transform:none">
                                    <i class="fa fa-github" style="margin-right: 10px;"></i> Github
                                </button>
                            </a>
                       </div>
                       
                    </div>
                </div>
            </div> <br><br>

            <div class="row">
                
                <div class="col s12 m6 l6">
                    <img class="responsive-img" src="img/prom.PNG" alt="" style="z-index: -99">                     
                </div>
               
                <div class="col s12 m6 l6">
                   
                    <div style="height: 300px; background-color:#112240;position: relative;margin-top: -10%;"class="z-depth-2">
                        <p style="color: white;font-size: x-large;padding-left: 10%;padding-top: 5%;margin-bottom: -8px;">Pro M</p>
                        <p style="color: white;padding-left: 10%; padding-right:10%;padding-top: -5%;">Pro M is a comprehensive product management platform designed to streamline the work of product managers. It empowers them to effectively assign tasks and manage the activities of their team members, ensuring a cohesive and efficient work environment.</p>
                       
                        <p style="padding-left: 10%; color: #64FFDA">
                            Tools: Html,css , Jquery, and Materializecss
                        </p>

                        <div style="margin-left: 10%;">
                            <a href="https://programmanager.netlify.app" target="_blank">
                                <button style="background-color: #CCD6F6; color:#0A192F; padding: 10px 20px; border: none; border-radius: 5px;text-transform:none">
                                <i class="fas fa-globe" style="font-size: 20px; margin-right: 10px;"></i> Open Site
                                </button>
                            </a>
                            
                            <a href="https://github.com/ekekasiemobi/proM" target="_blank">
                                <button style="background-color: #CCD6F6; color:#0A192F; padding: 11px 20px; border: none; border-radius: 5px; text-transform:none">
                                    <i class="fa fa-github" style="margin-right: 10px;"></i> Github
                                </button>
                            </a>
                       </div>
                    </div>
                    
                </div>
               
                 
            </div> <br><br>

            <div class="row">
               
                <div class="col s12 m6 l6">
                    <img class="responsive-img" src="img/TTPNet.PNG" alt="">
                </div>
                
                <div class="col s12 m6 l6">
                    
                    <div style="height: 280px; background-color:#112240;margin-top: -10%"class="z-depth-2">
                        <p style="color: white;font-size: x-large;padding-left: 10%;padding-top: 5%;margin-bottom: -8px;">TTPNetwork</p>
                       <p style="color: white;padding-left: 10%;padding-right:10%;padding-top: -5%;"> TTPnetwork is a career support platform that helps graduates and undergraduates with their job search. Services include CV/resume writing, cover letter writing, LinkedIn optimization, and consultation booking.</p>

                       <p style="padding-left: 10%; color:#64FFDA">
                            Tools: Html, css, Jquery and Materializecss
                       </p>
                        
                       <div style="margin-left: 10%;">
                            <a href="https://TTPNetwork.netlify.app" target="_blank">
                                <button style="background-color: #CCD6F6; color:#0A192F; padding: 10px 20px; border: none; border-radius: 5px;text-transform:none">
                                <i class="fas fa-globe" style="font-size: 20px; margin-right: 10px;"></i> Open Site
                                </button>
                            </a>
                            
                            <a href="https://github.com/ekekasiemobi/TTPNetwork" target="_blank">
                                <button style="background-color: #CCD6F6; color:#0A192F; padding: 11px 20px; border: none; border-radius: 5px; text-transform:none">
                                    <i class="fa fa-github" style="margin-right: 10px;"></i> Github
                                </button>
                            </a>
                       </div>
                    </div>
                </div>
            </div>
            
            
        </div> <br><br>
    </section>

    


    <div class="scrollspy" id="contact"></div>
    <section class="z-depth-3 hide-on-med-and-down">
        <div class="fourth">
            <img style="position: absolute;opacity: 0.6;width: 100%;height: 650px;" src="img/laptop-5842509_1280.jpg">
        </div> 
        <div>
            <div style="width: 90%;height: 550px; background-color: #112240;position: absolute; margin-top: -600px;margin-left: 5%;"></div>
        </div>
        <div class="container">
            <div class="row">
                <div style="position: absolute; margin-top: -550px;">
                    <div class="col s12 l6 m6">
                        <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">Contact Me</h5>
                        <div style="width: 40%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br>
                        <p style="color: #CCD6F6;font-size: larger;">I am currently available for projects. Please feel <br> free to use this form or email me about your project!</p>
                        <img style="position: absolute;margin-top: 5px;" src="https://img.icons8.com/material-rounded/24/64FFDA/smartphone.png"/>
                        <div  style="margin-left:35px;">  
                            <p style="font-size: 13px;color: #CCD6F6;font-size: larger">Phone</p>
                            <p style="margin-top: -13px; font-size: 12px;color: #CCD6F6;font-size: larger">08164602766</p>
                        </div>
                        <img style="position: absolute;margin-top: 5px;" src="https://img.icons8.com/material-outlined/24/64FFDA/new-post.png"/> 
                        <div  style="margin-left:35px;">
                            <p style="font-size: 13px;color: #CCD6F6;font-size: larger">Email</p>
                            <p  style="margin-top: -13px; font-size: 12px;color: #CCD6F6;font-size: larger">Kasiemobijanfrancis@gmail.com</p>
                        </div>
                        <div class="row">
                            <div class="col s12 l2 m3 ">
                                <div style="border:solid; height: 50px; background-color:#112240;border-color:#64FFDA; width: 50px; border-radius: 30px;">
                                   <a href="https://twitter.com/Kassy_Francis" target="_blank"><img style="margin: 8px;" src="https://img.icons8.com/ios-glyphs/30/64FFDA/twitter--v1.png" alt=""></a>
                                </div>
                               
                            </div>
                            <div class="col s12 l2 m3">
                                <div style="border:solid; height: 50px; background-color: #112240;border-color: #64FFDA; width: 50px; border-radius: 30px;">
                                    <a href="https://www.linkedin.com/in/kasiemobijanfrancis" target="_blank"><img style="margin: 5px;" src="https://img.icons8.com/windows/32/64FFDA/linkedin-2.png" alt=""></a>
                                   
                                </div>
                            
                            </div>
                            <div class="col s12 l2 m3">
                                <div style="border:solid; height: 50px; background-color: #112240;border-color:#64FFDA; width: 50px; border-radius: 30px;">
                                    <a href="https://github.com/kassy-francis" target="_blank"><img style="margin: 7px;" src="https://img.icons8.com/ios-glyphs/30/64FFDA/github.png" alt=""></a>
                                   
                                </div>
                                
                            </div>
                            <div class="col s12 l2 m3">
                                <div style="border:solid; height: 50px; background-color: #112240;border-color:#64FFDA; width: 50px; border-radius: 30px;">
                                    <a href="https://instagram.com/Kassy_Francis" target="_blank"><img style="margin: 2px  1px;width: 40px;" src="https://img.icons8.com/sf-black-filled/64/64FFDA/instagram-new.png" alt=""></a>
                                   
                                
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!--<div class="col s12 m1 l1">-->

                    <!--</div>-->
                    <div class="col s12 l5 m5">
                        <form action="index.php" method="POST">
                            <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">Send A Message</h5>
                            <div style="width: 40%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br><br><br>
                            <input style=" border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px;width:130%;color:white" name="name" type="text" placeholder="Name"><br>
                            
                            <input style="border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px;width:130%;color:white" name="email"  type="email" placeholder="Email"><br>
                        
                            <input style="border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px;width:130%;color:white" name="subject"  type="text" placeholder="Subject"><br>
                        
                            <textarea style="height: 120px; width: 134%; border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px; padding-top: 10px;resize: none;color:white" placeholder="Messsage" name="message" id="" cols="50" rows="10"></textarea><br><br>
                            
                            <button name="submit" onclick="myFunction()"  type="submit" >Send Message</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
       
        
    </section>
    <div class="scrollspy" id="contact"></div>
    <section class="z-depth-3 hide-on-small-only hide-on-large-only">
        <div class="fourth">
            <img style="position: absolute;opacity: 0.6;width: 100%;height: 650px;" src="img/laptop-5842509_1280.jpg">
        </div> 
        <div>
            <div style="width: 90%;height: 550px; background-color: #0A192F;position: absolute; margin-top: -600px;margin-left: 5%;"></div>
        </div>
        <div class="container">
            <div class="row">
                <div style="position: absolute; margin-top: -550px;">
                    <div class="col s12 l6 m6">
                    <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">Contact Me</h5>
                        <div style="width: 40%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br>
                        <p style="color: #CCD6F6;font-size:large">I am currently available for projects. Please feel <br> free to use this form or email me about your project!</p>
                        <img style="position: absolute;margin-top: 5px;" src="https://img.icons8.com/material-rounded/24/64FFDA/smartphone.png"/>
                        <div  style="margin-left:35px;">  
                            <p style="font-size: 13px;color: #CCD6F6;font-size:large">Phone</p>
                            <p style="margin-top: -13px; font-size: 12px;color: #CCD6F6;font-size:large">08164602766</p>
                        </div>
                        <img style="position: absolute;margin-top: 5px;" src="https://img.icons8.com/material-outlined/24/64FFDA/new-post.png"/> 
                        <div  style="margin-left:35px;">
                            <p style="font-size: 13px;color: #CCD6F6;font-size:large">Email</p>
                            <p  style="margin-top: -13px; font-size: 12px;color: #CCD6F6;font-size:large">Kasiemobijanfrancis@gmail.com</p>
                        </div>
                        <div class="row">
                            <div class="col s12 l2 m2 ">
                                <div style="border:solid; height: 50px; background-color:#112240;border-color:#64FFDA; width: 50px; border-radius: 30px;">
                                   <a href="https://twitter.com/ekekasiemobi" target="_blank"><img style="margin: 8px;" src="https://img.icons8.com/ios-glyphs/30/64FFDA/twitter--v1.png" alt=""></a>
                                </div>
                               
                            </div>
                            <div class="col s12 l2 m2">
                                <div style="border:solid; height: 50px; background-color: #112240;border-color: #64FFDA; width: 50px; border-radius: 30px;">
                                    <a href="https://www.linkedin.com/in/kasiemobijanfrancis" target="_blank"><img style="margin: 5px;" src="https://img.icons8.com/windows/32/64FFDA/linkedin-2.png" alt=""></a>
                                   
                                </div>
                            
                            </div>
                            <div class="col s12 l2 m2">
                                <div style="border:solid; height: 50px; background-color: #112240;border-color:#64FFDA; width: 50px; border-radius: 30px;">
                                    <a href="https://github.com/ekekasiemobi" target="_blank"><img style="margin: 7px;" src="https://img.icons8.com/ios-glyphs/30/64FFDA/github.png" alt=""></a>
                                   
                                </div>
                                
                            </div>
                            <div class="col s12 l2 m2">
                                <div style="border:solid; height: 50px; background-color: #112240;border-color:#64FFDA; width: 50px; border-radius: 30px;">
                                    <a href="https://instagram.com/Kassy_Francis" target="_blank"><img style="margin: 2px  1px;width: 40px;" src="https://img.icons8.com/sf-black-filled/64/64FFDA/instagram-new.png" alt=""></a>
                                   
                                
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col"></div>
                    <div class="col s12 l6 m6">
                        <form action="">
                        <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">Send A Message</h5>
                        <div style="width: 40%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br><br>
                            <input style=" border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px;width:88%" name="name" type="text" placeholder="Name"><br>
                            
                            <input style="border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px;width:88%" name="email" type="email" placeholder="Email"><br>
                        
                            <input style="border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px;width:88%" name="subject"  type="text" placeholder="Subject"><br>
                        
                            <textarea style="height: 120px; width: 93%; border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px; resize: none; padding-top: 10px;" placeholder="Messsage" name="message" id="" cols="50" rows="10"></textarea><br><br>
                            
                            <button name="submit" onclick="myFunction()" type="submite" >Send Message</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
       
        
    </section>
    <div class="scrollspy" id="contact1"></div>
    <section class="z-depth-3 hide-on-med-and-up">
        <div class="fourthmobile">
            <img style="position: absolute;opacity: 0.6;width: 100%;height: 920px;" src="img/laptop-5842509_1280.jpg">
        </div> 
        <div>
            <div style="width: 94%;height: 870px; background-color: #0A192F;position: absolute; margin-top: -865px;margin-left: 3%;"></div>
        </div>
        <div class="container"><br>
            <div class="row">
                <div style="position: absolute; margin-top: -820px;">
                    <div class="col s12 l6 m6">
                    <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">Contact Me</h5>
                        <div style="width: 40%;background-color: #64FFDA;height: 1px;display: inline-block;"></div>
                       
                        <p style="color: #CCD6F6;font-size:large">I am currently available for projects. Please feel <br> free to use this form or email me about your project!</p>
                        <img style="position: absolute;margin-top: 8px;" src="https://img.icons8.com/material-rounded/24/64FFDA/smartphone.png"/>
                        <div  style="margin-left:35px;">  
                            <p style="font-size: 13px;color: #CCD6F6;font-size:large">Phone</p>
                            <p style="margin-top: -13px;font-size: 12px;color: #CCD6F6;font-size:large">08164602766</p>
                        </div>
                        <img style="position: absolute; margin-top: 8px;" src="https://img.icons8.com/material-outlined/24/64FFDA/new-post.png"/>
                        <div  style="margin-left:40px;">
                            <p style="font-size: 13px;color: #CCD6F6;font-size:large">email</p>
                            <p  style="margin-top: -13px;font-size: 12px;color: #CCD6F6;font-size:large">Kasiemobijanfrancis@gmail.com</p>
                        </div>
                        <div class="row">
                            <div class="col s2 l2 m3 ">
                                <div style="border:solid; height: 50px; background-color:#112240;border-color:#64FFDA; width: 50px; border-radius: 30px;">
                                   <a href="https://twitter.com/ekekasiemobi" target="_blank"><img style="margin: 8px;" src="https://img.icons8.com/ios-glyphs/30/64FFDA/twitter--v1.png" alt=""></a>
                                </div>
                               
                            </div>
                            <div class="col s2 l2 m3">
                                <div style="border:solid; height: 50px; background-color: #112240;border-color: #64FFDA; width: 50px; border-radius: 30px;">
                                    <a href="https://www.linkedin.com/in/kasiemobijanfrancis" target="_blank"><img style="margin: 5px;" src="https://img.icons8.com/windows/32/64FFDA/linkedin-2.png" alt=""></a>
                                   
                                </div>
                            
                            </div>
                            <div class="col s2 l2 m3">
                                <div style="border:solid; height: 50px; background-color: #112240;border-color:#64FFDA; width: 50px; border-radius: 30px;">
                                    <a href="https://github.com/ekekasiemobi" target="_blank"><img style="margin: 7px;" src="https://img.icons8.com/ios-glyphs/30/64FFDA/github.png" alt=""></a>
                                   
                                </div>
                                
                            </div>
                            <div class="col s2 l2 m3">
                                <div style="border:solid; height: 50px; background-color: #112240;border-color:#64FFDA; width: 50px; border-radius: 30px;">
                                    <a href="https://instagram.com/Kassy_Francis" target="_blank"><img style="margin: 2px  1px;width: 40px;" src="https://img.icons8.com/sf-black-filled/64/64FFDA/instagram-new.png" alt=""></a>
                                   
                                
                                </div>
                            </div>
                        </div> 
                    <div class="col"></div>
                    <div class="col s12 l6 m6">
                        <form action="">
                        <h5 style="font-weight: bold;color: #CCD6F6; margin-top: -10px; display: inline-block;">Send Message</h5>
                            <div style="width: 30%;background-color: #64FFDA;height: 1px;display: inline-block;"></div><br>
                            <input style=" border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px; width:90%;" type="text" placeholder="Name"><br>
                            
                            <input style="border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px;width:90%;"  type="email" placeholder="Email"><br>
                        
                            <input style="border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px;width:90%;"  type="email" placeholder="Subject"><br>
                        
                            <textarea style="height: 120px; width: 104%; border: solid 1px rgba(128, 128, 128, 0.623);padding-left: 15px;resize:none; padding-top: 10px;width:95%;" placeholder="Messsage" name="message" id="" cols="50" rows="10"></textarea><br><br>
                            
                            <div style="margin-left: 18%;">
                                <button name="submit" onclick="myFunction()"  type="submite" >Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
       
        
    </section>


    <section style="margin-top:-20px;" class="footer hide-on-small-only">
        <div style=" background-color:#112240;">
            <div class="container center"><br><br>
                <p style="color: #CCD6F6;font-size: large;">© Copyright Eke Kasiemobi. All Rights Reserved</p> 
                <p style="color: #CCD6F6;font-size: large;"> Designed and Developed  by Eke Kasiemobi</p>
            </div><br><br>
        </div>
        
    </section>
    <section style="margin-top:-34px;" class="footer hide-on-med-and-up">
        <div style=" background-color:#112240;">
            <div class="container center"><br><br>
               <p style="color: #CCD6F6;font-size: large;">© Copyright Eke Kasiemobi. All Rights Reserved</p> 
               <p style="color: #CCD6F6;font-size: large;"> Designed and Developed  by Eke Kasiemobi </p>
            </div><br><br>
        </div>
        
    </section>
    <script src="materialize/js/jquery.js"></script>
    <script src="materialize/js/materialize.js"></script>
    <script>
        $('.document').ready(function(){
           
            $('.parallax').parallax();
            $('.sidenav').sidenav();
            $('.scrollspy').scrollSpy();
         });
        
        new Typed('#typed',{
        strings : [' Web Developer','Product Designer','Graphics Designer'],
        typeSpeed : 80,
        delaySpeed : 2000,
        loop : true
        });

        new Typed('#type',{
        strings : [' Web Developer','Product Designer','Graphics Designer'],
        typeSpeed : 80,
        delaySpeed : 2000,
        loop : true
        });

        
    </script>
    
    
    
</body>
</html>