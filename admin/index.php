<?php require('backend/auth.php'); ?>
<?= $firstname; ?><br>
index page
<script>
    window.onload = function() {
        window.location.href = 'views/dashboard_admin.php'
    };
</script>