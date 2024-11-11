<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockElementAddHandler
{
	public static function OnAfterIBlockElementAddHandle(array &$arFields);
}
