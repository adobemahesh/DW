(function(){
	function trk(a){
		if(a){
			var img = new Image();
			img.onload = function(){ img = null};
			img.src = a;
		}
	};
	
	function displayTL1(code){
		var location = document.getElementById("TL1_location") || null;
		if(location){
			location.innerHTML = code;
		} else {
			document.write(code);
		}
	}
	var code = '<style>'+
			   '	.ad-tl2b {text-align:left;font-size:80%;}'+
			   '	.ad-tl2b p.y-fp-pg-controls {display:block;background-position:left -2275px}'+
			   '	.ad-tl2b a { padding-top:0px; }'+
			   '	.ad-tl2b b { font-weight:700; }'+
			   '	.ad-tl1 #tl1_slug {text-align:left;font-size:9px;color:#999999;font-weight:400;padding: 0 0 3px 1px;}'+
			   '</style>'+
			   '<div class="ad-tl2b small">'+
			   '<p id="tl1_slug">Sponsored</p>'+
			   '	<p class="y-fp-pg-controls"><a href="https://ads.yahoo.com/clk?3,eJytUV1vmzAU.TV9iyLA0BFFezAYCCk2M9jN4A0MDcGQoJGVj19fd1tXac-78ue9R-fY9-hg.wVojzWoX2xglI-gMva6uTMqs6pNy9ho-.0e2LZuqWlrm.X51Ll8KfnZeU1z7MD3CKdDdYYf4UFi.85DDCGFrkdb0v4phvc0gf8lnOg60Q9WCJX-GdnwpSYk4tL5CwuwgVHVZMxvI8ZNEoR3zPyOuHpDgsyKWNLHzLNylqu7L.NPga-b5n4fxgcAHwxfDdFdhBy3ZV0M21Jsl6K53bbi1qvSItSSXbMdTs0pamGfXfHuCXkg.p7cRS8ssjTX4kQlNZ7DqGt4sSa4kDktOv8mutzlBw9wjbisH.yK6yOX3GQ9cSj3HZrOa-XSmSBvjRHUcEsBYdTCTEzRgQxHFE6k9UYBoIyZMGL0jg3HDISSsNAiLZ4Jy-bokEl8Ue8L.CF3qcZbf0wDPWIo-UZTTeGpxC0f69PRPHpDJFj-o2aNJzTrUF6TmfajefJMg2jemPVSYoa1mOEJI8Ud6Pc8pStpMyNmZx2vHKizqqu.M2hEwfwzX5KuvOhDeZmXI4JKZ.d6RIrrVE1q12OUWTGTWpzOjXATzpA3PFHVWONX.5UL5j-OXK6fLrwBICDaew==,http://www.olx.in/clothing-accessories-cat-900-ig?invite=yahoo-in_yahoo_120x45_jpg_clothing&utm_source=yahoo&utm_medium=CPC&utm_content=120x45_clothing&utm_campaign=yahoo_banners_yahoo_clothing" role="presentation"target="_blank"><img src="https://s.yimg.com/cv/ae/in/audience/050512/120x45udj1jaia.jpg" width="120" height="45" border="0" alt="" /></a></p>'+
			   '	<p><a href="https://ads.yahoo.com/clk?3,eJytUV1vmzAU.TV9iyLA0BFFezAYCCk2M9jN4A0MDcGQoJGVj19fd1tXac-78ue9R-fY9-hg.wVojzWoX2xglI-gMva6uTMqs6pNy9ho-.0e2LZuqWlrm.X51Ll8KfnZeU1z7MD3CKdDdYYf4UFi.85DDCGFrkdb0v4phvc0gf8lnOg60Q9WCJX-GdnwpSYk4tL5CwuwgVHVZMxvI8ZNEoR3zPyOuHpDgsyKWNLHzLNylqu7L.NPga-b5n4fxgcAHwxfDdFdhBy3ZV0M21Jsl6K53bbi1qvSItSSXbMdTs0pamGfXfHuCXkg.p7cRS8ssjTX4kQlNZ7DqGt4sSa4kDktOv8mutzlBw9wjbisH.yK6yOX3GQ9cSj3HZrOa-XSmSBvjRHUcEsBYdTCTEzRgQxHFE6k9UYBoIyZMGL0jg3HDISSsNAiLZ4Jy-bokEl8Ue8L.CF3qcZbf0wDPWIo-UZTTeGpxC0f69PRPHpDJFj-o2aNJzTrUF6TmfajefJMg2jemPVSYoa1mOEJI8Ud6Pc8pStpMyNmZx2vHKizqqu.M2hEwfwzX5KuvOhDeZmXI4JKZ.d6RIrrVE1q12OUWTGTWpzOjXATzpA3PFHVWONX.5UL5j-OXK6fLrwBICDaew==,http://www.olx.in/clothing-accessories-cat-900-ig?invite=yahoo-in_yahoo_120x45_jpg_clothing&utm_source=yahoo&utm_medium=CPC&utm_content=120x45_clothing&utm_campaign=yahoo_banners_yahoo_clothing"target="_blank">SELL YOUR OLD CLOTHES<br />AT UNBELIEVABLE PRICE!<br /></a></p>'+
			   '</div>';

	displayTL1(code);


}());
