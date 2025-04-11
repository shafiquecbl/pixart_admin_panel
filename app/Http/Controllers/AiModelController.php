<?php

namespace App\Http\Controllers;

use App\Models\AiModel;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AiModelController extends Controller
{
    public function index(): View
    {
        $aiModels = AiModel::with('provider')
            ->latest('added_date')
            ->paginate(10);

        return view('ai-models.index', compact('aiModels'));
    }

    public function create(): View
    {
        $providers = Provider::all();
        return view('ai-models.create', compact('providers'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'model_id' => 'required|string|unique:ai_models',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'ai_model_type' => 'required|string',
            'ios_model_type' => 'required|string',
            'prompt_engineering' => 'nullable|string',
            'provider_id' => 'required|exists:providers,id',
            'ad_type' => 'nullable|string',
            'delay' => 'required|integer',
            'image' => 'required|image|max:2048',
            'popularity' => 'boolean',
            'is_default' => 'boolean',
            'status' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('ai-models', 'public');
        }

        AiModel::create($validated);

        return redirect()->route('ai-models.index')
            ->with('success', 'AI Model created successfully.');
    }

    public function show(AiModel $aiModel): View
    {
        return view('ai-models.show', compact('aiModel'));
    }

    public function edit(AiModel $aiModel): View
    {
        $providers = Provider::all();
        return view('ai-models.edit', compact('aiModel', 'providers'));
    }

    public function update(Request $request, AiModel $aiModel): RedirectResponse
    {
        $validated = $request->validate([
            'model_id' => 'required|string|unique:ai_models,model_id,' . $aiModel->id,
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'ai_model_type' => 'required|string',
            'ios_model_type' => 'required|string',
            'prompt_engineering' => 'nullable|string',
            'provider_id' => 'required|exists:providers,id',
            'ad_type' => 'nullable|string',
            'delay' => 'required|integer',
            'image' => 'nullable|image|max:2048',
            'popularity' => 'boolean',
            'is_default' => 'boolean',
            'status' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('ai-models', 'public');
        }

        $aiModel->update($validated);

        return redirect()->route('ai-models.index')
            ->with('success', 'AI Model updated successfully.');
    }

    public function destroy(AiModel $aiModel): RedirectResponse
    {
        $aiModel->delete();

        return redirect()->route('ai-models.index')
            ->with('success', 'AI Model deleted successfully.');
    }
}
