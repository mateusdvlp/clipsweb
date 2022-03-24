<?php

namespace Modules\Backoffice\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Base\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        return view('backoffice::category.index');
    }

    public function create()
    {
        return view('backoffice::category.create');
    }

    public function store(CategoryRequest $request)
    {

    }

    public function show($id)
    {
        return view('backoffice::show');
    }


    public function edit($id)
    {
        return view('backoffice::edit');
    }


    public function update(CategoryRequest $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
