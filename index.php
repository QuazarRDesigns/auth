<?php
session_start();
require_once 'partials/header.php';

if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'Admin') {
    require 'partials/admin_dashboard.php';
} elseif (isset ($_SESSION['user_username'])) {
        require 'partials/dashboard.php';
} else {
    require 'partials/intro.php';
}

require_once 'partials/footer.php';
?>
</body>
</html>
