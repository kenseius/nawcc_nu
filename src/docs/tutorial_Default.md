Tutorial
----

My Steps As I Create the "Default" Styles

1. Make a Backup
2. Planning

	My Plan:
	1. Create Strapless Brands Assets
	2. Create A Introduction Page, with a Hero, and several Fullscreen & unique screens

3. Views > New Folder (strapless) > Intro.html   
	I copied the contents of the Employment Benefits page to the new intro.html page

	```html
	---
	layout: employment
	title: Strapless
	subtitle: A Robust Anti-Framework Frontend Asset Toolkit
	employment: true
	heroClass: hero_Benefits
	benefits: true

	title_JobCards: Job Cards
	subtitle_JobCards: Fill out a job card, & receive email notifications about available jobs that interest you.
	CTA_JobCards: View Jobs & Apply

	title_OpenJobs: Open Jobs
	subtitle_OpenJobs: Opportunities across a wide variety of occupations.
	CTA_OpenJobs: View Jobs & Apply

	---
	{{> topnav.topnav}}
	{{> heros.hero}}
	{{> tabs_ButtonBar}}
	{{> typography.article}}
	```


4. I started modifying the files to create what I wanted. I need to change the layout of the page to `default`, and remove the unused frontmatter. I'll be creating unique components for strapless, in their own directory `src/materials/strapless`
5. NOTE: As it turns out, each material subdirectory needs a topnav page _with the same name_ to correspond (if there isn't one, it returns a 404.). So, I ended up making a toplevel page `src/views/strapless.html`. It'll begin here instead of in `src/views/strapless/intro.html`
6. I'll start with the hero. I first navigate to `materials/components/hero.html`

	```html
	---
	notes: |
	 To change the banner appearance, change the class. The classes are defined in .hero.scss.
	---
	<section class="hero {{heroClass}}">
	    <div class="outline">
	        <h1>{{title}}</h1>
	    	<p>{{subtitle}}</p>
	    </div>
	</section>
	```

7. Because I intend to use an **SVG logo**, using the **SVG logo template**, and I'm just trying to prototype quickly, (I need to organize the current svg.html into a seperate `svg_employment.html` file, and make a decision about how we'll be sorting individual components from site to site) I'm going to use the `hero_SVG.html` template, as it contains an embedded svg already.

```html
<header class="hero">
    <h1 class="hidden">{{title}}</h1>
    <svg id="f-icon-styleguideLogo" class="svg" viewBox="0 0 146.4 24">
		<defs>
			<style>
    			<![CDATA[
    				@import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans+Condensed:700');
    				.logoTitle {font-family: 'Open Sans Condensed', sans-serif; font-size: 10.34px; font-weight: 700; }
    				.logoSubTitle {font-family: 'Montserrat', sans-serif; font-size: 4px; letter-spacing: 0.01em;}
    				.keystone, .logoTitle, .logoSubTitle {fill: #fafafa; text-transform: uppercase;}
    				.f-icon-aalogo_nav .keystone, .f-icon-aalogo_nav .logoTitle {fill: #fafafa;}}
    			]]>
			</style>
		</defs>
    	<title>PBPP Keystone + {{title}} - Logo with Subtitle</title>
    	<path class="keystone" d="M15.13,7.06h-.9v1.8H15c.87,0,1.56-.08,1.56-.91s-.48-.89-1.39-.89ZM16.2,5.68c0-.62-.37-.73-1.16-.73h-.82V6.5H15c.83,0,1.2-.26,1.2-.82Zm1,2.23c0,1.06-.68,1.51-2,1.51H13.59v-5h1.49c1.35,0,1.78.37,1.78,1.15a1.08,1.08,0,0,1-.78,1.13A1.15,1.15,0,0,1,17.2,7.92Zm5.29-3h-.8v2h.7c.88,0,1.29-.16,1.29-1S23.25,5,22.49,5Zm1.88.93c0,1.13-.55,1.6-1.87,1.6h-.8V9.42h-.64v-5h1.47c1.18,0,1.84.38,1.84,1.5ZM18.84,5H18v2h.7c.88,0,1.29-.16,1.29-1S19.59,5,18.84,5Zm1.88.93c0,1.13-.55,1.6-1.87,1.6H18V9.42H17.4v-5h1.47c1.18,0,1.84.38,1.84,1.5ZM11.37,5h-.8v2h.7c.88,0,1.29-.16,1.29-1S12.13,5,11.37,5Zm1.88.93c0,1.13-.55,1.6-1.87,1.6h-.8V9.42H9.93v-5h1.47c1.18,0,1.84.38,1.84,1.5ZM2.82,9.57l.87,4a19.14,19.14,0,0,1,7.9-2.66A19.28,19.28,0,0,0,2.82,9.57Zm10.54,1.61a19.4,19.4,0,0,1,8.91,9.21L23.7,14a19.24,19.24,0,0,0-10.33-2.78Zm-.84-.4a19.69,19.69,0,0,1,11.27,2.73L26,3.59H19L19.83.25H7.66l.79,3.34H1.5L2.73,9.15a19.78,19.78,0,0,1,9.79,1.64Zm9.6,10.31-.59,2.65H6L3.79,14a18.75,18.75,0,0,1,8.65-2.75,19,19,0,0,1,9.68,9.88Z"/>
        <text class="logoTitle" transform="translate(30.18 12.93)">{{title}}</text>
    	<text class="logoSubTitle" transform="translate(30.59 18.89)">THE PA.GOV TOOLKIT</text>
    </svg>
</header>
```

