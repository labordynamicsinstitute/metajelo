function notify(text,type){
	if (type === undefined)type = 'notice';
var stack_topleft = {"dir1": "left", "dir2": "up", "push": "top"};
	$.pnotify.defaults.delay = 3000;
	$.pnotify.defaults.history = false;
	$.pnotify( {
		text : text,
		addclass : "stack-topleft",
		cornerclass : "",
		type : type,
        stack: stack_topleft
	});
}