<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('inactive:time-users')->dailyAt('09:50');
