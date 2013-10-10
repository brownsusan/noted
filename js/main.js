// $('.note-list').sortable({
	// update : function(event, ui) {
		// console.log("note has moved, an ajax database update should happen");
	// }
// });


$(document).on('click', '.note-edit', function(e) {
	console.log("edit mother fucker");
	// stop children elements from triggering this
	if (e.target !== this) {
		return;
	}
	
	// Switch the view to edit
	//Create variables
	//validate variables
	//ajax call
	
});
