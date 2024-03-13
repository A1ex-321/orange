@extends('admin.layouts.app')


@section('content')

<!-- SweetAlert2 CSS -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<main id="main" class="main">
    <section class="section dashboard" style="margin-left: -260px;
">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-0">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add Blog</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"></li>




                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @include('admin.layouts.message')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header" style="background-color:
#6e9ee6
;">
                                    <h3 class="card-title">Add Blog <small></small></h3>
                                </div>
                                <div class="container">
                                <form action="{{ route('blog-update', ['id' => $getRecord->id])}}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}
    <div class="card-body">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="recipient-name" name="title" value="{{ $getRecord->title }}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description<span style="color:red"></span></label>
            <textarea name="description" class="form-control" id="exampleInputEmail1" placeholder="Description" style="width: 100%; height: 100px;" required>{{ $getRecord->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"> Image<span style="color:red">*</span></label>
            <input type="file" name="singleimage" class="form-control" id="exampleInputEmail1" placeholder="Image" value="{{ $getRecord->singleimage }}">
            <img src="{{ asset('public/images/' . $getRecord->singleimage) }}" alt="Thumb Image" style="max-width: 100px; max-height: 100px;">
        </div>
        <div class="form-group">
            <label for="exampleInputImages">Multi Images<span style="color:red">*</span></label>
            <input type="file" name="images[]" class="form-control" id="exampleInputImages" placeholder="Images" accept="image/*" multiple  onchange="handleFiles(this.files)">
        </div>
        <div id="image-display">
    @if($getRecord && $getRecord->image_data)
        @php
            $imagePaths = explode(',', $getRecord->image_data);
            // Remove any empty elements from the array
            $imagePaths = array_filter($imagePaths);
        @endphp
        @foreach($imagePaths as $imagePath)
            <div class="image-container" style="display: inline-block; margin-right: 10px;">
                <img src="{{ asset('public/images/' . $imagePath) }}" alt="Image" style="width: 100px; height: 100px; margin-bottom: 5px;">
                <button type="button" class="btn btn-danger btn-sm remove-btn">✕</button>
            </div>
        @endforeach
    @endif
</div>



        <input type="hidden" name="image-data" id="image-data" value="{{ $getRecord->image_data }}">
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-info">Submit</button>
    </div>
</form>




                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            

            <!-- Main content -->

            <!-- /.content -->
        </div>




        <!-- Your scripts -->
        <!-- ... (previous code) ... -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- ... (other scripts) ... -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>


    </section>
</main>
@endsection




<!-- Include jQuery -->

<!-- Initialize Select2 -->
<script>
function handleFiles(files) {
    const imageDisplay = document.getElementById('image-display');
    const formData = new FormData();
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Append CSRF token to FormData
    formData.append('_token', csrfToken);

    // Loop through each selected file
    Array.from(files).forEach((file, index) => {
        const reader = new FileReader();
        reader.onload = function(e) {
            const uniqueId = Date.now() + index; // Generate a unique ID for each image

            // Store the image data in local storage
            localStorage.setItem('image' + uniqueId, e.target.result);

            // Display the image in the div
            const imgContainer = document.createElement('div');
            imgContainer.setAttribute('id', 'container' + uniqueId);
            imgContainer.style.display = 'inline-block';

            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = '100px';
            img.style.height = '100px';
            img.style.margin = '5px';

            imgContainer.appendChild(img);
            imageDisplay.appendChild(imgContainer);
        };
        reader.readAsDataURL(file);

        // Upload the image to Laravel assets here
        // Note: No need to redefine formData here
        formData.append('images[]', file);
    });

    // Send the FormData object with all selected files
    fetch('/upload-images', {
    method: 'POST',
    body: formData
})
.then(response => response.json())
.then(data => {
    // Handle response from server
    console.log('Images uploaded:', data);
    // Get the reference to the image-display div
    const imageDisplay = document.getElementById('image-display');
    // Get the reference to the hidden input field
    const hiddenInput = document.getElementById('image-data');
    // Loop through the array of image paths and create img elements
    data.forEach(imagePath => {
        // Create a container div for each image
        const container = document.createElement('div');
        container.style.display = 'inline-block';

        // Create the image element
        const img = document.createElement('img');
        img.src = imagePath;
        img.style.width = '100px';
        img.style.height = '100px';
        img.style.margin = '5px';

        // Create the remove button
        const removeBtn = document.createElement('button');
        removeBtn.innerText = '×';
        removeBtn.style.color = 'red';
        removeBtn.style.border = 'none';
        removeBtn.style.background = 'transparent';
        removeBtn.style.cursor = 'pointer';
        removeBtn.style.fontSize = '20px';
        removeBtn.onclick = function() {
            // Remove the image container from the DOM
            container.remove();
            // Remove the image path from the hidden input value
            const imagePathToRemove = img.src.split('/').pop();
            hiddenInput.value = hiddenInput.value.split(',').filter(path => path !== imagePathToRemove).join(',');
        };

        // Append the image and remove button to the container div
        container.appendChild(img);
        container.appendChild(removeBtn);

        // Append the container div to the imageDisplay div
        imageDisplay.appendChild(container);

        // Store the image path in the hidden input value
        hiddenInput.value += imagePath.split('/').pop() + ',';
    });
})
.catch(error => console.error('Error:', error));
}

document.addEventListener('DOMContentLoaded', function() {
    const removeButtons = document.querySelectorAll('.remove-btn');
    removeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const imageContainer = this.closest('.image-container');
            const imagePath = imageContainer.querySelector('img').src.split('/').pop();
            // Remove the image container from the DOM
            imageContainer.remove();
            // Remove the image path from the hidden input value
            const hiddenInput = document.getElementById('image-data');
            hiddenInput.value = hiddenInput.value.split(',').filter(path => path !== imagePath).join(',');
        });
    });
});

</script>






@section('style')



@endsection
