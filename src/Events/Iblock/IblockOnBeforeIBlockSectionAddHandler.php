<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockSectionAddHandler
{
	public static function OnBeforeIBlockSectionAddHandle(array &$arParams);
}
