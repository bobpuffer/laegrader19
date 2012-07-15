.laegradestable th.useremail {
	min-width:160px;
	height:20px;
	vertical-align:middle;
}

.grade-report-laegrader div.lae-user-grades {
	padding:0;
	margin:0;
	font-size: 10px;
    font-style:bold;
    border:1px solid #cccccc;
    border-collapse:collapse;
}

.laegradestable .cell {
	vertical-align:middle;
    border:1px solid #cccccc;
    border-collapse:collapse;
    text-align:center;
}

.laegradestable th.nameheader {
	vertical-align:middle;
    border:1px solid #cccccc;
	/*	line-height: 70%; */
	min-width:150px;
}
.laegradestable th.gradeheader {
    border:1px solid #cccccc;
}
/*
.laegradestable a.action-icon {
	left-margin: 5px;
}
*/
.laegradestable {
	font-size: 10px;
	vertical-align: middle;
}

.laegradestable th.user img {
	width:16px;
	height:16px;
}

.laegradestable th.user{
	text-align:left;
    border:1px solid #cccccc;
    min-width: 130px;
}

.laegradestable th.user a {
	margin-left:5px;
	display:inline;
}

div.userpic {
	display:inline;
}

.laegradestable img.iconsmall,
.laegradestable img.smallicon {
	margin-left: 5px;
	vertical-align:middle;
	width: 10px;
	height: 10px;
	display:inline;
}
/*
path.grade-report-laegrader table#lae-user-grades th.range, .grade-report-laegrader table#lae-user-grades td.grade {
    text-align:center;
    background-color: #F3EAD8
}
*/	
/*
td.controls.action-icon {
    margin:2px;
}	
*/

.laegradestable td.range {
	text-align:center;
    font-style:bold;
}

/*
.laegradestable td.header, td.controls {
	text-align:right;
    font-style:bold;
}
*/

.laegradestable td.header, 
.laegradestable th.range,
.laegradestable th.controls {
	text-align: right;
    font-style:bold;
    border:1px solid #cccccc;
}

.catblue {
	background-color:#F3DFD0;
}

.catorange {
	background-color:#D0DBF3;
}

.laegradestable cell#userreport {
	border:0px;
	vertical-align:middle;
    border-collapse:collapse;
}

.laegradestable th#userreport, td.tduser {
	min-width:13px;
	min-height:31px;
    border:1px solid #cccccc;
}

.laegradestable img.usergradesicon {
	margin-left:0px;
	vertical-align:middle;
	margin-top:10px;
}

table#lae-user-grades .quickfeedback {
	border:1px dashed;
	margin-left: 5px;
}

.path-grade-report-laegrader div.submit {
	text-align:center;
}

/*MDL-21088 - IE 7 ignores nowraps on tds or ths so we put a span within it with a nowrap on it*/
.heading_name_row th span {
	white-space:nowrap;
}

.laegradestable tr.heading th.categoryitem, 
.laegradestable tr.heading th.courseitem, 
.laegradestable tr.heading th.item {
	border: 1px solid #cccccc;
	vertical-align:bottom;
	min-width:130px;
}
/*
.laegradestable th.highlightable {
	vertical-align:bottom;
	min-width:130px;
}
*/

table#lae-user-grades.laegradestable tr.avg td.cell,
.laegradestable div.rangevalues {
	font-weight:bold;
    background-color: #F3EAD8;
}

.laegradestable tr.avg,
.laegradestable tr.controls,
.laegradestable tr.range {
	text-align:center;
    font-style:bold;
    vertical-align:middle;
    background-color: #F3EAD8;
}

.laegradestable td.userreport {
	border:0px;
	border-top:1px solid #cccccc;
	border-bottom:1px solid #cccccc;
	vertical-align:middle;
}

.laegradestable tr.odd td.cell, 
.laegradestable tr.odd th.cell {
	background-color:#dfdfdf;
/*	white-space:nowrap;*/
}

.laegradestable th.item.cell.hidden, 
.laegradestable td.cell.grade.hidden {
	background-color:#cfcfcf;
}


.laegradestable th.user a span.lastname {
    display:inline;
    font-style:bold;
    line-height:10px;
    whitespace: nowrap;
    font-size:1.2em;
    padding-left:30px;
    padding-right:2px;
}

/***
*** added the following for the alignment issues
***/
/*
.laegradestable th.user{ height: 40px } 
.grade-report-laegrader table#lae-user-grades tr.even td.cell { height: 40px !important; } 
.grade-report-laegrader table#lae-user-grades tr.odd td.cell { height: 40px !important; } 
.grade-report-grader table#fixed_column tr.odd th, .grade-report-grader table#lae-user-grades tr.odd th { height: 40px; } 
.grade-report-grader table#fixed_column tr.even th, .grade-report-grader table#lae-user-grades tr.even th { height: 40px; } 
.grade-report-grader table#lae-user-grades td.cell { height: 40px; }
*/
