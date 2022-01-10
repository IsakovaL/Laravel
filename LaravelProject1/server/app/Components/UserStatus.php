<?php
namespace App\Components\User;

class UserStatus 
{
    const 
    ACTIVE = 'active',
    INACTIVE = 'inactive',
    SUSPENDED = 'suspended',
    CLOSED = 'closed';
};

public static function getList()
{
    return [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'Inactive',
        self::SUSPENDED => 'Suspended',
        self::CLOSED => 'Closed'
    ]
};