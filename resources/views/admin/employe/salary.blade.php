@extends('index')
@section('status')
    active
@endsection
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-8">
                    <section class="card">

                        <header class="card-header text-center bg-info  text-light">
                            Salary Status
                        </header>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Employe Name</th>
                                    <th>Salary</th>
                                    <th>Month</th>
                                    <th>Pay Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @forelse($paysalarys as $paysalary)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{($paysalary->employes)->name}}</td>
                                    <td>{{($paysalary->employes)->salary}}</td>
                                    <td>{{$paysalary->month}}</td>
                                    <td>{{$paysalary->created_at->format("jS F ,Y")}}</td>
                                </tr>
                                    @empty
                                        <tr>
                                            <td colspan="30" class="text-center text-dark">No Customar Group found</td>
                                        </tr>

                                @endforelse
                                </tbody>
                            </table>

                        </div>
                        {{$paysalarys->links()}}
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="card">

                        <header class="card-header text-center bg-info text-light">
                            Pay Employe Salary
                        </header>

                        <div class="card-body">
                            <form action="{{route('salary')}}" method="post">
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                            {{$error}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endforeach
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label for="category">Employe Name</label>
                                    <select class="form-control" name="employe_id" >
                                        <option selected disabled> Select Employe Name</option>
                                        @foreach($employes as $employe)
                                            <option value="{{$employe->id}}"> {{$employe->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category">Month</label>
                                    <select class="form-control" name="month" >
                                        <option selected value="{{\Carbon\Carbon::now()->format('F')}}">{{\Carbon\Carbon::now()->format('F')}}</option>
                                        @php
                                        $i=0;
                                        @endphp
                                        @for($i= 0 ; $i<13;$i++)
                                            <option value="{{date("F",mktime(0,0,0,$i,1,date("Y")))}}"> {{date("F",mktime(0,0,0,$i,1,date("Y")))}} </option>
                                        @endfor
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Pay Salary</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>
@endsection
