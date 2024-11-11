<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnIBlockElementAddHandler
{
	public static function OnIBlockElementAddHandle(array $arFields);
}
