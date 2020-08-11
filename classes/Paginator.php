<?php

/**
 * Class Paginator
 *
 * Data for selecting a page of records
 */
class Paginator
{
    /**
     * Number of records to return
     * @var integer
     */
    public $limit;

    /**
     * Number of records to skip before the page
     * @var integer
     */
    public $offset;

    /**
     * Previous page number
     * @var integer
     */
    public $previous;

    /**
     * Next page number
     * @var integer
     */
    public $next;

    /**
     * Paginator constructor.
     * @param integer $page Page number
     * @param integer $records_per_page Number of records per page
     *
     * @param integer $total_records Number of all records
     */
    public function __construct($page, $records_per_page, $total_records)
    {
        $this->limit = $records_per_page;

        $page = filter_var($page, FILTER_VALIDATE_INT, [
            'options' => [
                'default' => 1,
                'min_range' => 1
            ]
        ]);

        $total_records = ceil($total_records / $records_per_page);

        $this->previous = $page > 1 ? $page - 1 : null;
        $this->next = $page < $total_records ? $page + 1 : null;

        $this->offset = $records_per_page * ($page - 1);
    }
}
