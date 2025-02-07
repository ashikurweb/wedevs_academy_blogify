@extends('layouts.backend')
@section('title', 'Category Page')

@push('styles')
<style>
    /* Smooth transition for modal and background */
    #modal, #editModal {
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    /* Hide modal by default */
    #modal.hidden, #editModal.hidden {
        opacity: 0;
        visibility: hidden;
    }

    /* Show modal */
    #modal:not(.hidden), #editModal:not(.hidden) {
        opacity: 1;
        visibility: visible;
    }

    /* Modal content animation */
    #modal > div, #editModal > div {
        transform: scale(0.9);
        transition: transform 0.3s ease;
    }

    #modal:not(.hidden) > div, #editModal:not(.hidden) > div {
        transform: scale(1);
    }

    /* Background blur effect */
    #modal::backdrop, #editModal::backdrop {
        backdrop-filter: blur(5px);
        transition: backdrop-filter 0.3s ease;
    }

    /* Ensure the modal is centered */
    #modal, #editModal {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swal2-actions {
        gap: 1rem;
    }

    .gradient-btn {
        background: linear-gradient(135deg, #6a00f4, #3a00f4);
        border: none;
        outline: none;
        color: #fff;
        padding: 12px 16px;
        font-size: 1rem;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .gradient-btn:hover {
        background: linear-gradient(135deg, #3a00f4, #6a00f4);
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

    {{-- paginate --}}
    <div class="mt-4">
        {{ $categories->links() }}
    </div>

</div>


<!-- Create Modal -->
<div id="modal" class="fixed inset-0 z-50  flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-8 w-full max-w-4xl relative">
        <button id="closeModal" class="absolute text-md top-2 right-2 bg-red-100 px-2 py-2 rounded-full font-semibold hover:bg-rose-20 text-rose-600">
            Close
        </button>
        <h3 class="text-3xl font-semibold border-b py-2 mb-6">Category Create</h3>
        <form id="categoryForm" method="POST">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 bg-slate-100 outline-none border-slate-200 block w-full sm:text-sm rounded-md py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 px-4 name" onkeyup="errorRemove(this)">
                    <span class="text-red-600 text-sm name_error"></span>
                </div>

                <div>
                    <label for="slug" class="block text-lg font-medium text-gray-700">Slug</label>
                    <input type="text" name="slug" id="slug" onkeyup="errorRemove(this)" class="mt-1 bg-slate-100 outline-none border-slate-200 block w-full sm:text-sm rounded-md py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 px-4 slug">
                    <span class="text-red-600 text-sm slug_error"></span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="name" class="block text-lg font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" onkeyup="errorRemove(this)" class="mt-1 bg-slate-100 outline-none border-slate-200 block w-full sm:text-sm rounded-md py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 px-4 description"></textarea>
                    <span class="text-red-600 text-sm description_error"></span>
                </div>

                <div>
                    <label for="status" class="block text-lg font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="mt-1 bg-slate-100 outline-none border-slate-200 block w-full sm:text-sm rounded-md py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 px-4 status">
                        <option value="">Select Status</option>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    <span class="text-red-600 text-sm status_error"></span>
                </div>
            </div>

            {{-- image --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="image" class="block text-lg font-medium text-gray-700">Image</label>
                    <input type="file" name="image" id="image" onchange="loadImage(event, 'createImagePreview')" class="mt-1 bg-slate-100 outline-none border-slate-200 block w-full sm:text-sm rounded-md py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 px-4 image">
                    <span class="text-red-600 text-sm image_error"></span>
                </div>

                <div class="text-center">
                    <img id="createImagePreview" class="mt-2 image" src="https://placehold.co/100x100" alt="Preview" style="width: 120px; height: 120px;">
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-sky-600 hover:bg-sky-700 transition-all duration-200 text-xl w-full text-white px-4 py-2 rounded-lg">Create Category</button>
            </div>
        </form>
    </div>
</div>

<div id="editModal" class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-8 w-full max-w-4xl relative">
        <button id="closeEditModal" class="absolute text-md top-2 right-2 bg-red-100 px-2 py-2 rounded-full font-semibold hover:bg-rose-200 text-rose-600">
            Close
        </button>
        <h3 class="text-3xl font-semibold border-b py-2 mb-6">Category Edit</h3>
        <form id="editCategoryForm" method="POST">
            @csrf
            <input type="hidden" name="id" id="edit_id">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="edit_name" class="block text-lg font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="edit_name" class="mt-1 bg-slate-100 outline-none border-slate-200 block w-full sm:text-sm rounded-md py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 px-4 edit_name" onkeyup="errorRemove(this)">
                    <span class="text-red-600 text-sm edit_name_error"></span>
                </div>

                <div>
                    <label for="edit_slug" class="block text-lg font-medium text-gray-700">Slug</label>
                    <input type="text" name="slug" id="edit_slug" class="mt-1 bg-slate-100 outline-none border-slate-200 block w-full sm:text-sm rounded-md py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 px-4 edit_slug" onkeyup="errorRemove(this)">
                    <span class="text-red-600 text-sm slug_error"></span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="edit_description" class="block text-lg font-medium text-gray-700">Description</label>
                    <textarea name="description" id="edit_description" class="mt-1 bg-slate-100 outline-none border-slate-200 block w-full sm:text-sm rounded-md py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 px-4 edit_description" onkeyup="errorRemove(this)"></textarea>
                    <span class="text-red-600 text-sm description_error"></span>
                </div>

                <div>
                    <label for="edit_status" class="block text-lg font-medium text-gray-700">Status</label>
                    <select name="status" id="edit_status" class="mt-1 bg-slate-100 outline-none border-slate-200 block w-full sm:text-sm rounded-md py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 px-4 edit_status">
                        <option value="">Select Status</option>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    <span class="text-red-600 text-sm status_error"></span>
                </div>
            </div>

            <!-- Image Upload -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="edit_image" class="block text-lg font-medium text-gray-700">Image</label>
                    <input type="file" name="image" id="edit_image" onchange="loadImage(event, 'editImagePreview')" class="mt-1 bg-slate-100 outline-none border-slate-200 block w-full sm:text-sm rounded-md py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 px-4 edit_image">
                    <span class="text-red-600 text-sm image_error"></span>
                </div>

                <div class="text-center">
                    <img id="editImagePreview" class="mt-2" src="https://placehold.co/100x100" alt="Preview" style="width: 120px; height: 120px;">
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 transition-all duration-200 text-xl w-full text-white px-4 py-2 rounded-lg update_category">Update Category</button>
            </div>
        </form>
    </div>
</div>


@endsection

@push('scripts')
  <script>

    // Image Preview
    function loadImage(event, previewId) {
        var output = document.getElementById(previewId);
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function () {
                output.src = reader.result;
            };
            reader.readAsDataURL(file);
        } else{
            output.src = 'https://placehold.co/100x100';
        }
    }

    // Error Remove
    function errorRemove(e) {
        tag = e.tagName.toLowerCase();
        if (e.value != "") {
            if (tag == 'select') {
                $(e).closest('.mb-3').find('.text-red-500').hide();
            } else {
                $(e).siblings('.text-red-500').hide();
                $(e).css('border-color', '#e2e8f0');
            }
        }
    }

    $(document).ready(function () {
    // Show Error
        function showError(name, message) {
            $(name).css('border-color', 'red');
            $(name).focus();
            $(`${name}_error`).show().text(message);
        }

        // Show Category
        function showCategory() {
            $.ajax({
                url: "{{ route('category.show') }}",
                method: 'GET',
                success: function (res) {
                    const categories = res.data;
                    $('.showData').empty();

                    if (categories.length > 0) {
                        $.each(categories, function (index, category) {
                            const tr = document.createElement('tr');
                            tr.innerHTML = `
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">${index+1}</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><img src="${category.image ? '/uploads/category/' + category.image : 'https://placehold.co/100x100'}" alt="Image" style="width: 60px; height: 60px;"></td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">${category.name}</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">${category.slug}</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">${category.description}</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span class="${category.status === 'draft' ? 'bg-rose-300' : 'bg-green-300'} text-white py-2 px-2 rounded-md">
                                        ${category.status}
                                    </span>
                                </td>
                                <td class="text-center px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center justify-center">
                                        <div class="flex items-center">
                                            <button data-id="${category.id}" id="openEditModal" class="bg-blue-600 hover:bg-blue-700 transition-all duration-200 text-white px-2 py-1 mr-2 rounded-lg category_edit">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button data-id="${category.id}" class="bg-rose-600 hover:bg-red-500 transition-all duration-200 text-white px-2 py-1 rounded-lg category_delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            `;
                            $('.showData').append(tr);
                        });
                    } else {
                        const tr = document.createElement('tr');
                        tr.innerHTML = `
                            <td colspan="7" class="text-center">No Data Found</td>
                        `;
                        $('.showData').append(tr);
                    }
                }
            });
        }
        showCategory();

        // Category Create
        $('#categoryForm').on('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('category.store') }}",
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (res) {
                    if (res.status == 200) {
                        $('#modal').addClass('hidden');
                        $('#createImagePreview').attr('src', 'https://placehold.co/100x100');
                        $('#categoryForm')[0].reset();
                        showCategory();
                        toastr.success(res.message);
                    } else if (res.status == 400) {
                        if (res.errors.name) {
                            showError('.name', res.errors.name);
                        }
                        if (res.errors.slug) {
                            showError('.slug', res.errors.slug);
                        }
                        if (res.errors.description) {
                            showError('.description', res.errors.description);
                        }
                        if (res.errors.status) {
                            showError('.status', res.errors.status);
                        }
                        if (res.errors.image) {
                            showError('.image', res.errors.image);
                        }
                    }
                }
            });
        });

        // Category Edit
        $(document).on('click', '#openEditModal', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                url: `/category/edit/${id}`,
                method: 'GET',
                success: function (res) {
                    if (res.status == 200) {
                        $('#editModal').removeClass('hidden');
                        $('#edit_id').val(res.data.id);
                        $('#edit_name').val(res.data.name);
                        $('#edit_slug').val(res.data.slug);
                        $('#edit_description').val(res.data.description);
                        $('#edit_status').val(res.data.status);
                        $('.update_category').attr('data-id', res.data.id);
                        // Image Preview Update
                        let imageSrc = res.data.image ? '/uploads/category/' + res.data.image : 'https://placehold.co/100x100';
                        $('#editImagePreview').attr('src', imageSrc);
                    }
                }
            });
        });

        // Category Update
        $(document).on('click', '.update_category', function (e) {
            e.preventDefault();
            let id = $(this).attr('data-id');

            let formData = new FormData($('#editCategoryForm')[0]);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: `/category/update/${id}`,
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (res) {
                    if (res.status == 200) {
                        $('#editModal').addClass('hidden');
                        $('#editCategoryForm')[0].reset();
                        showCategory();
                        $('#editImagePreview').attr('src', 'https://placehold.co/100x100');
                        toastr.success(res.message);
                    } else if (res.status == 400) {
                        if (res.errors.edit_name) {
                            showError('.edit_name', res.errors.edit_name);
                        }
                        if (res.errors.slug) {
                            showError('.edit_slug', res.errors.slug);
                        }
                        if (res.errors.description) {
                            showError('.edit_description', res.errors.description);
                        }
                        if (res.errors.status) {
                            showError('.edit_status', res.errors.status);
                        }
                        if (res.errors.image) {
                            showError('.edit_image', res.errors.image);
                        }
                    } else {
                        toastr.error(res.message);
                    }
                }
            });
        });

        // Category Delete
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn bg-indigo-600",
                cancelButton: "btn bg-red-600"
            },
            buttonsStyling: true
        });

        $(document).on('click', '.category_delete', function(e) {
            e.preventDefault();

            const id = $(this).data('id');

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true,
                buttonsStyling: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/category/destroy/${id}`,
                        method: "GET",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(res) {
                            if (res.status === 200) {
                                swalWithBootstrapButtons.fire({
                                    title: 'Deleted!',
                                    text: 'Product has been deleted.',
                                    icon: 'success'
                                });
                                showCategory();
                            } else {
                                swalWithBootstrapButtons.fire({
                                    position: "top-end",
                                    icon: "warning",
                                    title: 'Delete Unsuccessful!',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire({
                        title: 'Cancelled',
                        text: 'Your product is safe :)',
                        icon: 'error'
                    });
                }
            });
        });
    });

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
