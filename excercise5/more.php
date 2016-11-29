<!DOCTYPE html>
<html>
<head>
<title>Webprog</title>
<style>
h1{color:yellow;}
body{outline-style: dotted;outline-color: yellow;}
body {background-image: url("c.jpg");}



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgba(255,255,255,0.5);
	position: fixed;
    top: 0;
    width: 100%;
	
}

li  {
    float: left;
	
}

li a  {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	border-right: 1px solid #111;
}

li:hover{
 background-color: yellow;}
 

 
p{

    margin-bottom: 20px;
}

</style>

</head>
<body>

<?php include 'links.php';?>

<h1 style="text-align:center"><br>About me</h1>



<center><p id="asd">IF YOU WERE ANOTHER PERSON WOULD YOU BE FRIENDS WITH YOU?</p>

<button type="button" onclick="document.getElementById('asd').innerHTML = 'Yes , I would even date my self.'">Click Me!</button>
<p id="dsa">MY MIDDLE NAME. </p>
<button type="button" onclick="document.getElementById('dsa').innerHTML = 'CASTRO'">Click Me!</button>

<p id="zxc">SINGLE OR IN A RELATIONSHIP?</p>
<button type="button" onclick="document.getElementById('zxc').innerHTML = 'SINGLE'">Click Me!</button>

<p id="zxy">HOW MANY SIBLINGS DO YOU HAVE?</p>
<button type="button" onclick="document.getElementById('zxy').innerHTML = '1 SISTER & 1 BROTHER'">Click Me!</button>

<p id="zxt">WHAT PHONE DO YOU HAVE?</p>
<button type="button" onclick="document.getElementById('zxt').innerHTML = 'ONEPLUS 3'">Click Me!</button></center>















</body>
</html>