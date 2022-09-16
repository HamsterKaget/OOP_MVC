<?php 
require("./SiswaRpl.php");
$SiswaRpl = new SiswaRpl("123123", "Budi", 2006, "Depok", "Pengembangan Android");
$SiswaRpl->CetakData();
echo $SiswaRpl->judullap;

?>