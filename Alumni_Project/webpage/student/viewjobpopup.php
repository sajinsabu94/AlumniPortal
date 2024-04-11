<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../../images/favicon.png"/>
	<title>Alumni Survey</title>
	<link type="text/css" href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="../../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../../bootstrap/css/datepicker.css" rel="stylesheet">
	<link type="text/css" href="../../css/theme.css" rel="stylesheet">
	<link type="text/css" href="../../images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed;  /*Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 0px; /* Location of the box */
    /*left: 500px;*/
	margin-top: 120px;
    top: 0;
    width: 30%; /* Full width */
    /*height: 100%;  Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
	/*margin-top: 100px;*/
    padding: 0px;
    border: 1px solid #888;
    /*width: 20%%;*/
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>
</head>
<body>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn" class="btn btn-primary">Open Modal</button>

<!-- The Modal -->
<div class="modal" id="myModal">

  <!-- Modal content -->
  
  <div class="modal-content">
    <div class="modal-header">
    	<span class="close">&times;</span>
    	<p>Modal..</p>
    </div>
    <div class="modal-body">
          <p>Some text in the modal.</p>
          <div>
          	<label>Register Number</label>
          	<input type="text" id="Reg" name="Reg" placeholder="Register Number" values="">
          </div>
          <div>
          	<label>Name</label>
          	<input type="text" id="name" name="name" placeholder="Name" values="">
          </div>
          <div>
          	<label>Mail id</label>
          	<input type="text" id="mail" name="mail" placeholder="Mail Id" values="">
          </div>
          <div>
          	<label>Phone Number</label>
          	<input type="text" id="phone" name="phone" placeholder="Phone Number" values="">
          </div>
             <center>
               <button type="submit" class="btn btn-primary" name="apply" >Apply</button>
             </center>            
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

