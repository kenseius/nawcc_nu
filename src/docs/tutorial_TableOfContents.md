Tutorial
====

For our second Tutorial, we'll be updating the **Table Of Contents**.

The old **Table Of Contents** (ToC) was written in static HTML, the hoverStyles are incorrect, and the CSS doesn't seem to render correctly under 'Components'. (Since we have more sections to add now, we'll need to adjust the styles regardless. Conveniently, both the layout and the appearance are controlled from the same block of code.

Here's what we'll be working on:

Styling:

- create a new SASS partial (`assets/toolkit/styles/_TableOfContents.scss`) for ToC
- style fixes
- layout fixes

Auto-Generation

- create a new HTML partial (`material`) for ToC
- use `data` to programmatically generate the content
- use handlebars to summon the ToC (`{{> TableOfContents}}`) back into the Overview page (`views/index.html`)


Styling
----

### Create A New SASS Partial

Here's the code we're working with.

```css
article {
    &.tableofcontents {
        a {
            background: none;
            @include hover() {background: $ylw;}
        }
        max-width: $base-max-width;
        @include layout(4 0.333 after fluid border-box);
        @include clear();
        header {
            @include span(12 of 12);
            .meta {max-width: $base-max-width;}
        }
        ul {
            margin-bottom: $base-horizontal-padding;
            @include span(1 of 4);
            &:nth-child(4) {@include last;}
            &:last-child {
                @include span(4 of 4);
                li {
                    @include span(1 of 4);
                    &:first-child {@include span(4 of 4);}
                    &:nth-child(4n+4) {@include last;}
                }
            }
            @media #{$medium-only} {
                @include span(2 of 4);
                &:nth-child(even) {@include last;}
                &:last-child {
                    @include span(4 of 4);
                    li{
                        @include span(2 of 4);
                        &:first-child {@include span(4 of 4);}
                        &:nth-child(even) {@include last;}
                    }
                }
            }
            @media #{$small-only} {
                @include span(4 of 4);
                &:last-child {
                    li {@include span(4 of 4);}
                }
            }
        }
    }
}
```

To start, we'll want to unnest it from `article`, so we can reuse it anywhere, just by applying the class `.TableOfContents` (I also capitalized the words in the class, for consistency.)

First things, first: we need to create a new partial.

Navigate to the SASS directory (`assets/toolkit/styles/`), and add a new file to the `assets/toolkit/styles/components/` directory. Name it `_TableOfContents.scss`.

Note:
1. Remember to add this component to `styles/toolkit.scss`.
 It can be added anywhere after the /base/ styles. Let's add it to the bottom of the Components list.
2. The underscore in the name for the SASS partial tells the compiler not to compile the partial on its own (in which case, instead of everything compiling to just `toolkit.css`, it would output an extra `TableOfContents.css` file)


--

Update:

We'll need to update the SCSS, as grids must be nested within an additional wrapper. (When using floats for layout. Alternatively, flexbox wouldn't require an extra wrapping component.)

Here's the new snippet:

~~~
// Table Of Contents
// ==========================
.tableOfContents {
    background: $wht;
    padding: $base-vertical-padding 0;
    .tableOfContents_grid {
        max-width: $base-max-width;
        margin: auto;
        @include layout(4 0.333 after fluid border-box);
        @include clear();
        header, h2, .meta, .meta_article {@include span(4 of 4); max-width: $base-max-width;}
        a {
            background: none;
            @include hover() {background: $ylw;}
        }
        ul {
            @include clear();
            margin-bottom: $base-horizontal-padding;
            min-height: 300px;
            list-style-position: inside;
            @include span(1 of 4);
            li {list-style-position: inside; margin: 0; padding: 0;}
            li:first-child {
                list-style: none;
                strong {
                    @include type-setting(1);
                    padding-bottom: 1.333rem;
                }
                margin-bottom: 1.333rem;
                border-bottom: 2px solid $gry;
            }
            &:nth-child(4n) {@include last;}
            // &:last-child {
            //     @include span(4 of 4);
            //     li {
            //         @include span(1 of 4);
            //         &:first-child {@include span(4 of 4);}
            //         &:nth-child(4n+4) {@include last;}
            //     }
            // }
            @media #{$medium-only} {
                @include span(2 of 4);
                &:nth-child(even) {@include last;}
                // &:last-child {
                //     @include span(4 of 4);
                //     li{
                //         @include span(2 of 4);
                //         &:first-child {@include span(4 of 4);}
                //         &:nth-child(even) {@include last;}
                //     }
                // }
            }
            @media #{$small-only} {
                @include span(4 of 4);
                // &:last-child {
                //     li {@include span(4 of 4);}
                // }
            }
        }
    }
}
~~~

It needs a little cleaned up.

