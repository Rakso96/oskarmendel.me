var entries = [

	{id:1, "title": "greetings", "body": "Hello world"},
	{id:2, "title": "greetings", "body": "Hello world"},
	{id:3, "title": "greetings", "body": "Hello world"},
];

exports.getBlogEntries = function(){
	return entries;
}

exports.getBlogEntry = function(id){
	for (var i = 0; i < entries.length; i++) {
		if(entries[i] == id) return entries[i];
	};
}