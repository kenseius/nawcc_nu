I. Overview
----

**Strapless**: Semantic, Accessable Markup + Style Asset Library  

### Learn the code, not a framework

1. Prototyper
	* Any markup (HTML)
	* Any styles (CSS)
	* Markup + Styles = Must correlate
2. UI Toolkit
	* Compendium of Our Best Code
	* Repeated patterns normalized
	* Project-unique Variations, Materials, Data
3. Learn
	* Design System
	* UX Princliples
	* Code Standards
	* Best Practices (Accessability, Semantics)
4. UX Platform
	* Means for providing UX info
	* Reference 

Strapless is a framework-independent UI toolkit, frontend asset library, design system & static site generator.

It's primary goal is to unite and centralize all the assests, from requirements gathering to project completion, within one highly-adaptable, visual system.

It's secondary goal is to provide a transparent, open platform from which to communicate UX values as they apply throughout the website creation process. This includes:
* providing integration methods needed for the various applications
	- Requirements Gathering
	- Wireframes
	- Write Up  
	- Mockups
	- Frontend Code
	- CMS Integration
	- analyzing user usage patterns and feedback
	- *phase 2* changes and improvements
* informing and educating stakeholders & other team members  
	- style guide
	- documentation
	- tutorials
	- resources

### Communication + Knowledge + Accessability + Semantics + Design = User Experience

In other words, **Questions + Design + Code = UX**

The practice of good UX begins by [asking questions](link to article) to idenity root issues.

For **design**, this provides a basis from which to find colors, fonts, images, icons and other *Branding* elements.

For **developers**, it takes the form of writing *Accessabile* code, which is accomplished through *Semantic* HTML5 and following *A11y* best practices. To make this easy, build modularly with partials both in the *SASS* and the HTML *materials*.

For **project managers**, this means first: preparation; then, clear, constant communication. In general, this means project managers should continually work to  *increase their understanding* of the basics of the website creation process, *clearly and visibly define the roles and responsibilities* within a given project, *centralize all information* relating to the project, and *communicate often and with high visibility with other departments*, before, during and after a project.


### Built For Everyone, By All Of US

Strapless was built out of the need for a point of reference for UX designers, graphic designers, frontend developers, and stakeholders. Anyone that's worked on COPA Metrics, PA.Gov, DGS: SCND, PBPP: Most Wanted Absconders, and now Employment has also contributed to this style and code base.


#### UI TOOLKIT

**What's inside?**

This UI toolkit is a highly-modular design system for rapid web page development. It contains different materials that can be assembled into more complex page layouts.

This guide contains real working examples, code snippets, documentation, and style guidelines.

```
strapless/
	dist/
	src/ 		
		assets/
		materials/
		data/
		docs/
		views/
	gulpfile.js
	README.md
```		

- **`Components`** = All HTML and rendered CSS displayed
- **`Assets`** = Easily add and organize all visual assets (Images, JS, and pre-rendered SCSS files)
- **`Documentation`** = Written using Markdown. Notes and documentation can be added on each component, and in a dedicated /docs/ directory
- **`Data`** = Using dot notation, you can call data stored in a list. For example: a list of colors or the topnav links.  
- **`Views`** = Pages constructed using the assets and components, can be used to generate pages for the toolkit, a styleguide, front-facing pages.

**Features:**

- **Rapid prototyping** = sew individual components together with Handlebars.js partials to quickly construct templates and pages.
- **Instant Browser Refresh**
- **Front-matter** = use frontmatter to add documentation within each component partial, and to designate content insertion points, for integrating with a database or CMS
- **Gulp** = Gulp is used to acquire the dependencies, compile the Sass, compress and optimize images, construct element from partials, and pipe the assets into the /dist/ folder

<section class="tableOfContents">

## Table Of Contents

<section class="meta meta_article">
    <p>Metadata</p>
    <p class="meta_right">November 23, 2016</p>
</section>

<div class="tableOfContents_grid">


### Build


- **Prototype**
- Data (Yaml)
- Partials (Handlebars)
- Front-matter
- Gulp
- /dist/
- Components


- **Best Practices**
- Accessability
- Cross-platform, Device-agnostic, Responsiveness
- Semantics


- **Code**
- Standards
- Nomenclature
- File Structure
- Dependencies
- Javascript


- **DRY**
- Don't Repeat Yourself
- mixins
- materials & prototyping

### Style

- **Frontend Assets**
- SASS
- Images
- JS


- **Central Base**
- Modular Scale
- Vertical Rhythm
- Grid
- Widths
- Alignment
- Output to single base.scss file


- **Unified Variables**
- SASS variables
- Wireframes Template
- P5 Template
- Xd Template
- Sketch Template


- **Atomic Design**
- Build modularly, and unify across the board
	- HTML5
	- CSS3
	- Brand Assets


### Output


- **Integration**
- Insertion points
- Front-matter
- Frontend Frameworks:
	- Foundation
	- Bootstrap
- CMS
	- Wordpress
	- Sharepoint
	- Drupal


- **Output For Partner**
- Styleguide
- Pages
- Hide internal documentation and code  


- **Sites**
- Styles, HTML5, Javascript
- Use Templates to only display Relevant Materials
- Downloads
- pa.gov (default)
- Employment
- Most Wanted Absconders
- SCND


- **Placeholder**
- placeholder


### Learn


- **Docs**
- Markdown
- Notes (materials)
- How to:
	-  Start
	-  Style
	-  Build
	-  Modify
	-  Write Docs


- **Additional Resources**
- Checklists
- References


</div>

</section>
