<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProviderController extends Controller
{
    public function index(): View
    {
        $providers = Provider::latest()->paginate(10);
        return view('providers.index', compact('providers'));
    }

    public function create(): View
    {
        return view('providers.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'api_key' => 'required|string',
            'api_url' => 'required|url',
            'queue_url' => 'nullable|url',
            'api_key_location' => 'required|string',
            'safety_checker' => 'boolean',
            'safety_checker_type' => 'nullable|string',
            'tomesd' => 'boolean',
            'karras_sigmas' => 'boolean',
            'multi_lingual' => 'boolean',
            'panorama' => 'boolean',
            'self_attention' => 'boolean',
            'upscale' => 'nullable|integer',
            'clip_skip' => 'nullable|integer',
            'highres_fix' => 'boolean',
            'samples' => 'nullable|integer',
            'inference_steps' => 'nullable|integer',
        ]);

        Provider::create($validated);

        return redirect()->route('providers.index')
            ->with('success', 'Provider created successfully.');
    }

    public function show(Provider $provider): View
    {
        return view('providers.show', compact('provider'));
    }

    public function edit(Provider $provider): View
    {
        return view('providers.edit', compact('provider'));
    }

    public function update(Request $request, Provider $provider): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'api_key' => 'required|string',
            'api_url' => 'required|url',
            'queue_url' => 'nullable|url',
            'api_key_location' => 'required|string',
            'safety_checker' => 'boolean',
            'safety_checker_type' => 'nullable|string',
            'tomesd' => 'boolean',
            'karras_sigmas' => 'boolean',
            'multi_lingual' => 'boolean',
            'panorama' => 'boolean',
            'self_attention' => 'boolean',
            'upscale' => 'nullable|integer',
            'clip_skip' => 'nullable|integer',
            'highres_fix' => 'boolean',
            'samples' => 'nullable|integer',
            'inference_steps' => 'nullable|integer',
        ]);

        $provider->update($validated);

        return redirect()->route('providers.index')
            ->with('success', 'Provider updated successfully.');
    }

    public function destroy(Provider $provider): RedirectResponse
    {
        $provider->delete();

        return redirect()->route('providers.index')
            ->with('success', 'Provider deleted successfully.');
    }
}