8. Back to `strapless.html`

	```html
	---
	layout: default
	title: Strapless
	subtitle: A Robust Anti-Framework Frontend Asset Toolkit
	heroClass: hero_Strapless
	---
	{{> topnav.topnav}}
	{{> heros.hero}}
	{{> tabs_ButtonBar}}
	{{> typography.article}}
	```
	So, I removed everything unnecessary, and defined the `layout, title, subtitle,` and `heroClass`. This leaves two items on my immediate todo list: `/views/layouts/default.html`, and .hero_Strapless needs created and styled. Let's start with the styles.

9. `src/assets/toolkit/styles/components/_hero.scss`

	There's a few things going on in this style partial, but all we're interested in right now is the first section, under `// bg images`

	```css
	//  1.1 hero
	// ************************
	.hero {
	    display: block;
	    padding: $base-vertical-padding 0;
	    margin: auto;
	    .outline {margin: auto;}
	    // default bg: if no images appear
	    background-color: $slate;

	    // bg images
	    &.hero_jobcards {background: $blu; color: $wht;}
	    &.hero_Spotlight {background:$gld; color:$wht;}
	    &.hero_spotlightJobs {
	        background: $blu; .outline {border-color:$org;} h2, p {color: $org;}
	        @include bg('https://images.unsplash.com/photo-1479244023581-940699c647cd?dpr=2&amp;auto=format&amp;fit=crop&amp;w=1500&amp;h=1000&amp;q=80&amp;cs=tinysrgb&amp;crop=', 0.8, cover);
	    }
	    &.hero_Openjobs { background: $wht; .outline {border-color:$blu;} h2, p {color: $blu;} }
	    &.hero_Internships {@include bg('https://images.unsplash.com/photo-1465821185615-20b3c2fbf41b?dpr=0.89552241563797&auto=format&fit=crop&w=1500&h=872&q=80&cs=tinysrgb&crop=', 0.8, cover);}
	    &.hero_AboutPA { @include bg('https://images.unsplash.com/photo-1482146426705-433fc4949dbb?dpr=0.89552241563797&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=', 0.8, cover); }
	    &.hero_Benefits { background: $blu; border-color: $blu; h2, p {color: $wht;} }
	    &.hero_Veterans {@include bg('https://images.unsplash.com/photo-1450430463204-6f53fe1c2777?dpr=2&auto=format&fit=crop&w=1500&h=994&q=80&cs=tinysrgb&crop=', 0.8, cover);}

	    @include bg('https://images.unsplash.com/photo-1482146426705-433fc4949dbb?dpr=0.89552241563797&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=', 0.8, cover);

	    text-align: center;
	    h1, h2, p {text-align: center;}
	    img,
	    object {
	        display: block;
	        margin: auto;
	        width: 100%;
	        max-width: $article-max-width;
	        // height: auto;
	        @media #{$medium-only} { width: 80%;}
	        @media #{$small-only} { width: 90%;}
	    }
	    @media #{$small-only} {padding: $base-horizontal-padding 0;}

	} // end header .hero
	```

	The specific section we're adding is:

	```css
	// solid background color
	&.hero_Strapless {
		background-color: $gry;
		color: $slate;
	}
	// background image / gradient mixin
    &.hero_Strapless {
    	@include bg('/path/to/img.jpg', 0.8, cover);
    }
    ```

   	Now, I haven't made any design assets yet for this, so I'm not sure which hero image style I'll be going with. There's two options:

   1. a background image with a gradient over top
   2. or a solid color background

   	So, before we head to the next section, I'll start making our frontend assets. I'll be needing a background image. Because I'm attempting to rapidly prototype, I'm going to select an image url from [unsplash.com](unsplash.com).

