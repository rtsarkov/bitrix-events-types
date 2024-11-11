<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockPropertyAddHandler
{
	public static function OnAfterIBlockPropertyAddHandle(array &$arFields);
}
