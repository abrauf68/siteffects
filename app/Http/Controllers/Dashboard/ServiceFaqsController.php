<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceFaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ServiceFaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $this->authorize('update service');
        try {
            $service = Service::findOrFail($id);
            $serviceFaqs = ServiceFaq::where('service_id', $service->id)->get();
            return view('dashboard.services.faqs.index', compact('service', 'serviceFaqs'));
        } catch (\Throwable $th) {
            Log::error('Service FAQs Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $this->authorize('update service');
        try {
            $service = Service::findOrFail($id);
            return view('dashboard.services.faqs.create', compact('service'));
        } catch (\Throwable $th) {
            Log::error('Service FAQs create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $this->authorize('update service');
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        if ($validator->fails()) {
            Log::error('Service FAQs Validation Failed', [
                'errors' => $validator->errors()->toArray(),
            ]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $service = Service::findOrFail($id);
            
            $serviceFaq = new ServiceFaq();
            $serviceFaq->service_id = $service->id;
            $serviceFaq->question = $request->question;
            $serviceFaq->answer = $request->answer;
            $serviceFaq->save();

            DB::commit();
            return redirect()->route('dashboard.service-faqs.index', $service->id)->with('success', 'Service FAQ Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Service FAQ Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update service');
        try {
            $serviceFaq = ServiceFaq::findOrFail($id);
            return view('dashboard.services.faqs.edit', compact('serviceFaq'));
        } catch (\Throwable $th) {
            Log::error('Service FAQs Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update service');
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        if ($validator->fails()) {
            Log::error('Service FAQs Validation Failed', [
                'errors' => $validator->errors()->toArray(),
            ]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $serviceFaq = ServiceFaq::findOrFail($id);
            $serviceFaq->question = $request->question;
            $serviceFaq->answer = $request->answer;
            $serviceFaq->save();
            DB::commit();
            return redirect()->route('dashboard.service-faqs.index', $serviceFaq->service_id)->with('success', 'Service FAQ Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Service FAQ Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('update service');
        try {
            $serviceFaq = ServiceFaq::findOrFail($id);
            $serviceFaq->delete();
            return redirect()->back()->with('success', 'Service FAQ Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Service FAQ Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateServiceStatus(string $id)
    {
        $this->authorize('update service');
        try {
            $serviceFaq = ServiceFaq::findOrFail($id);
            $message = $serviceFaq->is_active == 'active' ? 'Service FAQ Deactivated Successfully' : 'Service FAQ Activated Successfully';
            if ($serviceFaq->is_active == 'active') {
                $serviceFaq->is_active = 'inactive';
                $serviceFaq->save();
            } else {
                $serviceFaq->is_active = 'active';
                $serviceFaq->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Service FAQ Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
