@extends('app')
@section('content')
    <h1><?php
    // First day of this month
    // echo date('D',mktime(0, 0, 0, date('m'), 1));
    // echo date('N',mktime(0, 0, 0, date('m'), 1));
    ?></h1>
    {{-- <div class="flex flex-col items-center mx-5 bg-gray-400">
        <h1 class="text-3xl text-center" id="year"></h1>
        @php
            $totalDays = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
            $days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            $startDay = date('N',mktime(0, 0, 0, date('m'), 1));
        @endphp
        <div class="w-96 flex gap-2 items-center flex-wrap">
            @for ($i = 0; $i <= count($days) - 1; $i++)
                <p class="w-12 h-12 bg-red-300 text-center">{{ $days[$i] }}</p>
            @endfor

            @for ($i = 1; $i <= $startDay; $i++)
                <p class="w-12 h-12 bg-red-300"></p>
            @endfor

            @for ($i = 1; $i <= $totalDays; $i++)
                <p class="w-12 h-12 bg-red-300 text-center">{{ $i }}</p>
            @endfor
        </div>
    </div> --}}

    <div class="calendar">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">February</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2021</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days"></div>
        </div>
        <div class="calendar-footer">
            <div class="toggle">
                <span>Dark Mode</span>
                <div class="dark-mode-switch">
                    <div class="dark-mode-switch-ident"></div>
                </div>
            </div>
        </div>
        <div class="month-list"></div>
    </div>


@endsection
{{-- <div class="w-96 flex gap-2 flex-wrap">
            <div class="w-12 h-12 bg-red-300"></div>
            <div class="w-12 h-12 bg-red-300"></div>
            <div class="w-12 h-12 bg-red-300"></div>
            <div class="w-12 h-12 bg-red-300"></div>
            <div class="w-12 h-12 bg-red-300"></div>
            <div class="w-12 h-12 bg-red-300"></div>
            <div class="w-12 h-12 bg-red-300"></div>
            <div class="w-12 h-12 bg-red-500"></div>
        </div> --}}
