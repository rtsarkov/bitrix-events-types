<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Types;

class UserEventTypes
{
	public const MODULE = 'user';
	public const ON_BEFORE_USER_REGISTER = 'OnBeforeUserRegister';
	public const ON_AFTER_USER_REGISTER = 'OnAfterUserRegister';
}
