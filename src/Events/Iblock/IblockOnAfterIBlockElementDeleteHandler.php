<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockElementDeleteHandler
{
	public static function OnAfterIBlockElementDeleteHandle(array &$arFields);
}
