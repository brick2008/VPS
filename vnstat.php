<?php
exec("vnstati -vs -o vnstati-vs.png;vnstati -d -o vnstati-d.png;vnstati -m -o vnstati-m.png");
echo "<img src='vnstati-vs.png'/><br><img src='vnstati-d.png'/><br><img src='vnstati-m.png'/>";
?>
