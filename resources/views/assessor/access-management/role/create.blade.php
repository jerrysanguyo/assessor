@extends('assessor.layouts.master')
@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Create Role </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('role.index') }}">Manage Roles</a></li>
                        <li class="breadcrumb-item active">Create Role</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <!-- Form Card -->
                <div class="col-lg-12">
                    <div class="card card-dark card-outline">
                        <div class="card-body">
                            <form action="{{ route('role.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Enter name" required>
                                </div>
                                <div class="form-group">
                                    <label for="permissions">Permissions</label>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" id="select-all" class="form-check-input">
                                        <label class="form-check-label font-weight-bold" for="select-all">Select All</label>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        @php
                                            $permissions = [
                                                'Addons' => [
                                                    'Addon View',
                                                    'Addon Install',
                                                    'Addon Update',
                                                    'Addon Status Change',
                                                    'Addon Remove',
                                                ],
                                                'Admin' => [
                                                    'Admin View',
                                                    'Admin Create',
                                                    'Admin Store',
                                                    'Admin Edit',
                                                    'Admin Update',
                                                    'Admin Delete',
                                                ],
                                                'Admin Profile' => [
                                                    'Admin Profile View',
                                                    'Admin Profile Edit',
                                                    'Admin Profile Update',
                                                    'Admin Profile Delete',
                                                ],
                                                'Badges' => ['Badge Management'],
                                            ];
                                        @endphp
                                        @foreach ($permissions as $group => $perms)
                                         <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-check d-flex align-items-center mb-2">
                                                    <input type="checkbox" id="group-{{ $group }}" class="form-check-input group-checkbox mr-2">
                                                    <label class="form-check-label font-weight-bold" for="group-{{ $group }}">{{ $group }}</label>
                                                </div>
                                                <div class="col-lg-12">
                                                    @foreach ($perms as $index => $perm)
                                                        <div class="form-check {{ $index === 0 ? 'd-inline-flex align-items-center' : '' }}">
                                                            <input type="checkbox" name="permissions[]" value="{{ $perm }}" class="form-check-input group-item-{{ $group }} mr-2">
                                                            <label class="form-check-label">{{ $perm }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                         </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="text-right">
                                    <a href="{{ route('role.index') }}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Select/Deselect All Permissions
            $('#select-all').on('change', function() {
                $('input[type="checkbox"]').prop('checked', this.checked);
            });

            // Select/Deselect Group Permissions
            $('.group-checkbox').on('change', function() {
                let group = $(this).attr('id').replace('group-', '');
                $('.group-item-' + group).prop('checked', this.checked);
            });

            // Ensure Parent Group Checkbox is Checked When Items Are
            $('input[type="checkbox"]').not('.group-checkbox, #select-all').on('change', function() {
                let group = $(this).attr('class').replace('form-check-input group-item-', '');
                if (!this.checked) {
                    $('#group-' + group).prop('checked', false);
                    $('#select-all').prop('checked', false);
                } else {
                    let allChecked = $('.group-item-' + group).length === $('.group-item-' + group +
                        ':checked').length;
                    $('#group-' + group).prop('checked', allChecked);
                    $('#select-all').prop('checked', $('input[type="checkbox"]').not('#select-all')
                        .length === $('input[type="checkbox"]:checked').not('#select-all').length);
                }
            });
        });
    </script>
@endpush
