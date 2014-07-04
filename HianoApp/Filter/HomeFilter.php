<?php

/**
 * 
 * @author kasonyang <i@kasonyang.com>
 */

namespace HianoApp\Filter;

class HomeFilter extends \Hiano\Filter\Filter{
    public function execute($filter_chain) {
        $filter_chain->execute();
    }
}