<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyDetail;
use Illuminate\Support\Facades\Storage;
use Validator;



class CompanyDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $company = CompanyDetail::select('*');
        $company = $company->paginate(10);
        return view('company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $company=null)
    {
        //
        $data = $request->all();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048', // 2MB Max
            'website_link' => 'required',
        ]);

        if($request->hasfile('logo'))
            {
                $extension = $request->file('logo')->getClientOriginalName();
                $logo = time(). '.' .$extension;
                $request->file('logo')->storeAs('/logo/company/', $logo);
                $path = "/logo/company/".$logo;
                $data['logo'] = $path;
            }

        // Create company record
        // dd($data);
       $company = CompanyDetail::create($data);
    //    return $company;

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($company)
    {
        //
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $company = CompanyDetail::find($id);
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048', // 2MB Max
            'website_link' => 'required',
        ]);

        if ($request->logo != NULL) {
            $validated = Validator::make($request->all(),[
                'logo' => 'mimes:jpeg,png,jpg|max:2048',
               ],
               [
                    'logo.mimes' => 'Logo mestilah dimuatnaik dalam format jpeg,png,jpg',
                    'logo.max' => 'Saiz Logo mestilah dimuatnaik sehingga max 2MB'     
                ]
            );
             
            //Check the validation
            if ($validated->fails())
            {        
                return redirect()->back()->withErrors($validated)->withInput();
            }
            if($request->hasfile('logo'))
            {
     
                $extension = $request->file('logo')->getClientOriginalName();
                $logo = time(). '.' .$extension;
                $request->file('logo')->storeAs('/logo/company/', $logo);
                $path = "/logo/company/".$logo;
                $data['logo'] = $path;
            }
        }

        $company =CompanyDetail::updateorCreate([
            'id' => $id
        ],$data);

        return redirect()->route('companies.index')->with('success', 'Company Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $company = CompanyDetail::findOrFail($id);

        if ($company->logo) {
            Storage::delete('public/logo/company' . $company->logo);
        }

        // Delete the company record
        $company->delete();

        // Redirect back with a success message
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
