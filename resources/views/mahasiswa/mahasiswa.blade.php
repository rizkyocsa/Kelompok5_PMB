@extends('layouts.apps')

@section('title', 'Mahasiswa')


@section('content')
<div class="main-content user">
    <div class="row">
        <div class="col-xl-12">
            <div class="box card-box mb-20">
                <div class="icon-box bg-color-1">
                    <div class="icon bg-icon-1">
                        <i class='bx bxs-briefcase'></i>
                    </div>
                    <div class="content">
                        <h5 class="title-box fs-15 mt-2">Total Task</h5>
                        <div class="themesflat-counter fs-14 font-wb color-1">
                            <span class="number" data-from="0" data-to="1225" data-speed="2500" data-inviewport="yes">1225</span>
                        </div>
                    </div>
                </div>
                <div class="icon-box bg-color-2">
                    <div class="icon bg-icon-2">
                        <i class='bx bx-task'></i>
                    </div>
                    <div class="content click-c">
                        <h5 class="title-box fs-15 mt-2">Running Task</h5>
                        <div class="themesflat-counter fs-14 font-wb color-2">
                            <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">154 +</span>
                        </div>
                    </div>

                </div>
                <div class="icon-box bg-color-3">
                    <div class="icon bg-icon-3">
                        <i class='bx bx-block'></i>
                    </div>
                    <div class="content click-c">
                        <h5 class="title-box fs-15 mt-2">On Hold Task</h5>
                        <div class="themesflat-counter fs-14 font-wb color-3">
                            <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">75 +</span>
                        </div>
                    </div>

                </div>
                <div class="icon-box bg-color-5">
                    <div class="icon bg-icon-5">
                        <i class='bx bx-task color-white'></i>
                    </div>
                    <div class="content click-c">
                        <h5 class="title-box fs-15 mt-2">Complete Task</h5>
                        <div class="themesflat-counter fs-14 font-wb color-4">
                            <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">120 +</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="box">
                <div class="box-body pb-30">
                    <div class="row">
                        <div class="col-md-12 col-xl-10 mb-0">
                            <div class="row">
                                <div class="col-md-12 col-xl-4 mb-0">
                                    <div class="form-group"> <label class="form-label">From:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class='bx bx-calendar'></i> </div>
                                            </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text"> </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-4 mb-0">
                                    <div class="form-group"> <label class="form-label">To:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class='bx bx-calendar'></i> </div>
                                            </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text"> </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-4 mb-0">
                                    <div class="form-group"> <label class="form-label">Select Priority:</label> <select name="attendance" class="form-control custom-select select2 select2-hidden-accessible" data-placeholder="Select Priority" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-16-akyu"><option label="Select Priority" data-select2-id="select2-data-18-ezae"></option> <option value="1">High</option> <option value="2">Medium</option> <option value="3">Low</option> </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-17-6y8j" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-attendance-ws-container" aria-controls="select2-attendance-ws-container"><span class="select2-selection__rendered" id="select2-attendance-ws-container" role="textbox" aria-readonly="true" title="Select Priority"></span>
                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                        </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-2 mb-0">
                            <div class="form-group mt-32"> <a href="#" class="btn bg-primary btn-block color-white">Search</a> </div>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="task-profile_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <!-- <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="task-profile_length"><label>Show <select name="task-profile_length" aria-controls="task-profile" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="task-profile_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="task-profile"></label></div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-vcenter text-nowrap table-bordered dataTable no-footer" id="task-profile" role="grid">
                                        <thead>
                                            <tr class="top">
                                                <th class="border-bottom-0 text-center sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 26.6562px;">No</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 222.312px;">Task</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 84.8281px;">Priority</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">Start Date</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">Deadline</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 71.875px;">Progress</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 110.719px;">Work Status</th>
                                                <th class="border-bottom-0 sorting_disabled fs-14 font-w500" rowspan="1" colspan="1" style="width: 145.391px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                                <td class="text-center">1</td>
                                                <td>
                                                    <a href="#" class="d-flex "> <span>Design Updated</span> </a>
                                                </td>
                                                <td><span class="badge badge-danger-light">High</span></td>
                                                <td>12-02-2021</td>
                                                <td>16-06-2021</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary w-30"></div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning">On hold</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="text-center">2</td>
                                                <td>
                                                    <a href="#" class="d-flex "> <span>Website Develop</span> </a>
                                                </td>
                                                <td><span class="badge badge-success-light">Low</span></td>
                                                <td>01-01-2021</td>
                                                <td>22-04-2021</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-yellow w-50"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex"> <span class="badge badge-danger">Dealy</span>
                                                        <div class="mt-1 ms-1"> <span class="feather feather-info text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dealy by 99 days"></span> </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="text-center">3</td>
                                                <td>
                                                    <a href="#" class="d-flex "><span>Digital Marketing</span> </a>
                                                </td>
                                                <td><span class="badge badge-warning-light">Medium</span></td>
                                                <td>11-04-2021</td>
                                                <td>16-06-2021</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary w-100"></div>
                                                    </div>
                                                </td>
                                                <td> <span class="badge badge-success">Completed</span> </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="text-center">4</td>
                                                <td>
                                                    <a href="#" class="d-flex "><span>Ad Analysis</span> </a>
                                                </td>
                                                <td><span class="badge badge-danger-light">High</span></td>
                                                <td>11-03-2021</td>
                                                <td>19-05-2021</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary w-80"></div>
                                                    </div>
                                                </td>
                                                <td> <span class="badge badge-success">Completed</span> </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="text-center">5</td>
                                                <td>
                                                    <a href="#" class="d-flex "><span>Design update</span> </a>
                                                </td>
                                                <td><span class="badge badge-danger-light">High</span></td>
                                                <td>05-02-2021</td>
                                                <td>21-04-2021</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary w-70"></div>
                                                    </div>
                                                </td>
                                                <td> <span class="badge badge-success">Completed</span> </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="text-center">6</td>
                                                <td>
                                                    <a href="#" class="d-flex "><span>Design update</span> </a>
                                                </td>
                                                <td><span class="badge badge-danger-light">High</span></td>
                                                <td>21-01-2021</td>
                                                <td>15-03-2021</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary w-40"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex"> <span class="badge badge-success">Completed</span>
                                                        <div class="mt-1 ms-1"> <span class="feather feather-info text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dealy by 30 days"></span> </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="text-center">7</td>
                                                <td>
                                                    <a href="#" class="d-flex "><span>Design update</span> </a>
                                                </td>
                                                <td><span class="badge badge-danger-light">High</span></td>
                                                <td>23-01-2021</td>
                                                <td>25-02-2021</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-yellow w-40"></div>
                                                    </div>
                                                </td>
                                                <td> <span class="badge badge-success">Completed</span> </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="text-center">8</td>
                                                <td>
                                                    <a href="#" class="d-flex "><span>Design update</span> </a>
                                                </td>
                                                <td><span class="badge badge-danger-light">High</span></td>
                                                <td>13-03-2021</td>
                                                <td>05-05-2021</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary w-100"></div>
                                                    </div>
                                                </td>
                                                <td> <span class="badge badge-warning">On Hold</span> </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="text-center">9</td>
                                                <td>
                                                    <a href="#" class="d-flex "> <span>Design update</span> </a>
                                                </td>
                                                <td><span class="badge badge-success-light">Low</span></td>
                                                <td>01-01-2021</td>
                                                <td>22-04-2021</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-yellow w-50"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex"> <span class="badge badge-danger">Dealy</span>
                                                        <div class="mt-1 ms-1"> <span class="feather feather-info text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dealy by 99 days"></span> </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="text-center">10</td>
                                                <td>
                                                    <a href="#" class="d-flex "><span>Design update</span> </a>
                                                </td>
                                                <td><span class="badge badge-warning-light">Medium</span></td>
                                                <td>11-04-2021</td>
                                                <td>16-06-2021</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary w-100"></div>
                                                    </div>
                                                </td>
                                                <td> <span class="badge badge-success">Completed</span> </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="task-profile_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="task-profile_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="task-profile_previous"><a href="#" aria-controls="task-profile" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="task-profile" data-dt-idx="1" tabindex="0" class="page-link">01</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="task-profile" data-dt-idx="1" tabindex="0" class="page-link">02</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="task-profile" data-dt-idx="1" tabindex="0" class="page-link">03</a></li>
                                            <li class="paginate_button page-item next disabled" id="task-profile_next"><a href="#" aria-controls="task-profile" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- <div class="main">
        <table id="table-data" class="table">
            <thead>
                <tr class="text-center">
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Angkatan</th>
                    <th>Prodi</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1; @endphp
                @foreach($mahasiswa as $mahasiswa)
                <tr>
                    <td>{{$npm++}}</td>
                    <td>{{$nama}}</td>
                    <td>{{$kelas}}</td>
                    <td>{{$angkatan}}</td>
                    <td>{{$prodi}}</td>
                    <td>
                        @if($mahasiswa->cover !== null)
                            <img src="{{ asset('storage/cover_mahasiswa/'.$mahasiswa->cover) }}" width="100px"/>
                        @else
                            [Gambar tidak tersedia]
                        @endif
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<div class="modal fade" id="tambahMahasiswaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('mahasiswa') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" class="form-control" name="npm" id="npm" required/>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required/>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas" required/>
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control" name="angkatan" id="angkatan" required/>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" class="form-control" name="prodi" id="prodi" required/>
                    </div>
                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control" name="cover" id="cover" required/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
@endsection