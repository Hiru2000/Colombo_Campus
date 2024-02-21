<?php
session_start();
if(!isset($_SESSION["USER"])){
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Department Of Pathology Colombo University</title>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
<style>
/* Add this CSS to align the Logout link to the right */
.navbar-items {
  float: left;
}

.logout {
  float: right;
}

/* Add any other styling as needed */
</style>
</head>
<div class="topnav" id="myTopnav">
<div class="pq-sidebar-header">
<div class="dropdown">
    <button class="dropbtn">U
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="6a.php">6A</a>
      <a href="u_18.php">18</a>
      <a href="u_22.php">22</a>
      <a href="u_30b.php">30B</a>
      <a href="u_41.php">41</a>
      <a href="u_48B.php">48B</a>
      <a href="u_39.php">39</a>
      <a href="u_56a.php">56A</a>
      <a href="u_03.php">03</a>
      <a href="u_15.php">15</a>
      <a href="u_other.php">Other</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">GC
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="gc_03.php">03</a>
      <a href="gc_15.php">15</a>
      <a href="gc_other.php">Other</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">RB
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="rb_41.php">41</a>
      <a href="rb_48.php">48</a>
      <a href="rb_56a.php">56A</a>
      <a href="rb_other.php">Other</a>
    </div> 
  </div>
  <a href="uo.php" >UO</a> 
  <div class="dropdown">
    <button class="dropbtn">RE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="prof_silva.php">Prof.C.D.Silva</a>
      <a href="Gooneratne.php">Prof.L.V.Gooneratne</a>
      <a href="priyani.php">Prof.A.A.H.Priyani</a>
      <a href="ranaweera.php">Dr.G.Ranaweera</a>
      <a href="wijesinghe.php">Dr.H.Wijesinghe</a>
      <a href="wimalachandra.php">Dr.M.Wimalachandra</a>
      <a href="sivashangar.php">Dr.A.Sivashangar</a>
      <a href="silva.php">Dr.L.D.Silva</a>
      <a href="baranasuriya.php">Dr.C.Baranasuriya</a>
      <a href="karunarathne.php">Dr.D.R.Karunaratne</a>
      <a href="re_other01.php">Other01</a>
      <a href="re_other02.php">Other02</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">LRH 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="lrh_01.php">01</a>
      <a href="lrh_24.php">24</a>
      <a href="lrh_other.php">Other</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">PM 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="pm_03.php">03</a>
      <a href="pm_15.php">15</a>
      <a href="pm_other.php">Other</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">CeDARC
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cedarc_internal.php">Internal</a>
      <a href="cedarc_external.php">External</a>
    </div>
  </div> 
  <div class="logout">
    <a href="logout.php" class="btn btn-warning" >Logout</a>
  </div>
  <!--<div class="search-container">
    <form method ="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div> -->
</div>
</div>

<div class="slideshow-container">
<br>

<div class="mySlides fade">
  <img src="images/slideshow1.jpg"  style="width:100%;" >
</div>
                                                                
<div class="mySlides fade">
  <img src="images/slideshow3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/slideshow4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/slideshow5.jpg" style="width:100%">
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>

<style>
  p{
    margin-left: 250px;
    color: #6a6c6d;
  }
  h1{
    margin-left: 250px;
  }
  
</style>

<h1 style = "font-family: 'times new roman', times, serif;"> Vision</h1>
<p class="p1">To be a leader in education, diagnostic services and research in pathology, in South Asia.</p>

<h1 style = "font-family: 'times new roman', times, serif;"> Mission</h1>
<p class="p1">The mission of the Department of Pathology, Faculty of Medicine, Colombo, is to produce medical graduates,post graduates &
  <br>
  health related personnel who are able to link the cause and effects of disease and to apply this knowledge in providing 
  <br>
  optimal patient care to the individual and the community with competence, compassion and care.</p>
<p class="p1">It will achieve excellence in the fields of diagnostic histopathology, haematology and chemical pathology, with provision of 
  <br>
  expertise in areas of super specialization.</p>
<p class="p1">The department will provide leadership in research, policy formulation and quality assurance in pathology by maintaining an 
  <br>
  environment of inquiry and continuous self-evaluation.</p>
<p class="p1"> We will fulfill our mission in a spirit of shared responsibilities and team work in a happy working environment.</p>

<h1 style = "font-family: 'times new roman', times, serif;">Goals</h1>
<p class ="p1"> > To achieve excellent standards in teaching and training of medical undergraduates, post  graduates and health related personnel in pathology.</p>
<p class ="p1"> > To provide  diagnostic services and conduct research in histopathology and haematology.</p>
<p class ="p1"> > To be a national referral centre for histopathogy and haematology diagnosis.</p>
<p class ="p1"> > To establish a telepathology diagnostic link with local and foreign centres of excellence.</p>
<p class ="p1"> > To play a leading role a provision of continuing professional development in pathology.</p>
<p class ="p1"> > To develop and sustain quality assurance in education and diagnostic services in the field of pathology.</p>
<p class ="p1"> > To play an active role in health education of the community regarding prevention and early diagnosis of disease.</p>
<p class ="p1"> > To develop strategies for self-sustainability.</p>
<p class ="p1"> > To create an environment of shared responsibility and team spirit, whilst recognizing the need for individual development.</p>

<body>
<style>
/*footer*/
*,*::before,*::after{
  box-sizing: border-box;
}

footer{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-flow: row wrap;
  padding: 50px;
  color: #660099;
  background-color: #ecadef;
}

.footer > *{
  flex: 1 100%;
}

.footer-left {
  margin-right: 7em;
  margin-bottom: -5em;
}

.footer-left img{
  width: 110%;
  padding: 9px;
}


.footer ul{
  list-style: none;
  padding-left: 0;
}

.footer li{
  line-height: 2em;
}

.footer a{
  text-decoration: none;
}

.footer-right{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-flow: row wrap;
}

.footer-right > *{
  flex:1 50%;
  margin-right: 1.25em;
}

.box a{
  color: #660099;
}

.footer-bottom{
  text-align: center;
  color: #660099;
  padding-top: 50px;
}

.footer-left p2{
  padding-right: 20%;
  color: #660099;
}

.socials a i{
  color:  #660099;
  padding: 10px 12px;
  font-size: 20px;
}

@media screen and (min-width:600px){
  .footer-right > *{
    flex:1;
  }
  .footer-left{
    flex: 1 0px;
  }
  .footer-right{
    flex: 2 0px;
  }
}

@media(max-width:600px){
  .footer{
    padding:15px;
  }
}

</style>
    <footer class="footer">
      <div class="footer-left">
        <img src="images/lg.png.png" alt="">

        <br>
        <br>
       
         
      </div>
      <ul class="footer-right">
          <ul class="box">
            <li><a href="https://lib.cmb.ac.lk/" target="_blank" rel="noopener noreferrer">Main Library - UOC</a></li>
            <li><a href="https://pgim.cmb.ac.lk/" target="_blank" rel="noopener noreferrer">PGIM</a></li>
            <li><a href="https://www.ugc.ac.lk/" target="_blank" rel="noopener noreferrer">UGC</a></li>
            <li><a href="https://www.monash.edu/medicine/sphpm" target="_blank" rel="noopener noreferrer">Scholorships</a></li>
            <li><a href="https://cmb.ac.lk/privacy-policy" target="_blank" rel="noopener noreferrer" >Privacy Policy</a></li>
            <li><a href="https://cmb.ac.lk/email-policy" target="_blank" rel="noopener noreferrer">University Email Policy</a></li>
          </ul>
      </ul>
      <style>
        ul.no-bullets{
          list-style-type: none;
        }
      </style>
      <ul class="footer-right">
        <ul class="no-bullets">
            <li>The Faculty of Medicine,</li>
            <li>University of Colombo,</li>
            <li>No. 25, Kynsey Road,</li>
            <li>Colombo 8,</li>
            <li>Sri Lanka.</li>
        </ul>
      </ul>
      <ul class="footer-right">
        <ul class="no-bullets">
            <li><i class="fas fa-phone"></i><span>+94 112 695 300</span></li>
            <li><i class="fas fa-fax"></i><span>+94 112 691 581</span></li>
            <li><a href="https://med.cmb.ac.lk/contacts/" target="_blank" rel="noopener noreferrer">Contact Us</a></li>
            <li><a href="https://med.cmb.ac.lk/faculty-map/" target="_blank" rel="noopener noreferrer">Faculty Map</a></li>
            <div class="socials">
          <a href="https://www.facebook.com/UCFMCOLOMBO/?show_switched_toast=0&show_invite_to_follow=0&show_switched_tooltip=0&show_podcast_settings=0&show_community_review_changes=0&show_community_rollback=0&show_follower_visibility_disclosure=0" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fmedfaccmb" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/channel/UCZmjXEkSf9HCf7wTSTzfcEg" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
          <a href="https://med.cmb.ac.lk/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
         </div>
        </ul>
      </ul>
    </footer>
</body>



</html>


