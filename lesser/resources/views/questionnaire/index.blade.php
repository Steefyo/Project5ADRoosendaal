@extends('master')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-1">
            
            <div class="p-6">

                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="home" class="text-gray-900 dark:text-white"><i class='fa fa-arrow-left'></i><span>   </span>Terug</a>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <span class="text-gray-900 dark:text-white">{{ $question_type }} spreekt je het meest aan?</span>
                    </div>
                </div>
                
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3">
                @if ($answer_1)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold question">
                                <button class="question">{{ $answer_1 }}</button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($answer_2)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold question">
                                <button class="question">{{ $answer_2 }}</button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($answer_3)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold question">
                                <button class="question">{{ $answer_3 }}</button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($answer_4)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold question">
                                <button class="question">{{ $answer_4 }}</button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($answer_5)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold question">
                                <button class="question">{{ $answer_5 }}</button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($answer_6)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold question">
                                <button class="question">{{ $answer_6 }}</button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($answer_7)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold question">
                                <button class="question">{{ $answer_7 }}</button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($answer_8)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold question">
                                <button class="question">{{ $answer_8 }}</button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($answer_9)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold question">
                                <button class="question">{{ $answer_9 }}</button>
                            </div>
                        </div>
                    </div>
                @endif
            
            </div>

        </div>
    </div>

</div>

@endsection