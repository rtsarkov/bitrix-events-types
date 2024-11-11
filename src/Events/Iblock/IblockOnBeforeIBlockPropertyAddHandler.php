<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockPropertyAddHandler
{
	public static function OnBeforeIBlockPropertyAddHandle(array &$arParams);
}
