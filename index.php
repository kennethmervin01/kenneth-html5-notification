<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing</title>
</head>
<body>

<p>After you accept the permission request. A notification will show below the  right  corner of your Screen :) </p>

<div style="border:1px solid #000; padding:10px; width:50%;">
<h4>Code:</h4>
<pre>
	<code>
		document.addEventListener('DOMContentLoaded',function(){
			 notification = create_notification('test','test','icon.png',5);
		     request_permission(notification);		
		});
	</code>
</pre>
</div>



<script src="ken-notification.js" type="text/javascript"></script>
<script>
	document.addEventListener('DOMContentLoaded',function(){
		 notification = create_notification('test','test','icon.png');
	     request_permission(notification);		
	});	
	
</script>


</body>
</html>