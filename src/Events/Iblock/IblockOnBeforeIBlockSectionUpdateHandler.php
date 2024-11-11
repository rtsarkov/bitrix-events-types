<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockSectionUpdateHandler
{
	public static function OnBeforeIBlockSectionUpdateHandle(array &$arParams);
}
