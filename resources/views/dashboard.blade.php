
@extends('layouts.admin')

@section('content')
@include ('partial.sidebar')
<div class="dashboard-body">

    <div class="row gy-4">
        <div class="col-lg-9">
            <!-- Widgets Start -->
            <div class="row gy-4">
                <div class="col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            @if($formateurs->count()> 0)
                            <h4 class="mb-2">{{$formateurs->count()}}</h4>
                         
                            @else
                            <h4 class="mb-2">0</h4>
                            
                            @endif

                            <span class="text-gray-600">Formateurs</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-600 text-white text-2xl"><i class="ph-fill ph-book-open"></i></span>
                                <div id="complete-course" class="remove-tooltip-title rounded-tooltip-value"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                           
                            <h4 class="mb-2">0</h4>
                            
                            
                            <span class="text-gray-600">Ressource</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-two-600 text-white text-2xl"><i class="ph-fill ph-certificate"></i></span>
                                <div id="earned-certificate" class="remove-tooltip-title rounded-tooltip-value"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            @if($formation->count()> 0)
                            <h4 class="mb-2">{{$formation->count()}}</h4>
                         
                            @else
                            <h4 class="mb-2">0</h4>
                            
                            @endif
                            <span class="text-gray-600">Cours</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-purple-600 text-white text-2xl"> <i class="ph-fill ph-graduation-cap"></i></span>
                                <div id="course-progress" class="remove-tooltip-title rounded-tooltip-value"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            @if($apprenants->count()> 0)
                            <h4 class="mb-2">{{$apprenants->count()}}</h4>
                         
                            @else
                            <h4 class="mb-2">0</h4>
                            
                            @endif
                            <span class="text-gray-600">Apprenants</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-warning-600 text-white text-2xl"><i class="ph-fill ph-users-three"></i></span>
                                <div id="community-support" class="remove-tooltip-title rounded-tooltip-value"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->

            <!-- Top Course Start -->
            
            <!-- Top Course End -->

            <!-- Top Course Start -->
            <div class="card mt-24">
                <div class="card-body">
                    <div class="mb-20 flex-between flex-wrap gap-8">
                        <h4 class="mb-0"> Les meilleurs cours</h4>
                        <a href="{{url('formations')}}" class="text-13 fw-medium text-main-600 hover-text-decoration-underline">Voir plus</a>
                    </div>

                    <div class="row g-20">
                       @foreach( $formations as $value)
                       <div class="col-lg-4 col-sm-6">
                        <div class="card border border-gray-100">
                            <div class="card-body p-8">
                                <a href="#" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                    <img src="{{ asset('assets/uploads/formation_images/'.$value->image_url) }}" alt="Course Image">
                                </a>
                                <div class="p-8">
                                    <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-16">{{$value->category->name ?? ""}}</span> 
                                    
                                    <h5 class="mb-0"><a href="" class="hover-text-main-600">{{$value->titre}}</a></h5>

                                    <div class="flex-align gap-8 flex-wrap mt-16">

                                        <div>
                                            <span class="text-gray-600 text-13">Difficulte: <a href="#" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">{{$value->difficulete->name ??""}}</a> </span>
                                        </div>
                                    </div>

                                    <div class="flex-align gap-8 mt-12 pt-12 border-top border-gray-100">
                                       
                                    </div>

                                    <div class="flex-between gap-4 flex-wrap mt-4"  >
                                        <span class="text-15 " style="
                                        display: -webkit-box;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                    ">{{$value->description}}</span>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       @endforeach
                       
                    </div>
                </div>
            </div>
            <!-- Top Course End -->
        </div>

        <div class="col-lg-3">
            <!-- Calendar Start -->
            <div class="card">
                <div class="card-body">
                    <div class="calendar">
                        <div class="calendar__header">
                            <button type="button" class="calendar__arrow left"><i class="ph ph-caret-left"></i></button>
                            <p class="display h6 mb-0">""</p>
                            <button type="button" class="calendar__arrow right"><i class="ph ph-caret-right"></i></button>
                        </div>

                        <div class="calendar__week week">
                            <div class="calendar__week-text">Di</div>
                            <div class="calendar__week-text">Lun</div>
                            <div class="calendar__week-text">Mar</div>
                            <div class="calendar__week-text">Mer</div>
                            <div class="calendar__week-text">Jeu</div>
                            <div class="calendar__week-text">Vend</div>
                            <div class="calendar__week-text">Sam</div>
                        </div>
                        <div class="days"></div>
                    </div>
                </div>
            </div>
            <!-- Calendar End -->

          
        </div>

    </div>
</div>
@endsection






{{--  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>  --}}

