<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>

@import url('https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap');

body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("https://institute.careerguide.com/wp-content/uploads/2020/10/cloud-computing-GIF.gif");
  min-height: 50%;
}

.menu {
  display: none;
}



</style>
<body>


<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">CONTENT</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">WHERE</a>
    </div>
  </div>
</div>


<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag"></span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:100px; font-family: 'Dela Gothic One', cursive;" ><font color="#191919">CLOUD<br>COMPUTING</font></span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white"></span>
  </div>
</header>


<div class="w3-sand w3-grayscale w3-large">


<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h3 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CLOUD COMPUTING</span></h3>
    <p>Simply put, cloud computing is the delivery of computing services—including servers, storage, databases, networking, software, analytics, and intelligence—over the Internet (“the cloud”) to offer faster innovation, flexible resources, and economies of scale. </p>
    <p>You typically pay only for cloud services you use, helping you lower your operating costs, run your infrastructure more efficiently, and scale as your business needs change.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
    </div>
  </div>
</div>


<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h3 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">CLOUD</span></h3>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">TOPICS</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">LITTLE DESCRIPTION</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>Multi-Cloud</h5>
      <p class="w3-text-grey"></p><br>
    
      <h5>Cloud Firewall</h5>
      <p class="w3-text-grey"></p><br>
    
      <h5>Cloud Migration</h5>
      <p class="w3-text-grey"></p><br>
    
      <h5>Hybrid Cloud</h5>
      <p class="w3-text-grey"></p><br>
    
      <h5>Cloud Computing Services</h5>
      <p class="w3-text-grey"></p>
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5></h5>
      <p class="w3-text-grey">Multicloud is the use of multiple cloud computing and storage services in a single heterogeneous architecture. This also refers to the distribution of cloud assets, software, applications, etc. across several cloud-hosting environments.</p><br>
    
      <h5></h5>
      <p class="w3-text-grey">Cloud Firewalls are software-based, cloud deployed network devices, built to stop or mitigate unwanted access to private networks. As a new technology, they are designed for modern business needs, and sit within online application environments.</p><br>
    
      <h5></h5>
      <p class="w3-text-grey">Cloud migration is the process of moving data, applications or other business elements to a cloud computing environment. ... However, a cloud migration could also entail moving data and applications from one cloud platform or provider to another -- a model known as cloud-to-cloud migration.</p><br>
    
      <h5></h5>
      <p class="w3-text-grey">Hybrid cloud is a solution that combines a private cloud with one or more public cloud services, with proprietary software enabling communication between each distinct service. A hybrid cloud strategy provides businesses with greater flexibility by moving workloads between cloud solutions as needs and costs fluctuate.</p><br>
    
      <h5></h5>
      <p class="w3-text-grey">Cloud computing is the on-demand delivery of IT resources over the Internet with pay-as-you-go pricing. Instead of buying, owning, and maintaining physical data centers and servers, you can access technology services, such as computing power, storage, and databases, on an as-needed basis from a cloud provider like Amazon Web Services (AWS).</p>
    </div>  
    <img src="https://wallpaperaccess.com/full/1805473.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h3 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h3>
    <p>Find us at some address at some place.</p>
    <img src="https://i.ytimg.com/vi/BO-H4jttpFI/hqdefault.jpg" class="w3-image" style="width:100%">
    <p><span class="w3-tag"></span> CTU Danao Campus offered a lot of Courses, especially into Bachelor of Science and Technology (BSIT).</p>
    <p><strong></strong>Kindly drop a message to study here and learn more with us.</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div>


</div>

<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>&copy;opyright BSIT-2A NIGHT</p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
