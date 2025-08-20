<!DOCTYPE html>
<html>
<head>
<title>submit form</title>
</head>

<body>
<h2>ኮልፌ ቀራንዮ ክፍለ-ከተማ ደንብ ማስከበር ፅ/ቤት ተረክቦ የሚጠብቃቸው መሬት ባንክ የገቡ ቦታዎች የሚገኙበት አድራሻ የሚያሳይ መረጃ</h2>
<form action="submit.php" method="post">
ክፍለ_ከተማ:<input type="text"name="ክፍለ_ከተማ"required><br><br>
ወረዳ:<input type="text"name="ወረዳ"required><br><br>
ቀጠና:<input type="text"name="ቀጠና"required><br><br>

X_ኮርዲኔት:<input type="text"name="X_ኮርዲኔት"required><br><br>
y_ኮርዲኔት:<input type="text"name="y_ኮርዲኔት"required><br><br>
ስፋት<input type="text"name="ስፋት"required><br><br>
ኮድ:<input type="text"name="ኮድ"required><br><br>
የተረከበው_አካል:<input type="text"name="የተረከበው_አካል"required><br><br>
ምርመራ:<input type="text"name="ምርመራ"required><br><br>
<input type="submit" value="ላክ">
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ezyro_38988069_tikoma";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id'] ?? '';
$ክፍለ_ከተማ = $_POST['ክፍለ_ከተማ'] ?? '';
$ወረዳ = $_POST['ወረዳ'] ?? '';
$ቀጠና = $_POST['ቀጠና'] ?? '';

$X_ኮርዲኔት = $_POST['X_ኮርዲኔት'] ?? '';
$y_ኮርዲኔት = $_POST['y_ኮርዲኔት'] ?? '';
$ስፋት = $_POST['ስፋት'] ?? '';
$ኮድ = $_POST['ኮድ'] ?? '';
$የተረከበው_አካል = $_POST['የተረከበው_አካል'] ?? '';
$ምርመራ = $_POST['ምርመራ'] ?? '';
if (empty($ወረዳ) || empty($ቀጠና)) { die("Error: ወረዳ and ቀጠና are required."); }

$sql = "INSERT INTO user (ክፍለ_ከተማ,ወረዳ,ቀጠና,X_ኮርዲኔት,y_ኮርዲኔት,ስፋት,ኮድ,የተረከበው_አካል,ምርመራ) VALUES (?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssss",$ክፍለ_ከተማ,$ወረዳ, $ቀጠና,$X_ኮርዲኔት,$y_ኮርዲኔት,$ስፋት,$ኮድ,$የተረከበው_አካል,$ምርመራ);

if ($stmt->execute()) {
    echo "መረጃዎ በትክክል ተመዝግቧል.";
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();

?>
