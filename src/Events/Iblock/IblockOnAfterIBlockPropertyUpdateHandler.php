<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockPropertyUpdateHandler
{
	public static function OnAfterIBlockPropertyUpdateHandle(array &$arFields);
}
