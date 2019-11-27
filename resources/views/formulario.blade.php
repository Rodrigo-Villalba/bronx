@extends('master')

@section('content')

<form action="/products" method="POST" enctype="multipart/form-data" class="form-horizontal margin-large">


    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="form-horizontal-text">Name :</label>
        <div class="uk-form-controls">
            <input name="name" class="uk-input" id="form-horizontal-text" type="text" placeholder="name">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="form-horizontal-select">Descriptions :</label>
        <div class="uk-form-controls">
        <input name="description" class="uk-input" id="form-horizontal-text" type="text" placeholder="description">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="form-horizontal-select">Price :</label>
        <div class="uk-form-controls">
        <input name="price" class="uk-input" id="form-horizontal-text" type="number" placeholder="price">
        </div>
    </div>


    </div>

    <div class="form-group row">
        <div uk-form-custom>
            <input type="file">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
        </div>
    </div>

    <div class="form-group row">
        <span class="uk-text-middle"></span>
        <div uk-form-custom>
            <input type="file">
            <span class="uk-link">upload</span>
        </div>
    </div>

    <div class="form-group row" uk-margin>
        <div uk-form-custom="target: true">
            <input type="file">
            <input class="uk-input uk-form-width-medium" type="text" placeholder="" disabled>
        </div>
        <button class="uk-button uk-button-default">Submit</button>
    </div>

</form>











@endsection
