```css
//  3. labels
// ************************

label {
    display: block;
    margin-bottom: $base-horizontal-padding;
    margin-left: auto;
    margin-right: auto;
    text-transform: uppercase;
    button, p {text-transform: none;}
    font-size: small;
    color: $slate;
    @media #{$small-only} {
        margin-bottom: $base-horizontal-small;
         @include span(12 of 12);
     }
}
```
<div class="styleguide fabricate">

<section>
<h1>Variables</h1>
<div class="meta meta_article">
<p>Metadata</p>
<p class="meta_right">November 23, 2016</p>
</div>
<blockquote>
"Organize important style values into maps, lists, and/or variables and stay consistent with these values."
<span>- <a href="https://scotch.io/tutorials/aesthetic-sass-3-typography-and-vertical-rhythm" alt="Scotch.io">Scotch.io</a></span>
</blockquote>
<p data-height="1800" data-theme-id="light" data-slug-hash="bBWJKL" data-default-tab="css" data-user="painteractive" data-embed-version="2" data-pen-title="variables" class="codepen"></p>
<script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
</section>

<section>
<h1>Mixins</h1>
<div class="meta meta_article">
<p>Metadata</p>
<p class="meta_right">November 23, 2016</p>
</div>
<p data-height="4000" data-theme-id="light" data-slug-hash="qqroYw" data-default-tab="css" data-user="painteractive" data-embed-version="2" data-pen-title="mixins" class="codepen"></p>
<script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
</section>

</div>
