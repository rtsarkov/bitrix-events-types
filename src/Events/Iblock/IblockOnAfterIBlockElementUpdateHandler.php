<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockElementUpdateHandler
{
	public static function OnAfterIBlockElementUpdateHandle(array &$arFields);
}
