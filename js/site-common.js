jQuery(document).ready(function( $ ) {
	var feed = new Instafeed({
        get: 'user',
		userId: '4082314604',
		accessToken: '4082314604.1677ed0.05fa56beec6a4fc6953f617effc1b010',
		client_id: '10b65a7b8c3c4d3e883e142822c59d1d',
		limit: 8,
		template: '<a href="{{link}}"><img src="{{image}}" alt="{{caption}}"/></a>',
		resolution: 'thumbnail',
	});
	feed.run();
});
