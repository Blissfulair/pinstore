@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Scholarship Applications
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="example">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Reg Number</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Subjects</th>
                            <th class="hidden-phone">Photo</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($scholarships) > 0 )
                                @foreach($scholarships as $i=>$scholarship)
                                    <tr>
                                        <td>{{ ++$i  }}</td>
                                        <td>{{ $scholarship->name }}</td>
                                        <td>{{ $scholarship->reg_number }}</td>
                                        <td>{{ $scholarship->email }}</td>
                                        <td>{{ $scholarship->phone_num }}</td>
                                        <td>{{ \App\Subject::subject($scholarship->subject1).', '.\App\Subject::subject($scholarship->subject2).', '.\App\Subject::subject($scholarship->subject3).', '.\App\Subject::subject($scholarship->subject4) }}</td>
                                        <td>
                                            <img style="width:29px;height:29px;" src="{{ asset('images/application/'.$scholarship->image) }}" alt=""/>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                        <tr>
                        <th>S/N</th>
                            <th>Name</th>
                            <th>Reg Number</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Subjects</th>
                            <th class="hidden-phone">Photo</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection