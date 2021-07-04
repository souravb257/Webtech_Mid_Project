<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;

}


.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; 
  border-right: 1px solid #000;
   border: 1px solid #000;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
.img{
     padding-left: 70px;
    margin-top: -100px;
    margin-left: 54px;
}

</style>
</head>
<body>

<h2>Edit Profile</h2>

<div class="row">
  <div class="column" style="background-color:#fff;">
    <h2>Account<hr></h2>
            <a href="home.php">Dashboard</a><br>
			<a href="home.php">See order details</a><br>
			<a href="">Edit Profile</a><br>
			<a href="">Change Profile Picture</a><br>
			<a href="">Change Password</a><br>
			<a href="login.php">Logout</a><br>
			<a href="feedback.php">Feedback</a><br>
  </div>
  <div class="column" style="background-color:#fff;">
    
			<legend><h3>FeedBack</h3></legend>
			
			
			<div class="imagebg"></div>
<div class="row " style="margin-top: 50px">
    <div class="col-md-6 col-md-offset-3 form-container">
        <h2>Feedback</h2>
        <p>
            Please provide your feedback below:
        </p>
        <form role="form" method="post" id="reused_form">
            <div class="row">
                <div class="col-sm-12 form-group">
                <label>How do you rate your overall experience?</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="good" >
                    Good
                    </label>
                </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="comments">
                        Comments:</label>
                    <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

                        <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
                </div>
            </div>

        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Posted your feedback successfully!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Sorry there was an error sending your form.

        </div>
    </div>
</div>
					
					
					
				
			
			
	  </div>
</div>

</body>
</html>
