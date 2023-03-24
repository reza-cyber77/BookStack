<?php

namespace BookStack\Actions;

class ActivityType
{
    public const PAGE_CREATE = 'page_create';
    public const PAGE_UPDATE = 'page_update';
    public const PAGE_DELETE = 'page_delete';
    public const PAGE_RESTORE = 'page_restore';
    public const PAGE_MOVE = 'page_move';

    public const CHAPTER_CREATE = 'chapter_create';
    public const CHAPTER_UPDATE = 'chapter_update';
    public const CHAPTER_DELETE = 'chapter_delete';
    public const CHAPTER_MOVE = 'chapter_move';

    public const BOOK_CREATE = 'book_create';
    public const BOOK_CREATE_FROM_CHAPTER = 'book_create_from_chapter';
    public const BOOK_UPDATE = 'book_update';
    public const BOOK_DELETE = 'book_delete';
    public const BOOK_SORT = 'book_sort';

    public const BOOKSHELF_CREATE = 'bookshelf_create';
    public const BOOKSHELF_CREATE_FROM_BOOK = 'bookshelf_create_from_book';
    public const BOOKSHELF_UPDATE = 'bookshelf_update';
    public const BOOKSHELF_DELETE = 'bookshelf_delete';

    public const COMMENTED_ON = 'commented_on';
    public const PERMISSIONS_UPDATE = 'permissions_update';

    public const REVISION_RESTORE = 'revision_restore';
    public const REVISION_DELETE = 'revision_delete';

    public const SETTINGS_UPDATE = 'settings_update';
    public const MAINTENANCE_ACTION_RUN = 'maintenance_action_run';

    public const RECYCLE_BIN_EMPTY = 'recycle_bin_empty';
    public const RECYCLE_BIN_RESTORE = 'recycle_bin_restore';
    public const RECYCLE_BIN_DESTROY = 'recycle_bin_destroy';

    public const USER_CREATE = 'user_create';
    public const USER_UPDATE = 'user_update';
    public const USER_DELETE = 'user_delete';

    public const API_TOKEN_CREATE = 'api_token_create';
    public const API_TOKEN_UPDATE = 'api_token_update';
    public const API_TOKEN_DELETE = 'api_token_delete';

    public const ROLE_CREATE = 'role_create';
    public const ROLE_UPDATE = 'role_update';
    public const ROLE_DELETE = 'role_delete';

    public const AUTH_PASSWORD_RESET = 'auth_password_reset_request';
    public const AUTH_PASSWORD_RESET_UPDATE = 'auth_password_reset_update';
    public const AUTH_LOGIN = 'auth_login';
    public const AUTH_REGISTER = 'auth_register';

    public const MFA_SETUP_METHOD = 'mfa_setup_method';
    public const MFA_REMOVE_METHOD = 'mfa_remove_method';

    public const WEBHOOK_CREATE = 'webhook_create';
    public const WEBHOOK_UPDATE = 'webhook_update';
    public const WEBHOOK_DELETE = 'webhook_delete';

    /**
     * Get all the possible values.
     */
    public static function all(): array
    {
        return (new \ReflectionClass(static::class))->getConstants();
    }
}
