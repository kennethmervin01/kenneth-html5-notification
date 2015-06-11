/**
Author: Kenneth Mervin Enriquez
Plugin Name: Kenneth's Html5 Notification 
Url:
**/

/**
 * Check if the browser support html5 notifications	
*/
function browser_support(){
	if(!("Notification" in window)){
		alert('Notification not supported');
		return;
	}
}

function request_permission(notification){
	Notification.requestPermission(function(permission){
		notification;
	});
}

function create_notification(title,body,icon_url,time){
	var notification =  new Notification(title,{body:body,icon:icon_url,dir:'auto'});
	if(time > 0){
		seconds = time * 1000;
		setTimeout(function(){
		notification.close();
		},seconds);
	}
}



