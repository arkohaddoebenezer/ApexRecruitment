<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body>
   @include('admin.includes.header')
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20">
            <div class=" ">
                <h2 class="h4 pd-20">All Applicants</h2>
                <table class=" table data-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th class="datatable-nosort">Applicant</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applicants as $applicant )
                        <tr>
                            <td>
                                <h5 class="font-16">{{$applicant->first_name." ".$applicant->last_name}}</h5>
                            </td>
                            <td>{{$applicant->email}}
                            </td>
                            <td>{{$applicant->phone}}</td>
                            <td class="table-plus">
                                <img src="vendors/images/defaultprofile.jpg" width="70" height="70" alt="">
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                        role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="{{route('applicants.show',$applicant->id)}}"><i class="dw dw-eye"></i> View</a>
                                        <a class="dropdown-item" href="{{route('applicants.edit',$applicant->id)}}"><i class="dw dw-edit2"></i> Edit</a>
                                        {{-- <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>Delete</a> --}}
                                        {{-- <a class="dropdown-item" href="#"><i class="dw dw-up-arrow-3"></i>Promot to next
                                            stage</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-down-arrow"></i> Demote to
                                            previous stage</a> --}}
                                        <a class="dropdown-item" href="route{{route('applicants.update',$applicant->id)}}"><i class="dw dw-unlock1"></i> Suspend
                                            applicant</a>
                                        <a class="dropdown-item" href="route{{route('applicants.update',$applicant->id)}}"><i class="icon-copy fi-x"></i> Dismiss
                                            applicant</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   @include('admin.includes.script')
</body>
</html>
