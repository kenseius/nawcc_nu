Changelog
====

--

##Latest

--

version:0.91
date: 2-6-2017

--

### Table Of Contents, Docs, Strapless Menu Fixes

Table Of Contents (WIP), Docs, Strapless Menu Fixes, other various code fixes.


----


version:0.9
date: 2-6-2017

--

### docs, views, menus, materials, organization

materials > components:
- lots of arranging components into new directories,
- moved project-specific materials to 'projects' directory;

docs:
- began parsing out contents of Strapless Explained;

views:
- added materials.html,
- projects.html,

fabricator:
- modified the side menu


----


version: 0.2
date: 2-3-2017

--

### Compressed Images, More Docs, Markdown Helper

assets/toolkit:
 - images: replaced large pngs with compressed jpg,
 - styles: added padding to inline code;

docs:
- added changelog
- further additions and improvments of straplessExplained;

materials, views:
- using button as an example, began setting up a method to only show relevant components, depending on the layout;

gulpfile, helpers:
- removed bad code,
- added markdown helper, to easily populate text content areas without writing HTML;

editorconfig: set trim_trailing_whitespace=true;
package.json: updated description name from Brianstrap to Strapless


----

version: 0.1
date: 2-1-2017

--

### Documentation, Tutorials, Fixes

assets/fabricator:
- fixes to code appearance;

assets/toolkit:
- images: added 3 images for strapless documentation,
- styles: updated blockquote, fixed responsive styles;
- fixed the accordion, for use in the sidenav; modifed buttonBar to add Strapless nav items (for a tutorial on how to do this);
- modifed hero for unique strapless styles;
- fixes to .styleguide class (migrating general code to own partials);

src/data:
- added data to dynamically generate strapless elements, and for a Tutorial (and so I could get a stronger handle on YAML and Handlebars;

src/docs:
- updates and additions -
- converting old html to markdown
- fixing widths and titles
- added tutorials on building a layout, installing strapless, explaining strapless, modifying partials, building a new component (table of contents - a WIP), and a few other notes.

src/materials:
- modifed heros and tabs_ButtonBar for strapless,
- modified button to attempt to only display certain items depending on context (WIP);
- typography: created Metadata material;
- materials/structures: added strapless_Heros element;  

src/views:
- modified layouts for strapless appearance rendering;
- modifed docs.html
- created views/strapless/intro.html (should delete) and views/strapless.html;
- modifed templates;
