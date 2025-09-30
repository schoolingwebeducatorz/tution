<div>
    <div class="mt-4">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white d-flex align-items-center">
            <i class="fa fa-calendar fa-lg me-2"></i>
            Trainer Schedule
        </div>

        <div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Time Slot</th>
                            @foreach($days as $day)
                                <th>{{ $day->day }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($timeSlots as $slot)
                            <tr>
                                <td class="fw-bold bg-light">
                                    {{ $slot->start }} - {{ $slot->end }}
                                </td>
                                @foreach($days as $day)
                                    @php
                                        $schedule = $trainer?->timetable
                                            ->where('timeschedule.day_id', $day->id)
                                            ->where('timeschedule.timetable_id', $slot->id)
                                            ->first();
                                    @endphp
                                    <td>
                                        @if($schedule)
                                            <i class="fa fa-check-circle text-success"></i><br>
                                            <small class="text-muted">
                                                {{ $schedule->status ? 'Active' : 'Inactive' }}
                                            </small>
                                            <div class="mt-1">
                                                @if($schedule->timeschedule && $schedule->timeschedule->enrollschedule)
                                                    @foreach($schedule->timeschedule->enrollschedule as $enroll)
                                                        <span class="badge bg-info text-dark mb-1">
                                                            {{ $enroll->enrollment->student->name ?? 'Student' }}
                                                        </span>
                                                    @endforeach
                                                @endif
                                            </div>
                                        @else
                                            <i class="fa fa-times-circle text-muted"></i>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>