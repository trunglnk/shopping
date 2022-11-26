<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {

        $this->category = $category;
    }

    public function create(){
        $htmlOption = $this->getCategory($parentId = '');
        return view('admin.category.add', compact('htmlOption'));
    }

    public function index(){
        $categories = $this->category->latest()->paginate(5); //latest lấy ra những cái có tg tạo mới nhất. pagine 5 bản ghi 1 trang
        return view('admin.category.index', compact('categories'));
    }

    public function store(Request $request){
        $this->category->create([
            'name'=> $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str::slug($request->name)
        ]);
        return redirect()->route('categories.index');
    }

    //dung chung
    public function getCategory($parentId){
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->catgoryRecisuve($parentId);
        return $htmlOption;
    }

    public function edit($id){
        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->parent_id);

        return view('admin.category.edit', compact('category', 'htmlOption'));
    }

    public function update($id, Request $request){
        $this->category->find($id)->update([
            'name'=> $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str::slug($request->name)
        ]);
        return redirect()->route('categories.index');
    }

    public function delete($id){
        $this->category->find($id)->delete();
        return redirect()->route('categories.index');
    }
}
