<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="offcanvas.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/offcanvas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Profile </title>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  
  list-style: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f3f3;
}

.user-wrapper{
  
  top: 50%;
  left: 50%;
 
  width: 100%;
  height: 100%;
  display: flex;
  box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
}

.user-wrapper .left{
  width: 50%;
  background: linear-gradient(to right,#808080,#808080);
  padding: 30px 25px;

  text-align: center;
  color: #fff;
  font-size: 30px;
}

.user-wrapper .left img{
  border-radius: 5px;
  margin-bottom: 10px;
  height: 300px;
  width: 300px;
}

.user-wrapper .left h4{
  margin-bottom: 20px;
}

.user-wrapper .left p{
  font-size: 40px;
}

.user-wrapper .right{
  width: 65%;
  background: #fff;
  padding: 30px 25px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  font-size: 25px;
}

.user-wrapper .right .info,
.user-wrapper .right .projects{
  margin-bottom: 25px;
}

.user-wrapper .right .info h3,
.user-wrapper .right .projects h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.user-wrapper .right .info_data,
.user-wrapper .right .projects_data{
  display: flex;
  justify-content: space-between;
}

.user-wrapper .right .info_data .data,
.user-wrapper .right .projects_data .data{
  width: 45%;
}

.user-wrapper .right .info_data .data h4,
.user-wrapper .right .projects_data .data h4{
    color: #353c4e;
    margin-bottom: 5px;
}

.user-wrapper .right .info_data .data p,
.user-wrapper .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  color: #919aa3;
}

.user-wrapper .social_media ul{
  display: flex;
}

.user-wrapper .wrapper{
  display: flex;
  flex-wrap: wrap;
}

.user-wrapper .social_media ul li{
  width: 45px;
  height: 45px;
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  margin-right: 10px;
  border-radius: 5px;
  text-align: center;
  line-height: 45px;
}

.user-wrapper .social_media ul li a{
  color :#fff;
  display: block;
  font-size: 18px;
}
    </style>
    
</head>
<body>
    
   
    <div class="wrapper">

        
       <div class="section">
        <div class="footer">
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, adipisci! <br> COPYRIGHT 2022 </p>
    </div>
        <div class="n1">
        
            <nav class="navbar navbar-expand-lg bg-light maincont fixing">
            <div class="container-fluid">
                
              <a class="navbar-brand logo" href="#">
                <img src="/images/rwamp_logo_v2.png" alt="Logo" width="100" height="50" class="d-inline-block align-text-top">  </a>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Syllabus
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/pdf/B.Tech-CSE-R-15_Master_Copy_Updated_As%20on%2021.11.2020-website.pdf" download>Computer Science</a></li>
                          <li><a class="dropdown-item" href="#">Electronic & communication</a></li>
                          <li><a class="dropdown-item" href="#">Information Technology</a></li>
                          <li><a class="dropdown-item" href="/pdf/VTUR15-REGULATION.p" download>Electrical </a></li>
                          <li><a class="dropdown-item" href="/pdf/B.Tech%20(%20Mechanical)-%20Curriculum%20&%20Syllabus.pdf" download>Mechanical</a></li>
                          <li><a class="dropdown-item" href="#">BioMedical</a></li>
                          
                        </ul>
                      </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Others
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="contact">Contact Us</a></li>
                    </ul>
                  </li>
                  
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            
                <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="username" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/images/icons8-collaborator-male-30.png" alt="Logo" padding-left="5px" padding-right="30px" width="30" height="24" >
                    {{$data->name}}
                </a>
                    
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#"> {{$data->name}} <br> VTU{{$data->vtu}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"> Log Out </a></li>
                      </ul>
                </div>
                        
                
              </div>
            </div>
          </nav>
        </div>
    <div class="top_navbar">
        
        
      <div class="hamburger">
        <a href="#">
          <i class="fas fa-bars"></i>
        </a>
      </div>
    </div>

    <div class="user-wrapper">
      <div class="left">
          <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg" 
          alt="user" width="100">
          <h4>{{$data->name}}</h4>
           <p>Student</p>
      </div>
      <div class="right">
          <div class="info">
              <h3>Information</h3>
              <div class="info_data">
                   <div class="data">
                      <h4>Email</h4>
                      <p>{{$data->email}}</p>
                   </div>
                   <div class="data">
                     <h4>Phone</h4>
                      <p>9000000000</p>
                </div>
              </div>
          </div>
        
        <div class="projects">
              <h3>Address</h3>
              <div class="projects_data">
                   <div class="data">
                      <h4>Permanent</h4>
                      <p> Prince Hostel, Avadi</p>
                   </div>
                   <div class="data">
                     <h4>Current Address</h4>
                      <p>VelTech University</p>
                </div>
              </div>
          </div>
        
          <div class="social_media">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
      </div>
  </div>
    
       </div>


    <div class="sidebar">
        <div class="profile">
            <h3> {{$data->name}} </h3>
            <p>VTU{{$data->vtu}}</p>
        </div>
        <ul>
            <li>
                <a href="dashboard" >
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Home</span>
                </a>
            </li>
            
            <li>
                <a href="courseplanner" class="active">
                    <span class="icon"><i class="fas fa-user-friends"></i></span>
                    <span class="item"> My Planner</span>
                </a>
            </li>
            <li>
                <a href="gpacalculator">
                    <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                    <span class="item"> GPA Tools</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-cog"></i></span>
                    <span class="item"> Settings </span>
                </a>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-database"></i></span>
                    <span class="item"> Others </span>
                </a>
            </li>
        </ul>
    </div>
    </div>
    
    






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script>
      var hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function(){
document.querySelector("body").classList.toggle("active");
})
</script>

</body>
</html>