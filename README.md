# kenneth-html5-notification
JS plugin that creates a desktop notification using HTML5 Notification API.


#Instruction:
1) download ken-notification.js and  make it external js of your page.<br />
2) then add this script 

<pre>
	<code>
		document.addEventListener('DOMContentLoaded',function(){
			 notification = create_notification('test','test','icon.png');
		     request_permission(notification);		
		});
	</code>
</pre>

#Parameters
create_notification(title,content,icon_url,seconds)
<ul>
  <li>title - title of your notification</li>
  <li>content - the body of your notification</li>
  <li>icon_url - the path of your icon image in notification</li>
  <li>seconds - number of seconds that the notification will fadeout. 
  If the  seconds parameter is equal to 0(zero) or no value  , the notification will stay the screen until the user hit the  close button</li>
</ul>
