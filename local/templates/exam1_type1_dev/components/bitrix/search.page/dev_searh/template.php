<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>

<section id="blog-posts" class="blog-posts section">
	<div class="container">

		<div class="row gy-4">
			<div class="search-widget widget-item">
				<form action="" method="get">
					<input type="hidden" name="tags" value="<?php echo $arResult['REQUEST']['TAGS']?>" />
					<input type="hidden" name="how" value="<?php echo $arResult['REQUEST']['HOW'] == 'd' ? 'd' : 'r'?>" />
					<input type="text" type="text" name="q" value="<?=$arResult['REQUEST']['QUERY']?>">
					<button type="submit" title="Search" value="<?php echo GetMessage('CT_BSP_GO')?>"><i class="bi bi-search"></i></button>
				</form>
			</div>
		</div>

		<div class="row gy-4">

			<? foreach($arResult['SEARCH'] as $arItem) {?>


			<div class="col-lg-4">
				<article>
					<div class="card-body">
						<h5><a href="<?php echo $arItem['URL']?>"><?php echo $arItem['TITLE_FORMATED']?></a></h5>
						<h6 class="card-subtitle mb-2 text-muted"><?php echo $arItem['DATE_CHANGE']?></h6>
						<p class="card-text"><?php echo $arItem['BODY_FORMATED']?></p>
					</div>
				</article>
			</div><!-- End list item -->

			<? } ?>

			<!-- BOTTOM_PAGER HERE  -->

		</div>
	</div>
</section>