<!DOCTYPE html>
<!-- File index.php -->
 <html>
    <head>
        <title>Hello World</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Hello world: apache/php</h1>
        <?php
            $load = sys_getloadavg();
        ?>
            Serverzeit: <?php echo date("c"); ?><br />
            Server utilization (load): <?php echo $load[0]; ?>
    </body>
</html>