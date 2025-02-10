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
        {{ $blogs->links() }}
    </div>

</div>


<!-- Create Modal -->
<div id="modal" class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50 hidden overflow-y-auto">
    <div class="bg-white rounded-lg p-6 w-full max-w-4xl relative max-h-screen overflow-y-auto">
        <button id="closeModal" class="absolute text-md top-2 right-2 bg-red-100 px-2 py-2 rounded-full font-semibold hover:bg-rose-200 text-rose-600">
            Close <i class="fa-solid fa-xmark"></i>
        </button>
        <h3 class="text-3xl font-semibold border-b py-2 mb-6">Blog Create</h3>
        <form method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Title -->
                <div>
                    <label class="block text-gray-700 font-semibold">Title</label>
                    <input type="text" name="title" class="w-full outline-none mt-1 px-4 py-2 border-slate-200 bg-slate-100 rounded-lg focus:ring-1 focus:ring-indigo-400 transition-all duration-200 title" onkeyup="errorRemove(this)" placeholder="Write your title here...">

                    <span class="text-red-500 title_error"></span>
                </div>

                <!-- Author -->
                <div>
                    <label class="block text-gray-700 font-semibold">Author</label>
                    <input type="text" name="author" class="w-full outline-none mt-1 px-4 py-2 border-slate-200 bg-slate-100 rounded-lg focus:ring-1 focus:ring-indigo-400 transition-all duration-200 author" onkeyup="errorRemove(this)" placeholder="Author name...">

                    <span class="text-red-500 author_error"></span>
                </div>

                <!-- Short Description -->
                <div>
                    <label class="block text-gray-700 font-semibold">Short Description</label>
                    <input type="text" name="short_description" class="w-full outline-none mt-1 px-4 py-2 border-slate-200 bg-slate-100 rounded-lg focus:ring-1 focus:ring-indigo-400 transition-all duration-200 short_description" onkeyup="errorRemove(this)" placeholder="Write your short description">

                    <span class="text-red-500 short_description_error"></span>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Published At -->
                <div>
                    <label class="block text-gray-700 font-semibold">Published At</label>
                    <input type="date" name="published_at" class="w-full outline-none mt-1 px-4 py-2 border-slate-200 bg-slate-100 rounded-lg focus:ring-1 focus:ring-indigo-400 transition-all duration-200 published_at" onkeyup="errorRemove(this)">

                    <span class="text-red-500 published_at_error"></span>
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-gray-700 font-semibold">Category</label>
                    <select name="category" class="w-full outline-none mt-1 px-4 py-2 border-slate-200 bg-slate-100 rounded-lg focus:ring-1 focus:ring-indigo-400 transition-all duration-200 category_id" onkeyup="errorRemove(this)">
                        <option class="" value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-red-500 category_id_errors"></span>
                </div>

                <!-- Status -->
                <div>
                    <label class="block text-gray-700 font-semibold">Status</label>
                    <select name="status" class="w-full outline-none mt-1 px-4 py-2 border-slate-200 bg-slate-100 rounded-lg focus:ring-1 focus:ring-indigo-400 transition-all duration-200 status status" onkeyup="errorRemove(this)">
                        <option value="Draft">Draft</option>
                        <option value="Published">Published</option>
                    </select>

                    <span class="text-red-500 status_error"></span>
                </div>
            </div>

            <!-- Content -->
            <div>
                <label class="block text-gray-700 font-semibold">Content</label>
                <textarea name="content" class="w-full outline-none mt-1 px-4 py-2 border-slate-200 bg-slate-100 rounded-lg focus:ring-1 focus:ring-indigo-400 transition-all duration-200" id="editor"></textarea>
            </div>

            <!-- Tags -->
            <div>
                <label class="block text-gray-700 font-semibold">Tags</label>
                <div class="w-full border-slate-200 bg-slate-100 rounded-lg flex flex-column items-center gap-2">
                  <div id="tags-container" class="flex flex-wrap items-center gap-2">
                    <!-- Dynamically Added Tags -->
                  </div>
                  <input id="tag-input" type="text" name="tags" placeholder="Add a maximum five tags...." class="flex-1 border-none outline-none bg-transparent py-2 border-slate-200 bg-slate-100 rounded-lg focus:ring-1 focus:ring-indigo-400 transition-all duration-200"/>
                </div>
                <p id="error-message" class="mt-2 text-sm text-red-500 hidden">You can only add up to 5 tags.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-gray-700 font-semibold">Upload Image</label>
                    <input type="file" name="image" class="w-full outline-none mt-1 px-4 py-2 border-slate-200 bg-slate-100 rounded-lg focus:ring-1 focus:ring-indigo-400 transition-all duration-200" onchange="loadImage(event, 'createImagePreview')">
                </div>
                <div class="flex justify-start">
                    <img id="createImagePreview" class="mt-2 image" src="https://placehold.co/100x100" alt="Preview" style="width: 100px; height: 100px;">
                </div>
            </div>

            <button type="button" class="w-full bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">Create Blog</button>
        </form>
    </div>
</div>


<div id="editModal" class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-8 w-full max-w-4xl relative">
        <button id="closeEditModal" class="absolute text-md top-2 right-2 bg-red-100 px-2 py-2 rounded-full font-semibold hover:bg-rose-200 text-rose-600">
            Close <i class="fa-solid fa-xmark"></i>
        </button>
        <h3 class="text-3xl font-semibold border-b py-2 mb-6">Blog Edit</h3>

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

    // function errorRemove(e) {
    //     tag = e.tagName.toLowerCase();
    //     if (e.value != "") {
    //         if (tag == 'select') {
    //             $(e).closest('.mb-3').find('.text-red-500').hide();
    //         } else {
    //             $(e).siblings('.text-red-500').hide();
    //             $(e).css('border-color', '#e2e8f0');
    //         }
    //     }
    // }

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

    // Tags
    const input = document.getElementById('tag-input');
    const tagsContainer = document.getElementById('tags-container');
    const errorMessage = document.getElementById('error-message');
    let tags = [];

    input.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' && input.value.trim() !== '') {
        event.preventDefault();
        const newTag = input.value.trim();
        if (tags.length >= 5) {
            errorMessage.classList.remove('hidden');
            return;
        } else {
            errorMessage.classList.add('hidden');
        }

        if (!tags.includes(newTag)) {
            tags.push(newTag);
            renderTags();
        }
        input.value = '';
        }
    });

    const renderTags = () => {
        tagsContainer.innerHTML = '';
        tags.forEach((tag, index) => {
        const tagElement = document.createElement('div');
        tagElement.className =
            'flex items-center bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm';
        tagElement.innerHTML = `
            <span>${tag}</span>
            <button
            type="button"
            class="ml-2 text-indigo-500 hover:text-indigo-700 font-bold"
            onclick="removeTag(${index})"
            >
            &times;
            </button>
        `;
        tagsContainer.appendChild(tagElement);
        });
    };

    const removeTag = (index) => {
        tags.splice(index, 1);
        renderTags();
        errorMessage.classList.add('hidden');
    };

     // CKEditor 5
     ClassicEditor
        .create(document.querySelector('#editor'), {
            bodyClass: 'prose prose-sm max-w-none',
        })
        .then(editor => {
            console.log('Editor is ready!', editor);

            const editorElement = editor.ui.getEditableElement();
            editorElement.classList.add('prose', 'prose-sm', 'max-w-none');
        })
        .catch(error => {
            console.error('Error initializing CKEditor:', error);
        });
  </script>
@endpush
