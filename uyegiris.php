 <?php
try {
     $db = new PDO("mysql:host=localhost;dbname=deneme", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}

$username = $_POST['kuladi'];
$password = $_POST['sifre'];

$login = $db->prepare("SELECT * FROM uyeler WHERE kuladi=? AND sifre=?");
$login->execute(array($username, $password));
if ($login->rowCount())
{
    echo "Giriş başarılı.\nHoşgeldin $username" ;
}
else
{
    echo "Giriş başarısız.\nLütfen giriş bilgilerinizi kontrol edip tekrar deneyiniz.";
}

?>