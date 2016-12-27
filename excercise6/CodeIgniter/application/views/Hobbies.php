<!DOCTYPE html>
<html>
<head>
<title>Musouka</title>

<script type="text/javascript">

var image1 = new Image()
image1.src="assets/img/Tumblr1.png"
var image2 = new Image()
image2.src="assets/img/tumblr2.png"
var image3 = new Image()
image3.src="assets/img/tumblr3.png"
var image4 = new Image()
image4.src="assets/img/tumblr4.jpg"
var image5 = new Image()
image5.src="assets/img/tumblr5.jpg"
var image6 = new Image()
image6.src="assets/img/tumblr6.jpg"
var image7 = new Image()
image7.src="assets/img/tumblr7.jpg"
var image8 = new Image()
image8.src="assets/img/tumblr8.jpg"
var image9 = new Image()
image9.src="assets/img/tumblr9.jpg"
var image10 = new Image()
image10.src="assets/img/tumblr10.jpg"
var image11 = new Image()
image11.src="assets/img/tumblr11.jpg"
var image12 = new Image()
image12.src="assets/img/tumblr12.jpg"

</script>

</head>
<body bgcolor="#fcd5e4">
<body>

<img src="assets/img/Tumblr1.png" name="slide" width="1500" height="500">
<script type="text/javascript">
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<12)
step++
else
step=1
setTimeout("slideit()",2500)
}
slideit()
</script>

</body>

<center>
<?php include 'links.php';?>
</html>