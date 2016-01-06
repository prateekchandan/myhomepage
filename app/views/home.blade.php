@extends('template.master')

@section('page')
    <div id="top" class="jumbotron" data-src="./view/images/window_rain_animation.gif" data-position="bottom right">
        <div class="container">
            <h1>
                    Prateek Chandan
                </h1>
            <p class="lead">
                {{$quote}}
            </p>
        </div>
        <div class="overlay">
        </div>
        <a href="#profile" class="scroll-down">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
    </div>
    <nav class="navbar navbar-default" id="navbar-example" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">
                        Toggle navigation
                    </span>
                <span class="icon-bar">
                    </span>
                <span class="icon-bar">
                    </span>
                <span class="icon-bar">
                    </span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#profile">Profile</a>
                </li>
                <li>
                    <a href="#experiences">Experiences</a>
                </li>
                <li>
                    <a href="#projects">Projects</a>
                </li>
                <li>
                    <a href="#abilities">Abilities</a>
                </li>
                <li>
                    <a href="#interests">Interests</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div class="background-white">
        <div id="profile" class="container">
            <h2>
                    Profile
                </h2>
            <p class="lead">
                I&#039;m a Computer Science 4th Year Under Graduate at
                <a href="http://www.iitb.ac.in">IIT Bombay</a>
            </p>
            <hr />
            <div class="row">
                <div class="col-md-4">
                    <h3>
                            About me
                        </h3>
                    <p>
                        I am an all round web developer. I am a senior programmer with good knowledge of front-end techniques. I love structure and order and I also stand for quality. I love spending time on fixing little details and optimizing web apps. Also I like working in a team, you'll learn faster and more. As the saying goes: 'two heads are better than one'.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="view/images/prateek.png" alt="Prateek Chandan" width="246" height="246" />
                    <br>
                    <a class = "btn btn-success" href="{{URL::asset('docs/resume.pdf')}}">See My Resume</a>
                </div>
                <div class="col-md-4">
                    <h3>
                            Details
                        </h3>
                    <p>
                        <strong>
                                Name:
                            </strong>
                        <br /> Prateek Chandan
                        <br />
                        <strong>
                                Birthday:
                            </strong>
                        <br /> 15
                        <sup>
                                th
                            </sup> March
                        <br />
                        <strong>
                                Location:
                            </strong>
                        <br /> Hostel 9, IIT Bombay,Mumbai
                    </p>
                </div>
            </div>
        </div>
        <div id="experiences" class="container">
            <h2>
                    Experiences
                </h2>
            <p class="lead">
                &ldquo;Protons give an atom its identity, electrons its personality.&rdquo;
                <br /> - Bill Bryson, A short history of nearly everything
            </p>
            <hr />
            <h3>
                    Educations
                </h3>
            <div class="experiences">
                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                                IIT Bombay
                            </h4>
                        <p class="experience-period">
                            June 2012 - Present
                        </p>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <strong>
                                    B.Tech , Computer Science and Engineering
                                </strong>
                            <span class="hidden-phone">
                                    Current CPI : 8.63
                                </span>
                            <span class="experience-details">
                                    <span class="location">
                                        <span class="glyphicon glyphicon-map-marker">
                                    </span> Powai ,Mumbai
                                     <span class="seperator">
                                        |
                                    </span>
                                    <span class="link">
                                                <span class="glyphicon glyphicon-link">
                                                </span>
                                    <a href="http://www.iitb.ac.in/" target="_blank">http://www.iitb.ac.in/</a>
                                    </span>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                                DPS , Bokaro
                        </h4>
                        <p class="experience-period">
                            june 2010 - april 2012
                        </p>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <strong>
                                    11th and 12th ,PCM with C++
                                </strong>
                            <span class="hidden-phone">
                                    Board percentage : 95.8 %
                                </span>
                            <span class="experience-details">
                                    <span class="location">
                                        <span class="glyphicon glyphicon-map-marker">
                                        </span> Bokaro , Jharkhand

                                    </span>
                                     <span class="seperator">
                                        |
                                    </span>
                                    <span class="link">
                                                <span class="glyphicon glyphicon-link">
                                                </span>
                                    <a href="http://dpsbokaro.com/" target="_blank">http://dpsbokaro.com/</a>
                                    </span>
                            </span>
                        </p>
                    </div>
                </div>

                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                                Sainik School Tialiya
                        </h4>
                        <p class="experience-period">
                            april 2005 - April 2012
                        </p>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <strong>
                                    Schooling from 5th - 10th
                                </strong>
                            <span class="hidden-phone">
                                    Board CGPA : 9.6
                            </span>
                            <span class="experience-details">
                                    <span class="location">
                                        <span class="glyphicon glyphicon-map-marker">
                                        </span> Jhumri Tilaiya , Koderma

                                    </span>
                                     <span class="seperator">
                                        |
                                    </span>
                                    <span class="link">
                                                <span class="glyphicon glyphicon-link">
                                                </span>
                                    <a href="http://www.sainikschooltilaiya.org/" target="_blank">http://www.sainikschooltilaiya.org/</a>
                                    </span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <hr />
            <h3>
                    Careers
                </h3>
            <div class="experiences">
                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                                <a href="http://www.infermap.com" style="color:#333">Microsoft</a>
                            </h4>
                        <p class="experience-period">
                            March 2015 - July 2015
                        </p>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <strong>
                                    Software Developer - Summer Intern
                                </strong>
                            <span class="hidden-phone">
                                    Worked on an Application "<b>Checkmark - Correction App For Teachers</b>" as a part of Microsoft's One Inida Education Initiaitive.
                                    Worked intensively on android canvas , bitmaps and memory amangement in android
                                </span>
                            <span class="experience-details">
                                    <span class="location">
                                        <span class="glyphicon glyphicon-map-marker">
                                        </span> IDC Hyderabad , India
                            </span>
                            <span class="seperator">
                                        |
                                    </span>
                            <span class="link">
                                        <span class="glyphicon glyphicon-link">
                                        </span>
                            <a href="https://www.microsoft.com/en-in/msidc/" target="_blank">Microsoft India Development Center</a>
                            </span>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                                <a href="http://www.infermap.com" style="color:#333">Infermap</a>
                            </h4>
                        <p class="experience-period">
                            Nov 2013 - December 2014
                        </p>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <strong>
                                    Technical Director &amp; Lead Developer
                                </strong>
                            <span class="hidden-phone">
                                    Infermap is a free comprehensive platform that improves the college selecting
                                    process, based on individual resources and requirements.Inspired by a belief
                                    that all students deserve access to good guidance, infermap aims to create
                                    the interactive tools and media that guide students as they find, afford
                                    and enroll in a college that’s a good fit for them.
                                </span>
                            <span class="experience-details">
                                    <span class="location">
                                        <span class="glyphicon glyphicon-map-marker">
                                        </span> IIT Bombay
                            </span>
                            <span class="seperator">
                                        |
                                    </span>
                            <span class="link">
                                        <span class="glyphicon glyphicon-link">
                                        </span>
                            <a href="http://www.infermap.com/" target="_blank">http://www.infermap.com/</a>
                            </span>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                                <a href="http://www.infermap.com" style="color:#333">Shezartech</a>
                            </h4>
                        <p class="experience-period">
                            May 2014 - July 2014
                        </p>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <strong>
                                    Software Developer - Summer Intern
                                </strong>
                            <span class="hidden-phone">
                                    <ul>
                                        <li>
                                            Implemented a web based JEE Practice Engine with ranking system of student
                                            by detecting difficulty of problems
                                        </li>
                                        <li>
                                            Implemented a web based Learning Management System
                                        </li>
                                    </ul>
                                </span>
                            <span class="experience-details">
                                    <span class="location">
                                        <span class="glyphicon glyphicon-map-marker">
                                        </span> Andheri , Bombay
                            </span>
                            <span class="seperator">
                                        |
                                    </span>
                            <span class="link">
                                        <span class="glyphicon glyphicon-link">
                                        </span>
                            <a href="https://iitjeeacademy.com/" target="_blank">https://iitjeeacademy.com/</a>
                            </span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="projects" class="container">
            <h2>
                Projects Undertaken       
            </h2>
            <p class="lead">
                &ldquo;Protons give an atom its identity, electrons its personality.&rdquo;
                <br /> - Bill Bryson, A short history of nearly everything
            </p>
            <hr />
            <h3>
                Course Projects
            </h3>
            <div class="experiences">
                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                            QuizApp Server - R&amp;D Project
                        </h4>
                        <p class="experience-period">
                            January 2015 - April 2015
                        </p>
                        <p>
                            Guide : Prof. Bhaskaran Raman
                        </p>
                    </div>
                    <div class="col-md-8">
                        <ul>
                            <li>
                                Designed a Web Application and REST Framework APIs for an App to conduct in class quiz with proper security mechanisms. Platform - PHP with MVC Framework Laravel 
                            </li>
                            <li>
                                Worked on various security aspects, created a custom symbol font for passcode authentication, properLDAP Authentication, maintainence of states and logging all student event
                            </li>
                        </ul>
                        
                    </div>
                </div>

                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                            Web Based Remote Desktop Connection 
                        </h4>
                        <p class="experience-period">
                            August 2014 - November 2014
                        </p>
                        <p>
                            Guide : Prof. Varsha Apte
                        </p>
                    </div>
                    <div class="col-md-8">
                        <ul>
                            <li>
                               Implemented a server client program using Websockets to implement a remote desktop connection
                            </li>
                            <li>
                                Authentication system and Auto Load balancing was a part of this project
                            </li>
                        </ul>
                        <span class="experience-details">
                                    <span class="location">
                                        <i class="fa fa-github fa-lg"></i> 
                                        <a href="https://github.com/prateekchandan/Remote-Desktop-Connection" target="_blank">Check Source Code</a>
                                </span>
                        </span>
                    </div>
                </div>

                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                            English to SQL Machine Translation
                        </h4>
                        <p class="experience-period">
                            August 2014 - November 2014
                        </p>
                        <p>
                            Guide : Prof P. Bhattacharya
                        </p>
                    </div>
                    <div class="col-md-8">
                        <ul>
                            <li>
                                Workied on various aspects of Natural Language Processing to extract SQL Queries from the natural languge
                            </li>
                            <li>
                                Implemented Rule Based translation and Statistical translation using Moses to test their differences and possibilities and challenges in both
                            </li>
                            <li>
                                Implemented SQL Query checker to check if the query formed is correct
                            </li>
                        </ul>
                        <span class="experience-details">
                                    <span class="location">
                                        <i class="fa fa-github fa-lg"></i> 
                                        <a href="https://github.com/shyamjvs/cs626_project" target="_blank">Check Source Code</a>
                            </span>
                            <span class="seperator">
                                        |
                                    </span>
                            <span class="link">
                                        <span class="glyphicon glyphicon-link">
                                        </span>
                            <a href="{{URL::Route('cs626')}}" target="_blank">See Presentation</a>
                            </span>
                            </span>
                    </div>
                </div>

                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                            Transformer Modelling in OpenGL C++
                        </h4>
                        <p class="experience-period">
                            August 2014 - November 2014
                        </p>
                        <p>
                            Guide : Prof. Parag Chaudhuri
                        </p>
                    </div>
                    <div class="col-md-8">
                        <ul>
                            <li>
                                Built a model of transformer in OpenGL C++ along with interactive keyboard controls
                            </li>
                            <li>
                                Created 3D environment and made a short movie using key-frame interpolation
                            </li>
                        </ul>
                        <span class="experience-details">
                                    <span class="location">
                                        <i class="fa fa-github fa-lg"></i> 
                                        <a href="https://github.com/prateekchandan/cs475" target="_blank">Check Source Code</a>
                            </span>
                            <span class="seperator">
                                        |
                                    </span>
                            <span class="link">
                                        <span class="glyphicon glyphicon-link">
                                        </span>
                            <a href="https://www.youtube.com/watch?v=U52283hqNVs" target="_blank">See Video</a>
                            </span>
                            </span>
                    </div>
                </div>

                <div class="experience row">
                    <div class="col-md-4">
                        <h4>
                            Voice Controlled Bot and Biped
                        </h4>
                        <p class="experience-period">
                            April 2014 - May 2014
                        <p>
                            Institute Technical Summer Projects
                        </p>
                    </div>
                    <div class="col-md-8">
                        <ul>
                            <li>
                                Implemented Hidden Markov Model for the voice processing module. Coded in MATLAB involved
