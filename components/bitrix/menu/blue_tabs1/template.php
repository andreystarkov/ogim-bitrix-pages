<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<style>
.graylink {
color: silver;
padding-left: 10px; font-family: Verdana; 
font-size: 11px;
}

.graylink:hover{
color:gray;
}
</style>

<div style="position: relative; width:243px; min-height:394px; background:url(/_images/pagemenu-bg.png) repeat-x; background-position: top top;">
<?if (!empty($arResult)):?>
<div style="position: absolute; width:243px; height:45px; background:url(/_images/pagemenu-cap.png); top: 0px;"></div>

<?foreach($arResult as $arItem):?>

	<?if ($arItem["PERMISSION"] > "D"):?>
<div style="width: 243px; height: auto;">
<div style="height: 100%; width: 23px; background:url(/_images/pagemenu-item.png); background-position: center center; background-repeat: no-repeat;"></div>
<div style="height: 100%; width: 243px; padding-left: 5px;"><img src="/_images/pagemenu-item.png"> <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div></div><br><br>
	<?endif?>

<?endforeach?>

	
</div>
<div class="menu-clear-left"></div>
<?endif?>