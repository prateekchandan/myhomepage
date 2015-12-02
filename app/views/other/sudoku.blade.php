
@extends('template.master')

@section('page')
<style>

body{
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
	background: url({{URL::asset('view/images/sbak.png')}});
	 overflow-x: hidden;
}


.btn1 {
	color: black;
    -webkit-border-radius: 0 !important;
    -moz-border-radius: 0 !important;
    border-radius: 0 !important;
}
.form-control{
	-webkit-border-radius: 0 !important;
    -moz-border-radius: 0 !important;
    border-radius: 0 !important;
}

#center{
	overflow: auto;
	height: 480px;
	border-radius: 30px;
	background-color: rgba(0,0,0,0.5);
	margin-top: 50px;
}

#board{
	overflow: auto;
}

#left{
	padding-left: 100px;
	padding-top: 50px;
}
#right{
	padding-left: 100px;
	padding-top: 50px;
}
#right-well{
	border: 1px solid rgba(0,0,0,0.8);
	background-color: rgba(0,0,0,0.7);
	box-shadow: 0pt 1px 1px rgba(0, 0, 0, 0.05) inset;
	width: 300px;
}
#left-well{
	border: 1px solid rgba(0,0,0,0.8);
	background-color: rgba(0,0,0,0.7);
	box-shadow: 0pt 1px 1px rgba(0, 0, 0, 0.05) inset;
	width: 300px;
}

#message{
	width: 300px;
}

.footer{
	text-align: right;
	padding-right: 10px;
}

</style>

<body onload="main()">
<div class="header">
	<center><h1 style="color:white">Sudoku solver</h1></center>
</div>
<div class="bs-docs-grid">
<div class="row show-grid">
	<div id="left" class="col-md-3">
	<div id="levelmessage"></div>
	<div id="left-well" class="span2 well">
		<h3 style="color:white">Settings</h3>
		<hr>
		<div id="go"><button id="btn2" class="btn btn-primary btn-default" onclick = "callchangediff()">Change the difficulty level</button></div>
		<div id="levelsetter" class="input-group">
			<br>
		</div>
		<button id="btn2" class="btn btn-primary btn-default" onclick = "reset()">Reset board</button>
		<br><br>
		<button id="btn2" class="btn btn-primary btn-default" onclick = "emptyboard()">Give your own sudoku</button>
	</div>
	</div>
	<div id="center" class="col-md-7">
		<div id="board"></div>
	</div>
	<div id="right" class="col-md-2">
	<div id="right-well" class="span2 well">
		<h3 style="color:white">Options</h3>
		<hr>
		<button id="btn2" class="btn btn-success btn-default" onclick = "solveit()">Solve</button>
		<br><br>
		<button id="btn2" class="btn btn-danger btn-default" onclick = "checkit()">Check it</button>
		<br>
	</div>
	<div id="message"></div>
	</div>
</div>
</div>
<div class="footer">
	<br><p style="color:white">By <strong><a href="{{URL::to('/')}}">Prateek Chandan</a></strong></p>
</div>
</body>

