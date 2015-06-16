	<html> 
	
	<head>
	
	<title> INFO </title>

		</head>

		<body>
		
		<h1>This is a Heading</h1>
		<p>This is a paragraph.</p>


 <link rel="stylesheet" type="text/css" href="cssStyle.css">

		<?php


	$servername = "50.62.209.77:3306"; 
	$username = "ucf_test1";
	$password = "santiago21!"; 
	$dbname = "ucfsurveys_test1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT qId, question, qA1, qA2, qA3, qA4, qA5, qtype FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
    echo "id: " . " " . $row["qId"]. " " . $row["question"]. " " .
   $row["qA1"]. "  " . $row["qA2"]. " " .
    $row["qA3"]. "  " . $row["qA4"].  " ".  $row["qA5"]. " ".  $row["qtype"]."<br>";
    
    
    if(($row["qtype"]) == 1){
	
		echo "dflj "; 
	
	}
	
    
	} 
} else 

{
    echo "0 results";
    
    
    
}

$conn->close();



		?>



		</body>

	</html>