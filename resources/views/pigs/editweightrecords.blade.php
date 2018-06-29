@extends('layouts.swinedefault')

@section('title')
  Edit Weight Records
@endsection

@section('content')
  <h5 class="headline"><a href="{{$_SERVER['HTTP_REFERER']}}"><img src="{{asset('images/back.png')}}" width="2.5%"></a> Edit Weight Records: <strong>{{ $animal->registryid }}</strong></h5>
  <div class="container">
    <div class="row">
      {!! Form::open(['route' => 'farm.pig.update_weight_records', 'method' => 'post']) !!}
      <div class="col s12">
        <input type="hidden" name="animal_id" value="{{ $animal->id }}">
        <div class="row card-panel">
          <div class="row">
            <div class="col s4">
              Body Weight at 45 Days
            </div>
            <div class="col s4">
              @if(!is_null($properties->where("property_id", 45)->first()))
                <input id="body_weight_at_45_days" type="text" placeholder="Weight" name="body_weight_at_45_days" value="{{ $properties->where("property_id", 45)->first()->value }}" class="validate">
              @else
                <input id="body_weight_at_45_days" type="text" placeholder="Weight" name="body_weight_at_45_days" class="validate">
              @endif
            </div>
            <div class="col s4">
              @if(!is_null($properties->where("property_id", 58)->first()))
                <input id="date_collected_45_days" type="text" placeholder="Date Collected" name="date_collected_45_days" value="{{ $properties->where("property_id", 58)->first()->value }}" class="datepicker">
              @else
                <input id="date_collected_45_days" type="text" placeholder="Date Collected" name="date_collected_45_days" class="datepicker">
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col s4">
              Body Weight at 60 Days
            </div>
            <div class="col s4">
              @if(!is_null($properties->where("property_id", 46)->first()))
                <input id="body_weight_at_60_days" type="text" placeholder="Weight" name="body_weight_at_60_days" value="{{ $properties->where("property_id", 46)->first()->value }}" class="validate">
              @else
                <input id="body_weight_at_60_days" type="text" placeholder="Weight" name="body_weight_at_60_days" class="validate">
              @endif
            </div>
            <div class="col s4">
              @if(!is_null($properties->where("property_id", 59)->first()))
                <input id="date_collected_60_days" type="text" placeholder="Date Collected" name="date_collected_60_days" value="{{ $properties->where("property_id", 59)->first()->value }}" class="datepicker">
              @else
                <input id="date_collected_60_days" type="text" placeholder="Date Collected" name="date_collected_60_days" class="datepicker">
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col s4">
              Body Weight at 90 Days
            </div>
            <div class="col s4">
              @if(!is_null($properties->where("property_id", 69)->first()))
                <input id="body_weight_at_90_days" type="text" placeholder="Weight" name="body_weight_at_90_days" value="{{ $properties->where("property_id", 69)->first()->value }}" class="validate">
              @else
                <input id="body_weight_at_90_days" type="text" placeholder="Weight" name="body_weight_at_90_days" class="validate">
              @endif
            </div>
            <div class="col s4">
              @if(!is_null($properties->where("property_id", 70)->first()))
                <input id="date_collected_90_days" type="text" placeholder="Date Collected" name="date_collected_90_days" value="{{ $properties->where("property_id", 70)->first()->value }}" class="datepicker">
              @else
                <input id="date_collected_90_days" type="text" placeholder="Date Collected" name="date_collected_90_days" class="datepicker">
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col s4">
              Body Weight at 150 Days
            </div>
            <div class="col s4">
              @if(!is_null($properties->where("property_id", 90)->first()))
                <input id="body_weight_at_150_days" type="text" placeholder="Weight" name="body_weight_at_150_days" value="{{ $properties->where("property_id", 90)->first()->value }}" class="validate">
              @else
                <input id="body_weight_at_150_days" type="text" placeholder="Weight" name="body_weight_at_150_days" class="validate">
              @endif
            </div>
            <div class="col s4">
              @if(!is_null($properties->where("property_id", 91)->first()))
                <input id="date_collected_150_days" type="text" placeholder="Date Collected" name="date_collected_150_days" value="{{ $properties->where("property_id", 91)->first()->value }}" class="datepicker">
              @else
                <input id="date_collected_150_days" type="text" placeholder="Date Collected" name="date_collected_150_days" class="datepicker">
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col s4">
              Body Weight at 180 Days
            </div>
            <div class="col s4">
              @if(!is_null($properties->where("property_id", 47)->first()))
                <input id="body_weight_at_180_days" type="text" placeholder="Weight" name="body_weight_at_180_days" value="{{ $properties->where("property_id", 47)->first()->value }}" class="validate">
              @else
                <input id="body_weight_at_180_days" type="text" placeholder="Weight" name="body_weight_at_180_days" class="validate">
              @endif
            </div>
            <div class="col s4">
              @if(!is_null($properties->where("property_id", 60)->first()))
                <input id="date_collected_180_days" type="text" placeholder="Date Collected" name="date_collected_180_days" value="{{ $properties->where("property_id", 60)->first()->value }}" class="datepicker">
              @else
                <input id="date_collected_180_days" type="text" placeholder="Date Collected" name="date_collected_180_days" class="datepicker">
              @endif
            </div>
          </div>
        </div>
        <div class="row center">
          <button class="btn waves-effect waves-light green darken-3" type="submit" onclick="Materialize.toast('Successfully updated!', 4000)">Update
            <i class="material-icons right">done</i>
          </button>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection