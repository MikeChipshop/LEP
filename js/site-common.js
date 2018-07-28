jQuery(document).ready(function( $ ) {
	var feed = new Instafeed({
        get: 'user',
		userId: '3686373352',
		accessToken: '3686373352.845a7b4.8cfb7ad7d9774191870623a8553669e3',
		client_id: '845a7b4b2d8941fd8b98cc6feb3ab3bd',
		limit: 8,
		template: '<a href="{{link}}"><img src="{{image}}" alt="{{caption}}"/></a>',
		resolution: 'thumbnail',
	});
	feed.run();
});
