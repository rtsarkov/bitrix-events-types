<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockSectionDeleteHandler
{
	public static function OnBeforeIBlockSectionDeleteHandle(int $id);
}
