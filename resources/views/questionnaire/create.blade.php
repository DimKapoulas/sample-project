@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaires/create" method="post">
                    
                        @csrf


                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
                            <small id="titleHelp" class="form-text text-muted">Enter title for your questionnaire</small>
                        </div>

                        <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <input type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter purpose">
                            <small id="purposeHelp" class="form-text text-muted">Enter the questionnaire's purppose</small>
                        </div>

                        <button type="submit" class="btn btn-dark">Create Questionnaire</button>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
