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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        var count=0;
    function gpa(){
        if(btnSubmit){
            var id = document.frm.id.value;
            var name = document.frm.name.value;
            var prog = document.frm.prog.value;
            var subject = document.frm.subject.value;
            var sem = document.frm.sem.value;
            var no = document.frm.no.value;
            var gpa = 0.0;
            var totalGPA = 0.0;
            var totalCredit = 0;
            var status;
    
            if(name==""){
                    alert("Please Enter Name!!");
                    document.getElementsByName("name").focus();
                    return false;
                    }	
    
            if(sem==""){
                    alert("Please Enter Semester!!");
                    document.getElementsByName("sem").focus();
                    return false;
                    }	
    
            for(var i=0;i<no;i++){
                var code = document.getElementsByName("code")[i].value;
                var credit = parseInt(document.getElementsByName("credit")[i].value);
                var grade = document.getElementsByName("grade")[i].value;
    
                if(code==""){
                    alert("Please Enter code!!");
                    document.getElementsByName("code").focus();
                    return false;
                    }
                    if(credit==""){
                    alert("Please Enter credit!!");
                    document.getElementsByName("credit").focus();
                    return false;
                    }
                    if(grade==""){
                    alert("Please Enter Name!!");
                    document.getElementsByName("grade").focus();
                    return false;
                    }
    
                if(grade=="S"){
                    gpa += credit*10;
                    totalCredit += credit;
                }
                if(grade=="A"){
                    gpa += credit*9;
                    totalCredit += credit;
                }
                if(grade=="B"){
                    gpa += credit*8;
                    totalCredit += credit;
                }
                if(grade=="C"){
                    gpa += credit*7;
                    totalCredit += credit;
                }
                if(grade=="D"){
                    gpa += credit*6;
                    totalCredit += credit;
                }
                
                
            }
            totalGPA = gpa/totalCredit;
            if(totalGPA>=6){
                status= "Dean List"
                alert(
    
            "ID: " + id + "\nName: " + name + "\nProgram: " + prog + "\nSemester: " + sem + "\nGPA: " + totalGPA.toFixed(2) + "\nStatus: " + status);
            }
            else{
                alert(
    
            "ID: " + id + "\nName: " + name + "\nProgram: " + prog + "\nSemester: " + sem + "\nGPA: " + totalGPA.toFixed(2));
            ;
            }
            
        }
    }
    </script>
    <title> GPA Tools </title>
    <style>
        td{
    padding: 10px 15px;
    margin: 40px;
    border: 10px;
    font-size: 18px;
    margin: auto;
    font-family: Arial, Helvetica, sans-serif;


}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 10px;
}

button {
    width: 15%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=reset] {
    width: 15%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

input[type=reset]:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    
   
    <div class="wrapper">
        
       <div class="section">

        
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
                        <li><a class="dropdown-item" href="profile"> {{$data->name}} <br> VTU{{$data->vtu}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout"> Log Out </a></li>
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
    <div class="sidebar">
        <div class="profile">
            <h3> {{$data->name}} </h3>
            <p>VTU{{$data->vtu}}</p>
        </div>
        <ul>
            <li>
                <a href="dashboard">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Home</span>
                </a>
            </li>
            
            <li>
                <a href="courseplanner">
                    <span class="icon"><i class="fas fa-user-friends"></i></span>
                    <span class="item"> My Planner</span>
                </a>
            </li>
            <li>
                <a href="gpacalculator" class="active">
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
    <div class="gpaform" style="padding: 10PX;">

    <form name="frm" onsubmit="return false">
		<script>
			function onlyNum(){
				var id = document.frm.id.value;			

				if(isNaN(id)){
					alert("Please Enter Number Only!");
					document.frm.id.value="";
					document.getElementsByName("id").focus();
					return false;
				}
			}
		</script>
		<table>
		<tr>
		<td>VTU Number <td><input type="text" name="id" maxlength="10" value="{{$data->vtu}}" onkeyup="onlyNum()"> 
		</tr>
		<tr>
		<td>Name <td><input type="text" name="name" value="{{$data->name}}"onkeyup="onlyNum()">
		</tr>
		<tr>
		<td>Program <td>Diploma &nbsp;<input type="radio" name="prog" value="Diploma">
					Degree &nbsp;<input type="radio" name="prog" value="Degree" checked> 
		</tr>
        <tr>
            <td>Semester <td><select name="sem">
                        <option value="" style="font-size:medium ;">Select Semester
                        <option value="1">1
                        <option value="2">2
                        <option value="3">3
                        <option value="4">4
                        <option value="5">5
                        <option value="6">6
                    </select>
            </tr>
		<tr>
		<td>Number of subjects <td><input type="text" maxlength="2" value="{{$count}}" size=1 name="subject" id="subject" onkeydown="delTable()" onkeyup="generate()">
		</tr>
		<tr>
		
		</table>
				<table id=genTable align=center>

				
		<script>
			function generate(){
				var x = document.getElementById("subject").value;
				if(count==0){
					if(isNaN(x)){
						alert("Please Enter Number Only!");
						document.frm.subject.value="";
						document.getElementsByName("subject").focus();
						return false;
						}
					else{
						if(x==""){
							document.getElementsByName("subject").focus();
							}
					else{
						document.getElementById("genTable").innerHTML+=
						"<tr align=center><td colspan=4><h1>Calculate GPA</h1></tr><tr align=center><td><b>No.<td><b>Code<td><b>Credit<td><b>Grade</tr>"
						;
						for(var i=0;i<x;i++){
        
						document.getElementById("genTable").innerHTML+=
						"<tr><td>"+(i+1)+"<td><input type='text'  name='code'><td><input type='text'  maxlength=1 size=1 name='credit'><td><select name='grade'>"
					+"<option value=''>Select Grade"
					+"<option value='S'>S"
					+"<option value='A'>A"
					+"<option value='B'>B"
					+"<option value='C'>C"
					+"<option value='D'>D"
				+"</select></tr>";						}
						document.getElementById("genTable").innerHTML+="<input type='hidden' name='no' value="+x+"> ";
					}
					}
				}
				else{
					var genTable = document.getElementById("genTable");
					genTable.innerHTML="";
					count=0;
					document.getElementById("genTable").innerHTML+=
						"<tr align=center><td colspan=4><h1>Calculate GPA</h1></tr><tr align=center><td><b>No.<td><b>Code<td><b>Credit<td><b>Grade</tr>"
						;
					for(var i=0;i<x;i++){
						document.getElementById("genTable").innerHTML+=
						"<tr><td>"+(i+1)+"<td><input type='text' name='code'><td><input type='text' maxlength=1 size=1 name='credit'><td><select name='grade'>"
					+"<option value=''>Select Grade"
					+"<option value='S'>S"
					+"<option value='A'>A"
					+"<option value='B'>B"
					+"<option value='C'>C"
					+"<option value='D'>D"
					
				+"</select></tr>";						}
						document.getElementById("genTable").innerHTML+="<input type='hidden' name='no' value="+x+">"; 
				}
				count++;
			}
			function delTable(){
				var x = document.getElementById("subject").value;
				if(x==""){
					var genTable = document.getElementById("genTable");
					genTable.innerHTML="";
				}
			}
		</script>
		</table>
		<p id="displayResult"></p>
		<button id="btnSubmit" onClick="gpa()">GPA</button>
		<input type="reset">
	</form>
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