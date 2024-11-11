<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Sale;

interface SaleOnPersonTypeDeleteHandler
{
	public static function OnPersonTypeDeleteHandle(int $id);
}
