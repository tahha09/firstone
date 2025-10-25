@extends('layout.App')
@section('content')
    <div class="bg-dark text-white min-h-screen p-10">
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data" class="max-w-5xl mx-auto">
            @csrf

            <div class="space-y-12">
                {{-- Profile Section --}}
                <div class="border-b border-white/10 pb-12">
                    <h2 class="text-xl font-semibold text-white">Profile</h2>
                    <p class="mt-1 text-sm text-gray-400">This information will be displayed publicly.</p>

                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                        <div class="sm:col-span-4">
                            <label for="username" class="block text-sm font-medium text-white">Username</label>
                            <div class="mt-2 flex rounded-md bg-white/5 pl-3">
                                <span class="text-gray-400 select-none">site.com/</span>
                                <input id="username" type="text" name="username" placeholder="janesmith"
                                    class="grow bg-transparent py-1.5 pl-1 text-white focus:outline-none placeholder:text-gray-500 sm:text-sm" />
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="about" class="block text-sm font-medium text-white">About</label>
                            <textarea id="about" name="about" rows="3"
                                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white placeholder:text-gray-500 focus:outline-indigo-500"></textarea>
                            <p class="mt-2 text-sm text-gray-400">Write a few sentences about yourself.</p>
                        </div>

                        <div class="col-span-full">
                            <label for="photo" class="block text-sm font-medium text-white">Profile Photo</label>
                            <input type="file" name="photo"
                                class="mt-2 block w-full text-sm text-gray-400 border border-gray-600 rounded-md cursor-pointer bg-white/5 focus:outline-indigo-500" />
                        </div>
                    </div>
                </div>

                {{-- Personal Info Section --}}
                <div class="border-b border-white/10 pb-12">
                    <h2 class="text-xl font-semibold text-white">Personal Information</h2>

                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-8">
                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-white">First name</label>
                            <input id="first-name" name="first_name" type="text"
                                class="mt-2 w-full rounded-md bg-white/5 px-3 py-1.5 text-white focus:outline-indigo-500" />
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-white">Last name</label>
                            <input id="last-name" name="last_name" type="text"
                                class="mt-2 w-full rounded-md bg-white/5 px-3 py-1.5 text-white focus:outline-indigo-500" />
                        </div>

                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium text-white">Email</label>
                            <input id="email" name="email" type="email"
                                class="mt-2 w-full rounded-md bg-white/5 px-3 py-1.5 text-white focus:outline-indigo-500" />
                        </div>

                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-white">Country</label>
                            <select id="country" name="country"
                                class="mt-2 w-full rounded-md bg-white/5 py-1.5 text-white focus:outline-indigo-500">
                                <option value="">Select a country</option>
                                <option>Egypt</option>
                                <option>USA</option>
                                <option>Canada</option>
                            </select>
                        </div>

                        <div class="col-span-full">
                            <label for="address" class="block text-sm font-medium text-white">Address</label>
                            <input id="address" name="address" type="text"
                                class="mt-2 w-full rounded-md bg-white/5 px-3 py-1.5 text-white focus:outline-indigo-500" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="mt-8 flex justify-end gap-4">
                <button type="reset" class="text-sm font-semibold text-gray-300 hover:text-white">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-500 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-600 transition">
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection
