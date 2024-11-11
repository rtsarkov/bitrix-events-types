<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockUpdateHandler
{
	public static function OnBeforeIBlockUpdateHandle(array &$arParams);
}
