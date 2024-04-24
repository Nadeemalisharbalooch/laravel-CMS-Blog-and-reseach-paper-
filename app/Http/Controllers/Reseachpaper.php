<?php

namespace App\Http\Controllers;
use App\Models\Reseach;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class Reseachpaper extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Reseach\create');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         // Define validation rules
         $rules = [
             'file' => 'required|file|mimes:pdf|max:2048',
             'title' => 'required|string|max:255',
             'abstract' => 'required|string',
             'status' => 'required|in:0,1',
             'author' => 'required|string|max:255',
         ]; 
     
         // Validate the request
         $validator = Validator::make($request->all(), $rules);
     
         // If validation fails, redirect back with error messages
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }
     
         // Continue processing if validation passes
         try {
             if ($file = $request->file('file')) {
                 // Generate a unique filename
                 $filename = rand(100, 1000) . time() . $file->getClientOriginalName();
     
                 // Specify the destination directory
                 $filePath = public_path('/storage/auth/posts/pdf');
     
                 // Combine the directory path and filename to get the full path including the filename
                 $fileWithPath = $filePath . '/' . $filename;
     
                 // Move the uploaded file to the specified directory with the generated filename
                 $file->move($filePath, $filename);
     
                 // Store other form data
                 $title = $request->input('title');
                 $abstract = $request->input('abstract');
                 $status = $request->input('status');
                 $author = $request->input('author');
     
                 // Save the data to the database
                 $researchPaper = new Reseach();
                 $researchPaper->user_id = 1;
                 $researchPaper->title = $title;
                 $researchPaper->abstract = $abstract; // This seems incorrect, should it be $abstract?
                 $researchPaper->is_Publish = $status;
                 $researchPaper->author_name = $author;
                 $researchPaper->Pdf_file = $filename;
                 $researchPaper->save();
     
                 // Redirect back with success message
                 return redirect()->back()->with('success', 'Research paper submitted successfully.');
             } else {
                 // Handle case where file is missing
                 return redirect()->back()->with('success', 'Please upload a PDF file.');
             }
         } catch (\Exception $e) {
             // Handle any exceptions that occur during file upload or database operations
             return redirect()->back()->with('success', 'An error occurred while processing your request.');
         }
     }

    /**
     * Display the specified resource.
     */

     public function allshow()
     {
         $Reseach=Reseach::all();
         return view('Reseach\show')->with('Reseach',$Reseach);

     }
    public function show(string $id)
    {
        $Reseach=reseach::find($id);
        return view('Reseach\view')->with('Reseach',$Reseach);

    }
    public function siteallshow()
    {
        $Reseach=Reseach::all();
        return view('site\Reseach')->with('Reseach',$Reseach);

    }
    /**
     * Show the form fo
     * r editing the specified resource.
     */
    public function edit(string $id)
    {
        $Reseach=reseach::find($id);
        return view('Reseach\edit')->with('Reseach',$Reseach);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    
        // Define validation rules
        $rules = [
            'title' => 'required|string|max:255',
            'abstract' => 'required|string',
            'status' => 'required|in:0,1',
            'author' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf|max:2048',
        ];
    
        // Validate the request
        $validator = Validator::make($request->all(), $rules);
    
        // If validation fails, redirect back with error messages
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Find the research paper to update
        $researchPaper = Reseach::find($id);
    
        // If the research paper doesn't exist, return 404
        if (!$researchPaper) {
            abort(404);
        }
    
        // Continue processing if validation passes
        try {
            // Handle file upload if a new file is provided
            if ($request->hasFile('file')) {
                // Delete the previous file if it exists
                if ($researchPaper->Pdf_file) {
                    $filePath = public_path('storage/auth/posts/pdf/');
                    $previousFilePath = $filePath . $researchPaper->Pdf_file;
                    if (file_exists($previousFilePath)) {
                        unlink($previousFilePath);
                    }
                }
    
                // Generate a unique filename
                $filename = rand(100, 1000) . time() . '.' . $request->file('file')->getClientOriginalExtension();
    
                // Specify the destination directory
                $filePath = public_path('storage/auth/posts/pdf/');
    
                // Move the uploaded file to the specified directory with the generated filename
                $request->file('file')->move($filePath, $filename);
    
                // Update the filename in the database
                $researchPaper->Pdf_file = $filename;
            }
    
            // Update other form data
            $researchPaper->title = $request->input('title');
            $researchPaper->abstract = $request->input('abstract');
            $researchPaper->is_Publish = $request->input('status');
            $researchPaper->author_name = $request->input('author');
    
            // Save the updated data to the database
            $researchPaper->save();
    
            // Redirect back with success message
            return redirect()->back()->with('success', 'Research paper updated successfully.');
        } catch (\Exception $e) {
            // Handle any exceptions that occur during file upload or database operations
            return redirect()->back()->with('success', 'An error occurred while processing your request.');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Reseach = Reseach::find($id);
        if (!$Reseach) {
            abort(404);
        }
        // Delete the associated file
        $filePath = public_path('storage/auth/posts/pdf/' . $Reseach->Pdf_file);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        // Delete the post
        $Reseach->delete();
        return redirect()->back()->with('success', 'Reseach deleted successfully.');
    }
}    