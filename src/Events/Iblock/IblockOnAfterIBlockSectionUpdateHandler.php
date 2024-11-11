<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnAfterIBlockSectionUpdateHandler
{
	public static function OnAfterIBlockSectionUpdateHandle(array &$arFields);
}
