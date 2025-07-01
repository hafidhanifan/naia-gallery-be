@extends('admin.layouts.main')
@section('title', "Naia Dress Management")

@section('content')

<div
    class="block justify-between items-center p-4 mx-4 mt-4 mb-6 bg-white rounded-2xl shadow-xl shadow-gray-200 lg:p-5 sm:flex">
    <div class="mb-1 w-full">
        <div class="mb-4">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-gray-700 hover:text-gray-900">
                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="#"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Dress</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">All
                                Dress</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">All Dress</h1>
        </div>
        <div class="block items-center sm:flex md:divide-x md:divide-gray-100">
            <form class="mb-4 sm:pr-3 sm:mb-0" action="#" method="GET">
                <label for="products-search" class="sr-only">Search</label>
                <div class="relative mt-1 sm:w-64 xl:w-96">
                    <input type="text" name="email" id="products-search"
                        class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                        placeholder="Search for products">
                </div>
            </form>
            <div class="flex items-center w-full sm:justify-end">
                <div class="hidden pl-2 space-x-1 md:flex">
                    <a href="#"
                        class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                            </path>
                        </svg>
                    </a>
                </div>
                <button type="button" data-modal-target="add-product-modal" data-modal-toggle="add-product-modal"
                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-br from-pink-500 to-voilet-500 sm:ml-auto shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                    <svg class="mr-2 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Add product
                </button>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col my-6 mx-4 rounded-2xl shadow-xl shadow-gray-200">
    <div class="overflow-x-auto rounded-2xl">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 table-fixed">
                    <thead class="bg-white">
                        <tr>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                Dress Image
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                Dress Name
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                Stock
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                Description
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($dresses as $dress)
                        <tr class="hover:bg-gray-100">
                            <td class="p-4  lg:p-5">
                                <img src="{{ asset('storage/'.$dress->image) }}" alt="{{ $dress->name }}"
                                    class="w-64 aspect-[2/3] object-cover">
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 lg:p-5">
                                <div class="text-base font-semibold text-gray-900">{{ $dress->name }}</div>
                                <div class="text-sm font-normal text-gray-500">{{ $dress->category->name ?? '-' }}</div>
                            </td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">{{
                                $dress->stock }}</td>
                            <td class="p-4  lg:p-5">
                                <div class="text-sm font-medium text-gray-900 line-clamp-3 overflow-hidden">{{
                                    $dress->description }}
                                </div>
                            </td>
                            <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                                <button type="button" data-modal-target="edit-dress-{{ $dress->id }}"
                                    data-modal-toggle="edit-dress-{{ $dress->id }}"
                                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 hover:text-gray-900 hover:scale-[1.02] transition-all">
                                    <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Edit item
                                </button>
                                <button type="button" data-modal-target="delete-product-modal"
                                    data-modal-toggle="delete-product-modal"
                                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-gradient-to-br from-red-400 to-red-600 rounded-lg shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                                    <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Delete item
                                </button>
                            </td>
                        </tr>
                        <!-- Edit Product Modal -->
                        <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full"
                            id="edit-dress-{{ $dress->id }}">
                            <div class="relative px-4 w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-2xl shadow-xl shadow-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-start p-5 rounded-t border-b">
                                        <h3 class="text-xl font-semibold">
                                            Edit product
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm p-1.5 ml-auto inline-flex items-center"
                                            data-modal-toggle="edit-dress-{{ $dress->id }}">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <form action="{{ route('editDress', $dress->id) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="name"
                                                        class="block mb-2 text-sm font-medium text-gray-900">Dress
                                                        Name</label>
                                                    <input type="text" name="name" id="name"
                                                        class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                                        value="{{ old('name', $dress->name) }}" required>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="category_id"
                                                        class="block mb-2 text-sm font-medium text-gray-900">Select
                                                        Categories</label>
                                                    <select id="category_id" name="category_id"
                                                        class="bg-transparent border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5">
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="stock"
                                                        class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                                                    <input type="number" name="stock" id="stock"
                                                        class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                                        placeholder="" value="{{ old('stock', $dress->stock) }}"
                                                        required>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="price_per_day"
                                                        class="block mb-2 text-sm font-medium text-gray-900">Price Per
                                                        Day</label>
                                                    <input type="number" name="price_per_day" id="price_per_day"
                                                        class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                                        placeholder=""
                                                        value="{{ old('price_per_day', $dress->price_per_day) }}"
                                                        required>
                                                </div>
                                                <div class="col-span-full">
                                                    <label for="description"
                                                        class="block mb-2 text-sm font-medium text-gray-900">Product
                                                        Details</label>
                                                    <textarea id="description" name="description" rows="6"
                                                        class="block p-4 w-full text-gray-900 border border-gray-300 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300"
                                                        placeholder="">{{ old('description', $dress->description) }}</textarea>
                                                </div>
                                            </div>
                                            <div class="flex my-4 space-x-5">
                                                <div>
                                                    <img src="/images/products/apple-imac-1.png" class="h-24"
                                                        alt="imac image">
                                                    <a href="#" class="cursor-pointer"><svg
                                                            class="-mt-5 w-6 h-6 text-red-600" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg></a>
                                                </div>
                                                <div>
                                                    <img src="/images/products/apple-imac-2.png" class="h-24"
                                                        alt="imac image">
                                                    <a href="#" class="cursor-pointer"><svg
                                                            class="-mt-5 w-6 h-6 text-red-600" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg></a>
                                                </div>
                                                <div>
                                                    <img src="/images/products/apple-imac-3.png" class="h-24"
                                                        alt="imac image">
                                                    <a href="#" class="cursor-pointer"><svg
                                                            class="-mt-5 w-6 h-6 text-red-600" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                            <div class="flex justify-center items-center w-full">
                                                <label
                                                    class="flex flex-col w-full h-32 rounded border-2 border-gray-300 border-dashed cursor-pointer hover:bg-gray-50">
                                                    <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                                        <svg class="w-10 h-10 text-gray-400" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12">
                                                            </path>
                                                        </svg>
                                                        <p class="py-1 text-sm text-gray-600">Upload a file or drag and
                                                            drop</p>
                                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                                    </div>
                                                    <input type="file" class="hidden" />
                                                </label>
                                            </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="p-6 rounded-b border-t border-gray-200">
                                        <button
                                            class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-voilet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"
                                            type="submit">Save all</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Add Product Modal -->
