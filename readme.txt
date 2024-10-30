=== Progress Bar for Contact Form 7 ===
Contributors: avneetk
Tags: progress bar, contact form 7, progress bar for forms
Requires at least: 4.0
Tested up to: 5.0.3
Stable tag: 1.0.0
License: GPLv2 or later


== Description ==

A clean look progress bar for Contact Form 7 forms. Supports text, select, radio, acceptance fields. Checkboxes are not trackable, maybe available in future releases.

How to use?
Use shortcode
<pre><code>[cf7-progress-bar bar_fields="" form_name=""]</code></pre>
anywhere on page where form exists. Shortcode attributes (bar_fields and form_name) are necessary for progress bar.

Bar Fields:-
Progress in the form is tracked by the events occuring in these fields. It's parameters include only the name of the fields separated by pipe sign (|). Example,
<pre><code>bar_fields="your-name|your-email|your-subject|your-message".</code></pre>

Form Name:-
Say the name of the form in it. Example, form_name="form546".

How to find name of the form?
Add html_name to contact form 7 shortcode. Example,
<pre><code>[contact-form-7 id="47" title="Contact form 1" html_name="form545"]</code></pre>
Supply this name to form_name in [cf7-progress-bar] so progress bar knows which form to track.

Other attributes:-
color="#000000".This is the color of the progress bar. This is also kinda important.

== Installation ==

Upload the CF7 Progress Bar to your blog, Activate it.
And You're done!