<script>
var _0xed79=["\x72\x65\x61\x6C","","\x76\x61\x6C\x75\x65","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x6C\x65\x6E\x67\x74\x68","\x73\x61\x68\x69\x20\x61\x6E\x73\x77\x65\x72\x20\x64\x61\x6C\x2E\x2E\x2E\x2E\x73\x75\x64\x6F\x6B\x75\x20\x73\x6F\x6C\x76\x65\x20\x6B\x61\x72\x6E\x61\x20\x6E\x69\x20\x61\x74\x61\x20\x6B\x79\x61\x20\x3F","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x6D\x65\x73\x73\x61\x67\x65","\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x61\x6C\x65\x72\x74\x20\x61\x6C\x65\x72\x74\x2D\x64\x61\x6E\x67\x65\x72\x27\x3E\x3C\x62\x75\x74\x74\x6F\x6E\x20\x74\x79\x70\x65\x3D\x27\x62\x75\x74\x74\x6F\x6E\x27\x20\x63\x6C\x61\x73\x73\x3D\x27\x63\x6C\x6F\x73\x65\x27\x20\x64\x61\x74\x61\x2D\x64\x69\x73\x6D\x69\x73\x73\x3D\x27\x61\x6C\x65\x72\x74\x27\x20\x61\x72\x69\x61\x2D\x68\x69\x64\x64\x65\x6E\x3D\x27\x74\x72\x75\x65\x27\x20\x6F\x6E\x63\x6C\x69\x63\x6B\x3D\x27\x72\x65\x6D\x6F\x76\x65\x5F\x6D\x65\x73\x73\x65\x67\x65\x28\x29\x27\x3E\x26\x74\x69\x6D\x65\x73\x3B\x3C\x2F\x62\x75\x74\x74\x6F\x6E\x3E\x3C\x73\x74\x72\x6F\x6E\x67\x3E\x54\x68\x65\x20\x73\x75\x64\x6F\x6B\x75\x20\x69\x73\x20\x75\x6E\x73\x6F\x6C\x76\x61\x62\x6C\x65\x21\x3C\x2F\x73\x74\x72\x6F\x6E\x67\x3E\x3C\x2F\x64\x69\x76\x3E","\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x61\x6C\x65\x72\x74\x20\x61\x6C\x65\x72\x74\x2D\x64\x61\x6E\x67\x65\x72\x27\x3E\x3C\x62\x75\x74\x74\x6F\x6E\x20\x74\x79\x70\x65\x3D\x27\x62\x75\x74\x74\x6F\x6E\x27\x20\x63\x6C\x61\x73\x73\x3D\x27\x63\x6C\x6F\x73\x65\x27\x20\x64\x61\x74\x61\x2D\x64\x69\x73\x6D\x69\x73\x73\x3D\x27\x61\x6C\x65\x72\x74\x27\x20\x61\x72\x69\x61\x2D\x68\x69\x64\x64\x65\x6E\x3D\x27\x74\x72\x75\x65\x27\x20\x6F\x6E\x63\x6C\x69\x63\x6B\x3D\x27\x72\x65\x6D\x6F\x76\x65\x5F\x6D\x65\x73\x73\x65\x67\x65\x28\x29\x27\x3E\x26\x74\x69\x6D\x65\x73\x3B\x3C\x2F\x62\x75\x74\x74\x6F\x6E\x3E\x3C\x73\x74\x72\x6F\x6E\x67\x3E\x54\x68\x65\x20\x73\x6F\x6C\x75\x74\x69\x6F\x6E\x20\x69\x73\x20\x77\x72\x6F\x6E\x67\x2E\x3C\x2F\x73\x74\x72\x6F\x6E\x67\x3E\x3C\x2F\x64\x69\x76\x3E","\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x61\x6C\x65\x72\x74\x20\x61\x6C\x65\x72\x74\x2D\x73\x75\x63\x63\x65\x73\x73\x27\x3E\x3C\x62\x75\x74\x74\x6F\x6E\x20\x74\x79\x70\x65\x3D\x27\x62\x75\x74\x74\x6F\x6E\x27\x20\x63\x6C\x61\x73\x73\x3D\x27\x63\x6C\x6F\x73\x65\x27\x20\x64\x61\x74\x61\x2D\x64\x69\x73\x6D\x69\x73\x73\x3D\x27\x61\x6C\x65\x72\x74\x27\x20\x61\x72\x69\x61\x2D\x68\x69\x64\x64\x65\x6E\x3D\x27\x74\x72\x75\x65\x27\x20\x6F\x6E\x63\x6C\x69\x63\x6B\x3D\x27\x72\x65\x6D\x6F\x76\x65\x5F\x6D\x65\x73\x73\x65\x67\x65\x28\x29\x27\x3E\x26\x74\x69\x6D\x65\x73\x3B\x3C\x2F\x62\x75\x74\x74\x6F\x6E\x3E\x3C\x73\x74\x72\x6F\x6E\x67\x3E\x57\x65\x6C\x6C\x20\x44\x6F\x6E\x65\x21\x3C\x2F\x73\x74\x72\x6F\x6E\x67\x3E\x3C\x2F\x64\x69\x76\x3E","\x6C\x65\x76\x65\x6C\x6D\x65\x73\x73\x61\x67\x65","\x6C\x65\x76\x65\x6C\x73\x65\x74\x74\x65\x72","\x3C\x62\x72\x3E\x3C\x69\x6E\x70\x75\x74\x20\x69\x64\x20\x3D\x20\x27\x6C\x65\x76\x65\x6C\x27\x20\x74\x79\x70\x65\x3D\x27\x74\x65\x78\x74\x27\x20\x63\x6C\x61\x73\x73\x3D\x27\x66\x6F\x72\x6D\x2D\x63\x6F\x6E\x74\x72\x6F\x6C\x27\x20\x6F\x6E\x62\x6C\x75\x72\x3D\x27\x63\x68\x61\x6E\x67\x65\x64\x69\x66\x66\x69\x63\x75\x6C\x74\x79\x28\x29\x27\x20\x70\x6C\x61\x63\x65\x68\x6F\x6C\x64\x65\x72\x20\x3D\x20\x27\x6C\x65\x76\x65\x6C\x27\x3E\x3C\x62\x72\x3E\x3C\x62\x72\x3E","\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x61\x6C\x65\x72\x74\x20\x61\x6C\x65\x72\x74\x2D\x69\x6E\x66\x6F\x27\x3E\x3C\x62\x75\x74\x74\x6F\x6E\x20\x74\x79\x70\x65\x3D\x27\x62\x75\x74\x74\x6F\x6E\x27\x20\x63\x6C\x61\x73\x73\x3D\x27\x63\x6C\x6F\x73\x65\x27\x20\x64\x61\x74\x61\x2D\x64\x69\x73\x6D\x69\x73\x73\x3D\x27\x61\x6C\x65\x72\x74\x27\x20\x61\x72\x69\x61\x2D\x68\x69\x64\x64\x65\x6E\x3D\x27\x74\x72\x75\x65\x27\x20\x6F\x6E\x63\x6C\x69\x63\x6B\x3D\x27\x72\x65\x6D\x6F\x76\x65\x5F\x6D\x65\x73\x73\x65\x67\x65\x28\x29\x27\x3E\x26\x74\x69\x6D\x65\x73\x3B\x3C\x2F\x62\x75\x74\x74\x6F\x6E\x3E\x3C\x73\x74\x72\x6F\x6E\x67\x3E\x45\x6E\x74\x65\x72\x20\x61\x20\x6E\x75\x6D\x62\x65\x72\x20\x66\x72\x6F\x6D\x20\x31\x20\x74\x6F\x20\x35\x20\x61\x6E\x64\x20\x63\x6C\x69\x63\x6B\x20\x6F\x75\x74\x73\x69\x64\x65\x3C\x2F\x73\x74\x72\x6F\x6E\x67\x3E\x3C\x2F\x64\x69\x76\x3E","\x6C\x65\x76\x65\x6C","\x3C\x62\x72\x3E","\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x61\x6C\x65\x72\x74\x20\x61\x6C\x65\x72\x74\x2D\x64\x61\x6E\x67\x65\x72\x27\x3E\x3C\x62\x75\x74\x74\x6F\x6E\x20\x74\x79\x70\x65\x3D\x27\x62\x75\x74\x74\x6F\x6E\x27\x20\x63\x6C\x61\x73\x73\x3D\x27\x63\x6C\x6F\x73\x65\x27\x20\x64\x61\x74\x61\x2D\x64\x69\x73\x6D\x69\x73\x73\x3D\x27\x61\x6C\x65\x72\x74\x27\x20\x61\x72\x69\x61\x2D\x68\x69\x64\x64\x65\x6E\x3D\x27\x74\x72\x75\x65\x27\x20\x6F\x6E\x63\x6C\x69\x63\x6B\x3D\x27\x72\x65\x6D\x6F\x76\x65\x5F\x6D\x65\x73\x73\x65\x67\x65\x28\x29\x27\x3E\x26\x74\x69\x6D\x65\x73\x3B\x3C\x2F\x62\x75\x74\x74\x6F\x6E\x3E\x3C\x73\x74\x72\x6F\x6E\x67\x3E\x57\x72\x6F\x6E\x67\x20\x69\x6E\x70\x75\x74\x3C\x2F\x73\x74\x72\x6F\x6E\x67\x3E\x3C\x2F\x64\x69\x76\x3E","\x3C\x62\x75\x74\x74\x6F\x6E\x20\x69\x64\x3D\x27","\x27\x20\x63\x6C\x61\x73\x73\x3D\x27\x62\x74\x6E\x20\x62\x74\x6E\x2D\x77\x61\x72\x6E\x69\x6E\x67\x20\x62\x74\x6E\x31\x20\x27\x20\x76\x61\x6C\x75\x65\x20\x3D\x20\x27","\x27\x3E","\x3C\x2F\x62\x75\x74\x74\x6F\x6E\x3E","\x3C\x69\x6E\x70\x75\x74\x20\x74\x79\x70\x65\x3D\x27\x74\x65\x78\x74\x27\x20\x69\x64\x3D\x27","\x27\x20\x63\x6C\x61\x73\x73\x3D\x27\x66\x6F\x72\x6D\x2D\x63\x6F\x6E\x74\x72\x6F\x6C\x27\x20\x76\x61\x6C\x75\x65\x3D\x27","\x27\x20\x63\x6C\x61\x73\x73\x3D\x27\x66\x6F\x72\x6D\x2D\x63\x6F\x6E\x74\x72\x6F\x6C\x27\x20\x76\x61\x6C\x75\x65\x3D\x27\x27\x3E","\x62\x6F\x61\x72\x64","\x70\x6F\x73\x69\x74\x69\x6F\x6E","\x73\x74\x79\x6C\x65","\x61\x62\x73\x6F\x6C\x75\x74\x65","\x74\x6F\x70","\x70\x78","\x6C\x65\x66\x74","\x68\x65\x69\x67\x68\x74","\x77\x69\x64\x74\x68","\x63\x6F\x75\x6E\x74","\x76\x61\x6C","\x72\x61\x6E\x64\x6F\x6D","\x67\x65\x74\x54\x69\x6D\x65"];var status=0;var difficulty=4;var a= new Array(9);var q= new Array(9);function init(){for(var _0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){a[_0xcb58x6]= new Array(9);q[_0xcb58x6]= new Array(9);};for(var _0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){a[_0xcb58x6][_0xcb58x7]={real:0,val:[1,1,1,1,1,1,1,1,1],count:0};q[_0xcb58x6][_0xcb58x7]=1;}};}function main(){init();var _0xcb58x9=[[7,3,4,6,8,2,1,5,9],[2,5,9,7,4,1,8,6,3],[1,6,8,9,5,3,2,4,7],[5,9,2,4,3,6,7,1,8],[3,4,1,8,2,7,6,9,5],[8,7,6,5,1,9,3,2,4],[4,1,3,2,9,8,5,7,6],[6,8,5,1,7,4,9,3,2],[9,2,7,3,6,5,4,8,1]];var _0xcb58xa=[[8,1,0,0,0,0,7,0,3],[0,0,0,6,0,7,0,0,8],[9,0,2,3,1,0,6,0,0],[0,4,0,0,7,0,5,6,0],[0,0,7,9,0,1,2,0,0],[0,6,3,0,4,0,0,9,0],[0,0,4,0,9,2,1,0,6],[6,0,0,5,0,4,0,0,0],[7,0,8,0,0,0,0,5,9]];var _0xcb58xb=[[6,0,0,0,0,8,2,0,0],[2,0,0,7,9,0,0,0,0],[0,3,0,0,0,0,0,6,8],[0,6,0,0,0,7,8,0,0],[0,0,0,0,0,0,0,0,0],[0,0,1,4,0,0,0,3,0],[9,2,0,0,0,0,0,4,0],[0,0,0,0,8,1,0,0,6],[0,0,6,3,0,0,0,0,5]];var _0xcb58xc=[[0,0,5,3,0,0,0,0,0],[8,0,0,0,0,0,0,2,0],[0,7,0,0,1,0,5,0,0],[4,0,0,0,0,5,3,0,0],[0,1,0,0,7,0,0,0,6],[0,0,3,2,0,0,0,8,0],[0,6,0,5,0,0,0,0,9],[0,0,4,0,0,0,0,3,0],[0,0,0,0,0,9,7,0,0]];generate(a,difficulty);for(var _0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){if(a[_0xcb58x6][_0xcb58x7][_0xed79[0]]==0){q[_0xcb58x6][_0xcb58x7]=0}}};display(a);}function reset(){status=0;main();}function solveit(){if(status==1){exit()};for(var _0xcb58x6=1;_0xcb58x6<10;_0xcb58x6++){for(var _0xcb58x7=1;_0xcb58x7<10;_0xcb58x7++){var _0xcb58xf=_0xcb58x6+_0xed79[1]+_0xcb58x7;var _0xcb58x10=document[_0xed79[3]](_0xcb58xf)[_0xed79[2]];var _0xcb58x11=parseInt(_0xcb58x10);if(isNaN(_0xcb58x11)||_0xcb58x11<0||_0xcb58x11>9||_0xcb58x10[_0xed79[4]]==0){a[_0xcb58x6-1][_0xcb58x7-1][_0xed79[0]]=0}else {a[_0xcb58x6-1][_0xcb58x7-1][_0xed79[0]]=_0xcb58x11};}};display(a);if(!checkvalid(a)){alert(_0xed79[5])}else {if(solve(a,0)){display(a);status=1;}else {remove_messege();display(a);document[_0xed79[3]](_0xed79[7])[_0xed79[6]]+=_0xed79[8];}};}function checkit(){for(var _0xcb58x6=1;_0xcb58x6<10;_0xcb58x6++){for(var _0xcb58x7=1;_0xcb58x7<10;_0xcb58x7++){var _0xcb58xf=_0xcb58x6+_0xed79[1]+_0xcb58x7;var _0xcb58x10=document[_0xed79[3]](_0xcb58xf)[_0xed79[2]];var _0xcb58x11=parseInt(_0xcb58x10);if(isNaN(_0xcb58x11)||_0xcb58x11<0||_0xcb58x11>9||_0xcb58x10[_0xed79[4]]==0){a[_0xcb58x6-1][_0xcb58x7-1][_0xed79[0]]=0}else {a[_0xcb58x6-1][_0xcb58x7-1][_0xed79[0]]=_0xcb58x11};}};display(a);if(!checkvalid(a)){document[_0xed79[3]](_0xed79[7])[_0xed79[6]]=_0xed79[1];document[_0xed79[3]](_0xed79[7])[_0xed79[6]]+=_0xed79[9];}else {if(issolved(a)==1){document[_0xed79[3]](_0xed79[7])[_0xed79[6]]=_0xed79[1];document[_0xed79[3]](_0xed79[7])[_0xed79[6]]+=_0xed79[10];}else {document[_0xed79[3]](_0xed79[7])[_0xed79[6]]=_0xed79[1];document[_0xed79[3]](_0xed79[7])[_0xed79[6]]+=_0xed79[9];}};}function emptyboard(){for(var _0xcb58x6=1;_0xcb58x6<10;_0xcb58x6++){for(var _0xcb58x7=1;_0xcb58x7<10;_0xcb58x7++){a[_0xcb58x6-1][_0xcb58x7-1][_0xed79[0]]=0;q[_0xcb58x6-1][_0xcb58x7-1]=0;}};display(a);}function remove_messege(){document[_0xed79[3]](_0xed79[7])[_0xed79[6]]=_0xed79[1];document[_0xed79[3]](_0xed79[11])[_0xed79[6]]=_0xed79[1];}function callchangediff(){remove_messege();document[_0xed79[3]](_0xed79[12])[_0xed79[6]]=_0xed79[13];document[_0xed79[3]](_0xed79[11])[_0xed79[6]]+=_0xed79[14];}function changedifficulty(){var _0xcb58x17=document[_0xed79[3]](_0xed79[15])[_0xed79[2]];var _0xcb58x18=parseInt(_0xcb58x17);if(_0xcb58x18<=5&&_0xcb58x18>0){difficulty=_0xcb58x18;document[_0xed79[3]](_0xed79[12])[_0xed79[6]]=_0xed79[16];remove_messege();main();}else {remove_messege();document[_0xed79[3]](_0xed79[11])[_0xed79[6]]+=_0xed79[17];};}function display(a){var _0xcb58x1a=_0xed79[1];for(var _0xcb58x6=1;_0xcb58x6<10;_0xcb58x6++){for(var _0xcb58x7=1;_0xcb58x7<10;_0xcb58x7++){var _0xcb58xf=_0xcb58x6+_0xed79[1]+_0xcb58x7;if(q[_0xcb58x6-1][_0xcb58x7-1]==1){_0xcb58x1a=_0xcb58x1a+_0xed79[18]+_0xcb58xf+_0xed79[19]+a[_0xcb58x6-1][_0xcb58x7-1][_0xed79[0]]+_0xed79[20]+a[_0xcb58x6-1][_0xcb58x7-1][_0xed79[0]]+_0xed79[21]}else {if(a[_0xcb58x6-1][_0xcb58x7-1][_0xed79[0]]!=0){_0xcb58x1a=_0xcb58x1a+_0xed79[22]+_0xcb58xf+_0xed79[23]+a[_0xcb58x6-1][_0xcb58x7-1][_0xed79[0]]+_0xed79[20]}else {_0xcb58x1a=_0xcb58x1a+_0xed79[22]+_0xcb58xf+_0xed79[24]}};}};document[_0xed79[3]](_0xed79[25])[_0xed79[6]]=_0xcb58x1a;var _0xcb58x1b=0;var _0xcb58x1c=0;;;for(var a=0;a<9;a++){_0xcb58x1b+=40;if(a%3==0){_0xcb58x1b+=10};_0xcb58x1c=0;for(var _0xcb58x1d=0;_0xcb58x1d<9;_0xcb58x1d++){_0xcb58x1c+=40;if(_0xcb58x1d%3==0){_0xcb58x1c+=10};var _0xcb58x1e=(a+1).toString();var _0xcb58x1f=(_0xcb58x1d+1).toString();document[_0xed79[3]](_0xcb58x1e+_0xcb58x1f)[_0xed79[27]][_0xed79[26]]=_0xed79[28];document[_0xed79[3]](_0xcb58x1e+_0xcb58x1f)[_0xed79[27]][_0xed79[29]]=_0xcb58x1c+_0xed79[30];document[_0xed79[3]](_0xcb58x1e+_0xcb58x1f)[_0xed79[27]][_0xed79[31]]=_0xcb58x1b+_0xed79[30];document[_0xed79[3]](_0xcb58x1e+_0xcb58x1f)[_0xed79[27]][_0xed79[32]]=40+_0xed79[30];document[_0xed79[3]](_0xcb58x1e+_0xcb58x1f)[_0xed79[27]][_0xed79[33]]=40+_0xed79[30];};};}function passinto(a,_0xcb58x6,_0xcb58x7){a[_0xcb58x6][_0xcb58x7][_0xed79[34]]=9;var _0xcb58x17;var _0xcb58x21;_0xcb58x21=_0xcb58x7;for(_0xcb58x17=0;_0xcb58x17<9;_0xcb58x17++){var _0xcb58x22;if(_0xcb58x17!=_0xcb58x6){_0xcb58x22=a[_0xcb58x17][_0xcb58x21][_0xed79[35]][a[_0xcb58x6][_0xcb58x7][_0xed79[0]]-1];if(a[_0xcb58x17][_0xcb58x21][_0xed79[0]]==0&&_0xcb58x22==1){a[_0xcb58x17][_0xcb58x21][_0xed79[35]][a[_0xcb58x6][_0xcb58x7][_0xed79[0]]-1]=0;a[_0xcb58x17][_0xcb58x21][_0xed79[34]]++;};};};_0xcb58x17=_0xcb58x6;for(_0xcb58x21=0;_0xcb58x21<9;_0xcb58x21++){var _0xcb58x22;if(_0xcb58x21!=_0xcb58x7){_0xcb58x22=a[_0xcb58x17][_0xcb58x21][_0xed79[35]][a[_0xcb58x6][_0xcb58x7][_0xed79[0]]-1];if(a[_0xcb58x17][_0xcb58x21][_0xed79[0]]==0&&_0xcb58x22==1){a[_0xcb58x17][_0xcb58x21][_0xed79[35]][a[_0xcb58x6][_0xcb58x7][_0xed79[0]]-1]=0;a[_0xcb58x17][_0xcb58x21][_0xed79[34]]++;};};};_0xcb58x21=(_0xcb58x7-(_0xcb58x7%3));for(var _0xcb58x23=0;_0xcb58x23<3;_0xcb58x23++){_0xcb58x17=(_0xcb58x6-(_0xcb58x6%3));for(var _0xcb58x24=0;_0xcb58x24<3;_0xcb58x24++){if(_0xcb58x17!=_0xcb58x6||_0xcb58x21!=_0xcb58x6){var _0xcb58x22;_0xcb58x22=a[_0xcb58x17][_0xcb58x21][_0xed79[35]][a[_0xcb58x6][_0xcb58x7][_0xed79[0]]-1];if(a[_0xcb58x17][_0xcb58x21][_0xed79[0]]==0&&_0xcb58x22==1){a[_0xcb58x17][_0xcb58x21][_0xed79[35]][a[_0xcb58x6][_0xcb58x7][_0xed79[0]]-1]=0;a[_0xcb58x17][_0xcb58x21][_0xed79[34]]++;};};_0xcb58x17++;};_0xcb58x21++;};}function logic2(a){var _0xcb58x26=0;var _0xcb58x27=0,_0xcb58x28=[0,0];for(var _0xcb58x29=0;_0xcb58x29<9;_0xcb58x29++){for(var _0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){_0xcb58x27=0;_0xcb58x28[0]=0;_0xcb58x28[1]=0;for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){if(a[_0xcb58x6][_0xcb58x7][_0xed79[35]][_0xcb58x29]&&a[_0xcb58x6][_0xcb58x7][_0xed79[34]]<9){_0xcb58x27++;_0xcb58x28[0]=_0xcb58x6;_0xcb58x28[1]=_0xcb58x7;}};if(_0xcb58x27==1){a[_0xcb58x28[0]][_0xcb58x28[1]][_0xed79[0]]=_0xcb58x29+1;a[_0xcb58x28[0]][_0xcb58x28[1]][_0xed79[34]]=9;passinto(a,_0xcb58x28[0],_0xcb58x28[1]);_0xcb58x26=1;};_0xcb58x27=0;_0xcb58x28[0]=0;_0xcb58x28[1]=0;for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){if(a[_0xcb58x7][_0xcb58x6][_0xed79[35]][_0xcb58x29]&&a[_0xcb58x7][_0xcb58x6][_0xed79[34]]<9){_0xcb58x27++;_0xcb58x28[0]=_0xcb58x7;_0xcb58x28[1]=_0xcb58x6;}};if(_0xcb58x27==1){a[_0xcb58x28[0]][_0xcb58x28[1]][_0xed79[0]]=_0xcb58x29+1;a[_0xcb58x28[0]][_0xcb58x28[1]][_0xed79[34]]=9;passinto(a,_0xcb58x28[0],_0xcb58x28[1]);_0xcb58x26=1;};_0xcb58x27=0;_0xcb58x28[0]=0;_0xcb58x28[1]=0;var _0xcb58x17=(_0xcb58x6-(_0xcb58x6%3));var _0xcb58x21=(_0xcb58x6%3)*3;for(var _0xcb58x23=0;_0xcb58x23<3;_0xcb58x23++){_0xcb58x21=(_0xcb58x6%3)*3;for(var _0xcb58x24=0;_0xcb58x24<3;_0xcb58x24++){if(a[_0xcb58x17][_0xcb58x21][_0xed79[35]][_0xcb58x29]&&a[_0xcb58x17][_0xcb58x21][_0xed79[34]]<9){_0xcb58x27++;_0xcb58x28[0]=_0xcb58x17;_0xcb58x28[1]=_0xcb58x21;};_0xcb58x21++;};_0xcb58x17++;};if(_0xcb58x27==1){a[_0xcb58x28[0]][_0xcb58x28[1]][_0xed79[0]]=_0xcb58x29+1;a[_0xcb58x28[0]][_0xcb58x28[1]][_0xed79[34]]=9;passinto(a,_0xcb58x28[0],_0xcb58x28[1]);_0xcb58x26=1;};}};return _0xcb58x26;}function logic3(a){var _0xcb58x26=0;var _0xcb58x27;var _0xcb58x28= new Array(9);for(var _0xcb58x2b=0;_0xcb58x2b<9;_0xcb58x2b++){_0xcb58x28[_0xcb58x2b]= new Array(2)};for(var _0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){_0xcb58x27=0;for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){if(a[_0xcb58x6][_0xcb58x7][_0xed79[0]]==0&&a[_0xcb58x6][_0xcb58x7][_0xed79[34]]<9){_0xcb58x28[_0xcb58x27][0]=_0xcb58x6;_0xcb58x28[_0xcb58x27][1]=_0xcb58x7;_0xcb58x27++;}};for(var _0xcb58x2c=2;_0xcb58x2c<3;_0xcb58x2c++){_0xcb58x26=check_cut(a,_0xcb58x2c,_0xcb58x28,_0xcb58x27)+_0xcb58x26};_0xcb58x27=0;for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){if(a[_0xcb58x7][_0xcb58x6][_0xed79[0]]==0&&a[_0xcb58x7][_0xcb58x6][_0xed79[34]]<9){_0xcb58x28[_0xcb58x27][0]=_0xcb58x7;_0xcb58x28[_0xcb58x27][1]=_0xcb58x6;_0xcb58x27++;}};for(var _0xcb58x2c=2;_0xcb58x2c<3;_0xcb58x2c++){_0xcb58x26=check_cut(a,_0xcb58x2c,_0xcb58x28,_0xcb58x27)+_0xcb58x26};_0xcb58x27=0;var _0xcb58x17=(_0xcb58x6-(_0xcb58x6%3));var _0xcb58x21=(_0xcb58x6%3)*3;for(var _0xcb58x23=0;_0xcb58x23<3;_0xcb58x23++){_0xcb58x21=(_0xcb58x6%3)*3;for(var _0xcb58x24=0;_0xcb58x24<3;_0xcb58x24++){if(a[_0xcb58x17][_0xcb58x21][_0xed79[0]]==0&&a[_0xcb58x17][_0xcb58x21][_0xed79[34]]<9){_0xcb58x28[_0xcb58x27][0]=_0xcb58x17;_0xcb58x28[_0xcb58x27][1]=_0xcb58x21;_0xcb58x27++;};_0xcb58x21++;};_0xcb58x17++;};for(var _0xcb58x2c=2;_0xcb58x2c<3;_0xcb58x2c++){_0xcb58x26=check_cut(a,_0xcb58x2c,_0xcb58x28,_0xcb58x27)+_0xcb58x26};};return _0xcb58x26;}function check_cut(a,_0xcb58x2c,_0xcb58x28,_0xcb58x27){for(var _0xcb58x6=0;_0xcb58x6<_0xcb58x27;_0xcb58x6++){for(var _0xcb58x7=_0xcb58x6+1;_0xcb58x7<_0xcb58x27;_0xcb58x7++){var _0xcb58x2e= new Array(9);var _0xcb58x2f=0;var _0xcb58x30=_0xcb58x28[_0xcb58x6][0];var _0xcb58x31=_0xcb58x28[_0xcb58x6][1];var _0xcb58x32=_0xcb58x28[_0xcb58x7][0];var _0xcb58x33=_0xcb58x28[_0xcb58x7][1];for(var _0xcb58x29=0;_0xcb58x29<9;_0xcb58x29++){if(a[_0xcb58x30][_0xcb58x31][_0xed79[35]][_0xcb58x29]){_0xcb58x2e[_0xcb58x2f]=_0xcb58x29;_0xcb58x2f++;}};for(var _0xcb58x29=0;_0xcb58x29<9;_0xcb58x29++){if(a[_0xcb58x32][_0xcb58x33][_0xed79[35]][_0xcb58x29]){var _0xcb58x22=1;for(var _0xcb58x21=0;_0xcb58x21<_0xcb58x2f;_0xcb58x21++){if(_0xcb58x2e[_0xcb58x21]==_0xcb58x29){_0xcb58x22=0}};if(_0xcb58x22){_0xcb58x2e[_0xcb58x2f]=_0xcb58x29;_0xcb58x2f++;};}};if(_0xcb58x2f==_0xcb58x2c){for(var _0xcb58x29=0;_0xcb58x29<_0xcb58x27;_0xcb58x29++){var _0xcb58x1b=_0xcb58x28[_0xcb58x29][0],_0xcb58x1c=_0xcb58x28[_0xcb58x29][1];if(_0xcb58x29!=_0xcb58x6&&_0xcb58x29!=_0xcb58x7){for(var _0xcb58x21=0;_0xcb58x21<_0xcb58x2f;_0xcb58x21++){if(a[_0xcb58x1b][_0xcb58x1c][_0xed79[35]][_0xcb58x2e[_0xcb58x21]]){a[_0xcb58x1b][_0xcb58x1c][_0xed79[35]][_0xcb58x2e[_0xcb58x21]]=0;a[_0xcb58x1b][_0xcb58x1c][_0xed79[34]]++;}}}else {for(var _0xcb58x21=0;_0xcb58x21<9;_0xcb58x21++){var _0xcb58x22=false;for(var _0xcb58x34=0;_0xcb58x34<_0xcb58x2f;_0xcb58x34++){_0xcb58x22=_0xcb58x22||(_0xcb58x2e[_0xcb58x34]==_0xcb58x21)};if(!_0xcb58x22){if(a[_0xcb58x1b][_0xcb58x1c][_0xed79[35]][_0xcb58x21]){a[_0xcb58x1b][_0xcb58x1c][_0xed79[35]][_0xcb58x21]=0;a[_0xcb58x1b][_0xcb58x1c][_0xed79[34]]++;}};}};};return 1;};}};return 0;}function logic4(a){for(var _0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){if(a[_0xcb58x6][_0xcb58x7][_0xed79[34]]==7&&a[_0xcb58x6][_0xcb58x7][_0xed79[0]]==0){var _0xcb58x1d= new Array(9);for(var _0xcb58x36=0;_0xcb58x36<9;_0xcb58x36++){_0xcb58x1d[_0xcb58x36]= new Array(9)};for(var _0xcb58x37=0;_0xcb58x37<9;_0xcb58x37++){for(var _0xcb58x38=0;_0xcb58x38<9;_0xcb58x38++){_0xcb58x1d[_0xcb58x37][_0xcb58x38]={real:a[_0xcb58x37][_0xcb58x38][_0xed79[0]],val:[a[_0xcb58x37][_0xcb58x38][_0xed79[35]][0],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][1],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][2],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][3],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][4],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][5],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][6],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][7],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][8]],count:a[_0xcb58x37][_0xcb58x38][_0xed79[34]]}}};var _0xcb58x22=1;for(var _0xcb58x17=0;_0xcb58x17<9;_0xcb58x17++){if(a[_0xcb58x6][_0xcb58x7][_0xed79[35]][_0xcb58x17]){_0xcb58x1d[_0xcb58x6][_0xcb58x7][_0xed79[0]]=_0xcb58x17+1;if(solve(_0xcb58x1d,1)){for(var _0xcb58x37=0;_0xcb58x37<9;_0xcb58x37++){for(var _0xcb58x38=0;_0xcb58x38<9;_0xcb58x38++){a[_0xcb58x37][_0xcb58x38]={real:_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[0]],val:[_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[35]][0],_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[35]][1],_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[35]][2],_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[35]][3],_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[35]][4],_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[35]][5],_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[35]][6],_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[35]][7],_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[35]][8]],count:_0xcb58x1d[_0xcb58x37][_0xcb58x38][_0xed79[34]]}}};return 1;};}};}}};return 0;}function checkvalid(a){var _0xcb58x22=true;for(var _0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){var _0xcb58x17,_0xcb58x21;if(a[_0xcb58x6][_0xcb58x7][_0xed79[0]]!=0){for(_0xcb58x17=0,_0xcb58x21=_0xcb58x7;_0xcb58x17<9;_0xcb58x17++){if(_0xcb58x17!=_0xcb58x6){_0xcb58x22=_0xcb58x22&&(a[_0xcb58x6][_0xcb58x7][_0xed79[0]]!=a[_0xcb58x17][_0xcb58x21][_0xed79[0]])}};for(_0xcb58x17=_0xcb58x6,_0xcb58x21=0;_0xcb58x21<9;_0xcb58x21++){if(_0xcb58x21!=_0xcb58x7){_0xcb58x22=_0xcb58x22&&(a[_0xcb58x6][_0xcb58x7][_0xed79[0]]!=a[_0xcb58x17][_0xcb58x21][_0xed79[0]])}};_0xcb58x21=(_0xcb58x7-(_0xcb58x7%3));for(var _0xcb58x23=0;_0xcb58x23<3;_0xcb58x23++){_0xcb58x17=(_0xcb58x6-(_0xcb58x6%3));for(var _0xcb58x24=0;_0xcb58x24<3;_0xcb58x24++){if(_0xcb58x17!=_0xcb58x6&&_0xcb58x21!=_0xcb58x7){_0xcb58x22=_0xcb58x22&&(a[_0xcb58x6][_0xcb58x7][_0xed79[0]]!=a[_0xcb58x17][_0xcb58x21][_0xed79[0]])}};};};}};return _0xcb58x22;}function issolved(a){var _0xcb58x22=true;for(var _0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){_0xcb58x22=_0xcb58x22&&(a[_0xcb58x6][_0xcb58x7][_0xed79[0]]!=0)}};return _0xcb58x22;}function solve(a,_0xcb58x3c){var _0xcb58x6;var _0xcb58x7;for(_0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){for(_0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){if(a[_0xcb58x6][_0xcb58x7][_0xed79[0]]!=0){passinto(a,_0xcb58x6,_0xcb58x7)}}};for(var _0xcb58x2b=0;_0xcb58x2b<81;_0xcb58x2b++){var _0xcb58x26=0;for(_0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){for(_0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){if(a[_0xcb58x6][_0xcb58x7][_0xed79[34]]==8){var _0xcb58x34=0;for(_0xcb58x34=0;_0xcb58x34<9;_0xcb58x34++){if(a[_0xcb58x6][_0xcb58x7][_0xed79[35]][_0xcb58x34]==1){break }};_0xcb58x34++;a[_0xcb58x6][_0xcb58x7][_0xed79[0]]=_0xcb58x34;a[_0xcb58x6][_0xcb58x7][_0xed79[34]]=9;passinto(a,_0xcb58x6,_0xcb58x7);_0xcb58x26=1;}}};if(_0xcb58x26==0){if(issolved(a)){return 1}else {_0xcb58x26=logic2(a);if(_0xcb58x26==0&&checkvalid(a)==1){_0xcb58x26=logic3(a)};if(!issolved(a)&&_0xcb58x3c==0){logic4(a)};}};};if(issolved(a)){return 1}else {return 0};}function randuv(_0xcb58x3e,_0xcb58x3f){var a=Math[_0xed79[36]]();a=a*(_0xcb58x3f+1-_0xcb58x3e);a=a+_0xcb58x3e;return parseInt(a);}function generate(a,difficulty){randomize(a);var _0xcb58x41=0;var _0xcb58x42;var _0xcb58x22=1;var _0xcb58x43=[[1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1]];switch(difficulty){case 1:_0xcb58x42=28;break ;;case 2:_0xcb58x42=36;break ;;case 3:_0xcb58x42=43;break ;;case 4:_0xcb58x42=51;;default:_0xcb58x42=81;break ;;};var _0xcb58x44;var _0xcb58x18= new Date();_0xcb58x44=_0xcb58x18[_0xed79[37]]();while(_0xcb58x22>=1&&_0xcb58x41<_0xcb58x42){var _0xcb58x1d= new Array(9);for(var _0xcb58x24=0;_0xcb58x24<9;_0xcb58x24++){_0xcb58x1d[_0xcb58x24]= new Array(9)};for(var _0xcb58x37=0;_0xcb58x37<9;_0xcb58x37++){for(var _0xcb58x38=0;_0xcb58x38<9;_0xcb58x38++){_0xcb58x1d[_0xcb58x37][_0xcb58x38]={real:a[_0xcb58x37][_0xcb58x38][_0xed79[0]],val:[a[_0xcb58x37][_0xcb58x38][_0xed79[35]][0],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][1],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][2],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][3],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][4],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][5],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][6],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][7],a[_0xcb58x37][_0xcb58x38][_0xed79[35]][8]],count:a[_0xcb58x37][_0xcb58x38][_0xed79[34]]}}};var _0xcb58x6=randuv(0,8);var _0xcb58x7=randuv(0,8);if(_0xcb58x43[_0xcb58x6][_0xcb58x7]==1){_0xcb58x1d[_0xcb58x6][_0xcb58x7][_0xed79[0]]=0;_0xcb58x1d[_0xcb58x6][_0xcb58x7][_0xed79[34]]=0;_0xcb58x1d[_0xcb58x6][_0xcb58x7][_0xed79[35]]=[1,1,1,1,1,1,1,1,1];_0xcb58x43[_0xcb58x6][_0xcb58x7]=0;if(solve(_0xcb58x1d,1)){a[_0xcb58x6][_0xcb58x7][_0xed79[0]]=0;a[_0xcb58x6][_0xcb58x7][_0xed79[34]]=0;a[_0xcb58x6][_0xcb58x7][_0xed79[35]]=[1,1,1,1,1,1,1,1,1];_0xcb58x41++;}else {var _0xcb58x45=0;for(var _0xcb58x1b=0;_0xcb58x1b<9;_0xcb58x1b++){for(var _0xcb58x1c=0;_0xcb58x1c<9;_0xcb58x1c++){_0xcb58x45=_0xcb58x45+_0xcb58x43[_0xcb58x1b][_0xcb58x1c]}};_0xcb58x22=_0xcb58x45;};};var _0xcb58x46= new Date();var _0xcb58x47=_0xcb58x46[_0xed79[37]]();if(_0xcb58x47>_0xcb58x44+1000){_0xcb58x22=0};};}function hor_image(_0xcb58x9){for(var _0xcb58x6=0;_0xcb58x6<=3;_0xcb58x6++){for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){var _0xcb58x49=_0xcb58x9[_0xcb58x6][_0xcb58x7];_0xcb58x9[_0xcb58x6][_0xcb58x7]=_0xcb58x9[8-_0xcb58x6][_0xcb58x7];_0xcb58x9[8-_0xcb58x6][_0xcb58x7]=_0xcb58x49;}}}function ver_image(_0xcb58x9){for(var _0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){for(var _0xcb58x7=0;_0xcb58x7<=3;_0xcb58x7++){var _0xcb58x49=_0xcb58x9[_0xcb58x6][_0xcb58x7];_0xcb58x9[_0xcb58x6][_0xcb58x7]=_0xcb58x9[_0xcb58x6][8-_0xcb58x7];_0xcb58x9[_0xcb58x6][8-_0xcb58x7]=_0xcb58x49;}}}function left(_0xcb58x9){for(var _0xcb58x6=0;_0xcb58x6<4;_0xcb58x6++){for(var _0xcb58x7=_0xcb58x6;_0xcb58x7<8-_0xcb58x6;_0xcb58x7++){var _0xcb58x49=_0xcb58x9[8-_0xcb58x7][_0xcb58x6];_0xcb58x9[8-_0xcb58x7][_0xcb58x6]=_0xcb58x9[_0xcb58x6][_0xcb58x7];_0xcb58x9[_0xcb58x6][_0xcb58x7]=_0xcb58x9[_0xcb58x7][8-_0xcb58x6];_0xcb58x9[_0xcb58x7][8-_0xcb58x6]=_0xcb58x9[8-_0xcb58x6][8-_0xcb58x7];_0xcb58x9[8-_0xcb58x6][8-_0xcb58x7]=_0xcb58x49;}}}function rotate_180(_0xcb58x9){left(_0xcb58x9);left(_0xcb58x9);}function swap_diag1(_0xcb58x9){for(var _0xcb58x6=1;_0xcb58x6<9;_0xcb58x6++){for(var _0xcb58x7=0;_0xcb58x7<_0xcb58x6;_0xcb58x7++){var _0xcb58x49=_0xcb58x9[_0xcb58x6][_0xcb58x7];_0xcb58x9[_0xcb58x6][_0xcb58x7]=_0xcb58x9[_0xcb58x7][_0xcb58x6];_0xcb58x9[_0xcb58x7][_0xcb58x6]=_0xcb58x49;}}}function swap_diag2(_0xcb58x9){for(var _0xcb58x6=0;_0xcb58x6<8;_0xcb58x6++){for(var _0xcb58x7=0;_0xcb58x7<8-_0xcb58x6;_0xcb58x7++){var _0xcb58x49=_0xcb58x9[_0xcb58x6][_0xcb58x7];_0xcb58x9[_0xcb58x6][_0xcb58x7]=_0xcb58x9[8-_0xcb58x7][8-_0xcb58x6];_0xcb58x9[8-_0xcb58x7][8-_0xcb58x6]=_0xcb58x49;}}}function hor_swap(_0xcb58x9,_0xcb58x6,_0xcb58x7){for(var _0xcb58x21=0;_0xcb58x21<3;_0xcb58x21++){for(var _0xcb58x29=0;_0xcb58x29<9;_0xcb58x29++){var _0xcb58x49=_0xcb58x9[3*_0xcb58x6+_0xcb58x21][_0xcb58x29];_0xcb58x9[3*_0xcb58x6+_0xcb58x21][_0xcb58x29]=_0xcb58x9[3*_0xcb58x7+_0xcb58x21][_0xcb58x29];_0xcb58x9[3*_0xcb58x7+_0xcb58x21][_0xcb58x29]=_0xcb58x49;}}}function ver_swap(_0xcb58x9,_0xcb58x6,_0xcb58x7){for(var _0xcb58x21=0;_0xcb58x21<3;_0xcb58x21++){for(var _0xcb58x29=0;_0xcb58x29<9;_0xcb58x29++){var _0xcb58x49=_0xcb58x9[_0xcb58x29][3*_0xcb58x6+_0xcb58x21];_0xcb58x9[_0xcb58x29][3*_0xcb58x6+_0xcb58x21]=_0xcb58x9[_0xcb58x29][3*_0xcb58x7+_0xcb58x21];_0xcb58x9[_0xcb58x29][3*_0xcb58x7+_0xcb58x21]=_0xcb58x49;}}}function randomize(a){var _0xcb58x9=[[7,3,4,6,8,2,1,5,9],[2,5,9,7,4,1,8,6,3],[1,6,8,9,5,3,2,4,7],[5,9,2,4,3,6,7,1,8],[3,4,1,8,2,7,6,9,5],[8,7,6,5,1,9,3,2,4],[4,1,3,2,9,8,5,7,6],[6,8,5,1,7,4,9,3,2],[9,2,7,3,6,5,4,8,1]];for(var _0xcb58x6=0;_0xcb58x6<50;_0xcb58x6++){var _0xcb58x52=randuv(1,9);var _0xcb58x53=randuv(0,2);var _0xcb58x54=randuv(0,2);switch(_0xcb58x52){case 1:hor_image(_0xcb58x9);break ;;case 2:ver_image(_0xcb58x9);break ;;case 3:left(_0xcb58x9);break ;;case 4:rotate_180(_0xcb58x9);break ;;case 5:swap_diag1(_0xcb58x9);break ;;case 6:swap_diag2(_0xcb58x9);break ;;case 7:hor_swap(_0xcb58x9,_0xcb58x54,_0xcb58x53);break ;;case 8:ver_swap(_0xcb58x9,_0xcb58x54,_0xcb58x53);break ;;};};for(var _0xcb58x6=0;_0xcb58x6<9;_0xcb58x6++){for(var _0xcb58x7=0;_0xcb58x7<9;_0xcb58x7++){a[_0xcb58x6][_0xcb58x7][_0xed79[0]]=_0xcb58x9[_0xcb58x6][_0xcb58x7]}};}
</script>

@endsection