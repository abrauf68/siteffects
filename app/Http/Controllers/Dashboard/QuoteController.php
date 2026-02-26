<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view quote');
        try {
            $quotes = Quote::all();
            return view('dashboard.quotes.index', compact('quotes'));
        } catch (\Throwable $th) {
            Log::error('quotes Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create quote');
        try {
            return view('dashboard.quotes.create');
        } catch (\Throwable $th) {
            Log::error('quotes Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create quote');
        $validator = Validator::make($request->all(), [
            'quote' => 'required|string|max:255',
            'author' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            Log::error('Quote Validation Failed', [
                'errors' => $validator->errors()->toArray(),
            ]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $quote = new Quote();
            $quote->quote = $request->quote;
            $quote->author = $request->author;
            $quote->save();

            DB::commit();
            return redirect()->route('dashboard.quotes.index')->with('success', 'Quote Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('quote Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('update quote');
        try {
            $quote = Quote::findOrFail($id);
            return view('dashboard.quotes.edit', compact('quote'));
        } catch (\Throwable $th) {
            Log::error('quote Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update quote');
        $validator = Validator::make($request->all(), [
            'quote' => 'required|string|max:255',
            'author' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $quote = Quote::findOrFail($id);
            $quote->quote = $request->quote;
            $quote->author = $request->author;
            $quote->save();

            return redirect()->route('dashboard.quotes.index')->with('success', 'Quote Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('quote Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete quote');
        try {
            $quote = Quote::findOrFail($id);
            $quote->delete();
            return redirect()->back()->with('success', 'Quote Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Quote Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update quote');
        try {
            $quote = Quote::findOrFail($id);
            $message = $quote->is_active == 'active' ? 'Quote Deactivated Successfully' : 'Quote Activated Successfully';
            if ($quote->is_active == 'active') {
                $quote->is_active = 'inactive';
                $quote->save();
            } else {
                $quote->is_active = 'active';
                $quote->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Quote Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
