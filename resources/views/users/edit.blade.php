@extends('layouts.app')

@section('content')
<div class="px-6">
    <div class="md:flex md:items-center md:justify-between mb-6">
        <div class="flex-1 min-w-0">
            <h1 class="text-2xl font-semibold text-gray-900">Edit User</h1>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4">
            <x-button href="{{ route('users.index') }}" variant="secondary">
                Cancel
            </x-button>
        </div>
    </div>

    <div class="bg-white border border-gray-200 rounded-lg">
        <form action="{{ route('users.update', $user) }}" method="POST" class="space-y-8 divide-y divide-gray-200">
            @csrf
            @method('PUT')

            <div class="p-6 space-y-8 divide-y divide-gray-200">
                <!-- Basic Information -->
                <div class="space-y-6 sm:space-y-5">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Basic Information</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Update user information.</p>
                    </div>

                    <div class="space-y-6 sm:space-y-5">
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start">
                            <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="block w-full rounded-lg border border-gray-200 shadow-sm focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start">
                            <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Email address
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="block w-full rounded-lg border border-gray-200 shadow-sm focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start">
                            <label for="password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                New Password
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="password" name="password" id="password" class="block w-full rounded-lg border border-gray-200 shadow-sm focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <p class="mt-2 text-sm text-gray-500">Leave blank to keep current password</p>
                                @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Confirm new password
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="block w-full rounded-lg border border-gray-200 shadow-sm focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Role & Status -->
                <div class="pt-6 space-y-6 sm:space-y-5">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Role & Status</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Update user's role and account status.</p>
                    </div>

                    <div class="space-y-6 sm:space-y-5">
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start">
                            <label for="role" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Role
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <select id="role" name="role" class="block w-full rounded-lg border border-gray-200 shadow-sm focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                                @error('role')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start">
                            <label for="status" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Status
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <select id="status" name="status" class="block w-full rounded-lg border border-gray-200 shadow-sm focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="1" {{ old('status', $user->status) == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status', $user->status) == '0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-6 py-4 bg-gray-50 flex items-center justify-end space-x-3 rounded-b-lg">
                <x-button href="{{ route('users.index') }}" variant="secondary">
                    Cancel
                </x-button>
                <x-button type="submit">
                    Update User
                </x-button>
            </div>
        </form>
    </div>
</div>
@endsection