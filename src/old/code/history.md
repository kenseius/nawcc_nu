IV. How We Got Here
----


1. **COPA Metrics:**

 - **Frontend Framework**: built using Foundation, with styles customized on top of Foundation's _Pre-Compiled CSS_.  
 - **Styles**: CSS, non-compiled. It was decided to code this using .css early on, which proved unmnagable by the end.
 - **Markup**: Bulky, unsemantic (in order to use foundation, the markup doe not denote meaning on its own, and is mostly used for styling)
 - **CMS**: Wordpress
 - **Lessons learned**:
     - coding in pure CSS is entirely too slow and cumbersome.
     - Preserve code used to counter Foundation's boiled in styles.  
     - There was no guidelines or codebase to build from --- I needed to learn, decide, or build as I went.
     - In the end, the project was a success.

2. **PA.GOV**:

 - **Frontend Framework**: built using Foundation, customized on top of Foundation's _Pre-Compiled CSS_.  
 - **Styles**: SCSS, on top of the newest build of Foundation's _Pre-Compiled CSS_, with code brought over from COPA Metrics where appropriate and to counter Foundation's styles
 - **Markup**: Cleaner, due to an effort to minimize markup where-ever possible. Not completely semantic, as there wasn't time to wrangle with Foundation's styles to adapt to a more semantic markup.
 - **CMS**: Wordpress
 - **Lessons learned**:

     - Many of the issues from COPA Metrics were solved by using SASS. A project that size and prone to sudden change coulnd't have been built using anything else.
     - Early on, a lesson learned from COPA Metrics was the need to organize and systemize the design assets. Because nothing of the sort existed yet, building our framework with Foundation is the best choice available.
     - It also made several things clear about working with Foundation:  

	 		- Foundation is excellent for rapid prototyping, but as a project matures, becomes cumbersome, then entirely unnecessary.  
	 		- We were unable to safely work with Foundation's _scss_, because it would get overwritten everytime they updated the codebase.
	 		- near the end, it became increasingly difficult to manage, and ironning out the finer points of mobile styling became very time-consumming.
	 		- Our style base had matured to the point that the only thing we were using from Foundation was a hand-full of mixins and a plugin called What-Input (which we're still using because it's amazing). We used their grid for some positioning, but ultimately relied on it very minimally. At mobile, other than supplying the breakpoints, Foundation made no difference to the appearance whatsoever.


3. **Agency Template**:

 - **Frontend Framework**: built using Foundation, customized on top of Foundation's _Compiled CSS_  
 - **Styles**: CSS, build on Foundations *compiled CSS*, and built to adapt to Sharepoint's built-in markup & styles
 - **Markup**: Bulky, unsemantic, difficult to manage
 - **CMS**: Sharepoint 2010
 - **Lessons learned**:
		-	The massive maintainability issues were caused by two things:

			- Building on the *Compiled CSS* was a huge error. Immensely difficult to modify.
			- Letting Sharepoint control the markup. Sharepoint markup is _not_ accessable, and carries a large blame for our accessability failure last summer.

		- Until fixing the two causes of the maintainability issue, no matter what framework we use, these problem will persist.
		- Regardless of framework, it would be quicker to start from scratch than to 'fix' the old template.
		- Avoid re-using the old agency template

3. **DGS: State Construction Notices Directory**

 - **Frontend Framework**: built using our `Style Asset Library`. In other words, framework-free.
 - **Styles**: SCSS. The `Style Asset Library` = the styles brought over from PA.Gov, without Foundation. The decision was made during this project to move away from Foundation entirely. From Foundation, we kept 'What-Input', about 5 mixins, and to replace Foundation's grid, we're used a Sass-based tool called Susy. Other than those things, Foundation brought nothing to the table that our `Style Asset Library` wasn't already handling.
 - **Markup**: Semantic, clean, and minimal. Built in VSTS, using Razor (MVC ?) to generate partials
 - **Lessons learned**:

	 - making the move away from Foundation came with growing pains, and wasn't immediately accepted.
	 - In addition to standardizing the styles, the choice was made to begin standardizing the HTML5 markup as well. However, without a centralized and definitive resource to define the markup, this could lead to confusion.
	 - The need to have a central authority on 'correct' markup comes up : for it, I'm referring to HTML5's latest docs, the latest Accessability best practices, and one prevalent rule: Use The Least Amount Of Markup Possible
	 - the `Style Asset Library` is incomplete without also standardizing the markup; in other words, everything needs to be more modular.
     - began building this standardize library via a Styleguide, stored in a directory within the site

4. **PBPP: Most Wanted Absconders**

 - **Frontend Framework**: built using the matured `Style Asset Library` from DGS. This time, adapted to include standardized semantic / accessability markup.
 - **Styles**: SCSS. The `Style Asset Library` +
 - **Markup**: Semantic, clean, and minimal. Built in VSTS, using Razor (MVC ?) to generate partials
 - **Lessons learned**:

 	- Though unnamed, this was the test implementation of `Strapless`: semantic, assessable markup + `Style Asset Library`
 	- The project was built rapidly, with a rapid bug-fixing phase.
 	- Also stores a 'Styleguide' directory within the site, a more mature (though very early) version of Strapless's styleguide output

5. **Strapless, PSP, Employment, and Beyond**
