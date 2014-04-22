<? include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/lib/galleria.php"); ?><!DOCTYPE html>
<html> 
<head>
 	
 	<?$APPLICATION->ShowHead();?>
 
	<meta http-equiv="content-type" content="text/html;charset=cp-1251"/>

	<title><?$APPLICATION->ShowTitle();?></title>

	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/ui-bootstrap/jquery-ui-1.9.2.custom.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/slider-themes/default/default.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/menu-light.css">
 	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css">
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>

	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/easing.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/hoverintent.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/leftnav.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/corner.js"></script>

    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/engine.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/menu-light.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/init.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/jquery-ui-1.9.2.custom.min.js"></script>

</head>
<body>
<?$APPLICATION->ShowPanel();?>

<div id="wrapper">

	<div id="main-header">
		<div id="main-header-workspace">
	    	<a href="/index.php" alt="Ia aeaaio?"><div id="logo"></div></a>
			<div id="eng-link"><a href="http://www.studyinorenburg.com/"><img class="eng" src="/_images/eng.png" src-hl="/_images/eng-active.png" border="0" alt="" /></a></div>
			<div id="contacts"></div>
			<!-- <div class="ribbon-n1"></div> -->
		</div>
	</div>


	<div class="light-menu">
		<? include $_SERVER["DOCUMENT_ROOT"]."/_inc/top-menu.inc.html" ?>
	</div>

	<div id="workspace-wrapper">

		<div id="workspace">

			<div id="right-gradient"></div>
			<div id="left-gradient"></div>

			<div id="left-panel">

		        <div class="collapse"></div>

				<div class="left-menu">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "pagemenu", array(
						"ROOT_MENU_TYPE" => "left", "MENU_CACHE_TYPE" => "N", "MENU_CACHE_TIME" => "3600", "MENU_CACHE_USE_GROUPS" => "Y", "MENU_CACHE_GET_VARS" => array(),
					"MAX_LEVEL" => "1", "CHILD_MENU_TYPE" => "left", "USE_EXT" => "N", "DELAY" => "N", "ALLOW_MULTI_SELECT" => "N" ), false, array("ACTIVE_COMPONENT" => "Y"));?>
				</div>

				<div class="left-menu">	
					<?$APPLICATION->IncludeComponent("bitrix:menu", "documents", array(
					"ROOT_MENU_TYPE" => "files", "MENU_CACHE_TYPE" => "N", "MENU_CACHE_TIME" => "3600", "MENU_CACHE_USE_GROUPS" => "Y", "MENU_CACHE_GET_VARS" => array(),
					"MAX_LEVEL" => "1", "CHILD_MENU_TYPE" => "files", "USE_EXT" => "N", "DELAY" => "N", "ALLOW_MULTI_SELECT" => "N"), false, array( "ACTIVE_COMPONENT" => "Y"));?>
				</div>

			</div>

			<div id="content">
		
				<div class="breadcrump">
				<div class="breadcrump-icon"></div>
				<div class="breadcrump-text">
						<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "template3", Array("START_FROM" => "0","PATH" => "","SITE_ID" => "-",),false);?>
				</div>
			</div>



