<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AdController extends Controller
{
    public function index(): View
    {
        $ads = Ad::latest()->paginate(10);
        return view('ads.index', compact('ads'));
    }

    public function create(): View
    {
        return view('ads.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'position' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'android_ad_id' => 'required|string|max:255',
            'ios_ad_id' => 'required|string|max:255',
            'android_status' => 'boolean',
            'ios_status' => 'boolean',
        ]);

        Ad::create($validated);

        return redirect()->route('ads.index')
            ->with('success', 'Ad created successfully.');
    }

    public function show(Ad $ad): View
    {
        return view('ads.show', compact('ad'));
    }

    public function edit(Ad $ad): View
    {
        return view('ads.edit', compact('ad'));
    }

    public function update(Request $request, Ad $ad): RedirectResponse
    {
        $validated = $request->validate([
            'position' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'android_ad_id' => 'required|string|max:255',
            'ios_ad_id' => 'required|string|max:255',
            'android_status' => 'boolean',
            'ios_status' => 'boolean',
        ]);

        $ad->update($validated);

        return redirect()->route('ads.index')
            ->with('success', 'Ad updated successfully.');
    }

    public function destroy(Ad $ad): RedirectResponse
    {
        $ad->delete();

        return redirect()->route('ads.index')
            ->with('success', 'Ad deleted successfully.');
    }
}
