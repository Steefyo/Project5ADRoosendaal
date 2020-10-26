@extends('master')

@section('content')

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div class="mt-4">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="grid grid-cols-1 mr-8 md:grid-cols-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                                <span class="text-gray-900 dark:text-white">Welke Lego set lijkt het meest op wat ik heb?</span>
                                @if($errors->any())
                                    <br><br>
                                    <span style="color: red">{{ $errors->first() }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <form action="set/search" method="POST">
                                    @csrf
                                    <input type="text" name="id" id="id" placeholder="{{ $set->set_num }}" style="width: auto; height: 30px; font-size: 16px; border-radius: 0.5em;">
                                    <button type="submit" class="search"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{--
                    
                        <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-8 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Welke Lego set past het best bij mijn smaak?</div>
                        </div>

                        <div class="ml-12">
                            <a href="questionnaire">
                                <button class="question">Vragenlijst</button>
                            </a>
                        </div>
                    </div>
                    
                    --}}

                </div>

                <div class="p-6 ml-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <a href="set/{{ $set->set_num }}" >
                    
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">{{ $set->set_num }}</div>
                            </div>
    
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    @php
                                        $img_check = 'https://images.brickset.com/sets/images/' . $set->set_num . '.jpg';
                                        $img_default = 'http://localhost/lesser/public/img/default.png';
                                        if (@getimagesize($img_check)) {
                                            echo "<img src='" . $img_check . "' style='height: 100%; width: 100%; object-fit: contain; border-radius: 0.5em;'>";
                                        } else {
                                            echo "<img src='" . $img_default . "' style='height: 100%; width: 100%; object-fit: contain; border-radius: 0.5em;'>";
                                        }
                                    @endphp
                                </div>
                            </div>
                        </div>
    
                    </a>
                </div>
            </div>

            

        </div>

    </div>

@endsection