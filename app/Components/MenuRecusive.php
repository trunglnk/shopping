<?php

namespace App\Components;


use App\Models\Menu;

class MenuRecusive{
    private $html;
    public function __construct()
    {
        $this->html = '';
    }

    public function menuRecusiveAdd($parentId = 0, $subMark = ''){
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $dataItem){
            // in ra menu 1
            $this->html .= '<option value ="'. $dataItem->id .'">' . $subMark . $dataItem->name . '</option>';

            $this->menuRecusiveAdd($dataItem->id , $subMark . '--');//gán menu 1 cho dataItem
        }
        return $this->html;
    }

    public function menuRecusiveEdit($parentIdMenuEdit, $parentId = 0, $subMark = ''){
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $dataItem){

            if ($parentIdMenuEdit == $dataItem->id){
                $this->html .= '<option selected value ="'. $dataItem->id .'">' . $subMark . $dataItem->name . '</option>';
            }else{
                $this->html .= '<option value ="'. $dataItem->id .'">' . $subMark . $dataItem->name . '</option>';
            }

            $this->menuRecusiveEdit($parentIdMenuEdit, $dataItem->id , $subMark . '--');//gán menu 1 cho dataItem
        }
        return $this->html;
    }
}

//B1: lấy tất cả menu có parent_id = 0; --Menu 1, 2 , 3

//foreach