algorithms like Viterbi and Forward-backward algorithm
                            </li>
                            <li>
                                Built a self-designed Remote controlled car and a Biped Bot to work from voice commands
                            </li>
                        </ul>
                        <span class="experience-details">
                                    <span class="location">
                                        <i class="fa fa-github fa-lg"></i> 
                                        <a href="https://github.com/prateekchandan/Voice-Controlled-Biped-Bot" target="_blank">Check Source Code</a>
                            </span>
                            <span class="seperator">
                                        |
                                    </span>
                            <span class="link">
                                        <span class="glyphicon glyphicon-link">
                                        </span>
                            <a href="https://www.youtube.com/watch?v=CA1eNgIwgEY" target="_blank">See Video1</a> or
                            <a href="https://www.youtube.com/watch?v=TqDJe8RzJvM" target="_blank">Video2</a>

                            </span>

                            <span class="seperator">
                                        |
                                    </span>
                            <span class="link">
                            <i class="fa fa-book"></i>
                            <a href="http://www.stab-iitb.org/wiki/1RE22_Voice_Controlled_Bot" target="_blank">Read Ducumentation</a>
                            </span>
                            </span>
                    </div>
                </div>
               
            </div>
            
        </div>
        <div class="background-white">
            <div id="abilities" class="container">
                <h2>
                        Abilities
                </h2>
                <p class="lead">
                    &ldquo;Life without knowledge is death in disguise.&rdquo;
                    <br> - Talib Kweli
                </p>
                <hr>
                <h3>
                        Skills
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="no-bullets">
                            <li>
                                <span class="ability-title">
                                        C
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        C++
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        JSON
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        MySQL
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        PHP
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Android
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Bootstrap 2/3
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        JQuery
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Java
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Javascript
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Python
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="no-bullets">
                            <li>
                                <span class="ability-title">
                                        Laravel
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Scheme / Lisp
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Object Orientated Programming
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        HTML5
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Arduino
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        CSS3
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        AJAX
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Wordpress
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        BASH
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Latex
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                       Prolog
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
    
                <hr>
                <h3>
                        Languages
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="no-bullets">
                            <li>
                                <span class="ability-title">
                                        Hindi (Mother tongue)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        English 
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="no-bullets">
                            <li>
                                <span class="ability-title">
                                        Sanskrit
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <!--h3>
                        Tools
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="no-bullets">
                            <li>
                                <span class="ability-title">
                                        Filezilla (8 years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Firefox (8 years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        MS Office (10+ years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Notepad++ (8 years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Webkit browsers (6 years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Windows (10+ years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Adobe Fireworks (8 years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="no-bullets">
                            <li>
                                <span class="ability-title">
                                        Internet Explore 6+ (8 years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Mac (2 years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Sublime Text (2 years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Subversion (5 years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Adobe Photoshop (6 years)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Coda (1 year)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                            <li>
                                <span class="ability-title">
                                        Git (1 year)
                                    </span>
                                <span class="ability-score">
                                        <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star filled">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                <span class="glyphicon glyphicon-star ">
                                        </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div-->
            </div>
        </div>
        <div id="interests" class="container">
            <h2>
                    Interests
                </h2>
            <p class="lead">
                &ldquo;You can do anything you set your mind to.&rdquo;
                <br /> - Benjamin Franklin
            </p>
            <hr />
            <div class="row">
                <div class="col-md-4 left">
                    <img src="view/images/interests/algorithms.png" alt="Algorithms" width="220" height="220" />
                </div>
                <div class="col-md-8 interest-content">
                    <h3>
                            Algorithms
                        </h3>
                    <p>
                        I love solving riddles and problems and building stuff from scratch. My strong suit is that I don't give up without a fight. When trying to find the solution to a problem, I will not quit until I find at least one. The satisfaction I get from solving a problem can really make my day.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 right">
                    <img src="view/images/interests/music.png" alt="Music" width="220" height="220" />
                </div>
                <div class="col-md-8 interest-content">
                    <h3>
                            Music
                        </h3>
                    <p>
                        I can listen to music all day. I have a varied taste of music and I listen to it at work, during sports, riding my bike, on the train... I mostly listen old songs of indian artists like rafi , kishore , lata mangeshkar etc
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 left">
                    <img src="view/images/interests/sports.png" alt="Sports" width="220" height="220" />
                </div>
                <div class="col-md-8 interest-content">
                    <h3>
                            Sports
                        </h3>
                    <p>
                        I couldn't live without sports. In the weekend you will find me playing basketball - just check out my Runkeeper. Once or twice a week, you'll find me in the gym or at the tracks
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 right">
                    <img src="view/images/interests/travel.png" alt="Travel" width="220" height="220" />
                </div>
                <div class="col-md-8 interest-content">
                    <h3>
                            Travel
                        </h3>
                    <p>
                        I am pretty much enthusiast about travelling. So far I have visited mountains in sikkim , beaches in maharashtra and odisa liki in puri , Goa beahces etc , historical places like ruins of nalanda , shanti stupa in rajgir &amp; sarnath , hill stations like kodaikanal , lovavala , matheran , panchgani , mahabaleshwar and many more. Living in India I feel still I have 90% of the explorations yet to be done. 
                    </p>
                </div>
            </div>
        </div>
        <div class="background-gray">
            <div id="contact" class="container">
                <h2>
                        Contact
                    </h2>
                <p class="lead">
                    &ldquo;If I had asked people what they wanted, they would have said faster horses. &rdquo;
                    <br /> - Henry Ford
                </p>
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <ul class="no-bullets">
                            <li>
                                <a href="https://www.facebook.com/prateekchandan5545" target="_blank">
                                    <span class="fa fa-facebook-square fa-2x"></span> prateekchandan5545 </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/+PrateekChandan" target="_blank">
                                    <span class="fa fa-google-plus-square fa-2x"></span> https://plus.google.com/+PrateekChandan </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="no-bullets">
                            <li>
                                <a href="http://github.com/prateekchandan/" target="_blank">
                                    <span class="fa fa-github-square fa-2x"></span> http://github.com/prateekchandan/ </a>
                            </li>
                            <li>
                                <a href="mailto:prateekchandan5545@gmail.com">
                                    <span class="icon icon-email"></span> prateekchandan5545@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr />
                <div class="row">
                	<div class="col-md-3" style="text-align:right">
                		<b>Address:</b>
                	</div>
                	<div class="col-md-6">
                		<address>
						Hostel 9<br>
						IIT Bombay , Powai<br>
						Mumbai - 400076
					</address>
                	</div>
                </div>
                <div class="row">
                	<div class="col-md-3" style="text-align:right">
                		<b>Phone:</b>
                	</div>
                	<div class="col-md-6">
                		Please <a style="display:inline" href="mailto:prateekchandan5545@gmail.com">mail me</a> to get my number
                	</div>
                </div>
                <hr>
                <div class="row">
                    <a style="opacity: 1.0;filter: alpha(opacity=100);" href="https://www.google.co.in/maps?q=hotel+9+iitb+bombay&ion=1&espv=2&bav=on.2,or.r_cp.&bvm=bv.101214132,d.c2E&biw=1366&bih=635&dpr=1&um=1&ie=UTF-8&sa=X&ved=0CAYQ_AUoAWoVChMI-biG0JzFxwIVwwmOCh0oWQqw" target="_blank"><img src="https://maps.googleapis.com/maps/api/staticmap?center=19.131712,72.91764&zoom=15&size=800x300" style="width:100%"></a>
                </div>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- New Add -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-9539937655115229"
                     data-ad-slot="8864913199"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <hr>
                <div class="row">
                	<center>&copy; Prateek Chandan. Last updated on 2nd August, 2015</center>
                </div>
            </div>
        </div>
    </div>
@endsection
