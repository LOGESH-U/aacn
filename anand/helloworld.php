<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>AAG</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
 
<title>How to put PHP in HTML- Date Example</title>
</head>
<body>
<div>This is pure HTML message.</div>
<div>Next, we’ll display today’s date and day by PHP!</div>
<div>
<?php
echo 'Today’s date is <b>' . date('Y/m/d') . '</b> and it’s a <b>'.date('l').'</b> today!';
?>
</div>
<div>Again, this is static HTML content.</div>
</body>
</html>