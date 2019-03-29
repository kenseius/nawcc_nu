III. Definitions
----

Real quick, so we're all talking about the same thing, a few definitions:

- **Styles** = Refers to CSS. There's 3 possbilities: CSS, CSS Compiled, and SCSS  

- **`CSS`** = The styles of a website. Accessed via a .css file. It's basically a set of instructions for a browser, telling it how to display the markup (HTML).

- **`SCSS`** = Otherwise referred to as Sass. Sass is a pre-processor, meaning it operates *before* a website would be using the styles. It outputs to a .css file, which is what the browser actually uses to genreate the styles.

 Sass breaks up vanilla CSS into managable, highly customizable and extendable chunks, such as:
 - partials (`_topnav.scss`, `_footer.scss`, etc.)
 - variables (`$slate`, `$topnavHeight`),
 - mixins (`@include hover(){color: $hoverColor}`) then compiles them into one master `styles.css` file.

- **`CSS` Pre-Compiled** = When developing CSS, it's written in a more readable, _expanded_ format. Like so:

	```css
	.style {
		display: block;
		margin: 0 1rem;
	}
	.styleTwo {
		background: $slate;
		color: $wht;
	}
	.styleThree {
		padding: 1rem;
		color: $wht;
	}
	```

- **`CSS` Compiled** =  In order minimize load time, css is _compiled_ down to remove extra spaces in order to save filesize. This is what the file SCSS files compress down into. It's _not_ intended to be used during developing the styles, because it's nearly unreadable.

	```css
	.style{display:block;margin:0 16px} .styleTwo{background:#404040;color:#fafafa} .styleThree{padding:16px;color:#fafafa}
	```
- **Markup** = refers to the HTML.

	```html
	<body>
		<h1>Title</h1>
		<section>
			<h2>Section Title</h2>
			<p>Section Text</p>
		</section>
		<section class="card">
			<div class="outline">
				<h3>Card</h3>
			</div>
		</section>
	</body>
	```			

- **Semantics** = When writing markup (HTML), writing semantic code means using meaningful code tags (`<main>`, `<section>`, `<nav>`, etc.) that describe their function, instead of using non-descript, meaningless containers (`<div>` and (`<span>`).

 Note, this isn't to say you can't ever use `div`s or `span`s, but if there's a more meaningful tag, you should use it.

- **Responsive Web Design** = Given the massive variety of devices, screen sizes, operating systems, and browsers, it's better to build the website to adapt it's styles based on the screensize (via breakpoints), rather than forcing the users to access the site in specific way ("This site will only run on IE8" *shudder* ).

- **Accessability** = Hand-in-hand with the concept of a *Responsive* website, in additon to a variety of a11y coding best practices),  by coding semanticly we can ensure the site is truly responsive, and all of its content can be viewed and accessed through navigation by everyone, whether via mobile touch-screen, a mouse, a keyboard, a screenreader, or any other method. (for more on this, check out [A11y For The Masses](https://una.im/a11y-for-the-masses/#%F0%9F%92%81) )

-**`Style Asset Library`** = The scss files from PA.Gov, and the js plugin, What-Input.

--
