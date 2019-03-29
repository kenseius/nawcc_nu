# code philosophy

1. The code must be as semantic as possible
2. always use the least amount of markup possible. In practice, this constantly means removing unnecessary containers. By coordinating with the SCSS, we can determine which HTML brackets and classes are unnecessary.

 For example, the goal of the below code is to create a full-width section with a centered title, vertical padding, and a white background:

		// css
		body {background: $wht;}
		.wrapper {
			display:block;

		<!-- html -->
		<div class="wrapper">
			<div class="title white_background">
				<h1 class="bold center">Title</h1>
			</div>  
		</div>

 In this case,

3. this includes using as few classes or IDs as possible. It is often better simply use a parent class to define it's children, provided that this practice is maintained.
4.  avoid generic classes. Instead, incorporate the style into a more meaningful class. In the above example, h1 doesn't need the bold or center class. Instead, .nav > h1 {font-weight: bold; text-align: center;}.
5. always write neat code Not only does this make the code more readable, which is helpful for collaboration, but it makes it more manageable.
6. it's a work in progress code can always be improved. this is intended to be built in many small interative steps

When coding:

If you're going to use a div or a span, decide first if there isn't a more meaningful HTML5 wrapper (like `<section>` or `<nav>`).

--

For HTML5 and CSS3 DOCUMENTS:

// code indent as the romans do

for scanability, to keep things tidy, and to signal that a block of code is complete.

	a { color: $slate; border:2px solid $slate; }

when a block of code is being worked on, open the brackets.  

	a {
		color: $slate;
		border:2px solid $slate;
		background: $wht;
	}

when coding within pre-existing code-blocks, adhere to the patterns in the local document, or improve them to fit the global standard (whatever we define that as).

as a general rule, whoever authored the majority of that particular section (or document) of the code sets these patterns through the act of writing the code.

Of course, this does not necessarily apply to other programing languages.

aside note: changing indent patterns or comment patterns should happen on a document-level (unify at least the document code while a universal standard is decided upon) and usually really would only ever also mean an audit, rewrite, change and/or removal of the code, so to keep it simple: just indent to convey inheritance if nesting styles.


--

#html / css3

Getting Started:

1. install node.js  
* install npm  
	* installing gulp and dependencies
* install gulp  
	* gulpfile
	* dependencies  
* install sass
* create html5 file structure
* add in components
* fill with content
* adjust styles as needed

##sass

sass file structure:

	/sass/
 		/base
 			/global  
 				_global.scss
 				_typography.scss
 			/layout  
 				_susy.scss
 				_vertical-rhythm.scss
 				_breakpoints.scss
 				_layout.scss  
 			_reset.scss
 			_mixins.scss
 			_variables.scss
 			_helpers.scss
 		/components
 			/forms
 				_forms.scss
 				_inputs.scss
 				_labels.scss
 				_formgroups.scss
 				_checkboxes
 				_validation.scss
 			/nav
 				_backToTop.scss
 				_topnav.scss
 			/search
 				_pagination.scss
 				_search.scss
 				_searchResults.scss
 			_alerts.scss
 			_buttons.scss
 			_footer.scss
 			_hero.scss
 			_icons.scss
 			_loading-spinners.scss
 			_media-object.scss
 			_metadata.scss
 			_tables.scss
 			_tooltips.scss
 		/pages
 		/vendor
