@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">

            <div class="col-md-12 text-justify">

                <p>
                    Grand Jury Panel The foundation of any good design award, in addition to fair evaluation and judging by an extensive methodology, is to have a strong and expert design competition jury which provides their invaluable knowledge base and insight to evaluate the submitted entries, creating benefit and value for participants by transferring their insights and ideas in form of votes, feedbacks and suggestions. Good design award jury panels shall be multidisciplinary and comprised of recognized but most importantly experienced international designers, professors, entrepreneurs, journalists and publishers who can truly validate and evaluate design using their wisdom, experience, specialization and technical knowledge. In a good design award, every design award jury member should follow a code of conduct or as we require sign a jury agreement and shall be excluded from taking part in the competition. In addition, to avoid conflicts of interest, the jurors may not be employees of the participating companies. Furthermore to create further value to participants, the A' Design Award and Competition has introduced during its foundation, for the first time in all design award and competitions, a prejudging procedure called preliminary evaluation and checking which helps participants to get insights about their work before they participate in the design competition finals.
                </p>

                <h3 class="text-center">Grand Jury Panel</h3>

                <hr>

            </div>

        </div>

        @foreach($judges as $judge)

            <div class="row">

                <div class="col-md-4 text-center">

                    <img src="{{ Voyager::image($judge->avatar) }}" alt="{{ $judge->avatar }}" class="img-circle" width="50%">

                </div>

                <div class="col-md-8">

                    <h4>{{ $judge->name }}<br>
                        <span class="text-muted">{{ $judge->country }}</span>
                    </h4>
                    <p>{{ $judge->body }}</p>

                </div>

            </div>

            <br>

        @endforeach

    </div>

@endsection
