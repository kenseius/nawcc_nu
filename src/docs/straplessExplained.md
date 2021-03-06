Strapless: The Heck Is It?
====

II. How to use Strapless
----



There's a few ways to get started. 

- NPM Repo
- Clone 
- Static Website


TL;DR:

1. Install Strapless (instructions in README)
2. Using the mockups as a guide, build out the site by adjusting styles on a module-by-module basis.
3. The toolkit can be used as reference for how the markup, on a base level, should be composed. Adjust the markup in your own seperate

Strapless SCSS is best compiled locally. The /src/ directory is only used for dev, not final output. See the /dist/ folder for this.

When Working Locally:

- adjust styles in relevant _scss partials
- adjust markup, prototype pages using Handlebars partials
- Adjustments made and saved anywhere will immediately render (or throw an error if done incorrectly)
- markup: this is the guide for the wrapping markup of all components. These are for the Devs to ensure whatever CMS we're using is outputting its data within this exact markup.


How To Layout A Page (The Semantic, Accessable Way)
----

Strapless is built aroud the concept of **Atomic Design**, meaning instead of thinking of a website from the top down ("We need to build a website with 5 pages."), think of it in reverse: Build the individual materials (components, structures, patterns, atoms, etc) first, then sew them together uses Handlebars to pull in materials,

They're structured loosely like this:

- **Layout** 
	- **Pages** - *Conditionally loads materials based on which layout you specify* 
		- **Materials** - *the elements contained on each page* 


The Layout is comprised of the base HTML5 markup, including the `<head>`, and links to the stylesheet and scripts.

~~~html
<!doctype html>
<html lang="">
<head>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{title}}</title>

	{{#if fabricator}}<link rel="stylesheet" href="./assets/fabricator/styles/f.css">{{/if}}
	<!-- toolkit styles -->
	<link rel="stylesheet" href="./assets/toolkit/styles/toolkit.css">

	<!-- FONT AWESOME + GOOGLE FONTS  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

</head>
<body>
	{{> svg}}

	{{#if fabricator}}
		{{> topnav.topnav}}

		{{> f-icons}}
		{{> f-menu}}
		{{> f-control-bar}}
		<div class="f-container">
	{{/if}}


	{% body %}


	{{#if fabricator}}
		</div>
	<script src="./assets/fabricator/scripts/f.js"></script>
	{{/if}}

	<!-- LOOKIT DIS CRAZY JS OMG! -->
	<script src="./assets/toolkit/scripts/toolkit.js"></script>

	<!-- <script src="./assets/toolkit/scripts/jquery.js"></script>
	<script src="./assets/toolkit/scripts/what-input.js"></script>
	<script src="./assets/toolkit/scripts/toolkit.js"></script> -->

</body>
</html>

~~~

The content of each page is inserted at the `{ body }` point. 





### Building Materials (Components)

For each component: 

1. From the list of HTML5 elements, determine the central, overall, or primary **Role**(its function), of the code you're about to write. 
	
2. Review the list of pre-existing components. Then, depending on whether the role already exists, or not, we'll modify via new (or *with utmost caution for the global effect* adjusted) `materials` and new or adjusted `SASS partials`) from the base example. 
	
	- nav
	- main
	- section
	- article 
	- form
	- table
	- aside
	
	
### When Building with Strapless Locally: 

From within `/src/views/pages/`: 

- create a new page by duplicating `default`, and rename the duplicate as you feel led. 
 
- Assuming you've already built every component (both the material and SASS partial) you need, we'll summon the components individually using [Handlebars.js's](handlebarsjs.com) `{{moustaches}}`, some YAML to auto-generate and auto-iterate relevant components as needed (because DRY) to uniquely and rapidly modify each to meet your needs. 


### How to Access The Code Output By The Custom Pages

Strapless is using Fabricator to output the static html into the `/dist/` folder in real time (or, at least, as fast as your compiler can manage), so whenever you feel like your pages are previewing exactly how you'd like, you can either begin the Integration stage, or if you don't need anything besides a static site, you're ready to link it together.

- to cut down on compilation time, keep your code trim, and your `images` folder tiny as possible. Compress, use SVG, use a CDN, use whatever method you can to bring this to a minimum. [path/to/doc](path/to/doc)

--
 
### A Natural Checkpoint

In terms of displaying content, there's two types of websites:

- Static 
- Dynamic

While you edit and build your assets and pages, Strapless is auto-generating a *static HTML website*, which lives in the `/dist/` directory .
- This means it'll work as-is, out the box, though it isn't necessarily optimized for one usage or another. Use this as a point of reference, or as a launching point for integrating with a CMS or 3rd-party framework. 
- You can also use front-matter and YAML data files to template around specific entry points. (More on this: [/link/to/doc](/path/to/doc) )
 
-- 
 
3. Integration: Download the template you need, depending on your usage. 

 - Whatever Categorizes These
     - Microsoft: Razor/MVC/asp.net/etc.
     - App Engine
 - CMS: 
 	 - Sharepoint
 	 - Wordpress (php)
 	 - Drupal   
 - 3rd Party Framework: 
 	 - Bootstrap (App Engine)
     - Foundation  
 - Other Pattern Library tools: 
     - [http://patternlab.io/](http://patternlab.io/) 

4. Wrap It Up: 

 - We'll be working with contents of the `/dist/` folder. 
 - Connect **Hyperlinks**
 - Go through a few end-of-development checklists [path/to/doc](path/to/doc) 
 - **Adjust filepaths:** Depending on how things are configured with your webhost and your usage of the site, you may need to adjust the reference urls. [/link/to/doc](/path/to/doc)

 Add the following files to your page:

~~~html
<link rel="stylesheet" href="assets/toolkit/styles/toolkit.css">
~~~

~~~html
<script src="assets/toolkit/scripts/toolkit.js"></script>
~~~


5. Success! :)


