<?php

namespace App\Components;

class GetCategory
{
    private $data;
    private $treeview = '';
    private $sub_category = array();
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function hasChildrenCategory($id)
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                return true;
            }
        }
        return false;
    }
    public function getTreeviewCategory($id = 0)
    {
        foreach ($this->data as $value) {
            if ($value->parent_id == $id) {
                if ($this->hasChildrenCategory($value->id) == true) {
                    $this->treeview .=
                    '<li>
                        <div class="cate-item treeview" data-id="' . $value->id
                    . '" data-id2="' . $value->product_type_id
                    . '"><i class="cate-icon fas fa-angle-double-right mr-1"></i>' . $value->name . '</div>
                        <ul class="treeview-menu">';
                    $this->getTreeviewCategory($value->id);
                    $this->treeview .= '</ul></li>';
                } else {
                    $this->treeview .= '<li class="cate-item" data-id="' . $value->id . '"
                    data-id2="' . $value->product_type_id . '">' . $value->name . '</li>';
                    $this->getTreeviewCategory($value->id);
                }
            }
        }
        return $this->treeview;
    }

    public function getDescendantsCategory()
    {
        return $this->data->reject(function ($category) {
            return $this->hasChildrenCategory($category->id) === true;
        });
    }

    public function getDescendantsOfCategory($id)
    {
        if ($this->hasChildrenCategory($id) == false) {
            return array($id);
        } else {
            foreach ($this->data as $value) {
                if ($value->parent_id == $id) {
                    if ($this->hasChildrenCategory($value->id) == true) {
                        $this->getDescendantsOfCategory($value->id);
                    } else {
                        array_push($this->sub_category, $value->id);
                    }
                }
            }
            return $this->sub_category;
        }
    }

    public function getChildrenCategory($id)
    {
        if ($this->hasChildrenCategory($id) == true) {
            return $this->data->where('parent_id', $id);
        } else {
            $category = $this->data->find($id);
            return $this->data->where('parent_id', $category->parent_id);
        }
    }
}
