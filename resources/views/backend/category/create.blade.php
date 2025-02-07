{{-- @extends('layouts.backend')
@section('title', 'Category Created')

@section('content')
<div class="flex justify-between items-center bg-white p-4 rounded-lg shadow-md mb-6">
    <div class="w-full">
        <h2 class="text-4xl font-bold text-slate-300 py-4">Create Category</h2>
        <form id="categoryForm" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="w-full border border-gray-300 px-4 py-3 bg-slate-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition-all duration-200 name" onkeyup="errorRemove(this)">
                    <span class="text-red-600 text-sm name_error"></span>
                </div>

                <div>
                    <label for="slug" class="block text-lg font-medium text-gray-700">Slug</label>
                    <input type="text" name="slug" id="slug" onkeyup="errorRemove(this)" class="w-full border border-gray-300 px-4 py-3 bg-slate-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition-all duration-200 slug">
                    <span class="text-red-600 text-sm slug_error"></span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="name" class="block text-lg font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" onkeyup="errorRemove(this)" class="w-full border border-gray-300 px-4 py-3 bg-slate-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition-all duration-200 description"></textarea>
                    <span class="text-red-600 text-sm description_error"></span>
                </div>

                <div>
                    <label for="status" class="block text-lg font-medium text-gray-700">Status</label>
                    <select name="status" id="status" onchange="errorRemove(this)" class="w-full border border-gray-300 px-4 py-3 bg-slate-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition-all duration-200 status">
                        <option value="">Select Status</option>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    <span class="text-red-600 text-sm status_error"></span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="image" class="block text-lg font-medium text-gray-700">Image</label>
                    <input type="file" name="image" id="image" onchange="loadImage(event, 'createImagePreview')" class="w-full border border-gray-300 px-4 py-3 bg-slate-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition-all duration-200 image">
                    <span class="text-red-600 text-sm image_error"></span>
                </div>

                <div class="text-center">
                    <img id="createImagePreview" class="mt-2 image" src="https://placehold.co/100x100" alt="Preview" style="width: 120px; height: 120px;">
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>


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
                $(e).css('border-color', 'green');
            }
        }
    }

    $(document).ready(function() {

        // Show Error
        function showError(name, message) {
            $(name).css('border-color', 'red');
            $(name).focus();
            $(`${name}_error`).show().text(message);
        }

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
                        $('#medium-modal').addClass('hidden');
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
    });

</script>

@endsection --}}
