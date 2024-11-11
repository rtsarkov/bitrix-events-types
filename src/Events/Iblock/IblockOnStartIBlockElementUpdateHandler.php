<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnStartIBlockElementUpdateHandler
{
	public static function OnStartIBlockElementUpdateHandle(array &$arParams);
}
