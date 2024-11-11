<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnIBlockElementSetPropertyValuesExHandler
{
	public static function OnIBlockElementSetPropertyValuesExHandle(
		int $elementId,
		int $iblockId,
		array $propertyValues,
		array $propertyList,
		array $arDBProps,
	);
}
