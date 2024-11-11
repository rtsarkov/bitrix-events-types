<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockPropertyUpdateHandler
{
	public static function OnBeforeIBlockPropertyUpdateHandle(array &$arParams);
}
