@extends('template.page')

@section('content')
<div class="background-white">
	<div id="writings" class="container">
	    <h2>
	        Basics of Web Development 
	    </h2>
	    <p class="lead">
	       This session was conducted by me. This page contains the source codes , slides and other resources used in the session
	    </p>
	    <p>
	    	<a class="alert" href="{{URL::route('wd101-slides')}}">
	    		Here are the slides used
	    	</a>
	    </p>
	    <hr />
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1 interest-content">
	            <h3>
	                Documents and useful links
	            </h3>
	            <p>
	                Here is a document written by Ranveer Aggarwal , Manager , WnCC  which gives you a basic insight on HTML. You can use this for reference
	                <br>
	                <a class="btn btn-success" href="{{URL::asset('view/docs/htmldoc.pdf')}}">Download this</a>
	            </p>
	            <p>HTML5 tags <a href="http://568397435.r.lightningbase-cdn.com/wp-content/uploads/2014/02/html5-cheat-sheet.png">cheat sheet</a><br>
                <br><a href="http://www.w3schools.com">W3Schools</a> is a website which has the basics tutorials on all kind of web dev tools 
	            </p>
	            
	        </div>
	    </div>
	    <hr>
	   	<div id="disqus_thread"></div>
	    <script type="text/javascript">
	        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	        var disqus_shortname = 'prateekchandan'; // required: replace example with your forum shortname

	        /* * * DON'T EDIT BELOW THIS LINE * * */
	        (function() {
	            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	        })();
	    </script>
	    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	    
	</div>
</div>
@endsection