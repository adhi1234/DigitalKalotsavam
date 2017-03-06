@extends('layouts.app')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <link href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" />
   <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- DATA TABLES DONOT TOUCH-->

        <script>
        $(document).ready(
         function() {
            $('#registration').dataTable();
         }
        )
    </script>


<div class="container" style="width:95%;">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"> <i class="fa fa-list-alt" aria-hidden="true"></i> View Team Registration</div>
                <div class="panel-body">

                    <div style="overflow-x:auto;">
                        <table id="registration" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Rollno</th>
                                <th>Email</th>
                                <th>Classical dance boys</th>
                                <th>Classical dance girls</th>
                                <th>Semi classical dance boys</th>
                                <th>Semi classical dance girls</th>
                                <th>Fancy dress boys</th>
                                <th>Fancy dress girls</th>
                                <th>Monoact boys</th>
                                <th>Monoact girls</th>
                                <th>Mimicry boys</th>
                                <th>Mimicry girls</th>
                                <th>Kadhaprasangam</th>
                                <th>Shakespearean monologue</th>
                                <th>Elocution english</th>
                                <th>Elocution malayalam</th>
                                <th>Elocution telugu</th>
                                <th>Elocution sanskrit</th>
                                <th>Recitation english</th>
                                <th>Recitation malayalam</th>
                                <th>Recitation hindi</th>
                                <th>Recitation telugu</th>
                                <th>Recitation sanskrit</th>
                                <th>Classical music boys</th>
                                <th>classical music girls</th>
                                <th>Light music boys</th>
                                <th>Light music girls</th>
                                <th>Western solo boys</th>
                                <th>Western solo girls</th>
                                <th>Instrument percussion</th>
                                <th>Instrument wind</th>
                                <th>Instrument string</th>
                                <th>Instrument piano</th>
                                <th>Karaoke boys</th>
                                <th>Karaoke girls</th>
                                <th>Ashtapadi boys</th>
                                <th>Ashtapadi girls</th>
                                <th>Mappilapattu boys</th>
                                <th>Mappilapattu girls</th>
                                <th>Kadhakali sangeetham boys</th>
                                <th>Kadhakali sangeetham girls</th>
                                <th>Story writing english</th>
                                <th>Story writing malayalam</th>
                                <th>Essay writing english</th>
                                <th>Essay writing malayalam</th>
                                <th>Essay writing tamil</th>
                                <th>Poetry writing english</th>
                                <th>Poetry writing malayalam</th>
                                <th>Poetry writing telugu</th>
                                <th>Hindi essay</th>
                                <th>Water coloring</th>
                                <th>Recitation malayalam</th>
                                <th>Pencil drawing</th>
                                <th>Paper collage</th>
                                <th>Face painting</th>
                                <th>Cartooning</th>
                                <th>Clay modeling</th>
                                <th>Rangoli</th>

                                <th>Total Events</th>

                              </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach -->
                                @foreach($stud as $s)
                                    @php $total=0; @endphp
                                    <tr>
                                    <th>{{ $s->name }}</th>
                                    <th>{{ $s->rollno }}</th>
                                    <th>{{$s->email}}</th>
                                    <th>@if ($s->classical_dance_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->classical_dance_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->semi_classical_dance_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->semi_classical_dance_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->fancy_dress_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->fancy_dress_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->monoact_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->monoact_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->mimicry_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->mimicry_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->kadhaprasangam)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->shakespearean_monologue)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->elocution_english)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->elocution_malayalam)
                                      @php $total++; @endphp
                                      <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->elocution_telugu)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->elocution_sanskrit)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->recitation_english)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->recitation_malayalam)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->recitation_hindi)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->recitation_telugu)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->recitation_sanskrit)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->classical_music_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->classical_music_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->light_music_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->light_music_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->western_solo_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->western_solo_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->instrument_percussion)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->instrument_wind)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->instrument_string)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->instrument_piano)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->karaoke_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->karaoke_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->ashtapadi_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->ashtapadi_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->mappilapattu_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->mappilapattu_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->kadhakali_sangeetham_boys)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->kadhakali_sangeetham_girls)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->story_writing_english)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->story_writing_malayalam)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->essay_writing_english)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->essay_writing_malayalam)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->essay_writing_tamil)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->poetry_writing_english)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->poetry_writing_malayalam)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->poetry_writing_telugu)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->hindi_essay)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->water_cooling)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->cartooning)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->pencil_drawing)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->paper_collage)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->face_painting)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->rangoli)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>

                                    <th>@if ($s->clay_modeling)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>
                                    <th>@if ($s->clay_modeling)
                                        @php $total++; @endphp
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif</th>
                                    <th> @php echo $total;@endphp </th>
                                </tr>
                                @endforeach
                                    <!-- End -->
                          </tbody>
                          </table>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-sort" aria-hidden="true"></i> Sort Data<span class="badge"></span></div>
                <div class="panel-body">
                    <form class="dropdown" action="/manage/" method="get">
                        <select name="sort" id="sort" onchange="this.form.submit()">
                            <option value="">Select an Item</option>
                            <option value="classical_dance_boys">Classical Dance Boys</option>
                            <option value="classical_dance_girls">Classical Dance Girls</option>
                            <option value="4">Four</option>
                        </select>
                    </form>
                    <br>
                    @if($count)<h4> Total Participants for {{$name}} : {{$count}}</h4>@endif
                    <br>
                    <div>
                        <table id="reg" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Rollno</th>
                                <th>Email</th>
                              </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach -->
                            @if($sort)
                                @foreach($sort as $s)
                                <tr>
                                    <th>{{$s->name}}</th>
                                    <th>{{$s->rollno}}</th>
                                    <th>{{$s->email}}</th>
                                </tr>
                                @endforeach
                            @endif
                                    <!-- End -->
                          </tbody>
                          </table>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-warning">
                <div class="panel-heading">Warning List<span class="badge"></span></div>
                <div class="panel-body">
                    <div>
                        <table id="reg" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Rollno</th>
                                <th>Type</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($dl as $s)
                                <tr>
                                    <th>{{$s->name}}</th>
                                    <th>{{$s->rollno}}</th>
                                    <th>{{$s->type}}</th>

                                </tr>
                            @endforeach
                          </tbody>
                          </table>
                      </div>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection
