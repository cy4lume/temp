<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
</form>
<pre>
    <?php
        system("./flag". ' 2>&1');
    ?>
</pre>
</body>
</html>
