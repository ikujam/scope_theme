<?php
/**
 * Elgg Messages CSS
 *
 * @package ElggMessages
 */
?>
/* <style> */
.messages-container {
	min-height: 200px;
}
.message.unread a {
	color: #D40005;
}
.messages-buttonbank {
	text-align: right;
}
.messages-buttonbank input {
	margin-left: 10px;
}

/*** message metadata ***/
.messages-owner {
	float: left;
	width: 20%;
	margin-right: 2%;
}
.messages-subject {
	float: left;
	width: 55%;
	margin-right: 2%;
}
.messages-timestamp {
	float: left;
  font-size: 70%;
  margin-right: 2%;
  width: 14%;
}
.messages-delete {
	float: right;
  margin: -15px 0;
  width: 5%;
}
/*** topbar icon ***/
.messages-new {
	color: #FFF;
	background-color: #FF0000;
	border-radius-top-left: 10px;
	box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	position: absolute;
	text-align: center;
	line-height: 14px;
	top: 4px;
	left: 26px;
	min-width: 16px;
	height: 16px;
	font-size: 10px;
	font-weight: bold;
}
