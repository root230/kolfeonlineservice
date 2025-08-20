
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Corpatible"content="IE=edge">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>ኮልፌ ደንብ ማስከበር ፅ/ቤት</title>

</head>
<body>
<div class="container my-2">
<table class="table">
<thead class="thead-dark">
<tr>

<th scope="col">ክፍለ_ከተማ</th>
<th scope="col">ወረዳ</th>
<th scope="col">ቀጠና</th>
<th scope="col">X_ኮርዲኔት</th>
<th scope="col">y_ኮርዲኔት</th>
<th scope="col">ኮድ</th>
<th scope="col">ስፋት</th>

<th scope="col">የተረከበው_አካል</th>
<th scope="col">ምርመራ</th>

</tr>
</thead>
<tbody>
<?php    
$hostname="localhost";
$dbuser="root";
$dbpass="";
$dbname="ezyro_38988069_tikoma";
$conn=mysqli_connect($hostname,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("connection is not successfull");}
    $sql="SELECT * FROM user";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
       $ክፍለ_ከተማ=$row["ክፍለ_ከተማ"];
        $ወረዳ=$row["ወረዳ"];
        $ቀጠና=$row["ቀጠና"];
           $X_ኮርዲኔት=$row["X_ኮርዲኔት"];
           $Y_ኮርዲኔት=$row["y_ኮርዲኔት"];
            $ኮድ=$row["ኮድ"];
           $ስፋት=$row["ስፋት"];
          
          
           $የተረከበውአካል=$row["የተረከበው_አካል"];
           $ምርመራ=$row["ምርመራ"];
              
              echo"<tr>
              <td>$ክፍለ_ከተማ</td>
              <td>$ወረዳ</td>
              <td>$ቀጠና</td>
              <td>$X_ኮርዲኔት</td>
              <td>$Y_ኮርዲኔት</td>
              <td>$ኮድ</td>
              <td>$ስፋት</td>
              <td>$የተረከበውአካል</td>
              <td>$ምርመራ</td>
             
              </tr>";
    

    }


?>
</tbody>
</div>
</body>

</html>
