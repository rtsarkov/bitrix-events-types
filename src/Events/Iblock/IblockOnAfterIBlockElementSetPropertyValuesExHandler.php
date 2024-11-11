<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockElementSetPropertyValuesExHandler
{
	public static function OnAfterIBlockElementSetPropertyValuesExHandle(
		int $elementId,
		int $iblockId,
		array $propertyValues,
		array $flags,
	);
}
