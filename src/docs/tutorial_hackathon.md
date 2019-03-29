# How To Build The Hackathon




Process: Mockup > Website
———————————————

## Table Of Contents

1. Layout: Hackathon
2. Page: Home
3. Build Materials
    1. Topnav
    2. Hero
        - Image
        - Parallax Effect
    3. Dates
        - Cards
    4. Location
        - Google Maps Embed
    5. Stay Updated
        - CiviCRM integration
    6. Special Thanks    
4. Add Brand Assets
5. Write Docs
6. Write Tutorial



## In Depth:


### 1: Hackathon Layout

Within `views/layouts/` I created a new file called `hackathon.html` by duplicating `default.html`

This is it's starting point:

~~~
<!doctype html>
<html lang="">
<head>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{title}}</title>

	{{#if fabricator}}<link rel="stylesheet" href="./assets/fabricator/styles/f.css">{{/if}}
	<!-- strapless styles -->
	<link rel="stylesheet" href="./assets/strapless/styles/strapless.css">

	<!-- FONT AWESOME + GOOGLE FONTS  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

</head>
<body>
	{{> svg}}

	{{#if fabricator}}
		{{> nav.topnav}}

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
	<script src="./assets/strapless/scripts/strapless.js"></script>
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function(event) {
			Strapless.init();
		});
	</script>

</body>
</html>
~~~

After 2.1:

~~~

~~~


### 1.2 Page:

~~~
---
layout: employment
title: Hackathon
subtitle: The Hackathon Subtitle
navIconsOn: true
---
{{> nav.topnav}}
~~~



### 2.1. Build Materials: Topnav

*Materials > Topnav*

Goals:

* Template:
    - Use YAML and moustaches to template
    - icon and non-icon version for the topnav
* Temporary SVG Logo
* Create Hackathon YAML List of Topnav Links
* BONUS: Improve Upon Topnav Code:
    - Explore New Mobile Nav Ideas
        - Replace *Back to top* with sidenav trigger
        - BONUS: Replace Fabricator Sidenav HTML + CSS with Strapless
    - Markup
    - SASS

1. This is our starting point:

~~~
---
title: Top Nav
iconSpotlight: fa-star
iconInterns:   fa-circle
iconAboutPA:   fa-info-circle
iconBenefits:  fa-thumbs-up
iconVeterans:  fa-square-o
---
<nav class="nav primary_navigation" role="navigation">
    <a class="logo" href="#">{{> logos.paLogoEmployment}}</a>
    <div class="links">
        <a href="#" class="navitem"><i class="fa {{iconSpotlight}}" aria-hidden="true"></i> Spotlight</a>
        <a href="#" class="navitem"><i class="fa {{iconInterns}}" aria-hidden="true"></i> Interns</a>
        <a href="#" class="navitem"><i class="fa {{iconAboutPA}}" aria-hidden="true"></i> About PA</a>
        <a href="#" class="navitem"><i class="fa {{iconBenefits}}" aria-hidden="true"></i> Benefits</a>
        <a href="#" class="navitem"><i class="fa {{iconVeterans}}" aria-hidden="true"></i> Veterans</a>
    </div>
    <a class="nav-trigger nav-open">
        <div class="inner"></div>
        <span class="menulabel">MENU</span>
    </a>
</nav>
~~~

2. Our Cleaned Up Template, with updated `{{moustaches}}` and filler front-matter. Restart assemble with `npm start`

~~~
---
title: Top Nav
navURL: http://google.com
navURLlabel: Nav Item
navURLicon: fa-star
navMenuLabel: MENU
---
<nav class="nav primary_navigation" role="navigation">
    <a class="logo" href="#">{{> logos.paLogoEmployment}}</a>
    <div class="links">
        <a href="#" class="navitem">
            {{#if navIconsOn}}<i class="fa {{navURLicon}}" aria-hidden="true"></i>{{/if}}
            {{navURLlabel}}
        </a>
    </div>
    <a class="nav-trigger nav-open">
        <div class="inner"></div>
        <span class="menulabel">{{navMenuLabel}}</span>
    </a>
</nav>
~~~

Note: For the `{{#if navIconsOn}}` portion, `navIconsOn: true` will be specified in the page `views/home.html`

Real Quick, to test if it's working:

~~~
---
layout: hackathon
title: Hackathon
subtitle: The Hackathon Subtitle
navIconsOn: true
---
{{> nav.topnav}}
~~~

<!-- TODO: Add screenshot -->

That done, we won't be using Icons in this project, so we'll leave this off.

~~~
---
layout: hackathon
title: Hackathon
subtitle: The Hackathon Subtitle
navIconsOn: false
---
{{> nav.topnav}}
~~~