~~~css
.tableOfContents {
    background: $wht;
    padding: $base-vertical-padding 0;
    .tableOfContents_grid {
        max-width: $base-max-width;
        margin: auto;
        @include layout(4 0.333 after fluid border-box);
        @include clear();
        header, h2, .meta, .meta_article {@include span(4 of 4); max-width: $base-max-width;}
        a { background: none; @include hover() {background: $ylw;} }
        ul {
            @include clear();
            margin-bottom: $base-horizontal-padding;
            min-height: 300px;
            list-style-position: inside;
            @include span(1 of 4);
            li {list-style-position: inside; margin: 0; padding: 0;}
            li:first-child {
                list-style: none;
                margin-bottom: 1.333rem;
                border-bottom: 2px solid $gry;
                strong { @include type-setting(1); padding-bottom: 1.333rem; }
            }
            &:nth-child(4n) {@include last;}
            @media #{$medium-only} { @include span(2 of 4); &:nth-child(even) {@include last;} }
            @media #{$small-only} { @include span(4 of 4); }
        }
    }
}
~~~

There we go. So, let's look at our frontpage:

~~~markdown

<section class="tableOfContents">

## Table Of Contents

<section class="meta meta_article">
    <p>Metadata</p>
    <p class="meta_right">November 23, 2016</p>
</section>

<div class="tableOfContents_grid">

- **Build + Prototype**
- Data (Yaml)
- Partials (Handlebars)
- Front-matter
- Gulp
- /dist/
- Components


- **Frontend Assets**
- SASS
- Images
- JS


- **Docs**
- Markdown
- Notes (materials)
- How to:
 -  Start
 -  Style
 -  Build
 -  Modify
 -  Write Docs


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


- **Best Practices**
- Accessability
- Cross-platform, Device-agnostic, Responsiveness
- Semantics


- **Atomic Design**
- Build modularly, and unify across the board
 - HTML5
 - CSS3
 - Brand Assets


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


- **Sites**
- Styles, HTML5, Javascript
- Use Templates to only display Relevant Materials
- Downloads
- pa.gov (default)
- Employment
- Most Wanted Absconders
- SCND


- **Additional Resources**
- Checklists
- References

</div>

</section>

~~~

As you can tell, it's written in markdown, which outputs to HTML, which is what our SCSS is styling.

And this would be all well and good, except that it's outpu is atic.




--

Auto-Generation
----

### DATA

Here's the data we'll be working with. It's just copied from a list, without any modifications yet.

```
Build + Prototype

    Data (Yaml)
    Partials (Handlebars)
    Front-matter
    Gulp
    /dist/
    Components

Frontend Assets

    SASS
    Images
    JS

Docs

    Markdown
    Notes (materials)
    How to:
    Start
    Style
    Build
    Modify
    Write Docs

Integration

    Insertion points
    Front-matter
    Frontend Frameworks:
    Foundation
    Bootstrap
    CMS
    Wordpress
    Sharepoint
    Drupal

Output For Partner

    Styleguide
    Pages
    Hide internal documentation and code

Central Base

    Modular Scale
    Vertical Rhythm
    Grid
    Widths
    Alignment
    Output to single base.scss file

Unified Variables

    SASS variables
    Wireframes Template
    P5 Template
    Xd Template
    Sketch Template

Best Practices

    Accessability
    Cross-platform, Device-agnostic, Responsiveness
    Semantics

Atomic Design

    Build modularly, and unify across the board
    HTML5
    CSS3
    Brand Assets

Code

    Standards
    Nomenclature
    File Structure
    Dependencies
    Javascript

DRY

    Don't Repeat Yourself
    mixins
    materials & prototyping

Sites

    Styles, HTML5, Javascript
    Use Templates to only display Relevant Materials
    Downloads
    pa.gov (default)
    Employment
    Most Wanted Absconders
    SCND
```

Right now, it won't within a `.yml` file.  So we have to do some fixes. Here's what we get:

```
Build + Prototype:
  - Data (Yaml)
  - Partials (Handlebars)
  - Front-matter
  - Gulp
  - /dist/
  - Components

Frontend Assets:
  - SASS
  - Images
  - JS

Docs
  - Markdown
  - Notes (materials)
  - How to:
    - Start
    - Style
    - Build
    - Modify
    - Write Docs

Integration
  - Insertion points
  - Front-matter
  - Frontend Frameworks:
    - Foundation
    - Bootstrap
  - CMS
    - Wordpress
    - Sharepoint
    - Drupal

Output For Partner
  - Styleguide
  - Pages
  - Hide internal documentation and code

Central Base

    Modular Scale
    Vertical Rhythm
    Grid
    Widths
    Alignment
    Output to single base.scss file

Unified Variables

    SASS variables
    Wireframes Template
    P5 Template
    Xd Template
    Sketch Template

Best Practices

    Accessability
    Cross-platform, Device-agnostic, Responsiveness
    Semantics

Atomic Design

    Build modularly, and unify across the board
    HTML5
    CSS3
    Brand Assets

Code

    Standards
    Nomenclature
    File Structure
    Dependencies
    Javascript

DRY

    Don't Repeat Yourself
    mixins
    materials & prototyping

Sites

    Styles, HTML5, Javascript
    Use Templates to only display Relevant Materials
    Downloads
    pa.gov (default)
    Employment
    Most Wanted Absconders
    SCND

```
