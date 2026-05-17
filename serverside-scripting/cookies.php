<?php
// Set cookie (valid for 1 hour)
setcookie("user", "John", time() + 3600);

// Read cookie (may need refresh)
if(isset($_COOKIE["user"])) {
    echo "Welcome " . $_COOKIE["user"];
} else {
    echo "Cookie not set yet. Refresh page.";
}
?>