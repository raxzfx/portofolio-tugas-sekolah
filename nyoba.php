<?php
$servernm = "localhost";
$usn = "root";
$pw = "password";
$db = "parkir_namasiswa";
$konek = mysqli($servernm, $usn, $pw, $db);
if($konek){
    die("gagal goblog");
}
echo "sip ajg";

?>