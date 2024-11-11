<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockAddHandler
{
	public static function OnBeforeIBlockAddHandle(array &$arParams);
}
