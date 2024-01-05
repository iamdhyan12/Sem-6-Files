<!DOCTYPE html>
<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo "Output 1: ".$hostname;
echo "<br>";
$hostname = gethostbyaddr("10.2.19.28");
echo "Output 2: ".$hostname;

echo "<br>";
$ip = gethostbyname('www.yahoo.com');
echo "Output 3: ".$ip;
echo "<br>";
$ip = gethostbyname('localhost');
echo "Output 4: ".$ip;

echo "<br>";
$var = gethostname();
IF ($var===FALSE) {
    echo "Output 5: "."The function ran but no results were returned!";
} ELSE {
    echo "Output 5: "."The function returned a value: ";
    echo $var;
}
?>

</body>
</html>