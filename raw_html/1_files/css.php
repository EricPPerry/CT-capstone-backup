@charset "UTF-8";

/* --- xenforo.css --- */

/*
 * YUI reset-fonts.css
 *
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;text-decoration:none}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}

/*
 * Firefox broken image placeholder support.
 *
http://lab.gmtplusone.com/image-placeholder/
*/ 
img:-moz-broken, img:-moz-user-disabled { -moz-force-broken-image-icon: 1; }
img:-moz-broken:not([width]), img:-moz-user-disabled:not([width]) { width: 50px; }
img:-moz-broken:not([height]), img:-moz-user-disabled:not([height]) { height: 50px; }

/*
 * XenForo Core CSS
 *
 */

html
{
	background-color: rgb(0, 0, 0);

	overflow-y: scroll !important;
}

body
{
	-webkit-text-size-adjust: 100%;
	-moz-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	text-size-adjust: 100%;

	font-size: 13px;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
color: rgb(44, 44, 44);
background-color: rgb(0, 0, 0);
word-wrap: break-word;
line-height: 1.28;
min-width: 300px;

}

/* counteract the word-wrap setting in 'body' */
pre, textarea
{
	word-wrap: normal;
}

[dir=auto] { text-align: left; }

a:link,
a:visited
{
	color: rgb(70, 102, 124);
text-decoration: none;

}

	a[href]:hover
	{
		color: rgb(43, 43, 43);
text-decoration: underline;

	}
	a:hover
	{
		_text-decoration: underline;
	}
	a.noOutline
	{
		outline: 0 none;
	}
	.emCtrl,
	.messageContent a
	{
		border-radius: 5px;
	}
		.emCtrl:hover,
		.emCtrl:focus,
		.ugc a:hover,
		.ugc a:focus
		{
			/*position: relative;
			top: -1px;*/
			text-decoration: none;
			box-shadow: 5px 5px 7px #CCCCCC;
			outline: 0 none;
		}
			.emCtrl:active,
			.ugc a:active
			{
				position: relative;
				top: 1px;
				box-shadow: 2px 2px 7px #CCCCCC;
				outline: 0 none;
			}

	.ugc a:link,
	.ugc a:visited
	{
		color: rgb(70, 102, 124);
padding: 0 3px;
margin: 0 -3px;
border-radius: 0;

	}
		.ugc a:hover,
		.ugc a:focus
		{
			box-shadow: 0 1px 0 rgb(70, 102, 124);

		}
img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}
/** title bar **/

.titleBar
{
	margin-bottom: 10px;
}

/* clearfix */ .titleBar { zoom: 1; } .titleBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.titleBar h1
{
	font-size: 18pt;
overflow: hidden;
zoom: 1;

}

	.titleBar h1 em
	{
		color: rgb(102, 102, 102);
	}
	.titleBar h1 .Popup
	{
		float: left;
	}

#pageDescription
{
	font-size: 12px;
color: rgb(118, 118, 118);
margin-top: 4px;

}

.topCtrl
{
	float: right;
}
	.topCtrl h2
	{
		font-size: 12pt;
	}
/** images **/

img
{
	-ms-interpolation-mode: bicubic;
}

a.avatar
{
	*cursor: pointer; /* IE7 refuses to do this */
}

.avatar img,
.avatar .img,
.avatarCropper
{
	background-color: rgb(70, 102, 124);
border-radius: 2px;
background-position: 0 0 !important;

}

.avatar.plainImage img,
.avatar.plainImage .img
{
	border: none;
	border-radius: 0;
	padding: 0;
	background-position: left top;
}

	.avatar .img
	{
		display: block;
		background-repeat: no-repeat;
		background-position: 2px 2px;
		text-indent: 1000px;
		overflow: hidden;
		white-space: nowrap;
		word-wrap: normal;
	}

	.avatar .img.s { width: 48px;  height: 48px;  }
	.avatar .img.m { width: 96px;  height: 96px;  }
	.avatar .img.l { width: 192px; height: 192px; }

.avatarCropper
{
	width: 192px;
	height: 192px;
	direction: ltr;
}

.avatarCropper a,
.avatarCropper span,
.avatarCropper label
{
	overflow: hidden;
	position: relative;
	display: block;
	width: 192px;
	height: 192px;
}

.avatarCropper img
{
	padding: 0;
	border: none;
	border-radius: 0;

	position: relative;
	display: block;
}

.avatarScaler img
{
	max-width: 192px;
	_width: 192px;
}

/* ***************************** */

body .dimmed, body a.dimmed, body .dimmed a { color: rgb(102, 102, 102); }
body .muted, body a.muted, body .muted a { color: rgb(118, 118, 118); }
body .faint, body a.faint, body .faint a { color: rgb(144, 144, 144); }

.highlight { font-weight: bold; }

