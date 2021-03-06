<?php

namespace Vindi;

class BillItem extends Resource
{
    /**
     * The endpoint that will hit the API.
     *
     * @return string
     */
    public function endpoint()
    {
        return 'bill_items';
    }
}
