<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnIBlockElementSetPropertyValuesHandler
{
	public static function OnIBlockElementSetPropertyValuesHandle(
		int $elementId,
		int $iblockId,
		array $propertyValues,
		string $propertyCode,
		array $ar_prop,
		array $arDBProps,
	);
}
