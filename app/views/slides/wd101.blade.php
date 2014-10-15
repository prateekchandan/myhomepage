<!DOCTYPE html>

<html lang="en">
  <head>
    <title>HTML / CSS Workshop</title>
    
    <script type="text/javascript" src="{{URL::asset('slide-template/JS/reveal.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('slide-template/CSS/reveal.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('slide-template/CSS/reveal2.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('slide-template/CSS/reveal3.css')}}" media="screen" />

    <link rel="stylesheet" href="{{URL::asset('slide-template/CSS/highlight.js.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('slide-template/CSS/Hybrid.min.css')}}">
    
    <script src="{{URL::asset('slide-template/JS/highlight.js.min.js')}}"></script>


  </head>
  
  <body>
    <div class="reveal">
      <div class="slides">
        <section>
            <section>
                <br>
                <h2>
                    Wed Development Basics
                </h2>
                <div>
                    This tutorial will give a basic insight of 
                </div>
                <ol type="I">
                    <li>
                        <b> Front End Development </b>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Javascript (Just Introduction)</li>
                        </ul>
                    </li>
                    <li>
                        <b> Server Side Development </b>
                        <ul>
                            <li>PHP</li>
                            <li>MySQL (For database management)</li>
                        </ul>
                    </li>
                    <li>
                        Introduction on how to host your website
                    </li>
                </ol>
            </section>
            <section>
                <br><h2>Why HTML / CSS? </h2>
                <img src="{{URL::asset('slide-template/Images/HTML5_sticker.png')}}">
            </section>
            <section>
                <br><h3>What is an HTML file?</h3><br>
                <ul>
                    <li>HTML is a format that tells a computer how to display a web page.
                    <li>The documents themselves are plain text files with special "tags" or codes.
                    <li>HTML files can be recognised by their .html / htm extension.
                </ul>
            </section>
            <section>
                <br><h3>You will need:<br></h3>
                -A text editor<br><br><br>
                <div style="float:left">
                    <span style="margin-left:-70px;">Linux<br></span>
                    <ul>
                        <li>VIM
                        <li>Emacs
                        <li>Sublime Text
                        <li>Geany
                    </ul>
                </div>
                <div>
                    Windows<br>
                    <ul>
                        <li>Notepad
                        <li>Notepad++
                        <li>Sublime Text
                    </ul>
                </div>
                <br><br>My favourite - Sublime Text
            </section>
            <section>
                <br><h3>You will need:<br></h3>
                -A web browser<br><br>
                <div style="float:left">
                    <span style="margin-left:-300px;"> Linux<br></span>
                    <ul>
                        <li>Mozilla Firefox
                        <li>Chromium / Google Chrome
                    </ul>
                </div>
                <div>
                    <span style="margin-left:-80px;">Windows<br></span>
                    <ul>
                        <li>Internet Explorer
                        <li>Safari
                        <li>Opera Mini
                        <li>Google Chrome
                        <li>Mozilla Firefox
                    </ul>
                </div>
                <br><br>My favourite - Firefox / Chrome
            </section>
            <section>
                <img src="{{URL::asset('slide-template/Images/ie.jpeg')}}" height="650px">
            </section>
        </section>
        <section>
            <section>
                <br><h2>My First Web Page</h2><br>
                <pre><code class="Hybrid">
                &lt;!DOCTYPE html&gt;
                    &lt;html&gt;
                        &lt;head&gt;
                            &lt;title&gt;Hello World!&lt;/title&gt;
                        &lt;/head&gt;
                        &lt;body&gt;
                            This is my first homepage.
                            &lt;strong&gt;<strong>This text is bold</strong>&lt;/strong&gt;
                        &lt;/body&gt;
                    &lt;/html&gt;
                </code></pre>
                --> Save the file with .html extension<br>
                --> Right click - Open using browser
            </section>
            <section>
                <br><h3>Lets make the webpage better</h3><br>
                Add a heading
                <pre><code class="Hybrid">
                    &lt;h1&gt;Lorem Ipsum&lt;/h1&gt;
                </pre></code>
                Add another heading
                <pre><code class="Hybrid">
                    &lt;h2&gt;Lorem Ipsum again&lt;/h2&gt;
                </pre></code>
                Write the content
                <pre><code class="Hybrid">
                    <br>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <br>consequat.&lt;/p&gt;
                </pre></code>
            </section>
            <section>
                <h4>Some more useful tags</h4>
                Break to a new line
                <pre><code class="Hybrid">
                    &lt;br&gt;
                </pre></code>
                Create a horizontal line on the page
                <pre><code class="Hybrid">
                    &lt;hr&gt;
                </pre></code>
                Create a list
                <pre><code class="Hybrid">
                    &lt;ul&gt;
                        &lt;li&gt;Apples&lt;/li&gt;
                        &lt;li&gt;Mangoes&lt;/li&gt;
                    &lt;/ul&gt;
                </pre></code>
                Comment - A a piece of text ignored by the browser
                <pre><code class="Hybrid">
                    &lt;!-- But Brutus is an honourable man --&gt;
                </pre></code>
            </section>
            <section>
                <br><h3>Tag Attributes</h3>
                Some tags have optional (or compulsory) attributes<br><br>
                For example<br>
                <pre><code class="Hybrid">
                    &lt;body bgcolor="blue"&gt;
                </pre></code>
                To add an image, do the following
                <pre><code class="Hybrid">
                    &lt;img src="file/path/name.jpg" alt="fluffy cat"&gt;
                </pre></code>
                Hyperlinks!
                <pre><code class="Hybrid">
                    &lt;a href="http://www.google.co.in"&gt;Go to Google&lt;/a&gt;
                </pre></code>
            </section>
            <section>
                <br><h3>Nesting</h3><br>
                Make your code look neater<br><br>
                <pre><code class="Hybrid">
                    &lt;html&gt;
                        &lt;head&gt;
                            &lt;title&gt;Woofwoof&lt;/title&gt;
                        &lt;/head&gt;
                        &lt;body&gt;
                            &lt;img src="chihuahua.jpg" width:"100px"&gt;
                            &lt;p&gt;I love dogs and my favourite is this one.
                            I also love-&lt;/p&gt;
                            &lt;ul&gt;
                                &lt;li&gt;Cows&lt;/li&gt;
                                &lt;li&gt;Platypus/Platypuses/Platypi?&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/body&gt;
                    &lt;/html&gt;
                </pre></code>
            </section>
            <section>
                <br><h3>HTML Entities</h3><br>
                HTML can render entities that aren't present on a keyboard
                <pre><code class="Hybrid">
                        &nbsp;&nbsp;&nbsp; non-breaking space    &amp;nbsp;
                        &lt;   less than             &amp;lt;
                        &gt;   greater than          &amp;gt;
                        &amp;   ampersand             &amp;amp;
                        &cent;   cent                  &amp;cent;
                        &pound;   pound                 &amp;pound;
                        &yen;   yen                   &amp;yen;
                        &euro;   euro                  &amp;euro;
                        &copy;   copyright             &amp;copy;
                        &reg;   registered trademark  &amp;reg;
                </pre></code>
            </section>
            <section>
                <br><h1>CRTL</h1><br><h1>'U'rself!</h1><br><br>
                To view the source code of any webpage<br>
                Press Ctrl + U 
            </section>
        </section>
        <section>
            <section>
                <br><h3>CSS - Cascading Style Sheets</h3><br>
                <h4>Making beautification of webpages simple</h4><br><br>
                <span style="margin-left:-70px;">Three ways to add CSS to your page-</span>
                <ol>
                    <br><li>External CSS file
                    <li>Using style tag in the head of the document
                    <li>Adding style attribute to a tag
                </ol>
            </section>
            <section>
                <br><h4>External CSS file</h4>
                <pre><code class="Hybrid">
                    &lt;head&gt;
                        &lt;link rel="stylesheet" href="path/file/name.css"&gt;
                    &lt;/head&gt;
                </pre></code>
                <h4>Style tag in head</h4>
                <pre><code class="Hybrid">
                    &lt;head&gt;
                        &lt;style&gt;
                            body{
                                background-image: url("file/path/name.jpg");
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                </pre></code>
                <h4>Style attribute</h4>
                <pre><code class="Hybrid">
                    &lt;p style="color:#ff0000;"&gt;Me like potato&lt;/p&gt;
                </pre></code>
            </section>
            <section>
                <br><h3>Lets look at some CSS Code</h3><br>
                <pre><code class="Hybrid">
                    body{
                        background-image: url("file/path/name.jpg");
                        margin-left: 20px; /*right/top/bottom*/
                        padding-left: 10px; /*right/top/bottom*/
                        color: #1F1F1F;
                        text-align: center; /*Not centre!*/
                        border: 5px solid red;
                        left: 10%;  /*right/top/bottom*/
                        font-family: Arial;
                        text-decoration: underline; /*none*/
                    }
                </pre></code>
            </section>
        </section>
            <section>
                <br><h1>F12</h1><br>
                <h3>Dev Tools</h3><br><br>
                Another useful method to debug / view source<br><br>
                Let's play...
            </section>
        </section>
        <section>
            <section>
                <br><h2>References:</h2><br>
                How to create homepage on www.home.iitb.ac.in-<br>
                <a href="http://www.cc.iitb.ac.in/engtutorials/97-how-to-create-hompage-on-homepagesiitbaci">Instruction page</a>
                <br><br>HTML5 tags <a href="http://568397435.r.lightningbase-cdn.com/wp-content/uploads/2014/02/html5-cheat-sheet.png">cheat sheet</a><br>
                <br><a href="http://www.w3schools.com">W3Schools</a>
                <br><a href="http://www.w3schools.com">
            </section>
        </section>
      </div>
    </div>
    
    <script type="text/javascript">
    Reveal.initialize({

    // Display controls in the bottom right corner
    controls: true,

    // Display a presentation progress bar
    progress: true,

    // Display the page number of the current slide
    slideNumber: false,

    // Push each slide change to the browser history
    history: false,

    // Enable keyboard shortcuts for navigation
    keyboard: true,

    // Enable the slide overview mode
    overview: true,

    // Vertical centering of slides
    center: false,

    // Enables touch navigation on devices with touch input
    touch: true,

    // Loop the presentation
    loop: false,

    // Change the presentation direction to be RTL
    rtl: false,

    // Turns fragments on and off globally
    fragments: true,

    // Flags if the presentation is running in an embedded mode,
    // i.e. contained within a limited portion of the screen
    embedded: false,

    // Number of milliseconds between automatically proceeding to the
    // next slide, disabled when set to 0, this value can be overwritten
    // by using a data-autoslide attribute on your slides
    autoSlide: 0,

    // Stop auto-sliding after user input
    autoSlideStoppable: true,

    // Enable slide navigation via mouse wheel
    mouseWheel: false,

    // Hides the address bar on mobile devices
    hideAddressBar: true,

    // Opens links in an iframe preview overlay
    previewLinks: false,

    // Transition style
    transition: 'default', // default/cube/page/concave/zoom/linear/fade/none

    // Transition speed
    transitionSpeed: 'default', // default/fast/slow

    // Transition style for full page slide backgrounds
    backgroundTransition: 'default', // default/none/slide/concave/convex/zoom

    // Number of slides away from the current that are visible
    viewDistance: 3,

    // Parallax background image
    parallaxBackgroundImage: '', // e.g. "'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg'"

    // Parallax background size
    parallaxBackgroundSize: '' // CSS syntax, e.g. "2100px 900px"

    });
    </script>


    <script src="{{URL::asset('slide-template/JS/jquery.js')}}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

  </body>  
</html>