.concealed,
.concealed a,
.cloaked,
.cloaked a
{
	text-decoration: inherit !important;
	color: inherit !important;
	*clear:expression( style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

a.concealed:hover,
.concealed a:hover
{
	text-decoration: underline !important;
}

/* ***************************** */

.xenTooltip
{
	font-size: 11px;
color: rgb(255, 255, 255);
background: url(rgba.php?r=94&g=94&b=94&a=229); background: rgba(94, 94, 94, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E55E5E5E,endColorstr=#E55E5E5E);
padding: 5px 10px;
border-radius: 2px;
display: none;
z-index: 15000;
cursor: default;

}

.xenTooltip a,
.xenTooltip a:hover
{
	color: rgb(255, 255, 255);
	text-decoration: underline;
}

	.xenTooltip .arrow
	{
		border-top:  6px solid rgb(94, 94, 94); border-top:  6px solid rgba(94, 94, 94, 0.9); _border-top:  6px solid rgb(94, 94, 94);
border-right: 6px solid transparent;
border-bottom: 1px none black;
border-left: 6px solid transparent;
position: absolute;
bottom: -6px;
line-height: 0px;
width: 0px;
height: 0px;

		left: 9px;
		
		/* Hide from IE6 */
		_display: none;
	}

	.xenTooltip.flipped .arrow
	{
		left: auto;
		right: 9px;
	}

.xenTooltip.statusTip
{
	/* Generated by XenForo.StatusTooltip JavaScript */
	padding: 5px 10px;
line-height: 17px;
width: 250px;
height: auto;

}

	.xenTooltip.statusTip .arrow
	{
		border: 6px solid transparent;
border-right-color:  rgb(94, 94, 94); border-right-color:  rgba(94, 94, 94, 0.9); _border-right-color:  rgb(94, 94, 94);
border-left: 1px none black;
top: 6px;
left: -6px;
bottom: auto;
right: auto;

	}
.xenTooltip.iconTip { margin-left: -6px; }
.xenTooltip.iconTip.flipped { margin-left: 7px; }

/* ***************************** */

#PreviewTooltip
{
	display: none;
}

.xenPreviewTooltip
{
	background-color: #FFFFFF;
border: 1px solid rgb(226, 226, 226);
border-radius: 4px;
position: relative;
width: 400px;


	display: none;
	z-index: 15000;
	cursor: default;

	
}

	.xenPreviewTooltip .arrow
	{
		border-top: 15px solid rgb(226, 226, 226);
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
bottom: -15px;
left: 22px;

		_display: none;
	}
		.xenPreviewTooltip .arrow span
		{
			border-top: 15px solid #FFFFFF;
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
top: -17px;
left: -15px;

		}

	.xenPreviewTooltip .section,
	.xenPreviewTooltip .sectionMain,
	.xenPreviewTooltip .primaryContent,
	.xenPreviewTooltip .secondaryContent
	{
		margin: 0;
	}
		.xenPreviewTooltip .previewContent
		{
			overflow: hidden; zoom: 1;
			min-height: 1em;
		}

/* ***************************** */

.importantMessage
{
	margin: 10px 0;
	color: rgb(52,77,93);
	background-color: rgb(255,255,255);
	text-align: center;
	padding: 5px;
	border-radius: 5px;
	border: solid 1px rgb(236, 241, 245);
}

.importantMessage a
{
	font-weight: bold;
	color: rgb(52,77,93);
}

/* ***************************** */

.section
{
	margin: 16px auto;

}

.sectionMain
{
	background-color: rgb(250, 250, 250);
padding: 8px;
margin: 16px auto;
border: 1px solid rgb(226, 226, 226);
border-radius: 4px;

}

.heading,
.xenForm .formHeader
{
	font-size: 14px;
color: #FFF;
background-color: rgb(70, 102, 124);
padding: 10px 16px;
margin-bottom: 3px;
font-weight: 600;

}

	.heading a { color: #FFF; }

.subHeading
{
	font-size: 12px;
color: rgb(70, 102, 124);
text-decoration: none;
background-color: rgb(248,251,253);
padding: 10px 16px;
margin: 0 auto;
border-width: 0;
border-color: rgb(221, 229, 234);
border-top-width: 1px;
border-top-style: solid;
border-bottom-width: 1px;
border-bottom-style: solid;
font-weight: 600;

}

	.subHeading a { color: rgb(70, 102, 124); }

.textHeading,
.xenForm .sectionHeader
{
	font-size: 14px;
color: rgb(44, 44, 44);
padding-bottom: 8px;
margin: 8px auto;
border-bottom: 1px solid rgb(240, 240, 240);
font-weight: 600;

}

.xenForm .sectionHeader,
.xenForm .formHeader
{
	margin: 10px 0;
}

.primaryContent > .textHeading:first-child,
.secondaryContent > .textHeading:first-child
{
	margin-top: 0;
}

.larger.textHeading,
.xenForm .sectionHeader
{
	color: rgb(240, 240, 240);
	font-size: 11pt;
	margin-bottom: 6px;
}

	.larger.textHeading a,
	.xenForm .sectionHeader a
	{
		color: rgb(240, 240, 240);
	}

.primaryContent
{
	background-color: #FFFFFF;
padding: 8px;
border-bottom: 1px solid rgb(226, 226, 226);

}

	.primaryContent a
	{
		color: rgb(70, 102, 124);

	}

.secondaryContent
{
	background-color: #FFFFFF;
padding: 8px;
border-bottom: 1px solid rgb(226, 226, 226);

}

	.secondaryContent a
	{
		color: rgb(70, 102, 124);

	}

.sectionFooter
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
color: rgb(83, 83, 83);
background-color: rgb(240, 240, 240);
padding: 10px 16px;

}

	.sectionFooter a { color: rgb(83, 83, 83); }

	.sectionFooter .left
	{
		float: left;
	}

	.sectionFooter .right
	{
		float: right;
	}

/* used for section footers with central buttons, esp. in report viewing */

.actionList
{
	text-align: center;
}

/* left-right aligned options */

.opposedOptions
{
	overflow: hidden; zoom: 1;
}
	
	.opposedOptions .left
	{
		float: left;
	}
	
	.opposedOptions .right
	{
		float: right;
	}

.columns
{
	overflow: hidden; zoom: 1;
}

	.columns .columnContainer
	{
		float: left;
	}
	
		.columns .columnContainer .column
		{
			margin-left: 3px;
		}
		
		.columns .columnContainer:first-child .column
		{
			margin-left: 0;
		}

.c50_50 .c1,
.c50_50 .c2 { width: 49.99%; }

.c70_30 .c1 { width: 70%; }
.c70_30 .c2 { width: 29.99%; }

.c60_40 .c1 { width: 60%; }
.c60_40 .c2 { width: 39.99%; }

.c40_30_30 .c1 { width: 40%; }
.c40_30_30 .c2,
.c40_30_30 .c3 { width: 29.99%; }

.c50_25_25 .c1 { width: 50%; }
.c50_25_25 .c2,
.c50_25_25 .c3 { width: 25%; }

/* ***************************** */
/* Basic Tabs */

.tabs
{
	font-size: 13px;
background-repeat: repeat-x;
background-position: top;
padding: 0 8px;
margin-top: 8px;
border-bottom: 1px solid rgb(226, 226, 226);
word-wrap: normal;
min-height: 30px;
_height: 23px;

	
	display: table;
	width: 100%;
	*width: auto;
	box-sizing: border-box;
}

.tabs li
{
	float: left;
}

.tabs li a,
.tabs.noLinks li
{
	color: rgb(44, 44, 44);
text-decoration: none;
background-color: rgb(250, 250, 250);
padding: 0 16px;
margin-right: -1px;
margin-bottom: -1px;
border: 1px solid rgb(226, 226, 226);
border-top-left-radius: 2px;
border-top-right-radius: 2px;
display: inline-block;
line-height: 36px;
cursor: pointer;
outline: 0 none;
white-space: nowrap;
word-wrap: normal;

font-weight: 600;
height: 36px;

}

.tabs li:hover a,
.tabs.noLinks li:hover
{
	color: rgb(44, 44, 44);
text-decoration: none;
background-color: rgb(240, 240, 240);
		
}

.tabs li.active a,
.tabs.noLinks li.active
{
	background-color: #FFFFFF;
padding-bottom: 1px;
border-bottom: 1px none black;

}

/* Tabs inside forms */

.xenForm .tabs,
.xenFormTabs
{
	padding: 5px 30px 0;
}


@media (max-width:480px)
{
	.Responsive .tabs li
	{
		float: none;
	}

	.Responsive .tabs li a,
	.Responsive .tabs.noLinks li
	{
		display: block;
	}
	
	.Responsive .tabs
	{
		display: flex;
		display: -webkit-flex;
		flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
	}
	
	.Responsive .tabs li
	{
		flex-grow: 1;
		-webkit-flex-grow: 1;
		text-align: center;
	}
	
	.Responsive .xenForm .tabs,
	.Responsive .xenFormTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}
}


/* ***************************** */
/* Popup Menus */

.Popup
{
	position: relative;
}

	.Popup.inline
	{
		display: inline;
	}
	
/** Popup menu trigger **/

.Popup .arrowWidget
{
	/* circle-arrow-down */
	background: transparent none no-repeat -32px 0;
margin-top: 0;
margin-left: 2px;
display: inline-block;
*margin-top: 0;
vertical-align: middle;
background-size: 160px 48px;
height: auto !important;
width: 12px !important;
text-align: center;
/*REMOVE BELOW RULES FOR DEFAULT IMAGE*/
width: 16px;
height: 16px;

}

.PopupOpen .arrowWidget
{
	/* circle-arrow-up */
	background-position: -48px 0;

}

.Popup .PopupControl,
.Popup.PopupContainerControl
{
	display: inline-block;
	cursor: pointer;
}

	.Popup .PopupControl:hover,
	.Popup.PopupContainerControl:hover
	{
		color: rgb(44, 44, 44);
text-decoration: none;
background: url(rgba.php?r=0&g=0&b=0&a=51); background: rgba(0, 0, 0, .2); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000,endColorstr=#33000000);

	}

	.Popup .PopupControl:focus,
	.Popup .PopupControl:active,
	.Popup.PopupContainerControl:focus,
	.Popup.PopupContainerControl:active
	{
		outline: 0;
	}
	
	.Popup .PopupControl.PopupOpen,
	.Popup.PopupContainerControl.PopupOpen
	{
		color: #FFF;
background-color: rgb(70, 102, 124);
background-repeat: repeat-x;
background-position: top;
border-top-left-radius: 2px;
border-top-right-radius: 2px;
border-bottom-right-radius: 0;
border-bottom-left-radius: 0;

	}
	
	.Popup .PopupControl.BottomControl.PopupOpen,
	.Popup.PopupContainerControl.BottomControl.PopupOpen
	{
		border-top-left-radius: 0;
		border-top-right-radius: 0;
		border-bottom-left-radius: 2px;
		border-bottom-right-radius: 2px;
	}
		
		.Popup .PopupControl.PopupOpen:hover,
		.Popup.PopupContainerControl.PopupOpen:hover
		{
			text-decoration: none;
		}
		
/** Menu body **/

.Menu
{
	/*background-color: #FFFFFF;*/
	
	font-size: 13px;
border: 1px solid rgb(226, 226, 226);
border-top: 2px solid rgb(70, 102, 124);
overflow: hidden;
box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1);

	
	min-width: 200px;
	*width: 200px;
	
	/* makes menus actually work... */
	position: absolute;
	z-index: 7500;
	display: none;
}

/* allow menus to operate when JS is disabled */
.Popup:hover .Menu
{
	display: block;
}

.Popup:hover .Menu.JsOnly
{
	display: none;
}

.Menu.BottomControl
{
	border-top-width: 1px;
	border-bottom-width: 3px;
	box-shadow: 0px 0px 0px transparent;
}

	.Menu > li > a,
	.Menu .menuRow
	{
		display: block;
	}
	
.Menu.inOverlay
{
	z-index: 10000;
}
		
/* Menu header */

.Menu .menuHeader
{
	overflow: hidden; zoom: 1;
}

.Menu .menuHeader h3
{
	font-size: 14px;

}

.Menu .menuHeader .muted
{
	font-size: 11px;
color: rgb(187, 187, 187);

}

/* Standard menu sections */

.Menu .primaryContent
{
	background-color: rgba(255, 255, 255, 0.96);
}

.Menu .secondaryContent
{
	background-color: rgba(255, 255, 255, 0.96);
}

.Menu .sectionFooter
{
	background-color: rgba(240, 240, 240, 0.9);
}

/* Links lists */

.Menu .blockLinksList
{	
	max-height: 400px;
	overflow: auto;
}

/* form popups */

.formPopup
{
	width: 250px;
	background-color: rgb(255, 255, 255);
}

	.formPopup form,
	.formPopup .ctrlUnit
	{
		margin: 5px auto;
	}
	
		.formPopup .ctrlUnit
		{
		}
		
	.formPopup .textCtrl,
	.formPopup .button
	{
		width: 232px;
	}
		
	.formPopup .ctrlUnit > dt label
	{
		display: block;
		margin-bottom: 2px;
	}
		
	.formPopup .submitUnit dd
	{
		text-align: center;
	}
	
		.formPopup .ctrlUnit > dd .explain
		{
			margin: 2px 0 0;
		}
	
	.formPopup .primaryControls
	{
		zoom: 1;
		white-space: nowrap;
		word-wrap: normal;
		padding: 0 5px;
	}
	
		.formPopup .primaryControls input.textCtrl
		{
			margin-bottom: 0;
		}
	
	.formPopup .secondaryControls
	{
		padding: 0 5px;
	}
	
		.formPopup .controlsWrapper
		{
			background: rgb(250, 250, 250) url('styles/uix/xenforo/gradients/category-23px-light.png') repeat-x top;
			border-radius: 5px;
			padding: 5px;
			margin: 5px 0;
			font-size: 11px;
		}

			.formPopup .controlsWrapper .textCtrl
			{
				width: 222px;
			}
	
	.formPopup .advSearchLink
	{
		display: block;
		text-align: center;
		padding: 5px;
		font-size: 11px;
		border-radius: 5px;
		border: 1px solid rgb(250, 250, 250);
		background: #FFFFFF url('styles/uix/xenforo/gradients/category-23px-light.png') repeat-x top;
	}
	
		.formPopup .advSearchLink:hover
		{
			background-color: rgb(250, 250, 250);
			text-decoration: none;
		}

/* All overlays must have this */
.xenOverlay
{
	display: none;
	z-index: 10000;
	width: 90%;
	box-sizing: border-box;
	max-width: 690px; /*calc: 90=overlay padding+borders*/
}

	.xenOverlay .overlayScroll
	{
		max-height: 400px;
		overflow: auto;
	}
	
	.xenOverlay .overlayScroll.ltr
	{
		direction: ltr;
	}
	
	.xenOverlay .overlayScroll .sortable-placeholder
	{
		background-color: rgb(240, 240, 240);
	}
	
	.xenOverlay .overlayContain
	{
		overflow-x: auto;
	}
	
	.xenOverlay .overlayContain.ltr
	{
		direction: ltr;
	}

.overlayOnly /* needs a bit more specificity over regular buttons */
{
	display: none !important;
}

	.xenOverlay .overlayOnly
	{
		display: block !important;
	}
	
	.xenOverlay input.overlayOnly,
	.xenOverlay button.overlayOnly,
	.xenOverlay a.overlayOnly
	{
		display: inline !important;
	}
	
	.xenOverlay a.close 
	{
		color: #FFF;
border-radius: 2px;
position: absolute;
right: 8px;
top: 8px;
cursor: pointer;

/* NOW USING ICON TEXT */
text-align: center;
width: 32px;
height: 32px;

	}
	
.xenOverlay .nonOverlayOnly
{
	display: none !important;
}

/* Generic form overlays */

.xenOverlay .formOverlay
{
	color: rgb(52,77,93);
background-color: rgb(255,255,255);
padding: 16px;
border: 1px solid rgb(226, 226, 226);
border-radius: 4px;
_zoom: 1;

	margin: 0;
}

	.Touch .xenOverlay .formOverlay
	{
		background: rgb(255,255,255);
		box-shadow: none;
	}

	.xenOverlay .formOverlay a.muted,
	.xenOverlay .formOverlay .muted a
	{
		color: rgb(118, 118, 118);
	}

	.xenOverlay .formOverlay .heading
	{
		font-size: 12pt;
color: #FFFFFF;
background-color: rgb(70, 102, 124);
padding: 8px;
margin-bottom: 10px;
border-style: none;
border-radius: 2px;

	}

	.xenOverlay .formOverlay .subHeading
	{
		border-radius: 2px;

	}
	
	.xenOverlay .formOverlay .textHeading
	{
		color: rgb(44, 44, 44);

	}
	
	.xenOverlay .formOverlay > p
	{
		padding-left: 8px;
		padding-right: 8px;
	}

	.xenOverlay .formOverlay .textCtrl
	{
		color: rgb(52,77,93);
background-color: rgb(248,251,253);
border: 1px solid rgb(236, 241, 245);

	}

	.xenOverlay .formOverlay .textCtrl option
	{
		background-color: rgb(248,251,253);
	}

	.xenOverlay .formOverlay .textCtrl:focus,
	.xenOverlay .formOverlay .textCtrl.Focus
	{
		background-image: none;
border-color: rgb(70, 102, 124);

	}

	.xenOverlay .formOverlay .textCtrl:focus option
	{
		background-image: none;
	}

	.xenOverlay .formOverlay .textCtrl.disabled
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);

	}

	.xenOverlay .formOverlay .textCtrl.disabled option
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);
	}

	.xenOverlay .formOverlay .textCtrl.prompt
	{
		color: rgb(160,160,160);

	}

	.xenOverlay .formOverlay .ctrlUnit > dt dfn,
	.xenOverlay .formOverlay .ctrlUnit > dd li .hint,
	.xenOverlay .formOverlay .ctrlUnit > dd .explain
	{
		color: #bbb;

	}

	.xenOverlay .formOverlay a
	{
		color: rgb(70, 102, 124);

	}

		.xenOverlay .formOverlay a.button
		{
			
		}

	.xenOverlay .formOverlay .avatar img,
	.xenOverlay .formOverlay .avatar .img,
	.xenOverlay .formOverlay .avatarCropper
	{
		background-color: transparent;
	}
	
	/* tabs in form overlay */
	
	.xenOverlay .formOverlay .tabs /* the actual tabs */
	{
		background: transparent none;
border-color: rgb(240, 240, 240);

	}

		.xenOverlay .formOverlay .tabs a
		{
			
		}
		
			.xenOverlay .formOverlay .tabs a:hover
			{
				background: url(rgba.php?r=255&g=255&b=255&a=63); background: rgba(255,255,255, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3FFFFFFF,endColorstr=#3FFFFFFF);

			}
			
			.xenOverlay .formOverlay .tabs .active a
			{
				
			}
			
	.xenOverlay .formOverlay .tabPanel /* panels switched with the tab controls */
	{
		background: transparent url('styles/uix/xenforo/color-picker/panel.png') repeat-x top;
border: 1px solid rgb(240, 240, 240);

	}


/* Generic overlays */

.xenOverlay .section,
.xenOverlay .sectionMain
{
	padding: 0px;
border: 1px solid rgb(226, 226, 226);
border-radius: 4px;

	
	border-color:  rgb(226, 226, 226); border-color:  rgba(226, 226, 226, 0.5); _border-color:  rgb(226, 226, 226);
}

	.Touch .xenOverlay .section,
	.Touch .xenOverlay .sectionMain
	{
		border-color: rgb(226, 226, 226);
		box-shadow: none;
	}

.xenOverlay > .section,
.xenOverlay > .sectionMain
{
	background: none;
	margin: 0;
}

	.xenOverlay .section .heading,
	.xenOverlay .sectionMain .heading
	{
		border-radius: 0;
		margin-bottom: 0;
	}

	.xenOverlay .section .subHeading,
	.xenOverlay .sectionMain .subHeading
	{
		margin-top: 0;
	}

	.xenOverlay .section .sectionFooter,
	.xenOverlay .sectionMain .sectionFooter
	{
		overflow: hidden; zoom: 1;
	}
		
		.xenOverlay .sectionFooter .buttonContainer
		{
			line-height: 31px;
		}
	
		.xenOverlay .sectionFooter .button,
		.xenOverlay .sectionFooter .buttonContainer
		{
			min-width: 75px;
			*min-width: 0;
			float: right;
			margin-left: 5px;
		}
		
			.xenOverlay .sectionFooter .buttonContainer .button
			{
				float: none;
				margin-left: 0;
			}

/* The AJAX progress indicator overlay */

#AjaxProgress.xenOverlay
{
	width: 100%;
	max-width: none;
	overflow: hidden; zoom: 1;
}

	#AjaxProgress.xenOverlay .content
	{
		background: rgb(0, 0, 0) url('styles/uix/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center; background: rgba(0,0,0, 0.5) url('styles/uix/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center;
border-bottom-left-radius: 10px;
float: right;
width: 85px;
height: 30px;

	}
	
		.Touch #AjaxProgress.xenOverlay .content
		{
			background-color: rgb(0, 0, 0);
		}

/* Timed message for redirects */

.xenOverlay.timedMessage
{
	color: black;
background: transparent url('styles/uix/xenforo/overlay/timed-message.png') repeat-x;
border-bottom: 1px solid black;
max-width: none;
width: 100%;

}

	.xenOverlay.timedMessage .content
	{
		font-size: 18pt;
padding: 30px;
text-align: center;

	}
	
/* Growl-style message */

#StackAlerts
{
	position: fixed;
	bottom: 70px;
	left: 35px;
	z-index: 9999; /* in front of the expose mask */
}

	#StackAlerts .stackAlert
	{
		position: relative;
		width: 270px;
		border: 1px solid rgb(226, 226, 226);
		border-radius: 5px;
		box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4);
		margin-top: 5px;
	}

		#StackAlerts .stackAlertContent
		{
			padding: 10px;
			padding-right: 30px;
			border-radius: 4px;
			border: solid 2px rgb(250, 250, 250);
			background: url(rgba.php?r=255&g=255&b=255&a=229); background: rgba(255, 255, 255, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5FFFFFF,endColorstr=#E5FFFFFF);
			font-size: 11px;
			font-weight: bold;
		}
	
/* Inline Editor */

.xenOverlay .section .messageContainer
{
	padding: 0;
}

.xenOverlay .section .messageContainer .mceLayout
{
	border: none;	
}

.xenOverlay .section .messageContainer tr.mceFirst td.mceFirst
{
	border-top: none;
}

.xenOverlay .section .messageContainer tr.mceLast td.mceLast,
.xenOverlay .section .messageContaner tr.mceLast td.mceIframeContainer
{
	border-bottom: none;
}

.xenOverlay .section .textCtrl.MessageEditor,
.xenOverlay .section .mceLayout,
.xenOverlay .section .bbCodeEditorContainer textarea
{
	width: 100% !important;
	min-height: 260px;
	_height: 260px;
	box-sizing: border-box;
}


@media (max-width:610px)
{
	.Responsive .xenOverlay
	{
		width: 100%;
	}
	
	.Responsive .xenOverlay .formOverlay,
	.Responsive .xenOverlay .section,
	.Responsive .xenOverlay .sectionMain
	{
		border-radius: 10px;
		border-width: 10px;
	}
	
	.Responsive .xenOverlay a.close 
	{
		top: 0;
		right: 0;
		width: 28px;
		height: 28px;
		background-size: 100% 100%;
	}
}


.alerts .alertGroup
{
	margin-bottom: 20px;
}

.alerts .primaryContent
{
	overflow: hidden; zoom: 1;
	padding: 5px;
}

.alerts .avatar
{
	float: left;
}

.alerts .avatar img
{
	width: 32px;
	height: 32px;
}

.alerts .alertText
{
	margin-left: 32px;
	padding: 0 5px;
}

.alerts h3
{
	display: inline;
}

.alerts h3 .subject
{
	font-weight: bold;
}

.alerts .timeRow
{
	font-size: 11px;
	margin-top: 5px;
}
	
	.alerts .newIcon,
	.alertsPopup .newIcon
	{
		display: inline-block;
		vertical-align: baseline;
		margin-left: 2px;
		width: 11px;
		height: 11px;
		background: url('styles/uix/xenforo/xenforo-ui-sprite.png') no-repeat -144px -40px;
	}

/** Data tables **/

.dataTableWrapper
{
	overflow-x: auto;
	overflow-y: visible;
}

table.dataTable
{
	width: 100%;
	_width: 99.5%;
	margin: 10px 0;
}

.dataTable caption
{
	font-size: 14px;
color: #FFF;
background-color: rgb(70, 102, 124);
padding: 10px 16px;
margin-bottom: 3px;
font-weight: 600;

}

.dataTable tr.dataRow td
{
	border-bottom: 1px solid rgb(250, 250, 250);
	padding: 5px 10px;
	word-wrap: break-word;
}

.dataTable tr.dataRow td.secondary
{
	background: #FFFFFF url("styles/uix/xenforo/gradients/category-23px-light.png") repeat-x top;
}

.dataTable tr.dataRow th
{
	background: rgb(248,251,253) url("styles/uix/xenforo/gradients/category-23px-light.png") repeat-x top;
	border-bottom: 1px solid rgb(236, 241, 245);
	border-top: 1px solid rgb(248,251,253);
	color: rgb(52,77,93);
	font-size: 11px;
	padding: 5px 10px;
}

	.dataTable tr.dataRow th a
	{
		color: inherit;
		text-decoration: underline;
	}

.dataTable .dataRow .dataOptions
{
	text-align: right;
	white-space: nowrap;
	word-wrap: normal;
	padding: 0;
}

.dataTable .dataRow .important,
.dataTable .dataRow.important
{
	font-weight: bold;
}

.dataTable .dataRow .dataOptions a.secondaryContent
{
	display: inline-block;
	border-left: 1px solid rgb(250, 250, 250);
	border-bottom: none;
	padding: 7px 10px 6px;
	font-size: 11px;
}

	.dataTable .dataRow .dataOptions a.secondaryContent:hover
	{
		background-color: rgb(250, 250, 250);
		text-decoration: none;
	}

	.dataTable .dataRow .delete
	{
		padding: 0px;
		width: 26px;
		border-left: 1px solid rgb(250, 250, 250);
		background-color: #FFFFFF;
	}	
				
		.dataTable .dataRow .delete a
		{
			display: block;
			background: transparent url('styles/uix/xenforo/permissions/deny.png') no-repeat center center;
			cursor: pointer;
		
			padding: 5px;
			width: 16px;
			height: 16px;
			
			overflow: hidden;
			white-space: nowrap;
			text-indent: -1000px;
		}

.memberListItem
{
	overflow: hidden;
zoom: 1;

border-bottom: solid 1px rgb(226, 226, 226);
box-sizing: border-box;
padding: 8px;

}

	.memberListItem .avatar,
	.memberListItem .icon
	{
		float: left;

	}
	
	/* ----------------------- */
	
	.memberListItem .extra
	{
		font-size: 12px;
float: right;
margin-right: 8px;

	}

		.memberListItem .extra .DateTime
		{
			display: block;
		}

		.memberListItem .extra .bigNumber
		{
			font-size: 250%;
			color: rgb(118, 118, 118);
		}
	
	.memberListItem .member
	{
		margin-left: 58px;

	}
	
	/* ----------------------- */
		
		.memberListItem h3.username
		{
			font-weight: bold;
font-size: 13pt;
margin-bottom: 3px;

		}
			
		.memberListItem .username.guest
		{
			font-style: italic;
font-weight: normal;

		}
	
	/* ----------------------- */
		
		.memberListItem .userInfo
		{
			font-size: 12px;
margin-bottom: 3px;

		}
		
			.memberListItem .userBlurb
			{
			}
		
				.memberListItem .userBlurb .userTitle
				{
					font-weight: bold;

				}

			.memberListItem .userStats dt,
			.memberListItem .userStats dd
			{
				white-space: nowrap;
			}
				
	
	/* ----------------------- */
		
		.memberListItem .member .contentInfo
		{
			margin-top: 5px;

		}
	
	/* ----------------------- */
	
	
/* extended member list items have a fixed 200px right column */

.memberListItem.extended .extra
{
	width: 200px;
}

.memberListItem.extended .member
{
	margin-right: 210px;
}

/* Styling for hover-dismiss controls */

.DismissParent .DismissCtrl
{
	position: absolute;
	top: 12px;
	right: 5px;
	
	display: block;
	background: transparent url('styles/uix/xenforo/xenforo-ui-sprite.png') no-repeat -80px 0;
	color: white;
	width: 15px;
	height: 15px;
	line-height: 15px;
	text-align: center;
	
	opacity: .4;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	
	font-size: 10px;
	
	overflow: hidden;
	white-space: nowrap;
	text-indent: 20000em;
	
	cursor: pointer;
}

	.DismissParent:hover .DismissCtrl,
	.Touch .DismissParent .DismissCtrl
	{
		opacity: 1;
	}
	
		.DismissParent:hover .DismissCtrl:hover
		{
			background-position: -96px 0;
		}
		
			.DismissParent:hover .DismissCtrl:active
			{
				background-position: -112px 0;
			}
			
.DismissParent.notice_-1 .DismissCtrl
{
	display: none;
}

/* ***************************** */
/* un-reset, mostly from YUI */

.baseHtml h1
	{ font-size:138.5%; } 
.baseHtml h2
	{ font-size:123.1%; }
.baseHtml h3
	{ font-size:108%; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3
	{  margin:1em 0; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3, .baseHtml h4, .baseHtml h5, .baseHtml h6, .baseHtml strong
	{ font-weight:bold; } 
.baseHtml abbr, .baseHtml acronym
	{ border-bottom:1px dotted #000; cursor:help; }  
.baseHtml em
	{  font-style:italic; } 
.baseHtml blockquote, .baseHtml ul, .baseHtml ol, .baseHtml dl
	{ margin:1em; } 
.baseHtml ol, .baseHtml ul, .baseHtml dl
	{ margin-left:3em; margin-right:0; } 
.baseHtml ul ul, .baseHtml ul ol, .baseHtml ul dl, .baseHtml ol ul, .baseHtml ol ol, .baseHtml ol dl, .baseHtml dl ul, .baseHtml dl ol, .baseHtml dl dl
	{ margin-top:0; margin-bottom:0; }
.baseHtml ol li
	{ list-style: decimal outside; } 
.baseHtml ul li
	{ list-style: disc outside; } 
.baseHtml ol ul li, .baseHtml ul ul li
	{ list-style-type: circle; }
.baseHtml ol ol ul li, .baseHtml ol ul ul li, .baseHtml ul ol ul li, .baseHtml ul ul ul li
	{ list-style-type: square; }
.baseHtml ul ol li, .baseHtml ul ol ol li, .baseHtml ol ul ol li
	{ list-style: decimal outside; }
.baseHtml dl dd
	{ margin-left:1em; } 
.baseHtml th, .baseHtml td
	{ border:1px solid #000; padding:.5em; } 
.baseHtml th
	{ font-weight:bold; text-align:center; } 
.baseHtml caption
	{ margin-bottom:.5em; text-align:center; } 
.baseHtml p, .baseHtml pre, .baseHtml fieldset, .baseHtml table
	{ margin-bottom:1em; }

.PageNav
{
	font-size: 12px;
padding: 2px 0;
overflow: hidden;
zoom: 1;
line-height: 26px;
word-wrap: normal;
min-width: 150px;
white-space: nowrap;

	
	margin-bottom: -.5em;
}

	.PageNav .hidden
	{
		display: none;
	}
	
	.PageNav .pageNavHeader,
	.PageNav a,
	.PageNav .scrollable
	{
		display: block;
		float: left;
		margin-right: 3px;
		margin-bottom: .5em;
	}
	
	.PageNav .pageNavHeader
	{
		padding: 1px 0;
	}

	.PageNav a
	{		
		color: rgb(70, 102, 124);
text-decoration: none;
background-color: rgb(255,255,255);
border: 1px solid rgb(236, 241, 245);
border-radius: 2px !important;
text-align: center;
box-sizing: border-box;

		
		
		width: 24px;
	}
		
		.PageNav a[rel=start]
		{
			width: 24px !important;
		}

		.PageNav a.text
		{
			width: auto !important;
			padding: 0 4px;
		}
			
		.PageNav a.currentPage
		{
			color: #FFF;
background-color: rgb(102, 102, 102);
border-color: rgb(102, 102, 102);
position: relative;

		}

		a.PageNavPrev,
		a.PageNavNext
		{
			color: rgb(83, 83, 83);
background-color: transparent;
padding: 1px;
border: 1px none rgb(240, 240, 240);
cursor: pointer;

			
			width: 24px !important;
		}
		
		.PageNav a:hover,
		.PageNav a:focus
		{
			color: rgb(70, 102, 124);
text-decoration: none;
background-color: rgb(248,251,253);
border-color: rgb(221, 229, 234);

		}
		
	.PageNav a.distinct
	{
		margin-left: 3px;
	}
			
	.PageNav .scrollable
	{
		position: relative;
		overflow: hidden;
		width: 142px; /* width of 5 page numbers plus their margin & border */
		height: 18px; /* only needs to be approximate */
	}
	
		.PageNav .scrollable .items
		{
			display: block;
			width: 20000em; /* contains scrolling items, should be huge */
			position: absolute;
		}
		
/** Edge cases - large numbers of digits **/

.PageNav .gt999 
{
	font-size: 9px;
	letter-spacing: -0.05em; 
}

.PageNav.pn5 a { width: 29px; } .PageNav.pn5 .scrollable { width: 167px; }
.PageNav.pn6 a { width: 33px; } .PageNav.pn6 .scrollable { width: 187px; }
.PageNav.pn7 a { width: 37px; } .PageNav.pn7 .scrollable { width: 207px; }


@media (max-width:610px)
{
	.Responsive .PageNav .pageNavHeader
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .PageNav .unreadLink
	{
		display: none;
	}
}


/* ***************************** */
/* DL Name-Value Pairs */

.pairs dt,
.pairsInline dt,
.pairsRows dt,
.pairsColumns dt,
.pairsJustified dt
{
	color: rgb(118, 118, 118);
}

.pairsRows,
.pairsColumns,
.pairsJustified
{
	line-height: 1.5;
}

.pairsInline dl,
.pairsInline dt,
.pairsInline dd
{
	display: inline;
}

.pairsRows dt,
.pairsRows dd
{
	display: inline-block;
	vertical-align: top;

	*display: inline;
	*margin-right: 1ex;
	*zoom: 1;
}

dl.pairsColumns,
dl.pairsJustified,
.pairsColumns dl,
.pairsJustified dl
{
	overflow: hidden; zoom: 1;
}

.pairsColumns dt,
.pairsColumns dd
{
	float: left;
	width: 48%;
}

.pairsJustified dt
{
	float: left;
	max-width: 100%;
	margin-right: 5px;
}
.pairsJustified dd
{
	float: right;
	text-align: right;
	max-width: 100%
}


/* ***************************** */
/* Lists that put all elements on a single line */

.listInline ul,
.listInline ol,
.listInline li,
.listInline dl,
.listInline dt,
.listInline dd
{
	display: inline;
}

/* intended for use with .listInline, produces 'a, b, c, d' / 'a * b * c * d' lists */

.commaImplode li:after,
.commaElements > *:after
{
	content: ', ';
}

.commaImplode li:last-child:after,
.commaElements > *:last-child:after
{
	content: '';
}

.bulletImplode li:before
{
	content: '\2022\a0';
}

.bulletImplode li:first-child:before
{
	content: '';
}

/* Three column list display */

.threeColumnList
{
	overflow: hidden; zoom: 1;
}

.threeColumnList li
{
	float: left;
	width: 32%;
	margin: 2px 1% 2px 0;
}

.twoColumnList
{
	overflow: hidden; zoom: 1;
}

.twoColumnList li
{
	float: left;
	width: 48%;
	margin: 2px 1% 2px 0;
}

/* ***************************** */
/* Preview tooltips (threads etc.) */

.previewTooltip
{
}
	.previewTooltip .avatar
	{
		float: left;
	}
	.previewTooltip .text
	{
		margin-left: 64px;
	}
		.previewTooltip blockquote
		{
			font-size: 11pt;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
line-height: 1.4;

			font-size: 10pt;
			max-height: 150px;
			overflow: hidden;
		}
		.previewTooltip .posterDate
		{
			font-size: 11px;
			padding-top: 5px;
			border-top: 1px solid rgb(250, 250, 250);
			margin-top: 5px;
		}

/* ***************************** */
/* List of block links */

.blockLinksList
{
	font-size: 12px;
padding: 0 0 4px;

}
	.blockLinksList a,
	.blockLinksList label
	{
		color: rgb(70, 102, 124);
padding: 6px 12px;
display: block;
outline: 0 none;
font-weight: 600;

	}
		.blockLinksList a:hover,
		.blockLinksList a:focus,
		.blockLinksList li.kbSelect a,
		.blockLinksList label:hover,
		.blockLinksList label:focus,
		.blockLinksList li.kbSelect label
		{
			color: rgb(83, 83, 83);
text-decoration: none;

		}
		.blockLinksList a:active,
		.blockLinksList li.kbSelect a:active,
		.blockLinksList a.selected,
		.blockLinksList li.kbSelect a.selected,
		.blockLinksList label:active,
		.blockLinksList li.kbSelect label:active,
		.blockLinksList label.selected,
		.blockLinksList li.kbSelect label.selected
		{
			
		}
		.blockLinksList a.selected,
		.blockLinksList li.kbSelect a.selected,
		.blockLinksList label.selected,
		.blockLinksList li.kbSelect label.selected
		{
			color: rgb(255, 255, 255);
display: block;

		}
		.blockLinksList span.depthPad
		{
			display: block;
		}

.blockLinksList .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: #e74c3c;
padding: 0 2px;
border-radius: 2px;
position: absolute;
right: 2px;
top: -12px;
line-height: 16px;
min-width: 16px;
_width: 16px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
box-sizing: border-box;
height: 16px;


	float: right;
	position: relative;
	right: 0;
	top: -1px;
}

	.blockLinksList .itemCount.Zero
	{
		display: none;
	}
.bubbleLinksList
{
	overflow: hidden;
}

.bubbleLinksList a
{
	float: left;
	padding: 2px 4px;
	margin-right: 2px;
	border-radius: 3px;
	text-decoration: none;
}
	.bubbleLinksList a:hover,
	.bubbleLinksList a:active
	{
		color: rgb(83, 83, 83);
text-decoration: none;

	}
	.bubbleLinksList a.active
	{
		
		color: rgb(255, 255, 255);
display: block;

	}

/* ***************************** */
/* Normally-indented nested lists */

.indentList ul,
.indentList ol
{
	margin-left: 2em;
}

/* ***************************** */
/* AJAX progress image */

.InProgress
{
	background: transparent url('styles/uix/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat right center;
}

/* ***************************** */
/* Hidden inline upload iframe */

.hiddenIframe
{
	display: block;
	width: 500px;
	height: 300px;
}

/* ***************************** */
/* Exception display */

.traceHtml { font-size:11px; font-family:calibri, verdana, arial, sans-serif; }
.traceHtml .function { color:rgb(180,80,80); font-weight:normal; }
.traceHtml .file { font-weight:normal; }
.traceHtml .shade { color:rgb(128,128,128); }
.traceHtml .link { font-weight:bold; }

/* ***************************** */
/* Indenting for options */

._depth0 { padding-left:  0em; }
._depth1 { padding-left:  2em; }
._depth2 { padding-left:  4em; }
._depth3 { padding-left:  6em; }
._depth4 { padding-left:  8em; }
._depth5 { padding-left: 10em; }
._depth6 { padding-left: 12em; }
._depth7 { padding-left: 14em; }
._depth8 { padding-left: 16em; }
._depth9 { padding-left: 18em; }

.xenOverlay .errorOverlay
{
	color: white;
	padding: 25px;
	border-radius: 20px;	
	border:  20px solid rgb(0,0,0); border:  20px solid rgba(0,0,0, 0.25); _border:  20px solid rgb(0,0,0);
	
	background: url(rgba.php?r=0&g=0&b=0&a=191); background: rgba(0,0,0, 0.75); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#BF000000,endColorstr=#BF000000);
}

	.xenOverlay .errorOverlay .heading
	{
		padding: 5px 10px;
		font-weight: bold;
		font-size: 12pt;
		background: rgb(180,0,0);
		color: white;
		margin-bottom: 10px;
		border-radius: 5px;
		border: 1px solid rgb(100,0,0);
	}

	.xenOverlay .errorOverlay li
	{
		line-height: 2;
	}
	
	.xenOverlay .errorOverlay .exceptionMessage
	{
		color: rgb(118, 118, 118);
	}

/*** inline errors ***/

.formValidationInlineError
{
	display: none;
	position: absolute;
	z-index: 5000;
	background-color: white;
	border: 1px solid rgb(180,0,0);
	color: rgb(180,0,0);
	box-shadow: 2px 2px 10px #999;
	border-radius: 3px;
	padding: 2px 5px;
	font-size: 11px;
	width: 175px;
	min-height: 2.5em;
	_height: 2.5em;
	word-wrap: break-word;
}

	.formValidationInlineError.inlineError
	{
		position: static;
		width: auto;
		min-height: 0;
	}

/** Block errors **/

.errorPanel
{
	margin: 10px 0 20px;
	color: rgb(180,0,0);
	background: rgb(255, 235, 235);
	border-radius: 5px;
	border: 1px solid rgb(180,0,0);
}

	.errorPanel .errorHeading
	{
		margin: .75em;
		font-weight: bold;
		font-size: 12pt;
	}
	
	.errorPanel .errors
	{
		margin: .75em 2em;
		display: block;
		line-height: 1.5;
	}


@media (max-width:850px)
{
	.Responsive .formValidationInlineError
	{
		position: static;
		width: auto;
		min-height: auto;
	}
}


/* Undo some nasties */

input[type=search]
{
	-webkit-appearance: textfield;
	box-sizing: content-box;
}

/* ignored content hiding */

.ignored { display: none !important; }

/* Misc */

.floatLeft { float: left; }
.floatRight { float: right; }

.horizontalContain { overflow-x: auto; }

.ltr { direction: ltr; }

/* Square-cropped thumbs */

.SquareThumb
{
	position: relative;
	display: block;
	overflow: hidden;
	padding: 0;
	direction: ltr;
	/* individual instances can override this size */
	width: 48px;
	height: 48px;
}

.SquareThumb img
{
	position: relative;
	display: block;
}

/* Basic, common, non-templated BB codes */

.bbCodeImage
{
	max-width: 100%;
}

.bbCodeImageFullSize
{
	position: absolute;
	z-index: 50000;
	background-color: #FFFFFF;
}

.bbCodeStrike
{
	text-decoration: line-through;
}

img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}

/* smilie sprite classes */

img.mceSmilieSprite.mceSmilie39
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f642.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie66
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f44d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie27
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f601.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie67
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f44e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie69
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f44c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie2
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f609.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie70
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f44f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie7
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f61b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie11
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f644.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie6
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f60e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie5
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f615.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie12
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f632.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie10
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f633.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie17
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f62c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie40
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f641.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie4
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f620.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie43
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f603.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie25
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f604.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie1
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/263a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie8
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f600.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie41
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f60a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie28
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f606.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie44
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f605.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie45
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f602.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie18
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f923.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie46
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f607.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie47
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f60c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie24
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f60d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie48
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f618.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie51
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f61c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie32
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f61d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie56
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f911.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie14
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f914.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie42
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f917.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie49
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f913.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie29
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f92a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie26
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f60b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie21
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f60f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie62
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f627.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie9
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f62e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie16
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f635.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie63
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f631.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie64
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f628.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie65
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f630.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie52
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f636.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie22
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f610.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie50
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f611.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie37
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f910.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie38
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f626.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie3
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/2639.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie20
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f612.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie19
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f622.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie23
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f62d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie58
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f623.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie33
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f616.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie59
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f62b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie34
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f61e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie57
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f614.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie35
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f61f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie60
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f629.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie61
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f624.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie36
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f621.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie13
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f922.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie30
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f37a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie31
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f37b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie15
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f4a9.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie55
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f37f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie71
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f525.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie53
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f433.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie54
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f40b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie68
{
	width: 18px; height: 18px; background: url('https://cdn.beeradvocate.com/im/emoji/twemoji/svg/1f918.svg') no-repeat 0px 0px;
}


.visibleResponsiveFull { display: inherit !important; }

.visibleResponsiveWide,
.visibleResponsiveMedium,
.visibleResponsiveNarrow { display: none !important; }

.hiddenResponsiveFull { display: none !important; }

.hiddenResponsiveWide,
.hiddenResponsiveMedium,
.hiddenResponsiveNarrow { display: inherit !important; }


@media (max-width:850px)
{
	.Responsive .visibleResponsiveFull { display: none !important; }
	.Responsive .hiddenResponsiveFull { display: inherit !important; }
	.Responsive .hiddenWideUnder { display: none !important; }
}
@media (min-width:611px) AND (max-width:850px)
{
	.Responsive .visibleResponsiveWide { display: inherit !important; }
	.Responsive .hiddenResponsiveWide { display: none !important; }
	}

@media (min-width:481px) AND (max-width:610px)
{
	.Responsive .visibleResponsiveMedium { display: inherit !important; }
	.Responsive .hiddenResponsiveMedium { display: none !important; }
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder { display: none !important; }
}

@media (max-width:480px)
{
	.Responsive .visibleResponsiveNarrow { display: inherit !important; }
	.Responsive .hiddenResponsiveNarrow { display: none !important; }
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder,
	.Responsive .hiddenNarrowUnder { display: none !important; }
}

@media (max-width:610px)
{
	.Responsive .threeColumnList li
	{
		float: none;
		width: auto;
		margin: 2px 1% 2px 0;
	}
}

@media (max-width:480px)
{
	.Responsive .xenTooltip.statusTip
	{
		width: auto;
	}
	.Responsive .xenPreviewTooltip
	{
		box-sizing: border-box;
		width: auto;
		max-width: 100%;
	}
	.Responsive .xenPreviewTooltip .arrow
	{
		display: none;
	}
	.Responsive .previewTooltip .avatar
	{
		display: none;
	}
	.Responsive .previewTooltip .text
	{
		margin-left: 0;
	}
}




/* --- form.css --- */

/** Forms **/

.xenForm
{
	margin: 10px auto;
	max-width: 800px;
}

	.xenOverlay .xenForm
	{
		max-width: 600px;
	}

.xenForm .ctrlUnit > dd
{
	width: 68%;
	box-sizing: border-box;
	padding-right: 30px;
}

.xenForm .ctrlUnit > dd .textCtrl
{
	box-sizing: border-box;
	width: 100%;
}

	.xenForm .ctrlUnit > dd .textCtrl.indented
	{
		width: calc(100% - 16px);
	}

	.xenForm .ctrlUnit > dd .textCtrl[size],
	.xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: auto !important;
		min-width: 0;
	}

	.xenForm .ctrlUnit > dd .textCtrl.number
	{
		width: 150px;
	}


.xenForm > .sectionHeader:first-child,
.xenForm > fieldset > .sectionHeader:first-child
{
	margin-top: 0;
}

/** Sections **/

.xenForm fieldset,
.xenForm .formGroup
{
	border-top: 1px solid rgb(250, 250, 250);
	margin: 20px auto;
}

.xenForm > fieldset:first-child,
.xenForm > .formGroup:first-child
{
	border-top: none;
	margin: auto;
}

.xenForm .PreviewContainer + fieldset,
.xenForm .PreviewContainer + .formGroup
{
	border-top: none;
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit,
.xenForm .submitUnit
{
	border-top: 1px solid rgb(250, 250, 250);
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit
{
	padding-top: 10px;
}

.xenForm .primaryContent + .submitUnit,
.xenForm .secondaryContent + .submitUnit
{
	margin-top: 0;
	border-top: none;
}

.xenForm .ctrlUnit.submitUnit dd
{
	line-height: 31px;
	padding-top: 0;
}

	.ctrlUnit.submitUnit dd .explain,
	.ctrlUnit.submitUnit dd .text,
	.ctrlUnit.submitUnit dd label
	{
		line-height: 1.28;
	}

/* now undo that */

.xenOverlay .ctrlUnit.submitUnit dd,
.Menu .ctrlUnit.submitUnit dd,
#QuickSearch .ctrlUnit.submitUnit dd
{
	border: none;
	background: none;
}

.xenForm .ctrlUnit
{
	
}

	.xenForm .ctrlUnit.limited
	{
		display: none;
	}

	/** Sections Immediately Following Headers **/

	.xenForm .sectionHeader + fieldset,
	.xenForm .heading + fieldset,
	.xenForm .subHeading + fieldset,
	.xenForm .sectionHeader + .formGroup,
	.xenForm .heading + .formGroup,
	.xenForm .subHeading + .formGroup
	{
		border-top: none;
		margin-top: 0;
	}

.xenForm .formHiderHeader
{
	margin: 10px;
	font-size: 15px;
	font-weight: bold;
}


/** *********************** **/
/** TEXT INPUTS             **/
/** *********************** **/

.textCtrl
{
	font-size: 13px;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
color: #404040;
background-color: #FFFFFF;
padding: 5px 10px;
margin-bottom: 2px;
border: 1px solid rgb(226, 226, 226);
border-radius: 2px;
outline: 0;
box-sizing: border-box;
min-height: 36px;

}

select.textCtrl
{
	word-wrap: normal;
	-webkit-appearance: menulist;
}

select[multiple].textCtrl,
select[size].textCtrl
{
	-webkit-appearance: listbox;
}

select[size="0"].textCtrl,
select[size="1"].textCtrl
{
	-webkit-appearance: menulist;
}

textarea.textCtrl
{
	word-wrap: break-word;
	resize: vertical;
}

	.textCtrl:focus,
	.textCtrl.Focus
	{
		border-color: rgb(70, 102, 124);

	}

	textarea.textCtrl:focus
	{
		
	}

	input.textCtrl.disabled,
	textarea.textCtrl.disabled,
	.disabled .textCtrl
	{
		font-style: italic;
color: rgb(100,100,100);
background-color: rgb(245,245,245);

	}

	.textCtrl.prompt
	{
		color: rgb(144, 144, 144);

	}

	.textCtrl:-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(144, 144, 144);

	}

	.textCtrl::-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(144, 144, 144);

	}

	.textCtrl::-webkit-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(144, 144, 144);

	}

	.textCtrl:-ms-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(144, 144, 144);

	}

	.textCtrl.autoSize
	{
		width: auto !important;
	}

	.textCtrl.number,
	.textCtrl.number input
	{
		text-align: right;
		width: 150px;
	}

	.textCtrl.fillSpace
	{
		width: 100%;
		box-sizing: border-box;
		_width: 95%;
	}

	.textCtrl.code,
	.textCtrl.code input
	{
		font-family: Consolas, "Courier New", Courier, monospace;
white-space: pre;
word-wrap: normal;
direction: ltr;

	}

	input.textCtrl[type="password"]
	{
		font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	}

	input[type="email"],
	input[type="url"]
	{
		direction: ltr;
	}

	.textCtrl.titleCtrl,
	.textCtrl.titleCtrl input
	{
		font-size: 18pt;
	}

textarea.textCtrl.Elastic
{
	/* use for jQuery.elastic */
	max-height: 300px;
}

/* for use with wrapped inputs */
.textCtrlWrap
{
	display: inline-block;
}

.textCtrlWrap input.textCtrl
{
	padding: 0 !important;
	margin: 0 !important;
	border: none !important;
	background: transparent !important;
	border-radius: 0 !important;
}

.textCtrlWrap.blockInput input.textCtrl
{
	border-top: 1px solid rgb(226, 226, 226) !important;
	margin-top: 4px !important;
}

.taggingInput.textCtrl
{
	padding-top: 3px;
	min-height: 25px;
}

.taggingInput input
{
	margin: 0px;
	font-size: 12px;
	border: 1px solid transparent;
	padding: 0;
	background: transparent;
	outline: 0;
	color: inherit;
	font-family: inherit;
}

.taggingInput .tag
{
	font-size: 11px;
color: rgb(83, 83, 83);
background-color: #FFFFFF;
padding-right: 4px;
padding-left: 6px;
margin-left: 9px;
border: 1px solid rgb(226, 226, 226);
border-left-style: none;
border-top-left-radius: 0;
border-top-right-radius: 4px;
border-bottom-right-radius: 4px;
border-bottom-left-radius: 0;
position: relative;
display: inline-block;
line-height: 20px;
height: 20px;

	border-left-style: solid;
	border-radius: inherit;
	padding: 0 4px;
	margin: 0 2px 0 2px;
	max-width: 98%;
	vertical-align: middle;
}

.disabled.taggingInput .tag
{
	opacity: 0.7;
}

	.disabled.taggingInput .tag a
	{
		pointer-events: none;
	}

	html .taggingInput .tag a
	{
		color: rgb(226, 226, 226);
		font-weight: bold;
		text-decoration: none;
	}

.taggingInput .addTag
{
	display: inline-block;
	min-width: 150px;
	max-width: 100%;
	margin-top: 2px;
}

.taggingInput .tagsClear
{
	clear: both;
	width: 100%;
	height: 0px;
	float: none;
}

/** *********************** **/
/** BUTTONS                 **/
/** *********************** **/

.button
{
	font-style: normal;

	font-size: 13px;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
color: rgb(83, 83, 83);
background-color: rgb(226, 226, 226);
padding: 0px 10px;
border-width: 0;
border-top-color: rgb(255, 255, 255);
border-radius: 2px;
text-align: center;
outline: none;
line-height: 36px;
display: inline-block;
cursor: pointer;
box-sizing: border-box;
box-shadow: inset 0 -2px 0 rgba(0,0,0,.1);
-webkit-appearance: none;
font-weight: 600;
height: 36px;

}

.button.smallButton
{
	font-size: 11px;
	padding: 0px 4px;
	line-height: 21px;
	height: 21px;
	border-radius: 5px;
}

.button.primary
{
	color: #FFF;
background-color: rgb(70, 102, 124);

}

input.button.disabled,
a.button.disabled,
input.button.primary.disabled,
a.button.primary.disabled,
html .buttonProxy .button.disabled
{
	color: rgb(226, 226, 226);
background-color: rgb(154, 154, 154);
box-shadow: 0 0 0 transparent;

}

	.button::-moz-focus-inner
	{
		border: none;
	}

	a.button
	{
		display: inline-block;
		color: rgb(83, 83, 83);
	}

	.button:hover,
	.button[href]:hover,
	.buttonProxy:hover .button
	{
		color: #FFF;
text-decoration: none;
background-color: rgb(68, 68, 68);
border-top-color: white;

	}

	.button:focus
	{
		border-color: rgb(226, 226, 226);

	}

	.button:active,
	.button[href]:active,
	.button.ToggleButton.checked,
	.buttonProxy:active .button
	{
		color: #FFF;
background-color: rgb(43, 43, 43);
border-bottom-color: white;
box-shadow: 0px 0px 0px 0px transparent;
outline: 0;

	}

	.button.ToggleButton
	{
		cursor: default;
		width: auto;
		color: ;
	}

	.button.ToggleButton.checked
	{
		background-color: rgb(255,150,50);
	}

	.button.inputSupplementary
	{
		width: 25px;
		position: absolute;
		top: 0px;
		right: 0px;
	}

	.button.inputSupplementary.add
	{
		color: green;
	}

	.button.inputSupplementary.delete
	{
		color: red;
	}

	.submitUnit .button
	{
		min-width: 100px;
		*min-width: 0;
	}

















/** Control Units **/

.xenForm .ctrlUnit
{
	position: relative;
	margin: 10px auto;
}

/* clearfix */ .xenForm .ctrlUnit { zoom: 1; } .xenForm .ctrlUnit:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.xenForm .ctrlUnit.fullWidth
{
	overflow: visible;
}

/** Control Unit Labels **/

.xenForm .ctrlUnit > dt
{
	padding-top: 4px;
padding-right: 15px;
text-align: right;
vertical-align: top;

	box-sizing: border-box;
	width: 32%;
	float: left;
}

/* special long-text label */
.xenForm .ctrlUnit > dt.explain
{
	font-size: 11px;
	text-align: justify;
}


.xenForm .ctrlUnit.fullWidth dt,
.xenForm .ctrlUnit.submitUnit.fullWidth dt
{
	float: none;
	width: auto;
	text-align: left;
	height: auto;
}

.xenForm .ctrlUnit.fullWidth dt
{
	margin-bottom: 8px;
}

	.xenForm .ctrlUnit > dt label
	{
		margin-left: 30px;
	}

	/** Hidden Labels **/

	.xenForm .ctrlUnit.surplusLabel dt label
	{
		display: none;
	}

	/** Section Links **/

	.ctrlUnit.sectionLink dt
	{
		text-align: left;
		font-size: 11px;
	}

		.ctrlUnit.sectionLink dt a
		{
			margin-left: 11px; /*TODO: sectionHeader padding + border*/
		}

	/** Hints **/

	.ctrlUnit > dt dfn
	{
		font-style: italic;
font-size: 10px;
color: rgb(118, 118, 118);
margin-left: 30px;
display: block;

	}

	.ctrlUnit.fullWidth dt dfn
	{
		display: inline;
		margin: 0;
	}

		.ctrlUnit > dt dfn b,
		.ctrlUnit > dt dfn strong
		{
			color: rgb(102, 102, 102);
		}

	/** Inline Errors **/

	.ctrlUnit > dt .error
	{
		font-size: 10px;
color: red;
display: block;

	}

	.ctrlUnit > dt dfn,
	.ctrlUnit > dt .error,
	.ctrlUnit > dt a
	{
		font-weight: normal;
	}

.xenForm .ctrlUnit.submitUnit dt
{
	height: 19px;
	display: block;
}

	.ctrlUnit.submitUnit dt.InProgress
	{
		background: transparent url('styles/uix/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat center center;
	}

/** Control Holders **/

.xenForm .ctrlUnit > dd
{
	/*todo: kill property */
	
	float: left;
}

.xenForm .ctrlUnit.fullWidth > dd
{
	float: none;
	width: auto;
	padding-left: 30px;
}

/** Explanatory paragraph **/

.ctrlUnit > dd .explain
{
	font-size: 12px;
color: rgb(118, 118, 118);
margin-top: 2px;

	/*TODO:max-width: auto;*/
}

	.ctrlUnit > dd .explain b,
	.ctrlUnit > dd .explain strong
	{
		color: rgb(102, 102, 102);
	}

/** List items inside controls **/

.ctrlUnit > dd > * > li
{
	margin: 4px 0 8px;
	padding-left: 1px; /* fix a webkit display bug */
}

.ctrlUnit > dd > * > li:first-child > .textCtrl:first-child
{
	margin-top: -3px;
}

.ctrlUnit > dd .break
{
	margin-bottom: 0.75em;
	padding-bottom: 0.75em;
}

.ctrlUnit > dd .rule
{
	border-bottom: 1px solid rgb(250, 250, 250);
}

.ctrlUnit > dd .ddText
{
	margin-bottom: 2px;
}

/** Hints underneath checkbox / radio controls **/

.ctrlUnit > dd > * > li .hint
{
	font-size: 11px;
	color: rgb(118, 118, 118);
	margin-left: 16px;
	margin-top: 2px;
}

/** DISABLERS **/

.ctrlUnit > dd > * > li > ul,
.ctrlUnit .disablerList,
.ctrlUnit .indented
{
	margin-left: 16px;
}

.ctrlUnit > dd > * > li > ul > li:first-child
{
	margin-top: 6px;
}

.ctrlUnit > dd .disablerList > li,
.ctrlUnit > dd .checkboxColumns > li,
.ctrlUnit > dd .choiceList > li
{
	margin-top: 6px;
}

/** Other stuff... **/

.ctrlUnit > dd .helpLink
{
	font-size: 10px;
}

.ctrlUnit.textValue dt
{
	padding-top: 0px;
}

.button.spinBoxButton
{
	font-family: 'Open Sans', Helvetica, Arial, sans-serif;
	font-size: 11pt;
}

.unitPairsJustified li
{
	overflow: hidden;
}

	.unitPairsJustified li .label
	{
		float: left;
	}

	.unitPairsJustified li .value
	{
		float: right;
	}

#calroot
{
	margin-top: -1px;
	width: 198px;
	padding: 2px;
	background-color: rgb(255, 255, 255);
	font-size: 11px;
	border: 1px solid rgb(187, 187, 187);
	border-radius: 5px;
	box-shadow: 0 0 15px #666;
	z-index: 7500;
}

#calhead
{	
	padding: 2px 0;
	height: 22px;
} 

	#caltitle {
		font-size: 11pt;
		color: rgb(187, 187, 187);
		float: left;
		text-align: center;
		width: 155px;
		line-height: 20px;
	}
	
	#calnext, #calprev {
		display: block;
		width: 20px;
		height: 20px;
		font-size: 11pt;
		line-height: 20px;
		text-align: center;
		float: left;
		cursor: pointer;
	}

	#calnext {
		float: right;
	}

	#calprev.caldisabled, #calnext.caldisabled {
		visibility: hidden;	
	}

