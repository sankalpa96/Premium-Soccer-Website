<?php
/**
 * Created by PhpStorm.
 * User: quyentv
 * Date: 3/17/2015
 * Time: 4:57 PM
 */


class DB {

    private $data = [];

    /**
     * Constructor.
     *
     * Sets up array data sample
     *
     * @access public
     *
     * @return
     */
    public function DB(){
        $cost_colection = [23,45,23,76,34,87,34,87,34,76,23,65,23,45,23,76,34,87,34,87,34,76,34,87,34,76,34,87,34,76,23,65,23,45,23,76,34,87,34,87,34,76,34,87,34,76];
        for ($i = 0; $i < 46; $i++) {
            $item = [];
            $item['id'] = $i+1;
            $item['name'] = 'product '. $item['id'];
            $item['cost'] = $cost_colection[$i];
            $item['image'] = 'images/product'.($i+1).'.jpg';

            $this->data [] = $item;
        };
    }

    /**
     * Function.
     *
     * Get all array data sample
     *
     * @access public
     *
     * @return
     */
    public function getAllProducts(){
        return $this->data;
    }

    /**
     * Function.
     *
     * Get all array data sample
     *
     * @access public
     *
     * @param int $id ID of product.
     * @return array
     */
    public function getProduct( $id ) {
        foreach ($this->data as $key=>$item){
            if ($id == $item['id']){
                return $this->data[$key];
            }
        }
        return null;
    }

    /**
     * Function.
     *
     * Get all array data sample by id
     *
     * @access public
     *
     * @param array $id list id of product.
     * @return array
     */
    public function getListProductByListIds( $id = [] ) {
        $list = [];
        foreach ($this->data as $key=>$item){
            if ( in_array($item['id'], $id) ){
                $list[] = $this->data[$key];
            }
        }
        return $list;
    }
}


function dropdown_select( $name, $default=null,$id= '') {

    $output = "<select rel='$id' class='$name' name='" . $name.$id . "' id='" .$name.$id . "'>\n";
    for ($i=1 ; $i<=10; $i++) {
        if ($i != (int)$default) {
            $output .= "\t<option value=\"" . $i . '">' . $i . "</option>\n";
        } else {
            $output .= "\t<option selected='selected' value=\"" . $i . '">' . $i . "</option>\n";
        }
    }
    $output .= "</select>\n";

    return $output;
}