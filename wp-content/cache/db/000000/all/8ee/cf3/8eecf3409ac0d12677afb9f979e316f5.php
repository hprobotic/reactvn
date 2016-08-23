^¼W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:49:"SELECT * FROM reactvn_posts WHERE ID = 46 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:2:"46";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-09-29 17:38:58";s:13:"post_date_gmt";s:19:"2015-09-29 17:38:58";s:12:"post_content";s:9679:"In both print design and web design, typography plays an important role. After all,<a href="http://www.craigbailey.net/content-is-king-by-bill-gates/">content is king</a>, and text content is prevalent in the web. That is why it is important to <a href="http://everydaydesigner.net/design/change-your-focus-and-design-content-first">adopt a content-first approach to design</a>. When content is well-designed, everything else (layout, structure, colors, transitions, etc.) will follow.<!--more-->

&nbsp;
<p>In both print design and web design, typography plays an important role. After all, <a href="http://www.craigbailey.net/content-is-king-by-bill-gates/">content is king</a>, and text content is prevalent in the web. That is why it is important to <a href="http://everydaydesigner.net/design/change-your-focus-and-design-content-first">adopt a content-first approach to design</a>. When content is well-designed, everything else (layout, structure, colors, transitions, etc.) will follow.</p>
<p>There are many useful tools and utilities in Sass for customizing typographical styles. Instead of trying to recreate these tools, we will exploring:</p>
<ol>
<li>How to organize typographical styles in Sass, and&#8230;</li>
<li>The use of vertical rhythm for layout.</li>
</ol>
<p>We will be recreating this mockup below (by talented designer <a href="https://dribbble.com/thebuddyman">Thomas Budiman</a>) to demonstrate how using both a modular type scale and a vertical rhythm can provide a systematic way of laying out content in your projects, without having to use magic numbers.</p>
<p><a href="https://scotch.io/wp-content/uploads/2015/09/aesthetic-sass-typography-preview.png"><img src="https://scotch.io/wp-content/uploads/2015/09/aesthetic-sass-typography-preview-667x500.png" alt="aesthetic-sass-typography-preview" width="667" height="500" class="aligncenter size-large wp-image-11146" /></a></p>
<h2>Modular Type Scales</h2>
<p>Choosing a modular type scale answers the question, &#8220;Which font sizes should I use in this project/design?&#8221; It provides you a set of proportional values to set the varying sizes of text used throughout a consistent design. From the <a href="http://webtypography.net/">Elements of Typographic Style</a>:</p>
<blockquote>
<p>A modular scale, like a musical scale, is a prearranged set of harmonious proportions. &#8211; Robert Bringhurst</p>
</blockquote>
<p>There are many tools that can be used to choose a modular scale, some of which can even be easily used with Sass:</p>
<ul>
<li><a href="http://www.modularscale.com">Modular Scale</a> (has a Sass plugin)</li>
<li><a href="http://type-scale.com">Type-Scale</a></li>
<li><a href="http://www.gridlover.net">Grid Lover</a> (provides Sass variables)</li>
</ul>
<p>Choosing a modular scale is up to you and/or your designer(s). Sometimes, the chosen scale will be slightly changed to use discretionary values (or rounded values), and that&#8217;s okay. The point is to <strong>choose a type scale and stick with it</strong> throughout the project.</p>
<p>For the example, I&#8217;ve chosen a scale based on <code>1rem</code> with a ratio of <code>1.333</code> (4:3, or a perfect fourth). Each value of the scale can be represented in a Sass map:</p>
<pre><code class="language-scss">
$type-scale: (
  -1: 0.75rem,  // small text
  0: 1rem,      // body text
  1: 1.333rem,  // large text
  2: 1.777rem   // main heading
);
</code></pre>
<p>The map keys represent the <em>power of the ratio</em>; e.g. 1rem * 1.333<sup>2</sup> = 1.777rem. You can also have the map keys represent the semantic meaning of each value, such as <code>small: 0.75rem</code>.</p>
<p>Let&#8217;s use these values (with a small helper function) to start the typographical styles of this design:</p>
<pre><code class="language-scss">
@function type-scale($level) {
  @return map-get($type-scale, $level);
}
</code></pre>
<h2>Baseline Grids and Vertical Rhythm</h2>
<p>When you saw the above design, did you ask yourself, &#8220;How am I supposed to know exactly where all the items go vertically?&#8221; Turns out, designers frequently use what&#8217;s called a <em>baseline grid</em> to properly layout elements and to provide consistency in design. It is a repeating set of vertical guides where the baseline of text can be aligned to, but it&#8217;s not limited to just typography. Baseline grids are very useful for aligning other visual elements, such as buttons, and even for overall content layout.</p>
<p>The distance between baselines is known as <strong>line height</strong> or <a href="https://en.wikipedia.org/wiki/Leading">leading</a>. Because we want the line height to be consistent regardless of font size, we&#8217;ll be using <em>unit values</em> to ensure this*. One way to determine each font size&#8217;s respective line height is:</p>
<ol>
<li>Determine the <strong>base line height</strong>, which is a ratio (usually between 1.2 and 1.5) multiplied by the base font size. E.g. <code>1.25 * 1rem = 1.25rem</code>.</li>
<li>Use a <em>multiple</em> of the base line height for each font size, typically closest to (but larger than) the font size. E.g. for <code>1.777rem</code>, a line-height of <code>1.25rem * 2 = 2.5rem</code> is appropriate.</li>
</ol>
<pre><code class="language-scss">
$base-font-size: 1rem;
$base-line-height: $base-font-size * 1.25;

