<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha - Laravel Bootstrap5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin dasboard, admin panel, dashboard, template dashboard, laravel template, bootstrap admin template, bootstrap 5 admin template, dashboard template bootstrap, laravel vite, laravel admin dashboard, bootstrap dashboard, laravel dashboard, admin panel design, vite laravel, admin dashboard bootstrap">

    <!-- TITLE -->
    <title>Daffer</title>

    <!-- FAVICON -->
    <link rel="icon" href="{{asset('assets/img/brand/favicon.png  ')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">



    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- ICONS CSS -->
    <link href="{{asset('assets/plugins/web-fonts/icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/web-fonts/plugin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>


    <style>
        input[type="file"] {
            padding: 4px 36px 2px 12px;
            line-height: 2;
        }

        .box44 {
            display: inline-block;
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-weight: bold;
        }

        .tab-content {
            transition: opacity 0.3s ease-in-out;
        }



        /* data activity css start */
        .dark-theme .activity-text {
            color: #d0d0e2;
        }

        .dark-theme .deleteDataGroupText {
            background-color: #000;
            color: #d0d0e2;
        }



        .activity-container {
            position: relative;
            padding-left: 20px;
            /* Space for the vertical line */
        }

        .data-activity {
            position: relative;
            padding: 14px 14px;
            /* Spacing between activities */
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: #333;
        }

        .data-activity a.copyDataActivityText {
            position: absolute;
            top: 0;
            right: 0;
            background: #fff;
            padding: 4px;
            font-size: 10px;
        }

        .data-activity .activity-text p {
            margin-bottom: 0;
        }

        .activity-container::before {
            content: "";
            position: absolute;
            left: 5px;
            /* Position of the vertical line */
            top: 0;
            bottom: 0;
            width: 2px;
            /* Width of the vertical line */
            background-color: #c0c0c0;
            /* Color of the vertical line */
        }

        .activity-date {
            font-size: 12px;
            color: #777;
        }

        /* data activity css end */

        /* data image slider css start */
        /* Reset margin and padding for all elements */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* popup slider css start */
        .popup-slider .pic-container .pic1 {
            width: 100%;
            transform: none !important;
            display: none;
        }

        .popup-slider .pic-container .pic1[style*="transform: translate(0%, 0%)"] {
            display: block;

        }

        /* popup slider css end */

        /* Body styling */
        .container.image-slider {
            width: 100%;
            height: 100%;
            min-height: 116px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .pic-container {
            height: inherit;
            width: inherit;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.5s ease;
        }

        /* Individual images */
        .pic {
            width: 100%;
            height: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 500ms cubic-bezier(.42, .84, 0, 1.06);
        }


        .pic__img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            /* Optional: for rounded corners */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            /* Optional shadow effect */
        }

        /* Slider navigation buttons */
        .slider-btns,.slider-btns1 {
            position: absolute;
            /* Position buttons within the container */
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            /* Center vertically */
            padding: 0 10px;
            z-index: 9;
            right: 0;
            /* Add some padding */
        }

        .btn-left,
        .btn-right,
        .btn-left1,
        .btn-right1 {
            cursor: pointer;
            background-color: transparent;
            color: #c00021;
            opacity: 60%;
            border: none;
            font-size: 2rem;
            font-weight: 700;
            z-index: 10;
            transition: transform 0.3s ease, opacity 0.3s ease;
            /* Add transition for hover effects */
        }

        .btn-left:hover,
        .btn-right:hover,
        .btn-left1:hover,
        .btn-right1:hover {
            transform: scale(1.4);
            opacity: 100%;
        }

        /* data image slider css end */


        .cus-pop-up-design .user-name {
            text-transform: capitalize;
            font-size: 16px;
            margin: 5px 0px;
            padding-bottom: 5px;
            border-bottom: 1px solid #ededed;
        }

        .cus-pop-up-design ul.nav:after {
            content: '';
            width: calc(100% + 50px);
            height: 1px;
            background-color: #dddddd;
            bottom: 0px;
            left: -25px;
            position: absolute;
        }

        .cus-pop-up-design ul.nav {
            position: relative;
            padding-bottom: 10px;
        }

        .cus-pop-up-design .assigned-groups {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-transform: capitalize;
            font-size: 16px;
            margin: 5px 0px;
            padding-bottom: 5px;
            border-bottom: 1px solid #ededed;
        }

        .inner-body .cus-pop-up-design .nav-tabs .nav-link.active,
        .cus-pop-up-design .nav-tabs .nav-link:hover {
            border-bottom: 1px solid #000;
            background-color: #eee;
            color: #000 !important;
        }

        .cus-pop-up-design .nav-tabs .nav-link {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .assigned-user-profile-image {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            margin-right: 14px;
            object-fit: cover;
            background-color: #b3b3b3;
        }

        /* view data page css */
        .view-data-page .data-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Three equal columns */
            gap: 15px;
            padding: 10px;
        }

        .view-data-page .data-item {
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .view-data-page .data-item strong {
            font-size: 16px;
            color: #333;
        }

        .view-data-page .data-item span {
            font-size: 14px;
            color: #555;
        }

        /* view data page css end */
        #UserPermissionModal .accordion-button {
            padding-top: 10px;
            padding-bottom: 10px;
            box-shadow: none !important;
        }

        .accordion-header {
            border: 1px solid #e8e8f7;
        }

        .dark-theme #UserPermissionModal .accordion-button {
            background-color: #000;
            color: #fff;
        }

        .dark-theme #UserPermissionModal .accordion-button::after {
            filter: invert(1);
        }

        .dark-theme #UserPermissionModal .accordion-body {
            background-color: #000;
        }

        .dark-theme #UserPermissionModal .accordion-item {
            border: 1px solid #ffff !important;
            overflow: hidden;
        }

        #UserPermissionModal .accordion {
            margin-bottom: 15px;
        }

        #UserPermissionModal .modal-dialog {
            max-width: 550px;
        }

        select:focus-visible {
            outline: none;
        }

        .dark-theme input[type="date"] {
            color-scheme: dark;
        }

        .custom-card a {
            color: #000;
        }

        .dark-theme .custom-card a {
            color: #fff;
        }

        .dark-theme .form-control option {
            background: #000;
            color: #fff;
        }

        .main-sidebar-hide .side-menu .main-logo .icon-logo {
            margin-left: 5px;
            max-width: 62px;
            margin-top: 10px !important;
        }

        .main-sidebar-body .light-theme .mobile-logo {
            filter: invert(1);
            max-width: 132px;
        }

        .dark-theme .mobile-logo-dark,
        .mobile-logo {
            max-width: 132px !important;
        }

        img.mobile-logo {
            filter: invert(1);
        }

        /* 28-08-24 changes */
        .form-check-input {
            margin-top: 0.2rem;
        }

        .dataTables_wrapper .dataTables_filter input {
            outline: none !important;
            padding-left: 5px;
        }

        .dark-theme .dataTables_wrapper .dataTables_filter input {
            background: var(--dark-theme);
            color: #fff;
        }

        .main_menu {
            color: #8a8888 !important;
        }

        #edit_profile_image,
        #profile_image {
            height: auto;
        }

        .custom-User-info>.row {
            width: 50%;
            margin-right: 0px;
            margin-left: 0px;
        }

        .custom-User-info {
            display: flex;
        }

        .custom-User-info .userProfile {
            width: 100%;
            max-width: 100% !important;
            border-radius: 4px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }

        /* 28-08-24 changes */
        .dark-theme .dataTables_wrapper .dataTables_length,
        .dark-theme .dataTables_wrapper .dataTables_filter,
        .dark-theme .dataTables_wrapper .dataTables_info,
        .dark-theme .dataTables_wrapper .dataTables_processing,
        .dark-theme .dataTables_wrapper .dataTables_paginate {
            color: #fff;
        }

        .dark-theme select {
            background: transparent !important;
        }

        .form-control {
            color: #000 !important;
        }

        .dark-theme .form-control {
            color: #fff !important;
        }

        select option {
            color: #000;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: #9b9b9b !important;
        }

        .light-theme .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #000 !important;
        }

        .light-theme input[type="search"]:focus {
            color: black;
        }

        .dark-theme .sidemenu-logo {
            background-color: black !important
        }

        .light-theme .sidemenu-logo {
            background-color: white !important
        }


        .user-table #DataTables_Table_0_filter {
            display: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background: #6259ca;
            border-color: #6259ca;
            color: #fff !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: #6259ca;
            border-color: #6259ca;
        }

        .light-theme .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 5px 10px;
            border-radius: 4px;
        }

        .password-input-group .fa {
            position: absolute;
            right: 15px;
            top: 40px;
            cursor: pointer
        }

        .remove_file_image {
            cursor: pointer
        }

        .main-sidebar-hide.main-sidebar-open .main-content.side-content {
            margin-left: 240px;
        }

        .main-body.main-sidebar-hide.main-sidebar-open .side-header {
            padding-left: 240px;
        }

        .main-body.leftmenu .sidemenu-logo {
            align-content: center !important;
        }

        .dark-theme #deviceView .accordion-button {

            background-color: #000;
            color: #fff;

        }

        .dark-theme #deviceView .accordion-collapse {
            color: #a9a9b7;
            background-color: #000000
        }


        .sidemenu-logo {
            min-height: 65px;
            height: auto !important;
        }

        .password-suggestion {
            border-bottom: 3px solid #6259ca;
        }

        .hover-fade {
            transition: 0.3s;
        }

        .hover-fade:hover {
            opacity: 0.8;
        }

        .ck-content p {
            color: #000;

        }

        @media only screen and (max-width: 767px) {
            .custom-User-info {
                flex-wrap: wrap;
                flex-direction: column-reverse;
                padding: 10px 0px 0px 0px;
            }

            .main-content .custom-container-cls {
                padding: 0px;
            }

            .custom-User-info dt {
                padding: 0px 10px !important;
            }

            .custom-User-info>.row {
                width: 100%;
            }
        }
    </style>
    @yield('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<body class="ltr main-body leftmenu">

    <!-- LOADER -->
    <div id="global-loader">
        <img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
    </div>


    <!-- PAGE -->
    <div class="page">

        @include('layouts.components.header')

        @include('layouts.components.sidebar')

        <div class="main-content side-content pt-0">
            <div class="main-container container-fluid">
                <div class="inner-body">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('layouts.components.right-sidebar')
        @include('layouts.components.footer')

    </div>
    @include('layouts.components.scripts')

    <!-- STICKY JS -->
    <script src="{{asset('assets/js/sticky.js')}}"></script>

    <script src="{{asset('assets/js/themeColors.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>


    




    <!-- random password modal start -->
    <div class="modal fade" id="random_password_modal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="roleModalLabel">Random Password Manager</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="password_submit">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="userName">Random Password</label>
                            <input type="text" class="form-control" id="random_password" name="random_password" readonly>
                            <button type="button" id="random_password_generate" class="btn btn-primary btn-sm p-1 mt-1">Generate Password</button>
                            <button type="button" id="copy_password" class="btn btn-primary btn-sm p-1 mt-1">Copy</button>
                        </div>
                        <div class="form-group password-input-group position-relative">
                            <label for="new_password">New Password</label>
                            <input type="password" class="form-control password" id="new_password" name="password">
                            <i class="fa fa-eye-slash togglePassword" aria-hidden="true"></i>
                            <span class="text-danger error password-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control password" id="confirm_password" name="password_confirmation">
                            <span class="text-danger error password_confirmation-error"></span>
                        </div>

                        <span class="text-danger error"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- random password modal end -->


    <div class="modal fade" id="password-generator-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Password Generator</h5>
                </div>
                <div class="modal-body p-0">
                    <div class="password-suggestion d-flex justify-content-between p-3 bg-gray-100 mb-2">
                        <div class="">
                            <p class="mb-0 small text-black-50">Password Suggestion</p>
                            <p class="passwordSuggestion mb-0 text-black" style="word-break: break-all;"></p>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" type="button" class="hover-fade" id="copyRandomPassword"><i class="fa fa-copy fa-lg" id="copyPassword" title="Copy to Clipboard"></i></a>
                            <a href="#" type="button" class="hover-fade" id="refreshRandomPassword"><i class="fa fa-sync fa-lg" id="refreshPassword" title="Refresh Password"></i></a>
                        </div>
                    </div>
                    <div class="px-3 pb-3">
                        <p>Password Length <span id="rangeValue" class="box text-black  ">0</span> Characters</p>
                        <input type="range" value="0" class="form-range mb-2" min="0" max="40" id="passwordRange">
                        <p class="mb-0"><input type="checkbox" checked id="lowercase"> <label for="lowercase">Lowercase (abc)</label></p>
                        <p class="mb-0"><input type="checkbox" checked id="uppercase"> <label for="uppercase">Uppercase (ABC)</label> </p>
                        <p class="mb-0"><input type="checkbox" checked id="numbers"> <label for="numbers">Numbers (123)</label> </p>
                        <p class="mb-0"><input type="checkbox" checked id="randomizedSymbols"> <label for="randomizedSymbols">Randomized Symbols (!#$)</label> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>

<script>
    $('#passwordGeneratorBtn').on('click', function(e) {
        $('#passwordRange').val('0');
        updatePassword();
    })
    $('#copyRandomPassword').on('click', function() {
        var $button = $(this)
        if ($('.passwordSuggestion').text() != '') {
            navigator.clipboard.writeText($('.passwordSuggestion').text())
            $button.text('Copied');
            setTimeout(function() {
                $button.html('<i class="fa fa-copy fa-lg" id="copyPassword" title="Copy to Clipboard"></i>');
            }, 500);
        }


    });
    $('#refreshRandomPassword').on('click', function() {
        updatePassword();
    })
    // Trigger password generation on input range change
    $('#passwordRange').on('input', function() {

        updatePassword();
    });

    // Trigger password generation on checkbox change
    $('input[type="checkbox"]').on('change', function() {
        updatePassword();
    });

    function updatePassword() {
        var length = $('#passwordRange').val(); // Get the current value of the slider
        $('#rangeValue').text(length); // Update the displayed value

        var useLowercase = $('#lowercase').prop('checked');
        var useUppercase = $('#uppercase').prop('checked');
        var useNumbers = $('#numbers').prop('checked');
        var useSymbols = $('#randomizedSymbols').prop('checked');

        // Generate a password based on the selected options
        var password = generatePassword(length, useLowercase, useUppercase, useNumbers, useSymbols);

        // Display the generated password
        $('.passwordSuggestion').text(password);
    }

    function generatePassword(length, useLowercase, useUppercase, useNumbers, useSymbols) {
        var lowercase = 'abcdefghijklmnopqrstuvwxyz';
        var uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var numbers = '0123456789';
        var symbols = '!#$%^&*()_+-=[]{}|;:,.<>?';

        var characters = '';
        var guaranteedCharacters = []; // To ensure at least one character per group

        // Build the character set and guarantee at least one character from each selected group
        if (useLowercase) {
            characters += lowercase;
            guaranteedCharacters.push(lowercase[Math.floor(Math.random() * lowercase.length)]);
        }
        if (useUppercase) {
            characters += uppercase;
            guaranteedCharacters.push(uppercase[Math.floor(Math.random() * uppercase.length)]);
        }
        if (useNumbers) {
            characters += numbers;
            guaranteedCharacters.push(numbers[Math.floor(Math.random() * numbers.length)]);
        }
        if (useSymbols) {
            characters += symbols;
            guaranteedCharacters.push(symbols[Math.floor(Math.random() * symbols.length)]);
        }

        // Case 1: If length is 0, return an empty string
        if (length === 0) {
            return '';
        }

        // Case 2: If no group is selected, return a message
        if (characters === '') {
            return '';
        }

        // Case 3: If length is less than the number of guaranteed groups
        var password = '';
        if (length < guaranteedCharacters.length) {
            // Include random characters up to the requested length
            for (var i = 0; i < length; i++) {
                password += guaranteedCharacters[i % guaranteedCharacters.length];
            }
        } else {
            // Case 4: If length is greater or equal, ensure all groups are included
            // Add remaining random characters to fill the password
            for (var i = 0; i < length - guaranteedCharacters.length; i++) {
                var randomIndex = Math.floor(Math.random() * characters.length);
                password += characters[randomIndex];
            }
            // Add guaranteed characters
            password += guaranteedCharacters.join('');
        }

        // Shuffle the password to ensure randomness
        password = password.split('').sort(() => 0.5 - Math.random()).join('');

        return password;
    }











    function removeError() {
        $('.error').empty();
        $('.add_user').val('');
        $('#add_group_id').val(null).trigger('change');
    }

    $(document).ready(function() {
        // Function to toggle password visibility
        function togglePasswordVisibility(toggleIcon) {
            // Find the closest .form-group and its sibling .form-group elements
            const formGroup = $(toggleIcon).closest('.form-group');
            const passwordFields = formGroup.parent().find('.form-group .password');

            // Check if any password field is currently visible
            const isPasswordVisible = passwordFields.filter('[type="text"]').length > 0;

            // Toggle password field types
            passwordFields.each(function() {
                $(this).attr('type', isPasswordVisible ? 'password' : 'text');
            });

            // Toggle icon classes based on visibility
            if (isPasswordVisible) {
                $(toggleIcon).removeClass('fa-eye').addClass('fa-eye-slash'); // Show slashed icon
            } else {
                $(toggleIcon).removeClass('fa-eye-slash').addClass('fa-eye'); // Show eye icon
            }
        }

        // Attach click event to all toggle password icons
        $('.togglePassword').click(function() {
            togglePasswordVisibility(this);
        });

        $('.set_password_type').on('click', function() {
            $('.password').attr('type', 'password');
            $('.togglePassword').removeClass('fa-eye')
            $('.togglePassword').addClass('fa-eye-slash')
        })
    });




    $(document).ready(function() {
        let activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
        } else {
            $('.nav-tabs a:first').tab('show');
        }
        $('.nav-tabs a').on('shown.bs.tab', function(e) {
            let tabName = $(e.target).attr('href');
            localStorage.setItem('activeTab', tabName);
        });

        $('.user_management_module a').on('click', function(e) {
            localStorage.setItem('activeTab', $('.nav-tabs a:first').attr('href'));
        });
    });

    $('.random_password_modal').on('click', function() {
        $('#random_password').val('')
        $('#new_password').val('')
        $('#confirm_password').val('')
    })
    $('.recent_viewed').on('click', function() {
        let recent_visit_id = $(this).data('id');
        let type = $(this).data('type');
        let url = '{{ route("recent.visit") }}'; // Assuming this is being processed in a Blade template

        $.ajax({
            url: url,
            type: 'GET', // Using 'GET' for better readability
            data: {
                recent_visit_id: recent_visit_id,
                type: type
            },
            success: function(response) {
                // Handle success response
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('Error logging recent visit: ' + error);
            }
        });
    });

    $(document).ready(function() {
        $('.select2').select2({
            allowClear: true,
            width: '100%' // Optional to make the Select2 width fit the parent element
        });
        $('.select2-manage-access').select2({
            // allowClear: true,
            width: '100%' // Optional to make the Select2 width fit the parent element
        });
    });


    $(document).ready(function() {


        //reset password code start
        var passwordDiv = $('.password_div');
        $('#reset_password_checkbox').on('change', function() {
            if ($(this).is(':checked')) {
                // Show the div
                passwordDiv.find('.update_password').attr('name', 'password');
                passwordDiv.show(); // or passwordDiv.removeClass('d-none');
            } else {
                // Hide the div
                passwordDiv.find('.update_password').attr('name', '');
                passwordDiv.hide(); // or passwordDiv.addClass('d-none');
            }
        })
        //reset password code end



        // group export code start
        $('.group-table').on('keyup', 'input[type="search"]', function() {
            // Get the current value of the search input
            var searchValue = $(this).val();
            // Update the hidden input field in the form
            $('#group-search').val(searchValue);
        });
        // group export code end


        // check theme mode start
        if (!localStorage.getItem('spruhadarkMode') && !localStorage.getItem('spruhalightMode')) {
            // If neither is set, default to light mode
            localStorage.setItem('spruhalightMode', true);
        }
        if (localStorage.getItem('spruhadarkMode') === 'true') {
            document.body.classList.add('dark-theme');
        } else if (localStorage.getItem('spruhalightMode') === 'true') {
            document.body.classList.add('light-theme');
        } else {
            document.body.classList.add('light-theme');
        }




        // random password code start
        $('#copy_password').on('click', function() {
            // Get the value of the input field
            var password = $('#random_password').val();
            // Copy the value to the clipboard
            if (password != '') {
                navigator.clipboard.writeText(password).then(function() {
                    $('#copy_password').html('Copied');
                    // Reset button text after 2 seconds
                    setTimeout(function() {
                        $('#copy_password').html('Copy');
                    }, 2000); // Adjust the time as needed
                }).catch(function(error) {
                    // Error callback
                    console.error('Error copying text: ', error);
                });
            }

        });

        $('#random_password_generate').on('click', function() {
            var password = generateRandomPassword(12); // Generate a 12-character long password
            $('#random_password').val(password); // Display the generated password
            $('#new_password').val(password); // Display the generated password
            $('#confirm_password').val(password); // Display the generated password
        });

        function generateRandomPassword(length) {
            var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+~`|}{[]:;?><,./-=";
            var password = "";
            for (var i = 0; i < length; i++) {
                var randomIndex = Math.floor(Math.random() * charset.length);
                password += charset[randomIndex];
            }
            return password;
        }
        $('#password_submit').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            var form = $('#password_submit')[0]; // Get the form element
            var formData = new FormData(form); // Create FormData object
            var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token
            var url = '{{url("change-password") }}';


            $.ajax({
                url: url, // Use Laravel route helper to get the URL
                type: 'POST',
                data: formData,
                contentType: false, // Required for FormData
                processData: false, // Required for FormData
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Add CSRF token to the request headers
                },
                dataType: 'json', // Expect JSON response
                success: function(response) {
                    if (response.status === 'success') {
                        $('#random_password_modal').hide('modal');
                        Swal.fire({
                            title: 'Password changed',
                            icon: 'success',
                            confirmButtonColor: '#6259ca',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Reload the current page
                                location.reload(); // This will refresh the page and reflect the changes
                            }
                        });
                        // Optionally clear the form or perform other actions
                    } else {
                        $('.error').empty();

                        for (let key in response.errors) {
                            // Check if the key is a property of the object
                            if (response.errors.hasOwnProperty(key)) {
                                // Get the array of error messages for the current key
                                let errorMessages = response.errors[key];
                                console.log(errorMessages[0])
                                console.log(key)

                                errorMessages = errorMessages[0]
                                // Loop through the error messages array

                                $('.' + key + '-error').html(errorMessages)
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        });
        // random password code end






        $('#user_add_submit').submit(function(e) {
            e.preventDefault();
            var form = $('#user_add_submit')[0];
            var formData = new FormData(form); // Create FormData object
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var url = '{{url("users-store") }}';
            var submitButton = $('#user_add_submit_button');
            submitButton.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Processing...');


            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                dataType: 'json',
                success: function(response) {
                    submitButton.prop('disabled', false).html('Save');

                    if (response.status === 'success') {
                        $('#addUserModal').hide('modal');
                        Swal.fire({
                            title: 'Success!',
                            text: 'The user has been created successfully!',
                            icon: 'success',
                            confirmButtonColor: '#6259ca',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    } else {
                        $('.error').empty();
                        let firstError; // Variable to hold the first error element

                        for (let key in response.errors) {
                            if (response.errors.hasOwnProperty(key)) {
                                $('.add-' + key + '-error').html(response.errors[key][0])
                                if (!firstError) {
                                    firstError = key // Set first error
                                }
                            }
                        }


                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        });

        $('#roleModal').on('hidden.bs.modal', function(e) {

            $('#role_submit')[0].reset(); // Reset the form
            $('#role_id').val('')
            $('.error').empty()
        });

        $('#groupModal').on('hidden.bs.modal', function(e) {

            $('#group_submit')[0].reset(); // Reset the form
            $('#group_id').val('')
            $('#userId').val('')

            $('.error').empty()
        });




    })



    $(document).ready(function() {
        // Get the current URL path
        var currentUrl = $(location).attr('href');

        // Select all menu links
        $('.menu-nav .nav-item').each(function() {

            // Get the href attribute of the link
            var link = $(this).find('.nav-link');

            $(this).removeClass('active');

            // Compare the path with the current URL path
            if (currentUrl === link.attr('href')) {

                $(this).addClass('active');
            }
        });

        if (window.location.href.includes('data-management')) {
            $('.data_management_module').addClass('active');
        }
        if (window.location.href.includes('user-management')) {
            $('.user_management_module').addClass('active');
        }

        if (window.location.href.includes('/user-details/')) {
            $('.user_management_module').addClass('active');
        }
        if (window.location.href.includes('data-export')) {
            $('.export_module').addClass('active');
        }
        if (window.location.href.includes('activity-log')) {
            $('.logs_module').addClass('active');
        }








    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
</script>
<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.table_id').dataTable({
            ordering: false, // Disable automatic sorting
            columnDefs: [{
                targets: -1, // Targets the last column
                searchable: false
            }]
        });
    });
    $(document).ready(function() {
        $('.log_activity_table').dataTable({
            ordering: false, // Disable automatic sorting

        });
    });
    $(document).ready(function() {
        $(function() {
            $(".datepicker").datepicker({
                maxDate: 0, // Disable future dates
                changeYear: true, // Enable year dropdown
                yearRange: "1900:" + new Date().getFullYear(),
            });
        });
        $(function() {
            $(".datepicker1").datepicker({
                dateFormat: "dd-mm-yy"
            });
        });

    })
</script>
