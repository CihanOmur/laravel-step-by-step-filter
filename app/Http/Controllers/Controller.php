<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redis;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index(Request $request)
    {
        
        $params = Arr::where($request->all(), function($item){
            return $item != null;
        });
        
        $data = Products::query()
        ->when($request->has('brand') && !is_null($request->brand), function($query) use($request){
            $query->where('brand',$request->brand);
        })
        ->when($request->has('serial') && !is_null($request->serial),  function($query) use($request){
            $query->where('serial',$request->serial);
        })
        ->when($request->has('modal') && !is_null($request->modal), function($query) use($request){
            $query->where('modal',$request->modal);
        })
        ->when($request->has('engine') && !is_null($request->engine), function($query) use($request){
            $query->where('engine',$request->engine);
        })
        ->when($request->has('year') && !is_null($request->year), function($query) use($request){
            $query->where('year',$request->year);
        })
        ->when($request->has('packet') && !is_null($request->packet), function($query) use($request){
            $query->where('packet',$request->packet);
        })
        ->when($request->has('category') && !is_null($request->category), function($query) use($request){
            $query->where('category',$request->category);
        })
        ->when($request->has('product_name') && !is_null($request->product_name), function($query) use($request){
            $query->where('product_name',$request->product_name);
        })
        ->when($request->has('search') && !is_null($request->search), function($query) use($request){
            $query->where('title', 'LIKE', '%'.$request->search.'%');
        })
        ->simplePaginate(20)->appends($params);

        $brand = Products::query()
        ->get()->pluck('brand')->unique();

        $serial = Products::query()
        ->when($request->has('brand') && !is_null($request->brand), function($query) use($request){
            $query->where('brand',str_replace('+',' ',$request->brand));
        })
        ->when($request->has('modal') && !is_null($request->modal), function($query) use($request){
            $query->where('modal',str_replace('+',' ',$request->modal));
        })
        ->when($request->has('engine') && !is_null($request->engine), function($query) use($request){
            $query->where('engine',str_replace('+',' ',str_replace('-','.',$request->engine)));
        })
        ->when($request->has('year') && !is_null($request->year), function($query) use($request){
            $query->where('year',str_replace('+',' ',$request->year));
        })
        ->when($request->has('packet') && !is_null($request->packet), function($query) use($request){
            $query->where('packet',str_replace('+',' ',$request->packet));
        })
        ->when($request->has('category') && !is_null($request->category), function($query) use($request){
            $query->where('category',str_replace('+',' ',$request->category));
        })
        ->when($request->has('product_name') && !is_null($request->product_name), function($query) use($request){
            $query->where('product_name',str_replace('+',' ',$request->product_name));
        })
        ->get()->pluck('serial')->unique();

        $modal = Products::query()
        ->when($request->has('brand') && !is_null($request->brand), function($query) use($request){
            $query->where('brand',str_replace('+',' ',$request->brand));
        })
        ->when($request->has('serial') && !is_null($request->serial),  function($query) use($request){
            $query->where('serial',str_replace('+',' ',$request->serial));
        })
        ->when($request->has('engine') && !is_null($request->engine), function($query) use($request){
            $query->where('engine',str_replace('+',' ',str_replace('-','.',$request->engine)));
        })
        ->when($request->has('year') && !is_null($request->year), function($query) use($request){
            $query->where('year',str_replace('+',' ',$request->year));
        })
        ->when($request->has('packet') && !is_null($request->packet), function($query) use($request){
            $query->where('packet',str_replace('+',' ',$request->packet));
        })
        ->when($request->has('category') && !is_null($request->category), function($query) use($request){
            $query->where('category',str_replace('+',' ',$request->category));
        })
        ->when($request->has('product_name') && !is_null($request->product_name), function($query) use($request){
            $query->where('product_name',str_replace('+',' ',$request->product_name));
        })
        ->get()->pluck('modal')->unique();

        $engine = Products::query()
        ->when($request->has('brand') && !is_null($request->brand), function($query) use($request){
            $query->where('brand',str_replace('+',' ',$request->brand));
        })
        ->when($request->has('serial') && !is_null($request->serial),  function($query) use($request){
            $query->where('serial',str_replace('+',' ',$request->serial));
        })
        ->when($request->has('modal') && !is_null($request->modal), function($query) use($request){
            $query->where('modal',str_replace('+',' ',$request->modal));
        })
        ->when($request->has('year') && !is_null($request->year), function($query) use($request){
            $query->where('year',str_replace('+',' ',$request->year));
        })
        ->when($request->has('packet') && !is_null($request->packet), function($query) use($request){
            $query->where('packet',str_replace('+',' ',$request->packet));
        })
        ->when($request->has('category') && !is_null($request->category), function($query) use($request){
            $query->where('category',str_replace('+',' ',$request->category));
        })
        ->when($request->has('product_name') && !is_null($request->product_name), function($query) use($request){
            $query->where('product_name',str_replace('+',' ',$request->product_name));
        })
        ->get()->pluck('engine')->unique();

        $year = Products::query()
        ->when($request->has('brand') && !is_null($request->brand), function($query) use($request){
            $query->where('brand',str_replace('+',' ',$request->brand));
        })
        ->when($request->has('serial') && !is_null($request->serial),  function($query) use($request){
            $query->where('serial',str_replace('+',' ',$request->serial));
        })
        ->when($request->has('modal') && !is_null($request->modal), function($query) use($request){
            $query->where('modal',str_replace('+',' ',$request->modal));
        })
        ->when($request->has('engine') && !is_null($request->engine), function($query) use($request){
            $query->where('engine',str_replace('+',' ',str_replace('-','.',$request->engine)));
        })
        ->when($request->has('packet') && !is_null($request->packet), function($query) use($request){
            $query->where('packet',str_replace('+',' ',$request->packet));
        })
        ->when($request->has('category') && !is_null($request->category), function($query) use($request){
            $query->where('category',str_replace('+',' ',$request->category));
        })
        ->when($request->has('product_name') && !is_null($request->product_name), function($query) use($request){
            $query->where('product_name',str_replace('+',' ',$request->product_name));
        })
        ->get()->pluck('year')->unique();

        $packet = Products::query()
        ->when($request->has('brand') && !is_null($request->brand), function($query) use($request){
            $query->where('brand',str_replace('+',' ',$request->brand));
        })
        ->when($request->has('serial') && !is_null($request->serial),  function($query) use($request){
            $query->where('serial',str_replace('+',' ',$request->serial));
        })
        ->when($request->has('modal') && !is_null($request->modal), function($query) use($request){
            $query->where('modal',str_replace('+',' ',$request->modal));
        })
        ->when($request->has('engine') && !is_null($request->engine), function($query) use($request){
            $query->where('engine',str_replace('+',' ',str_replace('-','.',$request->engine)));
        })
        ->when($request->has('year') && !is_null($request->year), function($query) use($request){
            $query->where('year',str_replace('+',' ',$request->year));
        })
        ->when($request->has('category') && !is_null($request->category), function($query) use($request){
            $query->where('category',str_replace('+',' ',$request->category));
        })
        ->when($request->has('product_name') && !is_null($request->product_name), function($query) use($request){
            $query->where('product_name',str_replace('+',' ',$request->product_name));
        })
        ->get()->pluck('packet')->unique();

        $category = Products::query()
        ->when($request->has('brand') && !is_null($request->brand), function($query) use($request){
            $query->where('brand',str_replace('+',' ',$request->brand));
        })
        ->when($request->has('serial') && !is_null($request->serial),  function($query) use($request){
            $query->where('serial',str_replace('+',' ',$request->serial));
        })
        ->when($request->has('modal') && !is_null($request->modal), function($query) use($request){
            $query->where('modal',str_replace('+',' ',$request->modal));
        })
        ->when($request->has('engine') && !is_null($request->engine), function($query) use($request){
            $query->where('engine',str_replace('+',' ',str_replace('-','.',$request->engine)));
        })
        ->when($request->has('year') && !is_null($request->year), function($query) use($request){
            $query->where('year',str_replace('+',' ',$request->year));
        })
        ->when($request->has('packet') && !is_null($request->packet), function($query) use($request){
            $query->where('packet',str_replace('+',' ',$request->packet));
        })
        ->when($request->has('product_name') && !is_null($request->product_name), function($query) use($request){
            $query->where('product_name',str_replace('+',' ',$request->product_name));
        })
        ->get()->pluck('category')->unique();

        $product_name = Products::query()
        ->when($request->has('brand') && !is_null($request->brand), function($query) use($request){
            $query->where('brand',str_replace('+',' ',$request->brand));
        })
        ->when($request->has('serial') && !is_null($request->serial),  function($query) use($request){
            $query->where('serial',str_replace('+',' ',$request->serial));
        })
        ->when($request->has('modal') && !is_null($request->modal), function($query) use($request){
            $query->where('modal',str_replace('+',' ',$request->modal));
        })
        ->when($request->has('engine') && !is_null($request->engine), function($query) use($request){
            $query->where('engine',str_replace('+',' ',str_replace('-','.',$request->engine)));
        })
        ->when($request->has('year') && !is_null($request->year), function($query) use($request){
            $query->where('year',str_replace('+',' ',$request->year));
        })
        ->when($request->has('packet') && !is_null($request->packet), function($query) use($request){
            $query->where('packet',str_replace('+',' ',$request->packet));
        })
        ->when($request->has('category') && !is_null($request->category), function($query) use($request){
            $query->where('category',str_replace('+',' ',$request->category));
        })
        ->get()->pluck('product_name')->unique();
        return view('home',[
            'data' => $data, 
            'brand' => $brand, 
            'serial' => $serial, 
            'modal' => $modal, 
            'engine' => $engine, 
            'year' => $year, 
            'packet' => $packet, 
            'category' => $category, 
            'product_name' => $product_name, 
            'params' => $params,
        ]);
    }


}
