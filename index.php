<?
	
	// Set up the amount of possible background images we have.
	// Feels wrong hard-coding it, but I'm not a PHP dev.
	$bgImages = 5;
	
	// See if someone has set a query string to permalink a specific background image, check it is valid.
	
	// first of all let's sanitise any input or default to out-of-range if none present
	$bg = isset($_GET['bg']) ? intval($_GET['bg']) : 0;
	
	// we know $bg is an int one way or the other, so check it's in range and randomise if not
	if ($bg < 1 || $bg > $bgImages) {
		$bg = rand(1,$bgImages);
	}
	
?>
<!DOCTYPE html>
<html lang=en class=bg-<?= $bg ?>>
<head>
	<meta charset=UTF-8>
	<meta name=viewport content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<meta name=apple-mobile-web-app-capable content=yes>

	<title>hry.rbrts.me&mdash;Harry Roberts; web designer and developer, type nerd and trials rider.</title>

	<link rel=stylesheet href=/css/style.css>

	<link rel="shortcut icon" href=/icon.png>
	<link rel=apple-touch-icon-precomposed href=/icon.png>
	
	<script src=http://use.typekit.com/ibv5xmv.js></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script>

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-1856861-10']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
	
</head>
<body>

	<div class=page>

		<h1 class=accessibility>Harry Roberts, web designer and developer</h1>

		<article class=intro>
			<a href=/ class=logo><img src=img/content/logo.png alt="Harry Roberts logo"></a>
			<p class=tagline>Web developer and type nerd<span class=accessibility> from Leeds, UK</span></p>
		</article>

		<article>
			<p>Hi, I&rsquo;m <b>Harry Roberts</b>. I am a 21 year old web designer, developer, writer, speaker, type nerd and trials rider from Leeds, UK. I am currently <b>Senior <abbr title="User Interface">UI</abbr> Developer</b> at BSkyB.</p>
			<p>I share, write and tweet about web development, I am passionate about best practices, ethics and building websites properly, I am on <a href=http://smashingmagazine.com/>Smashing Magazine</a>&rsquo;s Experts Panel and I am a <a href=http://www.thenetawards.com/>.net magazine awards finalist</a>.</p>
		</article>

		<article>
			<h2>Skills and competencies</h2>
			<ul class=tag-list>
				<li>HTML</li>
				<li>CSS</li>
				<li>Performance</li>
				<li>Accessibility</li>
				<li>Usability</li>
				<li><abbr title="User eXperience">UX</abbr></li>
				<li><abbr title="User Interface">UI</abbr></li>
				<li>Typography</li>
				<li>Design</li>
				<li>Development</li>
			</ul>
		</article>

		<article>
			<h2>Sites</h2>
			<dl>
				<dt><a href=http://csswizardry.com/>CSS Wizardry</a></dt>
				<dd>My blog and portfolio, CSS Wizardry is an Alexa top 100,000 ranked website with a host of articles and resources for web designers and developers&hellip;</dd>
				
				<dt><a href=http://harryroberts.co.uk/>harryroberts.co.uk</a></dt>
				<dd>My (much neglected) personal website for hosting my trials videos and the like&hellip;</dd>
			</dl>
		</article>

		<article>
			<h2>Speaking</h2>
			
			<ol>
                <li><a href=http://thedigitalbarn.co.uk/><s><cite>Digital Barn</cite>&mdash;11 February, 2012. Barnsley, UK</s></a></li>
                <li><a href=http://2012.front-trends.com/><cite>Front-Trends</cite>&mdash;26&ndash;27 April, 2011. Warsaw, Poland</a></li>
			</ol>
		</article>

		<article>
			<h2>Writing</h2>
			<p>Handpicked articles of mine&hellip;</p>
			
			<ul>
                <li><a href=http://csswizardry.com/2011/10/reset-restarted/>Reset restarted</a></li>
                <li><a href=http://csswizardry.com/2011/09/writing-efficient-css-selectors/>Writing efficient CSS seletors</a></li>
				<li><a href=http://coding.smashingmagazine.com/2011/08/26/writing-css-for-others/>Writing CSS for others<small>&mdash;Smashing Magazine</small></a></li>
				<li><a href=http://coding.smashingmagazine.com/2011/03/14/technical-web-typography-guidelines-and-techniques/>Technical Type Tips<small>&mdash;Smashing Magazine</small></a></li>
				<li><a href=http://csswizardry.com/2010/10/your-logo-is-an-image-not-a-h1/>Your logo is an image, not a <code>&lt;h1&gt;</code></a> and <a href=http://csswizardry.com/2011/08/more-logo-markup-tips/>More logo markup tips</a></li>
				<li><a href=http://csswizardry.com/2011/01/html5-and-text-level-semantics/>HTML(5) and text-level semantics</a></li>
				<li><a href=http://csswizardry.com/2011/06/namespacing-fragment-identifiers/>Namespacing fragment identifiers</a></li>
				<li><a href=http://csswizardry.com/2011/08/building-better-grid-systems/>Building better grid systems</a></li>
			</ul>
		</article>

		<article>
			<h2>Out and about</h2>
			<p>Follow/stalk me on the following:</p>
			
			<ul class="social cf">
				<li class=twitter><a href=http://twitter.com/csswizardry title="My CSS Wizardry Twitter account">Twitter</a></li>
				<li class=github><a href=http://github.com/csswizardry title="My code on GitHub">GitHub</a></li>
				<li class=dribbble><a href=http://dribbble.com/csswizardry title="Works-in-progress on Dribbble">Dribbble</a></li>
				<li class=forrst><a href=http://forrst.com/csswizardry title="Odd bits and pieces on Forrst">Forrst</a></li>
				<li class=google-plus><a href=http://gplus.to/csswizardry title="Add me on Google+">Google+</a></li>
				<li class=instagram><a href=http://instagrid.me/csswizardry title="My photos on Instagram">Instagram</a></li>
				<li class=zootool><a href=http://zootool.com/user/csswizardry title="Things I bookmark on ZooTool">ZooTool</a></li>
				<li class=vimeo><a href=http://www.vimeo.com/csswizardry title="My videos on Vimeo">Vimeo</a></li>
				<li class=youtube><a href=http://www.youtube.com/csswizardry title="My videos on YouTube">YouTube</a></li>
				<li class=rss><a href=http://feeds.feedburner.com/csswizardry title="Subscribe to CSS Wizardry&rsquo;s RSS Feed">CSS Wizardry RSS</a></li>
			</ul>
			
		</article>

		<article>
			<h2>Projects</h2>
			<ul class=projects>
				<li>
					<a href=http://inuitcss.com/>
						<img src=img/content/projects/inuit.css.gif alt="inuit.css logo">
						<h3>inuit.css</h3>
						<p>inuit.css is a pragmatic, production ready CSS framework which provides developers with a solid baseline for responsive and extensible web projects. <b class=go>Check it out</b></p>
					</a>
				</li>
				<li>
					<a href=http://csswizardry.com/fluid-grids/>
						<h3>Fluid Grids</h3>
						<p><cite>Fluid Grids</cite> is a tiny app that proved a big hit. I created a PHP script that would give me a fluid grid system if I gave it some fixed values. It proved pretty useful so I skinned it up and gave it away. <b class=go>Give it a go</b></p>
					</a>
				</li>
				<li>
					<a href=http://csswizardry.com/in-focus/>
						<h3>in:focus</h3>
						<p><cite>in:focus</cite> is a small Q&amp;A site on which I interview the web&rsquo;s best. <b class=go>Read the interviews</b></p>
					</a>
				</li>
				<li>
					<a href=http://csswizardry.com/resources/>
						<h3>More&hellip;</h3>
						<p>Find even more projects on <b class=go>my resources page</b></p>
					</a>
				</li>
			</ul>
		</article>

		<article>
			
			<h2>Eardrums</h2>
			
			<p>Some of the albums I&rsquo;ve been listening to on Spotify lately.</p>
			
			<ol>
				<li><a href=http://open.spotify.com/album/2j9gluGPzaUvsPI2lDPzYe title="Open with Spotify"><b>High Contrast</b>&mdash;<cite>High Society</cite></a></li>
				<li><a href=http://open.spotify.com/album/1vOQVL8JAx727LFs3qeiPL title="Open with Spotify"><b>Netsky</b>&mdash;<cite>Netsky</cite></a></li>
				<li><a href=http://open.spotify.com/album/6KI0SsHIadRnwR1adIsXMl title="Open with Spotify"><b>London Elektricity</b>&mdash;<cite>Syncopated City</cite></a></li>
				<li><a href=http://open.spotify.com/album/5m1RkwKeU7MV0Ni6PH2lPy title="Open with Spotify"><b>Bonobo</b>&mdash;<cite>Black Sands</cite></a></li>
				<li><a href=http://sinopticmusic.bandcamp.com/album/lunar-c-the-lunar-cd title="View on Bandcamp"><b>Lunar C</b>&mdash;<cite>The Lunar CD</cite></a></li>
			</ol>
			
			<p><a href=http://open.spotify.com/user/csswizardry>Check me on Spotify&hellip;</a></p>
			
		</article>
		
		<article>
			
			<h2>Eyeballs</h2>
			
			<p>A (loose) top five favourite films&hellip; kinda.</p>
			
			<ol>
				<li><a href=http://www.imdb.com/title/tt0398883/ title="View on IMDb"><cite>The Consequences of Love</cite></a></li>
				<li><a href=http://www.imdb.com/title/tt0110413/ title="View on IMDb"><cite>Leon: The Professional</cite></a></li>
				<li><a href=http://www.imdb.com/title/tt0407887/ title="View on IMDb"><cite>The Departed</cite></a></li>
				<li><a href=http://www.imdb.com/title/tt0137523/ title="View on IMDb"><cite>Fight Club</cite></a></li>
				<li><a href=http://www.imdb.com/title/tt0093058/ title="View on IMDb"><cite>Full Metal Jacket</cite></a></li>
			</ol>
			
			<p><a href="http://twitter.com/intent/tweet?text=Hey%20@csswizardry,%20check%20out%20">Recommend me some more&hellip;</a></p>
			
		</article>

		<article>
			<h2>Hit me up&hellip;</h2>
			<p>Feel free to get in touch by either <a href="http://twitter.com/intent/tweet?text=Hey%20@csswizardry,%20">Tweeting at me</a> or sending an email to <a href=mailto:harry@csswizardry.com>hry [at] rbrts [dot] me</a>.</p>
		</article>

		<article>
			<h2>Colophon</h2>
			<p>This hub-site is &copy; Harry Roberts <?= date("Y") ?>. It is built with HTML(5) and CSS(3); the source is available on <a href=https://github.com/csswizardry/hry.rbrts.me>GitHub</a> (poke through, please don&rsquo;t steal) and the idea for it was born from seeing <a href=http://www.antoniocarusone.com/>Antonio Carusone&rsquo;s beautiful personal page</a>. The logo was designed by <a href=http://twitter.com/WengersToyBus>Bryan James</a> and all photography is by <a href=http://twitter.com/suzehaworth>Suzanna Haworth</a>. Hosting is provided by <a href=http://twitter.com/dan_bentley>Dan Bentley</a>.</p>
			
			<h3>Background images</h3>
			<p>All background images are of me and taken by Suzanna Haworth.</p>
			<ul class=images>
				<li class=bg-link-1><a href=http://www.flickr.com/photos/suzannahaworth/4706825697/in/set-72157624290542632 title="Me at Tarty Days trials festival">View background image<span class="accessibility"> one</span></a></li>
				<li class=bg-link-2><a href=http://www.flickr.com/photos/suzannahaworth/4281699291/in/set-72157623228828288 title="Me in Leeds">View background image<span class="accessibility"> two</span></a></li>
				<li class=bg-link-3><a href=http://www.flickr.com/photos/suzannahaworth/4717107886/in/set-72157624315456482 title="Me riding trials in Leeds">View background image<span class="accessibility"> three</span></a></li>
				<li class=bg-link-4><a href=http://www.flickr.com/photos/suzannahaworth/4877345244/in/set-72157624690791690 title="Me climbing Snowdon">View background image<span class="accessibility"> four</span></a></li>
				<li class=bg-link-5><a href=http://www.flickr.com/photos/suzannahaworth/6250747475/in/set-72157627908888806 title="Me on the summit of Ben Nevis">View background image<span class="accessibility"> four</span></a></li>
			</ul>
		</article>
	
	</div>
	
</body>
</html>