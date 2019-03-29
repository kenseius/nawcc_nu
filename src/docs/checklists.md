
Checklists

- [23-point UX checklist](https://speckyboy.com/ux-design-checklist/)
- https://una.im/perf-design-wins/#%F0%9F%92%81
- [Web Performance Checklist](http://jonyablonski.com/designers-wpo-checklist/)
- [Website Launch Checklist](https://websitelaunchchecklist.com/)
- [IDX Checklist](http://ixdchecklist.com/)


## 23-Point UX Checklist

**Interaction Design**

01. Repetitive actions or frequent activities feel effortless
02. Users can easily recover from errors
03. Users are adequately supported according to their level of expertise
04. Accessing help does not impede user progress

**Visual Design**

05. No more than three primary colors
06. Color alone is not used to convey hierarchy, content or functionality
07. Visual hierarchy directs the user to the required action
08. Items on top of the visual hierarchy are the most important
09. Primary action is visually distinct from secondary actions
10. Interactive elements are not abstracted
11. Form submission is confirmed in a visually distinct manner
12. Alert messages are consistent
13. Alert messages are visually distinct

**Information Architecture**

14. Navigation is consistent
15. Room for growth

**Typography**

16. No more than two distinct type families are used
17. Fonts used for text content are at least 12px in size
18. Reserve uppercase words for labels, headers, or acronyms
19. Different font styles or families are used to separate content from controls
20. Font size/weight differentiates between content types

**User Interface**

21. Proximity and alignment
22. Progress indicator for multi -step workflows
23. Foreground elements (like content and controls) are easily distinguished from the background



## Web Performance Checklist

    - http://jonyablonski.com/2016/designers-guide-to-web-performance-optimization/
    - http://jonyablonski.com/designers-wpo-checklist/

*Process & Workflow*

- [ ] Consider all viewport sizes, not just “mobile, tablet, desktop” (aka iPhone, iPad, iMac)
- Begin designs by thinking about users on smaller screen first
- Involve the development team in the design process
- Create and follow a performance budget
- Avoid one-off design solutions

*Animation & Effects*

- Ensure that animations improve the user experience by providing meaning to the user
- Effects that are triggered during the scroll event consider the needs of the user first and foremost

*Fonts*

- Don’t exceed a total of three custom web fonts
- Ensure custom web fonts have been optimized for web use
- Ensure the proper font formats have been created for development, including WOFF 2.0 format
- Have web safe fallback fonts for each custom web font in use

*Images*

- Use images sparingly and for maximum impact
- Ensure that image formats are appropriate for how they are being used
- Generate the correct image sizes have been created for each image
- Save images for web
- Optimize images


*SVG*
- Use SVGs in place of images whenever appropriate
- Consider browser support
- Ensure SVGs don’t contain extraneous layers
- Simplify SVG paths during creation process
- Optimize SVGs

*Perceived Performance*
- Provide instant feedback to the user where appropriate
- Use placeholder content to populate the page when no content is available


[Website Launch Checklist](https://websitelaunchchecklist.com/)

*Content*

    Text checked and free from spelling, grammatical, factual and formatting errors

    Page titles and meta data unique, consistent and descriptive

    Images have appropriate alternative (alt) text

    Navigation easy to find and use, and all links working

    404 page created and serving correctly

    Terms and conditions and privacy policy pages created

    Cookie information policy/banner created

    Footer copyright notice included and year correct

Communication

    Forms working correctly and email notifications reaching correct people

    Contact details correct and easy to find

    Links to social media accounts present and correct

Compatibility

    Website tested and working in all targeted browsers

    Website tested and working on mobile devices and tablets

    Favicon and touch icons for mobile devices present

    Website functions for visitors with Javascript disabled

Benchmarks & Performance

    HTML W3C valid

    CSS W3C valid

    No Javascript console errors or warnings

    Website run through Pagespeed Insights and results adequate

    Website run through Mobile Friendly Test and results adequate

    HTML, CSS and JS files minified and concatenated where possible

    Images and videos adequate quality and compressed as small as possible

Accessibility

    Links are easily recognisable and have a clear focus state

    All form fields have associated labels (not placeholder text)

    ARIA landmark roles used where appropriate

    Colour contrast is appropriate

    Website tested and useable with a screen reader

Infrastructure

    Domain name and web hosting set up and linked

    Automatic backups configured and working

    SSL certificate installed

    Files fully integrated with version control and deploy path set up

.htaccess

    GZIP enabled

    301 redirects to pages which no longer exist set up

    Expires caching activated

    Clean URL rewrites in place and working

    All versions of URL redirecting to same format

Analytics

    Analytics tracking installed and working

    Event tracking set up and working for key metrics

    Search console account set up and linked



Superstar combo-checklist: https://una.im/perf-design-wins/#%F0%9F%92%81

    Resize images to fit their containers.
    (don't send assets larger than the greatest common factor size)
    Download ImageOptim and run your assets through it
    Remove additional layers and artifacts from SVGs
    (such as uneccesary headers from Sketch or Illustrator)
    Minify SVG with SVGO
    Consider using Picturefill
    (for retina images and responsive assets)
    Lazy load images where applicable
    Font audit to group similar styles/font-weights
    Consider subsetting individual characters
    (like header typography and ampersands)
    Provide a unique waiting experience
    Consider UI placeholders
