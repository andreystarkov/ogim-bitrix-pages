<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<table cellpadding="0" cellspacing="0" style="margin:0px; border-left: 1px solid #D2E6FB">
<?foreach($arResult as $arItem):?>

	<?if ($arItem["PERMISSION"] > "D"):?>
         <?if($arItem["SELECTED"]){?>
		<tr><td style="border-top: 1px solid silver;padding-top: 4px; margin-bottom: 1px solid silver"><a href="<?$arItem["LINK"];?>"><img border="0" class="img" enlarge="<?$arItem["TEXT"];?>-" src="<?$arItem["TEXT"]?>-"></a><br></td></tr>
<?} else {?>
<tr><td style="border-top: 1px solid silver;padding-top: 4px; margin-bottom: 1px solid silver"><a href="<?$arItem["LINK"];?>">
<img border="0" class="img" enlarge="<?$arItem["TEXT"];?>-" src="<?$arItem["TEXT"]?>"></a><br></td></tr>

<? } ?>


	<?endif?>

<?endforeach?>

	</table>
<?endif?>