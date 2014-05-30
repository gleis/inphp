<html>
<head><title>ops test site</title>
 <script type="text/javascript">
            function getComputerName() {
                var WshNetwork = new ActiveXObject("WScript.Network");
                document.writeln("Computer Name = " + WshNetwork.ComputerName + "<br />");
            }
        </script>
</head>
<body  onload="javascript: getComputerName()">
<script>
document.write("hash: "+location.hash+"<br>");
document.write("host: "+location.host+"<br>");
document.write("hostname: "
  +location.hostname+"<br>");
  // combine with line above
document.write("URL: "+location.href+"<br>");
document.write("pathname: "
  +location.pathname+"<br>");
  // combine with line above
document.write("port: "+location.port+"<br>");
document.write("protocol: "
  +location.protocol+"<br>");
  // combine with line above
document.write("search: "+location.search);
</script>
<b>
<?php
echo gethostname(); // may output e.g,: sandie

// Or, an option that also works before PHP 5.3
echo php_uname('n'); // may output e.g,: sandie
?>
</b>
<br><br><br>
<a href="page2.php">page 2</a>
</body>
</html>
