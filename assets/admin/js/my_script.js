$(document).ready(function() {
  //tooltip;
  $('.tip').tooltip();
  //datepicker
  $("#create_date").datepicker();

  //taginput
  $('#source-tags').tagsinput();

  //String to Slug
  $(document).ready( function() {
	$("#title").stringToSlug({
		setEvents: 'keyup keydown blur',
		getPut: '#slug',
		space: '-'
	});
});

});