<div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full"
    id="add-product-modal">
    <div class="relative px-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-2xl shadow-lg">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-5 rounded-t border-b">
                <h3 class="text-xl font-semibold">
                    Add product
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-toggle="add-product-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form action="{{ route('addDress') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Dress
                                Name</label>
                            <input type="text" name="name" id="product-name"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="Silk Symphony" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="category_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                option</label>
                            <select id="category_id" name="category_id"
                                class="bg-transparent border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                            <input type="number" name="stock" id="stock"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="100" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="price_per_day" class="block mb-2 text-sm font-medium text-gray-900">Price Per
                                Day</label>
                            <input type="number" name="price_per_day" id="price"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="$2300" required>
                        </div>
                        <div class="col-span-full">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Product
                                Details</label>
                            <textarea id="description" name="description" rows="6"
                                class="block p-4 w-full text-gray-900 border border-gray-300 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300"
                                placeholder="A timeless dress crafted from premium silk or chiffon, designed to flatter your silhouette with effortless grace. Delicate lace or shimmering sequin details add a touch of glamour, while a sleek V-neck or backless cut enhances sophistication. Perfect for galas, weddings, or special evenings. Pair with heels and dainty jewelry for a polished finish"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-center items-center mt-4 w-full">
                        <input type="file" name="images[]" id="imageInput" class="hidden" multiple accept="image/*">
                        <input type="hidden" name="main_image_index" id="mainImageIndex" value="0">

                        {{-- Image upload section --}}
                        <!-- Upload Section -->
                        <div id="uploadSection"
                            class="mt-4 border-2 border-dashed border-gray-300 rounded h-32 flex flex-col justify-center items-center cursor-pointer hover:bg-gray-50"
                            onclick="imageInput.click()">
                            <svg class="w-10 h-10 text-gray-400 mb-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                            </svg>
                            <p class="text-gray-500 text-sm">Upload a file or drag and drop</p>
                        </div>

                        <!-- Preview + Add More -->
                        <div id="previewContainer" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mt-4">
                            <div id="addMoreSection" class="hidden">
                                <button type="button" onclick="imageInput.click()"
                                    class="w-full h-32 border-2 border-dashed border-gray-300 flex flex-col justify-center items-center hover:bg-gray-50 rounded">
                                    <svg class="w-8 h-8 text-gray-400 mb-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                    </svg>
                                    <span class="text-pink-600 text-sm">Add more images</span>
                                </button>
                            </div>
                        </div>

                    </div>
            </div>
            <!-- Modal footer -->
            <div class="p-6 rounded-b border-t border-gray-200">
                <button
                    class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-voilet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"
                    type="submit">Add product</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Product Modal -->
<div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full"
    id="delete-product-modal">
    <div class="relative px-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-2xl shadow-lg">
            <!-- Modal header -->
            <div class="flex justify-end p-2">
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-toggle="delete-product-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 pt-0 text-center">
                <svg class="mx-auto w-20 h-20 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="mt-5 mb-6 text-xl font-normal text-gray-500">Are you sure you want to delete this product?
                </h3>
                <a href="#"
                    class="text-white bg-gradient-to-br from-red-400 to-red-600 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                    Yes, I'm sure
                </a>
                <a href="#"
                    class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center hover:scale-[1.02] transition-transform"
                    data-modal-toggle="delete-product-modal">
                    No, cancel
                </a>
            </div>
        </div>
    </div>
</div>

@foreach (['success', 'error', 'info', 'warning'] as $msg)
@if(session($msg))
<x-alert :type="$msg" :message="session($msg)" />
@endif
@endforeach


@endsection