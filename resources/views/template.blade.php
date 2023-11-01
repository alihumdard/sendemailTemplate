<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-900 leading-tight">
            {{ __('Templates Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card text-center my-3">
                        <div class="card-header">
                            <h3 class="card-title bold pt-1">Save Template For User</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('templates') }}" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="{{$template->id ?? ''}}">
                                @csrf
                                <h3 class="text-danger text-bold" style="font-weight: bolder;">*Fill the Form correctly</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="user_id" class="form-label" style="font-weight: 600;">Client Name</label>
                                            <select required class="form-select rounded" id="user_id" name="user_id">
                                                <option value="" disabled selected>Select client name</option>
                                                @foreach($user as $val)
                                                <option value="{{ $val['id'] }}" @if(old('user_id')==$val['id']) selected @elseif(isset($template->user_id) && $template->user_id == $val['id'] ) selected @endif>{{ $val['name'] }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />

                                        </div>

                                        <!-- <div class="mb-3">
                                            <label for="template_type" class="form-label" style="font-weight: 600;">Template Type</label>
                                            <select required class="form-select rounded" id="template_type" name="template_type">
                                                <option value="" disabled selected>Select template type</option>
                                                <option value="Default">Default</option>
                                                <option value="Temporary">Temporary</option>
                                                <option value="Permanent">Permanent</option>
                                            </select>
                                        </div> -->

                                        <div class="mb-3">
                                            <label for="template_name" class="form-label" style="font-weight: 600;"> Template Name</label>
                                            <input type="text" value="{{(old('name')) ? old('name') : $template->name ?? ''  }}" required="" class="rounded form-control" id="template_name" name="name" placeholder="Enter template name">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="file_type" class="form-label" style="font-weight: 600;">Template File Type</label>
                                            <select required class="form-select rounded" id="file_type" name="file_type">
                                                <option value="" disabled selected>Select file type</option>
                                                @foreach($templates_types as $key => $value)
                                                <option value="{{ $key }}" @if(old('file_type')==$key) selected @elseif(isset($template->file_type) && $template->file_type == $key) selected @endif>{{ $value }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('file_type')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="template_url" class="form-label" style="font-weight: 600;"> Template URL: (https://...)</label>
                                            <input value="{{(old('url')) ? old('url') : $template->url ?? ''}}" type="url" required="" class="rounded form-control" id="template_url" name="url" placeholder="Enter template url">
                                            <x-input-error :messages="$errors->get('url')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="submit" class=" {{($template->id ?? '') ? ' bg-primary' : ' bg-success'}} btn btn-success">{{($template->id ?? '') ? 'Update' : 'Create New'}} Template</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-5 leading-tight">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="table-responsive-lg my-2">
                    <table class="table mt-3" id="usertable">
                        <thead class="table-dark ">
                            <tr>
                                <th style="text-align: center;">#</th>
                                <th style="text-align: center;">Client Name</th>
                                <th style="text-align: center;">Template Name</th>
                                <th style="text-align: center;">Tempalte Url</th>
                                <th style="text-align: center;">Tempalte Type</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-data">

                            <!-- <tr>
                                        <td colspan="6" rowspan="5">
                                            <div class="d-flex justify-content-center">
                                                <div class="spinner-border" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                            @foreach($templates as $key => $val)
                            <tr>
                                <td style="text-align: center;">{{++$key}}</td>
                                <td style="text-align: center;">{{ $val['user']['name'] ?? ''}}</td>
                                <td style="text-align: center;">{{ $val['name'] ?? ''}}</td>
                                <td style="text-align: center;"><a href="{{ $val['url'] ?? ''}}" target="_blank" class="no-underline font-semibold text-info"> View Template </a></td>
                                <td style="text-align: center;">{{ $templates_types[$val['file_type']] ?? ''}}</td>
                                <td style="text-align: center;">
                                    <button class="btn{{($val['status'] == 'Deactive') ? ' btn-warning' : ' btn-success'}}  btn-sm rounded-3 bg-success" type="button"> {{ $val['status'] ?? ''}}</button>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item rounded">
                                            <a href="{{ route('templates', ['id' => $val['id']]) }}" class="btn btn-success btn-sm rounded  bg-primary" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="<?= '/deleteTemplate/' . $val['id'] ?>" class="btn btn-danger btn-sm rounded  bg-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#usertable').DataTable({
                select: true
            });
        });
    </script>

    @include('apicall')
</x-app-layout>