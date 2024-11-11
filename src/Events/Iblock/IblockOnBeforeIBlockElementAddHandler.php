<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockElementAddHandler
{
	public static function OnBeforeIBlockElementAddHandle(array &$arParams);
}