#caldays {
	height: 14px;
	border-bottom: 1px solid rgb(187, 187, 187);
}

	#caldays span {
		display: block;
		float: left;
		width: 28px;
		text-align: center;
		color: rgb(187, 187, 187);
	}

#calweeks {
	margin-top: 4px;
}

.calweek {
	clear: left;
	height: 22px;
}

	.calweek a {
		display: block;
		float: left;
		width: 27px;
		height: 20px;
		text-decoration: none;
		font-size: 11px;
		margin-left: 1px;
		text-align: center;
		line-height: 20px;
		border-radius: 3px;
	} 
	
		.calweek a:hover, .calfocus {
			background-color: #FFFFFF;
		}

a.caloff {
	color: rgb(118, 118, 118);		
}

a.caloff:hover {
	background-color: #FFFFFF;		
}

a.caldisabled {
	background-color: #efefef !important;
	color: #ccc	!important;
	cursor: default;
}

#caltoday {
	font-weight: bold;
}

#calcurrent {
	background-color: rgb(187, 187, 187);
	color: #FFFFFF;
}
ul.autoCompleteList
{
	background-color: #FFFFFF;
	
	border: 1px solid rgb(226, 226, 226);
	padding: 2px;
	
	font-size: 11px;
	
	min-width: 180px;
	_width: 180px;
	
	z-index: 1000;
}

