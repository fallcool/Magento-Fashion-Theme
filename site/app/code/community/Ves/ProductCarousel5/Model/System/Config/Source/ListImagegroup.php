<?php


class Ves_ProductCarousel5_Model_System_Config_Source_ListImagegroup
{
    public function toOptionArray()
    {
		
		$_model  = Mage::getModel('ves_productcarousel5/banner');
		
	
		$collection = $_model->getCollection();
		
		$groups =  array();
		$last = '';				
		foreach($collection as $item){
			if( $last != $item->getLabel() ){
				$option = array('value'=>$item->getLabel(), 'label'=>$item->getLabel());
				$groups[] = $option;
				$last = $item->getLabel();
			}
		} 
	    return $groups;
    }    
}