10. The Design Process (separate doc: design_Process.md)

11. So, Now that my design assets are complete, we need to start creating the Strapless Home page (`views/strapless.html`).

	```html
	---
	layout: default
	title: Strapless
	subtitle: A Robust Anti-Framework Frontend Asset Toolkit
	heroClass: hero_Strapless
	---
	{{> topnav.topnav}}
	{{> heros.hero}}
	{{> tabs_ButtonBar}}
	{{> heros.hero}}
	{{> heros.hero}}
	{{> typography.article}}
	```

 	We're going to be reusing the `hero` element, so rather than making a new .html material for each instance, I'll add classes in `_hero.scss` doc to uniquely style each subsequent section. (nth-of-type would also work, but to avoid unintended style spill-over, we'll use unique classes.)

		```
		{{> heros.hero}}
		{{> heros.hero}} <!-- 2nd Hero = .hero_LearnTheCode, :nth-of-type(2) -->
		{{> heros.hero}} <!-- 3rd Hero = .hero_WeAllBuiltIt, :nth-of-type(3)-->
		```

		```css
		.hero {
			// strapless
		    // ************************
		    //  - use nth-of-type to specify different styles per section
		    // ************************
		    &.hero_Strapless {

		        // default, header
		        background: $pch;
		        .outline {border-color:$slate;}
		        h1, p {color: $slate;}

		        // Subsequent heros
		        &:nth-of-type(2){@include bg('https://images.unsplash.com/photo-1485356824219-4bc17c2a2ea7?dpr=1&auto=format&fit=crop&w=1500&h=1002&q=80&cs=tinysrgb&crop=', 0.8, cover);}
		        &:nth-of-type(3){@include bg('https://images.unsplash.com/photo-1485136886653-2ea3967d5ecb?dpr=2&auto=format&fit=crop&w=1500&h=1875&q=80&cs=tinysrgb&crop=', 0.8, cover);}

		    }
		}
		```

	![Tutorial](/assets/toolkit/images/strapless/defaultTut_1.jpg)

	This isn't exactly what we're looking for style-wise, so with a few modifications, the updates styles are:

		```css
		.hero {
		    &.hero_Strapless {

		        // default, header
		        background: $pch;
		        .outline {border:0;}
		        h1, p {color: $slate;}

		        // Subsequent heros
		        &:nth-of-type(2){ h1, p {color: $wht;} @include bg('https://images.unsplash.com/photo-1485356824219-4bc17c2a2ea7?dpr=1&auto=format&fit=crop&w=1500&h=1002&q=80&cs=tinysrgb&crop=', 0.8, cover);}
		        &:nth-of-type(3){ h1, p {color: $wht;} @include bg('https://images.unsplash.com/photo-1485136886653-2ea3967d5ecb?dpr=2&auto=format&fit=crop&w=1500&h=1875&q=80&cs=tinysrgb&crop=', 0.8, cover);}

		    }
		}
		```

	![Tutorial](/assets/toolkit/images/strapless/defaultTut_2.jpg)

	After adding the unique classes:

	```css
	// strapless
    // ************************
    //  - use nth-of-type to specify different styles per section
    // ************************
    &.hero_Strapless {

        // default, header
        &:first-of-type{
            background: $pch;
            h1, h2, p {color: $slate;}
            h2 {@include type-setting(4);}
        }

        // Subsequent heros
        &.hero_LearnTheCode, &.hero_WeAllBuiltIt { div {padding: $base-vertical-padding * 1.333;} }
        &.hero_LearnTheCode { h1, h2, p {color: $wht;} @include bg('https://images.unsplash.com/photo-1485356824219-4bc17c2a2ea7?dpr=1&auto=format&fit=crop&w=1500&h=1002&q=80&cs=tinysrgb&crop=', 0.8, cover);}
        &.hero_WeAllBuiltIt { h1, h2, p {color: $wht;} @include bg('https://images.unsplash.com/photo-1462146449396-2d7d4ba877d7?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=', 0.8, cover);}

    }
	```

12. Now, I don't want to make different materials for each section. Instead, I'll make use of `{{#if}}{{/if}} / {{else}}` logic, and `data` to programmatically generate unique content(the text) for each hero element used.

	We'll be using `data` in order to build both the `Button Bar` and the hero elements.

	I navigated to the `data` directory, and created a new file called `strapless.yml`

	```
	heroContent:
	    hero_Strapless:
	      - {heroClass: hero_Strapless hero_LearnTheCode, title: Learn The Code, subtitle: Not A Framework}
	      - {heroClass: hero_Strapless hero_WeAllBuiltIt, title: We All Built It, subtitle: A compilation of the best of all our code}

	buttonBarStrapless:
	    buttonBarStrapless:
	        Build + Prototype: "fa-user"
	        Front-End Assets: "fa-briefcase"
	        Docs: "fa-thumbs-up"
	        Integration: "fa-home"
	        Styleguide: "fa-briefcase"
	        Central Base: "fa-handshake-o"
	        Unified Variables: "fa-briefcase"
	        Best Practices: "fa-handshake-o"
	        Atomic Design: "fa-handshake-o"
	```

	We won't be updating the `hero.html` material itself, as the data will dynamically fill in the values for each `{{title}}` `{{subtitle}}`, and `{{heroClass}}`. This is the material.

	```html
	<!-- Hero -->
	<section class="hero {{heroClass}}">
	    <div>
	        <h1>{{title}}</h1>
	    	<p>{{subtitle}}</p>
	    </div>
	</section>
	```

	We'll add a Structure material, to easily display each Strapless hero element we just built.

	```html
		---
		notes: |
		 Heros used for the Home page of Strapless.
		strapless: true
		title: Strapless
		subtitle: A Robust Anti-Framework Frontend Asset Toolkit
		heroClass: hero_Strapless
		---
		{{#if fabricator}}
		    <!-- Hero -->
		    <section class="hero {{heroClass}}">
		        <div>
		            <h1>{{title}}</h1>
		        	<p>{{subtitle}}</p>
		        </div>
		    </section>
		    {{#each strapless.heroContent.hero_Strapless}}
		        {{> heros.hero}}
		    {{/each}}
		{{else}}
		    {{#each strapless.heroContent.hero_Strapless}}
		        {{> heros.hero}}
		    {{/each}}
		{{/if}}
	```

	And finally, we'll add a new section for strapless in `tabs_ButtonBar.html`

	```html
	{{#if strapless}}
		{{#each strapless.buttonBarStrapless}}
			<!-- Button Bar: Strapless-->
			<section class="buttonBar {{@key}}">
				<div>
					{{#each this}}
						{{> icon_Button_Hyperlink}}
					{{/each}}
				</div>
			</section>
		{{/each}}
	{{/if}}
	```

	Here it is with logic built in to only display the relevant buttons depending on the page.

	```html
	{{#if fabricator}}
	    {{#each toolkit.tabButtonBar}}
	        <!-- Button Bar - Tab-like SubNavbar -->
	        <section class="buttonBar {{@key}}">
	            <div>
	                {{#each this}}
	                    {{> icon_Button_Hyperlink}}
	                {{/each}}
	            </div>
	        </section>
	    {{/each}}
	{{/if}}


	{{#if benefits}}
	    {{#each toolkit.buttonBarBenefits}}
	        <!-- Button Bar: Employment - Benfits -->
	        <section class="buttonBar {{@key}}">
	            <div>
	                {{#each this}}
	                    {{> icon_Button_Hyperlink}}
	                {{/each}}
	            </div>
	        </section>
	    {{/each}}
	    {{else}}
	        {{#if spotlights}}
	            {{#each toolkit.buttonBarSpotlights}}
	                <!-- Button Bar: Employment - Spotlights -->
	                <section class="buttonBar {{@key}}">
	                    <div>
	                        {{#each this}}
	                            {{> icon_Button_Hyperlink}}
	                        {{/each}}
	                    </div>
	                </section>
	            {{/each}}
	            {{else}}
	            {{#if strapless}}
	                {{#each strapless.buttonBarStrapless}}
	                    <!-- Button Bar: Strapless-->
	                    <section class="buttonBar {{@key}}">
	                        <div>
	                            {{#each this}}
	                                {{> icon_Button_Hyperlink}}
	                            {{/each}}
	                        </div>
	                    </section>
	                {{/each}}
	            {{/if}}
	        {{/if}}
	{{/if}}

	```
