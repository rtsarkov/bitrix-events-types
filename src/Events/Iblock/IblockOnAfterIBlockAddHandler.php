<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockAddHandler
{
	public static function OnAfterIBlockAddHandle(array &$arFields);
}