$line-heights: (
  -1: $base-line-height,
  0: $base-line-height,
  1: $base-line-height * 2,
  2: $base-line-height * 2
);

// Again, we can make a helper function:
@function line-height($level) {
  @return map-get($line-height, $level);
}
</code></pre>
<ul>
<li>Common wisdom in CSS is to <a href="http://meyerweb.com/eric/thoughts/2006/02/08/unitless-line-heights/">use a unitless number</a> for the value of <code>line-height</code> to avoid unwanted line-height cascading for nested elements containing text. However, in this system, <em>all elements containing text</em> should/will have an explicit line height set, so they won&#8217;t be influenced by the cascade.</li>
</ul>
<h2>Using Vertical Rhythm for Layout</h2>
<p>Of course, not all of the content in a design will be text. The calculated line height can be used in layout for determining vertical padding or margins, so that other elements are also aligned to the baseline grid. For example:</p>
<pre><code class="language-scss">
.heading-1 {
  margin-bottom: $base-line-height;
}

.recipe-button {
  // ... other styles
  height: $base-line-height * 2;
}
</code></pre>
<h2>Relative Vertical Rhythm (or Breaking the Rules)</h2>
<p>The above system for using line height and aligning content to a consistent baseline grid are simply guidelines, not rules. With this said, sometimes a design might deviate from a baseline grid, especially if it&#8217;s not text-heavy or if tighter vertical spacing is desired.</p>
<p>When this is the case, vertical rhythm can still be assumed with <em>relative vertical spacing</em>, as long as a consistent value (or proportional pair of values) is used, such as <code>1rem</code> or <code>0.5rem, 1rem</code>. This can make it easier to rapidly scaffold and code a design.</p>
<pre><code class="language-scss">
// Example using 1rem or 0.5rem consistently,
// regardless of base line height
.field, .heading-1, .paragraph /* etc. */ {
  margin-bottom: 1rem;
}

.field &gt; .label {
  display: block;
  margin-bottom: 0.5rem;
}
</code></pre>
<h2>Putting It All Together</h2>
<p>Using the original mockup, let&#8217;s put this to code and see how aligning to a vertical baseline grid produces an aesthetic design on the web, without using magic numbers. We&#8217;ll use a <code>@mixin</code> to help us out:</p>
<pre><code class="language-scss">
@mixin type-setting($level: 0) {
  font-size: type-scale($level);
  line-height: line-height($level);
}

// The main heading
.heading-1 { @include type-setting(2); }

// The smaller top heading
.heading-2 { @include type-setting(-1); }

.paragraph { @include type-setting(0); }

.recipe-value { @include type-setting(1); }

.recipe-text { @include type-setting(-1); }

.recipe-button { @include type-setting(-1); }
</code></pre>
<p>With the rest of the styling added, here is our end-result (hover over the recipe card to see the baseline grid):</p>
<p class='codepen'  data-height='500' data-theme-id='2089' data-slug-hash='5faa8eda1707decb58a98c55ef518a79' data-default-tab='result' data-line-numbers='' data-animations='run'>
See the Pen <a href="http://codepen.io/davidkpiano/pen/5faa8eda1707decb58a98c55ef518a79">5faa8eda1707decb58a98c55ef518a79</a> by David Khourshid (<a href="http://codepen.io/davidkpiano">@davidkpiano</a>) on <a href="http://codepen.io">CodePen</a>.</p>
<script async src="//codepen.io/assets/embed/ei.js"></script>
<p>Investing a little bit of time into using a baseline grid and calculating font sizes based on a modular scale allows you to create aesthetic, consistent styles without the need for magic numbers or pixel-pushing. Vertical rhythm can also be used for more than just text elements &#8212; it can be used to calculate vertical margins and/or padding between elements, as well as adjusting the height of static elements so that they align to the baseline grid.</p>
<p>As always, the guidelines above are merely suggestions. There&#8217;s more than one way to organize your type settings (see the SCSS in the Codepen example) and you might define your Sass functions and mixins differently, but the underlying principles are the same: <em>organize important style values into maps, lists, and/or variables</em> and stay consistent with these values. That way, they become easier to use and manipulate throughout your Sass projects.</p>";s:10:"post_title";s:48:"Aesthetic Sass 3: Typography and Vertical Rhythm";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:47:"aesthetic-sass-3-typography-and-vertical-rhythm";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-09-29 17:38:58";s:17:"post_modified_gmt";s:19:"2015-09-29 17:38:58";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:26:"http://scriptsvn.com/?p=46";s:10:"menu_order";s:2:"21";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:9679;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:48;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:47;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:26;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}