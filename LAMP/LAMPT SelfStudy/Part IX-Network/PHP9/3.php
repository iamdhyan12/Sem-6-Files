<!DOCTYPE html>
<?php
echo "Prevent page caching";
// Date in the past
header("Expires: Mon, 7 April 2019 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>

</body>
</html>