@extends('template.page')

@section('content')
<div class="background-white">
	<div id="writings" class="container">
	    <h2>
	        How to setup a Localhost server on your machine
	    </h2>
	    <p class="lead">
	       Localhost is a computer's internal IP (Internet Protocol) address through which you can test web software. To set up and use localhost on your computer, you need to set up a test server. 
	    </p>
	    <p>
	    	Note: In this tutorial I will be explaining steps for a PHP based apache server with MySQL. For others contact me personally
	    </p>
	    <hr />
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1 interest-content">
	            <h3>
	                Basic Requirements
	            </h3>
	            <p>
	                To Run a localhost server successfully on your machine following things are required
	            </p>
	            <ul>
	            	<li>A PC with some operating system (obviously) :P</li>
	            	<li>A server application preferable <b>Apache</b></li>
	            	<li><a href="http://en.wikipedia.org/wiki/PHP" target=_blank>PHP</a> installed in your machine to handle all your server side requests</li>
	            	<li><a href="http://www.mysql.com/">MySQL</a> or others to manage your databases</li>
	            	<li><a href="https://www.phpmyadmin.net/">phpMyAdmin</a> - A web interface to view your database</li>
	            </ul>
	        </div>
	    </div>
	    <hr>
	    <div class="row">
	        <div class="col-md-4 left">
	            <img src="{{URL::asset('view/images/writings/ubuntu.png')}}" alt="Algorithms" width="220"
	            height="220" />
	        </div>
	        <div class="col-md-8 interest-content">
	            <h3>
	            	On Linux (Ubuntu)
	            </h3>
	            <ul>
	            	<li>
	            		<b>Step 1: Install Apache</b><br>
	            		<code>sudo apt-get install apache2</code><br>
	            		This will install apache2 on your system. Once you got it installed you can type <a href="http://localhost">http://localhost</a> in your browser to check if you are getting a default apache page
	            	</li>
	            	<li>
	            		<b>Step 2: Check out where this file resides</b><br>
	            		The page displayed on the screen in present in <emp>/var/www/html/index.html</emp> 
	            		<br>
	            		By default all your code resides in the folder "<emp>/var/www/html</emp>"
	            		<br>
	            		Now delete the file index.html and create a new file named index.php with <code>&lt;?php phpinfo();?&gt;</code> in it
	            	</li>
	            	<li>
	            		<b>Step 3: Install PHP</b><br>
	            		<code>sudo apt-get install php5</code><br>
	            		This will install php on your system. Once you got it installed  go to your command line and check if it is installed by typing:<br>
	            		<code>
	            			prateek@prateek:~$ cd /var/www/html<br>
	            			prateek@prateek:~$ php index.php
	            		</code>
	            		<br>
	            		It will run with some random output. Dont worry to look at it. But at this step when you type <a href="http://localhost">http://localhost</a> in your browser php wont be exectued
	            	</li>
	            	<li>
	            		<b>Step 4: Configure php with apache</b><br>
	            		<code>sudo apt-get install libapache2-mod-php5<br>
	            		sudo a2enmod php5<br>
	            		sudo service apache2 restart</code><br>
	            		After running this type <a href="http://localhost">http://localhost</a> in your browser to check if your php file is running 
	            	</li>
	            	<li>
	            		<b>Step 5: Install MySQL</b><br>
	            		<code>sudo apt-get install mysql-server</code><br>
	            		This will install MYSQL on your system.This will prompt for root password. Don't forget the password you set here. To check if its properly installed type <code>mysql -u root -p</code> on your terminal and see if it works
	            	</li>
	            	<li>
	            		<b>Step 6: Install phpMyAdmin</b><br>
	            		<code>sudo apt-get install phpmyadmin</code><br>
	            		Upon prompt , provide the password of phpmyadmin and mysql.
	            		Once installation completes paste the following line into the file <i>/etc/apache2/apache2.conf</i><br>
	            		<code>Include /etc/phpmyadmin/apache.conf</code>
	            		<br>
	            		Now restart apache server <br>
	            		<code>sudo service apache2 restart</code>
	            	</li>
	            </ul>
	        </div>
	    </div>
	    <hr>
	    <div class="row">
	        <div class="col-md-8 interest-content">
	            <h3>
	            	Windows
	            </h3>
	            <p>
	            	If you are on windows then there are multiple softwares toolkit which provides you all of the requirements into one package
	            	<br>
	            	<br>
	            	<h4><b>XAMPP</b></h4>
	            	XAMPP Apache + MySQL + PHP + Perl , is the most popular PHP development environment
	            	<br>
	            	XAMPP is a completely free, easy to install Apache distribution containing MySQL, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use.
	            	<br>
	            	<b>To install :</b> Go to its <a href="https://www.apachefriends.org/index.html" target=_blank>it's official website</a>  click on XAMPP , Download the installer and install it 
	        </div>
	        <div class="col-md-4 left">
	            <img src="{{URL::asset('view/images/writings/windows-logo.png')}}" alt="Algorithms" width="220"
	            height="220" />
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