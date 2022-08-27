@extends('style')
@section('content')
    <div class="card">
        <div class="card-header">{{__('Add exam')}}</div>
        <div class="card-body">
            <form action="">
                <div class="row">

                    <div class="col col-sm-3 p-3">
                        <div class="form-group">
                            <label for="email">{{__('Title')}} :</label>
                            <input type="text" class="form-control" id="email" placeholder="{{__('Enter your exam title')}}">
                        </div>
                    </div>


                    <div class="col col-sm-2 p-3">
                        <div class="form-group">
                            <label for="email">{{__('Total score')}} :</label>
                            <input type="number" class="form-control" id="email" value="20">
                        </div>
                    </div>


                    <div class="col col-sm-3 p-3">
                        <div class="form-group">
                            <label for="email">{{__('Start of exam')}} :</label>
                            <input type="date" class="form-control" id="email">
                        </div>
                    </div>

                    <div class="col col-sm-3 p-3">
                        <div class="form-group">
                            <label for="email">{{__('End of exam')}} :</label>
                            <input type="date" class="form-control" id="email" >
                        </div>
                    </div>

                    <div class="col col-sm-2 p-3">
                        <div class="form-group">
                            <label for="email">{{__('Duration of exam')}} :</label>
                            <input type="number" class="form-control" id="email" value="20">
                        </div>
                    </div>

                    <div class="col col-sm-10 p-3">
                        <div class="form-group">
                            <label for="email">{{__('Description')}} :</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col col-sm-10 p-3">
                        <button class="btn btn-success">{{__('Add')}}</button>
                    </div>

                </div>
            </form>
        </div>
    </div>


@endsection
