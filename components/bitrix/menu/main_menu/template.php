<script type="text/javascript">

/* суперплавное меню */
			$(document).ready(function() {
                var opacity = 0.8;
                var pre;
				$('.img').css('opacity', 0.9).hover(function() {
                        pre = $(this).attr("src");
                         $(this).fadeTo("90","1")
						$(this).attr("src", $(this).attr("enlarge"));

					}, function() {
                         $(this).fadeTo("200","0.9")
						$(this).attr("src", pre);
					}
				);
			});

		</script>


<style type="text/css">
.img {
   opacity: 0.8;
}

</style>


<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<table cellpadding="0" cellspacing="0" style="margin-top: 20px; margin:0px;">
<?foreach($arResult as $arItem):?>
<tr>
	<?if ($arItem["PERMISSION"] > "D"):?>
         <?if($arItem["SELECTED"]){?>
		<td style="padding: 5px; border-bottom: 1px dotted silver;"><b><a border="0"  style="color:#0F5EAC;" class="nav" href="<?=$arItem["LINK"]?>"><nobr>

<img border="0" src="/ico/<?=$arItem["TEXT"]?>.gif"></a></b></td>

<?} else {?>
<td style="padding: 5px; border-bottom: 1px dotted silver;"><b><a  border="0" class="nav" href="<?=$arItem["LINK"]?>"><nobr>

<img style="opacity: 1;" 
class="img" border="0" enlarge="/ico/<?=$arItem["TEXT"]?>.gif" src="/ico/<?=$arItem["TEXT"]?>-.gif"></a></b></td></tr>
<? } ?>


	<?endif?>

<?endforeach?>

	</table>
<?endif?>