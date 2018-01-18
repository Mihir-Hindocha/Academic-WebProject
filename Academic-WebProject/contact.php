<?php
include('includes/header.php');
?>
<head>
	<title>Shubhmangal Greens-Contact</title>
	<script type="text/javascript">
	function validation()
	{	var fno=document.getElementById("fno").value;
		var fno1=/^[A-Ea-e0-5]{1,4}$/;
		var fn1=/^[A-Za-z ""]{1,10}$/;
		var fn2=document.getElementById("fn").value;
		var ad2=document.getElementById("ad").value;
		var ph1=/^[0-9]{10}$/;
		var ph2=document.getElementById("ph").value;
		var mail1=/^[a-zA-Z0-9 . _]+\@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
		var mail2=document.getElementById("mail").value;
		var cmnt2=document.getElementById("cmnt").value;
		if(fno=="")
		{
			document.getElementById("errmsg0").innerHTML="<br>Enter Flat Number you are referring";
			document.getElementById("fno").focus();
			document.getElementById("fno").style.borderColor="red";	
			return false;
		}
		if(fno1.test(fno)==false)
		{
			document.getElementById("errmsg0").innerHTML=" <br>Enter Flat Number (A-E blocks and 101-401/102-402)Example:A102 or B401";
			document.getElementById("fno").focus();
			document.getElementById("fno").style.borderColor="red";	
			return false;
		}
		if(fn2=="")
		{
			document.getElementById("errmsg1").innerHTML=" <br>Enter Name";
			document.getElementById("fn").focus();
			document.getElementById("fn").style.borderColor="red";
			return false;
		}
		
		if(fn1.test(fn2)==false)
		{
			document.getElementById("errmsg1").innerHTML=" <br>Enter Valid Name";
			document.getElementById("fn").focus();
			document.getElementById("fn").style.borderColor="red";	
			return false;
		}	
		if(ad2=="")
		{
			document.getElementById("errmsg2").innerHTML="<br>Enter Address";
			document.getElementById("ad").focus();
			document.getElementById("ad").style.borderColor="red";	
			return false;
		}
		if(ph2=="")
		{
			document.getElementById("errmsg3").innerHTML=" <br>Enter Number";
			document.getElementById("ph").focus();	
			document.getElementById("ph").style.borderColor="red";
			return false;
		}
		if(ph1.test(ph2)==false)
		{
			document.getElementById("errmsg3").innerHTML=" <br>Enter Valid Number";
			document.getElementById("ph").focus();
			document.getElementById("ph").style.borderColor="red";	
			return false;
		}	
		if(mail2=="")
		{
			document.getElementById("errmsg4").innerHTML=" <br>Enter Email Address";
			document.getElementById("mail").focus();
			document.getElementById("mail").style.borderColor="red";		
			return false;
		}
		if(mail1.test(mail2)==false)
		{
			document.getElementById("errmsg4").innerHTML=" <br>Enter Vaid Email Address";
			document.getElementById("mail").focus();
			document.getElementById("mail").style.borderColor="red";	
			return false;
		}
		if(cmnt2=="")
		{
			document.getElementById("errmsg5").innerHTML="<br> This Field Cannot Be Blank";
			document.getElementById("cmnt").focus();
			document.getElementById("cmnt").style.borderColor="red";
			return false;	
		}
		else
		{
			document.contact.submit();
		}
	}
	function Blur()
		{
			var fno=document.getElementById("fno").value;
			var fno1=/^[A-Ea-e0-5]{1,4}$/;
			var fn1=/^[A-Za-z ""]{1,10}$/;
			var fn2=document.getElementById("fn").value;
			var ad2=document.getElementById("ad").value;
			var ph1=/^[0-9]{10}$/;
			var ph2=document.getElementById("ph").value;
			var mail1=/^[a-zA-Z0-9]+\@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
			var mail2=document.getElementById("mail").value;
			var cmnt2=document.getElementById("cmnt").value;
			
			if(fno!="")
			{
				document.getElementById("errmsg0").innerHTML="";
				document.getElementById("fno").style.borderColor="";
			}
			if(fno1.test(fno)==true)
			{
				document.getElementById("errmsg0").innerHTML="";
				document.getElementById("fno").style.borderColor="";
			}
			if(fn1.test(fn2)==true)
			{
				document.getElementById("errmsg1").innerHTML="";
				document.getElementById("fn").style.borderColor="";
			}
			if(ad2!="")
			{
				document.getElementById("errmsg2").innerHTML="";
				document.getElementById("ad").style.borderColor="";
			}
			if(ph1.test(ph2)==true)
			{
				document.getElementById("errmsg3").innerHTML="";
				document.getElementById("ph").style.borderColor="";
			}
			if(mail1.test(mail2)==true)
			{
				document.getElementById("errmsg4").innerHTML="";
				document.getElementById("mail").style.borderColor="";
			}
			if(cmnt1.test(cmnt2)==true)
			{
				document.getElementById("errmsg5").innerHTML="";
				document.getElementById("cmnt").style.borderColor="";
			}
			
		}