ul.autoCompleteList li
{
	padding: 3px 3px;
	height: 24px;
	line-height: 24px;
}

ul.autoCompleteList li:hover,
ul.autoCompleteList li.selected
{
	background-color: rgb(250, 250, 250);
	border-radius: 3px;
}

ul.autoCompleteList img.autoCompleteAvatar
{
	float: left;
	margin-right: 3px;
	width: 24px;
	height: 24px;
}

ul.autoCompleteList li strong
{
	font-weight: bold;
}

/** status editor **/

.statusEditorCounter
{
	color: green;
}

.statusEditorCounter.warning
{
	color: orange;
	font-weight: bold;
}

.statusEditorCounter.error
{
	color: red;
	font-weight: bold;
}

.explain .statusHeader
{
	display: inline;
}

.explain .CurrentStatus
{
	color: rgb(44, 44, 44);
	font-style: italic;
	padding-left: 5px;
}

/* BB code-based editor styling */

.xenForm .ctrlUnit.fullWidth dd .bbCodeEditorContainer textarea
{
	margin-left: 0;
	min-height: 200px;
}

.bbCodeEditorContainer a
{
	font-size: 11px;
}

/*
 * Fix silly top padding. This may require additional tags in the padding-top selector.
 */

.xenForm .ctrlUnit > dd
{
	padding-top: 4px;
}

	.xenForm .ctrlUnit.fullWidth > dd
	{
		padding-top: 0;
	}

