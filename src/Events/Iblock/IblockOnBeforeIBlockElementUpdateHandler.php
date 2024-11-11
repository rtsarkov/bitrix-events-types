<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockElementUpdateHandler
{
	public static function OnBeforeIBlockElementUpdateHandle(array &$arParams);
}
