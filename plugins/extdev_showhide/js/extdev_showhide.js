function showhide(){
	var tm = 1500; // time in ms to fadein/fadeout elements
	var main_el = $("[name*='_#sh']");
	var last = null;
	var list = [];
	main_el.each(function(i,e){
		var mark = $(e).prop('name').split('_').pop();
		re = /#(sh\d*)/; // mask for sub params
		t = re.exec(mark);
		if (t !=undefined && t.length) {
			mark = t.pop();
			$(e).live('change',function(el){
				var val = $(e).val();
				var hide = "[name*='_"+mark+"_']";
				var show = "[name$='_"+mark+"_"+val+"']";
				$(hide).parents('tr:visible').fadeOut(tm); // hides all
				$(show).parents('tr').fadeIn(tm); // shows related
			});
			if (mark!=last) {
				list.push(mark);
				last = mark;
			}
		}
	});
	$(list).each(function(i,mark){ // initial hide
		var el = $("[name$='#"+mark+"']");
		if (el.length>1) {
			var val = $("[name$='#"+mark+"']:checked").val(); // for radio
		} else {
			var val = $(el).val(); // for select
		}
		var hide = "[name*='_"+mark+"_']";
		var show = "[name$='_"+mark+"_"+val+"']";
		$(hide).parents('tr').hide(); // hides all
		$(show).parents('tr').show(); // shows related
	});
}

$(function() {
	showhide(); // afterload
	ajaxSuccessHandlers.push(function (){
		showhide(); // after pressing reset or update button
	});
});