.xenForm .ctrlUnit > dd > input,
.xenForm .ctrlUnit > dd > select,
.xenForm .ctrlUnit > dd > textarea,
.xenForm .ctrlUnit > dd > ul,
.xenForm .ctrlUnit > dd > .verticalShift
{
	margin-top: -4px;
}

	.xenForm .ctrlUnit.fullWidth > dd > input,
	.xenForm .ctrlUnit.submitUnit > dd > input,
	.xenForm .ctrlUnit.fullWidth > dd > select,
	.xenForm .ctrlUnit.submitUnit > dd > select,
	.xenForm .ctrlUnit.fullWidth > dd > textarea,
	.xenForm .ctrlUnit.submitUnit > dd > textarea,
	.xenForm .ctrlUnit.fullWidth > dd > ul,
	.xenForm .ctrlUnit.submitUnit > dd > ul
	{
		margin-top: 0;
	}

/*
 * Multi-column checkboxes
 */

.xenForm .checkboxColumns > dd > ul,
ul.checkboxColumns
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

	.xenForm .checkboxColumns > dd > ul li,
	ul.checkboxColumns li
	{
		-webkit-column-break-inside : avoid; -moz-column-break-inside : avoid;column-break-inside: avoid;
		break-inside: avoid-column;
		margin-bottom: 4px;
		padding-left: 1px;
		display: inline-block;
		width: 100%;
	}

	.xenForm .checkboxColumns.blockLinksList > dd > ul li,
	ul.checkboxColumns.blockLinksList li
	{
		display: block;
	}

.xenForm .checkboxColumns.multiple > dd > ul
{
	-webkit-column-count : auto; -moz-column-count : auto;column-count: auto;
	-webkit-column-gap : normal; -moz-column-gap : normal;column-gap: normal;
}

.xenForm .checkboxColumns.multiple > dd
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

.xenForm .checkboxColumns.multiple > dd > ul
{
	margin-bottom: 18px;
}

#recaptcha_image
{
	box-sizing: content-box;
	max-width: 100%;
}

#recaptcha_image img
{
	max-width: 100%;
}

#helper_birthday { display: inline-block; }
#helper_birthday > li
{
	display: inline;
}
html[dir=rtl] #helper_birthday input,
html[dir=rtl] #helper_birthday select
{
	direction: rtl;
}


@media (max-width:480px)
{
	.Responsive .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .xenForm .ctrlUnit > dt label,
		.Responsive .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .xenForm .ctrlUnit > dd,
	.Responsive .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 0;
		padding-right: 0;
		overflow: hidden;
	}

	.Responsive .xenForm .checkboxColumns > dd > ul,
	.Responsive ul.checkboxColumns
	{
		-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	}

	.Responsive #ctrl_upload
	{
		max-width: 200px;
	}

	.Responsive .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}

	.Responsive .xenForm .ctrlUnit > dd > input,
	.Responsive .xenForm .ctrlUnit > dd > select,
	.Responsive .xenForm .ctrlUnit > dd > textarea,
	.Responsive .xenForm .ctrlUnit > dd > ul,
	.Responsive .xenForm .ctrlUnit > dd > .verticalShift
	{
		margin-top: 0;
	}
}

@media (max-width:610px)
{
	.Responsive .insideSidebar .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .insideSidebar .xenForm .ctrlUnit > dt label,
		.Responsive .insideSidebar .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .insideSidebar .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .xenForm .ctrlUnit {padding: 0 16px;}
	.Responsive .xenForm.formOverlay .ctrlUnit {padding: 0;}
	.Responsive .ctrlUnit > dt dfn {margin-left: 0;}

	.Responsive .insideSidebar .xenForm .ctrlUnit > dd,
	.Responsive .insideSidebar .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 0;
		overflow: hidden;
	}

	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}

	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > input,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > select,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > textarea,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > ul
	{
		margin-top: -0;
	}
}

@media (max-device-width:568px)
{
	.Responsive .textCtrl,
	.Responsive .taggingInput input,
	.Responsive .taggingInput .tag
	{
		font-size: 16px;
	}
}


/* --- public.css --- */

#header
{
	
}

/* clearfix */ #header .pageWidth .pageContent { zoom: 1; } #header .pageWidth .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	#logo
	{
		display: block;
		float: left;
		line-height: 36px;
		*line-height: 40px;
		height: 40px;
		max-width: 100%;
		vertical-align: middle;
	}

		/* IE6/7 vertical align fix */
		#logo span
		{
			*display: inline-block;
			*height: 100%;
		}

		#logo a:hover
		{
			text-decoration: none;
		}

		#logo img
		{
			vertical-align: middle;
			max-width: 100%;
		}

	#visitorInfo
	{
		float: right;
		min-width: 250px;
		_width: 250px;
		overflow: hidden; zoom: 1;
		background: rgb(240, 240, 240);
		padding: 5px;
		border-radius: 5px;
		margin: 10px 0;
		border: 1px solid rgb(43, 43, 43);
		color: rgb(43, 43, 43);
	}

		#visitorInfo .avatar
		{
			float: left;
			display: block;
		}

			#visitorInfo .avatar .img
			{
				border-color: rgb(187, 187, 187);
			}

		#visitorInfo .username
		{
			font-size: 18px;
			text-shadow: 1px 1px 10px white;
			color: rgb(43, 43, 43);
			white-space: nowrap;
			word-wrap: normal;
		}

		#alerts
		{
			zoom: 1;
		}

		#alerts #alertMessages
		{
			padding-left: 5px;
		}

		#alerts li.alertItem
		{
			font-size: 11px;
		}

			#alerts .label
			{
				color: rgb(43, 43, 43);
			}

.footer .pageContent
{
	font-size: 13px;
background-color: rgb(250, 250, 250);
padding-right: 8px;
padding-left: 8px;
margin-top: 0;
margin-bottom: 16px;
border: 1px solid rgb(226, 226, 226);
border-top-width: 0;
border-radius: 4px;
zoom: 1;
line-height: 50px;
min-height: 20px;
height: 50px;

}
	
	.footer a,
	.footer a:visited
	{
		padding-right: 8px;
padding-left: 8px;
display: block;
font-weight: 600;

	}
	
		.footer a:hover,
		.footer a:active
		{
			color: rgb(83, 83, 83);
text-decoration: none;

		}

	.footer .choosers
	{
		padding-right: 8px;
float: left;
overflow: hidden;
zoom: 1;
text-align: left;

	}
	
		.footer .choosers dt
		{
			display: none;
		}
		
		.footer .choosers dd
		{
			float: left;
			
		}
		
	.footerLinks
	{
		float: right;
zoom: 1;

	}
	
		.footerLinks li
		{
			float: left;
			
		}
		
			.footerLinks a.globalFeed
			{
				width: 14px;
				height: 14px;
				display: block;
				text-indent: -9999px;
				white-space: nowrap;
				background: url('styles/uix/xenforo/xenforo-ui-sprite.png') no-repeat -112px -16px;
				padding: 0;
				margin: 5px;
			}

.footerLegal .pageContent
{
	font-size: 11px;
	overflow: hidden; zoom: 1;
	padding: 5px 5px 15px;
	text-align: center;
}
	
	#copyright
	{
		color: rgb(102, 102, 102);
		float: left;
	}
	
	#legal
	{
		float: right;
	}
	
		#legal li
		{
			float: left;
			
			margin-left: 10px;
		}


@media (max-width:610px)
{
	.Responsive .footerLinks a.globalFeed,
	.Responsive .footerLinks a.topLink,
	.Responsive .footerLinks a.homeLink
	{
		display: none;
	}

	.Responsive .footerLegal .debugInfo
	{
		clear: both;
	}
}

@media (max-width:480px)
{
	.Responsive #copyright span
	{
		display: none;
	}
}



	.uix_breadcrumb__home__title {
		display: none;
	}


.breadBoxTop,
.breadBoxBottom
{
	padding: 0;
margin: 16px 0;
overflow: hidden;
zoom: 1;
clear: both;
box-sizing: border-box;

}

.breadBoxTop
{
}

.breadBoxTop .topCtrl
{
	margin-left: 8px;
float: right;
line-height: 40px;

}

.breadcrumb
{
	color: rgb(187, 187, 187);
background-color: #FFFFFF;
border: 1px solid rgb(226, 226, 226);
border-radius: 4px;
overflow: hidden;
zoom: 1;
max-width: 100%;
box-sizing: border-box;
height: 40px;

}

.breadcrumb.showAll
{
	height: auto;
}

.breadcrumb .boardTitle
{
	display: none;

}

.breadcrumb .crust
{
	display: block;
float: left;
position: relative;
zoom: 1;
max-width: 50%;

}

.breadcrumb .crust a.crumb
{
	cursor: pointer;
	font-size: 12px;
color: #aaa;
text-decoration: none;
background-color: #FFFFFF;
padding: 0 10px 0 18px;
margin: 0 0 -1px;
border-bottom: 1px solid rgb(226, 226, 226);
display: block;
outline: 0 none;
-moz-outline-style: 0 none;
_border-bottom: none;
font-weight: 600;

}

	.breadcrumb .crust a.crumb > span
	{
		display: block;
		text-overflow: ellipsis;
		word-wrap: normal;
		white-space: nowrap;
		overflow: hidden;
		max-width: 100%;
	}

	.breadcrumb .crust:first-child a.crumb,
	.breadcrumb .crust.firstVisibleCrumb a.crumb
	{
		padding-left: 10px;
border-top-left-radius: 4px;
border-bottom-left-radius: 4px;

	}
	
	.breadcrumb .crust:last-child a.crumb
	{
		color: rgb(70, 102, 124);

	}

.breadcrumb .crust .arrow
{
	font-size: 16px;
border: 20px solid transparent;
border-right: 1px none black;
border-left-width: 10px;
border-left-color: rgb(226, 226, 226);
-moz-border-right-colors: rgb(226, 226, 226);
display: block;
position: absolute;
right: -10px;
top: 0px;
z-index: 50;
width: 0px;
height: 0px;

}

.breadcrumb .crust .arrow span
{
	border: 20px solid transparent;
border-right: 1px none black;
border-left-width: 10px;
border-left-color: #FFFFFF;
-moz-border-right-colors: #FFFFFF;
display: block;
position: absolute;
left: -11px;
top: -20px;
z-index: 51;
white-space: nowrap;
overflow: hidden;
text-indent: 9999px;
width: 0px;
height: 0px;

}

.breadcrumb .crust:hover a.crumb
{
	color: rgb(83, 83, 83);
background-color: rgb(240, 240, 240);

}

.breadcrumb .crust:hover .arrow span
{
	border-left-color: rgb(240, 240, 240);
}

	.breadcrumb .crust .arrow
	{
		/* hide from IE6 */
		_display: none;
	}

.breadcrumb .jumpMenuTrigger
{
	font-size: 16px;
color: #aaa;
background-color: transparent;
padding-right: 10px;
padding-left: 10px;
display: inline-block;
float: right;
white-space: nowrap;
overflow: hidden;

}


@media (max-width:480px)
{
	.Responsive .breadBoxTop.withTopCtrl
	{
		display: table;
		table-layout: fixed;
		width: 100%;
	}

	.Responsive .breadBoxTop.withTopCtrl nav
	{
		display: table-header-group;
	}

	.Responsive .breadBoxTop.withTopCtrl .topCtrl
	{
		display: table-footer-group;
		margin-top: 5px;
		text-align: right;
	}
}


#navigation .pageContent
{
	height: 82px;
	position: relative;
}

