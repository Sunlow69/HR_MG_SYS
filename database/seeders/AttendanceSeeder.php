<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceSeeder extends Seeder
{
    public function run(): void
    {
        $employees = User::where('role', 'employee')->get();

        if ($employees->isEmpty()) {
            $this->command->info('No employees found. Create an employee first.');
            return;
        }

        // Define a few different shift patterns HR might assign
        $shifts = [
            ['label' => 'Morning',   'start' => '06:00:00', 'end' => '14:00:00'],
            ['label' => 'Day',       'start' => '08:30:00', 'end' => '17:30:00'],
            ['label' => 'Afternoon', 'start' => '13:00:00', 'end' => '21:00:00'],
            ['label' => 'Night',     'start' => '21:00:00', 'end' => '05:00:00'],
        ];

        foreach ($employees as $index => $employee) {
            // Assign each employee a shift pattern (rotates through the list)
            $shift = $shifts[$index % count($shifts)];

            // Create 10 days of past attendance (weekdays only)
            $date = Carbon::today()->subDays(14);
            $count = 0;

            while ($count < 10) {
                if (!$date->isWeekend()) {
                    // Add small natural variation: a few minutes early/late
                    $checkInMinuteOffset = rand(-5, 10);
                    $checkOutMinuteOffset = rand(-10, 15);

                    $checkIn = Carbon::parse($shift['start'])->addMinutes($checkInMinuteOffset);
                    $checkOut = Carbon::parse($shift['end'])->addMinutes($checkOutMinuteOffset);

                    // Night shift crosses midnight, so check-out is technically "next day" time-of-day
                    $hours = $shift['label'] === 'Night'
                        ? round($checkIn->diffInMinutes(Carbon::parse('24:00:00')) / 60 + $checkOut->diffInMinutes(Carbon::parse('00:00:00')) / 60, 2)
                        : round($checkOut->diffInMinutes($checkIn) / 60, 2);

                    // Mark as late if check-in is more than 5 minutes after the shift's official start
                    $status = $checkInMinuteOffset > 5 ? 'late' : 'present';

                    Attendance::updateOrCreate(
                        [
                            'employee_id' => $employee->id,
                            'date' => $date->toDateString(),
                        ],
                        [
                            'check_in' => $checkIn->format('H:i:s'),
                            'check_out' => $checkOut->format('H:i:s'),
                            'hours' => $hours,
                            'status' => $status,
                        ]
                    );
                    $count++;
                }
                $date->addDay();
            }
        }
    }
}