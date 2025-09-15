<?php

class DatatableResult
{
    public $draw = 0;
    public $recordsTotal = 0;
    public $recordsFiltered = 0;
    public $data = [];
    public $error = "";

    /**
     * Datatable result
     */
    public function Datatable($draw = 0, $recordsTotal = 0, $recordsFiltered = 0, $data = [], $error = ""): \DatatableResult
    {
        $result = new DatatableResult;
        $result->draw = $draw;
        $result->recordsTotal = $recordsTotal;
        $result->recordsFiltered = $recordsFiltered;
        $result->data = $data;
        $result->error = $error;

        return $result;
    }
}
