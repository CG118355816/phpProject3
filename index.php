<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Homepage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


.header {
  padding: 20px;
  text-align: center;
  background: #1abc9c;
  color: white;
}


.header h1 {
  font-size: 40px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
}


.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 20px 200px;
  text-decoration: none;
}


.navbar a.right {
  float: right;
}


.navbar a:hover {
  background-color: #ddd;
  color: black;
}


.row {  
  display: flex;
  flex-wrap: wrap;
}



.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  flex: 70%;
  background-color: blueviolet;
  padding: 20px;
}


.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width:100%;
  }
}
</style>
</head>

    <body>
       
        <div class="header">
  <h1>My Webpage</h1>
  <p> Colm Greany </p>
   </div> 

  <div class="navbar">
  <a href="http://localhost:8000/CV.html">My CV</a>
  <a href="http://localhost:8000/interests.html">Interests</a>
  <a href="http://localhost:8000/consultingservices.html">Services</a>
  </div>
        
        <div class="main">
            <center>
           <h1 align="center">Welcome</h1> 
           <h2><a style="color: yellow;"  href="https://github.com/CG118355816/phpProject3">My Github</a></h2>
           <h2><a  style="color: yellow;" href="https://cg118355816.herokuapp.com/">My Heroku</a></h2>
     
     <img src="agenda.jpg" alt="meeting" style="width:1375px;height:600px;">
         </div>
    </body>
</html>
