@extends('master')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            
            <div class="p-6">
                
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="../home" class="text-gray-900 dark:text-white"><i class='fa fa-arrow-left'></i><span>   </span>Terug</a></div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <table>
                            <tr>
                                <td>Naam:</td>
                                <td>{{ $set->name }}</td>
                            </tr>
                            <tr>
                                <td>Set nummer:</td>
                                <td>{{ $set->set_num }}</td>
                            </tr>
                            <tr>
                                <td>Thema:</td>
                                <td>{{ $set->theme->name }}</td>
                            </tr>
                            <tr>
                                <td>Year:</td>
                                <td>{{ $set->year }}</td>
                            </tr>
                            <tr>
                                <td>Bouwstenen:</td>
                                <td>{{ $set->num_parts }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="p-6">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        &nbsp;

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

        </div>

        <div class="grid grid-cols-1 md:grid-cols-1">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ $set->set_num }}/related" class="text-gray-900 dark:text-white"><i class='fa fa-filter'></i><span>   </span>Zoek gerelateerde producten</a></div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection