/* <style> /**/

/* ***************************************
	Modules
*************************************** */
.elgg-module {
	overflow: hidden;
	margin-bottom: 20px;
}

/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #24ae24;

	margin-bottom: 5px;
	padding-bottom: 5px;
}

/* Info */
.elgg-module-info > .elgg-head {
	background-color: #242424;
	padding: 10px;
	margin-bottom: 10px;
	height: auto;
	overflow: hidden;
}
.elgg-module-info > .elgg-head * {
	color: #13ae13;
}

/* Popup */
.elgg-module-popup {
	background-color: #118329;
	border: 1px solid #42AE42;
	z-index: 9999;
	margin-bottom: 0;
	padding: 5px;
	border-radius: 3px;
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
	color: #0054A7;
}

/* Dropdown */
.elgg-module-dropdown {
	border: 1px solid #24ae24;
	border-radius: 0 0 3px 3px;
	display:none;
	width: 240px;
	padding: 20px;
	margin-right: 0;
	z-index: 100;
	position: absolute;
	right: 0;
	top: 100%;
	box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.25);
}

/* Featured */
.elgg-module-featured {
	border: 1px solid #69ea69;
	border-radius: 3px;
}
.elgg-module-featured > .elgg-head {
	padding: 10px;
	height: auto;
	overflow: hidden;
	box-shadow: inset 0 0 1px #FFFFFF;
}
.elgg-module-featured > .elgg-head * {
	color: 24ae24;
}
.elgg-module-featured > .elgg-body {
	padding: 10px;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 15px;
	position: absolute;
	right: 20px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	border: 2px solid #ccc;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 2px 10px;
	width: 200px;
	padding: 4px;
	background-color: #aeaeae;
	border: 2px solid #B0B0B0;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: 42ea42;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #aeeaae;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #966996;
}

.elgg-module-widget {
	border-top: 1px solid #42AE42;
	border-left: 1px solid #42AE42;
	border-bottom: 0px;
	border-right: 0px;
	margin: 0 10px 15px;
	position: relative;
}
.elgg-module-widget:hover {
	box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}
.elgg-module-widget > .elgg-head {
	background-color: #242424;
	padding: 10px 0;
	height: auto;
	overflow: hidden;
	box-shadow: inset 0 0 1px #FFFFFF;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 0 45px 0 30px;
	color: 24ae24;
}
.elgg-module-widget.elgg-state-draggable .elgg-widget-handle {
	cursor: move;
}
a.elgg-widget-collapse-button {
	color: #C5C5C5;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #9D9D9D;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
.elgg-module-widget > .elgg-body {
	width: 100%;
	overflow: hidden;
	border-top: 1px solid #42AE42;
}
.elgg-widget-edit {
	display: none;
	width: auto;
	padding: 10px;
	border-bottom: 1px solid #42AE42;
}
.elgg-widget-content {
	padding: 10px;
}
.elgg-widget-placeholder {
	border: 1px dashed #DEDEDE;
	margin-bottom: 15px;
}
