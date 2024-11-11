<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockElementSetPropertyValuesHandler
{
	public static function OnAfterIBlockElementSetPropertyValuesHandle(
		int $elementId,
		int $iblockId,
		array $propertyValues,
		string $propertyCode,
	);
}
