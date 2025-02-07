@extends('layouts.backend')
@section('title', 'Blog Page')

@push('styles')
<style>
    #modal, #editModal {
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    #modal.hidden, #editModal.hidden {
        opacity: 0;
        visibility: hidden;
    }

    #modal:not(.hidden), #editModal:not(.hidden) {
        opacity: 1;
        visibility: visible;
    }

    #modal > div, #editModal > div {
        transform: scale(0.9);
        transition: transform 0.3s ease;
    }

    #modal:not(.hidden) > div, #editModal:not(.hidden) > div {
        transform: scale(1);
    }

    #modal::backdrop, #editModal::backdrop {
        backdrop-filter: blur(5px);
        transition: backdrop-filter 0.3s ease;
    }

    #modal, #editModal {
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>
@endpush

@section('content')
<div class="bg-white p-8 rounded-md w-full">
    <button id="openModal" class="bg-indigo-600 px-4 py-2 rounded-full hover:bg-indigo-700 transition-all duration-200 text-white font-semibold tracking-wide cursor-pointer">
        <i class="fa fa-plus mr-1"></i>Create
    </button>

    <div class="bg-white py-8 rounded-md w-full">
        <div class="inline-block min-w-full rounded-lg overflow-hidden">
            <table class="min-w-full table-auto leading-normal">
                <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">SN</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Image</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Slug</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Description</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="showData">

                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Create Modal -->
<div id="modal" class="fixed inset-0 z-50  flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-8 w-full max-w-4xl relative">
        <button id="closeModal" class="absolute text-md top-2 right-2 bg-red-100 px-2 py-2 rounded-full font-semibold hover:bg-rose-20 text-rose-600">
            Close
        </button>
        <h3 class="text-3xl font-semibold border-b py-2 mb-6">Blog Create</h3>

    </div>
</div>
@endsection

@push('scripts')
    <script>
        function clearFormErrors() {
        $('#categoryForm')[0].reset();
        $('.text-red-600').text('').hide();
        $('input, select, textarea').css('border-color', '#e2e8f0');
        $('#createImagePreview').attr('src', 'https://placehold.co/100x100');
    }

    function clearEditFormErrors() {
        $('#editCategoryForm')[0].reset();
        $('.text-red-600').text('').hide();
        $('input, select, textarea').css('border-color', '#e2e8f0');
        $('#editImagePreview').attr('src', 'https://placehold.co/100x100');
    }

    const modal = document.getElementById('modal');
    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');
    const closeEditModalButton = document.getElementById('closeEditModal');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
        clearFormErrors();
    });

    closeEditModalButton.addEventListener('click', () => {
        $('#editModal').addClass('hidden');
        clearEditFormErrors();
    });

    window.addEventListener('click', ({ target }) => {
        [modal, editModal].forEach(modalBox => {
            if (target === modalBox) {
                modalBox.classList.add('hidden');
                modalBox === modal ? clearFormErrors() : clearEditFormErrors();
            }
        });
    });
    </script>
@endpush