</script>

</head>
	
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-7">
			<h2 align="center">Contact Form</h2>
				<form  name="contact" method="post" action="admin/inquiry.php">
				  <table width="100%">
					<tr>
					  <td class="body" id="Flat"><strong>
						<label for="FlatNo">FlatNo:</label>
						</strong></td>
					  <td><input name="flatno" type="text" size="40" id="fno" onBlur="Blur()" ><span id="errmsg0" ></span></td>
					</tr>
					<tr>
					  <td class="body" id="Contact"><strong>
						<label for="FullName">Full Name:</label>
						</strong></td>
					  <td><input name="name" type="text" size="40" id="fn" onBlur="Blur()" ><span id="errmsg1" ></span></td>
					</tr>
					<tr>
					  <td class="body" id="Address"><strong>
						<label for="Address">Address:</label>
						</strong></td>
					  <td><input name="address" type="text" size="40" id="ad" onBlur="Blur()" /><span id="errmsg2"></span></td>
					</tr>
					<tr>
					  <td class="body" id="Phone"><strong>
						<label for="Phone">Phone:</label>
						</strong></td>
					  <td><input name="phone" type="text" size="40" id="ph" onBlur="Blur()" /><span id="errmsg3"></span></td>
					</tr>
					<tr>
					  <td class="body" id="Email"><strong>
						<label for="Email">Email:</label>
						</strong></td>
					  <td><input name="email" type="text" size="40" id="mail" onBlur="Blur()"/><span id="errmsg4"></span></td>
					</tr>
					<tr>
					  <td class="body" id="Comments"><strong>
						<label for="Comments">Questions/Comments:</label>
						</strong></td>
					  <td><textarea name="comments" cols="32" rows="6" id="cmnt" onBlur="Blur()"></textarea>
					  <span id="errmsg5"></span></td>
					</tr>
					<tr>
					  <td></td>
					  <td><input type="submit" name="submit" class="button" value="Send Now"onclick="return validation()"></td>
					</tr>
				  </table>
				</form>
		</div>
			<div class="col-md-3">
				<h2>Contact Information </h2>
				<?php
				$con = mysqli_connect("localhost", "root", "", "admin");
				if ($con == false) {
					mysqli_error($con);
					exit();
				}
				$qr = "select address,phone,fax,email,website from contact";
				$r = @mysqli_query($con, $qr);
				if ($r) {
					while ($res = mysqli_fetch_array($r)) {
						echo"<p><b>Address:</b><br/>".$res["address"]."</p>";
						echo"<p> 
						<span><img src='images/ico-phone.png' alt='' width='20' height='16' hspace='2'/> 
						<b>Phone:</b></span>".$res["phone"]."<br />
						<span><img src='images/ico-fax.png' alt='' width='20' height='16' hspace='2'/>
						<b>Fax:</b></span>".$res["fax"]."<br />
						<span><img src='images/ico-website.png' alt='' width='20' height='16' hspace='2'/> 
						<b>Website:</b></span> <a href='http://".$res["website"]."'>".$res["website"]."</a><br />
						<span><img src='images/ico-email.png' alt='' width='20' height='16' hspace='2'/> 
						<b>Email:</b></span>
						<a href='mailto://".$res["email"]."'>".$res["email"]."</a><br />
						</p>";
					}
				} else {
					echo mysqli_error($con);
					echo'<br>Query:' . $qr;
				}
				mysqli_close($con);
				?>
			</div>
	</div>
</div>
</body>
<?php
include('includes/footer.php');
?>
