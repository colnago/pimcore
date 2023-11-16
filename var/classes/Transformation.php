<?php

class Transformation {

    public static function transform($inputData) {
        //I don’t understand how to integrate transformation into this framework
        //the essence of the function is simple, we look for an entry in a given array, if there is no entry, then we display the default entry
        $list = Pimcore\Model\DataObject\SelectOptions\RunwaysTypes::list();
        if (in_array($inputData, $list)) {
            return $list[$inputData];
        } else {
            return 'U';
        }
    }
}
