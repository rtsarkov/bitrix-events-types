<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Sale;

interface SaleOnBeforePersonTypeDeleteHandler
{
	public static function OnBeforePersonTypeDeleteHandle(int $id);
}
