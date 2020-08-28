<?php

namespace App\Components;

class TreeviewCategory {
    private $data;
    private $treeview = '';
    public function __construct($data){
        $this->data = $data;
    }
    public function hasSubCategory($id){
        foreach ($this->data as $value) {
            if($value['parent_id']==$id) return true;
        }
        return false;
    }
    public function getTreeviewCategory($currentId, $id = 0){
        foreach ($this->data as $value) {
            if($value['parent_id']==$id){
                if($this->hasSubCategory($value['id']) == true ){
                    $this->treeview .=
                    '<li>
                        <div class="cate-item treeview" data-id="'. $value['id'] .'"><i class="cate-icon fas fa-angle-double-right mr-1"></i>'. $value['name'] .'</div>
                        <ul class="treeview-menu">';
                    $this->getTreeviewCategory($currentId, $value['id']);
                    $this->treeview .= '</ul></li>';
                }else{
                    $this->treeview .= '<li class="cate-item" data-id="'. $value['id'] .'">'. $value['name'] .'</li>';
                    $this->getTreeviewCategory($currentId, $value['id']);
                }
            }
        }
        return $this->treeview;
    }
}