#navigation .menuIcon
{
	position: relative;
	font-size:18px;
	width: 16px;
	display: inline-block;
	text-indent: -9999px;
}

#navigation .PopupOpen .menuIcon:before,
#navigation .navLink .menuIcon:before
{
	zoom: 1;
}

#navigation .menuIcon:before
{
	content: "";
	font-size: 18px;
	position: absolute;
	top: 0.9em;
	left: 0;
	width: 16px;
	height: 2px;
	border-top: 6px double currentColor;
	border-bottom: 2px solid currentColor;
}

	.navTabs
	{
		font-size: 13px;
background-color: rgb(0, 0, 0);
border-color: rgb(226, 226, 226);
border-radius: 4px;
background-clip: content-box;


		height: 40px;
	}

		

		.navTabs .navLeft {float: left;}
		.navTabs .navRight {float: right;}



			.navTabs .navTab
			{
				float: left;
				white-space: nowrap;
				word-wrap: normal;

				
			}


/* ---------------------------------------- */
/* Links Inside Tabs */

.navTabs .navLink,
.navTabs .SplitCtrl
{
	color: rgba(255, 255, 255, 0.75);
padding-right: 10px;
padding-left: 10px;
display: block;
float: left;
vertical-align: text-bottom;
text-align: center;
outline: 0 none;
text-transform: uppercase;
box-sizing: border-box;
font-weight: 600;


	

	height: 40px;
	line-height: 40px;
}

	

	.navTabs .navLink:hover
	{
		text-decoration: none;
	}

	/* ---------------------------------------- */
	/* unselected tab, popup closed */

	.navTabs .navTab.PopupClosed
	{
		position: relative;
	}

	.navTabs .navTab.PopupClosed .navLink
	{
		color: rgb(240, 240, 240);
	}

		.navTabs .navTab.PopupClosed:hover
		{
			background-color: #aaa;
		}

			.navTabs .navTab.PopupClosed .navLink:hover
			{
				color: #FFFFFF;
			}

	.navTabs .navTab.PopupClosed .arrowWidget
	{
		/* circle-arrow-down-light */
		background-position: -64px 0;
	}

	

	/* ---------------------------------------- */
	/* selected tab */

	.navTabs .navTab.selected .navLink
	{
		position: relative;
		color: rgb(255, 255, 255);
background-color: rgb(68, 68, 68);
border-color: rgb(226, 226, 226);

	}

	

	.navTabs .navTab.selected .arrowWidget
	{
		/* circle-arrow-down */
		background-position: -32px 0;
	}

		.navTabs .navTab.selected.PopupOpen .arrowWidget
		{
			/* circle-arrow-up */
			background-position: -16px 0;
		}

	/* ---------------------------------------- */
	/* unselected tab, popup open */

	.navTabs .navTab.PopupOpen .navLink
	{
	}


	/* ---------------------------------------- */
	/* selected tab, popup open (account) */

	.navTabs .navTab.selected.PopupOpen .navLink
	{
		color: #FFF;
background-color: rgb(70, 102, 124);
background-repeat: repeat-x;
background-position: top;
border-top-left-radius: 2px;
border-top-right-radius: 2px;
border-bottom-right-radius: 0;
border-bottom-left-radius: 0;

	}

/* ---------------------------------------- */
/* Second Row */

.navTabs .navTab.selected .tabLinks
{
	background-color: rgb(68, 68, 68);

	width: 100%;
	padding: 0;
	border: none;
	overflow: hidden; zoom: 1;
	position: absolute;
	left: 0px;
	top: 42px;
	height: 40px;
	background-position: 0px -40px;
	*clear:expression(style.width = document.getElementById('navigation').offsetWidth + 'px', style.clear = "none", 0);
}

	.navTabs .navTab.selected .blockLinksList
	{
		background: none;
		padding: 0;
		border: none;
		
	}

	

	.navTabs .navTab.selected .tabLinks .menuHeader
	{
		display: none;
	}

	.navTabs .navTab.selected .tabLinks li
	{
		float: left;
		padding: 2px 0;
	}

		.navTabs .navTab.selected .tabLinks a
		{
			font-size: 12px;
color: #aaa;
padding: 0 10px;
border-style: none;
display: block;
font-weight: 600;


			
		}

		.navTabs .navTab.selected .tabLinks .PopupOpen a
		{
			color: inherit;
			text-shadow: none;
		}

			.navTabs .navTab.selected .tabLinks a:hover,
			.navTabs .navTab.selected .tabLinks a:focus
			{
				color: rgb(83, 83, 83);
text-decoration: none;
background-color: transparent;
outline: 0;

			}

			.navTabs .navTab.selected .tabLinks .Popup a:hover,
			.navTabs .navTab.selected .tabLinks .Popup a:focus
			{
				color: inherit;
				background: none;
				border-color: transparent;
				border-radius: 0;
				text-shadow: none;
			}

/* ---------------------------------------- */
/* Alert Balloons */

.navTabs .navLink .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: #e74c3c;
padding: 0 2px;
border-radius: 2px;
position: absolute;
right: 2px;
top: -12px;
line-height: 16px;
min-width: 16px;
_width: 16px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
box-sizing: border-box;
height: 16px;

}

	.navTabs .navLink .itemCount .arrow
	{
		border: 3px solid transparent;
border-top-color: #e74c3c;
border-bottom: 1px none black;
position: absolute;
bottom: -3px;
right: 4px;
line-height: 0px;
text-shadow: none;
_display: none;
/* Hide from IE6 */
width: 0px;
height: 0px;

	}

.navTabs .navLink .itemCount.Zero
{
	display: none;
}

.navTabs .navLink .itemCount.ResponsiveOnly
{
	display: none !important;
}

.NoResponsive #VisitorExtraMenu_Counter,
.NoResponsive #VisitorExtraMenu_ConversationsCounter,
.NoResponsive #VisitorExtraMenu_AlertsCounter
{
	display: none !important;
}

/* ---------------------------------------- */
/* Account Popup Menu */



	.navTabs .navTab.account .navLink .accountUsername
	{
		display: block;
		max-width: 100px;
		overflow: hidden;
		text-overflow: ellipsis;
	}

#AccountMenu
{
	width: 274px;
}

#AccountMenu .menuHeader
{
	position: relative;
}

	#AccountMenu .menuHeader .avatar
	{
		float: left;
		margin-right: 10px;
	}

	#AccountMenu .menuHeader .visibilityForm
	{
		margin-top: 10px;
		color: #aaa;
	}

	#AccountMenu .menuHeader .links .fl
	{
		margin-top: 10px;
	}

	#AccountMenu .menuHeader .links .fr
	{
		position: absolute;
		bottom: 10px;
		right: 10px;
	}

#AccountMenu .menuColumns
{
	overflow: hidden; zoom: 1;
	padding: 2px;
}

	#AccountMenu .menuColumns ul
	{
		float: left;
		padding: 0;
		max-height: none;
		overflow: hidden;
	}

		#AccountMenu .menuColumns a,
		#AccountMenu .menuColumns label
		{
			width: 115px;
		}

#AccountMenu .statusPoster textarea
{
	width: 245px;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

#AccountMenu .statusPoster .submitUnit
{
	margin-top: 5px;
	text-align: right;
}

	#AccountMenu .statusPoster .submitUnit .statusEditorCounter
	{
		float: left;
		line-height: 23px;
		height: 23px;
	}

/* ---------------------------------------- */
/* Inbox, Alerts Popups */

.navPopup
{
	width: 260px;
}

.navPopup a:hover,
.navPopup .listItemText a:hover
{
	background: none;
	text-decoration: underline;
}

	.navPopup .menuHeader .InProgress
	{
		float: right;
		display: block;
		width: 20px;
		height: 20px;
	}

.navPopup .listPlaceholder
{
	max-height: 350px;
	overflow: auto;
}

	.navPopup .listPlaceholder ol.secondaryContent
	{
		padding: 0 10px;
	}

		.navPopup .listPlaceholder ol.secondaryContent.Unread
		{
			background-color: rgb(204, 241, 252);
		}

.navPopup .listItem
{
	overflow: hidden; zoom: 1;
	padding: 5px 0;
	border-bottom: 1px solid rgb(250, 250, 250);
}

.navPopup .listItem:last-child
{
	border-bottom: none;
}

.navPopup .PopupItemLinkActive:hover
{
	margin: 0 -8px;
	padding: 5px 8px;
	border-radius: 5px;
	background-color: rgb(250, 250, 250);
	cursor: pointer;
}

.navPopup .avatar
{
	float: left;
}

	.navPopup .avatar img
	{
		width: 32px;
		height: 32px;
	}

.navPopup .listItemText
{
	margin-left: 37px;
}

	.navPopup .listItemText .muted
	{
		font-size: 9px;
	}

	.navPopup .unread .listItemText .title,
	.navPopup .listItemText .subject
	{
		font-weight: bold;
	}

.navPopup .sectionFooter .floatLink
{
	float: right;
}


@media (max-width:610px)
{
	.Responsive .navTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}

	
}

@media (max-width:480px)
{
	.Responsive.hasJs .navTabs:not(.showAll) .publicTabs .navTab:not(.selected):not(.navigationHiddenTabs)
	{
		display: none;
	}
}


#searchBar
{
	position: relative;
	zoom: 1;
	z-index: 52; /* higher than breadcrumb arrows */
}

	#QuickSearchPlaceholder
	{
		position: absolute;
		right: 20px;
		top: -28px;
		display: none;
		border-radius: 5px;
		cursor: pointer;
		font-size: 11px;
		height: 16px;
		width: 16px;
		box-sizing: border-box;
		text-indent: -9999px;
		background: transparent url('styles/uix/xenforo/xenforo-ui-sprite.png') no-repeat -144px 0px;
		overflow: hidden;
	}

	#QuickSearch
	{
		display: block;

		position: absolute;
		right: 20px;
		top: -18px;

		margin: 0;

		background-color: rgb(255, 255, 255);
		border-radius: 5px;
		padding-top: 5px;
		_padding-top: 3px;
		z-index: 7500;
	}

		#QuickSearch .secondaryControls
		{
			display: none;
		}

		#QuickSearch.active
		{
			box-shadow: 5px 5px 25px rgba(0,0,0, 0.5);
			padding-bottom: 5px;
		}

	#QuickSearch .submitUnit .button
	{
		min-width: 0;
	}

	#QuickSearch input.button.primary
	{
		float: left;
		width: 110px;
	}

	#QuickSearch #commonSearches
	{
		float: right;
	}

		#QuickSearch #commonSearches .button
		{
			width: 23px;
			padding: 0;
		}

			#QuickSearch #commonSearches .arrowWidget
			{
				margin: 0;
				float: left;
				margin-left: 4px;
				margin-top: 4px;
			}

	#QuickSearch .moreOptions
	{
		display: block;
		margin: 0 24px 0 110px;
		width: auto;
	}


/** move the header to the top again **/

#headerMover
{
	zoom: 1;
}

	#headerMover #headerProxy
	{
		
		height: 122px; /* +2 borders */
	}

	#headerMover #header
	{
		width: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
	}


/** Generic page containers **/

.pageWidth
{
	padding-right: 16px;
padding-left: 16px;
margin-right: auto;
margin-left: auto;
_width: 976px;
_margin: 0 auto;
max-width: 1170px;

}

.NoResponsive body
{
	min-width: 1170px;
}

#content .pageContent
{
	background-color: rgb(255, 255, 255);
padding: 16px;
border: 1px solid rgb(226, 226, 226);
border-radius: 4px;

}

/* clearfix */ #content .pageContent { zoom: 1; } #content .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/* sidebar structural elements */

.mainContainer
{
	 float: left;
	 margin-right: -310px;
	 width: 100%;
}

	.mainContent
	{
		margin-right: 310px;
	}

	

	html .mainContainer_noSidebar .mainContent {
		margin-left: 0;
		margin-right: 0;
	}

	.mainContent.withTransition {
		-ms-transition: margin 0.4s ease-out;
		-o-transition: margin 0.4s ease-out;
		-moz-transition: margin 0.4s ease-out;
		-webkit-transition: margin 0.4s ease-out;
		transition: margin 0.4s ease-out;
	}

.sidebar
{
	float: right;
	font-size: 12px;
width: 300px;

}







/* visitor panel */

.sidebar .visitorPanel
{
	overflow: hidden; zoom: 1;
}

	.sidebar .visitorPanel h2 .muted
	{
		display: none;
	}

	.sidebar .visitorPanel .avatar
	{
		margin-right: 12px;
float: left;


		width: auto;
		height: auto;
	}

		.sidebar .visitorPanel .avatar img
		{
			width: ;
			height: ;
		}

	.sidebar .visitorPanel .username
	{
		font-weight: bold;
font-size: 11pt;
color: rgb(70, 102, 124);

	}

	.sidebar .visitorPanel .stats
	{
		margin-top: 2px;

	}

	.sidebar .visitorPanel .stats .pairsJustified
	{
		line-height: normal;
	}














/* generic sidebar blocks */

.sidebar .section .primaryContent   h3,
.sidebar .section .secondaryContent h3,
.profilePage .mast .section.infoBlock h3
{
	font-size: 13px;
color: rgb(83, 83, 83);
background-color: rgb(250, 250, 250);
padding: 8px;
margin-bottom: 8px;
border: 1px solid rgb(226, 226, 226);
border-radius: 2px;
font-weight: 600;

}

.sidebar .section .primaryContent   h3 a,
.sidebar .section .secondaryContent h3 a
{
	font-size: 13px;
color: rgb(83, 83, 83);
}

