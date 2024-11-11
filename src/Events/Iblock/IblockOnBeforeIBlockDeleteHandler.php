<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockDeleteHandler
{
	public static function OnBeforeIBlockDeleteHandle(int $id);
}
