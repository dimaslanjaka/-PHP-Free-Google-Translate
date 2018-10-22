# -PHP-Free-Google-Translate (Officially By L3n4r0x)
<h3>Translate any websites from PHP </h3>
<h2>Options (Array)</h2>
- Manipulate Images With Your CDNs <br />
<pre>
$option["cdn"] = "https://res.cloudinary.com/dimaslanjaka/image/fetch/"; //Change to your Images CDN
</pre>
<h1>How To Use ? </h1>
just simply :
<pre>
&lt;php
include("translate.php");
echo translate($url, $FromLanguage, $ToLanguage, $option); //Country Code like id, ru, es, fr, br, etc
?&gt;
</pre>

