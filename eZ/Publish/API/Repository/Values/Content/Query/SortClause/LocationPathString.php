<?php
namespace eZ\Publish\API\Repository\Values\Content\Query\SortClause;

use eZ\Publish\API\Repository\Values\Content\Query,
    eZ\Publish\API\Repository\Values\Content\Query\SortClause;

/**
 * Sets sort direction on the location path string for a content query
 */
class LocationPathString extends SortClause
{
    /**
     * Constructs a new LocationPathString SortClause
     * @param string $sortDirection
     */
    public function __construct( $sortDirection = Query::SORT_ASC )
    {
        parent::__construct( 'location_path_string', $sortDirection );
    }
}
