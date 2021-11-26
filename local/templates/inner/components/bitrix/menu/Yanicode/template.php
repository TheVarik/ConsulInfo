<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @var CBitrixComponentTemplate $this
 * @var CBitrixMenuComponent $component
 * @var array $arParams
 * @var array $arResult
 */

if (!empty($arResult))
{
	?>

		<?php
		foreach ($arResult as $item)
		{
			if ($arParams['MAX_LEVEL'] === 1 && $item['DEPTH_LEVEL'] > 1)
			{
				continue;
			}

			?>
				<a href="<?=$item['LINK']?>" class="nav-list__item"><?=$item['TEXT']?></a>
			<?php
		}
		?>

	<?php
}