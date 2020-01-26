<?php

declare(strict_types=1);

namespace VGirol\JsonApiConstant;

/**
 * All the member's names
 */
abstract class Members
{
    public const ATTRIBUTES = 'attributes';
    public const DATA = 'data';
    public const ERROR_CODE = 'code';
    public const ERROR_DETAILS = 'details';
    public const ERROR_PARAMETER = 'parameter';
    public const ERROR_POINTER = 'pointer';
    public const ERROR_SOURCE = 'source';
    public const ERROR_STATUS = 'status';
    public const ERROR_TITLE = 'title';
    public const ERRORS = 'errors';
    public const ID = 'id';
    public const INCLUDED = 'included';
    public const JSONAPI = 'jsonapi';
    public const JSONAPI_VERSION = 'version';
    public const LINK_ABOUT = 'about';
    public const LINK_HREF = 'href';
    public const LINK_PAGINATION_FIRST = 'first';
    public const LINK_PAGINATION_LAST = 'last';
    public const LINK_PAGINATION_NEXT = 'next';
    public const LINK_PAGINATION_PREV = 'prev';
    public const LINK_RELATED = 'related';
    public const LINK_SELF = 'self';
    public const LINKS = 'links';
    public const META = 'meta';
    public const META_PAGINATION = 'pagination';
    public const RELATIONSHIPS = 'relationships';
    public const TYPE = 'type';
}
