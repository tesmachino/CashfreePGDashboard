@extends('cashfree::layout')
@section('content')
<style>
    .container {
        margin-bottom: 60px;
        border: 1px solid rgba(0, 0, 0, .4);
        padding: 40px;
        border-radius: 6px;
    }

    .datepicker td,
    .datepicker th {
        width: 2.5em;
        height: 2.5em;
    }
</style>
<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Settlement Status</h1>
    </div>
    <div class="container">
        <form action="{{route('settlement-single')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <fieldset>
                            <div class="form-group" id="box1">
                                <label for="settlement_id">Settlement Id</label>
                                <input type="text" name="settlement_id" required class="form-control form-control-lg"
                                    required id="settlement_id" value="">
                            </div>
                        </fieldset>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>

</div>
@section('scripts')

@endsection
@endsection