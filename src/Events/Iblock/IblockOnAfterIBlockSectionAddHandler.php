<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockSectionAddHandler
{
	public static function OnAfterIBlockSectionAddHandle(array &$arFields);
}
