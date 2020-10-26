@extends('master')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-1">
            
            <div class="p-6">

                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="../{{ $set->set_num }}" class="text-gray-900 dark:text-white"><i class='fa fa-arrow-left'></i><span>   </span>Terug</a>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <span class="text-gray-900 dark:text-white">Gerelateerde resultaten op</span><br>
                        <span class="text-gray-900 dark:text-white">Set: {{ $set->name }}</span><br>
                        <span class="text-gray-900 dark:text-white">Categorie: {{ $set->theme->name }}</span>
                    </div>
                </div>
                
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <span class="text-gray-900 dark:text-white">{{ $set_related[1]->set_num }}</span>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <span class="text-gray-900 dark:text-white">{{ $set_related[2]->set_num }}</span>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <span class="text-gray-900 dark:text-white">{{ $set_related[3]->set_num }}</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <a href="../{{ $set_related[1]->set_num }}">
                                @php
                                    $img_check = 'https://images.brickset.com/sets/images/' . $set_related[1]->set_num . '.jpg';
                                    $img_default = 'http://localhost/lesser/public/img/default.png';
                                    if (@getimagesize($img_check)) {
                                        echo "<img src='" . $img_check . "' style='height: 100%; width: 100%; object-fit: contain; border-radius: 0.5em;'>";
                                    } else {
                                        echo "<img src='" . $img_default . "' style='height: 100%; width: 100%; object-fit: contain; border-radius: 0.5em;'>";
                                    }
                                @endphp
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <a href="../{{ $set_related[2]->set_num }}">
                                @php
                                    $img_check = 'https://images.brickset.com/sets/images/' . $set_related[2]->set_num . '.jpg';
                                    $img_default = 'http://localhost/lesser/public/img/default.png';
                                    if (@getimagesize($img_check)) {
                                        echo "<img src='" . $img_check . "' style='height: 100%; width: 100%; object-fit: contain; border-radius: 0.5em;'>";
                                    } else {
                                        echo "<img src='" . $img_default . "' style='height: 100%; width: 100%; object-fit: contain; border-radius: 0.5em;'>";
                                    }
                                @endphp
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <a href="../{{ $set_related[3]->set_num }}">
                                @php
                                    $img_check = 'https://images.brickset.com/sets/images/' . $set_related[3]->set_num . '.jpg';
                                    $img_default = 'http://localhost/lesser/public/img/default.png';
                                    if (@getimagesize($img_check)) {
                                        echo "<img src='" . $img_check . "' style='height: 100%; width: 100%; object-fit: contain; border-radius: 0.5em;'>";
                                    } else {
                                        echo "<img src='" . $img_default . "' style='height: 100%; width: 100%; object-fit: contain; border-radius: 0.5em;'>";
                                    }
                                @endphp
                            </a>
                        </div>
                    </div>
                </div>
            
            </div>

        </div>
    </div>

</div>

@endsection