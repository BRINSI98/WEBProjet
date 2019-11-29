<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title>Evenements et OFFRES</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<div class="NAVBAR">
		<h1>
			<center>EVENEMENTS ET OFFRES</center>

		</h1>
		<h3>
			<center>
				TOP TABLEAU
			</center>
		</h3>
		<label class="imglabel">
			
			<img src="toptbleau.jpg" alt="logo " class="photo">
		</label>
<form method="POST" action="ajouterevenement.php">
          <label for="title">titre:</label> 
          <input type="text" id="title" name="title">      

         
        
        <br>
        <br>
        <label for="periode">période (en jour):</label>

<input type="number" id="periode" name="periode"
       min="0" max="15">
       <br>
       <br>
       <label for="adresse">adresse:</label> 
          <input type="text" id="adresse" name="adresse">   <br>
       <br>
       <br>
       <label for="description">Description:</label> 
          <input type="textarea" id="description" name="description" size="60">  
          <input type="submit" value="Submit"> 
   </FORM>


</body>
</html>