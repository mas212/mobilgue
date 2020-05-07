@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">User</h4>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        @if(!$users->isEmpty())
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">No
                                </th>
                                <th class="border-0 font-14 font-weight-medium  text-muted px-2">
                                    Nama
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Email
                                </th>
                                <th class="border-0 font-14 font-weight-medium  text-muted px-2">
                                    Operator
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            @foreach($users as $user)
                                <?php $no++;?>
                            <tr>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    {{ $no }}
                                </td>
                                <td class="text-dark border-top-0 px-2 py-4">
                                    {{ $user->name }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $user->email }}
                                </td>
                                <td class="text-dark border-top-0 px-2 py-4">
                                    {{ $user->superadmin }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ Form::model($user, array(
                                        'method' => 'PATCH',
                                        'route' => array('user.akses', $user->id))) }}
                                        {{ csrf_field() }}
                                    <select name="superadmin">
                                      <option value="0">Operator</option>
                                      <option value="1">superadmin</option>
                                    </select>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-round">Update User Akses</button>
                                  {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                          <tbody>
                            <tr>Data User kosong</tr>
                          </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .btn-danger{
        width: 100%;
    }
</style>
@endsection