.sidebar .section .secondaryContent .footnote,
.sidebar .section .secondaryContent .minorHeading
{
	color: rgb(118, 118, 118);
margin-top: 5px;

}

	.sidebar .section .secondaryContent .minorHeading a
	{
		color: rgb(118, 118, 118);
	}












/* list of users with 32px avatars, username and user title */

.sidebar .avatarList li
{
	margin: 5px 0;
overflow: hidden;
zoom: 1;

}

	.sidebar .avatarList .avatar
	{
		margin-right: 5px;
float: left;
width: 32px;
height: 32px;


		width: auto;
		height: auto;
	}

	.sidebar .avatarList .avatar img
	{
		width: 32px;
		height: 32px;
	}

	.sidebar .avatarList .username
	{
		font-size: 11pt;
margin-top: 2px;
display: block;

	}

	.sidebar .avatarList .userTitle
	{
		color: rgb(118, 118, 118);

	}









/* list of users */

.sidebar .userList
{
}

	.sidebar .userList .username
	{
		font-size: 11px;

	}

	.sidebar .userList .username.invisible
	{
		color: rgb(187, 187, 187);

	}

	.sidebar .userList .username.followed
	{
		
	}

	.sidebar .userList .moreLink
	{
		display: block;
	}




/* people you follow online now */

.followedOnline
{
	margin-top: 3px;
margin-bottom: -5px;
overflow: hidden;
zoom: 1;

}

.followedOnline li
{
	margin-right: 5px;
margin-bottom: 5px;
float: left;

}

	.followedOnline .avatar
	{
		width: 32px;
height: 32px;


		width: auto;
		height: auto;
	}

		.followedOnline .avatar img
		{
			width: 32px;
			height: 32px;
		}






/* call to action */

#SignupButton
{
	display: inline-block;
line-height: 42px;
cursor: pointer;
height: 42px;

}

	#SignupButton .inner
	{
		font-size: 13px;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
color: #FFF;
background-color: rgb(102, 102, 102);
padding: 0 16px;
border-radius: 4px;
display: block;
text-align: center;
font-weight: 600;

	}

	#SignupButton:hover .inner
	{
		background-color: rgb(68, 68, 68);

	}

	#SignupButton:active
	{
		background-color: rgb(43, 43, 43);

	}


	
	@media (max-width:850px)
	{
	
		.Responsive .mainContainer
		{
			 float: none;
			 margin-right: 0;
			 width: auto;
		}

		.Responsive .mainContent
		{
			margin-right: 0;
		}

		.Responsive .sidebar
		{
			float: none;
			margin: 0 auto;
			width: auto;
		}

		.Responsive .mainPanelWrapper .sidebar .visitorPanel
		{
			display: none;
		}
	
	}
	

	



/** Text used in message bodies **/

.messageText
{
	font-size: 11pt;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
line-height: 1.4;

}

	.messageText img,
	.messageText iframe,
	.messageText object,
	.messageText embed
	{
		max-width: 100%;
	}

/** Link groups and pagenav container **/

.pageNavLinkGroup
{
	display: table;
	*zoom: 1;
	table-layout: fixed;
	box-sizing: border-box;

	font-size: 12px;
margin: 8px 0;
line-height: 26px;

}

opera:-o-prefocus, .pageNavLinkGroup
{
	display: block;
	overflow: hidden;
}

	.pageNavLinkGroup:after
	{
		content: ". .";
		display: block;
		word-spacing: 99in;
		overflow: hidden;
		height: 0;
		font-size: 0.13em;
		line-height: 0;
	}

	.pageNavLinkGroup .linkGroup
	{
		float: right;
	}

.linkGroup
{
}

	.linkGroup a
	{
		padding: 3px 0;

	}

		.linkGroup a.inline
		{
			padding: 0;
		}

	.linkGroup a,
	.linkGroup .Popup,
	.linkGroup .element
	{
		margin-left: 10px;
		display: block;
		float: left;
		
	}

		.linkGroup .Popup a
		{
			margin-left: -2px;
			margin-right: -5px;
			*margin-left: 10px;
			padding: 3px 5px;
		}

	.linkGroup .element
	{
		padding: 3px 0;
	}

/** Call to action buttons **/

a.callToAction
{
	display: inline-block;
line-height: 42px;
outline: 0 none;
height: 42px;


}

	a.callToAction span
	{
		font-size: 13px;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
color: #FFF;
background-color: rgb(70, 102, 124);
padding: 0 16px;
border-radius: 4px;
display: block;
text-align: center;
font-weight: 600;

	}

	a.callToAction:hover
	{
		text-decoration: none;
	}

		a.callToAction:hover span
		{
			background-color: rgb(68, 68, 68);

		}

		a.callToAction:active
		{
			/*position: relative;
			top: 2px;*/
		}

		a.callToAction:active span
		{
			background-color: rgb(43, 43, 43);

		}

/*********/

.avatarHeap
{
	overflow: hidden; zoom: 1;
}

	.avatarHeap ol
	{
		margin-right: -4px;
		margin-top: -4px;
	}

		.avatarHeap li
		{
			float: left;
			margin-right: 4px;
			margin-top: 4px;
		}

		.avatarHeap li .avatar
		{
			display: block;
		}

/*********/

.fbWidgetBlock .fb_iframe_widget,
.fbWidgetBlock .fb_iframe_widget > span,
.fbWidgetBlock .fb_iframe_widget iframe
{
	width: 100% !important;
}

/*********/

.tagBlock
{
	margin: 10px 0;
	font-size: 11px;
}

.tagList,
.tagList li
{
	display: inline;
}


.tagList .tag
{
	font-size: 11px;
color: rgb(83, 83, 83);
background-color: #FFFFFF;
padding-right: 4px;
padding-left: 6px;
margin-left: 9px;
border: 1px solid rgb(226, 226, 226);
border-left-style: none;
border-top-left-radius: 0;
border-top-right-radius: 4px;
border-bottom-right-radius: 4px;
border-bottom-left-radius: 0;
position: relative;
display: inline-block;
line-height: 20px;
height: 20px;

}

	.tagList .tag:hover
	{
		text-decoration: none;
background-color: rgb(250, 250, 250);

	}

	.tagList .tag .arrow
	{
		position: absolute;
		display: block;
		/* height: 2px; */
		height: 0;
		width: 0;
		left: -9px;
		left: -9px;
		top: -1px;
		top: -1px;
		border-style: solid;
		border-width: 8px 9px 8px 0;
		border-width: 11px 9px 11px 0;
		border-color: transparent;
		border-right-color: rgb(240, 240, 240);
		border-right-color: rgb(226, 226, 226);
	}

		.tagList .tag .arrow:after
		{
			content: '';
			position: absolute;
			display: block;
			/* height: 2px; */
			height: 0;
			width: 0;
			left: 1px;
			left: -7px;
			top: -7px;
			top: -10px;
			border-style: solid;
			border-width: 7px 8px 7px 0;
			border-width: 10px 8px 10px;
			border-color: transparent;
			border-right-color: #FFFFFF;
			border-right-color: #FFFFFF;
		}

		.tagList .tag:hover .arrow:after
		{
			border-right-color: rgb(250, 250, 250);
			border-right-color: rgb(250, 250, 250);
		}

	.tagList .tag:after
	{
		content: '';
		position: absolute;
		left: -2px;
		top: 6px;
		top: 7.5px;
		display: block;
		height: 3px;
		width: 3px;
		border-radius: 50%;
		border: 1px solid rgb(226, 226, 226);
		background: rgb(255, 255, 255);
	}

/* User name classes */


.username .banned
{
	text-decoration: line-through;
}

.prefix
{
	background-color: transparent;
padding: 0px 6px;
margin: -1px 0;
border: 1px solid transparent;
border-radius: 2px;
display: inline-block;

}

a.prefixLink:hover
{
	text-decoration: none;
}

a.prefixLink:hover .prefix
{
	color: #aaa;
text-decoration: none;
background-color: #FFFFFF;
padding: 0 6px;
border: 1px solid rgb(240, 240, 240);

}

.prefix a { color: inherit; }

.prefix.prefixPrimary    { color: #aaa; background-color: rgb(250, 250, 250); border-color: rgb(250, 250, 250); }
.prefix.prefixSecondary  { color: rgb(70, 102, 124); background-color: rgb(248,251,253); border-color: rgb(248,251,253); }

.prefix.prefixRed        { color: white; background-color: red; border-color: #F88; }
.prefix.prefixGreen      { color: white; background-color: green; border-color: green; }
.prefix.prefixOlive      { color: black; background-color: olive; border-color: olive; }
.prefix.prefixLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.prefix.prefixBlue       { color: white; background-color: blue; border-color: #88F; }
.prefix.prefixRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.prefix.prefixSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.prefix.prefixGray       { color: black; background-color: gray; border-color: #AAA; }
.prefix.prefixSilver     { color: black; background-color: silver; border-color: silver; }
.prefix.prefixYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.prefix.prefixOrange     { color: black; background-color: orange; border-color: #FFC520; }

.discussionListItem .prefix,
.searchResult .prefix
{
	font-size: 70%;
margin: 0;
line-height: 18px;

	
	font-weight: normal;
}

h1 .prefix
{
	font-size: 70%;
margin: 0;
line-height: 18px;

	
	line-height: normal;
}

.breadcrumb span.prefix,
.heading span.prefix
{
	font-style: italic;
font-weight: bold;
padding: .3em;
margin: 0;
border: 0 none black;
border-radius: 0;
display: inline;

	color: inherit;
}

.userBanner
{
	font-size: 11px;
	background: transparent url('styles/uix/xenforo/gradients/form-button-white-25px.png') repeat-x top;
	padding: 1px 5px;
	border: 1px solid transparent;
	border-radius: 3px;
	box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
	text-align: center;
}

	.userBanner.wrapped
	{
		border-top-right-radius: 0;
		border-top-left-radius: 0;
		position: relative;
	}
		
		.userBanner.wrapped span
		{
			position: absolute;
			top: -4px;
			width: 5px;
			height: 4px;
			background-color: inherit;
		}
		
		.userBanner.wrapped span.before
		{
			border-top-left-radius: 3px;
			left: -1px;
		}
		
		.userBanner.wrapped span.after
		{
			border-top-right-radius: 3px;
			right: -1px;
		}
		
.userBanner.bannerHidden { background: none; box-shadow: none; border: none; }
.userBanner.bannerHidden.wrapped { margin-left: 0; margin-right: 0; }
.userBanner.bannerHidden.wrapped span { display: none; }

.userBanner.bannerStaff { color: #aaa; background-color: rgb(250, 250, 250); border-color: rgb(240, 240, 240); }
.userBanner.bannerStaff.wrapped span { background-color: rgb(240, 240, 240); }

.userBanner.bannerPrimary { color: #aaa; background-color: rgb(250, 250, 250); border-color: rgb(240, 240, 240); }
.userBanner.bannerPrimary.wrapped span { background-color: rgb(240, 240, 240); }

.userBanner.bannerSecondary { color: rgb(70, 102, 124); background-color: rgb(248,251,253); border-color: rgb(248,251,253); }
.userBanner.bannerSecondary.wrapped span { background-color: rgb(248,251,253); }

.userBanner.bannerRed        { color: white; background-color: red; border-color: #F88; }
.userBanner.bannerRed.wrapped span { background-color: #F88; }

.userBanner.bannerGreen      { color: white; background-color: green; border-color: green; }
.userBanner.bannerGreen.wrapped span { background-color: green; }

.userBanner.bannerOlive      { color: black; background-color: olive; border-color: olive; }
.userBanner.bannerOlive.wrapped span { background-color: olive; }

.userBanner.bannerLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.userBanner.bannerLightGreen.wrapped span { background-color: lightgreen; }

.userBanner.bannerBlue       { color: white; background-color: blue; border-color: #88F; }
.userBanner.bannerBlue.wrapped span { background-color: #88F; }

.userBanner.bannerRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.userBanner.bannerRoyalBlue.wrapped span { background-color: #81A9E1; }

.userBanner.bannerSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.userBanner.bannerSkyBlue.wrapped span { background-color: skyblue; }

.userBanner.bannerGray       { color: black; background-color: gray; border-color: #AAA; }
.userBanner.bannerGray.wrapped span { background-color: #AAA; }

.userBanner.bannerSilver     { color: black; background-color: silver; border-color: silver; }
.userBanner.bannerSilver.wrapped span { background-color: silver; }

.userBanner.bannerYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.userBanner.bannerYellow.wrapped span { background-color: #E0E000; }

.userBanner.bannerOrange     { color: black; background-color: orange; border-color: #FFC520; }
.userBanner.bannerOrange.wrapped span { background-color: #FFC520; }

.bottomFixer
{
	position: fixed;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 800;
	pointer-events: none;
}

.bottomFixer > *
{
	pointer-events: auto;
}


@media (max-width:850px)
{
	.Responsive .pageWidth
	{
		padding-right: 8px;
padding-left: 8px;

	}

	.Responsive #content .pageContent
	{
		padding-left: 8px;
		padding-right: 8px;
	}
}

@media (max-width:610px)
{
	.Responsive .pageWidth
	{
		padding-right: 8px;
padding-left: 8px;

	}

	.Responsive .forum_view #pageDescription,
	.Responsive .thread_view #pageDescription
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .pageWidth
	{
		padding-right: 0;
padding-left: 0;

	}

	.Responsive .pageNavLinkGroup .PageNav,
	.Responsive .pageNavLinkGroup .linkGroup
	{
		clear: right;
	}
}


/* CSS returned from cache. */