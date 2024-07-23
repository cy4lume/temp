<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
</form>
<pre>
    <?php
        system("cd ..");
        system("ls -al", $result);
        echo $result;
    ?>
</pre>
</body>
</html>
