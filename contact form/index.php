<html>
<head>
  <title>Contact Form</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

	<form id="contact form">		
		<div class="names">	
  			<label for="fname">First name:</label>

  			<input type="text" id="fname" name="fname">

    		<label for="lname">Last name:</label>

  			<input type="text" id="lname" name="lname"><br>
  		</div>

		<div class="email>">
			<label for="email">Email:</label>

			<input type="text" id="email" name="email"><br>

  			<button type="button" onclick="loadDoc()">Submit</button>
		</div>

    	<div class="message">
    		<label for="message"></label>

  			<textarea id="message" name="message" rows=4 cols=50 placeholder="Write something here..."></textarea> 	  
   	 	</div>
	</form>

	<script>
		function loadDoc() {
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("contact form").innerHTML =
		      this.responseText;
		    }
		  };
		  xhttp.open("GET", "ajax_info.txt", true);
		  xhttp.send();
		}
</script>

</body>
</html>