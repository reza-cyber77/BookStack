<?php

namespace BookStack\Auth\Permissions;

class PermissionStatus
{
    public const IMPLICIT_DENY = 0;
    public const IMPLICIT_ALLOW = 1;
    public const EXPLICIT_DENY = 2;
    public const EXPLICIT_ALLOW = 3;
}
