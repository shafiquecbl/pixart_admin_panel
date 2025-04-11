<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class ApiKeyController extends Controller
{
    public function index(): View
    {
        $apiKeys = ApiKey::latest()->paginate(10);
        return view('api-keys.index', compact('apiKeys'));
    }

    public function create(): View
    {
        return view('api-keys.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'key' => 'nullable|string',
            'status' => 'boolean',
        ]);

        // Generate API key if not provided
        if (empty($validated['key'])) {
            $validated['key'] = Str::random(32);
        }

        ApiKey::create($validated);

        return redirect()->route('api-keys.index')
            ->with('success', 'API Key created successfully.');
    }

    public function show(ApiKey $apiKey): View
    {
        return view('api-keys.show', compact('apiKey'));
    }

    public function edit(ApiKey $apiKey): View
    {
        return view('api-keys.edit', compact('apiKey'));
    }

    public function update(Request $request, ApiKey $apiKey): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'boolean',
        ]);

        $apiKey->update($validated);

        return redirect()->route('api-keys.index')
            ->with('success', 'API Key updated successfully.');
    }

    public function destroy(ApiKey $apiKey): RedirectResponse
    {
        $apiKey->delete();

        return redirect()->route('api-keys.index')
            ->with('success', 'API Key deleted successfully.');
    }
}
