<?php get_header(); ?>

<script>
    jQuery(document).ready(function() {
        var size_h1 = jQuery("h1").css('font-size');
        document.getElementById("h1-display").innerHTML = size_h1;
        var size_h2 = jQuery("h2").css('font-size');
        document.getElementById("h2-display").innerHTML = size_h2;
        var size_h3 = jQuery("h3").css('font-size');
        document.getElementById("h3-display").innerHTML = size_h3;
        var size_h4 = jQuery("h4").css('font-size');
        document.getElementById("h4-display").innerHTML = size_h4;
        var size_h5 = jQuery("h5").css('font-size');
        document.getElementById("h5-display").innerHTML = size_h5;
        var size_h6 = jQuery("h6").css('font-size');
        document.getElementById("h6-display").innerHTML = size_h6;
        var size_p = jQuery("p").css('font-size');
        document.getElementById("p-display").innerHTML = size_p;
        var size_p_small = jQuery("p.small").css('font-size');
        document.getElementById("p-small-display").innerHTML = size_p_small;
        var size_p_lead = jQuery("p.lead").css('font-size');
        document.getElementById("p-lead-display").innerHTML = size_p_lead;
    });
</script>
<div class="container">
    <label>h1 <span id="h1-display"></span></label>
    <h1>Level One Heading</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus id corporis, sed accusamus eligendi in ratione tenetur? Quidem nisi iure pariatur corporis doloremque libero voluptates quaerat! Cupiditate provident nostrum adipisci.
    </p>
    <label>h2 <span id="h2-display"></span></label>
    <h2>Level Two Heading</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus id corporis, sed accusamus eligendi in ratione tenetur? Quidem nisi iure pariatur corporis doloremque libero voluptates quaerat! Cupiditate provident nostrum adipisci.
    </p>
    <label>h3 <span id="h3-display"></span></label>
    <h3>Level Three Heading</h3>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus id corporis, sed accusamus eligendi in ratione tenetur? Quidem nisi iure pariatur corporis doloremque libero voluptates quaerat! Cupiditate provident nostrum adipisci.
    </p>
    <label>h4 <span id="h4-display"></span></label>
    <h4>Level Four Heading</h4>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus id corporis, sed accusamus eligendi in ratione tenetur? Quidem nisi iure pariatur corporis doloremque libero voluptates quaerat! Cupiditate provident nostrum adipisci.
    </p>
    <label>h5 <span id="h5-display"></span></label>
    <h5>Level Five Heading</h5>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus id corporis, sed accusamus eligendi in ratione tenetur? Quidem nisi iure pariatur corporis doloremque libero voluptates quaerat! Cupiditate provident nostrum adipisci.
    </p>
    <label>h6 <span id="h6-display"></span></label>
    <h6>Level Six Heading</h6>
    <p class="small">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus id corporis, sed accusamus eligendi in ratione tenetur? Quidem nisi iure pariatur corporis doloremque libero voluptates quaerat! Cupiditate provident nostrum adipisci.
    </p>
    <h1 class="space-top-big">Paragraphs</h1>
    <label>p <span id="p-display-lead"></span></label>
    <p class="lead">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus id corporis, sed accusamus eligendi in ratione tenetur? Quidem nisi iure pariatur corporis doloremque libero voluptates quaerat! Cupiditate provident nostrum adipisci.
    </p>
    <label>p <span id="p-display"></span></label>
    <p>This is a standard paragraph created using the WordPress TinyMCE text editor. It has a <strong>strong tag</strong>, an <em>em tag</em> and a <del>strikethrough</del> which is actually just the del element. There are a few more inline elements which are not in the WordPress admin but we should check for incase your users get busy with the copy and paste. These include <cite>citations</cite>, <abbr title="abbreviation">abbr</abbr>, bits of <code>code</code> and <var>variables</var>, <q>inline quotations</q>, <ins datetime="2011-12-08T20:19:53+00:00">inserted text</ins>, text that is <s>no longer accurate</s> or something <mark>so important</mark> you might want to mark it. We can also style subscript and superscript characters like C0<sub>2</sub>, here is our 2<sup>nd</sup> example. If they are feeling non-semantic they might even use <b>bold</b>, <i>italic</i>, <big>big</big> or <small>small</small> elements too.&nbsp;Incidentally, these HTML4.01 tags have been given new life and semantic meaning in HTML5, you may be interested in reading this <a title="HTML5 Semantics" href="http://csswizardry.com/2011/01/html5-and-text-level-semantics">article by Harry Roberts</a> which gives a nice excuse to test a link.&nbsp;&nbsp;It is also worth noting in the "kitchen sink" view you can also add <span style="text-decoration: underline;">underline</span>&nbsp;styling and set <span style="color: #ff0000;">text color</span> with pesky inline CSS.</p>
    <label>p <span id="p-display-small"></span></label>
    <p class="small">This is a <strong>small</strong> standard paragraph created using the WordPress TinyMCE text editor. It has a <strong>strong tag</strong>, an <em>em tag</em> and a <del>strikethrough</del> which is actually just the del element. There are a few more inline elements which are not in the WordPress admin but we should check for incase your users get busy with the copy and paste. These include <cite>citations</cite>, <abbr title="abbreviation">abbr</abbr>, bits of <code>code</code> and <var>variables</var>, <q>inline quotations</q>, <ins datetime="2011-12-08T20:19:53+00:00">inserted text</ins>, text that is <s>no longer accurate</s> or something <mark>so important</mark> you might want to mark it. We can also style subscript and superscript characters like C0<sub>2</sub>, here is our 2<sup>nd</sup> example. If they are feeling non-semantic they might even use <b>bold</b>, <i>italic</i>, <big>big</big> or <small>small</small> elements too.&nbsp;Incidentally, these HTML4.01 tags have been given new life and semantic meaning in HTML5, you may be interested in reading this <a title="HTML5 Semantics" href="http://csswizardry.com/2011/01/html5-and-text-level-semantics">article by Harry Roberts</a> which gives a nice excuse to test a link.&nbsp;&nbsp;It is also worth noting in the "kitchen sink" view you can also add <span style="text-decoration: underline;">underline</span>&nbsp;styling and set <span style="color: #ff0000;">text color</span> with pesky inline CSS.</p>
    <label>blockquote</label>
    <blockquote>
        Currently WordPress blockquotes are just wrapped in blockquote tags and have no clear way for the user to define a source. Maybe one day they'll be more semantic (and easier to style) like the version below.
    </blockquote>
    <blockquote cite="http://html5doctor.com/blockquote-q-cite/">
        <p>HTML5 comes to our rescue with the footer element, allowing us to add semantically separate information about the quote.</p>
        <footer>
            <cite>
                <a href="http://html5doctor.com/blockquote-q-cite/">Oli Studholme, HTML5doctor.com</a>
            </cite>
        </footer>
    </blockquote>
    <label>lists</label>
    <ul>
        <li>Unordered list item one.</li>
        <li>Unordered list item two.</li>
        <li>Unordered list item three.</li>
        <li>Unordered list item four.</li>
        <li>By the way, Wordpress does not let you create nested lists through the visual editor.</li>
    </ul>
    <ol class="mb-16">
        <li>Ordered list item one.</li>
        <li>Ordered list item two.</li>
        <li>Ordered list item three.</li>
        <li>Ordered list item four.</li>
        <li>By the way, Wordpress does not let you create nested lists through the visual editor.</li>
    </ol>
    <div class="mb-16">
        <h2>Buttons</h2>
        <button class="btn">Button</button>
        <button class="btn btn-primary">Button</button>
        <button class="btn btn-secondary">Button</button>
        <button class="btn btn-accent">Button</button>
        <button class="btn btn-ghost">Button</button>
        <button class="btn btn-link">Button</button>
        <h3>Outline</h3>
        <button class="btn btn-outline">Button</button>
        <button class="btn btn-outline btn-primary">Button</button>
        <button class="btn btn-outline btn-secondary">Button</button>
        <button class="btn btn-outline btn-accent">Button</button>
        <h3>Sizes</h3>
        <button class="btn btn-lg">Large</button>
        <button class="btn">Normal</button>
        <button class="btn btn-sm">Small</button>
        <button class="btn btn-xs">Tiny</button>
    </div>
    <div class="mb-16 has-primary-background-color">
        <h2>Color</h2>
    </div>
    <div class="mb-16">
        <h2>Components</h2>
        <h3>Cards</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
            <div class="card">
                <div class="flex items-baseline">
                    <div class="grow">
                        <h2>2011</h2>
                    </div>
                    <div class="shrink">  
                        <p class="font-sans small">22./23. Juli 1996</p>
                    </div>
                </div>
                <img class="inline rounded-lg mb-4" src="https://placehold.co/400x300" alt="image-alt">
                <h3>Headline maybe it has really two lines worst case</h3>
                <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis cumque illo unde voluptatum numquam, veniam debitis maiores? Neque nam laborum incidunt sunt, minus porro quis voluptate commodi inventore quia officia!
                </p>
                <p class="font-sans small">in der Deutschen Kinemathek, Berlin</p>
            </div>
            <div class="card linked">
                <div class="flex items-baseline">
                    <div class="grow">
                        <h2>2011</h2>
                    </div>
                    <div class="shrink">  
                        <p class="font-sans small">22./23. Juli 1996</p>
                    </div>
                </div>
                <img class="inline rounded-lg mb-4" src="https://placehold.co/400x300" alt="image-alt">
                <p class="font-sans small">22./23. Juli 1996</p>
                <h3>Headline maybe it has really two lines worst case</h3>
                <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis cumque illo unde voluptatum numquam, veniam debitis maiores? Neque nam laborum incidunt sunt, minus porro quis voluptate commodi inventore quia officia!
                </p>
                <p class="font-sans small">in der Deutschen Kinemathek, Berlin</p>
                <a href="#" class="btn btn-sm btn-ghost">
                    Mehr
                </a>
            </div>
            <div class="card speaker">
                <img class="inline rounded-full mb-4" src="https://placehold.co/200x200" alt="portrait">
                <p class="font-sans small">22./23. Juli 1996</p>
                <h3>Headline maybe it has really two lines worst case</h3>
                <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis cumque illo unde voluptatum numquam, veniam debitis maiores? Neque nam laborum incidunt sunt, minus porro quis voluptate commodi inventore quia officia!
                </p>
                <a href="#" class="btn btn-sm btn-ghost secondary mb-4">
                    Mehr
                </a>
                <ul role="list" class="flex justify-center items-center space-x-4 mb-4">
                    <li>
                        <a class="btn clear tiny secondary" href="#">
                            #konferenz 2000
                        </a>
                    </li>
                    <li>
                        <a class="btn clear tiny secondary" href="#">
                            #Konferenz 2003
                        </a>
                    </li>
                </ul>
                <ul role="list" class="flex justify-center items-center space-x-4">
                    <li>
                        <a href="#">
                            <span class="sr-only">Twitter</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>