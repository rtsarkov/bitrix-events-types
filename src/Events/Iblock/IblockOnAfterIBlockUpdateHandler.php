<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockUpdateHandler
{
	public static function OnAfterIBlockUpdateHandle(array &$arFields);
}
