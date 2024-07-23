<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
</form>
<pre>
    <?php
        system("ls -al");
    ?>
</pre>
</body>
</html>
