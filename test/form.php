<!DOCTYPE HTML>

<HEAD>
</HEAD>

<BODY>
<h1 style="text-align:center">This form is going to copy the name size and gender when you hit the sumbit button on another page.</h1>
<form action ="form_script.php" method="POST">



<p>Name: <input type="text" name="name" size="30"/></p>





<p>Shirt Size: <select name="size"> <option value="small">Small</option>
                                    <option value="medium">Medium</option>
									<option value="large">Large</option>
			   </select>
</p>






<p>Gender:<input type="radio" name="gender" value="girl"/>Girl
		  <input type="radio" name="gender" value="boy"/>Boy 
</p>






<input type ="submit" name="submit" value="Submit Button"/>

</BODY>

</HTML>