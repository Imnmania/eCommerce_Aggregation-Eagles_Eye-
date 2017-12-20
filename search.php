

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta charset="utf-8">

	<title>Search Results</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content2">
	
		
		<p id="img_cont">
  <a href="#"><img src="./Bdoom.jpg" style="width:300px; "/></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="./index.php"><img src="./home.png" style="width:150px; " /></a>

</p>
		
		
		<div class="scrollable">
<table class="blueTable">
<thead>
<tr>
<th WIDTH="307">Product Name</th>
<th WIDTH="154">Price</th>
<th WIDTH="815">Description</th>
<th WIDTH="170">Link</th>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="3">

</td>
</tr>
</tfoot>
</table>
</div>

<div class="unscrollable">
<table class="blueTable">

<tbody>
	
<?php
	
    $conn = mysqli_connect("localhost", "root", "", "eagleseye");
   
    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_error();
    }
 
    error_reporting(0);
 
    $output = '';
   
    if(isset($_GET['q']) && $_GET['q'] !== ' '){
        $searchq = $_GET['q'];
       
        $q = mysqli_query($conn, "SELECT * FROM bagdoomdata NATURAL JOIN bagdoomlink WHERE title LIKE '%$searchq%' ORDER BY price DESC") or die(mysqli_error());
        $c = mysqli_num_rows($q);
        if($c == 0){
            $output = '<h1></br></br></br></br></br>No search results for <b>"' . $searchq . '"</b></h1>';
        } else {
            while($row = mysqli_fetch_array($q)){
            //    $id = $row['id'];
                $title = $row['title']; 
				$price = $row['price'];
				$details = $row['details'];
            //   $desc = $row['description'];
            //    $link = $row['link'];
			 $AdLink = $row['AdLink'];
               
                $output .= // '
                           // <h1>' . $title . '</h1> </br>  <h4>' . $price . '</h4>
							//<h4>' . $details . '</h4> </br> </br>';
							
							
'<tr>
<td WIDTH="300">' . $title . '</td>
<td WIDTH="150">' . $price . '</td>
<td >' . $details . '</td>
<td WIDTH="150">' . '<a href= "'. $AdLink .'" target="_blank"><img src=" ./go.png  "alt="LINK" style="width:60px;height:60px;border:0;"> </a> </td>
</tr>
<tr>
 ';

                                
                            
            }
        }
    } else {
        header("location: ./");
    }
    print("$output");
    mysqli_close($conn);
 
?>
</tbody>
</table>
	</div>
	</div>
	
	</br></br></br>
	
	
	<div class="content2">
	
		<p id="img_cont">
  <a href="#"><img src="./broy3.png" style="width:300px; "/></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="./index.php"><img src="./home.png" style="width:150px; " /></a>

</p>
		<div class="scrollable">
<table class="blueTable">
<thead>
<tr>
<th WIDTH="307">Product Name</th>
<th WIDTH="154">Price</th>
<th WIDTH="815">Description</th>
<th WIDTH="170">Link</th>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="3">

</td>
</tr>
</tfoot>
</table>
</div>

<div class="unscrollable">
<table class="blueTable">

<tbody>
	
<?php
	
    $conn = mysqli_connect("localhost", "root", "", "eagleseye");
	
	mysqli_set_charset($conn, 'utf8');
   
    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_error();
    }
 
    error_reporting(0);
 
    $output = '';
   
    if(isset($_GET['q']) && $_GET['q'] !== ' '){
        $searchq = $_GET['q'];
       
        $q = mysqli_query($conn, "SELECT * FROM bikroydata NATURAL JOIN bikroylinkparser WHERE title LIKE '%$searchq%' ORDER BY price") or die(mysqli_error());
        $c = mysqli_num_rows($q);
        if($c == 0){
            $output = '<h1></br></br></br></br></br>No search results for <b>"' . $searchq . '"</b></h1>';
        } else {
            while($row = mysqli_fetch_array($q)){
            //    $id = $row['id'];
                $Title = $row['Title']; 
				$Price = $row['Price'];
				$Details = $row['Details'];
            //   $desc = $row['description'];   id<25 AND
                $link = $row['link'];
               
                $output .= // '
                           // <h1>' . $title . '</h1> </br>  <h4>' . $price . '</h4>
							//<h4>' . $details . '</h4> </br> </br>';
							
							
'<tr>
<td WIDTH="300">' . $Title . '</td>
<td WIDTH="150">' . $Price . '</td>
<td >' . $Details . '</td>
<td WIDTH="150">' . '<a href= "'. $link .'" target="_blank"><img src=" ./go.png  "alt="LINK" style="width:60px;height:60px;border:0;"> </a> </td>

</tr>
<tr>
 ';

                                
                            
            }
        }
    } else {
        header("location: ./");
    }
    print("$output");
    mysqli_close($conn);
 
?>
</tbody>
</table>
	</div>
	</div>
</body>
</html>